<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\AuthRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function auth(){
        return view('frontend.auth.auth');
    }
    public function store(AuthRequest $request){
        if (Auth::attempt([
            'email'=>$request->email,
            'password'=>$request->password,
        ])){
            if (Auth::user()->is_admin == 1){
                return redirect()->route('admin');
            }else{
               return redirect()->route('cabinet');
            }
        }else
            {
                session()->flash('error','Вход не выполнен. Убедитесь в правильности ввода пароля');
                return  redirect()->route('auth.create');
            }
    }
}
