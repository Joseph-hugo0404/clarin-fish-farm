@extends('main')
@section('title','Update Customer')
@section('content')
<nav aria-label="breadcrumb">
        <hr>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/customer">Farmer</a></li>
      <li class="breadcrumb-item active">Edit Selected Farmer</li>
    </ol>
</nav>
<div class="card mb-4 mt-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Update Farmer
        
    
<a href="{{url('customer')}}" class="float-end btn btn-sm btn-success" style="margin-top: -10px">View All</a>
</div>
    
    <div class="card-body">

        @if($errors->any())
            @foreach($errors->all() as $error)
                <p class="text-danger">{{$error}}</p>
            @endforeach
        @endif
        <form method="post" action="{{url('customer/'.$data->id)}}" enctype="multipart/form-data">
            @method('put')
            @csrf

            <div class="form-body">
                <div class="row">
                    <div class="col-md-4">
                        <label>Full Name</label>
                    </div>
                    <div class="col-md-8">
                        <div class="input-group mb-3">
                            <div class="input-group-text bg-info text-white"><i class="fa-solid fa-user"></i></div>
                            <input type="text" value="{{$data->full_name}}" name="full_name" class="form-control" />
                        </div>
                    </div>

                    <div class="col-md-4">
                        <label>Address</label>
                    </div>
                    <div class="col-md-8">
                        <div class="input-group mb-3">
                            <div class="input-group-text bg-secondary text-white"><i class="fa-solid fa-location-dot"></i></div>
                            <input value="{{$data->address}}" type="text" name="address" class="form-control" />
                        </div>
                    </div>

                    <div class="col-md-4">
                        <label>Farmer Photo</label>
                    </div>
                    <div class="col-md-8">
                        <div class="input-group mb-3">
                            <div class="input-group-text bg-success text-white"><i class="fa-sharp fa-solid fa-image"></i></div>
                            <img src="{{asset('public/images/'.$data->photo)}}" width="200" />
                            <input type="hidden" name="prev_photo" value="{{$data->photo}}" />
                        </div>
                    </div>

                    <div class="col-md-4">
                        <label>Mobile Number</label>
                    </div>
                    <div class="col-md-8">
                        <div class="input-group mb-3">
                            <div class="input-group-text bg-warning text-white"><i class="fa-sharp fa-solid fa-phone"></i></div>
                            <input value="{{$data->mobile}}" type="text" name="mobile" class="form-control" />
                        </div>
                    </div>


                    <div class="col-md-4">
                        <label>Status</label>
                    </div>
                    <div class="col-md-8">
                        <div class="form-check form-check-inline">
                           
                            <div class="form-check form-check-inline">
                                <input @if($data->status==1) checked @endif type="radio" name="status" value="1" /> Activate
                            </div>

                            <div class="form-check form-check-inline">
                                <input @if($data->status==0) checked @endif type="radio" name="status" value="0" /> DeActivate
                            </div>
                        </div>
                    </div>

                    <div class="col-12 d-flex justify-content-end">
                        <input type="submit" class="btn btn-primary" value="Submit" />  
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection