<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Harvest;

class HarvestController extends Controller
{
    public function index()
    {
        $data=Harvest::orderBy('id','desc')->get();
        return view('employee.index',['data'=>$data]);
    }

    public function create()
    {
        $data=Department::orderBy('id','desc')->get();
        return view('employee.create',['departments'=>$data]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'date'=>'required',
            'fish_name'=>'required',
            // 'pond_size'=>'required',
        ]);

        $data=new Harvest();
        $data->department_id=$request->depart;
        $data->date=$request->date;
        $data->fish_name=$request->fish_name;
        // $data->pond_size=$request->pond_size;
        $data->save();

        return redirect('harvest/create')->with('msg','Data has been submitted');
    }

    public function show($id)
    {
        $data=Harvest::find($id);
        return view('employee.show',['data'=>$data]);
    }

    public function edit($id)
    {
        $departs=Department::orderBy('id','asc')->get();
        $data=Harvest::find($id);
        return view('employee.edit',['departs'=>$departs,'data'=>$data]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'date'=>'required',
            'fish_name'=>'required',
            // 'pond_size'=>'required',
        ]);

        $data=Harvest::find($id);
        $data->department_id=$request->depart;
        $data->date=$request->date;
        $data->fish_name=$request->fish_name;
        // $data->pond_size=$request->pond_size;
        $data->save();

        return redirect('harvest/'.$id.'/edit')->with('msg','Data has been submitted');
    }

    public function destroy($id)
    {
        Harvest::where('id',$id)->delete();
        return redirect('harvest');
    }
}
