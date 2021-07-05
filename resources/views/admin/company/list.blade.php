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
                            <h3>Company List</h3>
                            <div class="btn">
                                <a class="btn btn-primary pull-right" href="{{route('admin.company.create')}}" style="margin-left: 780px; margin-bottom:18px;">Add New</a>
                                </div>
                            <table class="table table-striped data-table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Company Name</th>
                                        <th style="width: 20%">Country/City</th>
                                        <th>Logo</th>
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
                                ajax: "{{route('admin.company.list')}}",
                                columns: [
                                    {data: 'id', name: 'id'},
                                    {data: 'name', name: 'name'},
                                    {
                                    data: function(row){
                                     return '<small>'+row.country.name+"<br>"+row.city.name+"</small>";
                                    }
                                    },
                                    
                                    {
                                        data: function(d){ 
                                            return '<img src="{{asset('public/images')}}/'+d.logo+'" height="50" width="50"/>' ;
                                        },
                                        name: 'logo'
                                    },
                                    
                                    {
                                        'data' : function(row){
                                        return (row.status)?'Active' : 'Disabled';
                                        }
                                    },
                                    {
                                        'data' : function(row){
                                            return  '<div class="btn-group"><a class="button px-2 mr-1 mb-2 bg-theme-1 text-black dropdown-toggle" data-toggle="dropdown">'+
                                                        '<i class="fa fa-bars"></i></a>'+
                                                        
                                                        '<ul class="dropdown-menu">'+
                                                            '<li><a href="{{ $url."/service" }}/'+row.id+'">&nbsp Services</a></li>'+
                                                            '<li><a href="{{ $url."/certificate" }}/'+row.id+'">&nbsp Certificate</a></li>'+
                                                            '<li><a href="{{ $url."/director" }}/'+row.id+'">&nbsp Director</a></li>'+
                                                            '<li><a href="{{ $url."/representative" }}/'+row.id+'">&nbsp Representative</a></li>'+
                                                            '<li><a href="{{ $url."/trade_refrence" }}/'+row.id+'">&nbsp Trade Refrence</a></li>'+
                                                            '<li><a href="{{ $url."/reviews" }}/'+row.id+'">&nbsp Reviews</a></li>'+
                                                            '<li><a href="{{ $url."/branches" }}/'+row.id+'">&nbsp Branch </a></li>'+
                                                            '<li><a href="{{ $url."/documents" }}/'+row.id+'">&nbsp Document  </a></li>'+
                                                        '</ul>'+
                                                    '</div> &nbsp;'+
                                            '<a href="{{$url}}/'+ row.id +'/edit" class="button px-2 mr-1 mb-2 bg-theme-1 text-black"><i class="fa fa-edit"></i></a></div>'
                                        }
                                     }
                    
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