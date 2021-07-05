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
                            <h3>Company Service List</h3>
                            <div class="btn">
                                <a class="btn btn-primary pull-right" href="{{route('admin.company_service.add', [$c->id])}}" style="margin-left: 780px; margin-bottom:18px;">Add New</a>
                                </div>
                                <table class="table table-striped">
                                    <thead>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($c->services as $i)
                                            <tr>
                                                <td>{{ $i->id }}</td>
                                                <td>{{ $i->name }}</td>
                                                <td>
                                    
                                                    <a href="{{route('admin.company_service.edit', [$c->id])}}"><i data-feather="edit" width="20"></i></a>
                                                    <a href=""><i data-feather="trash-2" width="20"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                        </div>
                           
                        </body>
                           
                        <script>
                            $(document).ready(function(){
                                $('.table').DataTable({
                                    'info': true,
                                    'ordering': true,
                                    'searching': true,
                                    'select': true,
                                    
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