@include('frontend.dashboard.header')

<div class="container-fluid">

	<div class="row">

		<div class="col-sm-12">
			<h5 class="page-title">Trade Refrences</h5>
			<hr>
			<a href="{{route('frontend.dashboard.refrence_add')}}" class="btn btn-primary brn-sm">Add Reference</a>
			<br>
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<table class="table card-body">
							<thead>
								<tr>
									<!-- <th>ID</th> -->
									<th>Company</th>
									<th>City</th>
									<th>Contact Person</th>
									<th>Email</th>
									<th>Phone</th>
									<th>Edit/Delete</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($ref as $f)
                                    
                                
										<tr>
											
											<td>
												{{$f->company->name}}
											</td>
											<td>
												{{$f->city->name}}
											</td>
											<td>
												{{$f->contact_person}}
											</td>
											<td>
												{{$f->email}}
											</td>
											<td>
												{{$f->phone}}
											</td>
											<td>
												<a class="btn btn-primary btn-sm" href="">Edit</a>
												<a class="btn btn-danger btn-sm" href="{{route('frontend.dashboard.refrence.delete', [$f->id])}}">Delete</a>
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