<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index(){
        return view('front.contact');
    }

    public function show(){
        return view('dashboard.contact.index',[
            'contacts' =>Contact::latest()->get(),
        ]);
    }
    public function showdetial($id){
        $contact = Contact::select()->where('id',$id)->first();
        return view('dashboard.contact.show',compact('contact'));
    }

    //Store new Candidate in DB
    public function store(ContactRequest $request){
        Contact::create($request->validated());

        return redirect()->route('contact')->with(['success'=>'User Added Successfully']) ;
    }
    //Delete Candidate && Store in DB
//    public function destroy(Contact $candidate){
//        $candidate->delete();
//        return redirect()->route('dashboard.mycontact')->with(['success'=>'User Deleted Successfully']) ;
//    }
    public function destroy(Contact $contact,$id){
        $contact = Contact::select()->where('id',$id)->delete();
        return redirect()->route('dashboard.mycontact')->with(['success'=>'User Deleted Successfully']) ;
    }
}
