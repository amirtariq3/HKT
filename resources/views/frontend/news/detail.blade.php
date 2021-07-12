@include('frontend.news.header')

	<section id="main">
		<div class="container" style="background-color: white">
			<div class="row">
				<div class="col-md-12">
					<div class="post-wrap posts post-single">
						<article class="post">
							<div class="head-post">
								<h2>{{$data->title}}</h2>
								<p>{{$data->short_detail}}</p>
								<div class="meta">
									<span class="author">By <a href="#">{{$data->member->name}}</a></span>
									<span class="time"> Published on .</span>
								</div>
							</div><!-- /.head-post -->
							<div class="body-post">
								<div class="share-post">
									<ul>
										<li class="count-share"><span class="numb"></span><span>shares</span></li>
										<li class="email"><a href="#">Email</a></li>
										<li class="facebook"><a href="#">Facebook</a></li>
										<li class="twitter"><a href="#">Twitter</a></li>
									</ul>
								</div><!-- /.share-post -->
								<div class="main-post">
									<div class="entry-post">
                                        <img class="img-responsive" src="{{asset('public/images/'.$data->image)}}"/>
										{{$data->description}}
									</div><!-- /.entry-post -->
									<!-- <div class="help-post">
										<div class="helpful">
											<a class="like" href="#">I found this helpful </a>
											<a class="dislike" href="#">I did not find this helpful</a>
										</div>
										<div class="tags">
											<a href="#">Startups</a>
											<a href="#">Technology</a>
											<a href="#">Millions of dollars</a>
											<a href="#">Paul Graham</a>
										</div>
									</div> -->
									<!--<div class="author-post">
										<div class="avatar-author">
											<img src="images/author.jpg" alt="image">
										</div>
										<div class="info-author">
											<h4>Angela Snow</h4>
											<p>John is an American Graphic &amp; Web Designer, Pixel &amp; CSS lover, WordPress &amp; coffee addict. He loves UI and UX design for mobile and web apps.</p>
										</div>
									</div>  -->

					            	
								</div><!-- /.main-post -->
							</div><!-- /.body-post -->
						</article><!-- /.post -->
					</div><!-- /.post-wrap -->
				</div><!-- /.col-md-12 -->
			</div><!-- /.row -->
		</div><!-- /.container -->
	</section>

@include('frontend.footer')