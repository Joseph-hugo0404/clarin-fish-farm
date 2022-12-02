<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Harvest;
class EmployeeContoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Harvest::orderBy('id','desc')->get();
        return view('employee.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=Department::orderBy('id','desc')->get();
        return view('employee.create',['departments'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'date'=>'required',
            'fish_name'=>'required',
            'pond_size'=>'required',
        ]);

        $data=new Harvest();
        $data->department_id=$request->depart;
        $data->date=$request->date;
        $data->fish_name=$request->fish_name;
        $data->pond_size=$request->pond_size;
        $data->save();

        return redirect('employee/create')->with('msg','Data has been submitted');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=Harvest::find($id);
        return view('employee.show',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $departs=Department::orderBy('id','asc')->get();
        $data=Harvest::find($id);
        return view('employee.edit',['departs'=>$departs,'data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'date'=>'required',
            'fish_name'=>'required',
            'pond_size'=>'required',
        ]);

        $data=Harvest::find($id);
        $data->department_id=$request->depart;
        $data->date=$request->date;
        $data->fish_name=$request->fish_name;
        $data->pond_size=$request->pond_size;
        $data->save();

        return redirect('employee/'.$id.'/edit')->with('msg','Data has been submitted');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Harvest::where('id',$id)->delete();
        return redirect('employee');
    }
}
