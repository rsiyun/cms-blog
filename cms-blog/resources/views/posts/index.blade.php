@extends('layouts.app')
@section('content')
    <h1>Postingan</h1>
    @if (count($posts)>0)
        @foreach ($posts as $post)
        <div class="jumbotron">
            <div class="col-md-4 col-sm-4">
                <img src="{{asset('storage/cover_images/'.$post->cover_image)}}" alt="">
            </div>
            <div class="col-md-8 col-sm-8">
                <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                <small>Write on {{$post->created_at}} by {{$post->user->name}}</small>
            </div>
        </div>
        @endforeach
        {{$posts->links('pagination::bootstrap-4')}}
    @else
        <p>tidak Menemukan Postingan</p>
    @endif
@endsection