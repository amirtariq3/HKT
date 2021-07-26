@include('frontend.header')
<!--sign in-->
       
       <div class="sign_in_main">
           <div class="container">
            
               <div class="col-md-2"></div>
               <div class="col-md-8">
               	<form method="post">
                   <div class="sign_in_content">
                       <h2>Forget Password</h2>
                       <input type="email" class="form-control" placeholder="Email:" required="" name="email">
                       <button class="signin_button" type="submit"  name="reset" value="1">Reset Password</button>
                           <div class="border_width_normal"></div>
                   </div>
                </form>
               </div>
               <div class="col-md-2"></div>
               
           </div>
       </div>
       
       <!--sign in-->
@include('frontend.footer')