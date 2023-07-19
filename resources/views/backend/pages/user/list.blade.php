@extends('backend.master')

@section('content')
<h1>User Table
    <a class="btn btn-primary" href="{{route('create.user')}}">New User?</a></h1>
<table class="table">
  <thead>
    <tr>
   
      <th scope="col">SL</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Contact Number</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
   
  </tbody>
</table>


@endsection