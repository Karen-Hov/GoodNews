<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('front.index');
    }
    public function blog(){
        return view('front.bloge_singl');
    }
    public function blog_singl(){
        return view('front.blog_singl');
    }
}
