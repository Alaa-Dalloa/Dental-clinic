@extends('layouts.app')

@section('content')
    <div class="container"> 
    	<h1 class="text-center">All Reveal</h1>
			<table class="table table-bordered">
			    <thead>
			      <tr>
			        <th>ID</th>
			        <th>Name</th>
			        <th>Control</th>
			      </tr>
			    </thead>
			    <tbody>

			    @foreach($reveals as $reveal)
			     <tr>
			        <td>{{ $reveal->id }}</td>
			        <td>{{ $reveal->name }}</td>
			        <td>
			        	<a href="/reveals/{{ $reveal->id }}/edit" class="btn btn-success">Edit</a>
			        	<a href="/reveals/{{ $reveal->id }}" class="btn btn-danger">Delete</a>
			        </td>
				<tr>
			    @endforeach
			      
			    </tbody>
			</table>
    </div>
@endsection