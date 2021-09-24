@extends('layouts.app')

@section('content')
    <div class="container"> 
    	<h1 class="text-center">All Operation</h1>
			<table class="table table-bordered">
			    <thead>
			      <tr>
			        <th>ID</th>
			        <th>Date</th>
			        <th>Specialization</th>
			         <th>Doctor</th>
			        <th>Patient</th>
			       
			      </tr>
			    </thead>
			    <tbody>

			    @foreach($operations as $operation)
			     <tr>
			        <td>{{ $operation->id }}</td>
			        <td>{{ $operation->date }}</td>
			        <td>{{ $operation->specialization_id}}</td>
			        <td>{{ $operation->doctor_id}}</td>
			        <td>{{ $operation->patient_id }}</td>
			        <td>
			        	<a href="/operations/{{ $operation->id }}/edit" class="btn btn-success">Edit</a>
			        	<a href="/operations/{{ $operation->id }}" class="btn btn-danger">Delete</a>
			        </td>
				<tr>
			    @endforeach
			      
			    </tbody>
			</table>
    </div>
@endsection