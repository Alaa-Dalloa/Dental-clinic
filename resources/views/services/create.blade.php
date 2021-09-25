@extends('layouts.app')
@section('content')
<div class= "container">
   <h1 class="text-center">Add Services</h1>
		  <div class="box">
			<form action=" {{ route ('services.store') }}"method="POST" enctype="multipart/form-data">
			  @csrf
			  <div class="form-group">
			    <label for="name">name:</label>
			    <input type="string" 
			    class="form-control"
			     placeholder="Enter name" 
			     id="name"
			     name="name">
			   </div>

			     <div class="form-group">
			    <label for="detailes">detailes:</label>
			    <input type="text" 
			    class="form-control"
			     placeholder="Enter detailes" 
			     id="detailes"
			     name="detailes">
			   </div>


				   <div class="form-group">
				    <label for="photo">Photo:</label>
				    <input type="file"
				     class="form-control" placeholder="Enter photo"  id="photo"
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
			

	  <button type="submit" class="btn btn-primary">Add</button>
	</form>
  </div>
</div>
@endsection