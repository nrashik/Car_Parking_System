@extends('backend.master')

@section('content')

<div class="container mt-3">
  <div class="container">
    <h2>
    User Information
    </h2>
</div>
<form>
  <br><div class="form-group">
    <label for="">Name </label>
    <input type="name" class="form-control" name="name" id="" placeholder="Enter name">
  </div>
  

  <br><div class="form-group">
    <label for="">Contact Number </label>
    <input type="tel" class="form-control" name="contact_number" id="" placeholder="Enter Number">
  </div>


  <br><div class="form-group">
    <label for="">Address </label>
    <input type="text" class="form-control" name="address" id="" placeholder="Enter name">
  </div>
  
 <br> <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection