@include('frontend.header')    
       
       <div class="directory_list_content">
           <div class="container">
            
               <div class="pagination">
                   <ul>
                       <li><a href="index.php">Home <i class="fa fa-angle-double-right"></i> </a> </li>
                       <li><a href="list.php">Directory  <i class="fa fa-angle-double-right"></i> </a> </li>
                       <li>{{$company->name}}</li>
                   </ul>
               </div>
               
               <div class="detail_top_equal_col">
                   <div class="row">
                   <div class="col-md-12">
                       <div class="dir_company_detail">
                           <div class="row">
                               
                            <div class="col-md-8">
                             <h3>{{$company->name}}<img class="pull-right" src="" width="15%" ></h3>

                             <h4><span class="icon_images icon_fix"><img src="{{asset('public/frontend/images/map_1.png')}}" alt=""></span> {{$company->address}}</h4>
                             
                             <h4 class="col-md-6"><span class="icon_images"><img src="{{asset('public/frontend/images/reciever.png')}}" alt=""></span> {{$company->phone}}</h4>

                             <h4 class="col-md-6"><span class="icon_images"><img src="{{asset('public/frontend/images/fax.png')}}" alt=""></span> Fax</h4>

                             <h4><span class="icon_images"><img src="{{asset('public/frontend/images/envelop.png')}}" alt=""></span> {{$company->email}}</h4>

                             <h4><span class="icon_images"><img src="{{asset('public/frontend/images/globe.png')}}" alt=""></span> <a href=""> {{$company->website}}</a></h4>

                             <h4><span class="icon_images"><img src="{{asset('public/frontend/images/logistic.png')}}" alt=""></span> </h4>

                             <h4><span class="icon_images"><img src="{{asset('public/frontend/images/air.png')}}" alt=""></span><?php #echo $db->services_formate($c['id']); ?></h4>

                             <h4><span class="icon_images"><img src="{{asset('public/frontend/images/team.png')}}" alt=""></span>{{$company->no_of_employees}}</h4>

                             <h4><span class="icon_images"><img src="{{asset('public/frontend/images/map_1.png')}}" alt=""></span>{{$company->no_of_branches}}(Branches)</h4>

                             <h4><span class="icon_images"><img src="{{asset('public/frontend/images/estalished.png')}}" alt=""></span>{{$company->establish_year}}(Established)</h4>

                            </div>
                               
                            <div class="col-md-4">
                              <div class="thumnial_company">
                               <img src="{{asset('public/images/'.$company->logo)}}" alt="">
                              </div>
                            </div>
                               <h4><span class="icon_images"><img src="{{asset('public/frontend/images/estalished.png')}}" alt=""></span></h4>
                               <h4>
                                 <ul>
                                     @foreach ($company->services as $item)
                                  . {{$item->name}}<br>
                                         
                                     @endforeach
                                 </ul>
                               </h4>
                           </div>
                           
                           
                           
                       </div>
                   </div>
                   
                       <div class="col-md-6">
                       <div class="dir_company_detail">
                           <div class="row">
                               
                               <div class="col-md-4 pull-right">
                                <div class="thumnial_company">
                                   <img src="{{asset('public/images/'.$member->image)}}" alt="">
                                   
                                   </div>
                               </div>
                               <div class="col-md-8">
                                   <h3>{{$member->name}}</h3>
                                   <h4><span class="icon_images"><img src="{{asset('public/frontend/images/president.png')}}" alt=""></span> {{$member->designation}}</h4>
                                   <h4><span class="icon_images"><img src="{{asset('public/frontend/images/male.png')}}" alt=""></span> {{$member->gender}}</h4>
                                   <h4><span class="icon_images"><img src="{{asset('public/frontend/images/reciever.png')}}" alt=""></span> {{$member->phone}}</h4>
                                   <h4><span class="icon_images"><img src="{{asset('public/frontend/images/fax.png')}}" alt=""></span>{{$member->mobile}}</h4>
                                   <h4><span class="icon_images"><img src="{{asset('public/frontend/images/envelop.png')}}" alt=""></span> <a href="#">{{$member->email}}</a></h4>
                                   <h4><span class="icon_images"><img src="{{asset('public/frontend/images/mobile.png')}}" alt=""></span> {{$member->viber}}</h4>
                                   <h4><span class="icon_images"><img src="{{asset('public/frontend/images/whatsapp.png')}}" alt=""></span> {{$member->whatsupp}}</h4>
                                   <h4><span class="icon_images"><img src="{{asset('public/frontend/images/chat.png')}}" alt=""></span> {{$member->skype}}</h4>
                               </div>
                               
                           </div>
                           
                           
                           
                       </div>
                   </div>
                   <div class="col-md-6">
                       <div class="dir_company_detail">
                           <div class="row">
                               
                               <!-- <div class="col-md-4 pull-right">
                                <div class="thumnial_company no_border">
                                   <img src="admin/images/<?php# echo $db->get_profile_image($c['id']); ?>" alt="">
                                   </div>
                               </div> -->
                               
                               <div class="col-md-12">
                                   <h3>Company Profile</h3>
                                   <p>{{$company->profile}}</p>
                                    <h4><span class="icon_images"><img src="images/watch.png" alt=""></span> {{$company->working_hours}}</h4>
                               </div>
                               
                           </div>
                           
                          
                           
                           
                       </div>
                   </div>
                 </div>
                 
                 <h2 class="themeH2">Directors</h2>
                 <div class="row">
                   <div class="company_profile">
                   
                   <div class="col-md-6 ">
                    <div class="dir_company_detail">
                        @foreach($director as $d)
                      <div class="row">
                       <div class="col-md-6 pull-right " style="z-index: 100">
                        <div class="thumnial_company">
                          <img class="ceo" src="{{asset('public/images/'.$d->image)}}" class="img img-responsive">
                        </div>
                       </div>
                       
                       <div class="col-md-6">
                        
                         <h3>{{$d->name}}</h3>
                        
                         <h4><span class="icon_images"><img src="{{asset('public/frontend/images/president.png')}}" alt=""></span> {{$d->designation}}</h4>
                         
                         <h4><span class="icon_images"><img src="{{asset('public/frontend/images/reciever.png')}}" alt=""></span>{{$d->phone}}</h4>
                         
                         <h4><span class="icon_images"><img src="{{asset('public/frontend/images/envelop.png')}}" alt=""></span> {{$d->email}}</a></h4><br>
                         
                         <p>{{$d->detail}}</p>
                         
                       </div>
                       @endforeach
                     </div>
                    </div>
                     
                   </div>
                     
                       </div>
                   </div>
        
               </div>
               
               
               <div class="company_profile">
                   <div class="row">
                    
                   </div>
                       <h2 class="themeH2">Representatives</h2>
                   <div class="row">
                     
                    <div class="col-md-4">
                       <div class="dir_company_detail">
                           <div class="row">
                            @foreach ($represent as $r)
                               <div class="col-md-12">
                                   
                                   <h3>{{$r->name}}<br></h3>
                                   
                                   <h4><span class="icon_images"><img src="{{asset('public/frontend/images/reciever.png')}}" alt=""></span> {{$r->phone}}</h4>
                                   
                                   <h4><span class="icon_images"><img src="{{asset('public/frontend/images/whatsapp.png')}}" alt=""></span> {{$r->whatsupp}}</h4>
                                   
                                   <h4><span class="icon_images"><img src="{{asset('public/frontend/images/envelop.png')}}" alt=""></span> {{$r->email}}</h4>
                                   
                               </div>
                               @endforeach
                           </div>
	                    </div>
	                </div>
                        
                   
                   </div>
               </div>
               
               
               
               
               
               
               
                <div class="company_profile">
                    <h2 class="themeH2">Branches</h2>
                   <div class="row">
                   
                    <div class="col-md-4">
                       <div class="dir_company_detail">
                           <div class="row">
                            @foreach ($branch as $b)
                               <div class="col-md-12">
                                   <h3>{{$b->name}}<br></h3>
                                   <h4><span class="icon_images"><img src="{{asset('public/frontend/images/reciever.png')}}" alt=""></span> {{$b->phone}}</h4>
                                    <h4><span class="icon_images"><img src="{{asset('public/frontend/images/envelop.png')}}" alt=""></span> {{$b->email}}</h4>
                                    
                               </div>
                               @endforeach
                           </div>
	                    </div>
	                </div>
                    
                   </div>
                </div>
                
                
               
<!--                <div class="company_profile">
                   <h2 class="themeH2">Trade References</h2>
                   <div class="row">

                  <div class="col-md-4">
                       <div class="dir_company_detail">
                           <div class="row">
                               
                               <div class="col-md-12">
                                   <h3>Company<br> <span>City|Country</span></h3>
                                   <h4><span class="icon_images"><img src="images/president.png" alt=""></span> Person</h4>
                                   <h4><span class="icon_images"><img src="images/reciever.png" alt=""></span> Email</h4>
                                   <h4><span class="icon_images"><img src="images/envelop.png" alt=""></span> <a href="mailto:Email</a></h4>
                               </div>
                           </div>
                      </div>
                  </div>
          </div>       
                </div>  -->        
                

               <div class="brands_support">
                   <h2 class="themeH2">Certificates</h2>

                   <a href="#"><img src="admin/images/" alt="">

                    @foreach ($company->certificate as $item)
                    . {{$item->name}}<br>
                           
                       @endforeach</a>
                   
                </div>
                
                
           
            
               
                <div class="row">
                   <div class="col-md-6">
                    <a onclick="window.history.back();" class="save_continue signin_button">Back to Listing</a>
                   </div>
                   
                   <div class="col-md-6">
                    <a href="{{route('frontend.company.rating',[$company->id])}}" class="save_exit register"><i class="fas fa-star"></i> Rating & Reviews</a>
                   </div>
                </div>
                

           </div>
       </div>
       @include('frontend.footer')    
       
        
