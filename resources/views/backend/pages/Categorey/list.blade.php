@extends('backend.master')

@section('content')

<h1>Categorey Table 
    <a class="btn btn-success"href="{{route('categorey.create')}}">Create New Categorey</a></h1>


<table class="table">
  <thead>
    <tr>
      <th scope="col">Sl</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Description</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($categories as $category)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$category->name}}</td>
      <td>{{$category->price}}</td>
      <td>{{$category->description}}</td>
      <td>
        <img src="{{asset('/uploads/category/' .$category->image)}}"style="width: 60px;" alt="">


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