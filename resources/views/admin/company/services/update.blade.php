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
                <h3 class='card-heading p-1 pl-3'>Update Company Service</h3>
            </div>
            <div class="card-body">
                
                <div class="row">
                    <div class="card-body">
                        <div class="row">
                        <form method="POST"  enctype="multipart/form-data">
                            
                            @csrf
                            <div class="col-md-10">

                                <div class="form-group">
                                    <label>Service</label>
                                    @foreach ($services as $s)
                                        <div class="checkbox">
                                            <label><input type="checkbox" name="services[]" value="{{$s->id}}" {{ in_array($s->id, $c_services)? 'checked':'' }}>{{$s->name}}</label>
                                        </div>
                                    @endforeach
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
