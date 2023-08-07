@extends('frontend.master')

@section('content')

<h1>Customer Registration</h1>

<form action="{{route('customer.store')}}"method="post" enctype="multipart/form-data">
    @csrf 

    <br>
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
    
  </div>

  <br>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>

  <br>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    
  </div>

  <br>
  <div class="form-group">
    <label for="exampleInputEmail1">Address</label>
    <input name="address" type="string" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Contact Number">
    
  </div>


  <br>
  <div class="form-group">
    <label for="exampleInputEmail1">Contact Number</label>
    <input name="phone" type="string" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Contact Number">
    
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection