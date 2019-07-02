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
                        <h1>Contact Us</h1>
                        <ul class="touristpoint-breadcrumb">
                            <li><a href="index-2.html">Home</a></li>
                            <li>Contact Us</li>
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
                            <div class="touristpoint-fancy-title">
                                <h2>Find Us Now</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non est massa. Praesent rutrum aliquet.</p>
                            </div>
                            <div class="touristpoint-contact-map"><div id="map"></div></div>
                        </div>
                        <div class="col-md-8">
                            <div class="touristpoint-contact-us-text">
                                <div class="touristpoint-fancy-title">
                                    <h2>Contact With Us</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non est massa. Praesent rutrum aliquet.</p>
                                </div>
                                <form>
                                    <ul>
                                        <li>
                                            <label>Your Name:</label>
                                            <input value="Type Here" onblur="if(this.value == '') { this.value ='Type Here'; }" onfocus="if(this.value =='Type Here') { this.value = ''; }" tabindex="0" type="text">
                                            <i class="fa fa-user"></i>
                                        </li>
                                        <li>
                                            <label>Your Email:</label>
                                            <input value="Type Here" onblur="if(this.value == '') { this.value ='Type Here'; }" onfocus="if(this.value =='Type Here') { this.value = ''; }" tabindex="0" type="email">
                                            <i class="fa fa-envelope"></i>
                                        </li>
                                        <li class="masg-box">
                                            <label>Your Message:</label>
                                            <textarea name="comment" placeholder="Type Here"></textarea>
                                            <i class="fa fa-commenting"></i>
                                        </li>
                                        <li>
                                            <label class="submit-btn">
                                                <input type="submit" value="Send Now">
                                                <i class="fa fa-paper-plane"></i>
                                            </label>
                                        </li>
                                    </ul>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="touristpoint-contact-us">
                                <div class="touristpoint-fancy-title">
                                    <h2>Get In Touch</h2>
                                    <p>Vestibulum sit amet urna ornare libero tincidun libero ipsum, aliquam eget.</p>
                                </div>
                                <ul>
                                    <li>
                                        <i class="fa fa-phone"></i>
                                        <div class="touristpoint-contact-info">
                                            <h4>Call Us At:</h4>
                                            <p>(00) 123 45 678 - 987 65 321</p>
                                        </div>
                                    </li>
                                    <li>
                                        <i class="fa fa-envelope"></i>
                                        <div class="touristpoint-contact-info">
                                            <h4>Mail Us At:</h4>
                                            <a href="mailto:yourdomain@name.com">abc@gmail.com - info@example.com</a>
                                        </div>
                                    </li>
                                    <li>
                                        <i class="fa fa-map-marker"></i>
                                        <div class="touristpoint-contact-info">
                                            <h4>Find Us At:</h4>
                                            <p>2925 Swick hill street, lotte, NC 28202 </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
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