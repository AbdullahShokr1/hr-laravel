<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\JobsRequest;
use App\Models\Job;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    public function index(){
        return view('dashboard.jobs.index',[
            'jobs' =>Job::latest()->get(),
        ]);
    }
    public function create(){
        return view('dashboard.jobs.create');
    }
    //Store new Admin in DB
    public function store(JobsRequest $request){
        Job::create($request->validated());

        return redirect()->route('dashboard.jobs.index')->with(['success'=>'User Added Successfully']) ;
    }
    //Edit Admin
    public function edit(Job $job){
        return view('dashboard.jobs.update',compact('job'));
    }
    //update Admin && Store in DB
    public function update(Job $job,JobsRequest $request){

        $job->update($request->validated());

        return redirect()->route('dashboard.jobs.index')->with(['success'=>'User Updated Successfully']) ;
    }
    //update Admin && Store in DB
    public function destroy(Job $job){
        $job->delete();
        return redirect()->route('dashboard.jobs.index')->with(['success'=>'User Deleted Successfully']) ;
    }
}
