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
                <h3 class='card-heading p-1 pl-3'>Update Company Representative</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="card-body">
                        <div class="row">
                        <form method="POST"  enctype="multipart/form-data">
                            
                            @csrf
                            <div class="col-md-10">
                                <div class="form-group">
                                    <label>Company</label>
                                    <select class="form-select" id="basicSelect" name="company_id" disabled="true" required>
                                        <option>select</option>
                                        @foreach($company as $d)
                                        <option {{($row->company_id == $d->id)? 'selected' : ''}} value="{{$d->id}}">{{$d->name}}</option>
                                        @endforeach
            
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" id="basicInput" placeholder="Enter name" value="{{$row->name}}" name="name" required>
                                </div>
        
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" id="basicInput" placeholder="Enter email" value="{{$row->email}}" name="email" required>
                                </div>
                                
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" class="form-control" id="basicInput" placeholder="Enter email" value="{{$row->phone}}" name="phone" required>
                                </div>

                                <div class="form-group">
                                    <label>Whatsupp</label>
                                    <input type="text" class="form-control" id="basicInput" placeholder="Enter email" value="{{$row->whatsupp}}" name="whatsupp">
                                </div>
                                
                                <div class="form-group">
                                    <label>Representative Type</label>
                                    <select class="form-select" id="basicSelect" name="representative_id" required>
                                        <option>select</option>
                                        @foreach($data as $d)
                                        <option {{($row->representative_id == $d->id)? 'selected' : ''}} value="{{$d->id}}">{{$d->name}}</option>
                                        @endforeach
            
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
