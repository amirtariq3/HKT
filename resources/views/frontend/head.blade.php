   
    <header id="header" class="header header-v3 clearfix" style="background-color:#fff">
        <div class="login-sec">
        <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p>Professional presence in complex Logistics on the Globe</p>
            </div>
            <div class="col-md-6">
                
                <div class="top_quick_links">
                    <a href="/contact" class="site-off">Quick Contact</a>
                    <a href="#" class="site-off">Help?</a>
                </div>
                <div class="social_links">
                    <a href="#" class="site-off"><img src="https://bridginglogpro.com/images/social_icon_1.png" alt=""></a>
                    <a href="#" class="site-off"><img src="https://bridginglogpro.com/images/social_icon_2.png" alt=""></a>
                    <a href="#" class="site-off"><img src="https://bridginglogpro.com/images/social_icon_3.png" alt=""></a>
                </div>
            </div>
            </div>
            </div>
           </div>
  <div class="clear"></div>
    <div class="container logo-nav" >
        <div class="row">
            <div class="col-md-12">
                    <div class="logo_top_bar">
                        
                        
                    <div class="top_bar_login_buttons">
                        <div class="inner_buttons">
                            
                            <?php
                            if (Auth::guard('member')->check()) { ?>
                                <a class="" href="{{route('frontend.news')}}" target="_self">News</a>
                                    
                                <a class="" href="{{route('frontend.dashboard')}}" target="_self">
                                    Edit Your Profile
                                </a>
                            
                                <a class="" href="{{route('frontend.logout')}}" target="_self">Logout</a>
                            
                           <?php } else {?>        
                                    
                                        <a class="" href="{{route('frontend.news')}}" target="_self">News</a>
                                    
                                        <a class="" href="{{route('frontend.login')}}" target="_self">Member's Login</a>
                                    
                                        <a class="join_button" href="{{route('frontend.signup')}}" target="_self">Join Now</a>
                                        <?php
                           } ?>
                                    
                                    
                                    
                                    
                               
                            <div class="clear"></div>           
                        </div>
                    </div>
                        
                        <div class="logo">
                            <a href="https://bridginglogpro.com/" target="_parent">
                                <img src="{{asset('public/frontend/logo.png')}}" class="responsive"  />
                            </a>
                        </div>
                        
                </div>
            </div>
        </div>
    </div>
        
        
        
        
        <div class="main_nav_top">
            <div class="container">
        <div class="stellarnav">
                        <ul class="nav navbar-nav">
                            
                            
                            
                            
                        <li>
                            <a class="btn"  target="_parent" href="{{route('frontend.index')}}">Home</a>
                            </li>
                        <li id="menu-item-13107" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-13107">
                            <a class="btn site-off" href="https://bridginglogpro.com/about-us/">About</a>
                            <ul class="sub-menu">
                                <li id="menu-item-13861" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13861">
                                    <a class="btn site-off" href="https://bridginglogpro.com/what-we-do/" target="_parent">What we do</a>
                                    </li>
                                <li id="menu-item-13864" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13864">
                                    <a class="site-off" href="https://bridginglogpro.com/managing-committee/" target="_parent">Managing Committee</a>
                                    </li>
                            </ul>
                        </li>
                        <li id="menu-item-13931" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-13931">
                            <a class="btn site-off" href="#">Memberships</a>
                            <ul class="sub-menu">
                                <li id="menu-item-13280" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13280">
                                    <a class="btn site-off" href="https://www.bridginglogpro.com/directory/signup.php" target="_parent">Member Application</a>
                                    </li>
                                <li id="menu-item-13362" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13362">
                                    <a class="btn site-off" href="https://www.bridginglogpro.com/working-procedure/" target="_parent">Working Procedure</a>
                                    </li>
                                <li id="menu-item-13357" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13357">
                                    <a class="btn site-off" href="https://www.bridginglogpro.com/ethics/" target="_parent">Code of Ethics</a>
                                    </li>
                                <li id="menu-item-13472" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13472">
                                    <a class="btn site-off" href="https://www.bridginglogpro.com/membership-fees/" target="_parent">Membership Fee</a>
                                    </li>
                                <li id="menu-item-13879" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13879">
                                    <a class="btn site-off" href="https://www.bridginglogpro.com/benefits/" target="_parent">Membership Benefits</a>
                                    </li>
                                <li id="menu-item-13880" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13880">
                                    <a class="btn site-off" href="https://www.bridginglogpro.com/faq/" target="_parent">Membership FAQ</a>
                                    </li>
                            </ul>
                        </li>
                        <li class="mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-align-bottom-left mega-menu-flyout mega-menu-item-1230" id="mega-menu-item-1230">
                            <a class="mega-menu-link site-off" href="https://www.bridginglogpro.com/conference/" tabindex="0">Conference</a>
                        </li>
                        
                        <li id="menu-item-13655" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13655">
                            <a class="btn site-off" href="https://www.bridginglogpro.com/photo-gallery/">Gallery</a>
                        </li>
                        <li id="menu-item-13281" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13281">
                            <a class="btn site-off" href="https://www.bridginglogpro.com/directory/">Member Directory</a>
                        </li>
                        
                        <li class="mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-align-bottom-left mega-menu-flyout mega-menu-item-1230" id="mega-menu-item-1230">
                            <a class="mega-menu-link site-off" href="https://www.bridginglogpro.com/schedular/" tabindex="0">Software</a>
                        </li>
                        <li id="menu-item-14578" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-14578">
                            <a class="btn site-off" href="https://www.bridginglogpro.com/board-member/">Advisory Board</a>
                        </li>
                        <li class="mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-menu-item-has-children mega-align-bottom-left mega-menu-flyout mega-menu-item-1544" id="mega-menu-item-1544"><a class="mega-menu-link" href="#" aria-haspopup="true" aria-expanded="false" tabindex="0">Quick Links<span class="mega-indicator"></span></a>
                            <ul class="mega-sub-menu">
                                <li class="mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-menu-item-1545" id="mega-menu-item-1545">
                                    <a class="mega-menu-link link-change" href="{{route('frontend.trackandtrace')}}">Track &amp; Trace</a>
                                </li>
                                <li class="mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-menu-item-1546" id="mega-menu-item-1546">
                                    <a class="mega-menu-link link-change" href="{{route('frontend.airports')}}">Airports</a>
                                </li>
                                <li class="mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-menu-item-1547" id="mega-menu-item-1547">
                                    <a class="mega-menu-link link-change" href="{{route('frontend.airline')}}">Airlines</a>
                                </li>
                                <li class="mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-menu-item-1548" id="mega-menu-item-1548">
                                    <a class="mega-menu-link link-change" href="{{route('frontend.widgets')}}">Widgets &amp; Resources</a>
                                </li>
                            </ul>
                        </li>
                            
                            
                            
                            
                            
                            
                        </ul>

        </div>
        </div>
        </div>
        
<script>
$(window).ready(function(){
    $('.site-off').click(function(e){
        e.preventDefault();
        maintainance();
    })
})
    function maintainance(){
        alert('Website is in mentainance mode!')
    }
</script>        
        
    
    
</header>

