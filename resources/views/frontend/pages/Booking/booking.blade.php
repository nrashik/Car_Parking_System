@extends('frontend.master')

@section('content')

<!DOCTYPE html>
<html>
<head>
  <title>Booking Create Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      margin: 0;
      padding: 20px;
    }

    h1 {
      text-align: center;
      color: #333;
    }

    form {
      max-width: 500px;
      margin: 0 auto;
      background-color: #f5f5f5;
      padding: 50px;
      border-radius: 8px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }

    label {
      display: block;
      margin-bottom: 12px;
      font-weight: bold;
      color: #333;
    }

    input[type="text"],
    input[type="datetime-local"],
    textarea,
    select {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 6px;
      box-sizing: border-box;
      margin-bottom: 20px;
     

      font-size: 16px;
    }

    textarea {
      resize: vertical;
    }

    input[type="submit"] {
      background-color: #ff4f00;
      color: #fff;
      padding: 12px 24px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-size: 16px;
      transition: background-color 0.3s ease;
    }

    input[type="submit"]:hover {
      background-color: #e63b00;
    }
  </style>
</head>
<body> 
  @if(session()->has('msg'))
  <p class="alert alert-success">{{session()->get('msg')}}</p>
  @endif

  <form action="{{route('booking.store',$location_id)}}" method="post">
    @csrf
    <h1>Booking Create Form</h1>
    
    <label for="status">Vehicle Information</label>
    <input value="" type="text" id="status" name="vehicle" required>

   
    

    <label for="visit_date">parking Date:</label>
    <input class="form-control" type="date" id="visit_date" name="date" >
    <br>

    <label for="visit_time">From time</label>
    <!-- <input class="form-control" type="time" id="time" name="time" > -->

    <select class="form-control" name="time" id="">
      <option value="8">8 AM</option>
      <option value="9">9 AM</option>
      <option value="10">10 AM</option>
      <option value="11">11 AM</option>
      <option value="12">12 AM</option>
      <option value="13">1 PM</option>
      <option value="14">2 PM</option>
      <option value="15">3 PM</option>
      <option value="16">4 PM</option>
      <option value="17">5 PM</option>
      <option value="18">6 PM</option>
      <option value="19">7 PM</option>
      <option value="20">8 PM</option>
      <option value="21">9 PM</option>
      <option value="22">10 PM</option>

      
    </select>


    <label for="visit_time">Slot</label>
    <select class="form-control" name="slot" id="">
      <option value="A1">A1</option>
      <option value="A2">A2</option>
      <option value="A3">A3</option>
      <option value="A4">A4</option>
      <option value="B1">B1</option>
      <option value="B2">B2</option>
      <option value="B3">B3</option>
      <option value="B4">B4</option>
      <option value="C1">C1</option>
      <option value="C2">C2</option>
      <option value="C3">C3</option>
      <option value="C4">c4</option>
      <option value="D1">D1</option>
      <option value="D2">D2</option>
      <option value="D3">D3</option>
      <option value="D4">D4</option>


     

      
    </select>

    <label for="visit_date">Hour you need:</label>
    <input class="form-control" type="number" id="hour" name="hour" >
    <br>


    <input type="hidden" name="customer_id" value="{{auth('customer')->user()->id}}">
    


    
<br>
    <label for="additional_comments">Additional Comments:</label>
    <textarea id="additional_comments" name="comment" rows="4" cols="50" required></textarea>

    <input type="submit" value="Submit">
  </form>
</body>
</html>


@endsection