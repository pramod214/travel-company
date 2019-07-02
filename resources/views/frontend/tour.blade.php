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
                    <h1>Tour </h1>
                    <ul class="touristpoint-breadcrumb">
                        <li><a href="index-2.html">Home</a></li>
                        <li>Tour </li>
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
                        <div class="touristpoint-tour-filterable">
                            <ul class="filters-button-group">
                                <li><a data-filter="*" class="is-checked" href="javascript:void(0)">All
                                        <span class="gshape-one"></span>
                                        <span class="gshape-two"></span>
                                        <span class="gshape-three"></span>
                                    </a></li>
                                <li><a data-filter=".europe" href="javascript:void(0)">EUROPE
                                        <span class="gshape-one"></span>
                                        <span class="gshape-two"></span>
                                        <span class="gshape-three"></span>
                                    </a></li>
                                <li><a data-filter=".africa" href="javascript:void(0)">AFRICA
                                        <span class="gshape-one"></span>
                                        <span class="gshape-two"></span>
                                        <span class="gshape-three"></span>
                                    </a></li>
                                <li><a data-filter=".asia" href="javascript:void(0)">ASIA
                                        <span class="gshape-one"></span>
                                        <span class="gshape-two"></span>
                                        <span class="gshape-three"></span>
                                    </a></li>
                                <li><a data-filter=".australia" href="javascript:void(0)">AUSTRALIA
                                        <span class="gshape-one"></span>
                                        <span class="gshape-two"></span>
                                        <span class="gshape-three"></span>
                                    </a></li>
                            </ul>
                        </div>
                        <div class="touristpoint-tour touristpoint-tour-grid touristpoint-tour-grid-filter">
                            <ul class="row">
                                <li class="col-md-4 element-item africa australia">
                                    <figure><a href="tour-detail.html"><img src="{{asset('public/frontend/extra-images/tour-grid-img1.jpg')}}" alt=""><span><i class="fa fa-briefcase"></i>Book Now</span></a>
                                        <span>Featured</span>
                                    </figure>
                                    <div class="touristpoint-tour-grid-text">
                                        <h5><a href="tour-detail.html">The Santa Barbara Wildfire</a></h5>
                                        <div class="star-rating"><span class="star-rating-box" style="width:100%"></span></div>
                                        <small>( 03 Review )</small>
                                        <span>$350</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscin elit. Quisque venenatis, ipsum nec dapibus rutr, dui justo rutrum magna,</p>
                                        <a href="tour-detail.html" class="touristpoint-readmore-btn">Read More</a>
                                    </div>
                                </li>
                                <li class="col-md-4 element-item europe asia">
                                    <figure><a href="tour-detail.html"><img src="{{asset('public/frontend/extra-images/tour-grid-img2.jpg')}}" alt=""><span><i class="fa fa-briefcase"></i>Book Now</span></a>
                                        <span>Featured</span>
                                    </figure>
                                    <div class="touristpoint-tour-grid-text">
                                        <h5><a href="tour-detail.html">Thailand Special Places</a></h5>
                                        <div class="star-rating"><span class="star-rating-box" style="width:100%"></span></div>
                                        <small>( 03 Review )</small>
                                        <span>$350</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscin elit. Quisque venenatis, ipsum nec dapibus rutr, dui justo rutrum magna,</p>
                                        <a href="tour-detail.html" class="touristpoint-readmore-btn">Read More</a>
                                    </div>
                                </li>
                                <li class="col-md-4 element-item africa australia">
                                    <figure><a href="tour-detail.html"><img src="{{asset('public/frontend/extra-images/tour-grid-img3.jpg')}}" alt=""><span><i class="fa fa-briefcase"></i>Book Now</span></a>
                                        <span class="one">Featured</span>
                                    </figure>
                                    <div class="touristpoint-tour-grid-text">
                                        <h5><a href="tour-detail.html">A Quote Post for Vestibulu</a></h5>
                                        <div class="star-rating"><span class="star-rating-box" style="width:100%"></span></div>
                                        <small>( 03 Review )</small>
                                        <span>$350</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscin elit. Quisque venenatis, ipsum nec dapibus rutr, dui justo rutrum magna,</p>
                                        <a href="tour-detail.html" class="touristpoint-readmore-btn">Read More</a>
                                    </div>
                                </li>
                                <li class="col-md-4 element-item europe asia">
                                    <figure><a href="tour-detail.html"><img src="{{asset('public/frontend/extra-images/tour-grid-img4.jpg')}}" alt=""><span><i class="fa fa-briefcase"></i>Book Now</span></a>
                                        <span class="two">Featured</span>
                                    </figure>
                                    <div class="touristpoint-tour-grid-text">
                                        <h5><a href="tour-detail.html">Proin at Hendrerit Tortor</a></h5>
                                        <div class="star-rating"><span class="star-rating-box" style="width:100%"></span></div>
                                        <small>( 03 Review )</small>
                                        <span>$350</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscin elit. Quisque venenatis, ipsum nec dapibus rutr, dui justo rutrum magna,</p>
                                        <a href="tour-detail.html" class="touristpoint-readmore-btn">Read More</a>
                                    </div>
                                </li>
                                <li class="col-md-4 element-item africa australia">
                                    <figure><a href="tour-detail.html"><img src="{{asset('public/frontend/extra-images/tour-grid-img5.jpg')}}" alt=""><span><i class="fa fa-briefcase"></i>Book Now</span></a>
                                        <span class="three">Featured</span>
                                    </figure>
                                    <div class="touristpoint-tour-grid-text">
                                        <h5><a href="tour-detail.html">Vivamus Interdum Leo Purus</a></h5>
                                        <div class="star-rating"><span class="star-rating-box" style="width:100%"></span></div>
                                        <small>( 03 Review )</small>
                                        <span>$350</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscin elit. Quisque venenatis, ipsum nec dapibus rutr, dui justo rutrum magna,</p>
                                        <a href="tour-detail.html" class="touristpoint-readmore-btn">Read More</a>
                                    </div>
                                </li>
                                <li class="col-md-4 element-item europe asia">
                                    <figure><a href="tour-detail.html"><img src="{{asset('public/frontend/extra-images/tour-grid-img6.jpg')}}" alt=""><span><i class="fa fa-briefcase"></i>Book Now</span></a>
                                        <span class="three">Featured</span>
                                    </figure>
                                    <div class="touristpoint-tour-grid-text">
                                        <h5><a href="tour-detail.html">Aliquam Accumsan Tellus Sed</a></h5>
                                        <div class="star-rating"><span class="star-rating-box" style="width:100%"></span></div>
                                        <small>( 03 Review )</small>
                                        <span>$350</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscin elit. Quisque venenatis, ipsum nec dapibus rutr, dui justo rutrum magna,</p>
                                        <a href="tour-detail.html" class="touristpoint-readmore-btn">Read More</a>
                                    </div>
                                </li>
                                <li class="col-md-4 element-item africa australia">
                                    <figure><a href="tour-detail.html"><img src="{{asset('public/frontend/extra-images/tour-grid-img7.jpg')}}" alt=""><span><i class="fa fa-briefcase"></i>Book Now</span></a>
                                        <span class="four">Featured</span>
                                    </figure>
                                    <div class="touristpoint-tour-grid-text">
                                        <h5><a href="tour-detail.html">The Santa Barbara Wildfire</a></h5>
                                        <div class="star-rating"><span class="star-rating-box" style="width:100%"></span></div>
                                        <small>( 03 Review )</small>
                                        <span>$350</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscin elit. Quisque venenatis, ipsum nec dapibus rutr, dui justo rutrum magna,</p>
                                        <a href="tour-detail.html" class="touristpoint-readmore-btn">Read More</a>
                                    </div>
                                </li>
                                <li class="col-md-4 element-item europe asia">
                                    <figure><a href="tour-detail.html"><img src="{{asset('public/frontend/extra-images/tour-grid-img8.jpg')}}" alt=""><span><i class="fa fa-briefcase"></i>Book Now</span></a>
                                        <span class="five">Featured</span>
                                    </figure>
                                    <div class="touristpoint-tour-grid-text">
                                        <h5><a href="tour-detail.html">Nam Sollicitudin Lectus Quis</a></h5>
                                        <div class="star-rating"><span class="star-rating-box" style="width:100%"></span></div>
                                        <small>( 03 Review )</small>
                                        <span>$350</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscin elit. Quisque venenatis, ipsum nec dapibus rutr, dui justo rutrum magna,</p>
                                        <a href="tour-detail.html" class="touristpoint-readmore-btn">Read More</a>
                                    </div>
                                </li>
                                <li class="col-md-4 element-item africa australia">
                                    <figure><a href="tour-detail.html"><img src="{{asset('public/frontend/extra-images/tour-grid-img9.jpg')}}" alt=""><span><i class="fa fa-briefcase"></i>Book Now</span></a>
                                        <span class="three">Featured</span>
                                    </figure>
                                    <div class="touristpoint-tour-grid-text">
                                        <h5><a href="tour-detail.html">The Santa Barbara Wildfire</a></h5>
                                        <div class="star-rating"><span class="star-rating-box" style="width:100%"></span></div>
                                        <small>( 03 Review )</small>
                                        <span>$350</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscin elit. Quisque venenatis, ipsum nec dapibus rutr, dui justo rutrum magna,</p>
                                        <a href="tour-detail.html" class="touristpoint-readmore-btn">Read More</a>
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