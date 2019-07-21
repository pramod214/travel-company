@extends('frontend.includes.master')

@section('content')
    <!--// Main Wrapper \\-->
    <div class="touristpoint-main-wrapper">

        <!--// Header \\-->
        <header id="touristpoint-header" class="touristpoint-header-one">

            <aside class="touristpoint-logo"><a href="index-2.html"><img src="images/logo.png" alt=""></a></aside>
            <aside class="touristpoint-navbar-open"> <a href="#"><i class="icon-three4"></i></a> </aside>

        </header>
        <!--// Header \\-->

        <!--// Sub Header \\-->
        <div class="touristpoint-subheader">
            <span class="touristpoint-subheader-transparent"></span>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Blog Detail</h1>
                        <ul class="touristpoint-breadcrumb">
                            <li><a href="{{route('front.index')}}">Home</a></li>
                            <li>Blog Detail</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--// Sub Header \\-->

        <!--// Main Content \\-->
        <div class="touristpoint-main-content">

            <!--// Main Section \\-->
            <div class="touristpoint-main-section">
                <div class="container">
                    <div class="row">

                        <div class="col-md-9">
                            <div style="height: 350px;width: 848px; overflow:hidden">
                                <figure class="touristpoint-blog-thumb"><img src="{{asset('public/adminpanel/uploads/blog/'.$blogdetails->image)}}" alt="{{$blogdetails->title}}"></figure>
                            </div>
                            <div class="touristpoint-blog-heading" style="padding-top: 20px">
                                <time datetime="2008-02-14 20:00">{{substr($blogdetails->date,9,10)}} {{substr($blogdetails->date,5,-3)}}</time>
                                <h2>{{$blogdetails->title}}</h2>
                                <ul class="touristpoint-blog-detail-option">
                                    <li><i class="fa fa-user"></i> Posted By: {{$blogdetails->user->name}} </li>
                                </ul>
                            </div>
                            <div class="touristpoint-rich-editor">
                                <p>{!! $blogdetails->content !!}</p>
                                <blockquote>“{{$blogdetails->quote}}”</blockquote>
                            </div>
                            <div class="touristpoint-post-tags">
                                <div class="touristpoint-tags">
                                    <a href="{{route('front.404')}}">{{$blogdetails->tags}}</a>

                                </div>
                                <div class="touristpoint-blog-social">
                                    <ul>
                                        <li><a href="{{$blogdetails->blog_facebook}}" target="_blank" class="fa fa-facebook-square"></a></li>
                                        <li><a href="{{$blogdetails->blog_twitter}}" target="_blank" class="fa fa-twitter-square"></a></li>
                                        <li><a href="{{$blogdetails->blog_linkedin}}" target="_blank" class="fa fa-linkedin-square"></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="touristpoint-prenxt-post">
                                <ul>
                                    <li>
                                        <div class="touristpoint-prev-post">
                                            <h3><a href="{{route('front.404')}}">Witches Wizards Fortune Tellers</a></h3>
                                            <a href="{{route('front.404')}}" class="touristpoint-post-arrow"><i class="fa fa-angle-double-left"></i> Previous Post</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="touristpoint-next-post">
                                            <h3><a href="{{route('front.404')}}">Things To Do In St Lucia</a></h3>
                                            <a href="{{route('front.404')}}" class="touristpoint-post-arrow">Next Post<i class="fa fa-angle-double-right"></i> </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="touristpoint-section-heading">
                                <h2>Related Articles</h2>
                            </div>
                            <div class="touristpoint-related-blog">
                                <ul class="row">
                                    <li class="col-md-4">
                                        <figure><a href="blog-detail.html"><img src="{{asset('public/frontend/extra-images/related-blog-img1.jpg')}}" alt=""><i class="fa fa-link"></i></a></figure>
                                        <div class="touristpoint-related-blog-text">
                                            <h5><a href="blog-detail.html">Pnteger Vel Orci Tempor</a></h5>
                                            <ul class="touristpoint-blog-option">
                                                <li><a href="{{route('front.404')}}"><i class="fa fa-comment-o"></i> 29 Comments</a></li>
                                                <li><a href="{{route('front.404')}}"><i class="fa fa-user"></i> John Layfield</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="col-md-4">
                                        <figure><a href="blog-detail.html"><img src="{{asset('public/frontend/extra-images/related-blog-img2.jpg')}}" alt=""><i class="fa fa-link"></i></a></figure>
                                        <div class="touristpoint-related-blog-text">
                                            <h5><a href="blog-detail.html">Pnteger Vel Orci Tempor</a></h5>
                                            <ul class="touristpoint-blog-option">
                                                <li><a href="404.html"><i class="fa fa-comment-o"></i> 29 Comments</a></li>
                                                <li><a href="404.html"><i class="fa fa-user"></i> John Layfield</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="col-md-4">
                                        <figure><a href="blog-detail.html"><img src="{{asset('public/frontend/extra-images/related-blog-img3.jpg')}}" alt=""><i class="fa fa-link"></i></a></figure>
                                        <div class="touristpoint-related-blog-text">
                                            <h5><a href="blog-detail.html">Pnteger Vel Orci Tempor</a></h5>
                                            <ul class="touristpoint-blog-option">
                                                <li><a href="404.html"><i class="fa fa-comment-o"></i> 29 Comments</a></li>
                                                <li><a href="404.html"><i class="fa fa-user"></i> John Layfield</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <!--// SideBaar \\-->
                        <aside class="col-md-3">

                            <!--// Widget Search \\-->
                            <div class="widget widget_search">
                                <form>
                                    <input type="text" value="Search" onblur="if(this.value == '') { this.value ='Search'; }" onfocus="if(this.value =='Search') { this.value = ''; }">
                                    <label>
                                        <input type="submit" value="">
                                    </label>
                                </form>
                            </div>
                            <!--// Widget Search \\-->



                            <!--// Widget Tour \\-->
                            <div class="widget widget_tour">
                                <div class="touristpoint-widget-heading"><h2>Hot Tour Packages</h2></div>
                                <ul>
                                    @foreach($packages as $package)
                                    <li>
                                        <span>Rs. {{$package->price}}</span>
                                        <h6><a href="{{route('front.tour_details',$package->id)}}">{{$package->title}}</a></h6>
                                        <time datetime="2008-02-14 20:00">{{$package->departureDate}}</time>
                                    </li>
                                        @endforeach
                                </ul>
                            </div>
                            <!--// Widget Tour \\-->

                            <!--// Widget Destinations \\-->
                            <div class="widget widget_destination">
                                <div class="touristpoint-widget-heading"><h2>Top Destinations</h2></div>
                                <ul>
                                    @foreach($destination as $d)
                                    <li>
                                        <figure><a href="{{route('front.tour_details',$d->id)}}"><img src="{{asset('public/adminpanel/uploads/package/'.$d->image)}}" alt=""></a>
                                                <figcaption>
                                                <h6><a href="{{route('front.tour_details',$d->id)}}">{{$d->destination}}</a></h6>
                                                <div class="star-rating"><span class="star-rating-box" style="width:78%"></span></div>
                                            </figcaption>
                                        </figure>
                                    </li>
                                        @endforeach
                                </ul>
                            </div>
                            <!--// Widget Destinations \\-->

                            <!--// Widget Destinations \\-->
                            <div class="widget widget_gallery">
                                <div class="touristpoint-widget-heading"><h2>Instagram Feeds</h2></div>
                                <ul>
                                    <li>
                                        <figure><a data-fancybox-group="group" href="" class="fancybox"><img src="{{asset('public/frontend/extra-images/widget-galleryimg1.jpg')}}" alt=""><i class="fa fa-angle-double-right"></i></a></figure>
                                    </li>
                                    <li>
                                        <figure><a data-fancybox-group="group" href="" class="fancybox"><img src="{{asset('public/frontend/extra-images/widget-galleryimg2.jpg')}}" alt=""><i class="fa fa-angle-double-right"></i></a></figure>
                                    </li>
                                    <li>
                                        <figure><a data-fancybox-group="group" href="" class="fancybox"><img src="{{asset('public/frontend/extra-images/widget-galleryimg3.jpg')}}" alt=""><i class="fa fa-angle-double-right"></i></a></figure>
                                    </li>
                                    <li>
                                        <figure><a data-fancybox-group="group" href="" class="fancybox"><img src="{{asset('public/frontend/extra-images/widget-galleryimg4.jpg')}}" alt=""><i class="fa fa-angle-double-right"></i></a></figure>
                                    </li>
                                    <li>
                                        <figure><a data-fancybox-group="group" href="" class="fancybox"><img src="{{asset('public/frontend/extra-images/widget-galleryimg5.jpg')}}" alt=""><i class="fa fa-angle-double-right"></i></a></figure>
                                    </li>
                                    <li>
                                        <figure><a data-fancybox-group="group" href="" class="fancybox"><img src="{{asset('public/frontend/extra-images/widget-galleryimg6.jpg')}}" alt=""><i class="fa fa-angle-double-right"></i></a></figure>
                                    </li>
                                </ul>
                            </div>
                            <!--// Widget Destinations \\-->

                        </aside>
                        <!--// SideBaar \\-->

                    </div>
                </div>
            </div>
            <!--// Main Section \\-->

        </div>
        <!--// Main Content \\-->

        <div class="clearfix"></div>
    </div>
    <!--// Main Wrapper \\-->




@endsection