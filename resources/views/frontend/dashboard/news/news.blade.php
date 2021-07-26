@include('frontend.dashboard.header')

<div class="container-fluid">

	<div class="row">

		<div class="col-sm-12">
			<h5 class="page-title">Trade Refrences</h5>
			<hr>
			<a href="{{route('frontend.dashboard.news_add')}}" class="btn btn-primary brn-sm">Add News</a>
			<br>
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<table class="table card-body">
							<thead>
								<tr>
									<!-- <th>ID</th> -->
									<th>Category</th>
									<th>Title</th>
									<th>Author</th>
									<th>Edit/Delete</th>
								</tr>
							</thead>
							<tbody>
                              
								@foreach ($data as $f)
                                    
                                
										<tr>
											
											<td>
												{{$f->category->name}}
											</td>
											<td>
												{{$f->title}}
											</td>
											<td>
												{{$f->member->name}}
											</td>
											
											<td>
												<a class="btn btn-primary btn-sm" href="{{route('frontend.dashboard.news_edit', [$f->id])}}">Edit</a>
												<a class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')" href="{{route('frontend.dashboard.news.delete', [$f->id])}}">Delete</i></a>

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