@include('frontend.header')

<div class="directory_list_content">
  <div class="container">

    <div class="row">
      <div class="col-md-12">
          <h2>
              Widgets &amp; Resources
          </h2>
          <table class="table table-responsive">
  			<thead>
  				<tr>
  					<th>Tool</th>
  					<th>Description</th>
  					<th>URL</th>
  				</tr>
  			</thead>	
  			<tbody id="listing">
  			     @foreach ($data as $d)
                       
                   
  			    <tr>
  			        <td>
  			            {{$d->name}}
  			        </td>
  			        <td>
                        {{$d->detail}}
  			        </td>
  			        <td><a href="{{$d->url}}" class="btn btn-primary" >link</a></td>
  			    </tr>
  			    @endforeach
  			    
  			</tbody>
  	      </table>
      </div>
    </div>
  </div>
</div>

@include('frontend.footer')