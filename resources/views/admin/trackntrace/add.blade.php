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
                <h3 class='card-heading p-1 pl-3'>Add Airport</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="card-body">
                        <div class="row">
                        <form method="POST" action="{{route('admin.trackntrace.store')}}" enctype="multipart/form-data">
                            
                            @csrf
                            <div class="col-md-10">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" id="basicInput" placeholder="Enter name" name="name" required>
                            </div>

                            
                                <div class="form-group">
                                    <label>Iata</label>
                                    <input type="text" class="form-control" id="basicInput" placeholder="Enter iata" name="iata" >
                            </div>

                            
                                <div class="form-group">
                                    <label>Icao</label>
                                    <input type="text" class="form-control" id="basicInput" placeholder="Enter icao" name="icao" >
                            </div>

                            <div class="form-group">
                                <label>Awb</label>
                                <input type="text" class="form-control" id="basicInput" placeholder="Enter awb" name="awb" >
                             </div>

                        <div class="form-group">
                            <label>URL</label>
                            <input type="text" class="form-control" id="basicInput" placeholder="Enter URL" name="url" >
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
