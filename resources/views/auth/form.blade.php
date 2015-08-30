@extends('layouts.auth')

@section('title')
    Connection - Leatherman
@stop

@section('content')

    <div class="login-box">

        <div class="login-logo">
            <a href="../../index2.html"><b>Leatherman</b></a>
        </div><!-- /.login-logo -->

        <div class="login-box-body">

            <p class="login-box-msg">Connecte-toi pour démarrer une session</p>

            {!! Form::open(['method'=>'POST', 'url'=>'/']) !!}

                <div class="form-group has-feedback">
                    <input type="email" name="email" class="form-control" placeholder="Adresse email" value="{{ old('email') }}">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>

                <div class="form-group has-feedback">
                    <input type="password" name="password" class="form-control" placeholder="Mot de passe">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>

                <div class="row">
                    <div class="col-xs-7">
                        <!--<div class="checkbox icheck">
                            <label>
                                <input type="checkbox" name="remember_me">&nbsp;&nbsp;&nbsp;Garder ma session
                            </label>
                        </div>-->
                    </div><!-- /.col -->
                    <div class="col-xs-5">
                        <button type="submit" class="btn btn-primary btn-block btn-flat" style="margin-top: 5px;">Connection</button>
                    </div><!-- /.col -->
                </div>

            </form>

        </div><!-- /.login-box-body -->

        @if( count($errors)>0 )

            <div class="alert alert-warning" style="margin-top: 20px;">
                <span class="fa fa-warning"></span>&nbsp;&nbsp;
                {{ ucfirst(strtolower($errors->first())) }}
            </div>

        @endif

        @if( session('auth-error') )

            <div class="alert alert-danger" style="margin-top: 20px;">
                <span class="fa fa-warning"></span>&nbsp;&nbsp;
                {{ session('auth-error') }}
            </div>

        @endif

    </div><!-- /.login-box -->

@stop