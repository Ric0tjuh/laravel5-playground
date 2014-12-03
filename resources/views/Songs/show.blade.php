@extends('layouts.app');

@section('content')
	<h2>{{$song->title}}</h2>
	<p>{{$song->lyrics}}</p>
@stop