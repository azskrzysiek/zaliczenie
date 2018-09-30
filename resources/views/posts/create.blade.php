@extends('layouts.app')

@section('content')
    <h1>Dodaj mecz</h1>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Tytuł')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Opis meczu')}}
            {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
        </div>
        <div class="form-group">
                {{Form::label('goals_h', 'Gole gospodarze')}}
                {{Form::text('goals_h', '', ['class' => 'form-control', 'placeholder' => 'Ilosc goli gospodarzy'])}}
        </div>
        <div class="form-group">
                {{Form::label('goals_a', 'Gole przyjezdni')}}
                {{Form::text('goals_a', '', ['class' => 'form-control', 'placeholder' => 'Ilosc goli przyjezdnych'])}}
            </div>

        <div class="form-group">
            {{Form::label('video', 'Wideo')}}
            {{Form::file('upload_video')}}
        </div>
        {{Form::submit('Dodaj', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection