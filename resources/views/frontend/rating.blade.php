<?php
$user=Auth::guard('member')->user();

?>
@include('frontend.header')
<div class="directory_list_content">
  <div class="container">
    <div class="pagination">
      <ul>
         <li><a href="">Home <i class="fa fa-angle-double-right"></i> </a> </li>
         <li><a href="">Directory  <i class="fa fa-angle-double-right"></i></a> </li>
         <li><a href="">Company Name <i class="fa fa-angle-double-right"></i></a></li>
         <li>Reviews &amp; Ratings</li>
      </ul>
    </div>

    <div class="row">
      <div class="col-md-8">
        <h2>Reviews</h2>
        @foreach ($data as $d)
     <div class="row">
         
             
         
           <div class="col-md-2">
               <img src="{{asset('public/images/'.$user->image)}}" class="img img-responsive img-thumbnail ">
           </div> 
           <div class="col-md-4">
              <h4>
                  {{$user->name}}
                <br>
                <small>{{$d->created_at}}</small>
               </h4>
           </div> 
           <div class="col-md-4 align-middle">
            <?php for ($i=0; $i < 5; $i++) { 
                echo ($i< $d['rating'])?'<i class="fa fa-star"></i>':'<i class="fa fa-star-o"></i>';
            } ?>
           </div>
           <div class="col-md-12">
               <p>"{{$d->review}}"</p><hr>
           </div>
           
        </div>
        @endforeach


    <form method="post" id="rev">
        @csrf
        <h3>Add review</h3>
        <div class="row" style="margin-bottom: 10px;">
            <div class="col-md-6">
                <input type="text" class="form-control" name="name" value="{{$user->name}}" disabled> 
            </div>
            <div class="col-md-6">
                <select class="form-control" name="rating">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <textarea name="review" class="form-control" placeholder="Type your review..."></textarea>
            </div>
            <div class="clear-fix"></div>
            <div class="col-md-2 col-md-offset-10">
                <button class="btn btn-primary btn-block" name="save" value="1">Submit</button>
            </div>
        </div>
    </form>


      </div>

      <div class="col-md-4">
         <a href="dashboard/index.php" class="advertise_button">Edit Your Profile</a>
         
         
         <div class="section_adds">
             <h5>Ads will show there </h5>
         </div>
         
         <div class="section_adds">
             <h5>Ads will show there </h5>
         </div>
         
         <div class="section_adds">
             <h5>Ads will show there </h5>
         </div>
         
         <a href="#" class="advertise_button">Advertise with us</a>
         
     </div>
    </div>
  </div>
</div>
@include('frontend.footer')