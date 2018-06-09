@extends('base')

@section('layout_content')
	<div class="container site-content">
		<h1>@yield('title')</h1>
		@yield('content')
	</div>
@endsection