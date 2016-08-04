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
            <div class="col-md-3">

                <a href="{{ url('app/scouts') }}" class="info-box">
                    <div class="info-box-icon bg-aqua">
                        <i class="fa fa-user"></i>
                    </div>
                    <div class="info-box-content">
                        <span class="info-box-text">
                            Scouts
                        </span>
                        <span class="info-box-number">
                            {{ $scoutCount }}
                        </span>
                    </div>
                </a>

            </div>
            <div class="col-md-3">

                <a href="{{ url('app/patrouilles') }}" class="info-box">
                    <div class="info-box-icon bg-red">
                        <i class="fa fa-tag"></i>
                    </div>
                    <div class="info-box-content">
                        <span class="info-box-text">
                            Patrouilles
                        </span>
                        <span class="info-box-number">
                            {{ $patrolCount }}
                        </span>
                    </div>
                </a>

            </div>
            <div class="col-md-3">

                <a href="{{ url('app/mailing') }}" class="info-box">
                    <div class="info-box-icon bg-green">
                        <i class="fa fa-envelope-o"></i>
                    </div>
                    <div class="info-box-content">
                        <span class="info-box-text">
                            Mailing
                        </span>
                        <span class="info-box-number">
                            {{ $mailingCount }}
                        </span>
                    </div>
                </a>

            </div>

        </div>

    </section>

@stop