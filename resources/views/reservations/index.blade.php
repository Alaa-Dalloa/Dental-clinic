@extends('layouts.app')
@section('content')
<div class="container">
  <h1 class="text-center">All Reservations</h1>
    <div class="box">
      <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Time</th>
        <th>Date</th>
        <th>Patient_id</th>
        <th>Specialization_id</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($reservations as $reservation)
      <tr>
        <td>{{$reservation->id}}</td>
        <td>{{$reservation->time}}</td>
        <td>{{$reservation->date}}</td>
        <td>{{$reservation->patient_id}}</td>
        <td>{{$reservation->specialization_id}}</td>
        <td>
          <a href="/reservations/{{ $reservation->id }}/edit" class="btn btn-success">Edit</a>

            <a href="/reservations/{{$reservation->id}}" class="btn btn-danger">Delete</a>


        </td>
      </tr>
      @endforeach
      </tbody>
  </table>
    </div>
</div>
@endsection