<?php
$url = URL::current();
?>
@include('frontend.news.header')
<!-- Main -->
<section id="main" class="category-page" style="background-color: white">
	<div class="container">
		<div class="row">
				<div class="col-md-8">
					<div class="post-wrap">
						@foreach ($data as $item)

                            <article class="post">
							<div class="thumb">
								<a href="{{route('frontend.news.detail', [$item->id])}}"><img src="{{asset('public/images/'.$item->image)}}" alt="img"></a>
							</div>
							<div class="content">
								<div class="cat">
									<a href="#">{{$item->category->name}}</a>
								</div>
								<h3><a href="{{route('frontend.news.detail', [$item->id])}}">{{$item->title}}</a></h3>
								<p class="excerpt-entry">{{$item->short_detail}}</p>
								<!--<div class="activity">
									<span class="views">345</span> <span class="comment"><a href="#">15</a></span> 
								</div>-->
							</div>
						</article><!--  /.post -->
                        @endforeach
						
					</div><!-- /.social-media-posts -->
				</div><!-- /.col-md-8 -->
				
		</div><!-- /.row -->
	</div><!-- /.container -->
</section>

@include('frontend.footer')