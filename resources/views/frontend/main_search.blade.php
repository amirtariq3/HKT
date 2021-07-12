<?php                 
 $country=country();
$city=city();
$service=service();
?>
<div class="directory_search_bg">
    <div class="directory_search_content view_search">
        <div class="container">
           <form method="get" action="list.php">
            <div class="row">
            
                <h2>The world´s largest and most powerful grouping </h2>
            
            <div class="col-md-4">
             <!-- <input type="text" class="form-control" placeholder="Country" name="country"> -->
             <select class="form-control " name="country" id="country" onchange="getCity()">
                 <option disabled="" selected="">Country</option>
                 @foreach ($country as $c)
                 <option>{{$c->name}}</option>
                 @endforeach
             </select>
            </div>
            
            <div class="col-md-4">
             <!-- <input type="text" class="form-control" placeholder="City/Area" name="city"> -->
             <select class="form-control "   name="city" id="city">
                 <option disabled="" selected="">City</option>
                 @foreach ($city as $ci)
                 <option>{{$ci->name}}</option>
                 @endforeach
             </select>
            </div>
            <div class="col-md-4">
             <input type="text" class="form-control" placeholder="License/Member" name="member">
            </div>
                
            <div class="col-md-4">
             <!-- <input type="text" class="form-control" placeholder="Categories" name="business"> -->
             <select class="form-control " name="service" id="service">
                 <option disabled="" selected="">Select a service</option>
                 @foreach ($service as $s)
                 <option>{{$s->name}}</option>
                 @endforeach
             </select>
            </div>
            
            
            <div class="col-md-4">
             <input type="text" class="form-control" placeholder="Keywords" name="keyword">
            </div>
            
            <div class="col-md-4">
             <button type="submit" name="search" value="1" class="save_continue signin_button">Search</button>
            </div>
           </div>
            
           </form>
        </div>
    </div>
 </div>
 