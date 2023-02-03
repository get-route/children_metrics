<?php

namespace App\Http\Controllers\Frontend\Metrik;

use App\Http\Controllers\Controller;
use App\Models\Metric;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexMetricController extends Controller
{
    public function index($url_metric){
        $metrika = Metric::with(['tags','comments'])->where('url','=',$url_metric)->get();

        //Count view increment
        $metrika[0]->views +=1;
        $metrika[0]->update();
        $user = Auth::check();
        return view('frontend.metrika.index',compact('metrika','user'));
    }
//    public function comments_metrik($url_metrik){
//        $metrika_comments = Metric::with(['comments'])->where('url','=',$url_metrik)->get();
//
//        return $metrika_comments;
//    }
}
