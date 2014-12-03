<?php namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

use App\Song;

class SongsController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /songs
	 *
	 * @return Response
	 */
	public function index()
	{
		
		$songs = Song::get();
		//$songs = DB::table('songs')->get();

		return view('songs.index', compact('songs'));
	}


	/**
	 * Display the specified resource.
	 * GET /songs/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

}