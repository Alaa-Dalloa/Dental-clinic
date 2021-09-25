@extends('layouts.app')

@section('content')
    <div class="container"> 
    	<h1 class="text-center">Edit Operation</h1>
    	<div class="box">
    		
				 <form action="/operations/{{ $operation->id}}/update" method="POST"  enctype="multipart/form-data ">
				 	@csrf
						  <div class="form-group">
				    <label for="name">Name:</label>
				    <input type="string"
				     class="form-control" 
				     placeholder="Enter name"
				      id="name"
				      value="{{ $operation->name}}"
				      name="name">
				  </div>

				
				  <div class="form-group">
				    <label for="date">Date:</label>
				    <input type="date"
				     class="form-control" 
				     placeholder="Enter date"
				      id="date"
				      value="{{ $operation->date}}"
				      name="date">
				  </div>
				 

				 


				  <div class="form-group">
				    <label for="specialization_id">Specialization:</label>
				    <select class="form-control" name="specialization_id">
				    	@foreach($specializations as $one)
				    	<option value="{{$one->id}}">{{$one->Name}}</option>
				    	@endforeach
				    </select>
				  </div>

				    <div class="form-group">
				    <label for="doctor_id">Doctor:</label>
				    <select class="form-control" name="doctor_id">
				    	@foreach($doctors as $one)
				    	<option value="{{$one->id}}">{{$one->name}}</option>
				    	@endforeach
				    </select>
				  </div>

				    <div class="form-group">
				    <label for="patient_id">Patient:</label>
				    <select class="form-control" name="patient_id">
				    	@foreach($patients as $one)
				    	<option value="{{$one->id}}">{{$one->Name}}</option>
				    	@endforeach
				    </select>
				  </div>	 
			
				  <button type="submit" class="btn btn-primary">update</button>
				</form>
    	</div>
    </div>
@endsection