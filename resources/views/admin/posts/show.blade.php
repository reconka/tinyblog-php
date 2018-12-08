@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    View Post
                </div>

                <div class="panel-body">
                    <p><strong>Name</strong> {{ $post->name }}</p>
                    <p><strong>Slug</strong> {{ $post->slug }}</p>
                    <p><strong>Description</strong> {{ $post->body }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
