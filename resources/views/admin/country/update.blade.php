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
                <h3 class='card-heading p-1 pl-3'>Update Country</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="card-body">
                        <div class="row">
                        <form method="POST" action="{{route('admin.country.update', [$data->id])}}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="col-md-10">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" id="basicInput" placeholder="Enter name" value="{{$data->name}}" name="name" required>
                                </div>
        
                                <div class="form-group">
                                    <label>Country Code</label>
                                    <input type="text" class="form-control" id="basicInput" placeholder="Enter code" value="{{$data->code}}" name="code" required>
                                </div>
                                <div class="form-group">
                                    <label>Continent</label>
                                    <select class="form-select" id="basicSelect" name="continent" required>
                                        @foreach($con as $d)
                                        <option {{($data->continent_id == $d->id)? 'selected' : ''}} value="{{$d->id}}">{{$d->name}}</option>
                                        @endforeach
            
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label>Image</label><br>
                                    <input type="file" name="image" id="customFile">
                                    <img src="{{asset('public/images/'.$data->image)}}" height="50"/>
                                </div>
        
                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-select" id="basicSelect" name="status" required>
                                        <option value="1">Active</option>
                                        <option value="0">In-Active</option>
            
                                    </select>
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
