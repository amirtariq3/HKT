@include('frontend.dashboard.header')
<div class="container-fluid">

	<div class="row">

		<div class="col-sm-12">
			<h5 class="page-title">Company CEO/Directors</h5>
			<hr>
			<div class="row">
				<div class="col-sm-12">
					<a href="{{route('frontend.dashboard.ceo_add')}}" class="btn btn-primary btn-sm">Add New</a>
					<br>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12" style="padding-bottom: 20px">
					<div class="card">
						<table class="table card-body">
							<thead>
								<tr>
									<th>Name</th>
									<th>Designation</th>
									<th>Image</th>
									<th>Edit / delete</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($ceo as $c)
										<tr>
                                            
                                                
                                            
											<td>
												{{$c->name}}
											</td>
											<td>
												{{$c->designation}}
											</td>
											<td>
												<img src="{{asset('public/images/'.$c->image)}}" width="100">
											</td>
											<td>
												<a href="{{route('frontend.dashboard.ceo_edit', [$c->id])}}" class="btn btn-primary btn-sm">Edit</a>
												<a class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')" href="{{route('frontend.dashboard.ceo.delete', [$c->id])}}">Delete</i></a>
											</td>
                                            
										</tr>
										@endforeach
										
							</tbody>
						</table>
					</div>
					
				</div>
			</div>
			

		</div>
	</div>
</div>

@include('frontend.dashboard.footer')