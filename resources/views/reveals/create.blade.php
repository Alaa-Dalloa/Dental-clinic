@extends('layouts.app')
@section('content')
<<<<<<< HEAD
    <div class="container"> 
    	<h1 class="text-center">Add Reveal</h1>
    	<div class="box">
    		
				 <form action=" {{ route ('reveals.store') }}" method="POST"  enctype="multipart/form-data ">
				 	@csrf
				  <div class="form-group">
				    <label for="drug">Drug:</label>
				    <input type="string"
				     class="form-control" 
				     placeholder="Enter drug name"
				      id="name"
				      name="drug">
				  </div>

				
				  <div class="form-group">
				    <label for="price">Price:</label>
				    <input type="double"
				     class="form-control" 
				     placeholder="Enter price"
				      id="price"
				      name="price">
				  </div>
				 

				 


				  <div class="form-group">
				    <label for="specialization_id">Specialization:</label>
				    <select class="form-control" name="specialization_id">
				    	@foreach($specializations as $specialization)
				    	<option value="{{$specialization->id}}">{{$specialization->Name}}</option>
				    	@endforeach
				    </select>
				  </div>

				    <div class="form-group">
				    <label for="doctor_id">Doctor:</label>
				    <select class="form-control" name="doctor_id">
				    	@foreach($doctors as $doctor)
				    	<option value="{{$doctor->id}}">{{$doctor->name}}</option>
				    	@endforeach
				    </select>
				  </div>

				    <div class="form-group">
				    <label for="patient_id">Patient:</label>
				    <select class="form-control" name="patient_id">
				    	@foreach($patients as $patient)
				    	<option value="{{$patient->id}}">{{$patient->Name}}</option>
				    	@endforeach
				    </select>
				  </div>

				 
			
				  <button type="submit" class="btn btn-primary">Add</button>
				</form>
    	</div>
    </div>
=======
<div class= "container">
   <h1 class="text-center">Add Reveals</h1>
  <div class="box">
	<form action=" {{ route ('reveals.store') }}"method="POST" enctype="multipart/form-data">
	  @csrf
	  <div class="form-group">
	    <label for="drug">drug:</label>
	    <input type="string" 
	    class="form-control"
	     placeholder="Enter drug" 
	     id="drug"
	    name ="drug">
	   </div>
	   <div class="form-group">
	    <label for="price">price:</label>
	    <input type="string"
	     class="form-control"
	      placeholder="Enter price" id="price" name="price">
	  </div>
	
	  <div class="form-group">
	    <label for="specialization_id">specialization:</label>
	    <select class="form-control" name="specialization_id">
	    	@foreach($specializations as $specialization)
	    	<option value="{{ $specialization->id }}">{{ $specialization->Name }}</option>
	    	@endforeach
	    </select>
	  </div>
	  <div class="form-group">
	    <label for="doctor_id">doctor:</label>
	    <select class="form-control" name="doctor_id">
	    	@foreach($doctors as $one)
	    	<option value="{{ $one->id }}">{{ $one->name }}</option>
	    	@endforeach
	    </select>
	  </div>
	  <div class="form-group">
	    <label for="patient_id">patient:</label>
	    <select class="form-control" name="patient_id">
	    	@foreach($patients as $patient)
	    	<option value="{{ $patient->id }}">{{ $patient->Name }}</option>
	    	@endforeach
	    </select>
	  </div>

	  <button type="submit" class="btn btn-primary">Add</button>
	</form>
  </div>
</div>
>>>>>>> 88223527167b154b5c2dd8243df0b56838e54342
@endsection