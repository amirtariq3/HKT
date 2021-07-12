@include('frontend.header')
<!--register step 1-->
        <br>
       <div class="register_step_1" style="padding:0px;">
           <div class="container">
               <div class="col-md-7">
                   <div class="why_register">
                       <!--<h2>Why Register With Us?</h2>-->
                       
                       <a href="benifits/index.html" class="benifits" style="margin-left:0px;">Membership Benefits</a>
                       <a href="{{route('frontend.login')}}" class="register_now">Already Member?</a>
                   </div>
               </div>
               
               <!--<div class="col-md-5">
               	<form method="post">
                   <div class="already_member">
                       <h3>Already Member?</h3><input type="email" class="form-control" placeholder="Email:" required="" name="email">
                       <input type="password" class="form-control" placeholder="Password:" required="" name="password">
                       <button class="signin_button" type="submit"  name="login" value="1">Signin</button>
                        <a href="forget_password.php" class="forgot_pass">Forgot password?</a>
                       
                   </div>
               	</form>
               </div>-->
               
           </div>
       </div>

       <div class="register_w_u">
           <div class="container">
               
               <div class="arrw_after">
                <img src="{{asset('frontend/public/images/down_arrpw.png')}}" alt="">
               </div>
               
               <div class="register_w_u_i">
                   <h2>Register With Us!</h2>

                   <form method="post" enctype="multipart/form-data">

                   @csrf
                   <div class="col-md-6">
                       <select class="form-control" name="membership_type_id" required="" id="start">
                           <option disabled="" selected="">Type of Membership?</option>
                           @foreach ($data as $d)
                           <option value="{{$d->id}}">{{$d->name}} {{$d->currency}}</option>
                           @endforeach
                       </select>
                   </div>
                   <div class="col-md-6">
                    <input type="email" class="form-control" placeholder="E-mail" name="email" required="">
                   </div>

                   
                   <div class="col-md-12">
                   <h3>Contact Details</h3>
                   </div>
                   
                   <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="Representative Name" name="name" required="">
                   </div>
                   
                   <div class="col-md-6 gender_select">
                       
                       <select class="form-control" required="" name="gender">
                           <option disabled="" selected="">Gender</option>	
                           <option value="Male">Male</option>
                           <option value="Female">Female</option>
                       </select>
                   </div>
                   
                   <div class="clearfix"></div>
                   

                   <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="Company" name="company" required="">
                   </div>
                   
                   <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="Designation" name="designation" required="">
                   </div>
                   
                   <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="Phone Number" name="phone" required="">
                   </div>
                   
                   <div class="col-md-6">
                    <span class="control-fileupload">
                      <label for="image">Upload Member Image (Picture only)</label>
                      <input type="file" id="image" name="image" accept="Image/*" required="">
                    </span>
                   </div>
                   
                   <div class="col-md-6">
                    <input type="password" class="form-control" placeholder="Password to Login" name="pass" required="">
                   </div>
                   
                   <div class="col-md-6">
                    <input type="password" class="form-control" placeholder="Confirm Password to Login" name="c_pass" required="">
                   </div>
                   
                   <div class="col-md-12 communication">
                       <h5>Communication</h5>
                       
                       <label class="check_auto">
                            <input type="checkbox" onclick="toggle_visibility('blk_skype')">
                            <span>Skype</span>
                       </label>
                       
                       <label class="check_auto">
                            <input type="checkbox" onclick="toggle_visibility('whatsapp')">
                            <span>Whats App</span>
                       </label>
                       
                       <label class="check_auto">
                            <input type="checkbox" onclick="toggle_visibility('viber')">
                            <span>Viber</span>
                       </label>
                       
                       <label class="check_auto">
                            <input type="checkbox" onclick="toggle_visibility('gtalk')">
                            <span>Gtalk</span>
                       </label>
                       
                       <label class="check_auto">
                            <input type="checkbox" onclick="toggle_visibility('line')">
                            <span>Line</span>
                       </label>
                       
                       <label class="check_auto">
                            <input type="checkbox" onclick="toggle_visibility('other')">
                            <span>Other</span>
                       </label>
                       
                       <p><span>Type in your instant messenger details for quick and easy access through our site (Optional)</span></p>
                       
                       <div class="row">
	                       <div class="col-md-6" id="blk_skype" style="display:none;">
		                    <input type="text" class="form-control" placeholder="Skype" name="skype" >
		                   </div>
		                   
		                   <div class="col-md-6" style="display:none;" id="whatsapp">
		                    <input type="text" class="form-control" placeholder="Whatsapp" name="whatsapp" >
		                   </div>
	                       <div class="col-md-6" id="viber" style="display:none;">
		                    <input type="text" class="form-control" placeholder="Viber" name="viber" >
		                   </div>
		                   
		                   <div class="col-md-6" style="display:none;" id="gtalk">
		                    <input type="text" class="form-control" placeholder="Gtalk" name="gtalk" >
		                   </div>
	                       <div class="col-md-6" id="line" style="display:none;">
		                    <input type="text" class="form-control" placeholder="Line" name="line" >
		                   </div>
		                   
		                   <div class="col-md-6" style="display:none;" id="other">
		                    <input type="text" class="form-control" placeholder="Other" name="other" >
		                   </div>
		                   <div class="g-recaptcha col-md-6 col-md-offset-3" data-sitekey="6LcbFLAUAAAAAJ68VYg7KuRf1ubhDO-KnZrU3xnz"></div>
                       <div class="col-md-6 col-md-offset-3">
                        <button href="#" class="save_continue signin_button" type="submit" name="signup" value="1">Register</button>
                       </div>
                       
                       <!-- <div class="col-md-6">
                        <a href="#" class="save_exit register">Save and Exit</a>
                       </div> -->
                       </div>
                       
                   </div>
                   
                   </form>
               </div>
           </div>
       </div>
       <!--register step 1-->


@include('frontend.footer')