@extends('backend.master')

@section('content')

<h1>Edit Parking Area</h1>


<div class="containere">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="card p-3 mt-3">
                <div class="card-header">
                    <div class="card-body">
                        <form action="{{Route('area.update',$areas->id)}}" method="post" enctype="multipart/form-data">
                          @method('put')
                            @csrf
                          <div class="form-group">
                            <label for="exampleInputEmail1">Parking Location</label>
                            <input type="String" name="area_location" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$areas->area_name}}">
                            
                          </div>

                          <div class="form-group">
                            <label for="exampleInputEmail1">Parking Address</label>
                            <input type="text" name="area_address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$areas->area_address}}">
                            
                          </div>
                        <br>
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection