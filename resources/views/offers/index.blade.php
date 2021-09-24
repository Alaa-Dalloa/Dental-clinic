@extends('layouts.app')
@section('content')
<div class="container">
  <h1 class="text-center">All Offers</h1>
    <div class="box">
      <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Duration</th>
        <th>Values</th>
        <th>Controller</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($offers as $offer)
      <tr>
        <td>{{$offer->id}}</td>
        <td>{{$offer->Name}}</td>
        <td>{{$offer->Duration}}</td>
        <td>{{$offer->Values}}</td>
        <td>
          <a href="/offers/{{ $offer->id }}/edit" class="btn btn-success">Edit</a>

            <a href="/offers/{{$offer->id}}" class="btn btn-danger">Delete</a>


        </td>
      </tr>
      @endforeach
      </tbody>
  </table>
    </div>
</div>
@endsection