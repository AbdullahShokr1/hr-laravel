<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        return view('front.home');
    }
    public function show(){
        return view('welcome');
    }
    public function about(){
        return view('front.about');
    }
    public function gallery(){
        return view('front.gallery');
    }
}
