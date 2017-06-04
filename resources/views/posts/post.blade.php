

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">POST</div>
                <div class="panel-body">
                	<div class="media">
						<div class="media-left">
							<a href="#" title="">
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
