@extends('layouts.app')

@section('content')

@if (session()->has('message') );
	{{ session()->get('message') }}
@endif
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                	LISTADO DE POSTS
                	
                </div>
                <div class="panel-body">
                	<div class="">
                		<form action="{{route('posts.index')}}" method="GET" accept-charset="utf-8">
                			<input type="text" class="form-group" name="search" value="" placeholder="Buscar Post">
                			<input type="submit" value="Buscar" class="btn btn-primary">
                			
                		</form>
                	</div>
					<ul>
						@forelse ($posts as $post)
							<li>
								<a href="{{url('posts', $post->id )}}" title="">{{ $post->abstract }}</a>
								<small>{{$post->created_at}}</small>
							</li>
						@empty
							<p>No tiene ningun post </p>
						@endforelse
					</ul>
					<footer>
						<button type="button"> <a href="{{url('posts', 'create')}}" title="">Crear Post</a></button>
					</footer>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
