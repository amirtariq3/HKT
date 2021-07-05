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
                            <h3>Membership Type List</h3>
                            <div class="btn">
                                <a class="btn btn-primary pull-right" href="{{route('admin.membership_type.create')}}" style="margin-left: 780px; margin-bottom:18px;">Add New</a>
                                </div>
                            <table class="table table-striped data-table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>membership_fee</th>
                                        <th>currency</th>
                                        <th>duration_of_membership</th>
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
                                ajax: "{{route('admin.membership_type.list')}}",
                                columns: [
                                    {data: 'id', name: 'id'},
                                    {data: 'name', name: 'name'},
                                    {data: 'membership_fee', name: 'membership_fee'},
                                    {data: 'currency', name: 'currency'},
                                    {data: 'duration_of_membership', name: 'duration_of_membership'},
                                   
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