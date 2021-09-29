@extends('layouts.app')
@section('content')
<div class= "container">
   <h1 class="text-center">Edit Services</h1>
  <div class="box">
	<form action="/services/{{ $service->id }}/update"method="POST" enctype="multipart/form-data">
	  @csrf
			   <div class="form-group">
			    <label for="name">name:</label>
			    <input type="string" 
			    class="form-control"
			     placeholder="Enter name" 
			     id="name"
			     value="{{ $service->name}}"
			     Name="name">
			   </div>

			     <div class="form-group">
			    <label for="detailes">detailes:</label>
			    <input type="text" 
			    class="form-control"
			     placeholder="Enter detailes" 
			     id="detailes"
			     value="{{ $service->detailes}}"
			     Name="detailes">
			   </div>

				   <div class="form-group">
				    <label for="photo">Photo:</label>
				    <input type="file"
				     class="form-control"
				     value="{{ $service->photo}}" 
				      name="photo">
				  </div>




				  <div class="form-group">
				    <label for="offer_id">Offer:</label>
				    <select class="form-control" name="offer_id">
				    	@foreach($offers as $one)
				    	<option value="{{$one->id}}">{{$one->Name}}</option>
				    	@endforeach
				    </select>
				  </div>
			


	  <button type="submit" class="btn btn-primary">Update</button>
	</form>
  </div>
</div>
@endsection