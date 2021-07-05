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
                <h3 class='card-heading p-1 pl-3'>Add Company Director</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="card-body">
                        <div class="row">
                        <form method="POST" enctype="multipart/form-data">
                            
                            @csrf
                            <div class="col-md-10">
                                <div class="form-group">
                                    <label>Company</label>
                                    <select class="form-select" id="basicSelect" name="company_id" required>
                                        <option value="{{$company->id}}">{{$company->name}}</option>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" id="basicInput" placeholder="Enter name" name="name" required>
                                </div>
        
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" id="basicInput" placeholder="Enter email" name="email" required>
                                </div>
                                
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" class="form-control" id="basicInput" placeholder="Enter email" name="phone" required>
                                </div>

                                <div class="form-group">
                                    <label>Designation</label>
                                    <input type="text" class="form-control" id="basicInput" placeholder="Enter designation" name="designation" required>
                                </div>

                                <div class="form-group">
                                    <label>Detail</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="detail" ></textarea>
                                </div>

                                <div class="form-group">
                                    <label>Image</label><br>
                                    <input type="file" name="image" id="customFile">
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
