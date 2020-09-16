@extends('front.master')
@section('content')

<!--Start rev slider wrapper-->     
@include('front.layouts.slider')
<!--End rev slider wrapper--> 
    
<!--Start services area-->
@include('front.layouts.service')     
<!--End services area-->

<!--Start about us area--> 
@include('front.layouts.about')        
<!--End about us area--> 

<!--Start our team area--> 
@include('front.layouts.team')
<!--End our team area-->

<!--Start latest project area-->                                                                                  
@include('front.layouts.project') 
<!--End latest project area-->

<!--Start testimonial area--> 
<section class="testimonial-area">
    <div class="container">
        <div class="sec-title center text-center">
            <p>Testimonials</p>
            <h1>What Customers Said</h1>    
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="testimonials-item">
                    <!--Start single testimonial item-->
                    <div class="single-testimonial-item">
                        <div class="text-box">
                            <p>Explain to you how all this mistaken ideas of denouncing and praising pain was born will give you a complete.</p>
                        </div>
                        <div class="img-box">
                            <img src="{{asset('public/front/img')}}/customers/1.png" alt="Client Photo">    
                        </div>
                        <div class="title-box text-center">
                            <h4>William Susante</h4>
                            <p>ECo System</p>
                        </div>
                    </div>
                    <!--End single testimonial item-->
                    <!--Start single testimonial item-->
                    <div class="single-testimonial-item">
                        <div class="text-box">
                            <p>Undertakes laborious physical exercise too to obtain some advantages from it but to enjoy a pleasure workers.</p>
                        </div>
                        <div class="img-box">
                            <img src="{{asset('public/front/img')}}/customers/2.png" alt="Client Photo">    
                        </div>
                        <div class="title-box text-center">
                            <h4>John Meckency</h4>
                            <p>Villo Steels</p>
                        </div>
                    </div>
                    <!--End single testimonial item-->
                    <!--Start single testimonial item-->
                    <div class="single-testimonial-item">
                        <div class="text-box">
                            <p>How all this mistaken of denouncing pleasure and praising pain was born and  will give you a complete expound.</p>
                        </div>
                        <div class="img-box">
                            <img src="{{asset('public/front/img')}}/customers/3.png" alt="Client Photo">    
                        </div>
                        <div class="title-box text-center">
                            <h4>Thomas Fernando</h4>
                            <p>Future Theme</p>
                        </div>
                    </div>
                    <!--End single testimonial item-->
                    <!--Start single testimonial item-->
                    <div class="single-testimonial-item">
                        <div class="text-box">
                            <p>Explain to you how all this mistaken ideas of denouncing and praising pain was born will give you a complete.</p>
                        </div>
                        <div class="img-box">
                            <img src="{{asset('public/front/img')}}/customers/1.png" alt="Client Photo">    
                        </div>
                        <div class="title-box text-center">
                            <h4>William Susante</h4>
                            <p>ECo System</p>
                        </div>
                    </div>
                    <!--End single testimonial item-->
                    <!--Start single testimonial item-->
                    <div class="single-testimonial-item">
                        <div class="text-box">
                            <p>Undertakes laborious physical exercise too to obtain some advantages from it but to enjoy a pleasure workers.</p>
                        </div>
                        <div class="img-box">
                            <img src="{{asset('public/front/img')}}/customers/2.png" alt="Client Photo">    
                        </div>
                        <div class="title-box text-center">
                            <h4>John Meckency</h4>
                            <p>Villo Steels</p>
                        </div>
                    </div>
                    <!--End single testimonial item-->
                    <!--Start single testimonial item-->
                    <div class="single-testimonial-item">
                        <div class="text-box">
                            <p>How all this mistaken of denouncing pleasure and praising pain was born and  will give you a complete expound.</p>
                        </div>
                        <div class="img-box">
                            <img src="{{asset('public/front/img')}}/customers/3.png" alt="Client Photo">    
                        </div>
                        <div class="title-box text-center">
                            <h4>Thomas Fernando</h4>
                            <p>Future Theme</p>
                        </div>
                    </div>
                    <!--End single testimonial item-->
                    <!--Start single testimonial item-->
                    <div class="single-testimonial-item">
                        <div class="text-box">
                            <p>Explain to you how all this mistaken ideas of denouncing and praising pain was born will give you a complete.</p>
                        </div>
                        <div class="img-box">
                            <img src="{{asset('public/front/img')}}/customers/1.png" alt="Client Photo">    
                        </div>
                        <div class="title-box text-center">
                            <h4>William Susante</h4>
                            <p>ECo System</p>
                        </div>
                    </div>
                    <!--End single testimonial item-->
                    <!--Start single testimonial item-->
                    <div class="single-testimonial-item">
                        <div class="text-box">
                            <p>Undertakes laborious physical exercise too to obtain some advantages from it but to enjoy a pleasure workers.</p>
                        </div>
                        <div class="img-box">
                            <img src="{{asset('public/front/img')}}/customers/2.png" alt="Client Photo">    
                        </div>
                        <div class="title-box text-center">
                            <h4>John Meckency</h4>
                            <p>Villo Steels</p>
                        </div>
                    </div>
                    <!--End single testimonial item-->
                    <!--Start single testimonial item-->
                    <div class="single-testimonial-item">
                        <div class="text-box">
                            <p>How all this mistaken of denouncing pleasure and praising pain was born and  will give you a complete expound.</p>
                        </div>
                        <div class="img-box">
                            <img src="{{asset('public/front/img')}}/customers/3.png" alt="Client Photo">    
                        </div>
                        <div class="title-box text-center">
                            <h4>Thomas Fernando</h4>
                            <p>Future Theme</p>
                        </div>
                    </div>
                    <!--End single testimonial item-->
                </div>
            </div>
        </div>
    </div>
</section>                                                                                       
<!--End testimonial area-->
 
<!--Start Brand area-->  
@include('front.layouts.brand')
<!--End Brand area-->

<!--Start google map area-->
@include('front.layouts.googlemap')
<!--End google map area-->

    
@endsection