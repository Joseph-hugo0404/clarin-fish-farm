@extends('main')
@section('title','All Employees')
@section('content')
<div class="card mb-4 mt-4">
                            <div class="card-header">
                                <a href="{{url('employee/create')}}" class="float-end btn btn-sm btn-success">Add New</a>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Fish Pond Name</th>
                                            <th>Date Harvested</th>
                                            <th>Fish Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	@if($data)
	                                    	@foreach($data as $d)
	                                        <tr>
	                                            <td>{{$d->id}}</td>
	                                            <td>{{$d->department->title ?? 'title'}}</td>
                                                <td>{{$d->date}}</td>
                                                <td>{{$d->fish_name}}</td>
                                                <td>
                                                    <a href="{{url('employee/'.$d->id)}}" class="btn btn-warning btn-sm">Show</a>
                                                    <a href="{{url('employee/'.$d->id.'/edit')}}" class="btn btn-info btn-sm">Update</a>
                                                    <a onclick="return confirm('Are you sure to delete this data?')" href="{{url('employee/'.$d->id.'/delete')}}" class="btn btn-danger btn-sm">Delete</a>
                                                </td>
	                                        </tr>
	                                        @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="{{asset('public')}}/js/scripts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="{{asset('public')}}/js/datatables-simple-demo.js"></script>

@endsection