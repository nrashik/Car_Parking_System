@extends('frontend.master')
@section('content')



@foreach($allLocation as $location)

<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="{{url('/uploads/location/' .$location->image)}}" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">{{$location->location}}</h5>
    <p class="card-text"></p>
    
    <ul> 
                                    <li><i class="far fa-check-circle"></i>Solts: </li>
                                    <li><i class="far fa-check-circle"></i>Area:{{$location->}} </li>
                                    <li><i class="far fa-check-circle"></i>Address:{{$location->address}}</li>
                                    <li><i class="far fa-check-circle"></i>CC Camera: {{$location->cc_camera}}</li>
                                    <li><i class="far fa-check-circle"></i>Guard: {{$location->guard}}</li>
                                    <!-- <li><i class="far fa-check-circle"></i>Guard: {{$location->image}}</li> -->
                                </ul>
                                <a href="{{Route('booking')}}" class="btn btn-success">Book Now</a>
  </div>
</div>
@endforeach

@endsection