@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-default">Wroc</a>
    <h1>{{$post->title}}</h1>
    <h2>Wynik: {{$post->goals_h}} do {{$post->goals_a}}</h2>
    <video style="width: 100%;
    height: auto;" controls>
        <source src="/storage/upload_video/{{$post->upload_video}}">
      Twoja przeglądarka nie obsługuje tego tagu. Sprobuj w mozzilli.
      </video> 
    <br><br>
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <h1 class="text-center ">Statystyki</h1>
    <div class="col-md-4 text-center"style="min-height: 20vh; font-size: 30px; border: 1px solid #000;">
    Bramki gospodarze: {{$post->goals_h}} 
    </div>
    <div class="col-md-4"></div>
    <div class="col-md-4 text-center" style="min-height: 20vh; font-size: 30px; border: 1px solid #000;">
    Bramki goście: {{$post->goals_a}} 
    </div>
    <small>Dodane {{$post->created_at}} przez {{$post->user->name}}</small>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edytuj</a>

            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Usun', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
        @endif
        <div class="comment-list" style="border-top: 1px solid #000; margin-top: 5px;">
            @foreach($post->comments as $comment)
            <h4>{{$comment->body}}</h4>
            <p>Dodał {{$comment->user->name}}</p>

            <form action="{{route('comment.destroy',$comment->id)}}" method="POST" class="inline-it">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    <input class="btn btn-xs btn-danger" type="submit" value="Usun komentarz">
                </form>
            @endforeach
        </div>
        <br><br>
        <div class="comment-form">
            <form action="{{route('postcomment.store',$post->id)}}" method="POST" role="form">
                {{ csrf_field() }}
                <legend>Dodaj komentarz</legend>

                <div class="form-gruop">
                    <input type="text" class="form-control" name="body" placeholder="treść">
                </div>
                <br>
                <button type="submit" class="btn btn-primary" style="margin-bottom:20px;">Komentuj</button>
            </form>
        </div>
    @endif

@endsection