@extends('layouts.master')
        @section('title', 'Oferta - PanJaga.pl - Poznaj ofertę prania tapicerki i czyszczenia ! Zapraszam !')
        @section('description', 'Poznaj najlepszą ofertę prania tapicerki, czyszczenia samochodów, prania dywanów i wykładzin ! Wejdź, sprawdź - zamów')
        @section('keywords', 'Pranie tapicerki meblowej, pranie tapicerki samochodowej, pranie dywanów, czyszczenie wykładzin')

@section('content')

        
        <div class="content-container">
            <h1 class="big-header"><span class="header-gap"></span>OFERTA</h1>
        </div>

        <div class="content-container">
            <div class="service-container">
                <div class="service-box">
                    <a href="{{ route('pranie-dywanow-wykladzin') }}">
                        <div class="service-image-wrapper">
                            <img loading="lazy" src="images/mainPageImages/carpet_1.jpg" alt="pranie wykładzin i dywanów"/>
                        </div>
                        <div class="service-title">
                            <h2>Pranie i czyszczenie wykładzin, dywanów</h2>
                        </div>
                    </a>
                </div>
                <div class="service-box">
                    <a href="{{ route('pranie-tapicerki-meblowej') }}">
                        <div class="service-image-wrapper">
                            <img loading="lazy" src="images/mainPageImages/sofa_cleaning_1.jpg" alt="pranie tapicerki meblowej, pranie mebli"/>
                        </div>
                        <div class="service-title">
                            <h2>Pranie tapicerki meblowej</h2>
                        </div>
                    </a>
                </div>
                <div class="service-box">
                    <a href="{{ route('pranie-tapicerki-samochodowej') }}">
                        <div class="service-image-wrapper">
                            <img loading="lazy" src="images/mainPageImages/car_seat_cleaning_1.jpg" alt="pranie tapicerki samochodowej,czyszczenie foteli samochodowych" />
                        </div>
                        <div class="service-title">
                            <h2>Pranie tapicerki samochodowej</h2>
                        </div>
                    </a>
                </div>
                <div class="service-box">
                    <a href="{{ route('pranie-tapicerki-samochodowej') }}">
                        <div class="service-image-wrapper">
                        <img loading="lazy" src="images/mainPageImages/car_ozone_1.jpg" alt="czyszczenie i ozonowanie samochodów osobowych, ozonowanie"/>
                        </div>
                        <div class="service-title">
                            <h2>Czyszczenie i ozonowanie samochodów</h2>
                        </div>
                    </a>
                </div>
            </div>
        </div>

@stop