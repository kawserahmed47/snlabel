@extends('front.master')
@section('content')
@include('front.layouts.banner')
 
<!--Start solution area-->
<section class="services-area solution-area">
    <div class="container">
        <div class="row">
            <!--Start single service item-->
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="single-service-item">
                    <div class="img-holder">
                        <img src="{{asset('public/front/img')}}/services/1.jpg" alt="Awesome Image">
                        <div class="overlay">
                            <div class="box">
                                <div class="content">
                                    <a class="thm-btn yellow-bg" href="chemical-research.html">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-holder">
                        <div class="icon">
                            <span class="flaticon-science"></span>    
                        </div>
                        <div class="text">
                            <h3>Chemical Research</h3>
                            <p>Chemical Research expertise in for you manipulating chemicals energy.</p>
                        </div>
                    </div>    
                </div>
            </div>
            <!--End single service item-->
            <!--Start single service item-->
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="single-service-item">
                    <div class="img-holder">
                        <img src="{{asset('public/front/img')}}/services/2.jpg" alt="Awesome Image">
                        <div class="overlay">
                            <div class="box">
                                <div class="content">
                                    <a class="thm-btn yellow-bg" href="agri-processing.html">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-holder">
                        <div class="icon">
                            <span class="flaticon-nature"></span>    
                        </div>
                        <div class="text">
                            <h3>Agriculture Processing</h3>
                            <p>Agricultural engineering at profession who developdesign procedure.</p>
                        </div>
                    </div>    
                </div>
            </div>
            <!--End single service item-->  
            <!--Start single service item-->
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="single-service-item">
                    <div class="img-holder">
                        <img src="{{asset('public/front/img')}}/services/3.jpg" alt="Awesome Image">
                        <div class="overlay">
                            <div class="box">
                                <div class="content">
                                    <a class="thm-btn yellow-bg" href="petroleum-gas.html">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-holder">
                        <div class="icon">
                            <span class="flaticon-interface"></span>    
                        </div>
                        <div class="text">
                            <h3>Petroleum and Gas</h3>
                            <p>Petroleum Engineers are concerned with the petrol exploration, discovery.</p>
                        </div>
                    </div>    
                </div>
            </div>
            <!--End single service item-->
        </div>
        <div class="row">
            <!--Start single service item-->
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="single-service-item">
                    <div class="img-holder">
                        <img src="{{asset('public/front/img')}}/services/4.jpg" alt="Awesome Image">
                        <div class="overlay">
                            <div class="box">
                                <div class="content">
                                    <a class="thm-btn yellow-bg" href="material-engineering.html">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-holder">
                        <div class="icon">
                            <span class="flaticon-folder"></span>    
                        </div>
                        <div class="text">
                            <h3>Material Engineering</h3>
                            <p>Materials Engineering should scientific &amp; and engineering microstructure.</p>
                        </div>
                    </div>    
                </div>
            </div>
            <!--End single service item-->  
            <!--Start single service item-->
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="single-service-item">
                    <div class="img-holder">
                        <img src="{{asset('public/front/img')}}/services/5.jpg" alt="Awesome Image">
                        <div class="overlay">
                            <div class="box">
                                <div class="content">
                                    <a class="thm-btn yellow-bg" href="power-energy.html">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-holder">
                        <div class="icon">
                            <span class="flaticon-nature-1"></span>    
                        </div>
                        <div class="text">
                            <h3>Power and Energy</h3>
                            <p>Ensuring high reliability and optimal sed performance of rotating power.</p>
                        </div>
                    </div>    
                </div>
            </div>
            <!--End single service item-->  
            <!--Start single service item-->
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="single-service-item">
                    <div class="img-holder">
                        <img src="{{asset('public/front/img')}}/services/6.jpg" alt="Awesome Image">
                        <div class="overlay">
                            <div class="box">
                                <div class="content">
                                    <a class="thm-btn yellow-bg" href="mechanical-engin.html">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-holder">
                        <div class="icon">
                            <span class="flaticon-tool"></span>    
                        </div>
                        <div class="text">
                            <h3>Mechanical Enginnering</h3>
                            <p>Creating a dynamic company for that is continuous exploration &amp; develop.</p>
                        </div>
                    </div>    
                </div>
            </div>
            <!--End single service item-->        
        </div>
    </div>
</section>
<!--End solution area-->  
    
@endsection