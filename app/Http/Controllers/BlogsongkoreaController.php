<?php

namespace App\Http\Controllers;

use App\Blogkoreansong;
use App\Comments;
use Illuminate\Http\Request;
use Session;
use Validator;

class BlogsongkoreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // script for add a comment
        $script = array('js\blog\app.js');

        $blogkoreansong = Blogkoreansong::where('deleted',1)->get();
        // $blogkoreansong = DB::table('blogkoreansongs')->get();
        $sorted_blog = $blogkoreansong->sortBy('id');
        // $comments = Comments::->where('blog_id', $sorted['id']);
        $comments = Comments::all();
        $data = array(
            'script' => $script,
            'blogkoreansong' => $sorted_blog,
            'comments' => $comments
        );
        return view('songkorea.index_blogkoreansong',$data);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $blogkoreansong = Blogkoreansong::findOrFail($id);
        $data = array(
          'blogkoreansong' => $blogkoreansong
        );

        return view('songkorea.show_blog',$data);
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
