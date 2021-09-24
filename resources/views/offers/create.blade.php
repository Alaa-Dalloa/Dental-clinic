@extends('layouts.app')
@section('content')
<div class= "container">
   <h1 class="text-center">Add Offers</h1>
  <div class="box">
	<form action=" {{ route ('offers.store') }}"method="POST" enctype="multipart/form-data">
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
	    <label for="Duration">Duration:</label>
	    <input type="string"
	     class="form-control"
	      placeholder="Enter Duration" id="Duration" name="Duration">
	  </div>
	  <div class="form-group">
	    <label for="Values">Values:</label>
	    <input type="string"
	     class="form-control"
	      placeholder="Enter Values" id="Values" name="Values">
	  </div>

	  <button type="submit" class="btn btn-primary">Add</button>
	</form>
  </div>
</div>
@endsection