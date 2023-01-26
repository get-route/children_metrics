<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function create(){
        return view('frontend.auth.register');
    }

    public function store(RegisterRequest $request){
       $user = User::create([
           'name'=>$request->name,
           'email'=>$request->email,
           'password'=>$request->password,
       ]);
       session()->flash('success','Вы успешно зарегистрировались');
       Auth::login($user);
    }
}
