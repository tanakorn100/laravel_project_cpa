<?php

namespace App\Http\Controllers;

use App\Songkorea;
use Illuminate\Http\Request;
use Session;
use Validator;

class SongkoreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $songkorea = Songkorea::all();
        $data = array(
            'songkorea' => $songkorea
        );

        return View('songkorea.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('songkorea.form');
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
        $this->validate($request, [
            'namesong' => 'required|max:255',
            'artist' => 'required',
            'rating' => 'required|numberic'
        ]);

        $songkorea = new Songkorea;
        $songkorea->namesong = $request->namesong;
        $songkorea->artist = $request->artist;
        $songkorea->durations = $request->durations;
        $songkorea->about = $request->about;
        $songkorea->rating = $request->rating;

        $songkorea->save();

        return redirect('songkorea');
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
