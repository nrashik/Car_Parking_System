@extends('frontend.master')

@section('content')

<h1>Customer Login</h1>

<form action="{{route('customer.login')}}" method="post">
  @csrf
  
    <br>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>

  <br>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
  
  <p>Don't have account ? <a href="{{route('customer.registration')}}">Register</a></p>
  <!-- <a type="submit" class="btn btn-primary" herf="{{route('customer.registration')}}">Register?</a> -->
</form>



@endsection