@extends('layouts.admin')
@section('title','Update Employee')
@section('content')
<div class="card mb-4 mt-4">
    <div class="card-header">
        <a href="{{url('harvest')}}" class="float-end btn btn-sm btn-success">View All</a>
    </div>
    <div class="card-body">

        @if($errors->any())
            @foreach($errors->all() as $error)
                <p class="text-danger">{{$error}}</p>
            @endforeach
        @endif

        @if(Session::has('msg'))
        <p class="text-success">{{session('msg')}}</p>
        @endif
        <form method="post" action="{{url('harvest/'.$data->id)}}" enctype="multipart/form-data">
            @method('put')
            @csrf
            <table class="table table-bordered">
                <tr>
                    <th>Fish Pond Name</th>
                    <td>
                        <select name="depart" class="form-control">
                            <option value="">-- Select Pond --</option>
                            @foreach($departs as $depart)
                                <option @if($depart->id==$data->department_id) selected @endif value="{{$depart->id}}">{{$depart->title}}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>Date Harvested</th>
                    <td>
                        <input type="date" value="{{$data->date}}" name="date" class="form-control" />
                    </td>
                </tr>
                <tr>
                    <th>Fish Name</th>
                    <td>
                        <input value="{{$data->fish_name}}" type="text" name="fish_name" class="form-control" />
                    </td>
                </tr>
                {{-- <tr>
                    <th>Pond Size</th>
                    <td>
                        <input value="{{$data->pond_size}}" type="text" name="pond_size" class="form-control" />
                    </td>
                </tr> --}}
                <tr>
                    <td colspan="2">
                        <input type="submit" class="btn btn-primary" href="{{url('harvest')}}" value="Submit" />
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>

@endsection