@extends('layouts.app')
@section('content')
<section class="container mt-5 mb-5" style="width: 90%">
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

                    <h1>Welcome Back!</h1>


                @if(session('message'))
                    <div class="alert alert-info" role="alert">
                        {{ session('message') }}
                    </div>
                @endif

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
    
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-user"></i>
                                </span>
                            </div>
    
                            <input id="email" name="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" required autocomplete="email" autofocus placeholder="{{ trans('global.login_email') }}" value="{{ old('email', null) }}">
    
                            @if($errors->has('email'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('email') }}
                                </div>
                            @endif
                        </div>
    
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-lock"></i></span>
                            </div>
    
                            <input id="password" name="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required placeholder="{{ trans('global.login_password') }}">
    
                            @if($errors->has('password'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('password') }}
                                </div>
                            @endif
                        </div>
    
                        <div class="input-group mb-4">
                            <div class="form-check checkbox">
                                <input class="form-check-input" name="remember" type="checkbox" id="remember" style="vertical-align: middle;" />
                                <label class="form-check-label" for="remember" style="vertical-align: middle;">
                                    {{ trans('global.remember_me') }}
                                </label>
                            </div>
                        </div>
    
                        <div class="row">
                            <div class="col-6">
                                <button type="submit" class="btn btn-primary px-4">
                                    {{ trans('global.login') }}
                                </button>
                            </div>
                            <div class="col-6 text-right">
                                @if(Route::has('password.request'))
                                    <a class="btn btn-link px-0" href="{{ route('password.request') }}">
                                        {{ trans('global.forgot_password') }}
                                    </a><br>
                                @endif
    
                            </div>
                        </div>
                    </form>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	</div>
	<!-- Jumbotron -->
</section>
@endsection
