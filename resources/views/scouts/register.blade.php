@extends('layouts.app')

@section('title')
    Scouts - Leatherman
@stop

@section('content')
    <section class="content-header">
        <h1>
            Ajouter un scout
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">

            <form class="form-horizontal" method="POST" action="{{ url('app/scouts/ajouter/scout') }}">

                {!! Form::token() !!}

                <div class="col-md-6">

                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">
                                Informations
                            </h3>
                        </div>
                        <div class="box-body">

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Prénom</label>
                                <div class="col-sm-9">
                                    <input type="text" name="firstname" class="form-control" placeholder="Prénom" value="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Nom</label>
                                <div class="col-sm-9">
                                    <input type="text" name="lastname" class="form-control" placeholder="Nom" value="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Naissance</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <span class="fa fa-calendar"></span>
                                        </div>
                                        <input type="text" name="birthday" class="form-control" placeholder="yyyy-mm-dd" value="">
                                    </div>
                                </div>
                            </div>

                            <br>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">
                                    Email
                                </label>
                                <div class="col-sm-9">
                                    <input type="text" name="email" class="form-control" placeholder="Adresse email" value="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">GSM</label>
                                <div class="col-sm-9">
                                    <input type="text" name="phone" class="form-control" placeholder="Numéro de GSM" value="">
                                </div>
                            </div>

                            <br>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Rue</label>
                                <div class="col-sm-9">
                                    <input type="text" name="street" class="form-control" placeholder="Nom de rue" value="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Numéro</label>
                                <div class="col-sm-9">
                                    <input type="text" name="number" class="form-control" placeholder="Numéro de rue" value="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Boite</label>
                                <div class="col-sm-9">
                                    <input type="text" name="box" class="form-control" placeholder="Boite d'appartement" value="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Ville</label>
                                <div class="col-sm-9">
                                    <input type="text" name="locality" class="form-control" placeholder="Ville ou commune" value="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Code postal</label>
                                <div class="col-sm-9">
                                    <input type="text" name="zip_code" class="form-control" placeholder="Code postal" value="">
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="col-md-6">

                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">
                                Scout
                            </h3>
                        </div>
                        <div class="box-body">

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Totem</label>
                                <div class="col-sm-9">
                                    <input type="text" name="totem" class="form-control" placeholder="Totem">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Quali</label>
                                <div class="col-sm-9">
                                    <input type="text" name="quali" class="form-control" placeholder="Quali">
                                </div>
                            </div>

                            <br>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Année</label>
                                <div class="col-sm-9">
                                    <input type="text" name="scout_year" class="form-control" placeholder="Année scoute">

                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Patrouille</label>
                                <div class="col-sm-9">
                                    <select name="patrol_id" class="form-control">
                                        @foreach($patrols as $patrol)
                                            <option value="{{ $patrol->patrol_id }}">{{ $patrol->patrol_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Promesse</label>
                                <div class="col-sm-9">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="did_promise"> Oui, le scout a fait sa promesse
                                        </label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-body">

                            <a href="{{ url('app/scouts') }}" class="btn btn-default">
                                <span class="fa fa-times"></span>&nbsp;&nbsp;Annuler
                            </a>

                            <input type="submit" class="btn btn-primary pull-right" value="Enregistrer">

                        </div>
                    </div>
                </div>

            </form>
        </div>

    </section>

@stop