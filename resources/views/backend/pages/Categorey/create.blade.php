@extends('backend.master')

@section('content')

<form action="{{route('categorey.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <h1>
        New Category Form
    </h1>
    <br>

        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Name">
          
        </div>
        <div class="form-group">
        
        <div class="form-group">
            <label for="exampleInputEmail1">Price</label>
            <input type="number" name="price" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Price">
           
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Description</label>
            <input type="text" name="description" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Description">
          
        </div>

        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" class="form-control" id="image" >
            
        </div>
  
 <br>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection