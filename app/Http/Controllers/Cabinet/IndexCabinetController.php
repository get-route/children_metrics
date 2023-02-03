<?php

namespace App\Http\Controllers\Cabinet;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexCabinetController extends Controller
{
    public function index(){
        $user = Auth::user();

        //quantity stat in cabinet users ready_metriks
        $quantity_metrik = scandir("storage/user/$user->id");
        $quantity_metrik = array_splice($quantity_metrik, 3);
        $quantity = count($quantity_metrik);

        return view('cabinet.index',compact('user','quantity'));
    }
}
