@extends('layouts.app')

@section('title')
    Dashboard - Leatherman
@stop

@section('content')

    <section class="content-header">
        <h1>
            Dashboard
            <small>Gestion de la Troupe</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-4">

                <div class="info-box">
                    <span class="info-box-icon bg-aqua">
                        <span class="fa fa-users"></span>
                    </span>
                    <div class="info-box-content">
                        <span class="info-box-text">Nombre de scouts</span>
                        <span class="info-box-number">{{ $scoutsNumber }}</span>
                    </div>
                </div>

            </div>
            <div class="col-md-4">

                <div class="info-box">
                    <span class="info-box-icon bg-yellow">
                        <span class="fa fa-bank"></span>
                    </span>
                    <div class="info-box-content">
                        <span class="info-box-text">Etat du compte</span>
                        <span class="info-box-number">0.00€</span>
                    </div>
                </div>

            </div>
            <div class="col-md-4">

                <div class="info-box">
                    <span class="info-box-icon bg-red">
                        <span class="fa fa-bell-o"></span>
                    </span>
                    <div class="info-box-content">
                        <span class="info-box-text">Taches en attente</span>
                        <span class="info-box-number">0</span>
                    </div>
                </div>

            </div>
        </div>

    </section>

@stop