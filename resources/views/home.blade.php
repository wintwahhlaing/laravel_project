@extends('layout')

@section('title')
	Home page
@endsection

@section('content')
	@foreach($data as $value)
		{{ $value}}
	@endforeach
@endsection