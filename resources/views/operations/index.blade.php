@extends('layouts.app')

@section('content')
    <div class="container"> 
    	<h1 class="text-center">All Operation</h1>
			<table class="table table-bordered">
			    <thead>
			      <tr>
			        <th>ID</th>
			        <th>Name</th>
			        <th>Control</th>
			      </tr>
			    </thead>
			    <tbody>

			    @foreach($operations as $operation)
			     <tr>
			        <td>{{ $operation->id }}</td>
			        <td>{{ $roperation->name }}</td>
			        <td>
			        	<a href="/roperations/{{ $operation->id }}/edit" class="btn btn-success">Edit</a>
			        	<a href="/operations/{{ $operation->id }}" class="btn btn-danger">Delete</a>
			        </td>
				<tr>
			    @endforeach
			      
			    </tbody>
			</table>
    </div>
@endsection