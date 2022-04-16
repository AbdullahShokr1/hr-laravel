<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\CandidateRequest;
use App\Models\Candidate;


class CandidateController extends Controller
{
    public function index(){
        return view('front.candidate');
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
            $file_name = "Post Photo";
        }
        $my_candidate = [
            'name' => $request -> name,
            'email' => $request -> email,
            'phone' => $request -> phone,
            'job' => $request -> job,
            'comment' => $request -> comment,
            'cv' => $file_name,
        ];
        Candidate::create($my_candidate,$request->validated());

        return redirect()->route('candidate')->with(['success'=>'User Added Successfully']) ;
    }
    //Delete Candidate && Store in DB
//    public function destroy(Candidate $candidate){
//        $candidate->delete();
//        return redirect()->route('dashboard.mycandidate')->with(['success'=>'User Deleted Successfully']) ;
//    }
    public function destroy(Candidate $candidate,$id){
        $candidate = Candidate::select()->where('id',$id)->delete();
        return redirect()->route('dashboard.mycandidate')->with(['success'=>'User Deleted Successfully']) ;
    }
    /////////////////////
    ///
    ///
    ////////////////////
    protected function saveImages($cv,$folder)
    {
        $file_ex = $cv->getClientOriginalExtension();
        $file_name = time() . '.' . $file_ex;
        $path = $folder;
        $cv->move($path, $file_name);
        return $file_name;
    }

}
