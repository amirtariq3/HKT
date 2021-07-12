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
                <h3 class='card-heading p-1 pl-3'>Update News</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="card-body">
                        <div class="row">
                        <form method="POST" action="{{route('admin.news.update', [$news->id])}}" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="col-md-10">

                                <div class="form-group">
                                    <label>Category</label>
                                    <select class="form-select" id="basicSelect" name="category" required>
                                        @foreach ($category as $c)
                                        <option {{($news->news_category_id == $c->id)? 'selected' : ''}} value="{{$c->id}}">{{$c->name}}</option>
                                        @endforeach
                                        
            
                                    </select>
                            </div>
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" class="form-control" id="basicInput" value="{{$news->title}}" placeholder="Enter name" name="title" required>
                            </div>


                            <div class="form-group">
                                    <label>Image</label><br>
                                    <input type="file" name="image" id="customFile">
                                    <img src="{{asset('public/images/'.$news->image)}}" height="50"/>
                            </div>

                            <div class="form-group">
                                <label>Short Detail</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="short_detail" >{{$news->short_detail}}</textarea>
                            </div>

                        
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" >{{$news->description}}</textarea>
                            </div>

                            <div class="form-group">
                                <label>Author</label>
                                <select class="form-select" id="basicSelect" name="member_id" required>
                                    @foreach ($member as $m)
                                    <option value="{{$m->id}}">{{$m->name}}</option>
                                    @endforeach
                                    
        
                                </select>
                        </div>
                        <div class="form-group">
                            <label>Shares</label>
                            <input type="text" class="form-control" id="basicInput" value="{{$news->shares}}" placeholder="Enter name" name="shares">
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
