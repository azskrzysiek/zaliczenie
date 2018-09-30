@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>Witam na mojej stronie poświęconej piłce ręcznej!</h1>
    </div>
    <div class="text-center" style="background: #ddd; color:#000; height:50vh; padding: 30px; margin:0;">
        @if (Auth::guest())
        <h2 class="text-center" style="margin:10vh 0;">Jeśli chcesz zagłębić się w świat piłki ręcznej na wysokim poziomie to zarejestruj się już dzisiaj na naszej stronie!</h2>
        <a class="btn btn-primary btn-lg text-center" href="/login" role="button">Login</a> 
        <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
        @else
        <div class="center-text">
        <h2 style="margin:10vh 0;">Witam cię {{ Auth::user()->name }}!!!<h2>
        <a class="btn btn-primary btn-lg" href="/posts">Zobacz mecze</a>
        <a class="btn btn-primary btn-lg" href="/posts/create">Dodaj mecz</a>
        </div>
        @endif
    </div>
@endsection
