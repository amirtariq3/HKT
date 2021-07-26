@include('frontend.dashboard.header')
<div class="container-fluid">

	<div class="row">

		<div class="col-sm-12">
			<div class="row">
							<h4 class="card-title">Branch</h4>
							<hr>

				<div class="col-md-12">
					<div class="card">
						<form method="post" class="card-body">
							@csrf
							<div class="form-group">
								<input type="text" class="form-control" name="name" placeholder="Branch Name" required="" value="{{$data->branch}}">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="address" placeholder="Branch Address" required="" value="{{$data->address}}">
							</div>
							<div class="form-group">
								<!-- <input type="text" class="form-control" name="country" placeholder="Country" required="" value=""> -->
								<select class="form-control" name="country_id" id="country">
									<option value="0">Select Country</option>
									@foreach ($country as $co)
									<option {{($data->country_id==$co->id)? 'selected': ''}} value="{{$co->id}}">{{$co->name}}</option>
									@endforeach
								</select>
							</div>
							<div class="form-group">
								<!-- <input type="text" class="form-control" name="city" placeholder="City" required="" value=""> -->
								<select class="form-control" name="city_id" id="city">
									<option value="0">Select City</option>
									@foreach ($city as $c)
									<option {{($data->city_id==$c->id)? 'selected': ''}} value="{{$c->id}}">{{$c->name}}</option>
									@endforeach
								</select>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="phone" placeholder="Phone"  value="{{$data->phone}}">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="email" placeholder="Email"  value="{{$data->email}}">
							</div>


								<button class="btn btn-primary btn-block" type="submit" name="edit" value="edit">Save</button>
								
								
								
							
						</form>
					</div>
					
				</div>
			</div>

		</div>
	</div>
</div>
@include('frontend.dashboard.footer')