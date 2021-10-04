


@extends('layouts.app')

@section('content')
    <div class="container"> 
    	<h1 class="text-center">Serviec</h1>
			<table class="table table-bordered">
			    <thead>
			      <tr>
			       
			        <th>Name</th>
			        <th>Detailes</th>
			      
			       
			      </tr>
			    </thead>
			    <tbody>

			    @foreach($serviecs as $serviec)
			     <tr>
			        
			        <td>{{ $serviec->name }}</td>
			        <td>{{ $serviec->detailes }}</td>
			        
			       
				<tr>
			    @endforeach
			      
			    </tbody>
			</table>
    </div>
@endsection