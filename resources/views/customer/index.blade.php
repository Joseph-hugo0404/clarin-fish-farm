@extends('page')
@section('title','All Customers')
@section('content')

<h2 class="mt-3">Customer Management</h2>
<hr>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/customer">Customer</a></li>
      <li class="breadcrumb-item active">Customer List</li>
    </ol>
</nav>

<div class="card mb-4 mt-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                All Customers
                                <a href="{{url('customer/create')}}" class="float-end btn btn-sm btn-success">Add New</a>
                            </div>
                            @if(Session::has('msg'))
                            <p class="text-success">{{session('msg')}}</p>
                            @endif
                            <div class="card-body">
                                <table id="datatablesSimple" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Full</th>
                                            <th>Mobile Number</th>
                                            <th>Photo</th>
                                            <th>Address</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	@if($data)
	                                    	@foreach($data as $d)
	                                        <tr>
	                                            <td>{{$d->id}}</td>
                                                <td>{{$d->full_name}}</td>
                                                <td>{{$d->mobile}}</td>
                                                <td><img src="{{asset('public/images/'.$d->photo)}}" width="80" /></td>
                                                <td>{{$d->address}}</td>
                                                <td>
                                                    <a href="{{url('customer/'.$d->id)}}" class="btn btn-warning btn-sm"><i class="fas fa-eye"></i></a>
                                                    <a href="{{url('customer/'.$d->id.'/edit')}}" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></a>
                                                    <a onclick="return confirm('Are you sure to delete this data?')" href="{{url('customer/'.$d->id.'/delete')}}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                                </td>
	                                        </tr>
	                                        @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="{{asset('js/scripts.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="{{asset('js/datatables-simple-demo.js')}}"></script>

@endsection