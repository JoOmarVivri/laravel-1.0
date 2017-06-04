@extends('layout')

@section('content')
	<h2>LISTADO DE POSTS</h2>

	<ul>
		@forelse ($posts as $post)
			<li>{{ $post->content }}</li>
		@empty
			<p>No tiene ningun post </p>
		@endforelse
	</ul> 
@stop