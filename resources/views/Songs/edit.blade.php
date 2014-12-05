@extends('layouts.app');

@section('content')
	
	<h2> Edit {{$song->title}}</h2>

	{!!Form::model($song, ['url'=> 'songs/'.$song->id, 'method'=> 'PATCH'])!!}

	<div class="form-group"> 
			{!! Form::text('title', null, ['class' => 'form-control']) !!}
		</br>
			{!! Form::textarea('lyrics', null, ['class' => 'form-control']) !!}
		</br>
			{!!Form::submit('Update song', ['class' => 'btn btn-primary'])!!}
	</div>

	{!!Form::close()!!}

@stop