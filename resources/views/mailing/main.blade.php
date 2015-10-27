@extends('layouts.app')

@section('title')
    Mailing - Leatherman
@stop

@section('content')
    <section class="content-header">
        <h1>
            Mailing
            <small>Gestion du mailing</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-4">

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Mailing complet</h3>
                    </div>
                    <div class="box-body">

                        <a href="mailto:?bcc=@foreach($mailing as $emailRecord)
                            {{ $emailRecord->email }},
                            @endforeach
                                &subject=[Troupe des Muntjacs] " class="btn btn-info btn-block" style="margin-bottom: 15px;">
                            <span class="fa fa-envelope"></span>&nbsp;&nbsp;Ouvrir Client Mail
                        </a>

                        <div class="list-group">

                            @foreach($mailing as $emailRecord)
                                <div class="list-group-item">
                                    {{ $emailRecord->email }}
                                </div>
                            @endforeach

                        </div>

                    </div>
                </div>

            </div>

        </div>

    </section>

@stop