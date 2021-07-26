<?php
$user=Auth::guard('member')->user();
?>
@include('frontend.dashboard.header')
<div class="container-fluid">
	<div class="row">

		<div class="col-12">
			<h5 class="page-title">Member Profile</h5>
			<div class="card m-b-30">
				<form method="post" enctype="multipart/form-data">	
					@csrf
					@if(Session::get('alert'))
                    <div class="alert alert-danger">
                    {{Session::get('alert')}}
                    </div>
                    @endif
					<div class="card-body">
						
						<div class="form-group row">
							<label for="example-text-input" class="col-sm-2 col-form-label">Name</label>

							<div class="col-sm-10">
								<input class="form-control" type="text" value="{{$user->name}}" id="example-text-input" name="name">
							</div>
						</div>

						<div class="form-group row">
							<label for="example-search-input" class="col-sm-2 col-form-label">Gender
							</label>

							<div class="col-sm-10">
								<select class="form-control" name="gender">
									<option value="Male">Male</option>
									<option value="Female">Female</option>
								</select>
							</div>
						</div>

						<div class="form-group row">
							<label for="example-email-input" class="col-sm-2 col-form-label">Email
							</label>

							<div class="col-sm-10">
								<input class="form-control" type="email" value="{{$user->email}}" id="example-email-input" readonly="">
							</div>
						</div>

						<div class="form-group row">
							<label for="example-url-input" class="col-sm-2 col-form-label">Company
							</label>

							<div class="col-sm-10">
								<input class="form-control" type="text" value="{{$user->company}}"  name="company">
							</div>
						</div>

						<div class="form-group row">
							<label for="example-url-input" class="col-sm-2 col-form-label">Designation
							</label>

							<div class="col-sm-10">
								<input class="form-control" type="text" value="{{$user->designation}}"  name="designation">
							</div>
						</div>

						<div class="form-group row">
							<label for="example-tel-input" class="col-sm-2 col-form-label">Telephone
							</label>

							<div class="col-sm-10">
								<input class="form-control" type="tel" value="{{$user->phone}}" name="phone">
							</div>
						</div>

						<div class="form-group row">
							<label for="example-tel-input" class="col-sm-2 col-form-label">Mobile
							</label>

							<div class="col-sm-10">
								<input class="form-control" type="tel" value="{{$user->mobile}}"  name="mobile">
							</div>
						</div>

						<div class="form-group row">
						<label for="image" class="col-sm-2 col-form-label">Image
						</label>

						<div class="col-sm-10">
							<input type="file" name="image" id="image" accept="Image/*">
							<img src="{{asset('public/images/'.$user->image)}}" width="100">
						</div>
						</div>
<!-- 
						<div class="form-group row">
						<label for="example-password-input" class="col-sm-2 col-form-label">Confirm Password
						</label>

						<div class="col-sm-10">
						<input class="form-control parsley-success" type="password" data-parsley-equalto="#pass" value="" id="example-password-input">
						</div>
						</div> -->

						<div class="form-group row">
							<label for="example-tel-input" class="col-sm-2 col-form-label">Skype
							</label>

							<div class="col-sm-10">
								<input class="form-control" type="text" value="{{$user->skype}}" name="skype">
							</div>
						</div>

						<div class="form-group row">
							<label for="example-tel-input" class="col-sm-2 col-form-label">Whatsapp
							</label>

							<div class="col-sm-10">
								<input class="form-control" type="text" value="{{$user->whatsapp}}" name="whatsapp">
							</div>
						</div>

						<div class="form-group row">
							<label for="example-tel-input" class="col-sm-2 col-form-label">GTalk
							</label>

							<div class="col-sm-10">
								<input class="form-control" type="text" value="{{$user->gtalk}}" name="gtalk">
							</div>
						</div>

						<div class="form-group row">
							<label for="example-tel-input" class="col-sm-2 col-form-label">Viber
							</label>

							<div class="col-sm-10">
								<input class="form-control" type="text" value="{{$user->viber}}" name="viber">
							</div>
						</div>

						<div class="form-group row">
							<label for="example-tel-input" class="col-sm-2 col-form-label">Line
							</label>

							<div class="col-sm-10">
								<input class="form-control" type="text" value="{{$user->line}}" name="line">
							</div>
						</div>

						<div class="form-group row">
							<label for="example-tel-input" class="col-sm-2 col-form-label">Others
							</label>

							<div class="col-sm-10">
								<input class="form-control" type="text" value="{{$user->other}}" name="other">
							</div>
						</div>

						

						<div class="form-group row">
							<label for="example-tel-input" class="col-sm-2 col-form-label">Status
							</label>

							<div class="col-sm-10">
								<input class="form-control" type="text" value="{{$user->status}}" id="example-tel-input" readonly>
							</div>
						</div>

						<div>
							<button type="submit" class="btn btn-primary btn-lg col-md-6 pull-right" name="save" value="1">Save Changes</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	<!-- end col -->
	</div>
</div>
<style>
	.btn.btn-primary{
    margin-right: 230px;
}
	</style>

@include('frontend.dashboard.footer')