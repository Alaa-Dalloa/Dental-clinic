@extends('layouts.app')

@section('content')
    <div class="container"> 
    	<h1 class="text-center">All Reveals</h1>
			<table class="table table-bordered">
			    <thead>
			      <tr>
			        <th>ID</th>
			        <th>Drug</th>
			        <th>Price</th>
			         <th>Specialization</th>
			        <th>Doctor</th>
			        <th>Patient</th>
			      </tr>
			    </thead>
			    <tbody>

			    @foreach($reveals as $reveal)
			     <tr>
			        <td>{{ $reveal->id }}</td>
			        <td>{{ $reveal->drug }}</td>
			        <td>{{ $reveal->price }}</td>
			        <td>{{ $reveal->specialization_id }}</td>
			        <td>{{ $reveal->doctor_id}}</td>
			        <td>{{ $reveal->patient_id }}</td>
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