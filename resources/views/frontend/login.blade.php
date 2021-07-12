@include('frontend.header')

<!--sign in-->
       
       <div class="sign_in_main">
           <div class="container">
            
               <div class="col-md-2"></div>
               <div class="col-md-8">
               	<form method="post">
                       @csrf
                   <div class="sign_in_content">
                       <h2>Sign in to Access Directory</h2>
                       <input type="email" class="form-control" placeholder="Email:" required="" name="email">
                       <input type="password" class="form-control" placeholder="Password:" required="" name="password">
                       <button class="signin_button" type="submit"  name="login" value="1">Signin</button>
                           <a href="forget_password.php" class="forgot_pass">Forgot password?</a>
                           <div class="border_width_normal"></div>
                       <div class="after_or_center">
                        <span class="after_or">or</span>
                       </div>
                       <a href="signup.php" class="register">Join Now</a>
                       <p>We'll never share anything on directory <br>without your permission.</p>
                   </div>
                </form>
               </div>
               <div class="col-md-2"></div>
               
           </div>
       </div>
       
       <!--sign in-->

       @include('frontend.footer')