@extends('backend.master')

@section('content')

<h1>Customer List</h1>

  <table class="table">
  <thead>
    <tr>
      <th scope="col">SL</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Phone</th>
    </tr>
  </thead>
  <tbody>
    <!-- @foreach($areas as $area)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$area->area_name}}</td>
      <td>{{$area->area_zone}}</td>
      <td>{{$area->area_address}}</td>
      

  @endforeach -->
  </tbody>
</table>

@endsection