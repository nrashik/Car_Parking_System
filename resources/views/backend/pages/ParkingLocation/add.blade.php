@extends('backend.master')

@section('content')

<div class="containere">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="card p-3 mt-3">
                <div class="card-header">
                    <div class="card-body">
                    <form href="" action="{{route('location.store')}}" method="post">
                      @csrf
                      <div class="form-group">
                        <label for="exampleInputEmail1">Area</label>
                        <select class="form-control" name="area" id="">
                            <option Selectd>Choose Area</option>
                            @foreach($area as $ar)
                            <option value="{{$ar->id}}">{{$ar->area_name}}</option>
                            @endforeach
                        </select>
                      </div><br>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Location Name</label>
                        <input type="text" name='location' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Location Name">
                      </div><br>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Address</label>
                        <input type="text" name='address' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Address">
                      </div><br>

                      <div class="form-group">
                        <label for="exampleInputEmail1">CC Camera</label>
                        <input type="text" name='cc_camera' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Availability">
                      </div><br>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Guard</label>
                        <input type="text" name='guard' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Availability">
                      </div><br>


                      <button  type="submit" class="btn btn-primary">Submit</button>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection