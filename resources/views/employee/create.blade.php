@extends('main')
@section('title','Add Employee')
@section('content')
<div class="card mb-4 mt-4">
    <div class="card-header">
        <a href="{{url('employee')}}" class="float-end btn btn-sm btn-success">View All</a>
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
        <form method="post" action="{{url('employee')}}" enctype="multipart/form-data">
            @csrf
            <table class="table table-striped">
                <tr>
                    <th>Fish Pond Name</th>
                    <td>
                        <select name="depart" class="form-control">
                            <option value="">-- Select Pond --</option>
                            @foreach($departments as $depart)
                                <option value="{{$depart->id}}">{{$depart->title}}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>Date Harvested</th>
                    <td>
                        <input type="date" name="date" class="form-control" />
                    </td>
                </tr>
                <tr>
                    <th>Fish Name</th>
                    <td>
                        <select class="form-control" name="fish_name" aria-label="Default select example">
                            <option selected>Choose .....</option>
                            <option value="Tilapia">Tilapia</option>
                            <option value="Ornamental Fish">Ornamental Fish</option>
                            <option value="Carp">Carp</option> 
                            <option value="Prawn Fish">Prawn Fish</option>
                            <option value="Cat Fish">Cat Fish</option>
                          </select>
                    </td>
                </tr>
                <tr>
                    <th>Pond Size</th>
                    <td>
                        <input type="text" name="pond_size" class="form-control" />
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" class="btn btn-primary" value="Submit" />
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>

@endsection