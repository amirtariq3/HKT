@include('frontend.dashboard.header')
<div class="container-fluid">

	<div class="row">

		
				<div class="col-md-12">
					<div class="card">
						<form method="post" class="card-body" enctype="multipart/form-data">
							@csrf
							<h4 class="card-title">Edit</h4>
							<hr>
							<div class="form-group">
								<input type="text" name="name" value="{{$data->name}}" class="form-control" placeholder="Name" required="" value="<?php echo @$data['name'] ?>">
							</div>
							<div class="form-group">
								<select class="form-control" name="designation" required="">
									<option value="CEO">CEO</option>
									<option value="Director">Director</option>
								</select>
							</div>
							<div class="form-group">
								<input type="number" name="phone" value="{{$data->phone}}" class="form-control" placeholder="Phone" required="" value="<?php echo @$data['phone'] ?>">
							</div>
							<div class="form-group">
								<input type="text" name="email" value="{{$data->email}}" class="form-control" placeholder="Email" required="" value="<?php echo @$data['email'] ?>">
							</div>
							<div class="form-group">
								<input type="file" name="image"  accept="Image/*">
								
								<img src="{{asset('public/images/'.$data->image)}}" height="50"/>
								
							</div>
							<div class="form-group">
								<textarea class="form-control summernote" name="detail">{{$data->detail}}</textarea>
							</div>							
							<div class="form-group">
								
								<button class="btn btn-primary btn-block" type="submit" name="edit" value="edit">Save</button>
								
								
								
								
							</div>
						</form>
					</div>
					
				</div>
	</div>
</div>


@include('frontend.dashboard.footer')