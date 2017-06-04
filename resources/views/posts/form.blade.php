@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register Post</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('posts.store') }}">
                       	{{ csrf_field() }}

                        <div class="form-group{{$errors->has('content') ? ' has-error ' : ''}}">
                            <label for="content" class="col-md-4 control-label">Content</label>

                            <div class="col-md-6">
                                <textarea name="content" id="content" class="form-control" rows="5" >
                                	{{ old('content') }}
                                </textarea>
                                @if ($errors->has('content'))
                                	<span class="help-block">
                                		<strong>{{$errors->first('content')}}</strong>
                                	</span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Create
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@stop