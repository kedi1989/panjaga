<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        @include('includes.head')
    <body>
        <div class="main-page-container">
        @include('includes.header')
        <div class="main-container">
        
        <div class="content-container">
            <h2 class="big-header"><span class="header-gap"></span>CENNIK</h2>
        </div>

        <div class="content-container">

        <div class="prices-container">

        <p>Poniższe ceny są cenami orientacyjnymi. Ostateczne ceny i tak ustalamy na podstawie zazwyczaj zdjęć więc mogą być niższe lub wyższe. Ustalona cena na podstawie zdjęcia nie zmienia się już na miejscu. Jeżeli ustalamy cenę to trzymamy się jej bez niespodzianek na miejscu.</p>
        
        <p>Dużo zależy od stopnia zabrudzenia, poziomu skomplikowania mebla np. tapicerka przeplatana z pseudoskórzanymi akcentami etc. oraz czy jest dużo odplamiania.</p>
        
        <p>W przypadku gdy w odkurzaczu piorącym zostaje nam trochę wody z chemią, staramy się w miarach możliwości doczyścić coś klientowi za darmo.</p>

        <table class="price-table">
            <tbody>
                <tr class="no-border">
                    <th colspan="3">
                        <h3>PRANIE TAPICERKI MEBLOWEJ</h3>
                    </th>
                </tr>

                <tr>
                    <td class="service-name">
                        Narożnik pokojowy do 2m długości
                        <span class="sub-info">- w dowolnej konfiguracji - złożony, rozłożny (w funkcji spania)</span>
                    </td>
                    <td class="service-price">
                        80 - 150zł
                    </td>
                </tr>

                <tr>
                    <td class="service-name">
                        Narożnik pokojowy powyżej 2m długości
                        <span class="sub-info">- w dowolnej konfiguracji - złożony, rozłożny (w funkcji spania)</span>
                    </td>
                    <td class="service-price">
                        150 - 200 zł
                    </td>
                </tr>

                <tr>
                    <td class="service-name">
                        Narożnik pokojowy powyżej 4m długości
                        <span class="sub-info">- w dowolnej konfiguracji - złożony, rozłożny (w funkcji spania)</span>
                    </td>
                    <td class="service-price">
                        200 - 300 zł
                    </td>
                </tr>

                <tr>
                    <td class="service-name">
                        Narożnik kuchenny
                    
                    </td>
                    <td class="service-price">
                        60 - 120 zł
                    </td>
                </tr>

                <tr>
                    <td class="service-name">
                        Tapczan, sofa, kanapa do 2m długści
                        <span class="sub-info">- w dowolnej konfiguracji - złożone, rozłożone</span>
                    </td>
                    <td class="service-price">
                        80 - 130 zł
                    </td>
                </tr>

                <tr>
                    <td class="service-name">
                        Tapczan, sofa, kanapa powyżej 2m długości
                        <span class="sub-info">- w dowolnej konfiguracji - złożone, rozłożone</span>
                    </td>
                    <td class="service-price">
                        130 - 200 zł
                    </td>
                </tr>

                <tr>
                    <td class="service-name">
                        Materac do 2m szerokości
                        <span class="sub-info">- pranie jednostronne, 2 strony = cena x2</span>
                    </td>
                    <td class="service-price">
                        30 - 70 zł
                    </td>
                </tr>

                <tr>
                    <td class="service-name">
                        Materac powyżej 2m szerokości
                        <span class="sub-info">- pranie jednostronne, 2 strony = cena x2</span>
                    </td>
                    <td class="service-price">
                        40 - 80 zł
                    </td>
                </tr>

                <tr>
                    <td class="service-name">
                        Komplet wypoczynkowy 3 + 2 + 1
                        <span class="sub-info">- w dowolnej konfiguracji - złożone, rozłożone</span>
                    </td>
                    <td class="service-price">
                        200 - 350 zł
                    </td>
                </tr>

                <tr>
                    <td class="service-name">
                        Inne konfiguracje kompletów wypoczynkowych
                    </td>
                    <td class="service-price">
                        Ustalane indywidualnie
                    </td>
                </tr>

                <tr>
                    <td class="service-name">
                        Zagłówek sypialniany (wezgłowie)
                        <span class="sub-info">- w zależności od wielkości</span>
                    </td>
                    <td class="service-price">
                        50 - 100 zł
                    </td>
                </tr>

                <tr>
                    <td class="service-name">
                        Krzesła z obiciem tapicerowanym
                        <span class="sub-info">- w zależności od ilości tapicerki na krześle</span>
                    </td>
                    <td class="service-price">
                        15 - 30 zł
                    </td>
                </tr>

                <tr>
                    <td class="service-name">
                        Fotel wypoczynkowy tzw. Uszak
                    </td>
                    <td class="service-price">
                        50 - 70 zł
                    </td>
                </tr>

                <tr>
                    <td class="service-name">
                        Duży fotel wypoczynkowy np. rozkładany
                        <span class="sub-info">- w zależności od ilości tapicerki na fotelu, rodzaju oparć itd.</span>
                    </td>
                    <td class="service-price">
                        70 - 100 zł
                    </td>
                </tr>

                <tr>
                    <td class="service-name">
                        Fotel biurowy mały - dziecięcy
                        <span class="sub-info">- w zależności od ilości tapicerki na fotelu, rodzaju oparć itd.</span>
                    </td>
                    <td class="service-price">
                        20 - 30 zł
                    </td>
                </tr>

                <tr>
                    <td class="service-name">
                        Fotel biurowy duży
                        <span class="sub-info">- w zależności od ilości tapicerki na fotelu, rodzaju oparć itd.</span>
                    </td>
                    <td class="service-price">
                        25 - 40 zł
                    </td>
                </tr>

                <tr>
                    <td class="service-name">
                        Pufy, podnóżki
                        <span class="sub-info">- w zależności od wielkości</span>
                    </td>
                    <td class="service-price">
                        25 - 50 zł
                    </td>
                </tr>

                <tr>
                    <td class="service-name">
                        Poduszka kanapowa
                        <span class="sub-info">- wliczane już zazwyczaj w cenie prania narożnika, kanap etc.</span>
                    </td>
                    <td class="service-price">
                        5 - 15 zł
                    </td>
                </tr>

                <tr>
                    <td class="service-name">
                        Schody
                        <span class="sub-info">- liczone za stopień</span>
                    </td>
                    <td class="service-price">
                        5 - 20 zł
                    </td>
                </tr>
                
                <tr class="no-border">
                    <th colspan="3">
                        <h3>PRANIE DYWANÓW / WYKŁADZIN</h3>
                    </th>
                </tr>

                <tr>
                    <td class="service-name">
                        Wykładzina
                        <span class="sub-info">- w zależności od stopnia zabrudzenia i długości włosia</span>
                    </td>
                    <td class="service-price">
                        8 - 12 zł m2
                    </td>
                </tr>

                <tr>
                    <td class="service-name">
                        Dywan krótki włos
                    </td>
                    <td class="service-price">
                        8 - 12 zł m2
                    </td>
                </tr>

                <tr>
                    <td class="service-name">
                        Dywan długi włos
                    </td>
                    <td class="service-price">
                        10 - 15 zł m2
                    </td>
                </tr>

                <tr class="no-border">
                    <th colspan="3">
                        <h3>PRANIE / CZYSZCZENIE RÓŻNE</h3>
                    </th>
                </tr>

                <tr>
                    <td class="service-name">
                        Pranie wózka dziecięcego 3 w 1 
                        <span class="sub-info">- 3 moduły (gondola, spacerówka, skorupka - fotelik dla noworodka) </span>
                    </td>
                    <td class="service-price">
                        80 - 120 zł
                    </td>
                </tr>

                <tr>
                    <td class="service-name">
                        Pranie fotelika samochodowego
                        <span class="sub-info">- standardowy rozmiar dla większych już dzieci </span>
                    </td>
                    <td class="service-price">
                        70 - 90 zł
                    </td>
                </tr>
            </tbody>
        </table>
        </div>
</div>
</div>



            @include('includes.footer')
    </body>
</html>