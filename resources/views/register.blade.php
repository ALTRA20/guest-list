@extends('layouts.app')

	<style>
		form {
		  display: flex;
		  flex-direction: column;
		  align-items: flex-start;
		  margin-top: 50px;
		}

		div.input{
			width: 100%;
		}

		label {
		  display: block;
		  margin-bottom: 5px;
		  font-weight: 600;
		  font-size: 1.2rem;
		}

		input[type="email"],
		input[type="text"],
		input[type="password"] {
		  width: 100%;
		  padding: 10px;
		  margin-bottom: 15px;
		  border: none;
		  border-radius: 5px;
		  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
		}

		input[type="checkbox"] {
		  margin-right: 10px;
		}

		button[type="submit"] {
		  background-color: #FFA500;
		  color: #fff;
		  border: none;
		  padding: 10px 20px;
		  font-size: 1.2rem;
		  border-radius: 5px;
		  cursor: pointer;
		  transition: background-color 0.3s ease;
		}

		button[type="submit"]:hover {
		  background-color: #FF8C00;
		}

	</style>
@section('content')
		@include('components.nav1')
	<section class="container d-flex justify-content-center">
		<form method="POST" action="{{ route('registering') }}" class="card p-5" style="width:fit-content;">
		    @csrf
		    <h1 class="text-center">Register</h1>
		    <div class="input">
		        <label for="name">Nama</label>
		        <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>
		    </div>

		    <div class="input">
		        <label for="email">Email</label>
		        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
		    </div>

		    <div>
		        <label for="password">Password</label>
		        <input id="password" type="password" name="password" required>
		    </div>


		    <div>
		        <button type="submit">Register</button>
		    </div>
		</form>
	</section>
@endSection
