@extends('layouts.auth')

@section('title')
    Connection - Leatherman
@stop

@section('content')

    <div class="container">
        <div class="col-md-4 col-md-offset-4">

            {!! Form::open(['method'=>'POST', 'url'=>'/']) !!}

                <div class="form-group">
                    <label>Adresse email</label>
                    <input type="text" name="email" class="form-control" placeholder="Adresse email">
                </div>

                <div class="form-group">
                    <label>Mot de passe</label>
                    <input type="password" name="password" class="form-control" placeholder="Mot de passe">
                </div>

                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember_me"> Garder ma session active
                    </label>
                </div>

                <input type="submit" value="Connection" class="btn btn-primary pull-right">

            </form>

        </div>
        <div class="col-md-4 col-md-offset-4">

            @if( count($errors)>0 )

                <div class="alert alert-info">
                    {{ $errors->first() }}
                </div>

            @endif

        </div>
    </div>

@stop