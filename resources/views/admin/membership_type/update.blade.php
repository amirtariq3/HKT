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
                <h3 class='card-heading p-1 pl-3'>Update Membership type</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="card-body">
                        <div class="row">
                        <form method="post" action="{{route('admin.membership_type.update', [$data->id])}}">
                            @method('PUT')
                            @csrf
                            <div class="col-md-10">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" id="basicInput" value="{{$data->name}}" placeholder="Enter name" name="name" required>
                                </div>

                                <div class="form-group">
                                    <label>Membership fee*</label>
                                    <input type="text" class="form-control" id="basicInput" value="{{$data->membership_fee}}" placeholder="Enter Membership fee" name="membership_fee" required>
                                </div>

                                <div class="form-group">
                                    <label>Currency*</label>
                                    <select class="form-select" id="basicSelect" name="currency" required>
                                        <option value="USD">USD</option>
                                        <option value="BPD">BPD</option>
                                        <option value="EUR">EUR</option>
            
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Duration of membership* </label>
                                    <input type="text" class="form-control" id="basicInput" value="{{$data->duration_of_membership}}" placeholder="Enter name" name="duration_of_membership" required>
                                </div>
        
                                <div class="form-group">
                                    <label>Benefits </label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" value="{{$data->benefits}}" rows="3" name="benefits" ></textarea>
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
