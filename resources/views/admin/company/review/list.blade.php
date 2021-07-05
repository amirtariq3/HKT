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
                            <h3>Reviews List</h3>
                            
                            <table class="table table-striped data-table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Company Name</th>
                                        <th>Name</th>
                                        <th>Review</th>
                                        <th>Rating</th>
                                        <th>Date/Time</th>
                                        
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
                                ajax: "{{route('admin.company_review.list')}}",
                                columns: [
                                    {data: 'id', name: 'id'},
                                    
                                    {
                                        data: function(row){
                                            return '<small>'+row.company.name+"</small>";
                                        }
                                    },
                                    {
                                        data: function(row){
                                            return '<small>'+row.member.name+"</small>";
                                        }
                                    },
                                    
                                    {data: 'review', name: 'review'},
                                    {data: 'rating', name: 'rating'},
                                    {data: 'created_at', name: 'created_at'},
                                    
                                    
                                    
                    
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