@include('frontend.dashboard.header')
<div class="container-fluid">

	<div class="row">

		<div class="col-sm-12">
			<h5 class="page-title">Company Services</h5>
			<hr>
			<div class="row">
				<div class="col-md-7">
					<div class="card">
						<table class="table card-body">
							<thead>
								<tr>
									<!-- <th>ID</th> -->
									<th>SERVICE</th>
									
								</tr>
							</thead>
							<tbody>
								@foreach ($c->services as $i)
									
								
										<tr>
											
											<td>
												{{ $i->name }}
											</td>
											

										</tr>
										@endforeach
							</tbody>
						</table>
					</div>
					
				</div>
				<div class="col-md-5">
					<div class="card">
						<form method="post" class="card-body">
							@csrf
							<h4 class="card-title">Add Service</h4>
							<hr>
							
								<div class="col-md-12">
									<label>Service</label>
                                    @foreach ($services as $s)
                                        <div class="checkbox">
                                            <label><input type="checkbox" name="services[]" value="{{$s->id}}" {{ in_array($s->id, $c_services)? 'checked':'' }}>{{$s->name}}</label>
                                        </div>
                                    @endforeach
								</div>
							
							
							
							<br>
							<button class="btn btn-primary btn-block" type="submit" name="add" value="add">Save</button>
						</form>
					</div>
					
				</div>
			</div>
			

		</div>
	</div>
</div>

@include('frontend.dashboard.footer')