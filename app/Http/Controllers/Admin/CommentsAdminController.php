<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Comment\ReplyCommentRequest;
use App\Models\Comment;
use App\Models\Metric;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommentsAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.comments.comments_index');
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
    public function store(ReplyCommentRequest $request)
    {
        $data = $request->validated();
        $reply_admin = Comment::create([
            'text'=>$request->text,
            'name'=>$request->name,
            'email'=>$request->email,
            'metric_id'=>$request->metric_id,
            'parent_id'=>$request->parent_id,
            'public'=>"ДА",
        ]);
        return $reply_admin;
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $comments_all = Comment::with('metrics')->orderBy('metric_id','ASC')->get();
        return response()->json($comments_all);
    }
    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function metric_url($id)
    {
        $metrics_url = DB::table('metrics')->where('id','=',$id)->orderBy('metric_id','DESC')->get('url');

        return response($metrics_url);
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
