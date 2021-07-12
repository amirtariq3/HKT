<?php
$company=company();
?>
<div class="directory_list_content">
    <div class="container">
  
      <div class="row">
        <div class="col-md-12">
  
            <div>
                <table class="table table-responsive">
                    <thead>
                        <tr>
                            <th>Continent</th>
                            <th>Country</th>
                            <th>City</th>
                            <th>Company Name</th>
                            <th>Contact Info</th>
                            <th>Reviews</th>
                        </tr>
                    </thead>	
                    <tbody id="listing">
                      @foreach ($company as $com)
                      <tr>
                        <td>{{$com->country->continent->name}}</td>
                        <td><img src="{{asset('public/images/'.$com->country->image)}}" width="25">&nbsp;{{$com->country->name}}</td>
                        <td>{{$com->city->name}}</td>
                        <td>{{$com->name}}</td>
                        <td><i class="fa fa-envelope fa-fw"></i> 
                          <i class="fa fa-phone fa-fw"></i> 
                          <i class="fa fa-globe fa-fw"></i></td>
                        <td><i class="fa fa-comment-alt fa-fw"></i></td>
                    </tr>
                      @endforeach
                      
                    </tbody>
                </table>
            </div>
            <div></div>
  
  
            <div class="directory_list_pagination_outer">
             <div class="directory_list_pagination">
                 <ul id="pages">
                 </ul>
             </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  