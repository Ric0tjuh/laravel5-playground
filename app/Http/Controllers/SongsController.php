<?php namespace App\Http\Controllers;

//use Illuminate\Routing\Controller; // kreng begint ineens te zeieken dat ik deze niet meer ma gebruiekn omdat ie al een controller gedefineerd heeft door de namespace
//snap alleen niet waarom want eerst werkte het wel gewoon terwijl ik deze twee hierboven allebij aan had staan, en ik heb in de tussentijd niet meer van git gepulled oid.

use App\Song;

class SongsController extends Controller {

  public function __construct()
    {
        $this->beforeFilter('auth');
    }


	/**
	 * Display a listing of the resource.
	 * GET /songs
	 *
	 * @return Response
	 */
	public function index(Song $song)
	{	
		//$songs = DB::table('songs')->get();
		//$songs = Song::get(); // same as above but cleaner;
		$songs = $song->get(); // kan door databounded model

		return view('songs.index', compact('songs'));
		
	}



	## lange manier 
	// public function show($id)
	// {
	// 	$song = Song::find($id);	
	// 	return view('songs.show', compact('song'));
	// }


	##model gebind aan controller manier - zeer schaalbaar
	public function show(Song $song)
	{		
		return view('songs.show', compact('song'));
	}




	public function create()
	{
		$this->beforeFilter('auth');
		
		return view('songs.create');
	}

	public function edit()
	{

		return view('songs.edit', compact($song));
	}



}