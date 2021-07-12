@php
    $p = Route::currentRouteName();
    $user = Auth::guard('admin')->user();
    $url = URL::current();
@endphp
@extends('layout.layout')
@section('content')
   
<div class="main-content container-fluid">
<section class="section">
<div class="row mb-4">
    <div class="col-md-12">
        <div class="card">
            
            <div class="card-body">
                <div class="row">
                    <div class="card-body">
                        <div class="row">
                            <h3>Member List</h3>
                            <div class="btn">
                                <a class="btn btn-primary pull-right" href="{{route('admin.member.create')}}" style="margin-left: 780px; margin-bottom:18px;">Add New</a>
                                </div>
                            <table class="table table-striped data-table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Company</th>
                                        <th>Designation</th>
                                        <th style="width: 20%">Phone/EMAIL</th>
                                        <th>Status</th>
                                        <th width="100px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                </tbody>
                            </table>
                        </div>
                           
                        </body>
                           
                        <script type="text/javascript">
                          $(function () {
                            
                            var table = $('.data-table').DataTable({
                                processing: true,
                                serverSide: true,
                                ajax: "{{route('admin.member.list')}}",
                                columns: [
                                    {data: 'id', name: 'id'},
                                    {data: 'name', name: 'name'},
                                    {data: 'company', name: 'company'},
                                    {data: 'designation', name: 'designation'},
                                    {
                                    data : function(row){
                                     return '<div><small>'+row.phone+'<br style="margin:0px;">'+row.email+'</small></div>';
                                    }
                                     },
                      
                                    {
                                    'data' : function(row){
                                     return (row.status)?'Active' : 'Disabled';
                                     }
                                      },
                                    {
                                        'data' : function(row){
                            return  '<a href="{{$url}}/'+ row.id +'/edit" class="button px-2 mr-1 mb-2 bg-theme-1 text-black"><i class="fa fa-edit"></i></a>'
                                    }
                                     },
                    
                                ]
                            });
                            
                          });
                        </script>
                        </html>
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