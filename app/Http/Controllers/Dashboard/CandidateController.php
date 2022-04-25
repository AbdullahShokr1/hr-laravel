<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\CandidateRequest;
use App\Models\Candidate;
use App\Models\Job;


class CandidateController extends Controller
{
    public function index(){
        return view('front.candidate',[
            'jobs' =>Job::latest()->get(),
        ]);
    }
    public function show(){
        return view('dashboard.candidate.index',[
            'candidates' =>Candidate::latest()->get(),
        ]);
    }
    //Store new Candidate in DB
    public function store(CandidateRequest $request){
        Candidate::create($request->validated());

        return redirect()->route('candidate')->with(['success'=>'User Added Successfully']) ;
    }
    public function destroy(Candidate $candidate,$id){
        $candidate = Candidate::select()->where('id',$id)->delete();
        return redirect()->route('dashboard.mycandidate')->with(['success'=>'User Deleted Successfully']) ;
    }
}
