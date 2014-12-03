@extends('layouts.app');

@section('content')

	<h2> Songs: </h2>

	@foreach($songs as $song)
		<article> 
			<h3><a href="/songs/{{$song->id}}"> {{$song->title}} </a> </h3>
			{{$song->lyrics}}
		</article>
	@endforeach
@stop