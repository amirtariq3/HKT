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
								<input type="text" class="form-control" value="{{$data->name}}" name="name" placeholder="Company Name" required="" value="">
							</div>
							<div class="form-group">
								<select name="country_id" class="form-control">
									@foreach ($country as $co)
									<option {{($data->country_id == $co->id)? 'selected' : ''}} value="{{$co->id}}" >{{$co->name}}</option>
									@endforeach
									
									
									
								</select>
							</div>
							<div class="form-group">
								<select name="city_id" class="form-control">
									@foreach ($city as $c)
									<option {{($data->city_id == $c->id)? 'selected' : ''}} value="{{$c->id}}" >{{$c->name}}</option>
									@endforeach
									
									
									
								</select>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" value="{{$data->contact_person}} name="contact_person" placeholder="Contact Person"  value="" required>
							</div>
							<div class="form-group">
								<input type="email" class="form-control" value="{{$data->email}}" name="email" placeholder="Email" required="" value="">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" value="{{$data->phone}}" name="phone" placeholder="Phone" required="" value="">
							</div>
							<div class="form-group">
								<textarea class="form-control summernote" name="detail">{{$data->detail}}</textarea>
							</div>
							
								<button class="btn btn-primary btn-block" type="submit" name="edit" value="edit">Save Refference</button>
								
								
								
							
						</form>
					</div>
					
				</div>
			</div>

		</div>
	</div>
</div>

@include('frontend.dashboard.footer')