@extends('layouts.app')

@section('content')

<div class="card-body">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    @guest
    <p style="text-align:center;"> please register or login</p>
    @else
    @foreach($posts as $post)
        <div class="card-deck" style="display:inline-block;margin-top:30px;">
            <div class="card" style="width:300px;display:flex;margin-top:30px;">
                <?php
                    if($post->image){
                ?>
                    <img  src="{{ asset('storage/image/'.$post->image) }}" class="card-img-top">
                <?php } ?>
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ $post->content }}</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">
                        投稿者:
                        <a href="{{ route('users.show', $post->user_id) }}" class="">
                                    {{ $post->user->name }}
                        </a>
                    </small>
                    カテゴリー:
                    <a href="{{ route('posts.index', ['category_id'=>$post->category->id]) }}" class="">
                        {{ $post->category->category_name }}
                    </a>
                    <a href="{{ route('posts.show',$post->id) }}" class="btn btn-primary">詳細</a>
                </div>
            </div>
    </div>
    @endforeach

{{ $posts->links() }}
@endguest
</div>
@endsection



