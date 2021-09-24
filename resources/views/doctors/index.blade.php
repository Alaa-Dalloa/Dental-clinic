@extends('layouts.app')
@section('content')
<div class="container">
  <h1 class="text-center">All Doctors</h1>
    <div class="box">
      <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Specialization_id</th>
        <th>Controller</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($doctors as $doctor)
      <tr>
        <td>{{$doctor->id}}</td>
        <td>{{$doctor->name}}</td>
        <td>{{$doctor->phone}}</td>
        <td>{{$doctor->email}}</td>
        <td>{{$doctor->specialization_id}}</td>
        <td>
          <a href="/doctors/{{ $doctor->id }}/edit" class="btn btn-success">Edit</a>

            <a href="/doctors/{{$doctor->id}}" class="btn btn-danger">Delete</a>
        </td>
      </tr>
      @endforeach
      </tbody>
  </table>
    </div>
</div>
@endsection