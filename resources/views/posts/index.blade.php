@extends('layouts.app')　
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
             <div class="card text-center">
            <div class="card-header">
                投稿一覧
            </div>
            @foreach($posts as $post)
            <div class="card-body">
                <h5 class="card-title">タイトル:{{$post->title}}投稿</h5>
                <p class="card-text">内容:{{$post->body}}</p>
                <p class="card-text">投稿者:{{$post->user->name}}</p>
                <a href="{{route('posts.show',$post->id)}}" class="btn btn-primary">テスト詳細</a>
            </div>
            @endforeach
            <div class="card-footer text-muted">
                今日
            </div>
        </div>
        </div>
        <div class="col-md-2">
            <a href="{{ route('posts.create') }}" class="btn btn-primary">新規投稿</a>
        </div>
        </div>

    </div>
</div>
@endsection
