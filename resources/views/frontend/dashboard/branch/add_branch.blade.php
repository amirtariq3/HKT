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
								<input type="text" class="form-control" value="{{$data->name}}" name="name" placeholder="Branch Name" required="" value="">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" value="{{$data->address}}" name="address" placeholder="Branch Address" required="" value="">
							</div>
							<div class="form-group">
								<!-- <input type="text" class="form-control" name="country" placeholder="Country" required="" value=""> -->
								<select class="form-control" name="country_id" id="country">
									<option value="0">Select Country</option>
									@foreach ($country as $co)
									<option value="{{$co->id}}">{{$co->name}}</option>
									@endforeach
								</select>
							</div>
							<div class="form-group">
								<!-- <input type="text" class="form-control" name="city" placeholder="City" required="" value=""> -->
								<select class="form-control" name="city_id" id="city">
									<option value="0">Select City</option>
									@foreach ($city as $c)
									<option value="{{$c->id}}">{{$c->name}}</option>
									@endforeach
								</select>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" value="{{$data->phone}}" name="phone" placeholder="Phone"  value="">
							</div>
							<div class="form-group">
								<input type="text" class="form-control"  name="email" placeholder="Email"  value="">
							</div>


								
								
								<button class="btn btn-primary btn-block" type="submit" name="add" value="add">Add Branch</button>
								
							
						</form>
					</div>
					
				</div>
			</div>

		</div>
	</div>
</div>
@include('frontend.dashboard.footer')