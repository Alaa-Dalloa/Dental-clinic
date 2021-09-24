@extends('layouts.app')
@section('content')
<div class= "container">
   <h1 class="text-center">Edit Specializations</h1>
  <div class="box">
	<form action="/specializations/{{ $specialization->id }}/update" method="POST" enctype="multipart/form-data">
	  @csrf
	  <div class="form-group">
	    <label for="Name">Name:</label>
	    <input type="string" 
	    class="form-control"
	     placeholder="Enter Name" 
	     id="Name"
        value="{{ $specialization->Name}}" 
	     name="Name">
	   </div>

	  <button type="submit" class="btn btn-primary">Update</button>
	</form>
  </div>
</div>
@endsection