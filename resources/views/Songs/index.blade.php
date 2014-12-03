<h2> Songs: </h2>

@foreach($songs as $song)
	<article> 
		<h3>{{$song->title }}</h3> 
		{{$song->lyrics}}
	</article>
@endforeach