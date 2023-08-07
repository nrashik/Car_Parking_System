@extends('backend.master')

@section('content')
<h1>Customer List</h1>
<table class="table">
  <thead>
    <tr>
   
      <th scope="col">SL</th>
      <th scope="col">Name</th>
      <th scope="col">Password</th>
      <th scope="col">Address</th>
      <th scope="col">Contact Number</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($customers as $customer)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$customer->name}}</td>
      <td>{{$customer->password}}</td>
      <td>{{$customer->address}}</td>
      <td>{{$customer->phone}}</td>
      <td>
        <!-- <img src="{{asset('/uploads/category/' .$customer->image)}}"style="width: 60px;" alt=""> -->
      </td>
      <td>
        <a class="btn btn-primary" href="">Edit</a>
        <a class="btn btn-success" href="">Update</a>
        <a class="btn btn-danger" href="">Delete</a>
      </td>
    </tr>
    
    @endforeach
   
  </tbody>
</table>


@endsection