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
                            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
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
                                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="box-body">

                            <span class="glyphicon glyphicon-envelope"></span>&nbsp;&nbsp;
                            <a href="mailto:{{ $parent->email }}?subject=[Troupe des Muntjacs] ">{{ $parent->email }}</a>
                            <br><br>

                            <span class="glyphicon glyphicon-earphone"></span>&nbsp;&nbsp;{{ $parent->phone }}
                            <br>
                            <span class="glyphicon glyphicon-signal"></span>&nbsp;&nbsp;{{ $parent->mobile }}

                        </div>
                    </div>

                @endforeach

            </div>
        </div>

    </section>

@stop