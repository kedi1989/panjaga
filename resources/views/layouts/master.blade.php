<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        @include('includes.head')
    <body>
        <div class="main-page-container">
        @include('includes.header')
        <div class="main-container">
        <!-- <div id="main-slider">
                <div class="background-slider background-image-1"></div>
                <div class="background-slider background-image-2"></div>
                <div class="background-slider background-image-3"></div>
            
            </div>

            <div class="content-container">
                <h1>O NAS</h1>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vehicula tempus placerat. Mauris a dictum leo. Nulla facilisi. Pellentesque sed mauris metus. Curabitur auctor justo imperdiet ante aliquam tempus. Sed ac urna consectetur, ullamcorper diam ac, rhoncus lectus. Aliquam scelerisque nisi eu nulla pretium venenatis. In ut condimentum nulla</p>
        
            </div>
        </div> -->
        <div class="main-banner">
            <div class="main-banner-title">
                <div class="title-box">
                    <h1>Firma sprzątająca Kościan, Leszno, Śrem, Poznań - PanJaga.pl</h1>
                </div>
            </div>
        </div>
        <div class="content-container">
            <h2 class="big-header"><span class="header-gap"></span>Jakie usługi wykonujemy ?</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        
            <div class="service-container">
                <div class="service-box">
                    <div class="service-image-wrapper">
                        <img src="https://washman.pl/wp-content/uploads/2019/09/czyszczenie-dywanow.jpg" />
                    </div>
                    <div class="service-title">
                        <h3>Pranie i czyszczenie wykładzin, dywanów<h3>
                    </div>
                </div>

                <div class="service-box">
                    <div class="service-image-wrapper">
                        <img src="https://washman.pl/wp-content/uploads/2019/09/pranie-mebli-tapicerowanych.jpg" />
                    </div>
                    <div class="service-title">
                        <h3>Pranie tapicerki meblowej</h3>
                    </div>
                </div>

                <div class="service-box">
                    <div class="service-image-wrapper">
                        <img src="https://washman.pl/wp-content/uploads/2019/09/pranie-tapicerek-samochodowych.jpg" />
                    </div>
                    <div class="service-title">
                        <h3>Pranie tapicerki samochodowej</h3>
                    </div>
                </div>

                <div class="service-box">
                    <div class="service-image-wrapper">
                    <img src="https://washman.pl/wp-content/uploads/2019/09/czyszczenie-parowe.jpg" />
                    </div>
                    <div class="service-title">
                        <h3>Czyszczenie i ozonowanie samochodów</h3>
                    </div>
                </div>
            </div>

            <h2 class="big-header"><span class="header-gap"></span>W jakim obszarze działamy ?</h2>
        
        </div>


        </div>

        <script>
            $('#main-slider').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                dots: false,
                centerMode: false,
                focusOnSelect: true
                });
        </script>

            @include('includes.footer')
    </body>
</html>