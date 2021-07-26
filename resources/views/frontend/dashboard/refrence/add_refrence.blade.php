@include('frontend.dashboard.header')
<div class="container-fluid">

	<div class="row">

		<div class="col-sm-12">
			<div class="row">
							<h4 class="card-title"> Trade Refference</h4>
							<hr>

				<div class="col-md-12">
					<div class="card">
						<form method="post" class="card-body">
							@csrf
							<div class="form-group">
								<input type="text" class="form-control" name="name" placeholder="Company Name" required="" value="">
							</div>
							<div class="form-group">
								<select name="country_id" class="form-control">
									@foreach ($country as $co)
									<option value="{{$co->id}}" >{{$co->name}}</option>
									@endforeach
									
									
									
								</select>
							</div>
							<div class="form-group">
								<select name="city_id" class="form-control">
									@foreach ($city as $c)
									<option value="{{$c->id}}" >{{$c->name}}</option>
									@endforeach
									
									
									
								</select>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="contact_person" placeholder="Contact Person"  value="" required>
							</div>
							<div class="form-group">
								<input type="email" class="form-control" name="email" placeholder="Email" required="" value="">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="phone" placeholder="Phone" required="" value="">
							</div>
							<div class="form-group">
								<textarea class="form-control summernote" name="detail"></textarea>
							</div>
							
								
								
								<button class="btn btn-primary btn-block" type="submit" name="add" value="add">Add Refference</button>
								
							
						</form>
					</div>
					
				</div>
			</div>

		</div>
	</div>
</div>

@include('frontend.dashboard.footer')