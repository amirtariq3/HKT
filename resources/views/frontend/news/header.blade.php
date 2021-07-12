<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">


<head>
	<!-- Basic Page Needs -->
	<meta charset="utf-8">
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<title>Global Logistics Alliance</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Bootstrap  -->
	<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/news/stylesheets/bootstrap.css')}}">

	<!-- Theme Style -->
	
	<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/news/../css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/news/stylesheets/style.css')}}">
	<link href="{{asset('public/frontend/news/../css/stellarnav.css')}}" rel="stylesheet">

	<!-- Colors -->
	<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/news/stylesheets/colors/color1.css')}}" id="colors">
   
	<!-- Animation Style -->
	<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/news/stylesheets/animate.css')}}">

	<!-- Google Fonts 
	<link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700' rel='stylesheet' type='text/css'>-->
	
	<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
     <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

<link rel="shortcut icon" href="http://www.bridginglogpro.com/wp-content/themes/log-pro/images/favicon.jpg">
    
      <style>
      /*::-webkit-scrollbar {*/
      /*  width: 0 !important;*/
      /*  }*/
         .block{
            display: block;
         }
         .hide{
            display: none;
         }
         body.modal-open .supreme-container{
            -webkit-filter: blur(1px);
            -moz-filter: blur(1px);
            -o-filter: blur(1px);
            -ms-filter: blur(1px);
            filter: blur(3px);
        }
        
        .modal-opn{
            filter: blur(0);
        }
      </style>
      <script>
         function toggle_visibility(id) {
             var e = document.getElementById(id);
             if(e.style.display == 'block')
                e.style.display = 'none';
             else
                e.style.display = 'block';
          }
      </script>
      
      <!-- logpro site head data   -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
a{
    text-decoration: none !important;
}
.stellarnav li.menu-item-has-children > a:after {
    content: '';
    margin-left: 10px;
    border-left: 6px solid transparent;
    border-right: 6px solid transparent;
    border-top: 6px solid #FFF;
    display: inline-block;
}
.menu .menu-item{
    margin: 0;
    padding: 0;
    display: block;
    float: left;
    position: relative;
    box-sizing: border-box;
    transition: all 0.2s;
    font-size: 100%;
    font: inherit;
    vertical-align: baseline;
}

.menu .menu-item .sub-menu{
    background-color:#1F425D !important;
}

.menu .menu-item .sub-menu .menu-item a{
    color:#fff !important;
}

.menu .menu-item a{
    color:#fff !important;
}

.menu-item a{
    padding: 18px;
    font-weight: bold;
    color: #fff;
    font-size:15px;
}
.menu{
    list-style: none;
    position: relative;
    display: inline-block;
}

.menu-item :hover{
    background-color:#386282;
}

.columns{
    float: left !important;
    display: inline;
}
.sub-menu{
    list-style: none;  
    display: none;
    position: absolute;
    min-width: 160px;
    z-index: 1;
}

.menu-item:hover .submenu{
    display:block;
}
.copyright-text{
    padding-top: 20px !important;
    padding-bottom: 20px !important;
}

#copyright{
    padding: 0px !important;
        clear: both;
    background: rgb(12, 57, 80) !important;    
    color: rgb(255, 255, 255) !important;

}
.login-sec.topnav {
    border-bottom-color: rgb(237, 237, 237);
    background-color: rgb(245, 245, 245);
    margin-bottom: 10px;
    height: 35px;
}
.login-sec {
    border-bottom-color: #ededed;
    background-color: #f5f5f5;
    float: right;
    width: 100%;
    display: block;
        color: #000000;
}

.top__tagline {
    float: left;
    line-height: 32px;
}
.login-sec-botton a {
    border-radius: 0px 0px 6px 6px;
    font-size: 13px !Important;
    line-height: 28px;
    letter-spacing: 1px;
    color: #666;
    padding: 2px 0px 0px 0px;
    text-transform: none;
    margin: 0px 8px;
    display: inline-block;
    text-align: right;
}

.logo-nav{
    background-color: #fff;
    vertical-align: middle;
}

#logo{
    padding:10px 0px;
    background-image: url('http://bridginglogpro.com/wp-content/themes/unicon/bg.png');
}

a h4{
    color: #000;
    clear: right;
    display: inline-block;
    margin-bottom: 0px;
    font-size: 14px;
}

a h4 :hover{
        color: #44bdbd;
}

.contact-btn{
   margin-top: 35px;
 border-radius: 2px;
 padding-left:10px !important;
 padding-right:10px !important;
     /*height: 45px;*/
     /*vertical-align:middle;*/
}

.navigation-wrap{
    background-color:#1F425D;
    display: block;
    padding-bottom:0;
}

.btn-logout{
    display:none;
}

.main_nav_top .stellarnav.dark {
    background: transparent !important;
}
.stellarnav .menu-toggle:nth-child(2) {
    display: none  !important;
}
</style> 

     
</head>
<body>
       
    <header id="header" class="header header-v3 clearfix" style="background-color:#fff">
        <div class="login-sec">
        <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p>Professional presence in complex Logistics on the Globe</p>
            </div>
            <div class="col-md-6">
                
                <div class="top_quick_links">
                    <a class="site-off" href="http://www.bridginglogpro.com/contact/">Quick Contact</a>
                    <a class="site-off" href="http://www.bridginglogpro.com/contact/">Help?</a>
                </div>
                <div class="social_links">
                    <a class="site-off" href="#"><img src="http://bridginglogpro.com/images/social_icon_1.png" alt=""></a>
                    <a class="site-off" href="#"><img src="http://bridginglogpro.com/images/social_icon_2.png" alt=""></a>
                    <a class="site-off" href="#"><img src="http://bridginglogpro.com/images/social_icon_3.png" alt=""></a>
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
                                    
                                <a class="" href="https://www.bridginglogpro.com/dashboard/" target="_self">
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
        $(".site-off").click(function(e){
            e.preventDefault();
            
            maintainance()
        })
    })
    
    function maintainance(){
        alert('Website is in mentainance mode!');
        
    }
</script>        
        
    
    
</header>