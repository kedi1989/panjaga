    @extends('layouts.master')
        @section('title', 'PanJaga.pl - Profesjonalne pranie tapicerki meblowej i samochodowej, pranie dywanów i wykładzin !')
        @section('description', 'Odśwież wygląd swojej kanapy,narożnika,samochodu i usuń z nich stare plamy! Fachowe pranie i czyszczenie tapicerek Karcherem i nie tylko. Pranie ekstrakcyjne w najlepszej cenie !')
        @section('keywords', 'pranie tapicerki, pranie mebli, karcher, usuwanie plam, pranie materacy, pranie dywanów i wykładzin, pranie tapicerki samochodowej, czyszczenie samochodu, sprzątanie samochodu, pranie tapicerki meblowej, pranie mebli, pranie, czyszczenie, ozonowanie, usługi czyszczące, usługi sprzątające')

@section('content')

    <div class="main-banner box-shadow">
        <div class="main-banner-title">
            <div class="title-box">
                <h1>Pranie tapicerki meblowej i samochodowej, pranie materacy, wykładzin, ozonowanie - Usługi Karcher</h1>
                <h2><strong>Kościan</strong>, <strong>Leszno</strong>, <strong>Śrem</strong>, <strong>Mosina</strong>, <strong>Luboń</strong> - PanJaga.pl</h2>
            </div>
        </div>
    </div>

    <div class="content-container">
        <h2 class="big-header"><span class="header-gap"></span>Jakie usługi wykonujemy ?</h2>
        <p>PanJaga.pl to firma oferująca <strong>usługi czyszczenia</strong> oraz <strong>prania tapicerki meblowej i samochodowej</strong> jak i również <strong>prania i dezynfekcji materacy</strong> oraz <strong>wózków dziecięcych</strong>. Bazujemy na chemii i sprzęcie wiodących producentów takich jak <strong>KARCHER</strong>, <strong>CHEMSPEC</strong>, <strong>ADBL</strong> czy też <strong>TENZI</strong>. </p>
        <p>Do każdego zlecenia podchodzimy <strong>indywidualnie</strong> oraz z <strong>dbałością o szczegóły czyszczonych obiektów</strong>. Nasze doświadczenie pozwala nam na uzyskanie najwyższej jakości świadczonych przez nas usług. Pozwól, że pomożemy odświeżyć twój samochód czy też meble. <strong>Czyszczenie kanapy</strong>? <strong>Pranie narożnika</strong>? <strong>Pranie i dezynfekcja materaca </strong>? A może <strong>pranie foteli</strong> w samochodzie ? Rozejrzyj się po naszej ofercie i zobacz co mamy do zaoferowania.</p>
    </div>

        @include('includes.mainpage.service')

        @include('includes.mainpage.areaService')

        @include('includes.mainpage.howWeWork')

        @include('includes.mainpage.caseStudy')

        @include('includes.mainpage.chemicalBanner')

        @include('includes.components.serviceContact')

        @include('includes.mainpage.whyUs')

        @include('includes.mainpage.blogArticles')

        @include('includes.mainpage.opinions')

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
            responsive: [
                {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false
                }
                },
            ]
            });
    </script>

    <script>
        $('#opinions-box').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: false,
            dots: false,
            centerMode: false,
            focusOnSelect: true,
            autoplay: true,
            autoplaySpeed: 2000,
            responsive: [
                {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false
                }
                },
            ]
            });
    </script>

    <script>
        $('.howwework-service-container').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            dots: false,
            centerMode: false,
            focusOnSelect: true,
            autoplay: false,
            autoplaySpeed: 2000,
            });
    </script>

@stop