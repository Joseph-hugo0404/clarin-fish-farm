@extends('main')
@section('title','All Departments')
@section('content')
<div class="card mb-4 mt-4">
    @if(Session::has('msg'))
    <p class="text-success">{{session('msg')}}</p>
    @endif
                            <div class="card-header">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Add new</button>

                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Create Fish Pond</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="post" action="{{url('depart')}}">
                                                @csrf
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Fish Pond Name</label>
                                                <input type="text" name="title" class="form-control" />
                                            </div>

                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Fish Pond Size</label>
                                                <input type="text" name="pond_size" class="form-control" />
                                            </div>

                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Fish Name</label>
                                                <input type="text" name="fish_name" class="form-control" />
                                            </div>

                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Date Created</label>
                                                <input type="date" name="date_added" class="form-control" />
                                            </div>
                                            
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Create</button>
                                        </div>
                                            </form>
                                        </div>
                                        
                                        </div>
                                    </div>
                                    </div>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Fish Pond Name</th>
                                            <th>Fish Pond Size</th>
                                            <th>Fish Name</th>
                                            <th>Date Created</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	@if($data)
	                                    	@foreach($data as $d)
	                                        <tr>
	                                            <td>{{$d->id}}</td>
	                                            <td>{{$d->title}}</td>
	                                            <td>{{$d->pond_size}}</td>
	                                            <td>{{$d->fish_name}}</td>
	                                            <td>{{$d->date_added}}</td>
                                                <td>
                                                    <a href="{{url('depart/'.$d->id)}}" class="btn btn-warning btn-sm">Show</a>
                                                    <a href="{{url('depart/'.$d->id.'/edit')}}" class="btn btn-info btn-sm">Update</a>
                                                    <a onclick="return confirm('Are you sure to delete this data?')" href="{{url('depart/'.$d->id.'/delete')}}" class="btn btn-danger btn-sm">Delete</a>
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