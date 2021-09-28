@extends('layouts.app')
@section('content')
<div class="container">
  <h1 class="text-center">All Specializations</h1>
    <div class="box">
      <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Controller</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($specializations as $specialization)
      <tr>
        <td>{{$specialization->id}}</td>
        <td>{{$specialization->Name}}</td>
        <td>
          <a href="/specializations/{{ $specialization->id }}/edit" class="btn btn-success">Edit</a>

            <a href="/specializations/{{$specialization->id}}" class="btn btn-danger">Delete</a>


        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
    </div>
</div>
@endsection