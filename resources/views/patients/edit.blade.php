@extends('layouts.app')
@section('content')
<div class= "container">
   <h1 class="text-center">Edit Patients</h1>
  <div class="box">
	<form action="/patients/{{ $patient->id }}/update" method="POST" enctype="multipart/form-data">
	  @csrf
	 <div class="form-group">
	    <label for="Name">Name:</label>
	    <input type="string" 
	    class="form-control"
	     placeholder="Enter Name" 
	     id="Name"
	     value="{{ $patient->Name}}"
	     Name="Name">
	   </div>
	   <div class="form-group">
	    <label for="Phone">Phone:</label>
	    <input type="string"
	     class="form-control"
	      placeholder="Enter Phone" id="Phone"
	       value="{{ $patient->Phone}}" name="Phone">
	  </div>
	  <div class="form-group">
	    <label for="Address">Address:</label>
	    <input type="string"
	     class="form-control"
	      placeholder="Enter Address" id="Adress"  value="{{ $patient->Address}}" name="Address">
	  </div>
	  <div class="form-group">
	    <label for="Age">Age:</label>
	    <input type="string"
	     class="form-control"
	      placeholder="Enter Age" id="Age" value="{{ $patient->Age}}" name="Age">
	  </div>

	  <button type="submit" class="btn btn-primary">Update</button>
	</form>
  </div>
</div>
@endsection