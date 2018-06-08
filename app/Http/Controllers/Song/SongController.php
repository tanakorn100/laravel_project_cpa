<?php

namespace App\Http\Controllers\Song;

use App\Http\Controllers\Controller;
use App\Song;
use DB;


/**
 *
 */
class SongController extends Controller
{

	function __construct()
	{
		# code...
	}

	// public function index(){
	// 	$aCss = array(
	// 		'css/song/style.css'
	// 	);
	// 	$title = 'Welcome to My Song Website';
	// 	$subtitle = 'TANAKORN PURARAM';
	//
	// 	// $song_list = DB::table('songs')->get();
	// 	// $song_list = DB::table('songs')->find(3);
	// 	// $song_list = DB::select('select * from songs where id = ?',[2]);
	//
	// 	$song_list = DB::insert('insert into songs (name_song, artist, durations) values (?, ?, ?)',["Baby Don't Stop",'NCT U','3:03']);
	//
	// 	dd($song_list);
	//
	// 	return view('Song.index',['title' => $title , 'subtitle' => $subtitle , 'style' => $aCss ]);
	// }

	public function index(){
		$title = 'Welcome to My Song Website';

		$songs = Song::get();
		return view('Song.index', compact('songs'));
	}

	public function show($id){
		$title = 'Detail of song id : '. $id;

		$song = Song::find($id);
		if(empty($song))
			abort(404);
		return view('Song.show', ['title' => $title , compact('song') ] ); }

}
