<?php

namespace App\Http\Controllers;

use App\Songkorea;
use Illuminate\Http\Request;
use Session;
use Cookie;
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

        // Session::put('language','Thai');
        // Cookie::queue('name','values','minutes'); create cookie
        // Cookie::queue('language','Thai',5);
        Cookie::queue(Cookie::forever('Name','Tanakorn'));
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
            'rating' => 'required'
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
        $songkorea = Songkorea::find($id);
        $data = array(
          'songkorea' => $songkorea
        );

        return view('songkorea/show',$data);
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
        if($id!==''){
          $songkorea = Songkorea::find($id);
          $data = array(
              'songkorea' => $songkorea
          );
        return view('songkorea/form',$data);
        }

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
        $this->validate($request, [
            'namesong' => 'required|max:255',
            'artist' => 'required',
            'rating' => 'required'
        ]);

        $songkorea = Songkorea::find($id);
        $songkorea->namesong = $request->namesong;
        $songkorea->artist = $request->artist;
        $songkorea->durations = $request->durations;
        $songkorea->about = $request->about;
        $songkorea->rating = $request->rating;

        $songkorea->save();

        Session::flash('message','Success Update song ID : '.$id);

        return redirect('songkorea');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $songkorea = Songkorea::find($id);
        $songkorea->delete();

        Session::flash('message','Success Delete song ID : '.$id);
        return redirect('songkorea');
    }
}
