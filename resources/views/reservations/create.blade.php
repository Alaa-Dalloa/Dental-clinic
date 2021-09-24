@extends('layouts.app')
@section('content')
<div class= "container">
   <h1 class="text-center">Add Reservations</h1>
  <div class="box">
	<form action=" {{ route ('reservations.store') }}"method="POST" enctype="multipart/form-data">
	  @csrf
			  <div class="form-group">
			    <label for="Time">Time:</label>
			    <input type="string" 
			    class="form-control"
			     placeholder="Enter Time" 
			     id="Time"
			     Time="Time">
			   </div>



              <div class="form-group">
			    <label for="Date">Date:</label>
			    <input type="string" 
			    class="form-control"
			     placeholder="Enter Date" 
			     id="Date"
			     Date="Date">
			   </div>


                <div class="form-group">
				    <label for="patient_id">Patient:</label>
				    <select class="form-control" name="patient_id">
				    	@foreach($patients as $one)
				    	<option value="{{$one->id}}">{{$one->name}}</option>
				    	@endforeach
				    </select>
				  </div>



				   <div class="form-group">
				    <label for="specialization_id">Specialization:</label>
				    <select class="form-control" name="specialization_id">
				    	@foreach($specializations as $one)
				    	<option value="{{$one->id}}">{{$one->name}}</option>
				    	@endforeach
				    </select>
				  </div>



	  <button type="submit" class="btn btn-primary">Add</button>
	</form>
  </div>
</div>
@endsection