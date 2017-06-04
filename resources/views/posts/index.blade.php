@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">LISTADO DE POSTS</div>
                <div class="panel-body">
					<ul>
						@forelse ($posts as $post)
							<li>{{ $post->content }}</li>
						@empty
							<p>No tiene ningun post </p>
						@endforelse
					</ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
