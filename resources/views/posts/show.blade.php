@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-default">Go Back</a>
    <h1>{{$post->title}}</h1>
    <video style="width: 100%;
    height: auto;" controls>
        <source src="/storage/upload_video/{{$post->upload_video}}">
      Your browser does not support the video tag.
      </video> 
    <br><br>
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>

            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
        @endif
        <div class="comment-list">
            @foreach($post->comments as $comment)
            <h4>{{$comment->body}}</h4>
            <p>{{$comment->user->name}}</p>

            <form action="{{route('comment.destroy',$comment->id)}}" method="POST" class="inline-it">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    <input class="btn btn-xs btn-danger" type="submit" value="Usun">
                </form>
            @endforeach
        </div>
        <br><br>
        <div class="comment-form">
            <form action="{{route('postcomment.store',$post->id)}}" method="POST" role="form">
                {{ csrf_field() }}
                <legend>Dodaj komentarz</legend>

                <div class="form-gruop">
                    <input type="text" class="form-control" name="body" placeholder="input">
                </div>
                <br>
                <button type="submit" class="btn btn-primary" style="margin-bottom:20px;">Komentuj</button>
            </form>
        </div>
    @endif

@endsection