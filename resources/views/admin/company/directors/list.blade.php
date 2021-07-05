@php
    //$p = Route::currentRouteName();
    $user = Auth::guard('admin')->user();
    //$url = URL::current();
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
                            <h3>Company Director List</h3>
                            <table class="table table-striped data-table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Company</th>
                                        <th>Name</th>
                                        <th style="width: 20%">Phone/EMAIL</th>
                                        <th>Designation</th>
                                        <th>Image</th>
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
                                ajax: "{{route('admin.company.director_list')}}",
                                columns: [
                                    {data: 'id', name: 'id'},
                                    {
                                        data: function(row){
                                            return '<small>'+row.company.name+"</small>";
                                        }
                                    },
                                    {data: 'name', name: 'name'},
                                    {
                                    data : function(row){
                                     return '<div><small>'+row.phone+'<br style="margin:0px;">'+row.email+'</small></div>';
                                    }
                                     },
                                    {data: 'designation', name: 'designation'},
                                    {
                                        data: function(d){ 
                                            return '<img src="{{asset('public/images')}}/'+d.image+'" height="50" width="50"/>' ;
                                        },
                                        name: 'image'
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