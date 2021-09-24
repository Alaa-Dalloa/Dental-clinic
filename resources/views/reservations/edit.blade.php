@extends('layouts.app')
@section('content')
<div class= "container">
   <h1 class="text-center">Edit Reservations</h1>
  <div class="box">
	<form action="/reservations/{{ $reservation->id }}/update"method="POST" enctype="multipart/form-data">
	  @csrf 

	         <div class="form-group">
			    <label for="Time">Time:</label>
			    <input type="string" 
			    class="form-control"
			     placeholder="Enter Time" 
			     id="Time"
			     value="{{ $reservation->Time}}"
			     Time="Time">
			   </div>



              <div class="form-group">H
			    <label for="Date">Date:</label>
			    <input type="string" 
			    class="form-control"
			     placeholder="Enter Date" 
			     id="Date"
			     value="{{ $reservation->Date}}"
			     Date="Date">
			   </div>


                <div class="form-group">
				    <label for="patient_id">Patient:</label>
				    <select class="form-control" name="patient_id"  value="{{ $reservation->patient}}">
				    	@foreach($patients as $one)
				    	<option value="{{$one->id}}">{{$one->name}}</option>
				    	@endforeach
				    </select>
				  </div>



				   <div class="form-group">
				    <label for="specialization_id">Specialization:</label>
				    <select class="form-control" name="specialization_id"  value="{{ $reservation->specialization}}">
				    	@foreach($specializations as $one)
				    	<option value="{{$one->id}}">{{$one->name}}</option>
				    	@endforeach
				    </select>
				  </div>


	  <button type="submit" class="btn btn-primary">Update</button>
	</form>
  </div>
</div>
@endsection