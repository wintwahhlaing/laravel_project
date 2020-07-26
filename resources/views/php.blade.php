@extends('layout')

@section('content')
	<h2>PHP page</h2>
	@foreach ($data as  $value)
		<li>{{ $value }}</li>
	@endforeach
@endsection