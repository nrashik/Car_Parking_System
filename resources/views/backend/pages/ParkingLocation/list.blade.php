@extends('backend.master')

@section('content')
<h1>Parking location<a class="btn btn-primary" href="{{route('location.add')}}">Add New Location</a></h1>

<table class="table">

  <thead>
    <tr>
      <th scope="col">SL</th>
      <th scope="col">Area</th>
      <th scope="col">Loaction Name</th>
      <th scope="col">Address</th>
      <th scope="col">CC Camera</th>
      <th scope="col">Guard</th>
      <th scope="col">No of Slots</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>
</thead>
  <tbody>
    @foreach($locations as $locat)
    <tr>
        <th scope="row">{{$loop->iteration}}</th>
        <td>{{$locat->areaShow->area_name}}</td>
         <td>{{$locat->location}}</td>
         <td>{{$locat->address}}</td>
         <td>{{$locat->cc_camera}}</td>
         <td>{{$locat->guard}}</td>
         <td>{{$locat->slot}}</td>
         <td>
          <img src="{{url('/uploads/location/' .$locat->image)}}"style="width: 60px;" alt="">
         </td>
         <td>
         <a class="btn btn-primary" href="{{Route('location.edit',$locat->id)}}">Edit</a>
         <a class="btn btn-danger" href="{{Route('location.delete',$locat->id)}}">Delete</a>
         </td>
         
         
           
    @endforeach

  </tbody>
</table>

@endsection