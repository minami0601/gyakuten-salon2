@extends('layouts')

@section('content')

<div class="container mt-4">
    <div class="mb-4">
        <a href="{{route('posts.create')}}" class="btn btn-primary">
            投稿する
        </a>
    </div>
    <div class="card mt-4">
        <div class="card-header mb-2">
            {{ $post->title}}
        </div>
        <div class="card-body">
            <p>
                {{ $post->body}}
            </p>
        </div>
        <div class="card-footer">
            <span class="mr-2">
                投稿の日時:{{ $post->created_at}}
            </span>
        </div>
    </div>
    <div class="mt-4 text-right">
        <a class="btn btn-primary" href="{{route('posts.edit', ['post'=>$post])}}">編集する</a>
    </div>
    <form 
    style="display: block;" 
    method="POST" 
    action="{{route('posts.destroy', ['post'=>$post])}}"
    >
        {{csrf_field()}}
        {{method_field('DELETE')}}
        <button class="btn btn-danger">削除</button>
    </form>
</div>

@endsection('content')