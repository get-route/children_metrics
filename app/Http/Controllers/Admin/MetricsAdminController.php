<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Metric\ImgMetricRequest;
use App\Models\Metric;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use function League\Flysystem\has;

class MetricsAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.metrics.metrics_index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function uploads(ImgMetricRequest $request)
    {
        if ($request->hasFile('image')){
            $filename = $request->file('image')->getClientOriginalName();
            //Function download image in storage
            $newMetric = $request->file('image')->storeAs("public/metric",$filename);
            //Function thumbnail in for metric
            $path = Storage::path('public/metric/'.$filename);
            $thumbnail = Image::make($path);
            $thumbnail->resize(300,300);
            $thumbnail->save(Storage::path("public/thumbnail/thumbnail-".$filename));
        }
        return response($thumbnail);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $all_metrics = Metric::with('tags')->orderBy('updated_at','ASC')->get(['id','title','photo','prise','url','public']);
        return response($all_metrics);

    }
    //File manager storage images for metric
    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function directive()
    {
        $directive_img = scandir('storage/metric');
        $directive_img = array_splice($directive_img, 2);
        return response($directive_img);

    }
    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dirdelete($image)
    {
        //Delete storage metric images
        $delete_directory= Storage::disk('public')->delete("metric/$image");
        //Delete thumbnail for metric images
        $delete_thumbnail = Storage::disk('public')->delete("thumbnail/thumbnail-$image");
        return response($delete_directory);

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
