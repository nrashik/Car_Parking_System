@extends('backend.master')

@section('content')

<h1>Parking Areas
  <a class="btn btn-primary" href="{{route('add.area')}}">Add New Area</a></h1>

  <table class="table">
  <thead>
    <tr>
      <th scope="col">Sl</th>
      <th scope="col">Parking Area</th>
      <th scope="col">Parking Name</th>
      <th scope="col">Parking Address</th>
    </tr>
  </thead>
  <tbody>
    @foreach($areas as $area)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$area->area_name}}</td>
      <td>{{$area->area_zone}}</td>
      <td>{{$area->area_address}}</td>
      

  @endforeach
  </tbody>
</table>


@endsection