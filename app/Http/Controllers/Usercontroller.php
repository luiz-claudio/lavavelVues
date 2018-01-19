<?php

namespace App\Http\Controllers;

use App\Entities\User;
use App\Http\Requests\userRequest;
use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    protected $userRepository;


    public function __construct(User $UserRepository )
    {
        $this->userRepository = $UserRepository;



    }

    public function index()
    {
        $users= $this->userRepository->select('id','name')->get();

        return view('users.list',compact('users'));
    }

    public function newUsers()
    {


        return view("users.register");
    }


    public function store(userRequest $request)
    {
        $user = new User();
        $user->name =$request->name;
        $user->password= bcrypt($request->passwors);
        $user->email=$request->email;
        $user->save();



        return redirect('/admin/users/list');
    }
    //
}
