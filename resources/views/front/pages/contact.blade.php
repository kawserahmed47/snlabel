@extends('front.master')
@section('content')
@include('front.layouts.banner')
<!--Start Contact area-->
<section class="contact-area">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-7 col-xs-12">
                <div class="contact-details">
                    <h2>Contact Details</h2>
                    <div>
                        <div class="item">
                            <div class="contact-details-title">
                             
                            </div>
                            <ul class="contact-info">
                                <li>
                                    <div class="icon-box">
                                        <span class="flaticon-signs"></span>
                                    </div>
                                    <div class="text-box">
                                        <p><span>Address:</span>Pakuriya Road, R#23, <br>Sector #14, Uttara, Dhaka-1230</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon-box">
                                        <span class="flaticon-email-envelope-back-symbol-on-phone-screen"></span>
                                    </div>
                                    <div class="text-box">
                                        <p><span>Call Us:</span> <a href="tel:+8801700000000">+8801700000000</a> <a href="mailto:operation@snlabel.com">operation@snlabel.com</a> </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon-box">
                                        <span class="flaticon-clock-1"></span>
                                    </div>
                                    <div class="text-box">
                                        <p><span>Sat - Thu:</span>10.00am to 06.00pm<br> 
                                        <span>Friday:</span>Closed</p>
                                    </div>
                                </li>
                                
                            </ul>					
                        </div>
                      
                    </div>
                    <div class="contact-social-links">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>   
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-sm-12 col-xs-12">
                <div class="send-message-form">
                    <div class="title">
                        <h2>Send Messge Us</h2>
                        <span class="border"></span>
                    </div>
                    <h3>I would like to discuss:</h3>
                    <form action="" method="POST" class="contact-form">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="name" placeholder="Your Name *">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="email" placeholder="Your Email *">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <input type="text" name="subject" placeholder="Subject*">
                            </div>
                           
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <textarea name="message" placeholder="Write Your Needs..."></textarea> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button class="thm-btn yellow-bg" type="submit">Your Message</button>    
                            </div>
                        </div>
                    </form>    
                </div>
            </div>    
        </div>
    </div>
</section> 
<!--End Contact area-->
        

    
@endsection