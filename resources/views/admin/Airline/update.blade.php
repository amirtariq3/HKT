@php
    $p = Route::currentRouteName();
    $user = Auth::guard('admin')->user();
   
@endphp
@extends('layout.layout')
@section('content')
   
<div class="main-content container-fluid">
<section class="section">
<div class="row mb-4">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class='card-heading p-1 pl-3'>Update Airline</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="card-body">
                        <div class="row">
                        <form method="POST" action="{{route('admin.airline.update', [$data->id])}}" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="col-md-10">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" id="basicInput" placeholder="Enter name" value="{{$data->name}}" name="name" required>
                            </div>

                            
                                <div class="form-group">
                                    <label>Iata</label>
                                    <input type="text" class="form-control" id="basicInput" placeholder="Enter iata" value="{{$data->iata}}" name="iata" >
                            </div>

                            
                                <div class="form-group">
                                    <label>Icao</label>
                                    <input type="text" class="form-control" id="basicInput" placeholder="Enter icao"  value="{{$data->icao}}" name="icao" >
                            </div>

                            
                                <div class="form-group">
                                    <label>Awb</label> 
                                    <input type="text" class="form-control" id="basicInput" placeholder="Enter awb" value="{{$data->awb}}" name="awb">
                            </div>

                            
                                <div class="form-group">
                                    <label>Country</label>
                                    <input type="text" class="form-control" id="basicInput" placeholder="Enter country"  value="{{$data->country}}" name="country" required>
                            </div>

                                

                                

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary round">Submit</button>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
       
        </div>
    </div>
</div>
</section>
</div>

@endsection
