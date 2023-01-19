<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Metric\ImgMetricRequest;
use App\Models\Metric;
use Illuminate\Http\Request;
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
        $newMetric = $request->all();
        if ($request->hasFile('image')){

            $newMetric = $request->file('image')->store("public/metric");
        }
        return response($newMetric);

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
    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function directive()
    {
        $directive_img = scandir('storage/metric');
        $directive_img = array_splice($directive_img, 2);
        //$image = Image::make('Frontend/img/metrica/metrika.jpg')->fit(100,100)->save('app/'.date('Y-m-d'));

        return response($directive_img);

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
