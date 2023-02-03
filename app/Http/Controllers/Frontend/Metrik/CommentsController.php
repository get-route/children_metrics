<?php

namespace App\Http\Controllers\Frontend\Metrik;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;

class CommentsController extends Controller
{
    public function index(Request $request){

        $data = Request::all();
        return $data;
    }
}
