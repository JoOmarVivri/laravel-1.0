@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <ol>
                        <li>
                            <a href="{{route('posts.index')}}" title="">Mis Posts</a>
                        </li>
                        <li>
                            <a href="{{route('interactions')}}" title="">Mis reacciones</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
