@extends('layouts.app')
@section('content')
<div class= "container">
   <h1 class="text-center">Add Specializations</h1>
  <div class="box">
	<form action=" {{ route ('specializations.store') }}"method="POST" enctype="multipart/form-data">
	  @csrf
	  <div class="form-group">
	    <label for="Name">Name:</label>
	    <input type="string" 
	    class="form-control"
	     placeholder="Enter name" 
	     id="Name"

	     Name="Name">
	   </div>

	  <button type="submit" class="btn btn-primary">Add</button>
	</form>
  </div>
</div>
@endsection