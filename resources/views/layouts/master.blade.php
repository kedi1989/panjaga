<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        @include('includes.head')
    <body>
        <div class="main-page-container">
        @include('includes.header')
        <div class="main-container">
        <div class="main-banner">
            <div class="main-banner-title">
                <div class="title-box">
                    <h1>Firma sprzątająca Kościan, Leszno, Śrem, Poznań - PanJaga.pl</h1>
                </div>
            </div>
        </div>

        <div class="content-container">
            <h2 class="big-header"><span class="header-gap"></span>Jakie usługi wykonujemy ?</h2>
           <p>PanJaga.pl to firma oferująca <strong>usługi czyszczenia</strong> oraz <strong>prania</strong>. Bazujemy na chemii i sprzęcie wiodących producentów takich jak <strong>KARCHER</strong>, <strong>CHEMSPEC</strong>, <strong>ADBL</strong> czy też <strong>TENZI</strong>. </p>
           <p>Do każdego zlecenia podchodzimy indywidualnie oraz dbałością o szczegóły czyszczonych obiektów. Nasze doświadczenie pozwala nam na uzyskanie najwyższej jakości świadczonych przez nas usług. Pozwól, że pomożemy ci odświeżyć twój samochód czy też meble. Rozejrzyj się po naszej ofercie i zobacz co mamy do zaoferowania.</p>
        </div>

        @include('includes.mainpage.service')

        @include('includes.mainpage.areaService')

        @include('includes.components.serviceContact')

        @include('includes.mainpage.ourProjects')

        </div>
        </div>

        <script>
            $('#our-projects-box').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                arrows: false,
                dots: false,
                centerMode: false,
                focusOnSelect: true,
                autoplay: true,
                autoplaySpeed: 2000,
                });
        </script>

            @include('includes.footer')
    </body>
</html>