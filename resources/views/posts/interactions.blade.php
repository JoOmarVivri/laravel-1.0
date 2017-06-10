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
                	LISTADO DE REACCIONES 
                	
                </div>
                <div class="panel-body">
                	
					<ul>
						@forelse ($interactions as $post)
							<li>
                                <strong>{{ $post->pivot->reaction }}</strong>
								<a href="{{url('posts', $post->id )}}" title="">
                                    {{ $post->abstract }}
                                </a>
								<small>{{$post->created_at}}</small>
							</li>
						@empty
							<p>No tiene ningun post </p>
						@endforelse
					</ul>

                    {{ $interactions->links() }}
					
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
