<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\HireRequest;
use App\Models\Hire;
use App\Models\Job;
use Illuminate\Http\Request;

class HiresController extends Controller
{
    public function index(){
        return view('front.hire',[
            'jobs' =>Job::latest()->get(),
        ]);
    }

    public function show(){
        return view('dashboard.hire.index',[
            'hires' =>Hire::latest()->get(),
        ]);
    }
    public function showdetial($id){
        $hire = Hire::select()->where('id',$id)->first();
        return view('dashboard.hire.show',compact('hire'));
    }

    //Store new Candidate in DB
    public function store(HireRequest $request){
        Hire::create($request->validated());

        return redirect()->route('hire')->with(['success'=>'User Added Successfully']) ;
    }
    //Delete Candidate && Store in DB
//    public function destroy(Contact $candidate){
//        $candidate->delete();
//        return redirect()->route('dashboard.mycontact')->with(['success'=>'User Deleted Successfully']) ;
//    }
    public function destroy(Hire $hire,$id){
        $hire = Hire::select()->where('id',$id)->delete();
        return redirect()->route('dashboard.my-hire')->with(['success'=>'User Deleted Successfully']) ;
    }
}
