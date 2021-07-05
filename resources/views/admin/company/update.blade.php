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
                <h3 class='card-heading p-1 pl-3'>Update Company</h3>
            </div>
            <div class="card-body">
                
                <div class="row">
                    <div class="card-body">
                        <div class="row">
                        <form method="POST" action="{{route('admin.company.update', [$row->id])}}" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="col-md-10">

                                <div class="form-group">
                                    <label>Members</label>
                                    <select class="form-select" id="basicSelect" name="member_id" required>
                                        @foreach ($member as $m)
                                        <option {{($row->member_id == $m->id)? 'selected' : ''}} value="{{$m->id}}">{{$m->name}} | {{$m->company}}</option>
                                        @endforeach
                                        
            
                                    </select>
                            </div>
                            <div class="form-group">
                                    <label>Company Name</label>
                                    <input type="text" class="form-control" id="basicInput" placeholder="Enter name" value="{{$row->name}}" name="name" required>
                            </div>

                            <div class="form-group">
                                <label>Address</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="address" required>{{$row->address}}</textarea>
                             </div>

                            <div class="form-group">
                                <label>Country</label>
                                <select class="form-select" id="basicSelect" name="country_id" required>
                                    @foreach ($country as $c)
                                    <option {{($row->country_id == $c->id)? 'selected' : ''}} value="{{$c->id}}">{{$c->name}}</option>
                                    @endforeach
                                    
                                    
        
                                </select>
                            </div>

                            <div class="form-group">
                                <label>City</label>
                                <select class="form-select" id="basicSelect" name="city_id" required>
                                    @foreach ($city as $ci)
                                    <option {{($row->city_id == $ci->id)? 'selected' : ''}} value="{{$ci->id}}">{{$ci->name}}</option>
                                    @endforeach
        
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Zip code</label>
                                <input type="text" class="form-control" id="basicInput" placeholder="Enter name" value="{{$row->zip_code}}" name="zip_code">
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" id="basicInput" placeholder="Enter name" value="{{$row->email}}" name="email" required>
                            </div>

                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" class="form-control" id="basicInput" placeholder="Enter name" value="{{$row->phone}}" name="phone" required>
                            </div>

                            <div class="form-group">
                                <label>Mobile</label>
                                <input type="text" class="form-control" id="basicInput" placeholder="Enter name" value="{{$row->mobile}}" name="mobile">
                            </div>

                            <div class="form-group">
                                <label>Website</label>
                                <input type="text" class="form-control" id="basicInput" placeholder="Enter name" value="{{$row->website}}" name="website">
                            </div>

                            

                            <div class="form-group">
                                <label>No of Employee</label>
                                <select class="form-select" id="basicSelect" name="no_of_employees" required>
                                    <option value="1-50">1-50</option>
                                    <option value="100-200">100-200</option>
                                    <option value="200-500">200-500</option>
                                    <option value="More then 500">More then 500</option>
        
                                </select>
                            </div>

                            <div class="form-group">
                                <label>No. of Branches</label>
                                <input type="text" class="form-control" id="basicInput" placeholder="Enter name" value="{{$row->no_of_branches}}" name="no_of_branches">
                            </div>

                            <div class="form-group">
                                <label>Established Year</label>
                                <input type="text" class="form-control" id="basicInput" placeholder="Enter name" value="{{$row->establish_year}}" name="establish_year">
                            </div>

                            <div class="form-group">
                                <label>Working hours</label>
                                <input type="text" class="form-control" id="basicInput" placeholder="Enter name" value="{{$row->working_hours}}" name="working_hours" required>
                            </div>

                            <div class="form-group">
                                <label>Profile</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="profile" required>{{$row->profile}}</textarea>
                            </div>

                            <div class="form-group">
                                    <label>Company Logo</label><br>
                                    <input type="file" name="logo" id="customFile">
                                    <img src="{{asset('public/images/'.$row->logo)}}" height="50"/>
                            </div>


                            <div class="form-group">
                                <label>More info</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" value="{{$row->more_info}}" name="more_info" ></textarea>
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
