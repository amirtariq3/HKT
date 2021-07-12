<?php
$service=service();
?>
<div class="browse_catgory">
   <div class="container">
       <div class="dotter_border"></div>
       <div class="text-center">
        <h2>Browse by Category</h2>
       </div>
       
       <div class="row">
        @foreach ($service as $ser)
        <div class="col-md-4">
         <div class="browse_catgory_col">
            <ul>
              <li>
                
                <a href="">
                <span class="cat_icon"><img src="{{asset('public/images/'.$ser->image)}}" alt="" height="35" width="35"></span>
                    {{$ser->name}}
                </a>
                
                
              </li>
            </ul>
          </div>
        </div>
        @endforeach
          
           
       </div>
   </div>
</div>