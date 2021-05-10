@extends('layouts')

@section('content')

<div class="container mt-4">
    <div class="mb-4">
        <a href="{{route('posts.create')}}" class="btn btn-primary">
            投稿する
        </a>
    </div>
    @foreach($posts as $post)
    <div class="card mt-4">
        <div class="card-header mb-2">
            {{ $post->title}}
        </div>
        <div class="card-body">
            <p>
                {{ $post->body}}
            </p>
            <a class="card-link" href="{{route('posts.show', ['post'=>$post])}}">詳細を見る</a>
        </div>
        <div class="card-footer">
            <span class="mr-2">
                投稿の日時:{{ $post->created_at}}
            </span>
        </div>
    </div>
    @endforeach
    <div class="d-flex justify-content-center mb-4">
        {{$posts->links()}}
    </div>
</div>

@endsection('content')

