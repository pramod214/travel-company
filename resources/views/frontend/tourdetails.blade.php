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
        <div class="touristpoint-subheader touristpoint-left-subheader touristpoint-tour-subheader">
            <span class="touristpoint-subheader-transparent"></span>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>{{$tourdetails->title}}</h1>
                        <div class="star-rating"><span class="star-rating-box" style="width:100%"></span></div>
                        <small>( 03 Reviews )</small>
                    </div>
                </div>
            </div>
        </div>
        <!--// Sub Header \\-->

        <!--// Main Content \\-->
        <div class="touristpoint-main-content touristpoint-content-padding">

            <!--// Main Section \\-->
            <div class="touristpoint-main-section touristpoint-tour-option-full">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <ul class="touristpoint-tour-detail-option">
                                <li>
                                    <i class="fa fa-clock-o"></i>
                                    <h6>Tour Time:</h6>
                                    <span>{{$tourdetails->duration}}</span>
                                </li>
                                <li>
                                    <i class="fa fa-calendar-o"></i>
                                    <h6>Departure:</h6>
                                    <span>{{$tourdetails->departureDate}}</span>
                                </li>
                                <li>
                                    <i class="fa fa-calendar-o"></i>
                                    <h6>Return:</h6>
                                    <span>{{$tourdetails->returnDate}}</span>
                                </li>
                                <li>
                                    <i class="fa fa-location-arrow"></i>
                                    <h6>Location:</h6>
                                    <span>{{$tourdetails->location}}</span>
                                </li>

                                <li>
                                    <i class="fa fa-users"></i>
                                    <h6>Max People:</h6>
                                    <span>{{$tourdetails->noofpeople}}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Main Section \\-->

            <!--// Main Section \\-->
            <div class="touristpoint-main-section">
                <div class="container">
                    <div class="row">

                        <div class="col-md-9">
                            <!--// Tabs \\-->
                            <div class="touristpoint-tour-tabs">
                                <!-- Nav tabs -->
                                <ul class="nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Information</a></li>
                                    <li role="presentation"><a href="#home1" aria-controls="home1" role="tab" data-toggle="tab">Itinanerary</a></li>
                                    <li role="presentation"><a href="#home2" aria-controls="home2" role="tab" data-toggle="tab">Location</a></li>
                                    <li role="presentation"><a href="#home3" aria-controls="home3" role="tab" data-toggle="tab">Gallery</a></li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="home">
                                        <div class="touristpoint-section-heading"><h2>Tour Information</h2></div>
                                        <div class="touristpoint-tour-info">
                                            <p>{{$tourdetails->content}}.</p>
                                            <ul class="touristpoint-tour-info-list">
                                                <li>
                                                    <h6>Departure / Return Location</h6>
                                                    <p>{{$tourdetails->location}}. </p>
                                                </li>
                                                <li>
                                                    <h6>Departure Time</h6>
                                                    <p>{{$tourdetails->departureTime}}. </p>
                                                </li>
                                                <li>
                                                    <h6>Return Time</h6>
                                                    <p>{{$tourdetails->returnTime}}.</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="home1">
                                        <div class="touristpoint-section-heading"><h2>Tour Intinanerary</h2></div>
                                        <div class="touristpoint-tour-intinanerary">
                                            <ul>
                                                <li>
                                                    {!! $tourdetails->itineraries !!}
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="home2">
                                        <div class="touristpoint-tour-location">
                                            <div class="touristpoint-section-heading"><h2>Tour Location</h2></div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque venenatis, ipsum nec dapibus rutrum, dui justo rutrum mag tincidunt porta velit urna vitae arcu. Donec sit amet libero ut neque pharetra aliquet.</p>
                                            <div id="map"></div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="home3">
                                        <div class="touristpoint-city-gallery">
                                            <div class="touristpoint-images-thumb">
                                                <div class="touristpoint-images-thumb-layer"><span><img src="{{asset('public/adminpanel/uploads/package/'.$tourdetails->image)}}" alt=""></span></div>
                                            </div>
                                            <div class="touristpoint-images-list">
                                                @foreach($packageImage as $p)
                                                <div class="touristpoint-images-list-layer"><span><img src="{{asset('public/adminpanel/uploads/package/photos/'.$p->image)}}" alt=""></span></div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!--// Tabs \\-->
                            <div class="touristpoint-section-heading"><h2>Related Tours</h2></div>
                            <div class="touristpoint-related-tour">
                                <ul class="row">
                                    @foreach($relatedTour as $rt)
                                    <li class="col-md-4">
                                        <figure><a href="tour-detail.html"><img src="{{asset('public/adminpanel/uploads/package/'.$rt->image)}}" alt=""><i class="fa fa-link"></i></a>
                                            <span>Featured</span>
                                            <div class="star-rating"><span class="star-rating-box" style="width:78%"></span></div>
                                        </figure>
                                        <div class="touristpoint-related-tour-text">
                                            <h5><a href="tour-detail.html">{{$rt->title}}</a></h5>
                                            <span><del>$50.00</del> $35.00</span>
                                        </div>
                                    </li>
                                        @endforeach
                                </ul>
                            </div>
                        </div>

                        <!--// SideBaar \\-->
                        <aside class="col-md-3">

                            <!--// Widget Search \\-->
                            <div class="widget widget_tabs">
                                <h2>{{$tourdetails->price}}<span>/ Per Person</span></h2>
                                <div class="widget-booking-tab">
                                    <!--// Tabs \\-->
                                    <ul class="nav-tabs" role="tablist">
                                        <li role="presentation" class="active"><a href="#Book-Now" aria-controls="Book-Now" role="tab" data-toggle="tab">Book Now</a></li>
                                        <li role="presentation"><a href="#Enquiry" aria-controls="Enquiry" role="tab" data-toggle="tab">Enquiry</a></li>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="Book-Now">
                                            <div class="touristpoint-booking">
                                                <form>
                                                    <ul>
                                                        <li>
                                                            <label>Date:</label>
                                                            <input type="text" value="-- / -- / ----" onblur="if(this.value == '') { this.value ='-- / -- / ----'; }" onfocus="if(this.value =='-- / -- / ----') { this.value = ''; }">
                                                            <i class="fa fa-calendar-o"></i>
                                                        </li>
                                                        <li>
                                                            <label>Adult:</label>
                                                            <input type="text" value="00" onblur="if(this.value == '') { this.value ='00'; }" onfocus="if(this.value =='00') { this.value = ''; }">
                                                            <i class="fa fa-users"></i>
                                                        </li>
                                                        <li>
                                                            <label>Child:</label>
                                                            <input type="text" value="00" onblur="if(this.value == '') { this.value ='00'; }" onfocus="if(this.value =='00') { this.value = ''; }">
                                                            <i class="fa fa-users"></i>
                                                        </li>
                                                        <li><input type="submit" value="Book Tour Now"></li>
                                                    </ul>
                                                </form>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="Enquiry">
                                            <div class="touristpoint-booking touristpoint-enquiry">
                                                <form>
                                                    <ul>
                                                        <li>
                                                            <label>Date:</label>
                                                            <input type="text" value="Enter Here" onblur="if(this.value == '') { this.value ='Enter Here'; }" onfocus="if(this.value =='Enter Here') { this.value = ''; }">
                                                            <i class="fa fa-user"></i>
                                                        </li>
                                                        <li>
                                                            <label>Adult:</label>
                                                            <input type="email" value="Type Your Email" onblur="if(this.value == '') { this.value ='Type Your Email'; }" onfocus="if(this.value =='Type Your Email') { this.value = ''; }">
                                                            <i class="fa fa-envelope"></i>
                                                        </li>
                                                        <li>
                                                            <label>Child:</label>
                                                            <textarea name="" placeholder="Type Here"></textarea>
                                                            <i class="fa fa-comment"></i>
                                                        </li>
                                                        <li><input type="submit" value="Send Your Enquiry"></li>
                                                    </ul>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!--// Tabs \\-->
                                </div>
                            </div>
                            <!--// Widget Search \\-->

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