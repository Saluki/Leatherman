@extends('layouts.app')

@section('title')
    Mailing - Leatherman
@stop

@section('content')
    <section class="content-header">
        <h1>
            Carte
            <small>Emplacement des scouts</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-12">

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Carte</h3>
                    </div>
                    <div class="box-body">

                        <div id="map" style="width: 100%; height: 500px;"></div>

                    </div>
                </div>

            </div>

        </div>

    </section>
    
@stop