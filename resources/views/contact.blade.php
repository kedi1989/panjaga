@extends('layouts.master')
        @section('title', 'PanJaga.pl - Kontakt z nami')
        @section('description', 'Skontaktuj się z nami i wypierz swoją tapicerkę meblową lub samochodową ! Skutecznie i tanio !')
        @section('keywords', 'Kontakt pranie tapicerki, pranie tapicerek, czyszczenie tapicerek,')

@section('content')
        
        <div class="content-container">
            <h1 class="big-header"><span class="header-gap"></span>KONTAKT</h1>
        </div>

        <div class="content-container">
        @include('includes.components.covid19Info')
            <div class="contact-container">
                <div class="contact-box">
                    <p>SKONTAKTUJ SIĘ Z NAMI:</p>
                    <p>TEL: 790-462-146</p>
                    <p>FACEBOOK: <a href="https://www.facebook.com/PANJAGAKARCHER">LINK</a></p>
                </div>
            </div>
        </div>

        </div>
        </div>

@stop