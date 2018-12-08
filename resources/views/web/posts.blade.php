@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

        	<h1>My posts</h1>

        	@foreach($posts as $post)
            <div class="panel panel-default">
                <div class="panel-heading">
                 <h3>   {{ $post->name }}</h3>
                </div>

                <div class="panel-body">
                    @if($post->file)
                        <img src="{{ $post->file }}" class="img-responsive">
                    @endif
                    
                    {{ $post->excerpt }}
                    <a href="{{ route('post', $post->slug) }}" class=" btn-block">More...</a>
                </div>
            </div>
            @endforeach

            {{ $posts->render() }}
        </div>
    </div>
</div>
@endsection