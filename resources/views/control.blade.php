@extends('layouts.app')
@section('content')
<div class="container">
  <h1 class="text-center">Control</h1>
    <div class="box">
      <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $user)
      <tr>
        <th scope="row">{{ $user->id}}</th>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>
          @if (Auth::user()->role == 2 || $user->id == 1)
          <b>Disable</b>
          @else
          <div class="form-group" style="margin-bottom: 0 px ;">
            <form method="post" action="/update-role/{{$user->id}}">
              @csrf
              <select class="form-control" name="role" onchange="this.form.submit();">
                <option value="1" {{ ($user->role) ==1 ? 'selected' : null }}>Admin</option>
                <option value="2"  {{ ($user->role) ==2 ? 'selected' : null }}>Maneger</option>
                <option value="3"  {{ ($user->role) ==3 ? 'selected' : null }}>User</option>
              </select>
            </form>
          </div>
          @endif  
        </td>
      </tr>
      @endforeach
      </tbody>
  </table>
    </div>
</div>
@endsection