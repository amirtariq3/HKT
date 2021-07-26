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
                          <td><a href="{{route('frontend.company.detail',[$com->id])}}">{{$com->country->continent->name}}</a></td>
                          <td><a href="{{route('frontend.company.detail',[$com->id])}}"><img src="{{asset('public/images/'.$com->country->image)}}" width="25">&nbsp;{{$com->country->name}}</a></td>
                          <td><a href="{{route('frontend.company.detail',[$com->id])}}">{{$com->city->name}}</a></td>
                          @if(Auth::guard('member')->user())   
                          <td><a href="{{route('frontend.company.detail',[$com->id])}}">{{$com->name}}</a></td>
                          @else
                          <td class="blurredData no-copy" style="color:transparent;text-shadow: 4px 4px 16px #000;">{{$com->name}}</td>
                          @endif
                          <td><a href="{{route('frontend.company.detail',[$com->id])}}"><i class="fa fa-envelope fa-fw"></i> 
                            <i class="fa fa-phone fa-fw"></i> 
                            <i class="fa fa-globe fa-fw"></i></td>
                          <td><i class="fa fa-comment-alt fa-fw"></i></a></td>
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
  
  