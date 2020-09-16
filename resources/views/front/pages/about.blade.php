@extends('front.master')
@section('content')
 @include('front.layouts.banner')
<!--Start welcome Industry area--> 
@include('front.layouts.about')

<!--End welcome Industry area--> 
 <br>
<!--Start special service area--> 
<section class="special-service-area">
    <div class="container-fluid">
        <div class="row">
            <!--Start single item-->
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="single-item pd-bottom text-center">
                    <span class="flaticon-medal"></span>
                    <h3>Quality Assurance</h3>
                    <span class="border"></span>
                    <a href="#">Know More<i class="fa fa-caret-right" aria-hidden="true"></i></a>    
                </div>
            </div>
            <!--End single item-->
            <!--Start single item-->
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="single-item pd-bottom text-center">
                    <span class="flaticon-avatar"></span>
                    <h3>Professional Workers</h3>
                    <span class="border"></span>
                    <a href="#">Know More<i class="fa fa-caret-right" aria-hidden="true"></i></a>    
                </div>
            </div>
            <!--End single item-->  
            <!--Start single item-->
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="single-item pd-bottom-2 text-center">
                    <span class="flaticon-justice"></span>
                    <h3>Creaditable Integrity</h3>
                    <span class="border"></span>
                    <a href="#">Know More<i class="fa fa-caret-right" aria-hidden="true"></i></a>    
                </div>
            </div>
            <!--End single item-->  
            <!--Start single item-->
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="single-item text-center">
                    <span class="flaticon-people"></span>
                    <h3>effetctive Team Work</h3>
                    <span class="border"></span>
                    <a href="#">Know More<i class="fa fa-caret-right" aria-hidden="true"></i></a>    
                </div>
            </div>
            <!--End single item-->      
        </div>
    </div>    
</section>                            
<!--End special service area-->
 
<!--Start choosing area-->
<section class="choosing-area">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="content">
                    <div class="sec-title">
                        <p>25 Years of Experince</p>
                        <h1>Why Choosing Us</h1>    
                    </div>
                    <ul>
                        <li>
                            <div class="icon-holder">
                                <span class="flaticon-avatar"></span>    
                            </div>
                            <div class="text-holder">
                                <h3>We are Professional</h3>
                                <span>Engineers</span>
                                <p>How all this mistakens idea of denouncing pleasures and completed account.</p>    
                            </div>
                        </li>
                        <li>
                            <div class="icon-holder">
                                <span class="flaticon-interface-2"></span>    
                            </div>
                            <div class="text-holder">
                                <h3>We are Trusted</h3>
                                <span>Team Members</span>
                                <p>Idea denouncing pleasures and praisings pain was born great explorer.</p>    
                            </div>
                        </li>
                        <li>
                            <div class="icon-holder">
                                <span class="flaticon-tool-1"></span>    
                            </div>
                            <div class="text-holder">
                                <h3>We are Expert</h3>
                                <span>Designer</span>
                                <p>Denouncing pleasures and was born work  will give you a complete masters.</p>    
                            </div>
                        </li>   
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="img-box">
                    <img src="{{asset('public/front/img')}}/about/choosing-img.png" alt="Awesome Image">
                </div>
            </div>
            <div class="col-md-4">
                <form action="#">
                    <div class="row">
                        <div class="col-md-12">
                            <input type="text" name="name" placeholder="Your Name*">  
                        </div>
                        <div class="col-md-12">
                            <select class="selectmenu">
                                <option selected="selected">Solution</option>
                                <option>Solution One</option>
                                <option>Solution Two</option>
                                <option>Solution Three</option>
                            </select>    
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                    <input type="text" name="phone" placeholder="Phone">
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                    <input type="text" name="email" placeholder="Email*">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <textarea name="message" placeholder="Write Your Needs..."></textarea>
                        </div>
                        <div class="col-md-12">
                            <button class="thm-btn yellow-bg" type="submit">Submit Now</button>
                        </div>
                    </div> 
                </form>  
            </div>
    
        </div>
    </div>
</section>                                                           
<!--End choosing area-->
 
<!--Start caption area-->                                                                              
<section class="caption-area text-center" style="background-image:url({{asset('public/front/img')}}/resources/caption-bg.jpg);">  
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>We are the world class engineering manufacturer providing<br> the highest quality products.</h1>
                <a class="thm-btn yellow-bg" href="#">Our Solutions</a>    
            </div>
        </div>
    </div>
</section>                                        
<!--End caption area-->  
    
@endsection