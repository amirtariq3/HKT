<!DOCTYPE html>
<html lang="en">



<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
<title>Dashboard
</title>
<meta content="Admin Dashboard" name="description">
<meta content="ThemeDesign" name="author">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<link rel="shortcut icon" href="{{asset('public/frontend/dashboard/assets/images/favicon.ico')}}">

<link href="{{asset('public/frontend/dashboard/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">

<link href="{{asset('public/frontend/dashboard/assets/css/icons.css')}}" rel="stylesheet" type="text/css">
<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
<link href="{{asset('public/frontend/dashboard/assets/css/style.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('public/frontend/dashboard/assets/plugins/alertify/css/alertify.css')}}" rel="stylesheet" type="text/css" class="">
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/default.min.css"/>
<link href="{{asset('public/frontend/dashboard/assets/css/summernote.css')}}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
</head>

<body class="fixed-left">
	<!-- Loader -->

	<div id="preloader">

		<div id="status">

			<div class="spinner">
			</div>
		</div>
	</div>
	
<!-- Begin page -->

<div id="wrapper">
	<!-- ========== Left Sidebar Start ========== -->

	<div class="left side-menu">
		<button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
			<i class="ion-close"></i>
		</button>

		<div class="left-side-logo d-block d-lg-none">

		</div>

		<div class="sidebar-inner slimscrollleft">

			<div id="sidebar-menu">
				<ul>
					<li>
						<a href="{{route('frontend.dashboard')}}" class="waves-effect">
							<span>Edit Profile 
							</span>
						</a>
					</li>
					<li>
						<a href="{{route('frontend.dashboard.prfile')}}"> 
							Member Profile
						</a>
					</li>
							<li><a href="{{route('frontend.dashboard.info')}}">Company Information</a></li>
							<li class=""><a href="{{route('frontend.dashboard.ceo')}}">CEO / Directors Details</a></li>
							<li><a href="{{route('frontend.dashboard.service')}}">Services</a></li>
							<li><a href="{{route('frontend.dashboard.representative')}}">Representatives</a></li>
							<li><a href="{{route('frontend.dashboard.refrence')}}">Trade References</a></li>
							<li><a href="{{route('frontend.dashboard.certificate')}}">Certifications</a></li>
							<li><a href="{{route('frontend.dashboard.branch')}}">Company Branches</a></li>
							<li><a href="{{route('frontend.news')}}" target="_blank">News</a></li>
							<li><a href="{{route('frontend.dashboard.news_add')}}">Add News</a></li>
					<!--<li class="has_sub nav-active">-->
					<!--	<a href="javascript:void(0);" class="waves-effect">-->
					<!--	<i class="fa fa-id-card"></i> -->

					<!--	<span>Company Details	</span>-->

					<!--	<span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i>-->
					<!--	</span></a>-->
					<!--	<ul class="list-unstyled" style="display: block !important;">-->
					<!--	</ul>-->
					<!--</li>-->
					<li class="has_sub" style="display: none">
						<a href="javascript:void(0);" class="waves-effect">
						<i class="dripicons-briefcase"></i> 

						<span>Reviews/Testimony 	</span>

						<span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i>
						</span></a>
						<ul class="list-unstyled">
							<li><a href="reviews.php">People Reviews</a></li>
							<li><a href="testimonies.php">Testimony</a></li>
						</ul>
					</li>
					<!--<hr>-->
					<!--<li>-->
					<!--    <a href="../company_detail.php?cid=">View Your Profile</a>-->
					<!--</li>-->
					<!-- <li>
						<a href=""> 
							<i class="fa fa-commenting-o"></i> <span>Messages</span>
						</a>
					</li> -->
				</ul>
			</div>

			<div class="clearfix">
			</div>
		</div>
	<!-- end sidebarinner -->
	</div>
<!-- Left Sidebar End -->



<!-- Start right Content here -->

	<div class="content-page">
	<!-- Start content -->

		<div class="content">
@include('frontend.dashboard.top_bar')

<div class="page-content-wrapper">