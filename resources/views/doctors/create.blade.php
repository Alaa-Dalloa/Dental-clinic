@extends('layouts.app')
@section('content')
<div class= "container">
   <h1 class="text-center">Add Doctors</h1>
  <div class="box">
	<form action=" {{ route ('doctors.store') }}"method="POST" enctype="multipart/form-data">
	  @csrf
	  <div class="form-group">
	    <label for="name">name:</label>
	    <input type="string" 
	    class="form-control"
	     placeholder="Enter name" 
	     id="name"
	    name ="name">
	   </div>
	   <div class="form-group">
	    <label for="phone">phone:</label>
	    <input type="string"
	     class="form-control"
	      placeholder="Enter phone" id="phone" name="phone">
	  </div>
	  <div class="form-group">
	    <label for="email">Email:</label>
	    <input type="string"
	     class="form-control"
	      placeholder="Enter Email" id="email" name="email">
	  </div>
	  <div class="form-group">
	    <label for="specialization_id">specialization:</label>
	    <select class="form-control" name="specialization_id">
	    	@foreach($specializations as $one)
	    	<option value="{{ $one->id }}">{{ $one->Name }}</option>
	    	@endforeach
	    </select>
	  </div>

	  <button type="submit" class="btn btn-primary">Add</button>
	</form>
  </div>
</div>
@endsection