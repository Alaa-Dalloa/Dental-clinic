@extends('layouts.app')
@section('content')
<div class= "container">
   <h1 class="text-center">Add Reservations</h1>
  <div class="box">
	<form action=" {{ route ('reservations.store') }}"method="POST" enctype="multipart/form-data">
	  @csrf
			  <div class="form-group">
			    <label for="time">time:</label>
			    <input type="string" 
			    class="form-control"
			     placeholder="Enter time" 
			     id="time"
			     time="time">
			   </div>



              <div class="form-group">
			    <label for="Date">date:</label>
			    <input type="string" 
			    class="form-control"
			     placeholder="Enter date" 
			     id="date"
			     date="date">
			   </div>


                <div class="form-group">
				    <label for="patient_id">patient:</label>
				    <select class="form-control" name="patient_id">
				    	@foreach($patients as $patient)
				    	<option value="{{$patient->id}}">{{$patient->Name}}</option>
				    	@endforeach
				    </select>
				  </div>



				   <div class="form-group">
				    <label for="specialization_id">Specialization:</label>
				    <select class="form-control" name="specialization_id">
				    	@foreach($specializations as $specialization)
				    	<option value="{{$specialization->id}}">{{$specialization->Name}}</option>
				    	@endforeach
				    </select>
				  </div>



	  <button type="submit" class="btn btn-primary">Add</button>
	</form>
  </div>
</div>
@endsection