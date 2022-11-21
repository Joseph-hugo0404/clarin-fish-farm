<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Price;
use Carbon\Carbon;
use DataTables;

use Hash;

use DB;

use Illuminate\Support\Facades\Auth;

class PriceController extends Controller
{
    public function construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('price');
    }

    function fetch_all(Request $request)
    {
        if($request->ajax())
        {
            $data = Price::all();

            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        return '<a href="/price/edit/'.$row->id.'" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>&nbsp;<button type="button" class="btn btn-danger btn-sm delete" data-id="'.$row->id.'"><i class="fas fa-trash"></i></button>';
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
    }


    function add()
    {
        return view('add_stock');
    }

    function add_stock_fish(Request $request)
    {
        $request->validate([
            'tilapia_stock'      =>  'required',
            'ornamental_stock'      =>  'required',
            'carp_stock'      =>  'required',
            'beetle_fish_stock'     =>  'required',
            'cat_fish_stock'     =>  'required'
 
        ]);

        $data = $request->all();
        
        Price::create([

                'tilapia_stock'     =>  $data['tilapia_stock'],
                'ornamental_stock'     =>  $data['ornamental_stock'],
                'carp_stock'     =>  $data['carp_stock'],
                'beetle_fish_stock'     =>  $data['beetle_fish_stock'],
                'cat_fish_stock'     =>  $data['cat_fish_stock']
        ]);

        return redirect('price')->with('success', 'Successfully Added');

        }


    public function edit2($id)
    {
        $data = Price::findOrFail($id);

        return view('edit_price', compact('data'));
    }

    function edit_validation(Request $request)
    {
        $request->validate([
            'tilapia_stock'      =>  'required',
            'ornamental_stock'      =>  'required',
            'carp_stock'      =>  'required',
            'beetle_fish_stock'     =>  'required',
            'cat_fish_stock'     =>  'required'
 
        ]);

        $data = $request->all();

        if(!empty($data['tilapia']))
        {
            $form_data = array(
                'tilapia_stock'     =>  $data['tilapia_stock'],
                'ornamental_stock'     =>  $data['ornamental_stock'],
                'carp_stock'     =>  $data['carp_stock'],
                'beetle_fish_stock'     =>  $data['beetle_fish_stock'],
                'cat_fish_stock'     =>  $data['cat_fish_stock']
            );
        }
        else
        {
            $form_data = array(
                'tilapia_stock'     =>  $data['tilapia_stock'],
                'ornamental_stock'     =>  $data['ornamental_stock'],
                'carp_stock'     =>  $data['carp_stock'],
                'beetle_fish_stock'     =>  $data['beetle_fish_stock'],
                'cat_fish_stock'     =>  $data['cat_fish_stock']
            );
        }

        Price::whereId($data['hidden_id'])->update($form_data);

        return redirect('price')->with('success', 'Price Updated');

    }

    function delete($id)
    {
        $data = Price::findOrFail($id);

        $data->delete();

        return redirect('price')->with('success', 'Old Stock Delete');
    }
}
