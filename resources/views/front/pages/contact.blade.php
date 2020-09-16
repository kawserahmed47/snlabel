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
                    <div class="contact-info-carousel owl-theme owl-carousel">
                        <div class="item">
                            <div class="contact-details-title">
                                <h5>Sales Department</h5>   
                            </div>
                            <ul class="contact-info">
                                <li>
                                    <div class="icon-box">
                                        <span class="flaticon-signs"></span>
                                    </div>
                                    <div class="text-box">
                                        <p><span>Address:</span> 20c Factory,<br> New York, NY 102</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon-box">
                                        <span class="flaticon-email-envelope-back-symbol-on-phone-screen"></span>
                                    </div>
                                    <div class="text-box">
                                        <p><span>Call Us:</span> +(321) 48 659 779 Mail@Industrypress.com</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon-box">
                                        <span class="flaticon-clock-1"></span>
                                    </div>
                                    <div class="text-box">
                                        <p><span>Mon - Sat:</span>09.00 to 18.00<br> 
                                        <span>Sunday:</span>Closed</p>
                                    </div>
                                </li>
                                
                            </ul>					
                        </div>
                        <div class="item">
                            <div class="contact-details-title">
                                <h5>Sales Department</h5>   
                            </div>
                            <ul class="contact-info">
                                <li>
                                    <div class="icon-box">
                                        <span class="flaticon-signs"></span>
                                    </div>
                                    <div class="text-box">
                                        <p><span>Address:</span> 20c Factory,<br> New York, NY 102</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon-box">
                                        <span class="flaticon-email-envelope-back-symbol-on-phone-screen"></span>
                                    </div>
                                    <div class="text-box">
                                        <p><span>Call Us:</span> +(321) 48 659 779 Mail@Industrypress.com</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon-box">
                                        <span class="flaticon-clock-1"></span>
                                    </div>
                                    <div class="text-box">
                                        <p><span>Mon - Sat:</span> 09.00 to 18.00<br> 
                                        <span>Sunday:</span> Closed</p>
                                    </div>
                                </li>
                                
                            </ul>					
                        </div>
                        <div class="item">
                            <div class="contact-details-title">
                                <h5>Sales Department</h5>   
                            </div>
                            <ul class="contact-info">
                                <li>
                                    <div class="icon-box">
                                        <span class="flaticon-signs"></span>
                                    </div>
                                    <div class="text-box">
                                        <p><span>Address:</span> 20c Factory,<br> New York, NY 102</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon-box">
                                        <span class="flaticon-email-envelope-back-symbol-on-phone-screen"></span>
                                    </div>
                                    <div class="text-box">
                                        <p><span>Call Us:</span> +(321) 48 659 779 Mail@Industrypress.com</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon-box">
                                        <span class="flaticon-clock-1"></span>
                                    </div>
                                    <div class="text-box">
                                        <p><span>Mon - Sat:</span> 09.00 to 18.00<br> 
                                        <span>Sunday:</span> Closed</p>
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
                    <form action="http://st.ourhtmldemo.com/new/indusrty-press/inc/sendemail.php" class="contact-form">
                        <div class="row">
                            <div class="col-md-6">
                                <select class="selectmenu">
                                    <option selected="selected">Chemical Research</option>
                                    <option>Agriculture Processing</option>
                                    <option>Petroleum and Gas</option>
                                    <option>Material Engineering</option>
                                    <option>Power and Energy</option>
                                    <option>Mechanical Engineering</option>
                                </select>  
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="name" placeholder="Your Name *">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="mail" placeholder="Your Mail *">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="phnumber" placeholder="Phone Num">
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