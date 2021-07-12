<?php
$data=newscategory();
$url = URL::current();
?>
<div class="col-md-8" >
    <div class="highlights-posts gn-animation animated fadeInUp row" data-animation="fadeInUp" data-animation-delay="0" data-animation-offset="75%">
        <div class="gn-line"></div>
        <div class="section-title">
            <h4><a href="#">Categories</a></h4>
        </div>


@foreach ($data as $d)
    

        <article class="col-md-6" style="padding: 10px;">
            <div class="thumb">
                <a href="{{$url}}/{{$d->id}}"><img src="{{asset('public/images/'.$d->image)}}" alt="img" style="height: auto;" width="100%"></a>
            </div>
            <div class="cat">
                <!-- <a href="list.php">Social media</a> -->
            </div>
            <h3><a href=""></a>{{$d->name}}</h3>
             <div class="activity">
                <span class="views"></span><!--<span class="comment"><a href="#">0</a></span> -->
            </div>
        </article><!--  /.post -->
@endforeach
    </div>
</div>	
