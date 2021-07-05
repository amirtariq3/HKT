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
                <h3 class='card-heading p-1 pl-3'>Update Member</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="card-body">
                        <div class="row">
                        <form method="POST" action="{{route('admin.member.update', [$member->id])}}" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="col-md-10">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" id="basicInput" value="{{$member->name}}" placeholder="Enter name" name="name" required>
                            </div>

                            <div class="form-group">
                                <label>Gender</label>
                                <select class="form-select" id="basicSelect" name="gender" required>
                                    <option value="mail">Male</option>
                                    <option value="female">Female</option>
        
                                </select>
                            </div>
                            
                            
                                <div class="form-group">
                                    <label>Company</label>
                                    <input type="text" class="form-control" id="basicInput" value="{{$member->company}}" placeholder="Enter Company" name="company" required>
                            </div>

                            
                                <div class="form-group">
                                    <label>Designation</label>
                                    <input type="text" class="form-control" id="basicInput" value="{{$member->designation}}" placeholder="Enter designation" name="designation" required>
                            </div>

                            
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" class="form-control" id="basicInput" value="{{$member->phone}}" placeholder="Enter phone" name="phone" required>
                            </div>

                            
                                <div class="form-group">
                                    <label>Mobile</label>
                                    <input type="text" class="form-control" id="basicInput" value="{{$member->mobile}}" placeholder="Enter mobile" name="mobile">
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" id="basicInput" value="{{$member->email}}" placeholder="Enter Email" name="email" required>
                        </div>

                            <div class="form-group">
                                    <label>Image</label><br>
                                    <input type="file" name="image" id="customFile">
                                    <img src="{{asset('public/images/'.$member->image)}}" height="50"/>
                            </div>

                            
                                <div class="form-group">
                                    <label>Skype</label>
                                    <input type="text" class="form-control" id="basicInput" value="{{$member->skype}}" placeholder="Enter Skype" name="skype">
                            </div>

                            
                                <div class="form-group">
                                    <label>Whatsupp</label>
                                    <input type="text" class="form-control" id="basicInput" value="{{$member->whatsupp}}" placeholder="Enter whatsupp" name="whatsupp">
                            </div>

                            
                                <div class="form-group">
                                    <label>Viber</label>
                                    <input type="text" class="form-control" id="basicInput" value="{{$member->viber}}" placeholder="Enter viber" name="viber">
                            </div>

                            
                                <div class="form-group">
                                    <label>Gtalk</label>
                                    <input type="text" class="form-control" id="basicInput" value="{{$member->gtalk}}" placeholder="Enter gtalk" name="gtalk">
                            </div>

                            
                                <div class="form-group">
                                    <label>Line</label>
                                    <input type="text" class="form-control" id="basicInput" value="{{$member->line}}" placeholder="Enter line" name="line">
                            </div>

                            <div class="form-group">
                                <label>Other</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="other" >{{$member->other}}</textarea>
                            </div>

                            <div class="form-group">
                                <label>Membership</label>
                                <select class="form-select" id="basicSelect" name="membership_type_id" required>
                                    @foreach ($data as $d)
                                    <option {{($member->membership_type_id == $d->id)? 'selected' : ''}} value="{{$d->id}}">{{$d->name}}</option>
                                    @endforeach
                                </select>
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
