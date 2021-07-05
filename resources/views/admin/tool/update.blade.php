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
                <h3 class='card-heading p-1 pl-3'>Update Widgets & Resources</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="card-body">
                        <div class="row">
                        <form method="post" action="{{route('admin.tool.update', [$data->id])}}">
                            @method('PUT')
                            @csrf
                            <div class="col-md-10">
                                <div class="form-group">
                                    <label>Name</label> 
                                    <input type="text" class="form-control" id="basicInput" placeholder="Enter name" value="{{$data->name}}" name="name" required>
                                </div>
        
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="detail" >{{$data->detail}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label>Link</label>
                                    <input type="text" class="form-control" id="basicInput" placeholder="Enter name" value="{{$data->link}}" name="link" >
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
