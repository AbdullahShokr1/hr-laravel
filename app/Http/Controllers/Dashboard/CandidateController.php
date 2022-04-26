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

        if(($request -> cv) != Null){
            $file_name = $this -> saveImages($request -> cv,'candidate');
        }else{
            $file_name = "cv";
        }
        $my_cv = [
            'nid' => $request -> nid,
            'name' => $request -> name,
            'email' => $request -> email,
            'phone' => $request -> phone,
            'job' => $request -> job,
            'skills' => $request -> skills,
            'cv'=>$file_name,
        ];

        Candidate::create($my_cv,$request->validated());

        return redirect()->route('candidate')->with(['success'=>'User Added Successfully']) ;
    }
    public function destroy(Candidate $candidate,$id){
        $candidate = Candidate::select()->where('id',$id)->delete();
        return redirect()->route('dashboard.mycandidate')->with(['success'=>'User Deleted Successfully']) ;
    }
    protected function saveImages($photo,$folder)
    {
        $file_ex = $photo->getClientOriginalExtension();
        $file_name = time() . '.' . $file_ex;
        $path = $folder;
        $photo->move($path, $file_name);
        return $file_name;
    }
}
