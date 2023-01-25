<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\AuthRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function auth(){
        return view('frontend.auth.auth');
    }
    public function store(AuthRequest $request){
        dd($request->all());
    }
}
