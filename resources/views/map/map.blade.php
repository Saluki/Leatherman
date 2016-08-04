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

    <script type="text/javascript">

        var map;
        function initMap() {

            geocoder = new google.maps.Geocoder();

            map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: 50.846611, lng: 4.424481},
                zoom: 13
            });

            @foreach($scouts as $scout)

                if( {{ $scout->number }} > 0 )
            {

                var address = "{{ $scout->street }} {{ $scout->number }} {{ $scout->locality }} {{ $scout->zip_code }}";

                console.log(address);

                geocoder.geocode({'address': address}, function (results, status) {

                    if (status == google.maps.GeocoderStatus.OK) {

                        var marker = new google.maps.Marker({
                            map: map,
                            position: results[0].geometry.location,
                            title: "{{ $scout->firstname }} {{ $scout->lastname }}"
                        });

                        //marker.setMap(map);

                    } else {
                        alert("Geocode was not successful for the following reason: " + status);
                    }
                });

            }

            @endforeach

        }

    </script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCsUu5JcTel7iZaHPAzeSmFN2qv59d_Ooc&callback=initMap">
    </script>


@stop