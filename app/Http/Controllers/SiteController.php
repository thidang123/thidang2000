<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function site(){
        return view('index');
    }
    public function about(){
        return view('about');
    }
    public function blog(){
        return view('blog');
    }
    public function booking(){
        return view('booking');
    }
    public function contact(){
        return view('contact');
    }
    public function price(){
        return view('price');
    }
    public function service(){
        return view('service');
    }
    public function single(){
        return view('single');
    }
    public function signin(){
        return view('signin');
    }
}
