@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    View category
                </div>

                <div class="panel-body">
                    <p><strong>No</strong> {{ $category->name }}</p>
                    <p><strong>Slug</strong> {{ $category->slug }}</p>
                    <p><strong>Description</strong> {{ $category->body }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
