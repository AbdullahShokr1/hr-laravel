<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboard.dashboard',[
            'users' =>User::latest()->get(),
            'contacts' =>Contact::latest()->get(),
            'candidates' =>Candidate::latest()->get(),
        ]
        );
    }
}
