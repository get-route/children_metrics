<?php

namespace App\Http\Controllers\Frontend\Metrik;

use App\Http\Controllers\Controller;
use App\Models\Metric;
use Illuminate\Http\Request;

class IndexMetricController extends Controller
{
    public function index($url_metric){
        $metrika = Metric::with(['tags','comments'])->where('url','=',$url_metric)->get();

        //Count view increment
        $metrika[0]->views +=1;
        $metrika[0]->update();

        return view('frontend.metrika.index',compact('metrika'));
    }
}
