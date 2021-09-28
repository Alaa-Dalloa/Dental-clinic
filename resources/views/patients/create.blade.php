@extends('layouts.app')
@section('content')
<div class= "container">
   <h1 class="text-center">Add Patients</h1>
  <div class="box">
	<form action=" {{ route ('patients.store') }}"method="POST" enctype="multipart/form-data">
	  @csrf
	  <div class="form-group">
	    <label for="Name">Name:</label>
	    <input type="string" 
	    class="form-control"
	     placeholder="Enter Name" 
	     id="Name"
	     Name="Name">
	   </div>
	   <div class="form-group">
	    <label for="Phone">Phone:</label>
	    <input type="string"
	     class="form-control"
	      placeholder="Enter Phone" id="Phone" name="Phone">
	  </div>
	  <div class="form-group">
	    <label for="Address">Address:</label>
	    <input type="string"
	     class="form-control"
	      placeholder="Enter Address" id="Address" name="Address">
	  </div>
	  <div class="form-group">
	    <label for="Age">Age:</label>
	    <input type="string"
	     class="form-control"
	      placeholder="Enter Age" id="Age" name="Age">
	  </div>

	  <button type="submit" class="btn btn-primary">Add</button>
	</form>
  </div>
</div>
@endsection