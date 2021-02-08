<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        @include('includes.head')
    <body>
        <div class="main-page-container">
        @include('includes.header')
        <div class="main-container">
        
        <div class="content-container">
            <h2 class="big-header"><span class="header-gap"></span>GALERIA REALIZACJI</h2>
        </div>

        <div class="gallery-container">
            <h3 class="medium-header">
                <span class="header-gap"></span>TAPICERKA MEBLOWA
            </h3>

            @php
                for ($i = 1; $i < 31; $i++):
            @endphp
                <a href="images/gallery/TapicerkaMeblowa/{{$i}}.jpg" data-lightbox="image-{{$i}}" data-title="Tapicerka Meblowa">
                    <img src="images/gallery/TapicerkaMeblowa/Thumbnails/{{$i}}.jpg" alt="Pranie tapicekri meblowej, usuwanie plam i niemiłego zapachu">
                </a>
            @php
                endfor;
            @endphp


            <h3 class="medium-header">
                <span class="header-gap"></span>DYWANY I WYKŁADZINY
            </h3>

            @php
                for ($i = 1; $i < 8; $i++):
            @endphp
                <a href="images/gallery/Dywany/{{$i}}.jpg" data-lightbox="image-{{$i}}" data-title="Dywany i Wykładziny">
                    <img src="images/gallery/Dywany/Thumbnails/{{$i}}.jpg" alt="Pranie dywanów i wykładzin, usuwanie niemiłego zapachu">
                </a>
            
            @php
                endfor;
            @endphp


            <h3 class="medium-header">
                <span class="header-gap"></span>MATERACE
            </h3>


            @php
                for ($i = 1; $i < 9; $i++):
            @endphp
                <a href="images/gallery/Materace/{{$i}}.jpg" data-lightbox="image-{{$i}}" data-title="Materace">
                    <img src="images/gallery/Materace/Thumbnails/{{$i}}.jpg" alt="Pranie materacy i usuwanie roztoczy">
                </a>
            
            @php
                endfor;
            @endphp


            <h3 class="medium-header">
                <span class="header-gap"></span>SAMOCHODY OSOBOWE I CIĘŻAROWE
            </h3>


            @php
                for ($i = 1; $i < 15; $i++):
            @endphp
                <a href="images/gallery/Samochody/{{$i}}.jpg" data-lightbox="image-{{$i}}" data-title="Samochody">
                    <img src="images/gallery/Samochody/Thumbnails/{{$i}}.jpg" alt="Pranie tapicerki samochodowej, czyszczenie i ozonowanie pojazdów">
                </a>
            
            @php
                endfor;
            @endphp



            




        </div>

        </div>
        </div>
            @include('includes.footer')


            <script>
                lightbox.option({
                'resizeDuration': 200,
                'wrapAround': true
                })
            </script>
    </body>
</html>