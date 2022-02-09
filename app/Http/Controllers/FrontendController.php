<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //
    public function index(){
        return view('front.index');
    }
    public function about(){
        return view('front.about-us');

    }
    public function acting(){
        return view('front.acting-academy');

    }
    public function classes(){
        return view('front.classes');

    }
    public function contact(){
        return view('front.contact');

    }
    public function digital(){
        return view('front.digital-marketing');

    }
    public function filmmaker(){
        return view('front.filmmaker-academy');

    }
}
