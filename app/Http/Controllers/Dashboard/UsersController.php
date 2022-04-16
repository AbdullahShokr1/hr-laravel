<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

use App\Http\Requests\UserRequest;
use App\Http\Requests\UpdateUserRequest;


class UsersController extends Controller
{
    public function index(){
        return view('dashboard.users.index',[
            'users' =>User::latest()->get(),
        ]);
    }
    public function create(){
        return view('dashboard.users.create');
    }
    //Store new User in DB
    public function store(UserRequest $request){
        User::create($request->validated());

        return redirect()->route('dashboard.users.index')->with(['success'=>'User Added Successfully']) ;
    }
    //Edit User
    public function edit(User $user){
        return view('dashboard.users.update',compact('user'));
    }
    //update User && Store in DB
    public function update(User $user,UpdateUserRequest $request){

        $user->update($request->validated());

        return redirect()->route('dashboard.users.index')->with(['success'=>'User Updated Successfully']) ;
    }
    //update User && Store in DB
    public function destroy(User $user){
        $user->delete();
        return redirect()->route('dashboard.users.index')->with(['success'=>'User Deleted Successfully']) ;
    }
}
