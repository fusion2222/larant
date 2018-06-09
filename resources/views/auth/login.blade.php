@extends('layouts.default')

@section('title')
	Login
@endsection

@section('content')
	<form action="#" method="POST" class="form row">
		@csrf
		<div class="form-group w-100">
			<input type="text" class="form-field w-100 form-controll" name="username" placeholder="Username">
		</div>
		<div class="form-group w-100">
			<input type="password" class="form-field w-100 form-controll" name="password" placeholder="Password">
		</div>
		<div class="form-group w-100">
			<button type="submit" class="btn btn-primary w-100">Submit</button>
		</div>
	</form>
@endsection