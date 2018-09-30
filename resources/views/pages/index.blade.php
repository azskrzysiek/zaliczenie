@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>Witam na mojej stronie poświęconej piłce ręcznej!</h1>
        <p>Wkrocz razem z nami w niezapomniany świat piłki ręcznej</p>
        @if (Auth::guest())
        <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
        @else
        Witam cię użytkowniku!!!<br>
        <a class="btn btn-primary btn-lg" href="/posts">Zobacz posty</a>
        <a class="btn btn-primary btn-lg" href="/posts/create">Dodaj post</a>
        @endif
    </div>
@endsection
