@extends('backend.master')

@section('content')


<body>
    <div class="container mt-5">
      <h1>Report for total bill</h1>
        <form action="{{Route('report.search')}}" method="get" >

            @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div>
                <p class="alert alert-danger"> {{$error}}</p>
                </div>
            @endforeach
            @endif  
              
                <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="start_date">Start Date:</label>
                    <input value="{{request()->start_date}}" type="date" class="form-control" id="start_date" name="start_date" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="end_date">End Date:</label>
                    <input value="{{request()->end_date}}" type="date" class="form-control" id="end_date" name="end_date" required>
                </div>
                </div>
  
  
            <button type="submit" class="button">Generate Report</button>
        </form>

<div class="container mt-5" id="printReport"> 
    <h2 class="page-header">Report of  {{request()->start_date}}  to  {{request()->end_date}}</h2>
    
    
    <br>
    
        <div >
        <table class="table">
    <thead>
        <tr>
            <th scope="col">Sl</th>
            <th scope="col">Vehicle Info.</th>
            <th scope="col">Date</th>
            <th scope="col">Hour</th>
            <th scope="col">Start Time</th>
            <th scope="col">End Time</th>
            <th scope="col">Total</th>
            <th scope="col">Comment</th>
        </tr>
    </thead>
    <tbody>
        @if(isset($report))
        @php
            $totalBill = 0;
        @endphp
        @foreach($report as $key=>$item)
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$item->vehicle}}</td>
            <td>{{$item->date}}</td>
            <td>{{$item->hour}}</td>
            <td>{{$item->start_time}}</td>
            <td>{{$item->end_time}}</td>
            <td>{{$item->hour * 50}}</td>
            <td>{{$item->comment}}</td>
        </tr>
        @php
            $totalBill += ($item->hour * 50);
        @endphp
        @endforeach
        <tr>
            <th colspan="6" class="text-end">Total Bill:</th>
            <td>{{$totalBill}}</td>
            <td></td>
        </tr>
        @endif
    </tbody>
</table>

            <br>
        </div>
    </div>
</div>
</body>

<button onclick="printReport()" class="button">Print Report</button>

<script>
    function printReport() {
      var printContents = document.getElementById("printReport").innerHTML;
      var originalContents = document.body.innerHTML;
      document.body.innerHTML = printContents;
      window.print();
      document.body.innerHTML = originalContents;
    }
  </script>

@endsection