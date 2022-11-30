@extends('main')
@section('title','Add Customer')
@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/customer">Farmers</a></li>
      <li class="breadcrumb-item active">Add New</li>
    </ol>
</nav>
<h2 class="text-left" style="font-size: 15px">In this table, adding farmer appear here!</h2>

    <div class="justify-content-end">
        <a href="{{url('customer')}}" class="float-end btn btn-sm btn-success justify-content-end">View All</a>
    </div>
    <br>

    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Input Information</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <form method="post" action="{{url('customer')}}" enctype="multipart/form-data">
                        @csrf   
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Full Name</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="input-group mb-3">
                                        <div class="input-group-text bg-info text-white"><i class="fa-solid fa-user"></i></div>
                                        <input type="text" name="full_name" class="form-control" placeholder="Enter Name" />
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <label>Address</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="input-group mb-3">
                                        <div class="input-group-text bg-secondary text-white"><i class="fa-solid fa-location-dot"></i></div>
                                        <input type="text" name="address" class="form-control" placeholder="Enter Address" />
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <label>Farmer Photo</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="input-group mb-3">
                                        <div class="input-group-text bg-success text-white"><i class="fa-sharp fa-solid fa-image"></i></div>
                                        <input type="file" name="photo" class="form-control" placeholder="phone number" />
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <label>Mobile Number</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="input-group mb-3">
                                        <div class="input-group-text bg-warning text-white"><i class="fa-sharp fa-solid fa-phone"></i></div>
                                        <input type="number" name="mobile" class="form-control" placeholder="phone number" />
                                    </div>
                                </div>

    
                                <div class="col-md-4">
                                    <label>Status</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-check form-check-inline">
                                       
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="status" value="1">
                                            <label class="form-check-label" for="status">Activate</label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="status" value="0">
                                            <label class="form-check-label" for="status">DeActivate</label>
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
        </div>
    </div>
    
    
    
    

@endsection
