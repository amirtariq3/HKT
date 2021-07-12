@include('frontend.dashboard.header')
<div class="container-fluid">

	<div class="row">

		<div class="col-sm-12">
			<h5 class="page-title">Add News</h5>
			<div class="card m-b-30">
				<form method="post" enctype="multipart/form-data">	
					@csrf
					<div class="card-body">
						
						<div class="form-group row">
							<label for="example-text-input" class="col-sm-2 col-form-label">Title</label>

							<div class="col-sm-10">
								<input class="form-control" id="#name" type="text" name="title" >
								<input class="form-control" type="hidden" name="added" value="<?php echo @date('Y-m-d H:i:s')?>">
								<input class="form-control" type="hidden" name="status" value="Hidden">
								<input class="form-control" type="hidden" name="date_added" value="">
								<input class="form-control" type="hidden" name="date" value="">
								<input class="form-control" type="hidden" name="shares" value="0">
								<input class="form-control" type="hidden" name="author" value="">
							</div>
						</div>
						<div class="form-group row">
							<label for="example-text-input" class="col-sm-2 col-form-label">Short Detail</label>

							<div class="col-sm-10">
								<textarea class="form-control" name="short_detail"></textarea>
							</div>
						</div>
						<div class="form-group row">
							<label for="example-text-input" class="col-sm-2 col-form-label">Category</label>

							<div class="col-sm-10">
								<select class="form-control" name="category_id">
									@foreach ($data as $i)
									<option value="{{$i->id}}">{{$i->name}}</option>
										
									@endforeach
								</select>
							</div>
						</div>
						
						<div class="form-group row">
							<label for="example-text-input" class="col-sm-2 col-form-label">Details</label>

							<div class="col-sm-10">
								<textarea name="description" class="form-control summernote"></textarea>
							</div>
						</div>
                        
						<div class="form-group row">
							<label for="example-text-input" class="col-sm-2 col-form-label">Image</label>

							<div class="col-sm-10">
								<input type="file" name="image" accept="image/*" >
							</div>
						</div>
						<div class="form-group row">
							<button class="btn btn-primary col-md-6 col-md-offset-3" type="submit">Save Changes</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@include('frontend.dashboard.footer')
	