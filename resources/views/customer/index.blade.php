@extends('layouts.admin')
@section('title','All Customers')
@section('content')

<h2 class="mt-3">Farmer Management</h2>
<hr>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/customer">Farmers</a></li>
      <li class="breadcrumb-item active">Farmers List</li>
    </ol>
</nav>
<div class="card">
           
    
        @if(Session::has('msg'))
        <p class="text-success">{{session('msg')}}</p>
        @endif
        
        <div class="card-body">
            <a href="{{url('customer/create')}}" class="float-end btn btn-sm btn-success">Add New</a>
            <table class="table" id="datatablesSimple">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Full</th>
                        <th>Photo</th>
                        <th>Mobile Number</th>
                        
                        <th>Address</th>
                        <th>Status</th>
                        <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @if($data)
                        @foreach($data as $d)
                        <tr>
                            <td>{{$d->id}}</td>
                            <td>{{$d->full_name}}</td>
                            <td><img src="{{asset('public/images/'.$d->photo)}}" width="80" /></td>
                            <td>{{$d->mobile}}</td>
                            <td>{{$d->address}}</td>
                            <td>{{$d->status}}</td>
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

@endsection