@extends('front.master')
@section('content')
@include('front.layouts.banner')

<!--Start project area-->
<section id="project-area">
    <div class="container">
        <ul class="project-filter post-filter text-center">
            <li class="active" data-filter=".filter-item"><span>View All</span></li>
            <li data-filter=".chemical"><span>Chemical</span></li>
            <li data-filter=".agriculture"><span>Agriculture</span></li>
            <li data-filter=".technology"><span>Technology</span></li>
            <li data-filter=".mechanical"><span>Mechanical</span></li>
        </ul>
        <div class="row project-content masonary-layout filter-layout">
            <!--Start single project-->
            <div class="col-md-4 col-sm-4 col-xs-12 filter-item agriculture technology chemical">
                <div class="single-project">
                    <div class="img-holder">
                        <img src="{{asset('public/front/img')}}/project/project-v1-1.jpg" alt="Awesome Image">
                        <div class="overlay-box">
                            <div class="box">
                                <div class="content">
                                    <a href="{{route('projectDetails')}}"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    <div class="title">
                                        <h3>Petroleum Gas</h3>
                                        <span>Chemical</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>   
                </div>
            </div>
            <!--End single project-->
            <!--Start single project-->
            <div class="col-md-4 col-sm-4 col-xs-12 filter-item technology mechanical">
                <div class="single-project">
                    <div class="img-holder">
                        <img src="{{asset('public/front/img')}}/project/project-v1-2.jpg" alt="Awesome Image">
                        <div class="overlay-box">
                            <div class="box">
                                <div class="content">
                                    <a href="{{route('projectDetails')}}"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    <div class="title">
                                        <h3>Petroleum Gas</h3>
                                        <span>Chemical</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>   
                </div>
            </div>
            <!--End single project-->
            <!--Start single project-->
            <div class="col-md-4 col-sm-4 col-xs-12 filter-item chemical agriculture technology">
                <div class="single-project">
                    <div class="img-holder">
                        <img src="{{asset('public/front/img')}}/project/project-v1-3.jpg" alt="Awesome Image">
                        <div class="overlay-box">
                            <div class="box">
                                <div class="content">
                                    <a href="{{route('projectDetails')}}"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    <div class="title">
                                        <h3>Petroleum Gas</h3>
                                        <span>Chemical</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>   
                </div>
            </div>
            <!--End single project-->
            <!--Start single project-->
            <div class="col-md-4 col-sm-4 col-xs-12 filter-item agriculture technology mechanical">
                <div class="single-project">
                    <div class="img-holder">
                        <img src="{{asset('public/front/img')}}/project/project-v1-4.jpg" alt="Awesome Image">
                        <div class="overlay-box">
                            <div class="box">
                                <div class="content">
                                    <a href="{{route('projectDetails')}}"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    <div class="title">
                                        <h3>Petroleum Gas</h3>
                                        <span>Chemical</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>   
                </div>
            </div>
            <!--End single project-->
            <!--Start single project-->
            <div class="col-md-4 col-sm-4 col-xs-12 filter-item chemical technology">
                <div class="single-project">
                    <div class="img-holder">
                        <img src="{{asset('public/front/img')}}/project/project-v1-5.jpg" alt="Awesome Image">
                        <div class="overlay-box">
                            <div class="box">
                                <div class="content">
                                    <a href="{{route('projectDetails')}}"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    <div class="title">
                                        <h3>Petroleum Gas</h3>
                                        <span>Chemical</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>   
                </div>
            </div>
            <!--End single project-->
            <!--Start single project-->
            <div class="col-md-4 col-sm-4 col-xs-12 filter-item chemical agriculture">
                <div class="single-project">
                    <div class="img-holder">
                        <img src="{{asset('public/front/img')}}/project/project-v1-6.jpg" alt="Awesome Image">
                        <div class="overlay-box">
                            <div class="box">
                                <div class="content">
                                    <a href="{{route('projectDetails')}}"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    <div class="title">
                                        <h3>Petroleum Gas</h3>
                                        <span>Chemical</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>   
                </div>
            </div>
            <!--End single project-->
            <!--Start single project-->
            <div class="col-md-4 col-sm-4 col-xs-12 filter-item chemical mechanical">
                <div class="single-project">
                    <div class="img-holder">
                        <img src="{{asset('public/front/img')}}/project/project-v1-7.jpg" alt="Awesome Image">
                        <div class="overlay-box">
                            <div class="box">
                                <div class="content">
                                    <a href="{{route('projectDetails')}}"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    <div class="title">
                                        <h3>Petroleum Gas</h3>
                                        <span>Chemical</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>   
                </div>
            </div>
            <!--End single project-->
            <!--Start single project-->
            <div class="col-md-4 col-sm-4 col-xs-12 filter-item technology agriculture">
                <div class="single-project">
                    <div class="img-holder">
                        <img src="{{asset('public/front/img')}}/project/project-v1-8.jpg" alt="Awesome Image">
                        <div class="overlay-box">
                            <div class="box">
                                <div class="content">
                                    <a href="{{route('projectDetails')}}"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    <div class="title">
                                        <h3>Petroleum Gas</h3>
                                        <span>Chemical</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>   
                </div>
            </div>
            <!--End single project-->
            <!--Start single project-->
            <div class="col-md-4 col-sm-4 col-xs-12 filter-item technology chemical mechanical">
                <div class="single-project">
                    <div class="img-holder">
                        <img src="{{asset('public/front/img')}}/project/project-v1-9.jpg" alt="Awesome Image">
                        <div class="overlay-box">
                            <div class="box">
                                <div class="content">
                                    <a href="{{route('projectDetails')}}"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    <div class="title">
                                        <h3>Petroleum Gas</h3>
                                        <span>Chemical</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>   
                </div>
            </div>
            <!--End single project-->
        </div>
        <div class="row">
            <div class="col-md-12">
                <ul class="post-pagination text-center">
                    <li><a href="#"><i class="fa fa-caret-left" aria-hidden="true"></i></a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>  
    </div>    
</section>      
<!--End project Area--> 
  
    
@endsection