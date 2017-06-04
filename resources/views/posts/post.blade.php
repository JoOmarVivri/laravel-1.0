

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
					              Publicado {{$post->created_at}}
					        </footer>
					     </div>
					     <div class="">
					     	<form action="{{route('posts.destroy', $post->id)}}" method="POST" accept-charset="utf-8">
					     		{{ csrf_field() }}
					     		{{ method_field('DELETE') }}
					     		<input type="submit" name="deleted" value="Destruir" class="btn btn-danger">
					     	</form>
					     </div>
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
