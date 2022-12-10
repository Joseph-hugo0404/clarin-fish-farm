@extends('layouts.admin')
@section('title','View Customer')
@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/customer">Farmers</a></li>
      <li class="breadcrumb-item active">Show Farmer</li>
    </ol>
</nav>
<hr>
<div class="card mb-4 mt-4">
        @if($errors->any())
            @foreach($errors->all() as $error)
                <p class="text-danger">{{$error}}</p>
            @endforeach
        @endif

        @if(Session::has('msg'))
        <p class="text-success">{{session('msg')}}</p>
        @endif
        <div class="col-md-3">
            <div class="position-relative">
                <div style="margin-top: 10%"></div>
                <img src="{{asset('public/images/'.$data->photo)}}" width="200" />
                <img src="{{$data->photo}}" style="width: 100%; top:0; left:0; position: absolute; cursor: pointer" alt="" id="profile-pic">
                {{-- <span class="position-absolute text-center w-100" style="opacity: 0; color: rgb(224, 224, 224); bottom: 0px; z-index: 10; background-color: rgba(50,50,50,0.5); padding: 0; pointer-events: none" id="change-label">
                    <i class="fa fa-camera"></i> Change
                </span> --}}
                {{-- <input type="file" accept="image/png, image/jpeg" style="display: none" id="image-input"> --}}
            </div>
        </div> 
        <hr>
        <form method="post" action="{{url('customer/'.$data->id)}}" enctype="multipart/form-data">
            @method('put')
            @csrf
                    <div class="col-md-6">
                        <label class="text-white" style="font-weight: bold">Full Name</label>
                        <div class="col-md-7">
                        <div class="input-group mb-3">
                            <div class="input-group-text bg-info text-white"><i class="fa-solid fa-user"></i></div>
                            <input type="text" value="{{$data->full_name}}" name="full_name" class="form-control" />
                        </div>
                    </div>
                    </div>
                    

                    <div class="col-md-6">
                        <label class="text-white" style="font-weight: bold">Address</label>
                        <div class="col-sm-7">
                        <div class="input-group mb-3">
                            <div class="input-group-text bg-secondary text-white"><i class="fa-solid fa-location-dot"></i></div>
                            <input value="{{$data->address}}" type="text" name="address" class="form-control" />
                        </div>
                    </div>
                    </div>
                    

                    <div class="col-md-6">
                        <label class="text-white" style="font-weight: bold">Mobile Number</label> 
                        <div class="col-md-7">
                        <div class="input-group mb-3">
                            <div class="input-group-text bg-warning text-white"><i class="fa-sharp fa-solid fa-phone"></i></div>
                            <input value="{{$data->mobile}}" type="text" name="mobile" class="form-control" />
                        </div>
                    </div>
                    </div>
                   

                    <div class="col-6 d-flex justify-content-start">
                        <a href="{{url('customer')}}" class="btn btn-primary">Back</a>  
                    </div>
            
        </form></div>
@endsection