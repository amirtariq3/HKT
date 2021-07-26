@include('frontend.dashboard.header')
<div class="container-fluid">

	<div class="row">

		<div class="col-sm-12">
			<div class="row">
							<h4 class="card-title">Representative</h4>
							<hr>

				<div class="col-md-12">
					<div class="card">
						<form method="post" class="card-body">
							@csrf
							<div class="form-group">
								<input type="text" class="form-control" name="name" placeholder="Name" required="" value="{{$data->name}}">
							</div>
							<div class="form-group">
								<select name="representative_id" class="form-control">
									@foreach ($rep as $d)
									<option {{($data->representative_id == $d->id)? 'selected' : ''}} value="{{$d->id}}" >{{$d->name}}</option>
									@endforeach
									
									
									
								</select>
							</div>
							<div class="form-group">
								<input type="email" class="form-control" name="email" placeholder="Email" required="" value="{{$data->email}}">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="phone" placeholder="Phone" required="" value="{{$data->phone}}">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="whatsapp" placeholder="Whatsapp"  value="{{$data->whatsapp}}">
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