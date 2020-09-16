<!--Start header area-->  
<header class="header-area">
    <div class="container">
        <div class="logo pull-left">
            <a href="{{route('index')}}">
                <img src="{{asset('public/front/img')}}/resources/logo.png" alt="Awesome Logo">
            </a>
        </div>
        <div class="top-info pull-right">
            <ul>
                <li class="single-info-box">
                    <div class="icon-holder">
                        <span class="flaticon-earth-grid"></span>
                    </div>
                    <div class="text-holder">
                        <p><span>Address:</span> 20c Factory Street,<br>Newyork, NY 10205</p>
                    </div>
                </li>
                <li class="single-info-box">
                    <div class="icon-holder">
                        <span class="flaticon-email-envelope-back-symbol-on-phone-screen"></span>
                    </div>
                    <div class="text-holder">
                        <p><span>Call Us:</span> +(321) 48 659 779<br>Mail@Industrypress.com</p>
                    </div>
                </li>
                <li>
                    <div class="social-links">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        </ul>    
                    </div>
                </li>
            </ul>    
        </div>     
    </div>
</header>
<!--End header area-->

<!--Start mainmenu area-->
<section class="mainmeu-area stricky">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-sm-12 col-xs-12">
                <div class="mainmenu-bg clearfix">
                    <nav class="main-menu pull-left">
                        <div class="navbar-header">   	
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation">
                                <li class="current"><a href="{{route('index')}}">Home</a></li>
                                <li class="dropdown"><a href="{{route('about')}}">About</a>
                                    <ul>
                                        <li><a href="{{route('serviceDetails')}}">About Us</a></li>
                                        <li><a href="{{route('serviceDetails')}}">Message of MD</a></li>
                                        <li><a href="{{route('serviceDetails')}}">Mission and Vision</a></li>
                                        <li><a href="{{route('serviceDetails')}}">Sister Concern</a></li>
                                        <li><a href="{{route('serviceDetails')}}">Our Team</a></li>
                                        <li><a href="{{route('gallery')}}">Gallery</a></li>
                                        <li><a href="{{route('serviceDetails')}}">FAQ</a></li>
                                    </ul>
                                
                                </li>
                                <li class="dropdown"><a href="{{route('service')}}">Services</a>
                                    <ul>
                                        <li><a href="{{route('serviceDetails')}}">Chemical Research</a></li>
                                        <li><a href="{{route('serviceDetails')}}">Agriculture Processing</a></li>
                                        <li><a href="{{route('serviceDetails')}}">Petroleum and Gas</a></li>
                                        <li><a href="{{route('serviceDetails')}}">Material Engineering</a></li>
                                        <li><a href="{{route('serviceDetails')}}">Power and Energy</a></li>
                                        <li><a href="{{route('serviceDetails')}}">Mechanical Engineering</a></li>
                                    </ul>
                                </li>
                

                                <li class="dropdown"><a href="{{route('product')}}">Products</a>
                                    <ul>
                                    <li><a href="{{route('product')}}">Our Products</a></li>
                                    <li><a href="{{route('project')}}">All Projects</a></li>
                                    </ul>
                                </li>
                           
                            <li class="dropdown"><a href="{{route('machineries')}}">Machineries</a>
                                    <ul>
                                    <li><a href="{{route('machineriesDetails')}}">Machinery Detials</a></li>
                                        {{-- <li><a href="shop-single.html">Shop Single</a></li>
                                        <li><a href="shopping-cart.html">Shopping Cart</a></li>
                                        <li><a href="checkout.html">Checkout Page</a></li>
                                        <li><a href="account.html">My Account</a></li> --}}
                                    </ul>
                                </li>
                               
                            <li><a href="{{route('news')}}">News</a></li>
                            <li><a href="{{url('/carrer')}}">Career</a></li>
                            <li><a href="{{route('contact')}}">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                    {{-- <div class="top-search-box pull-right">
                        <button><i class="fa fa-search"></i></button>
                        <ul class="search-box">
				            <li>
				                <form action="#">
								    <input type="text" placeholder="Search for something...">
								    <button type="submit"><i class="fa fa-search"></i></button>
								</form>
				            </li>
				        </ul>   
                    </div> --}}
                </div>
            </div>
            <div class="col-md-2 col-sm-12 col-xs-3">
                <div class="quote-button">
                    <a class="thm-btn yellow-bg"  data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-share" aria-hidden="true"></i>Get a Quote</a>
                </div>    
            </div>
        </div>
    </div>
</section>    
<!--End mainmenu area-->     