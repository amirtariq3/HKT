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
                            <h3>Trade Refrence List</h3>
                            <div class="btn">
                                <a class="btn btn-primary pull-right" href="{{route('admin.company.create.trade_refrence',[$id])}}" style="margin-left: 780px; margin-bottom:18px;">Add New</a>
                                </div>
                            <table class="table table-striped data-table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Company Name</th>
                                        <th style="width: 20%">Country/City</th>
                                        <th>Contact Person</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        
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
                                ajax: "{{route('admin.company_trade_refrence.list', [$id])}}",
                                columns: [
                                    {data: 'id', name: 'id'},
                                    {data: 'name', name: 'name'},
                                    {
                                    data: function(row){
                                     return '<small>'+row.country.name+"<br>"+row.city.name+"</small>";
                                    }
                                    },
                                    {data: 'contact_person', name: 'contact_person'},
                                    {data: 'email', name: 'email'},
                                    {data: 'phone', name: 'phone'},
                                    
                                    {
                                        'data' : function(row){
                                            return  '<a href="{{URL::to('')}}/admin/company/trade_refrence/edit/'+ row.id +'" class="button px-2 mr-1 mb-2 bg-theme-1 text-black"><i class="fa fa-edit"></i></a>'
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