@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-lg-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <p class="text-center">{{$user->name}} profil</p>
                    
                </div>
                
                <div class="panel-body">
                    <center>
                    <img src="{{ Storage::url($user->avatar) }}" width="150px" height="150px" style="border-radius: 50%;margin-bottom:20px;" alt="">
                    </center>

                    <p class="text-center">
        
                            Kibicuje: {{$user->profile->club}}
     
                         </p>

                    <p class="text-center">
                        @if(Auth::id() == $user->id)

                        <a href="{{route('profile.edit')}}" class="btn btn-lg btn-info">Edytuj profil</a>

                        @endif
                    </p>
                </div>
            </div>
                <div class="panel panel-default">
                        <div class="panel-heading">
                            <p class="text-center"> O mnie</p>
                            
                        </div>
                
                <div class="panel-body" style="border-bottom: 1px dotted #111;">

                        <p class="text-center">
    
                            {{$user->profile->about}}
    
                        </p>
    
                    </div>
            </div>
        </div>
    </div>
@endsection