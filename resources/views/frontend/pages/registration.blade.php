@extends('frontend.master')

@section('content')

<h1>Customer Registration</h1>


<div class="containere">
  <div class=""row>
    <div class="col-md-10offset-md-1">
      <div class="card p-3 mt-3">
        <div class="card-header">
          <div class="card-body">
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

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection