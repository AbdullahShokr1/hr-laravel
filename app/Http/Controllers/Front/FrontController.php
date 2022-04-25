<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class FrontController extends Controller
{
    public function index(){
        return view('front.home',[
            'jobs' =>Job::latest()->get(),
            ]);
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
