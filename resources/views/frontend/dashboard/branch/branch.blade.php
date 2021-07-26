@include('frontend.dashboard.header')
<div class="container-fluid">

	<div class="row">

		<div class="col-sm-12">
			<h5 class="page-title">Company Branches</h5>
			<hr>
			<a href="{{route('frontend.dashboard.branch_add')}}" class="btn btn-primary brn-sm">Add Branch</a>
			<br>
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<table class="table card-body">
							<thead>
								<tr>
									<!-- <th>ID</th> -->
									<th>Name</th>
									<th>Address</th>
									<th>City</th>
									<th>Phone</th>
									<th>Edit</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($bran as $b)
                                    
                                
										<tr>
											
											<td>
												{{$b->branch}}
											</td>
											<td>
												{{$b->address}}
											</td>
											<td>
												{{$b->city->name}}
											</td>
											<td>
												{{$b->phone}}
											</td>
											<td>
												<a class="btn btn-primary btn-sm" href="{{route('frontend.dashboard.branch_edit', [$b->id])}}">Edit</a>
												<a class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')" href="{{route('frontend.dashboard.branch.delete', [$b->id])}}">Delete</i></a>

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