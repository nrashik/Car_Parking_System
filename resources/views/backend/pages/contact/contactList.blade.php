@extends('backend.master')

@section('content')

<h1>Contact Request List</h1>

  <table class="table">
  <thead>
    <tr>
      <th scope="col">Sl</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Subject</th>
      <th scope="col">Message </th>
    </tr>
  </thead>
  <tbody>
    @foreach($contacts as $contact)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$contact->name}}</td>
      <td>{{$contact->email}}</td>
      <td>{{$contact->subject}}</td>
      <td>{{$contact->message}}</td>
      <td>
        <a class="btn btn-danger" href="{{Route('contactUs.delete', $contact->id)}}">Delete</a>
      </td>
      

  @endforeach
  </tbody>
</table>


@endsection