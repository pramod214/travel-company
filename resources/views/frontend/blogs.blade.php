@extends('frontend.includes.master')

@section('content')
    <!--// Main Wrapper \\-->
    <div class="touristpoint-main-wrapper">

    <!--// Sub Header \\-->
    <div class="touristpoint-subheader">
        <span class="touristpoint-subheader-transparent"></span>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Blogs</h1>
                    <ul class="touristpoint-breadcrumb">
                        <li><a href="{{route('front.index')}}">Home</a></li>
                        <li>Blogs</li>
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

                    <div class="col-md-12">

                        <div class="touristpoint-blog touristpoint-blog-grid">
                            <ul class="row">
                                <li class="col-md-4">
                                    <figure><a href="blog-detail.html"><img src="{{asset('public/frontend/extra-images/blog-grid-img1.jpg')}}" alt=""><i class="fa fa-link"></i></a></figure>
                                    <div class="touristpoint-blog-grid-text">
                                        <h5><a href="blog-detail.html">The Santa Barbara Wildfire</a></h5>
                                        <ul class="touristpoint-blog-option">
                                            <li><a href="404.html"><i class="fa fa-calendar-o"></i> Aug 21,2017</a></li>
                                            <li><a href="404.html"><i class="fa fa-user"></i> John Layfield</a></li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adi piscing elit. Quisque venenatis, ipsum necd apibus rutrum, dui justo rutru.</p>
                                        <a href="blog-detail.html" class="touristpoint-readmore-btn">Read More</a>
                                        <ul class="touristpoint-grid-comment">
                                            <li><a href="404.html" class="fa fa-heart" data-toggle="tooltip" title="Like"></a></li>
                                            <li><a href="404.html" class="fa fa-comment" data-toggle="tooltip" title="Comment"></a></li>
                                            <li><a href="404.html" class="fa fa-share-alt" data-toggle="tooltip" title="Share"></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="col-md-4">
                                    <figure><a href="blog-detail.html"><img src="{{asset('public/frontend/extra-images/blog-grid-img2.jpg')}}" alt=""><i class="fa fa-link"></i></a></figure>
                                    <div class="touristpoint-blog-grid-text">
                                        <h5><a href="blog-detail.html">Thailand Special Places</a></h5>
                                        <ul class="touristpoint-blog-option">
                                            <li><a href="404.html"><i class="fa fa-calendar-o"></i> Aug 21,2017</a></li>
                                            <li><a href="404.html"><i class="fa fa-user"></i> John Layfield</a></li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adi piscing elit. Quisque venenatis, ipsum necd apibus rutrum, dui justo rutru.</p>
                                        <a href="blog-detail.html" class="touristpoint-readmore-btn">Read More</a>
                                        <ul class="touristpoint-grid-comment">
                                            <li><a href="404.html" class="fa fa-heart" data-toggle="tooltip" title="Like"></a></li>
                                            <li><a href="404.html" class="fa fa-comment" data-toggle="tooltip" title="Comment"></a></li>
                                            <li><a href="404.html" class="fa fa-share-alt" data-toggle="tooltip" title="Share"></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="col-md-4">
                                    <figure><a href="blog-detail.html"><img src="{{asset('public/frontend/extra-images/blog-grid-img3.jpg')}}" alt=""><i class="fa fa-link"></i></a></figure>
                                    <div class="touristpoint-blog-grid-text">
                                        <h5><a href="blog-detail.html">A Quote Post for Vestibulu</a></h5>
                                        <ul class="touristpoint-blog-option">
                                            <li><a href="404.html"><i class="fa fa-calendar-o"></i> Aug 21,2017</a></li>
                                            <li><a href="404.html"><i class="fa fa-user"></i> John Layfield</a></li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adi piscing elit. Quisque venenatis, ipsum necd apibus rutrum, dui justo rutru.</p>
                                        <a href="blog-detail.html" class="touristpoint-readmore-btn">Read More</a>
                                        <ul class="touristpoint-grid-comment">
                                            <li><a href="404.html" class="fa fa-heart" data-toggle="tooltip" title="Like"></a></li>
                                            <li><a href="404.html" class="fa fa-comment" data-toggle="tooltip" title="Comment"></a></li>
                                            <li><a href="404.html" class="fa fa-share-alt" data-toggle="tooltip" title="Share"></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="col-md-4">
                                    <figure><a href="blog-detail.html"><img src="{{asset('public/frontend/extra-images/blog-grid-img4.jpg')}}" alt=""><i class="fa fa-link"></i></a></figure>
                                    <div class="touristpoint-blog-grid-text">
                                        <h5><a href="blog-detail.html">Proin at Hendrerit Tortor</a></h5>
                                        <ul class="touristpoint-blog-option">
                                            <li><a href="404.html"><i class="fa fa-calendar-o"></i> Aug 21,2017</a></li>
                                            <li><a href="404.html"><i class="fa fa-user"></i> John Layfield</a></li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adi piscing elit. Quisque venenatis, ipsum necd apibus rutrum, dui justo rutru.</p>
                                        <a href="blog-detail.html" class="touristpoint-readmore-btn">Read More</a>
                                        <ul class="touristpoint-grid-comment">
                                            <li><a href="404.html" class="fa fa-heart" data-toggle="tooltip" title="Like"></a></li>
                                            <li><a href="404.html" class="fa fa-comment" data-toggle="tooltip" title="Comment"></a></li>
                                            <li><a href="404.html" class="fa fa-share-alt" data-toggle="tooltip" title="Share"></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="col-md-4">
                                    <figure><a href="blog-detail.html"><img src="{{asset('public/frontend/extra-images/blog-grid-img5.jpg')}}" alt=""><i class="fa fa-link"></i></a></figure>
                                    <div class="touristpoint-blog-grid-text">
                                        <h5><a href="blog-detail.html">Vivamus Interdum Leo Purus</a></h5>
                                        <ul class="touristpoint-blog-option">
                                            <li><a href="404.html"><i class="fa fa-calendar-o"></i> Aug 21,2017</a></li>
                                            <li><a href="404.html"><i class="fa fa-user"></i> John Layfield</a></li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adi piscing elit. Quisque venenatis, ipsum necd apibus rutrum, dui justo rutru.</p>
                                        <a href="blog-detail.html" class="touristpoint-readmore-btn">Read More</a>
                                        <ul class="touristpoint-grid-comment">
                                            <li><a href="404.html" class="fa fa-heart" data-toggle="tooltip" title="Like"></a></li>
                                            <li><a href="404.html" class="fa fa-comment" data-toggle="tooltip" title="Comment"></a></li>
                                            <li><a href="404.html" class="fa fa-share-alt" data-toggle="tooltip" title="Share"></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="col-md-4">
                                    <figure><a href="blog-detail.html"><img src="{{asset('public/frontend/extra-images/blog-grid-img6.jpg')}}" alt=""><i class="fa fa-link"></i></a></figure>
                                    <div class="touristpoint-blog-grid-text">
                                        <h5><a href="blog-detail.html">Aliquam Accumsan Tellus Sed</a></h5>
                                        <ul class="touristpoint-blog-option">
                                            <li><a href="404.html"><i class="fa fa-calendar-o"></i> Aug 21,2017</a></li>
                                            <li><a href="404.html"><i class="fa fa-user"></i> John Layfield</a></li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adi piscing elit. Quisque venenatis, ipsum necd apibus rutrum, dui justo rutru.</p>
                                        <a href="blog-detail.html" class="touristpoint-readmore-btn">Read More</a>
                                        <ul class="touristpoint-grid-comment">
                                            <li><a href="404.html" class="fa fa-heart" data-toggle="tooltip" title="Like"></a></li>
                                            <li><a href="404.html" class="fa fa-comment" data-toggle="tooltip" title="Comment"></a></li>
                                            <li><a href="404.html" class="fa fa-share-alt" data-toggle="tooltip" title="Share"></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="col-md-4">
                                    <figure><a href="blog-detail.html"><img src="{{asset('public/frontend/extra-images/blog-grid-img7.jpg')}}" alt=""><i class="fa fa-link"></i></a></figure>
                                    <div class="touristpoint-blog-grid-text">
                                        <h5><a href="blog-detail.html">The Santa Barbara Wildfire</a></h5>
                                        <ul class="touristpoint-blog-option">
                                            <li><a href="404.html"><i class="fa fa-calendar-o"></i> Aug 21,2017</a></li>
                                            <li><a href="404.html"><i class="fa fa-user"></i> John Layfield</a></li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adi piscing elit. Quisque venenatis, ipsum necd apibus rutrum, dui justo rutru.</p>
                                        <a href="blog-detail.html" class="touristpoint-readmore-btn">Read More</a>
                                        <ul class="touristpoint-grid-comment">
                                            <li><a href="404.html" class="fa fa-heart" data-toggle="tooltip" title="Like"></a></li>
                                            <li><a href="404.html" class="fa fa-comment" data-toggle="tooltip" title="Comment"></a></li>
                                            <li><a href="404.html" class="fa fa-share-alt" data-toggle="tooltip" title="Share"></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="col-md-4">
                                    <figure><a href="blog-detail.html"><img src="{{asset('public/frontend/extra-images/blog-grid-img8.jpg')}}" alt=""><i class="fa fa-link"></i></a></figure>
                                    <div class="touristpoint-blog-grid-text">
                                        <h5><a href="blog-detail.html">Nam Sollicitudin Lectus Quis</a></h5>
                                        <ul class="touristpoint-blog-option">
                                            <li><a href="404.html"><i class="fa fa-calendar-o"></i> Aug 21,2017</a></li>
                                            <li><a href="404.html"><i class="fa fa-user"></i> John Layfield</a></li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adi piscing elit. Quisque venenatis, ipsum necd apibus rutrum, dui justo rutru.</p>
                                        <a href="blog-detail.html" class="touristpoint-readmore-btn">Read More</a>
                                        <ul class="touristpoint-grid-comment">
                                            <li><a href="404.html" class="fa fa-heart" data-toggle="tooltip" title="Like"></a></li>
                                            <li><a href="404.html" class="fa fa-comment" data-toggle="tooltip" title="Comment"></a></li>
                                            <li><a href="404.html" class="fa fa-share-alt" data-toggle="tooltip" title="Share"></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="col-md-4">
                                    <figure><a href="blog-detail.html"><img src="{{asset('public/frontend/extra-images/blog-grid-img9.jpg')}}" alt=""><i class="fa fa-link"></i></a></figure>
                                    <div class="touristpoint-blog-grid-text">
                                        <h5><a href="blog-detail.html">The Santa Barbara Wildfire</a></h5>
                                        <ul class="touristpoint-blog-option">
                                            <li><a href="404.html"><i class="fa fa-calendar-o"></i> Aug 21,2017</a></li>
                                            <li><a href="404.html"><i class="fa fa-user"></i> John Layfield</a></li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adi piscing elit. Quisque venenatis, ipsum necd apibus rutrum, dui justo rutru.</p>
                                        <a href="blog-detail.html" class="touristpoint-readmore-btn">Read More</a>
                                        <ul class="touristpoint-grid-comment">
                                            <li><a href="404.html" class="fa fa-heart" data-toggle="tooltip" title="Like"></a></li>
                                            <li><a href="404.html" class="fa fa-comment" data-toggle="tooltip" title="Comment"></a></li>
                                            <li><a href="404.html" class="fa fa-share-alt" data-toggle="tooltip" title="Share"></a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!--// Pagination \\-->
                        <div class="touristpoint-pagination">
                            <ul class="page-numbers">
                                <li><a class="previous page-numbers" href="404.html"><span aria-label="Next"><i class="fa fa-angle-double-left"></i> Previous Post</span></a></li>
                                <li><span class="page-numbers current">01</span></li>
                                <li><a class="page-numbers" href="404.html">02</a></li>
                                <li><a class="page-numbers" href="404.html">03</a></li>
                                <li><a class="page-numbers" href="404.html">...</a></li>
                                <li><a class="page-numbers" href="404.html">10</a></li>
                                <li><a class="next page-numbers" href="404.html"><span aria-label="Next">Next Post<i class="fa fa-angle-double-right"></i></span></a></li>
                            </ul>
                        </div>
                        <!--// Pagination \\-->

                    </div>

                </div>
            </div>
        </div>
        <!--// Main Section \\-->

    </div>
    </div>
    <!--// Main Content \\-->
    @endsection