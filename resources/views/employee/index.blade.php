@extends('layouts.admin')
@section('title','All Employees')
@section('content')
<h2 class="mt-3">Harvest</h2>
<hr>
<div class="card mb-4 mt-4">
                            <div class="card-header">
                                <a href="{{url('harvest/create')}}" class="float-end btn btn-sm btn-success">Start Harvest</a>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped" id="datatablesSimple">
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
                                                    <a href="{{url('harvest/'.$d->id)}}" class="btn btn-warning btn-sm">Show</a>
                                                    <a href="{{url('harvest/'.$d->id.'/edit')}}" class="btn btn-info btn-sm">Update</a>
                                                    <a onclick="return confirm('Are you sure to delete this data?')" href="{{url('harvest/'.$d->id.'/delete')}}" class="btn btn-danger btn-sm">Delete</a>
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