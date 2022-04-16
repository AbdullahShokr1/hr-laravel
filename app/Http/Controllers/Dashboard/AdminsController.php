<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Requests\UserRequest;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminsController extends Controller
{
    public function index(){
        return view('dashboard.admins.index',[
            'admins' =>Admin::latest()->get(),
        ]);
    }
    public function create(){
        return view('dashboard.admins.create');
    }
    //Store new Admin in DB
    public function store(UserRequest $request){
        Admin::create($request->validated());

        return redirect()->route('dashboard.admins.index')->with(['success'=>'User Added Successfully']) ;
    }
    //Edit Admin
    public function edit(Admin $admin){
        return view('dashboard.admins.update',compact('admin'));
    }
    //update Admin && Store in DB
    public function update(Admin $admin,UpdateUserRequest $request){

        $admin->update($request->validated());

        return redirect()->route('dashboard.admins.index')->with(['success'=>'User Updated Successfully']) ;
    }
    //update Admin && Store in DB
    public function destroy(Admin $admin){
        $admin->delete();
        return redirect()->route('dashboard.admins.index')->with(['success'=>'User Deleted Successfully']) ;
    }
}
