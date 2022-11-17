<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\AllTransaction;
use App\Models\Graph;
use Carbon\Carbon;
use DataTables;

use Hash;

use DB;

use Illuminate\Support\Facades\Auth;

class AllTransactionController extends Controller
{
    public function construct()
    {
        $this->middleware('auth');
    }

    public function show($id)
    {
        $data=AllTransaction::findOrFail($id);
        return view('show_transaction',compact('data'));
    }

    public function index()
    {
        return view('all_transaction');
    }

    function fetch_all(Request $request)
    {
        if($request->ajax())
        {
            $data = AllTransaction::where('type', '=', 'User')->get();

            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        return '<a href="/all_transaction/edit/'.$row->id.'" class="btn btn-yellow btn-sm"><i class="fas fa-edit"></i></a>&nbsp;<button type="button" class="btn btn-danger btn-sm delete" data-id="'.$row->id.'"><i class="fas fa-trash"></i></button>';
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
    }

    function add()
    {
        return view('add_new_transaction');
    }

    function add_validation(Request $request)
    {
        $request->validate([
            'name'          =>  'required',
            'address'         =>  'required',
            'contact_number'      =>  'required|min:11',
            'transaction_date'      =>  'required',
            'tilapia'      =>  'required',
            'ornamental'      =>  'required',
            'carp'      =>  'required',
            'beetle_fish'      =>  'required',
            'cat_fish'      =>  'required'
        ]);

        $data = $request->all();

        
        AllTransaction::create([
            'name'      =>  $data['name'],
            'address'     =>  $data['address'],
            'contact_number'  =>  $data['contact_number'],
            'transaction_date'  =>  $data['transaction_date'],
            'tilapia'      =>  $data['tilapia'],
            'ornamental'      =>  $data['ornamental'],
            'carp'      =>  $data['carp'],
            'beetle_fish'      =>  $data['beetle_fish'],
            'cat_fish'      =>  $data['cat_fish'],
            'type'      =>  'User'
        ]);

        $myDate = $data['transaction_date'];
        $date = Carbon::createFromFormat('Y-m-d', $myDate);
        $monthName = $date->format('F');
        $yearName = $date->format('Y');
        Graph::create([
            'transaction_month'  =>  $monthName,    
            'transaction_year'  =>  $yearName,
            'tilapia'      =>  $data['tilapia'],
            'ornamental'      =>  $data['ornamental'],
            'carp'      =>  $data['carp'],
            'beetle_fish'      =>  $data['beetle_fish'],
            'cat_fish'      =>  $data['cat_fish'],
        ]);

        return redirect('all_transaction')->with('success', 'New Transaction Added');
    }


    public function edit($id)
    {
        $data = AllTransaction::findOrFail($id);

        return view('edit_transaction', compact('data'));
    }

    function edit_validation(Request $request)
    {
        $request->validate([
            'name'      =>  'required',
            'address'      =>  'required',
            'contact_number'      =>  'required',
            'transaction_date'     =>  'required',
            'tilapia'     =>  'required',
            'ornamental'     =>  'required',
            'carp'     =>  'required',
            'beetle_fish'     =>  'required',
            'cat_fish'     =>  'required',
 
        ]);

        $data = $request->all();

        if(!empty($data['name']))
        {
            $form_data = array(
                'name'      =>  $data['name'],
                'address'     =>  $data['address'],
                'contact_number'  =>  $data['contact_number'],
                'transaction_date'  =>  $data['transaction_date'],
                'tilapia'  =>  $data['tilapia'],
                'ornamental'  =>  $data['ornamental'],
                'carp'  =>  $data['carp'],
                'beetle_fish'  =>  $data['beetle_fish'],
                'cat_fish'  =>  $data['cat_fish']
            );
        }
        else
        {
            $form_data = array(
                'name'      =>  $data['name'],
                'address'     =>  $data['address']
            );
        }

        AllTransaction::whereId($data['hidden_id'])->update($form_data);

        return redirect('all_transaction')->with('success', 'Transaction Updated');

    }

    function edit_validation2(Request $request)
    {
        $request->validate([
            'transaction_date'     =>  'required',
            'tilapia'     =>  'required',
            'ornamental'     =>  'required',
            'carp'     =>  'required',
            'beetle_fish'     =>  'required',
            'cat_fish'     =>  'required',
 
        ]);

        $data = $request->all();

        if(!empty($data['transaction_date']))
        {
            $form_data = array(
                'transaction_date'  =>  $data['transaction_date'],
                'tilapia'  =>  $data['tilapia'],
                'ornamental'  =>  $data['ornamental'],
                'carp'  =>  $data['carp'],
                'beetle_fish'  =>  $data['beetle_fish'],
                'cat_fish'  =>  $data['cat_fish']
            );
        }
        else
        {
            $form_data = array(
                'name'      =>  $data['name'],
                'address'     =>  $data['address']
            );
        }

        AllTransaction::whereId($data['hidden_id'])->update($form_data);

        return redirect('all_transaction')->with('success', 'Transaction Updated');

    }

    function delete(Request $request)
    {
        $data = AllTransaction::findOrFail($request->delete_id);

        $data->delete();

        return redirect('all_transaction')->with('success', 'Transaction Data Removed');
    }
    
    function printpreview()
    {
        $all_transaction = AllTransaction::all();
        return view('transaction')->with('transaction', $all_transaction);
    }
}
