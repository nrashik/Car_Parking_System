@extends('backend.master')

@section('content')

<h1>New Parking Location</h1>

<form action="{{route('area.store')}}" method="post" enctype="multipart/form-data">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Parking Location</label>
    <input type="String" name="area_location" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Location ">
    
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Parking Spot</label>
    <input type="string" name="area_spot" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Parking Name">
    
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Parking Address</label>
    <input type="text" name="area_address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Address">
    
  </div>
<br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection