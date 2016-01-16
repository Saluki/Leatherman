@extends('layouts.app')

@section('title')
    Patrouilles - Leatherman
@stop

@section('content')
    <section class="content-header">
        <h1>
            Patrouilles
            <small>Gestion des patrouilles</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-12">

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">
                            Listing
                        </h3>
                    </div>
                    <div class="box-body">

                        @foreach($patrols as $patrol)

                            {{ $patrol->patrol_name }}<br>

                        @endforeach

                    </div>
                </div>

            </div>
        </div>

    </section>

@stop