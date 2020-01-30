@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">{{ $user->name }}の投稿</div>
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        @foreach($user->posts as $post)
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>
                <p class="card-title">
                    カテゴリー:{{ $post->category->category_name }}
                </p>
                <img  style='width:70%;height:70%' src="{{ asset('storage/image/'.$post->image) }}">
                <p class="card-text">{{ $post->content }}</p>
                <p class="card-title">
                    投稿者:{{ $post->user->name }}
                </p>
                <a href="{{ route('posts.show',$post->id) }}" class="btn btn-primary">details</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
