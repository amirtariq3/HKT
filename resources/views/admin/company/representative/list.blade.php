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
                            <h3>Company Representative List</h3>
                            
                            <table class="table table-striped data-table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Company</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Representative Type</th>
                                        
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
                                ajax: "{{route('admin.company_representatives.list')}}",
                                columns: [
                                    {data: 'id', name: 'id'},
                                    {
                                        data: function(row){
                                            return '<small>'+row.company.name+"</small>";
                                        }
                                    },
                                    {data: 'name', name: 'name'},
                                    
                                    {data: 'email', name: 'email'},
                                    {data: 'phone', name: 'phone'},
                                    {
                                        data: function(row){
                                            return '<small>'+row.representative.name+"</small>";
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