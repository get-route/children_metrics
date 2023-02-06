<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use App\Models\Metric;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{

    public function index(){
        $random_metrik = Metric::all('title','url','views','public','photo')->where('public','=','Да')->random(3);

        return view('index',compact('random_metrik'));
    }
}
