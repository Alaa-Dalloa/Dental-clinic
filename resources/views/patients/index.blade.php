@extends('layouts.app')
@section('content')
<div class="container">
  <h1 class="text-center">All Patients</h1>
    <div class="box">
      <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Age</th>
        <th>Controller</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($patients as $patient)
      <tr>
        <td>{{$patient->id}}</td>
        <td>{{$patient->Name}}</td>
        <td>{{$patient->Phone}}</td>
        <td>{{$patient->Address}}</td>
        <td>{{$patient->Age}}</td>
        <td>
          <a href="/patients/{{ $patient->id }}/edit" class="btn btn-success">Edit</a>

            <a href="/patients/{{$patient->id}}" class="btn btn-danger">Delete</a>


        </td>
      </tr>
      @endforeach
      </tbody>
  </table>
    </div>
</div>
@endsection