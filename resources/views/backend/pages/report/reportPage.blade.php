@extends('backend.master')

@section('content')

<div class="col-xl-3 col-md-6">
                                <div class="card bg-info text-white mb-4">
                                    <div class="card-body"><h5>Total Bill Report</h5></div>
                                    <a href="{{Route('total.report')}}" class="btn btn-primary">View details</a>
                                </div>
                            </div>


                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-info text-white mb-4">
                                    <div class="card-body"><h5>General Report</h5></div>
                                    <a href="{{Route('general.report')}}" class="btn btn-primary">View details</a>
                                </div>
                            </div>

@endsection