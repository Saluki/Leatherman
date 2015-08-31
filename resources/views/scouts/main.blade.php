@extends('layouts.app')

@section('title')
    Scouts - Leatherman
@stop

@section('content')
    <section class="content-header">
        <h1>
            Scouts
            <small>Gestion des scouts</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-12">

                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Listing</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="box-body">

                        @if( count($scouts)==0 )

                            <div class="alert alert-warning">
                                <h4>
                                    <span class="fa fa-warning"></span>
                                    &nbsp;&nbsp;Attention!
                                </h4>
                                La base de données actuelle ne contient pas de scouts.
                            </div>

                        @else

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Nom</th>
                                        <th>Totem</th>
                                        <th>Quali</th>
                                        <th>Année</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach($scouts as $scout)

                                        <tr>
                                            <td>{{ $scout->firstname }} <b>{{ $scout->lastname }}</b></td>
                                            <td>{{ $scout->totem }}</td>
                                            <td>{{ $scout->quali }}</td>
                                            <td>{{ $scout->scout_year }}</td>
                                            <td>
                                                <a href="{{ url('app/scouts/'.$scout->scout_id) }}" class="btn btn-default btn-xs">
                                                    <span class="fa fa-eye"></span>&nbsp;&nbsp;Informations
                                                </a>
                                            </td>
                                        </tr>

                                    @endforeach

                                </tbody>
                            </table>

                        @endif

                    </div>
                </div>

            </div>
        </div>

    </section>

@stop