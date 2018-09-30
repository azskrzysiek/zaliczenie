@extends('layouts.app')

@section('content')
    <h1>Mecze</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="well">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <video style="width:100%" src="/storage/upload_video/{{$post->upload_video}}">
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <small>Dodano {{$post->created_at}} przez {{$post->user->name}}</small>
                    </div>
                </div>
            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>Nie znaleziono żadnych meczy</p>
    @endif
@endsection