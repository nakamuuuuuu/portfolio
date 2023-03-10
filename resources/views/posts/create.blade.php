@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        @if ($errors->any()) 
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
@endif

            <form action="{{ route('posts.store') }}" method="POST">
            {{csrf_field()}}
                <div class="form-group">
                    <label>タイトル</label>
                    <input type="text" class="form-control" placeholder="タイトルを入力して下さい" name="title">
                </div>
                <div class="form-group">
                    <label>内容</label>
                    <textarea class="form-control" placeholder="内容" rows="5" name="body"></textarea>
                </div>
                写真1：<input type="file" id="file" name="file" accept="image/jpeg, image/png, image/jpg, image/gif" onchange="handleFileSelect();"><br/>
                            <button type="button" onclick="send();" id="button">アップロード</button><div id="main">@if(old('image')==!null)
                            <img class="thumbnail" src="{{old('image')}}" >
                            <input type="text" class="hidden" value="{{old('image')}}" name="image" type="hidden" >
                            @endif</div>

                <button type="submit" class="btn btn-primary">作成する</button>
            </form>
        </div>
    </div>
</div>
<script src="{{url('test.js')}}"></script>
@endsection
