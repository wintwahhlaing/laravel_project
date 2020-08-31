@extends('layouts.app')

@section('content')
   <div class="container">
   		<h2>{{ $receipe->name }}</h2>
	   	<li> Ingredients- {{ $receipe->ingredients }}</li>
	   	<li> Category- {{ $receipe->categories->name}}</li>
   		<img src="{{'/images/'.$receipe->image}}" width="150" height="150" alt="">
		<br>

	   	<a href="/receipe/{{$receipe->id}}/edit"><button class="btn btn-success">Edit</button></a>

	   	<form method="POST" action="/receipe/{{ $receipe->id }}">

   			{{ method_field('DELETE')}}
   			{{ csrf_field() }}
		  
		  <button type="submit" class="btn btn-primary">Delete</button> 
		</form>
   </div>

@endsection