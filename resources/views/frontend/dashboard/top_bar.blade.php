		<!-- Top Bar Start -->
<?php
$user=Auth::guard('member')->user();


?>
        <div class="topbar">

            <div class="topbar-left	d-none d-lg-block">
                <div class="text-center">
                    <h5><a href="../list.php" class="logo" style="color:#fff">Back to Directory</a></h5>
                </div>
            </div>
            <nav class="navbar-custom">
                <ul class="list-inline float-right mb-0">
                <!-- <li class="list-inline-item notification-list dropdown d-none d-sm-inline-block">
                        <form role="search" class="app-search">
                            <div class="form-group mb-0">
                                <input type="text" class="form-control" placeholder="Search.."> <button type="submit"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </li> -->

                    <li class="list-inline-item dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="{{asset('public/images/'.$user->image)}}" alt="user" class="rounded-circle">
                        </a>

                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown">
                            
                            <a class="dropdown-item" href="{{route('frontend.dashboard.info')}}">
                                <i class="mdi mdi-account-circle m-r-5 text-muted"></i> Profile
                            </a> 
                            
                            <a class="dropdown-item" href="{{route('frontend.logout')}}">
                                <i class="mdi mdi-logout m-r-5 text-muted"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
                <ul class="list-inline menu-left mb-0">
                <li class="list-inline-item"><button type="button" class="button-menu-mobile open-left waves-effect"><i class="ion-navicon"></i></button></li>
                </ul>

                <div class="clearfix">
                </div>
            </nav>
        </div>
    <!-- Top Bar End -->