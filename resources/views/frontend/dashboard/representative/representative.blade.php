@include('frontend.dashboard.header')

<div class="container-fluid">

	<div class="row">

		<div class="col-sm-12">
			<h5 class="page-title">Company Representatives</h5>
			<hr>
			<a href="{{route('frontend.dashboard.representative_add')}}" class="btn btn-primary brn-sm">Add Representative</a>
			<br>
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<table class="table card-body">
							<thead>
								<tr>
									<!-- <th>ID</th> -->
									<th>Name</th>
									<th>Designation</th>
									<th>Email</th>
									<th>Phone</th>
									<th>Whatsapp</th>
									<th>Edit/Delete</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($rep as $p)
										<tr>
											
											<td>
                                                {{$p->name}}	
											</td>
											<td>
												{{$p->representative->name}}
											</td>
											<td>
												{{$p->email}}
											</td>
											<td>
												{{$p->phone}}
											</td>
											<td>
												{{$p->whatsapp}}
											</td>
											<td>
												<a class="btn btn-primary btn-sm" href="{{route('frontend.dashboard.representative_edit', [$p->id])}}">Edit</a>
												<a class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')" href="{{route('frontend.dashboard.representative.delete', [$p->id])}}">Delete</i></a>
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