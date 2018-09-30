@extends('layouts.app')

@section('content')
<div class="text-center">
    <h1>{{$title}}</h1>
    @if(count($services) > 0)
        <ul class="list-group">
            @foreach($services as $service)
                <li style="margin: 50px;" class="list-group-item">{{$service}}</li>
            @endforeach
        </ul>
    @endif
</div>
@endsection