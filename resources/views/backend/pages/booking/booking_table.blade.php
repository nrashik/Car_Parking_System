@extends('backend.master')

@section('content')

<h1>Booking list </h1>

  <table class="table">
  <thead>
    <tr>
      <th scope="col">Sl</th>
      <th scope="col">Vehicle Info.</th>
      <th scope="col">Date</th>
      <th scope="col">Hour</th>
      <th scope="col">Start Time</th>
      <th scope="col">End Time</th>
      <th scope="col"> Comment</th>
      <th scope="col"> Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($booking as $item)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$item->vehicle}}</td>
      <td>{{$item->date}}</td>
      <td>{{$item->hour}}</td>
      <td>{{$item->start_time}}</td>
      <td>{{$item->end_time}}</td>
      <td>{{$item->comment}}</td>
      <td>
        <a class="btn btn-info" href="">show</a>
      </td>

  @endforeach
  </tbody>
</table>

@endsection