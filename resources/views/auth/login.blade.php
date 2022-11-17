@extends('dashboard')
@section('content')

 <section class="container mt-5 mb-5" style="width: 70%">
	<!-- Jumbotron -->
	<div class="px-4 py-5 px-md-5 text-center text-mb-start" style="background-color: hsl(0, 0%, 76%)">
	  <div class="container">
		<div class="row gx-lg-5 align-items-center">
		  <div class="col-lg-6 mb-5 mb-lg-0">
			<img src="{{ asset('images/bfar.png') }}"
			class="img-fluid" alt="Sample image">
		  </div>
  
		  <div class="col-lg-6 mb-5 mb-lg-0">
			<div class="card">
			  <div class="card-body py-5 px-md-5">
				<main class="login-form">

				<form method="post" action="{{ route('login.custom') }}">
										
				  <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-center">
						<p class="lead fw-bold mb-5 ">Clarin Freshwater br Fish Farm System</p>
						
				  </div>

				  @include('messages')

				  @if (session()->has('error'))

						<div class="alert alert-danger">
							{{ session()->get('error') }}
						</div>

					@endif
					@if(session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif
					
					@csrf
				  <!-- Email input -->
				  <div class="form-outline mb-4">
					<input type="text" name="email" class="form-control" placeholder="Email" />
						@if ($errors->has('email'))
						<span class="text-danger">{{ $errors->first('email') }}</span>
						@endif
				  </div>
  
				  <!-- Password input -->
				  <div class="form-outline mb-4">
					<input type="password" name="password" class="form-control" placeholder="Password" />
						@if ($errors->has('password'))
						<span class="text-danger">{{ $errors->first('password') }}</span>
						@endif
				  </div>
  
				  <!-- Submit button --> 
				  <button type="submit" class="btn btn-primary float-center mb-4"> 
					LOGIN
				  </button>
				</form>
				<div class="text-center">
					<a class="small" href="/registration">Create an Account!</a>
				</div>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	</div>
	<!-- Jumbotron -->
</section>
<style>
	@font-face {
    font-family: 'Nunito';
    src: url('../fonts/Nunito-VariableFont_wght.ttf');
}
</style>
@endsection

