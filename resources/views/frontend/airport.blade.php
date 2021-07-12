@include('frontend.header')


<div class="directory_list_content">
  <div class="container">

    <div class="row">
      <div class="col-md-12">
          <h2>
              Airports 
          </h2>
      	<div class="directory_list_pagination_outer">
           <div class="directory_list_pagination" style="width: 100% !important;">
               <ul id="pages">
                   <?php
                   foreach(range('a','z') as $v){
                        echo '<li style="border:1px solid #ddd;"><a href="?filter='.$v.'">'.strtoupper($v).'</a></li>';
                    }
                    ?>
                   
                   
                   
               </ul>
           </div>
        </div>
      	<div>
      		<table class="table table-responsive">
      			<thead>
      				<tr>
      					<th>Airport Name</th>
      					<th>IATA</th>
      					<th>ICAO</th>
      					<th>Country</th>
      				</tr>
      			</thead>	
      			<tbody id="listing">
      				@foreach ($data as $d)
  		            <tr>
  		                <td>{{$d->name}}</td>
  		                <td>{{$d->iata}}</td>
  		                <td>{{$d->icao}}</td>
  		                <td>{{$d->country}}</td>
  		            </tr>
                      @endforeach      
      			</tbody>
      		</table>
      	</div>
      	<div></div>


      	<div class="directory_list_pagination_outer">
           <div class="directory_list_pagination" style="width: 100% !important;">
               <ul id="pages">
                   <?php
                   foreach(range('a','z') as $v){
                        echo '<li style="border:1px solid #ddd;"><a href="?filter='.$v.'">'.strtoupper($v).'</a></li>';
                    }
                    ?>
                   
                   
                   
               </ul>
           </div>
        </div>
      </div>
    </div>
  </div>
</div>





@include('frontend.dashboard.footer')