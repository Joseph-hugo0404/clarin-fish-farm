@extends('main')

@section('content')

<!--<img src="{{ asset('images/bfar.png') }}" style=" display: block; margin-left: auto; margin-right: auto; width: 50%;">-->
<div class="row" style="margin-top:2%">
    <div class="col-xl-3 col-md-4 mb-4">
        <div class="small-box bg-blue text-white text-bold">
            <div class="inner">
              <h3>{{ $total_admin }}</h3>
    
              <p>Total Users</p>
            </div>
            <div class="icon">
                <i class="fa-solid fa-users"></i>
            </div>
            
          </div>
        </div>
    <!-- ./col -->
    <div class="col-xl-3 col-md-4 mb-4">
        <div class="small-box btn-yellow text-white">
            <div class="inner">
                <h3>{{ $total_transaction }}</h3>

                <p>Transactions Log</p>
              </div>
              <div class="icon ">
                <i class="fa-sharp fa-solid fa-arrow-right-arrow-left"></i>
            </div>
            
          </div>
        </div>
    
        <div class="col-xl-3 col-md-4 mb-4">
            <div class="small-box bg-red text-white">
                <div class="inner">
                  <h3>{{ $total_stocks }}</h3>
        
                  <p>Total Fish Stock</p>
                </div>
                <div class="icon">
                    <i class="fa-solid fa-fish"></i>
                </div>
                
              </div>
            </div>
    <!-- ./col -->
    <div class="col-xl-3 col-md-4 mb-4">
        <div class="small-box bg-green text-white">
            <div class="inner">
              <h3>{{ $total_fish_sold  }}</h3>
    
              <p>Total Sold Fish</p>
            </div>
            <div class="icon">
              <i class="fa-solid fa-peso-sign"></i>
            </div>
            
          </div>
        </div>
</div>
<hr>
<div class="card text-center">
  <div class="card-body">
    <h5 class="card-title"> <b>About Us</b> </h5>
    
    <p class="card-text">Unknown to many but the fishpond operators, the Municipality of
       Clarin is home to the Regional Freshwater Fisheries Center. The Center is located at <b>barangay Caluwasan </b> 
       and is known to the local inhabitants as the <b>Clarin Freshwater Fish Farm.</b> </p>
       <img src="{{asset('images/farm.png')}}" style="position: relative; width: 90%; height: 90vh" alt="">
  </div>
</div>
<hr>
<div class="row ml-5">
<div class="col-mb-3 ml-1" style="width: 18rem;">
  <img class="card-img-top" src="{{asset('images/tilapia.jpg')}}" alt="Card image cap">
  <div class="Small-box">
    <hr>
    <h5 class="card-title text-center">TILAPIA</h5>
    <p class="card-text text-center"> a hardy, fast growing fish, that can live up to ten years and reach ten pounds in weight. Tilapia are shaped like a sunfish or 
      crappie and are easily identifiable by the interrupted lateral 
      line characteristic of the Chiclid family of fishes.</p>
  </div>
</div>
<div class="col-mb-3 ml-2" style="width: 18rem;">
  <img class="card-img-top" src="{{asset('images/koi.jpg')}}" alt="Card image cap">
  <div class="Small-box">
    <hr>
    <h5 class="card-title text-center">ORNAMENTAL FISH</h5>
    <p class="card-text"> are a colorful, ornamental versions of the common carp.</p>
  </div>
</div>

<div class="col-mb-3 ml-2" style="width: 18rem;">
  <img class="card-img-top" src="{{asset('images/carp.jpg')}}" alt="Card image cap">
  <div class="Small-box">
    <hr>
    <h5 class="card-title text-center">CARP</h5>
    <p class="card-text">a heavy-bodied minnow with barbels on either side of the upper jaw. Typically, color varies from brassy green or
       yellow, to golden brown, or even silvery. The belly is usually yellowish-white.</p>
  </div>
</div>

<div class="col-mb-3 ml-2" style="width: 18rem;">
  <img class="card-img-top" src="{{asset('images/beetle.jpg')}}" alt="Card image cap">
  <div class="Small-box">
    <hr>
    <h5 class="card-title text-center">BEETLE FISH</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</div>
<div class="col-mb-3 mx-auto mt-5" style="width: 18rem;">
  <img class="card-img-top" src="{{asset('images/cat-fish.jpeg')}}" alt="Card image cap">
  <div class="Small-box">
    <hr>
    <h5 class="card-title text-center">CAT FISH</h5>
    <p class="card-text"> a cylindrical body with a flattened ventral to allow for benthic feeding </p>
  </div>
</div>

@endsection

