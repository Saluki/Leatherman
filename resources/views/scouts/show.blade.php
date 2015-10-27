@extends('layouts.app')

@section('title')
    Scouts - Leatherman
@stop

@section('content')
    <section class="content-header">
        <h1>
            Profil scout

            <a href="{{ url('app/scouts') }}" class="btn btn-default pull-right">
                <span class="fa fa-angle-left"></span>&nbsp;&nbsp;Retour
            </a>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-7">

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">
                            {{ $scout->firstname }} {{ $scout->lastname }}
                        </h3>
                        <div class="box-tools pull-right">
                            <a href="{{ url('app/scouts/'.$scout->scout_id.'/edit') }}" class="btn btn-box-tool">
                                <span class="fa fa-pencil"></span>
                            </a>
                        </div>
                    </div>
                    <div class="box-body">

                        <table class="table">
                            <tr>
                                <td style="width:50%;border:0px;"><b>Annee</b></td>
                                <td style="border:0px;"> {{ $scout->scout_year }} </td>
                            </tr>
                            <tr>
                                <td><b>Date de naissance</b></td>
                                <td> {{ date('d F Y', strtotime($scout->birthday)) }}</td>
                            </tr>
                            <tr>
                                <td><b>Email</b></td>
                                <td>
                                    <a href="mailto:{{ $scout->email }}?subject=[Troupe des Muntjacs] ">
                                        {{ $scout->email }}</a>
                                </td>
                            </tr>
                            <tr>
                                <td><b>GSM</b></td>
                                <td> {{ $scout->phone }} </td>
                            </tr>
                            <tr>
                                <td><b>Totem</b></td>
                                <td> {{ $scout->totem }} </td>
                            </tr>
                            <tr>
                                <td><b>Quali</b></td>
                                <td> {{ $scout->quali }} </td>
                            </tr>
                            <tr>
                                <td><b>Patrouille</b></td>
                                <td> {{ $scout->patrol_name }} </td>
                            </tr>
                            <tr>
                                <td style="vertical-align:top;"><b>Adresse</b></td>
                                <td>
                                    <a target="_blank" href="https://www.google.be/maps/place/{{ $scout->street.' '.$scout->number.', '.$scout->locality.' '.$scout->zip_code.' '.$scout->country_code }}">
                                        {{ $scout->number.', '.$scout->street }}<br>
                                        {{ $scout->locality.' '.$scout->zip_code.' '.$scout->country_code }}
                                    </a>
                                </td>
                            </tr>
                        </table>

                    </div>
                </div>

            </div>
            <div class="col-md-5">

                @foreach($parents as $parent)

                    <div class="box box-default">
                        <div class="box-header with-border">
                            <h3 class="box-title">
                                {{ $parent->firstname }} {{ $parent->lastname }}
                            </h3>
                            <div class="box-tools pull-right">
                                <!--<button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>-->
                                <button class="btn btn-box-tool">
                                    <span class="fa fa-trash"></span>
                                </button>
                            </div>
                        </div>
                        <div class="box-body">

                            <span class="glyphicon glyphicon-envelope"></span>&nbsp;&nbsp;
                            <a href="mailto:{{ $parent->email }}?subject=[Troupe des Muntjacs] ">{{ $parent->email }}</a>
                            <br><br>

                            @if( !empty($parent->phone) )
                                <span class="glyphicon glyphicon-earphone"></span>&nbsp;&nbsp;{{ $parent->phone }}
                                <br>
                            @endif
                            @if( !empty($parent->mobile) )
                                <span class="glyphicon glyphicon-signal"></span>&nbsp;&nbsp;{{ $parent->mobile }}
                            @endif

                        </div>
                    </div>

                @endforeach

                <div class="box box-default collapsed-box">

                    <div class="box-header with-border">
                        <h3 class="box-title">
                            <span class="fa fa-link"></span>&nbsp;&nbsp;Ajouter lien
                        </h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-plus"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <form class="form-horizontal" method="POST" action="{{ url('app/scouts/ajouter/parents') }}">

                            {!! Form::token() !!}

                            <input type="hidden" name="scout_id" value="{{ $scout->scout_id }}">
                            <input type="hidden" name="address_id" value="{{ $scout->address_id }}">

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
                                <label class="col-sm-3 control-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="text" name="email" class="form-control" placeholder="Adresse email" value="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Téléphone</label>
                                <div class="col-sm-9">
                                    <input type="text" name="phone" class="form-control" placeholder="Téléphone" value="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">GSM</label>
                                <div class="col-sm-9">
                                    <input type="text" name="mobile" class="form-control" placeholder="GSM" value="">
                                </div>
                            </div>

                            <input type="submit" class="btn btn-primary pull-right" value="Enregistrer">

                        </form>
                    </div>

                </div>

            </div>
        </div>

    </section>

@stop