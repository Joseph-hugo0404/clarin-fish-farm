@extends('layouts.admin')
@section('title','View Employee')
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
                        {{$data->department->title}}
                    </td>
                </tr>
                <tr>
                    <th>Harvest Date</th>
                    <td>
                        {{$data->date}}
                    </td>
                </tr>
                <tr>
                    <th>Fish Name</th>
                    <td>
                        {{$data->fish_name}}
                    </td>
                </tr>
                {{-- <tr>
                    <th>Pond Size</th>
                    <td>
                        {{$data->pond_size}}
                    </td>
                </tr> --}}
            </table>
        </form>
    </div>
</div>

@endsection