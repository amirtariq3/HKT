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
                <h3 class='card-heading p-1 pl-3'>Update Documents</h3>
            </div>
            <div class="card-body">
                
                <div class="row">
                    <div class="card-body">
                        <div class="row">
                        <form method="POST"  enctype="multipart/form-data">
                            
                            @csrf
                            <div class="col-md-10">

                                <div class="form-group">
                                    <label>Comapny</label>
                                    <select class="form-select" id="basicSelect" name="company_id" disabled="true" required>
                                        @foreach ($company as $m)
                                        <option {{($row->company_id == $m->id)? 'selected' : ''}} value="{{$m->id}}">{{$m->name}}</option>
                                        @endforeach
                                        
            
                                    </select>
                            </div>
                            
                            

                            <div class="form-group">
                                    <label>image</label><br>
                                    <input type="file" name="image" id="customFile">
                                    <img src="{{asset('public/images/'.$row->image)}}" height="50"/>
                            </div>

                            <div class="form-group">
                                <label>Document</label><br>
                                <input type="file" name="document" id="customFile">
                        </div>

                            <div class="form-group">
                                <label>Detail</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="detail" required>{{$row->detail}}</textarea>
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
