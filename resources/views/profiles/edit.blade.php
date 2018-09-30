@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edytuj profil</div>
                <div class="panel-body">
                <form action="{{ route('profile.update') }}" method="post" enctype="multipart/form-data">
                
                {{ csrf_field() }}

                <div class="form-group">

                        <label for="club">Zmien avatar</label>
                        <input type="file" name="avatar" class="form-control" accept="image/*" style="min-height:50px;">
    
                    </div>
                <div class="form-group">

                    <label for="club">Klub</label>
                    <input type="text" name="club" class="form-control" value="{{$info->club}}" required>

                </div>

                <div class="form-group">

                        <label for="club">O mnie</label>
                        <textarea name="about" id="about" cols="30" rows="10" class="form-control" required>
                            {{ $info->about }}</textarea>
    
                </div>

                <div class="form-group">
                    <p class="text-center">
                        <button type="submit" class="btn btn-primary btn-lg">Zapisz informacje o profilu</button>
                    </p>
                </div>
                </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
