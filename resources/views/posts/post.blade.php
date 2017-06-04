@extends('layout')

@section('content')
	<div class="media">
		<div class="media-left">
			<<a href="#" title="">
				<img src=". . ." alt="..." class="media-object">
			</a>
		</div>
		<div class="media-body">
	        {{ $post->content }}
	        <footer>
	              Creado {{ $post->created_at }}
	        </footer>
	     </div>
	</div>
@stop