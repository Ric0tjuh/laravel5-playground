<?php namespace App\Http\Controllers;

//use Illuminate\Routing\Controller; // kreng begint ineens te zeieken dat ik deze niet meer ma gebruiekn omdat ie al een controller gedefineerd heeft door de namespace
//snap alleen niet waarom want eerst werkte het wel gewoon terwijl ik deze twee hierboven allebij aan had staan, en ik heb in de tussentijd niet meer van git gepulled oid.

use App\Song;
use Illuminate\Http\Request;

class SongsController extends Controller {

	private $song;

	//ipv model aan iedere controller te binden kunnen we hem ook aan de constructor binden (L)
  public function __construct(Song $song)
    {
        //$this->beforeFilter('auth');

        $this->song = $song;

    }


	/**
	 * Display a listing of the resource.
	 * GET /songs
	 *
	 * @return Response
	 */
	public function index()
	{	
		//$songs = DB::table('songs')->get();
		//$songs = Song::get(); // same as above but cleaner;
		$songs = $this->song->get(); // kan door databounded model

		return view('songs.index', compact('songs'));
		
	}



	## lange manier 
	// public function show($id)
	// {
	// 	$song = Song::find($id);	
	// 	return view('songs.show', compact('song'));
	// }

	
	public function show($id)
	{		
		$song = $this->song->find($id);
		return view('songs.show', compact('song'));
	}




	public function create()
	{
		//$this->beforeFilter('auth');
		
		return view('songs.create');
	}

	public function edit($id)
	{
		$song = $this->song->find($id);
		return view('songs.edit', compact('song'));
	}

	public function update($id, Request $request)
	{
		
		$song = $this->song->find($id);	

		// works but sucks for multiple lines
		// $song ->title = $request->get('title');
		// $song->save();

		// update more / all (= geil)
		$song->fill($request->input())->save();


		return redirect('songs');


	}





}