
    
        <div id="sidebar" class='active'>
            <div class="sidebar-wrapper active">
    <div class="sidebar-header">
        <img src="{{asset('public/assets/images/logo.png')}}" alt="" srcset="">
    </div>
    <div class="sidebar-menu">
        <ul class="menu">
            
            
                <li class='sidebar-title'>Main Menu</li>
            
            
            
                <li class="sidebar-item ">
                    <a href="index.html" class='sidebar-link'>
                        <i data-feather="home" width="20"></i> 
                        <span>Dashboard</span>
                    </a>
                    
                </li>

            
            
            
                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i data-feather="triangle" width="20"></i> 
                        <span>Companies</span>
                    </a>
                    
                    <ul class="submenu ">
                        
                        <li>
                            <a href="{{route('admin.company.index')}}">Company</a>
                        </li>

                        
                    </ul>
                    
                </li>

                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg> 
                        <span>Accessories</span>
                    </a>
                    
                    <ul class="submenu ">
                        
                        <li>
                            
                            <a href="{{route('admin.services.index')}}" >Services</a>
                            
                        </li>
                        <li>
                            
                            <a href="{{route('admin.country.index')}}" >Country</a>
                            
                        </li>
                        <li>
                            
                            <a href="{{route('admin.certificate.index')}}" >Certificate</a>
                            
                        </li>

                        <li>
                            
                            <a href="{{route('admin.representative.index')}}" >Representative type</a>
                            
                        </li>

                        <li>
                            
                            <a href="{{route('admin.airline.index')}}" >Airline</a>
                            
                        </li>
                        
                        
                        <li>
                            
                            <a href="{{route('admin.airport.index')}}" >Airport</a>
                            
                        </li>
                        <li>
                            
                            <a href="{{route('admin.trackntrace.index')}}" >Trackntrace</a>
                            
                        </li>

                        <li>
                            
                            <a href="{{route('admin.tool.index')}}" >Widgets & Resources</a>
                            
                        </li>

                        <li>
                            
                            <a href="{{route('admin.continent.index')}}" >Continent</a>
                            
                        </li>
                        <li>
                            
                            <a href="{{route('admin.city.index')}}" >City</a>
                            
                        </li>
                    </ul>
                    
                </li>

               
                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i data-feather="triangle" width="20"></i> 
                        <span>Leadership Board</span>
                    </a>
                    
                    <ul class="submenu ">
                        
                        <li>
                            <a href="{{URL::to('')}}/product/add">Add New Products</a>
                        </li>
                        
                    </ul>
                    
                </li>

                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> 
                        <span>Members</span>
                    </a>
                    <ul class="submenu ">
                        
                        <li>
                            
                            <a href="{{route('admin.member.index')}}" >Members</a>
                            
                        </li>
                        <li>
                            
                            <a href="{{route('admin.membership_type.index')}}" >Membership type</a>
                            
                        </li>

                        <li>
                            
                            <a href="{{route('admin.news.index')}}" >News</a>
                            
                        </li>

                        <li>
                            
                            <a href="{{route('admin.news-category.index')}}" >News Categories</a>
                            
                        </li>

                    </ul>

                    
                </li>
                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i data-feather="settings"></i>
                        <span>Report</span>
                    </a>
                    
                    <ul class="submenu ">
                        
                        <li>
                            <a href="{{route('admin.company.directors.list')}}">Company CEO's / Directors</a>
                        </li>

                        <li>
                            <a href="{{route('admin.company.representatives.list')}}">Representatives</a>
                        </li>

                        <li>
                            <a href="{{route('admin.company.trade-refrence.list')}}">Trade references</a>
                        </li>

                        

                        <li>
                            <a href="{{route('admin.company.review.list')}}">Reviews</a>
                        </li>

                        <li>
                            <a href="{{route('admin.company.branches.list')}}">Branches</a>
                        </li>

                        <li>
                            <a href="{{route('admin.company_document.list')}}">Company documents</a>
                        </li>

                        
                    </ul>
                    
                </li>


                <li class="sidebar-item ">
                    <a href="{{route('admin.logout')}}" class='sidebar-link'>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                        <span>Logout</span>
                    </a>
                    
                </li>

        </ul>
    </div>
    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>
        </div>
