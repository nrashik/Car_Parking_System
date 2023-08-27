@extends('backend.master')

@section('content')

<h1>Review List</h1>

  <table class="table">
  <thead>
    <tr>
      <th scope="col">Sl</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Review</th>
    </tr>
  </thead>
  <tbody>
    @foreach($reviews as $review)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$review->name}}</td>
      <td>{{$review->email}}</td>
      <td>{{$review->review}}</td>
      <td>
        <a class="btn btn-danger" href="{{Route('review.delete')}}">Delete</a>
      </td>
      

  @endforeach
  </tbody>
</table>


@endsection
