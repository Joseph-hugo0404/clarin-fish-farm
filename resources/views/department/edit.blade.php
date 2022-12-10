@extends('layouts.admin')
@section('title','Update Department')
@section('content')
<div class="card mb-4 mt-4">
    <div class="card-body">

        @if($errors->any())
            @foreach($errors->all() as $error)
                <p class="text-danger">{{$error}}</p>
            @endforeach
        @endif

        @if(Session::has('msg'))
        <p class="text-success">{{session('msg')}}</p>
        @endif
        <form method="post" action="{{url('depart/'.$data->id)}}">
        	@method('put')
            @csrf
            <table class="table table-bordered">
                <tr>
                    <th>Fish Pond Name</th>
                    <td>
                        <input type="text" value="{{$data->title}}" name="title" class="form-control" />
                    </td>
                </tr>

                <tr>
                    <th>Fish Pond Size</th>
                    <td>
                        <input type="text" value="{{$data->pond_size}}" name="pond_size" class="form-control" />
                    </td>
                </tr>

                <tr>
                    <th>Fish Name</th>
                    <td>
                        <input type="text" value="{{$data->fish_name}}" name="fish_name" class="form-control" />
                    </td>
                </tr>

                <tr>
                    <th>Date Updated</th>
                    <td>
                        <input type="date" value="{{$data->date_added}}" name="date_added" class="form-control" />
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