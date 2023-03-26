@extends('layouts.app')
<link rel="stylesheet" href="{{asset('css/login.css')}}">
	
@section('content')
	@include('components.nav1')
	@if ($errors->any())
	    <div class="alert alert-danger mx-auto" style="z-index:2!important;">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif
	<section class="container d-flex justify-content-center" style="height: 450px">
		
		<form method="POST" action="{{ route('sesiLogin') }}" class="card p-5 m-0" style="width:fit-content;" style="z-index: 1!important;">
		    @csrf
		    <h1 class="text-center">Login</h1>
		    <div class="input">
		        <label for="email">Email</label>
		        <input id="email" type="email" name="email" value="{{ Session::get('email') }}" required autofocus>
		    </div>

		    <div>
		        <label for="password">Password</label>
		        <input id="password" type="password" name="password" required>
		    </div>
		    <div class="d-flex justify-content-end" style="width:100%;">
		    	<span>belum punya akun?</span>
		    	<a href="/register" class="text-primary ms-2">klik disini</a>
		    </div>

		    <div>
		        <button type="submit" name="login">Login</button>
		    </div>
		</form>
	</section>
@endSection
