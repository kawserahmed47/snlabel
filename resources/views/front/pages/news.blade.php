@extends('front.master')
@section('content')
@include('front.layouts.banner')
<!--Start Blog area-->                                                                                 
<section id="news-area">
    <div class="container">
        <div class="row">
            <!--Start blog post-->
            <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                <div class="blog-post">
                    <!--Start single blog post-->
                    <div class="single-blog-post">
                        <div class="img-holder">
                            <img src="{{asset('public/front/img')}}/news/1.jpg" alt="Awesome Image">
                            <div class="overlay">
                                <div class="box">
                                    <div class="content">
                                        <a class="thm-btn yellow-bg" href="news-single.html">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-holder">
                            <a href="news-single.html">
                                <h2 class="blog-title">
                                    We Won Best Industries Services Award - 2015. 
                                </h2>
                            </a>
                            <ul class="meta-info">
                                <li><i class="fa fa-clock-o" aria-hidden="true"></i><a href="#">Oct 03, 2015</a></li>
                                <li><i class="fa fa-tags" aria-hidden="true"></i><a href="#">Chemical</a></li>
                                <li><i class="fa fa-eye" aria-hidden="true"></i><a href="#">72 Views</a></li>
                                <li><i class="fa fa-comments" aria-hidden="true"></i><a href="#">43 Comments</a></li>
                            </ul>
                            <div class="text">
                                <p>How all this mistakens idea off denouncing sed pleasur and praising our pain was born and get will give you complete occur in which toil and pain can procure him some great pleasure take a trivial example, which of us ever undertakes laborious physical exercise obtain some give you complete advantage from it accountof the system.</p>
                            </div>
                            <div class="author-info">
                                <div class="img-box">
                                    <img src="{{asset('public/front/img')}}/news/news-author-1.png" alt="Awesome Author Pic">
                                </div>
                                <div class="text-box">
                                    <h3>Mark Nicholes</h3>
                                    <span>Team Leader</span>
                                </div>    
                            </div>
                        </div> 
                    </div>
                    <!--End single blog post-->
                    <!--Start single blog post-->
                    <div class="single-blog-post">
                        <div class="img-holder">
                            <img src="{{asset('public/front/img')}}/news/2.jpg" alt="Awesome Image">
                            <div class="overlay">
                                <div class="box">
                                    <div class="content">
                                        <a class="thm-btn yellow-bg" href="news-single.html">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-holder">
                            <a href="news-single.html">
                                <h2 class="blog-title">
                                    Materials & Manufacturing Service Engineers
                                </h2>
                            </a>
                            <ul class="meta-info">
                                <li><i class="fa fa-clock-o" aria-hidden="true"></i><a href="#">Aug 21, 2015</a></li>
                                <li><i class="fa fa-tags" aria-hidden="true"></i><a href="#">Mechanical</a></li>
                                <li><i class="fa fa-eye" aria-hidden="true"></i><a href="#">43 Views</a></li>
                                <li><i class="fa fa-comments" aria-hidden="true"></i><a href="#">14 Comments</a></li>
                            </ul>
                            <div class="text">
                                <p>Explain to you how all there mistakens ideas of denouncing pleasure give you a circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find  to enjoy a pleasure.</p>
                            </div>
                            <div class="author-info">
                                <div class="img-box">
                                    <img src="{{asset('public/front/img')}}/news/news-author-2.png" alt="Awesome Author Pic">
                                </div>
                                <div class="text-box">
                                    <h3>William Harry</h3>
                                    <span>Designer</span>
                                </div>    
                            </div>
                        </div> 
                    </div>
                    <!--End single blog post-->
                    <!--Start single blog post-->
                    <div class="single-blog-post">
                        <div class="img-holder">
                            <img src="{{asset('public/front/img')}}/news/3.jpg" alt="Awesome Image">
                            <div class="overlay">
                                <div class="box">
                                    <div class="content">
                                        <a class="thm-btn yellow-bg" href="news-single.html">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-holder">
                            <a href="news-single.html">
                                <h2 class="blog-title">
                                    Materials for the Carbohydrate Economy
                                </h2>
                            </a>
                            <ul class="meta-info">
                                <li><i class="fa fa-clock-o" aria-hidden="true"></i><a href="#">Oct 03, 2015</a></li>
                                <li><i class="fa fa-tags" aria-hidden="true"></i><a href="#">Power Energy</a></li>
                                <li><i class="fa fa-eye" aria-hidden="true"></i><a href="#">43 Views</a></li>
                                <li><i class="fa fa-comments" aria-hidden="true"></i><a href="#">43 Comments</a></li>
                            </ul>
                            <div class="text">
                                <p>This mistaken idea of denouncing pleasure and praisings pain was born us and I will give you  complete account of the system, and expound the actual teachings of the great explored of no one rejects, consequences circumstances occur in which toil and pain can procure him some great pleasure take a trivial physical exercise.</p>
                            </div>
                            <div class="author-info">
                                <div class="img-box">
                                    <img src="{{asset('public/front/img')}}/news/news-author-3.png" alt="Awesome Author Pic">
                                </div>
                                <div class="text-box">
                                    <h3>James Fernando</h3>
                                    <span>CEO & Founder</span>
                                </div>    
                            </div>
                        </div> 
                    </div>
                    <!--End single blog post-->
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
            </div>
            <!--End blog post-->
            <!--Start sidebar Wrapper-->
            <div class="col-lg-3 col-md-4 col-sm-7 col-xs-12">
                <div class="sidebar-wrapper">
                    <!--Start single sidebar-->
                    <div class="single-sidebar">
                        <form class="search-form" action="#">
							<input placeholder="Search" type="text">
							<button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
						</form>
                    </div>
                    <!--End single sidebar-->
                    <!--Start single sidebar-->
                    <div class="single-sidebar">
                        <div class="sidebar-title">
                            <h1>Categories</h1>
                            <span class="border"></span>
                        </div>
                        <ul class="categories clearfix">
                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Manufacturing<span>(15)</span></a></li>   
                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Agriculture<span>(06)</span></a></li>   
                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Pharmacology<span>(10)</span></a></li>   
                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Latest Technology<span>(14)</span></a></li>  
                        </ul>
                    </div>
                    <!--End single sidebar-->
                    <!--Start single sidebar--> 
                    <div class="single-sidebar">
                        <div class="sidebar-title">
                            <h1>popular Posts</h1>
                            <span class="border"></span>
                        </div>
                        <ul class="popular-post">
                            <li>
                                <div class="img-holder">
                                    <img src="{{asset('public/front/img')}}/sidebar/popular-post-1.jpg" alt="Awesome Image">
                                    <div class="overlay-box">
                                        <div class="box">
                                            <div class="content">
                                                <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="title">
                                    <h3><a href="#">Materials and<br>Manufacturing Education</a></h3>
                                    <p><i class="fa fa-clock-o" aria-hidden="true"></i>August 21st, 2016</p>
                                </div>
                            </li>
                            <li>
                                <div class="img-holder">
                                    <img src="{{asset('public/front/img')}}/sidebar/popular-post-2.jpg" alt="Awesome Image">
                                    <div class="overlay-box">
                                        <div class="box">
                                            <div class="content">
                                                <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="title">
                                    <h3><a href="#">Denouncing pleasure &<br>praising pain tech...</a></h3>
                                    <p><i class="fa fa-clock-o" aria-hidden="true"></i>August 26st, 2016</p>
                                </div>
                            </li>
                            <li>
                                <div class="img-holder">
                                    <img src="{{asset('public/front/img')}}/sidebar/popular-post-3.jpg" alt="Awesome Image">
                                    <div class="overlay-box">
                                        <div class="box">
                                            <div class="content">
                                                <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="title">
                                    <h3><a href="#">Ensure Plant & Personal<br>Safety of Employee</a></h3>
                                    <p><i class="fa fa-clock-o" aria-hidden="true"></i>January 17, 2016</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--End single sidebar-->
                    <!--Start single-sidebar-->
                    <div class="single-sidebar">
                        <div class="sidebar-title">
                            <h1>Follow Us</h1>
                            <span class="border"></span>    
                        </div>
                        <div class="follow-us-content">
                            <img src="{{asset('public/front/img')}}/sidebar/follow-us.jpg" alt="Awesome Follow Us Image">    
                        </div>        
                    </div> 
                    <!--End single-sidebar-->
                    <!--Start single-sidebar-->
                    <div class="single-sidebar">
                        <div class="sidebar-title">
                            <h1>Product Tag</h1>
                            <span class="border"></span>    
                        </div>
                        <ul class="product-tag">
                            <li><a href="#">Books</a></li>
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Ideas</a></li>
                            <li><a href="#">Brand</a></li>
                            <li><a href="#">Engines</a></li>
                            <li><a href="#">Science</a></li>
                            <li><a href="#">Industry</a></li>
                            <li><a href="#">Chemical</a></li>
                            <li><a href="#">Research </a></li>
                            <li><a href="#">Future</a></li>
                        </ul>      
                    </div> 
                    <!--End single-sidebar-->
                </div>    
            </div>
            <!--End Sidebar Wrapper-->                               
        </div>
    </div>
</section>                                  
<!--End Blog area--> 
  
    
@endsection