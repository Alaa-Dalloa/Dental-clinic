@extends('layouts.app')

@section('content')
    <div class="container"> 
    	<h1 class="text-center">Edit Reveal</h1>
    	<div class="box">
    		
				 <form action="/reveals/{{ $reveal->id}}/update" method="POST"  enctype="multipart/form-data ">
				 	@csrf
				  <div class="form-group">
				    <label for="drug">Drug:</label>
				    <input type="string"
				     class="form-
				     control" 
				     placeholder="Enter drug name"
				      id="name"
				      value="{{ $reveal->name }} " 
				      name="drug">
				  </div>

				
				  <div class="form-group">
				    <label for="price">price:</label>
				    <input type="double"
				     class="form-control" 
				     placeholder="Enter price"
				      id="price"
				      value="{{ $reveal->name }} " 
				      name="price">
				  </div>
				 

				 


				  <div class="form-group">
				    <label for="specialization_id">Specialization:</label>
				    <select class="form-control" name="specialization_id"  value="{{ $reveal->name }} " >
				    	@foreach($specializations as $one)
				    	<option value="{{$one->id}}">{{$one->name}}</option>
				    	@endforeach
				    </select>
				  </div>


				    <div class="form-group">
				    <label for="doctor_id">Doctor:</label>
				    <select class="form-control" name="doctor_id"  value="{{ $reveal->name }} " >
				    	@foreach($doctors as $one)
				    	<option value="{{$one->id}}">{{$one->name}}</option>
				    	@endforeach
				    </select>
				  </div>
				  

				    <div class="form-group">
				    <label for="patient_id">Patient:</label>
				    <select class="form-control" name="patient_id"  value="{{ $reveal->name }} " >
				    	@foreach($patients as $one)
				    	<option value="{{$one->id}}">{{$one->name}}</option>
				    	@endforeach
				    </select>
				  </div>	 
			
				  <button type="submit" class="btn btn-primary">update</button>
				</form>
    	</div>
    </div>
@endsection