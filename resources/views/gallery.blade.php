@extends('layouts.master')
        @section('title', 'PanJaga.pl - Galeria Realizacji pranej przez nas tapicerki meblowej i samochodowej')
        @section('description', 'Sprawdź nasze realizacje dobrze wypranej tapicerki meblowej i samochodowej ! Zdjęcia "Przed i Po" wypranej tapicerki meblowej i samochodowej')
        @section('keywords', 'realizacje prania tapicerki, galeria prania tapicerki, pranie tapicerki meblowej, pranie tapicerki samochodowej, czyszczenie, galeria, realizacje ')

@section('content')
        
        <div class="content-container">
            <h1 class="big-header"><span class="header-gap"></span>REALIZACJE PRANIA I CZYSZCZENIA</h1>
        </div>

        <div class="content-container">
            
        <div class="gallery-container">
            <h3 class="medium-header">
                <span class="header-gap"></span>TAPICERKA MEBLOWA
            </h3>

            <div class="order-scope-box">
                <p>Podczas <strong>prania tapicerki meblowej</strong> zakres wykonywanej pracy co widać w poniższej galerii to:</p>
               <ul>
                    <li>- <strong>Usuwanie plam</strong></li>
                    <li>- <strong>Usuwanie brzydkiego zapachu</strong></li>
                    <li>- <strong>Nadanie nowego miłego zapachu</strong></li>
                    <li>- <strong>Odświeżenie wyglądu tapicerki</strong></li>
                    <li>- <strong>Usuwanie roztoczy</strong></li>
                </ul>
            </div>

            @php
                for ($i = 1; $i < 52; $i++):
            @endphp
                <a href="images/gallery/TapicerkaMeblowa/{{$i}}.jpg" target="_blank" >
                    <img class="box-shadow" src="images/gallery/TapicerkaMeblowa/Thumbnails/{{$i}}.jpg" alt="Pranie tapicekri meblowej, usuwanie plam i niemiłego zapachu">
                </a>
            @php
                endfor;
            @endphp

            <h3 class="medium-header">
                <span class="header-gap"></span>SAMOCHODY OSOBOWE I CIĘŻAROWE
            </h3>

            <div class="order-scope-box">
                <p><strong>Czyszczenie kabiny ciężarówki</strong>,<strong>pranie tapicerki samochodowej</strong> to:</p>
                <ul>
                    <li>- <strong>Usuwanie plam po kawie i innych napojach z tapicerki</strong></li>
                    <li>- <strong>Czyste świeże fotele wyglądające jak nowe</strong></li>
                    <li>- <strong>Lepszy komfort podczas jazdy na dłuższej trasie</strong></li>
                    <li>- <strong>Odświeżone miejsce spania, mieszkania w przypadku ciężarówek</strong></li>
                    <li>- <strong>Usuwanie roztoczy,bakterii,grzybów</strong></li>
                    <li>- <strong>Większa estetyka = większa wartość samochodu w przypadku sprzedaży</strong></li>
                </ul>
            </div>

            @php
                for ($i = 1; $i < 37; $i++):
            @endphp
                <a href="images/gallery/Samochody/{{$i}}.jpg"  target="_blank">
                    <img class="box-shadow" src="images/gallery/Samochody/Thumbnails/{{$i}}.jpg" alt="Pranie tapicerki samochodowej, czyszczenie i ozonowanie pojazdów">
                </a>
            @php
                endfor;
            @endphp

            <h3 class="medium-header">
                <span class="header-gap"></span>WÓZKI DZIECIĘCE I FOTELIKI SAMOCHODOWE
            </h3>

            <div class="order-scope-box">
                <p><strong>Czyszczenie wózków dziecięcych</strong>,<strong>pranie tapicerki wózków dziecięcych</strong> to:</p>
                <ul>
                    <li>- <strong>Usuwanie plam z tapicerki wózka</strong></li>
                    <li>- <strong>Usuwanie kurzu, roztoczy z tapicerki wózka dziecięcego</strong></li>
                    <li>- <strong>Odświeżony wygląd wózka, w niektórych przypadkach wygląda po praniu jak nowy :)</strong></li>
                    <li>- <strong>Odświeżony stelaż wózka, plastiki, brudne elementy już nie rażą a wyglądają jak nowe</strong></li>
                    <li>- <strong>Pozbycie się bakterii, wirusów po poprzednim właścicielu wózka - ważny aspekt higieniczny</strong></li>
                    <li>- <strong>Wzrost wartości wózka przy sprzedaży</strong></li>
                </ul>
            </div>

            @php
                for ($i = 1; $i < 13; $i++):
            @endphp
                <a href="images/gallery/Wozki/{{$i}}.jpg"  target="_blank">
                    <img class="box-shadow" src="images/gallery/Wozki/Thumbnails/{{$i}}.jpg" alt="Pranie tapicerki wózków dziecięcych i fotelików samochodowych">
                </a>
            @php
                endfor;
            @endphp

            <h3 class="medium-header">
                <span class="header-gap"></span>DYWANY I WYKŁADZINY
            </h3>

            <div class="order-scope-box">
                <p>W trakcie <strong>prania dywanu i wykładziny</strong> uda nam się:</p>
                <ul>
                    <li>- <strong>Usuwanie plam z błota</strong></li>
                    <li>- <strong>Usuwanie plam po herbacie, kawie</strong></li>
                    <li>- <strong>Usuwanie brzydkiego zapachu dywanu, wykładziny</strong></li>
                    <li>- <strong>Ożywienie koloru dywanu, wykładziny</strong></li>
                    <li>- <strong>Usuwanie roztoczy,bakterii,grzybów itd.</strong></li>
                </ul>
            </div>

            @php
                for ($i = 1; $i < 11; $i++):
            @endphp
                <a href="images/gallery/Dywany/{{$i}}.jpg"  target="_blank">
                    <img class="box-shadow" src="images/gallery/Dywany/Thumbnails/{{$i}}.jpg" alt="Pranie dywanów i wykładzin, usuwanie niemiłego zapachu">
                </a>
            @php
                endfor;
            @endphp

            <h3 class="medium-header">
                <span class="header-gap"></span>MATERACE
            </h3>

            <div class="order-scope-box">
                <p>Skuteczne <strong>pranie materaca</strong> to przede wszystkim:</p>
                <ul>
                    <li>- <strong>Usuwanie roztoczy z wnętrza materaca</strong></li>
                    <li>- <strong>Usuwanie brzydkiego zapachu potu, resztki naskórka</strong></li>
                    <li>- <strong>Działanie antyalergiczne</strong></li>
                    <li>- <strong>Odplamienie materaca</strong></li>
                    <li>- <strong>Nadanie świeżego zapachu</strong></li>
                    <li>- <strong>Lepszy komfort spania</strong></li>
                </ul>
            </div>

            @php
                for ($i = 1; $i < 9; $i++):
            @endphp
                <a href="images/gallery/Materace/{{$i}}.jpg"  target="_blank">
                    <img class="box-shadow" src="images/gallery/Materace/Thumbnails/{{$i}}.jpg" alt="Pranie materacy i usuwanie roztoczy">
                </a>
            @php
                endfor;
            @endphp

            <h3 class="medium-header">
                <span class="header-gap"></span>OZONOWANIE
            </h3>

            <div class="order-scope-box">
                <p>Skuteczne <strong>ozonowanie samochodu</strong> to przede wszystkim:</p>
                <ul>
                    <li>- <strong>Usunięcie wszelkich wirusów i grzybów z samochodu</strong></li>
                    <li>- <strong>Odgrzybienie i odświeżenie wylotów powietrza w samochodzie</strong></li>
                    <li>- <strong>Usunięcie przykrych zapachów (wymioty, papierosy)</strong></li>
                    <li>- <strong>W dobie pandemii - ważny aspekt higieny aut flotowych</strong></li>
                    
                </ul>
            </div>

            @php
                for ($i = 1; $i < 3; $i++):
            @endphp
                <a href="images/gallery/Materace/{{$i}}.jpg"  target="_blank">
                    <img class="box-shadow" src="images/gallery/Ozonowanie/Thumbnails/{{$i}}.jpg" alt="Ozonowanie samochodu">
                </a>
            @php
                endfor;
            @endphp

            

        </div>
        </div>
        </div>
            </div>
            
        <script>
            lightbox.option({
            'resizeDuration': 200,
            'wrapAround': true
            })
        </script>
@stop