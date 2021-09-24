@extends('layouts.app')
@section('content')
<div class="container">
  <h1 class="text-center">All Services</h1>
    <div class="box">
            <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Detailes</th>
                      <th>Photo</th>
                      <th>Offer_id</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($services as $service)
                    <tr>
                      <td>{{$service->id}}</td>
                      <td>{{$service->Name}}</td>
                      <td>{{$service->Detailes}}</td>
                      <td>{{$service->Offer_id}}</td>
                      <td>
                        <a href="/services/{{ $service->id }}/edit" class="btn btn-success">Edit</a>

                          <a href="/services/{{$service->id}}" class="btn btn-danger">Delete</a>


                      </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
    </div>
</div>
@endsection