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
                <h3 class='card-heading p-1 pl-3'>Add Company Certificate</h3>
            </div>
            <div class="card-body">
                
                <div class="row">
                    <div class="card-body">
                        <div class="row">
                        <form method="POST" action="{{route('admin.company_certificate.store')}}" enctype="multipart/form-data">
                            
                            @csrf
                            <div class="col-md-10">

                                <div class="form-group">
                                    <label>Company</label>
                                    <select class="form-select" id="basicSelect" name="company_id" required>
                                        @foreach ($company as $m)
                                        <option value="{{$m->id}}">{{$m->name}}</option>
                                        @endforeach
                                        
            
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Certificate</label>
                                    <select class="form-select" id="basicSelect" name="certificate_id" required>
                                        @foreach ($data as $s)
                                        <option value="{{$s->id}}">{{$s->name}}</option>
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
