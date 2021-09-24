@extends('layouts.app')
@section('content')
<div class= "container">
   <h1 class="text-center">Edit Reservations</h1>
  <div class="box">
	<form action="/reservations/{{ $reservation->id }}/update"method="POST" enctype="multipart/form-data">
	  @csrf 

	         <div class="form-group">
			    <label for="time">time:</label>
			    <input type="string" 
			    class="form-control"
			     placeholder="Enter time" 
			     id="time"
			     value="{{ $reservation->time}}"
			     time="time">
			   </div>



              <div class="form-group">
			    <label for="date">date:</label>
			    <input type="string" 
			    class="form-control"
			     placeholder="Enter date" 
			     id="date"
			     value="{{ $reservation->date}}"
			     Date="date">
			   </div>


                <div class="form-group">
				    <label for="patient_id">Patient:</label>
				    <select class="form-control" name="patient_id"  value="{{ $reservation->patient}}">
				    	@foreach($patients as $patient)
				    	<option value="{{$patient->id}}">{{$patient->Name}}</option>
				    	@endforeach
				    </select>
				  </div>



				   <div class="form-group">
				    <label for="specialization_id">Specialization:</label>
				    <select class="form-control" name="specialization_id"  value="{{ $reservation->specialization}}">
				    	@foreach($specializations as $specialization)
				    	<option value="{{$specialization->id}}">{{$specialization->Name}}</option>
				    	@endforeach
				    </select>
				  </div>


	  <button type="submit" class="btn btn-primary">Update</button>
	</form>
  </div>
</div>
@endsection