<?php

namespace App\Http\Controllers\Cabinet;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class UserMetrikController extends Controller
{
    public function uploads_cabinet(Request $request){

        //expload base64 images is canvas vue.js
       $imagesUser = explode('base64,',$request->images);

       //Download images in storage user
       $filename = "user-$request->path-".Str::random(20).".jpg";
       Storage::disk('user')->put("$request->path/$filename",base64_decode($imagesUser[1]));

            //created new thumbnail file
            $path = Storage::path("public/user/$request->path/$filename");
            $directory = Storage::makeDirectory("public/user/$request->path/thumbnail");
            $thumbnail = Image::make($path);
            $thumbnail->resize(300,424);
            $thumbnail->save(Storage::path("public/user/$request->path/thumbnail/thumbnail-".$filename));
        }

}
