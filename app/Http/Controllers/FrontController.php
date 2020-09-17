<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $data = array();
        $data['title']= "Home";
        return view('front.pages.index',$data);
    }

   
    public function about(){
        $data = array();
        $data['title']= "About";
        return view('front.pages.about',$data);

    }

    public function profile(){
        $data = array();
        $data['title']= "Profile";
        return view('front.pages.profile',$data);

    }

    public function sisterConcerns(){
        $data = array();
        $data['title']= "Sister Concerns";
        return view('front.pages.sisterConcerns',$data);

    }

    public function mdMessage(){
        $data = array();
        $data['title']= "Message of MD";
        return view('front.pages.mdMessage',$data);
    }


    public function service(){
        $data = array();
        $data['title']= "Services";
        return view('front.pages.service',$data);
    }

    public function serviceDetails(){
        $data = array();
        $data['title']= "Service Details";
        return view('front.pages.serviceDetails',$data);

    }

    public function project(){
        $data = array();
        $data['title']= "Projects";
        return view('front.pages.project',$data);

    }

    public function projectDetails(){
        $data = array();
        $data['title']= "Project Details";
        return view('front.pages.projectDetails',$data);
    }

    public function mission(){
        $data = array();
        $data['title']= "Mission";
        return view('front.pages.mission',$data);


    }

    public function vision(){
        $data = array();
        $data['title']= "Vision";
        return view('front.pages.vision',$data);


    }

    public function product(){
        $data = array();
        $data['title']= "Products";
        return view('front.pages.product',$data);
    }

    public function productDetails(){
        $data = array();
        $data['title']= "Product Details";
        return view('front.pages.productDetails',$data);

    }

    public function team(){
        $data = array();
        $data['title']= "Team";
        return view('front.pages.team',$data);



    }

    public function news(){
        $data = array();
        $data['title']= "News";
        return view('front.pages.news',$data);
    }
    public function newsDetails(){
        $data = array();
        $data['title']= "News Details";
        return view('front.pages.newsDetails',$data);
    }

    public function machineries(){
        $data = array();
        $data['title']= "Machineries";
        return view('front.pages.machineries',$data);
    }

    public function machineriesDetails(){
        $data = array();
        $data['title']= "Machineries Details";
        return view('front.pages.machineriesDetails',$data);

    }

    public function gallery(){
        $data = array();
        $data['title']= "Gallery";
        return view('front.pages.gallery',$data);


    }

    public function career(){
        $data = array();
        $data['title']= "Career";
        return view('front.pages.career',$data);


    }
    public function faq(){
        $data = array();
        $data['title']= "FAQ";
        return view('front.pages.faq',$data);


    }

    public function contact(){
        $data = array();
        $data['title']= "Contact";
        return view('front.pages.contact',$data);


    }
}
