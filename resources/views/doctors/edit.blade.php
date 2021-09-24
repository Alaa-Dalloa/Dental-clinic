@extends('layouts.app')
@section('content')
<div class= "container">
   <h1 class="text-center">Edit Doctors</h1>
  <div class="box">
	<form action="/doctors/{{ $doctor->id }}/update" method="POST" enctype="multipart/form-data">
	  @csrf
	 <div class="form-group">
	    <label for="name">name:</label>
	    <input type="string" 
	    class="form-control"
	     placeholder="Enter name" 
	     id="name"
	     value="{{ $doctor->name}}"
	     Name="name">
	   </div>
	   <div class="form-group">
	    <label for="phone">phone:</label>
	    <input type="string"
	     class="form-control"
	      placeholder="Enter phone" id="phone"
	      value="{{ $doctor->phone}}" name="phone">
	  </div>
	  <div class="form-group">
	    <label for="email">Email:</label>
	    <input type="string"
	     class="form-control"
	      placeholder="Enter Email" id="email" value="{{ $doctor->email}}" name="email">
	  </div>
	  <div class="form-group">
	    <label for="specialization_id">Specialization:</label>
	    <select class="form-control" name="specialization_id">
	    	@foreach($specializations as $one)
	    	<option value="{{ $one->id }}">{{ $one->name }}</option>
	    	@endforeach
	    </select>
	  </div>

	  <button type="submit" class="btn btn-primary">Update</button>
	</form>
  </div>
</div>
@endsection