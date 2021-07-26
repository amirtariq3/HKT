<?php
$user=Auth::guard('member')->user();
?>
@include('frontend.dashboard.header')
<div class="container-fluid">

	<div class="row">

		<div class="col-sm-12">
			<h5 class="page-title">Company Basic Information</h5>
			<div class="card m-b-30">
				<form method="post" enctype="multipart/form-data">
					@csrf	
					@foreach ($data as $d)
						
					
					<div class="card-body">
						
						<div class="form-group row">
							<label for="example-text-input" class="col-sm-2 col-form-label">Company Name</label>

							<div class="col-sm-10">
								<input class="form-control" id="#name" type="text" name="name" value="{{$d->name}}">
							</div>
						</div>
						<div class="form-group row">
							<label for="example-text-input" class="col-sm-2 col-form-label">Address</label>

							<div class="col-sm-10">
								<textarea class="form-control" name="address">{{$d->address}}</textarea>
							</div>
						</div>
						<div class="form-group row">
							<label for="example-text-input" class="col-sm-2 col-form-label">Country</label>

							<div class="col-sm-10">
								<!-- <input class="form-control" type="text" name="country" value=""> -->
								<select class="form-control" name="country" id="country" onchange="getCity()">
									<option value="0">Select Country</option>
                                    @foreach ($country as $co)
                                    <option {{($d->country_id==$co->id)? 'selected': ''}} value="{{$co->id}}">{{$co->name}}</option>
                                    @endforeach
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label for="example-text-input" class="col-sm-2 col-form-label">City</label>

							<div class="col-sm-10">
								<!-- <input class="form-control" type="text" name="city" value=""> -->
								<select class="form-control" name="city" id="city">
									<option value="0">Select City</option>
                                    @foreach ($city as $c)
                                    <option {{($d->city_id==$c->id)? 'selected': ''}} value="{{$c->id}}">{{$c->name}}</option>
                                    @endforeach
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label for="example-text-input" class="col-sm-2 col-form-label">Zip Code</label>

							<div class="col-sm-10">
								<input class="form-control" type="text" name="zip_code" value="{{$d->zip_code}}">
							</div>
						</div>
						<div class="form-group row">
							<label for="example-text-input" class="col-sm-2 col-form-label">Company Email</label>

							<div class="col-sm-10">
								<input class="form-control" type="email" name="email" value="{{$d->email}}">
							</div>
						</div>
						<div class="form-group row">
							<label for="example-text-input" class="col-sm-2 col-form-label">Company Phone</label>

							<div class="col-sm-10">
								<input class="form-control" type="text" name="phone" value="{{$d->phone}}">
							</div>
						</div>
						<div class="form-group row">
							<label for="example-text-input" class="col-sm-2 col-form-label">Company Mobile</label>

							<div class="col-sm-10">
								<input class="form-control" type="text" name="mobile" value="{{$d->mobile}}">
							</div>
						</div>
						<div class="form-group row">
							<label for="example-text-input" class="col-sm-2 col-form-label">Company Website</label>

							<div class="col-sm-10">
								<input class="form-control" type="text" name="website" value="{{$d->website}}">
							</div>
						</div>

						<div class="form-group row">
							<label for="example-search-input" class="col-sm-2 col-form-label">No. of Employees
							</label>

							<div class="col-sm-10">
								<select class="form-control" name="employees">
									<option value="1-50" >1-50</option>
									<option value="50-100" >50-100</option>
									<option value="100-200" >100-200</option>
									<option value="200-500" >200-500</option>
									<option value="More than 500" >More than 500</option>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label for="example-text-input" class="col-sm-2 col-form-label">Company Branches</label>

							<div class="col-sm-10">
								<input class="form-control" type="text" name="no_of_branches" value="{{$d->no_of_branches}}">
							</div>
						</div>
						<div class="form-group row">
							<label for="example-text-input" class="col-sm-2 col-form-label">Company Established</label>

							<div class="col-sm-10">
								<select name="establish" class="form-control" name="establish_year">
									
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label for="example-text-input" class="col-sm-2 col-form-label">Working Hours</label>

							<div class="col-sm-10">
								<input class="form-control" type="text" name="working_hours" value="{{$d->working_hours}}">
							</div>
						</div>

						<div class="form-group row">
							<label for="example-text-input" class="col-sm-2 col-form-label">Profile</label>

							<div class="col-sm-10">
								<textarea name="profile" class="form-control summernote">{{$d->profile}}</textarea>
							</div>
						</div>

						<div class="form-group row">
							<label for="example-text-input" class="col-sm-2 col-form-label">Company logo</label>

							<div class="col-sm-10">
								<input type="file" name="logo" accept="image/*" >
								<img src="{{asset('public/images/'.$d->logo)}}" alt="user" style="height: 100px" width="100px" class="rounded-circle">
							</div>
						</div>
						<div class="form-group row">
							<label for="example-text-input" class="col-sm-2 col-form-label ">More Info.</label>

							<div class="col-sm-10">
								<textarea id="profile" name="more_info" class="form-control summernote">{{$d->more_info}}</textarea>
							</div>
						</div>
						<div class="form-group row">
							<label for="example-text-input" class="col-sm-2 col-form-label">Status</label>

							<div class="col-sm-10">
								<input class="form-control" type="text"  value="{{$d->status}}" readonly>
							</div>
						</div>

						<div class="form-group row">
							<button class="btn btn-primary col-md-6 pull-right" type="submit" name="save" value="1">Save Changes</button>
						</div>
					</div>
				</form>
			</div>
			@endforeach
		</div>
	</div>
</div>
<style>
	.btn.btn-primary{
    margin-left: 260px;
}
	</style>
@include('frontend.dashboard.footer')