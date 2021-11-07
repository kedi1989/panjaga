@extends('layouts.master')
        @section('title', 'PanJaga.pl - Cennik usług prania i czyszczenia Karcher')
        @section('description', 'Sprawdź nasze ceny prania tapicerki meblowej i samochodowej ! Skuteczne usuwanie plam i pranie w dobrej cenie ! Skutecznie wypierz swój narożnik, kanapę, materac czy też fotele samochodu.')
        @section('keywords', 'cennik prania tapicerki meblowej, cennik prania tapicerki samochodowej, cennik, cennik usuwania plam, cennik prania mebli, ceny')

@section('content')
        
        <div class="content-container">
            <h1 class="big-header"><span class="header-gap"></span>CENNIK PRANIA TAPICERKI I DYWANÓW</h1>
        </div>

        <div class="content-container">
         
        <div class="prices-container">

        <p class="prices-disclaimer">- Poniższe ceny są cenami orientacyjnymi. Ostateczne ceny, ustalamy na podstawie zdjęć (zazwyczaj dosyłanych przez klienta) więc mogą być nieznacznie niższe lub wyższe. Ustalona cena na podstawie zdjęcia, nie podlega zmianie już na miejscu.</p>
        
        <p class="prices-disclaimer">- Dużo zależy od stopnia zabrudzenia a czasami nawet od rodzaju tapicerki np. w przypadku tapicerek Carabu.</p>
        
        <p class="prices-disclaimer">- W przypadku gdy w odkurzaczu piorącym zostaje nam trochę wody z chemią, staramy się w miarach możliwości doczyścić coś klientowi za darmo np. mała pufa, krzesło etc.</p>

        @include('includes.components.covid19Info')


        <h3><strong>PRANIE TAPICERKI MEBLOWEJ</strong></h3>

        <table class="price-table">
            <tbody>

                <tr>
                    <td class="service-name">
                        Narożnik pokojowy do 2m długości
                        <span class="sub-info">- w dowolnej konfiguracji - złożony, rozłożny (w funkcji spania), poduszki wliczone w cenę</span>
                    </td>
                    <td class="service-price">
                        80 - 150zł
                    </td>
                </tr>

                <tr>
                    <td class="service-name">
                        Narożnik pokojowy powyżej 2m długości
                        <span class="sub-info">- w dowolnej konfiguracji - złożony, rozłożny (w funkcji spania), poduszki wliczone w cenę</span>
                    </td>
                    <td class="service-price">
                        150 - 200 zł
                    </td>
                </tr>

                <tr>
                    <td class="service-name">
                        Narożnik pokojowy powyżej 4m długości
                        <span class="sub-info">- w dowolnej konfiguracji - złożony, rozłożny (w funkcji spania), poduszki wliczone w cenę</span>
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
                        <span class="sub-info">- w dowolnej konfiguracji - złożone, rozłożone, poduszki wliczone w cenę</span>
                    </td>
                    <td class="service-price">
                        80 - 130 zł
                    </td>
                </tr>

                <tr>
                    <td class="service-name">
                        Tapczan, sofa, kanapa powyżej 2m długości
                        <span class="sub-info">- w dowolnej konfiguracji - złożone, rozłożone, poduszki wliczone w cenę</span>
                    </td>
                    <td class="service-price">
                        130 - 200 zł
                    </td>
                </tr>

                <tr>
                    <td class="service-name">
                        Komplet wypoczynkowy 3 + 2 + 1
                        <span class="sub-info">- w dowolnej konfiguracji - złożone, rozłożone, poduszki wliczone w cenę</span>
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
                        50 - 70 zł
                    </td>
                </tr>

                <tr>
                    <td class="service-name">
                        Krzesła z obiciem tapicerowanym
                        <span class="sub-info">- w zależności od ilości tapicerki na krześle</span>
                    </td>
                    <td class="service-price">
                        15 - 20 zł
                    </td>
                </tr>

                <tr>
                    <td class="service-name">
                        Fotel wypoczynkowy tzw. Uszak
                    </td>
                    <td class="service-price">
                        50 zł
                    </td>
                </tr>

                <tr>
                    <td class="service-name">
                        Duży fotel wypoczynkowy np. rozkładany
                        <span class="sub-info">- w zależności od ilości tapicerki na fotelu, rodzaju oparć itd.</span>
                    </td>
                    <td class="service-price">
                        50 - 70 zł
                    </td>
                </tr>

                <tr>
                    <td class="service-name">
                        Fotel biurowy mały - dziecięcy
                        <span class="sub-info">- w zależności od ilości tapicerki na fotelu, rodzaju oparć itd.</span>
                    </td>
                    <td class="service-price">
                        20 zł
                    </td>
                </tr>

                <tr>
                    <td class="service-name">
                        Fotel biurowy duży
                        <span class="sub-info">- w zależności od ilości tapicerki na fotelu, rodzaju oparć itd.</span>
                    </td>
                    <td class="service-price">
                        25 - 30 zł
                    </td>
                </tr>

                <tr>
                    <td class="service-name">
                        Pufy, podnóżki
                        <span class="sub-info">- w zależności od wielkości</span>
                    </td>
                    <td class="service-price">
                        25 - 30 zł
                    </td>
                </tr>

                <tr>
                    <td class="service-name">
                        Poduszka kanapowa
                        <span class="sub-info">- wliczane już zazwyczaj w cenie prania narożnika, kanap etc.</span>
                    </td>
                    <td class="service-price">
                        5 - 10 zł
                    </td>
                </tr>

                <tr>
                    <td class="service-name">
                        Schody, nastopnice
                        <span class="sub-info">- liczone za stopień, w zależności od wielkości</span>
                    </td>
                    <td class="service-price">
                        10 - 20 zł
                    </td>
                </tr>
                
            </tbody>
        </table>

        <div class="order-box">
            <a class="order-btn box-shadow" href="{{ route('kontakt') }}">Zamawiam pranie tapicerki meblowej <i class="fas fa-angle-right"></i></a>
        </div>

        <h3><strong>PRANIE I DEZYNFEKCJA MATERACY</strong></h3>

                <table class="price-table">
                    <tbody>


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
                        Wyparzanie parą materaca, dezynfekcja
                        <span class="sub-info">- zazwyczaj już robione dwustronnie</span>
                    </td>
                    <td class="service-price">
                        50 zł
                    </td>
                </tr>

                <tr>
                    <td class="service-name">
                        Zabieg przeciw alergiczny, przeciw roztoczom ALLERGOFF
                        <span class="sub-info">- zazwyczaj już robione dwustronnie, zabieg idealny dla alergików</span>
                    </td>
                    <td class="service-price">
                        50 zł
                    </td>
                </tr>

                        </tbody>
                </table>

                <div class="order-box">
            <a class="order-btn box-shadow" href="{{ route('kontakt') }}">Zamawiam pranie materaca <i class="fas fa-angle-right"></i></a>
        </div>

                
        <h3><strong>PRANIE DYWANÓW / WYKŁADZIN</strong></h3>
                    

        <table class="price-table">
            <tbody>

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

            </tbody>
        </table>

        <div class="order-box">
            <a class="order-btn box-shadow" href="{{ route('kontakt') }}">Zamawiam pranie dywanu lub wykładziny <i class="fas fa-angle-right"></i></a>
        </div>

        <h3><strong>CZYSZCZENIE SKÓR, CZYSZCZENIE MEBLI SKÓRZANYCH</strong></h3>

        <table class="price-table">
            <tbody>

            <tr>
                <td class="service-name">
                    Czyszczenie mebli, kompletów skórzanych
                    <span class="sub-info"> - Wyceny na podstawie zdjęć mebli -</span>
                </td>
                <td class="service-price">
                    od 200 zł
                </td>
            </tr>

            </tbody>
        </table>

        <div class="order-box">
            <a class="order-btn box-shadow" href="{{ route('kontakt') }}">Zamawiam czyszczenie mebli skórzanych <i class="fas fa-angle-right"></i></a>
        </div>

                
        <h3><strong>PRANIE / CZYSZCZENIE RÓŻNE</strong></h3>

        <table class="price-table">
            <tbody>

            <tr>
                <td class="service-name">
                    Pranie wózka dziecięcego 3 w 1 
                    <span class="sub-info">- 3 moduły (gondola, spacerówka, skorupka - fotelik dla noworodka) w tym stelaż z torbą na dole </span>
                </td>
                <td class="service-price">
                    150 zł
                </td>
            </tr>

            <tr>
                <td class="service-name">
                    Pranie wózka dziecięcego 2 w 1 
                    <span class="sub-info">- 2 moduły (gondola, spacerówka) w tym stelaż z torbą na dole </span>
                </td>
                <td class="service-price">
                    100 - 130zł
                </td>
            </tr>

            <tr>
                <td class="service-name">
                    Pranie wózka dziecięcego 
                    <span class="sub-info">- 1 moduł (np. gondola) w tym stelaż z torbą na dole </span>
                </td>
                <td class="service-price">
                    80 - 100 zł
                </td>
            </tr>

            <tr>
                <td class="service-name">
                    Pranie fotelika samochodowego
                    <span class="sub-info">- standardowy rozmiar dla większych już dzieci </span>
                </td>
                <td class="service-price">
                    50 - 70 zł
                </td>
            </tr>
            </tbody>
        </table>

        <p class="prices-disclaimer">- Są to ceny orientacyjne. Najlepiej proszę wysłać MMSem zdjęcia pod numer 790-462-146 do wyceny. </p>
        <p class="prices-disclaimer">- Elementy wózka dezynfekowane są parownicą a następnie prane odkurzaczem ekstrakcyjnym łagodną chemią. </p>

        <div class="order-box">
            <a class="order-btn box-shadow" href="{{ route('kontakt') }}">Zamawiam <i class="fas fa-angle-right"></i></a>
        </div>


            <h3><strong>PRANIE TAPICERKI SAMOCHODOWEJ I CZYSZCZENIE</strong></h3>


            <h4 class="price-header">SAMOCHODY MAŁE</h4>
            <p class="price-header-sub-info">- np. mały hatchback, mały sedan; - FORD FIESTA, NISSAN MICRA, FIAT PANDA itd.</p>

            <table class="price-table">
                <tbody>

                <tr>
                    <td class="service-name">
                        Ozonowanie*
                        <span class="sub-info"></span>
                    </td>
                    <td class="service-price">
                        50 zł
                    </td>
                </tr>
                <tr>
                    <td class="service-name">
                        Pakiet Pranie MINI
                        <span class="sub-info">- w zależności od zabrudzenia; - przednie fotele oraz tylnia kanapa</span>
                    </td>
                    <td class="service-price">
                        120 - 150 zł
                    </td>
                </tr>
                <tr>
                    <td class="service-name">
                        Pakiet Pranie MEDIUM
                        <span class="sub-info">- w zależności od zabrudzenia; - przednie fotele oraz tylnia kanapa, podłoga, bagażnik, dywaniki</span>
                    </td>
                    <td class="service-price">
                        180 - 200 zł
                    </td>
                </tr>
                <tr>
                    <td class="service-name">
                        Pakiet Pranie MAXI
                        <span class="sub-info">- w zależności od zabrudzenia; - przednie fotele oraz tylnia kanapa, podłoga, bagażnik, dywaniki, czyszczenie plastików, wycieranie szyb, ozonowanie*</span>
                    </td>
                    <td class="service-price">
                        200 - 250 zł
                    </td>
                </tr>

                    </tbody>
            </table>



            <h4 class="price-header">SAMOCHODY ŚREDNIE</h4>
            <p class="price-header-sub-info">- np. sedany, kombi; - VW PASSAT, TOYOTA AVENSIS itd.</p>



            <table class="price-table">
                    <tbody>

                <tr>
                    <td class="service-name">
                        Ozonowanie*
                        <span class="sub-info"></span>
                    </td>
                    <td class="service-price">
                        50 zł
                    </td>
                </tr>
                <tr>
                    <td class="service-name">
                        Pakiet Pranie MINI
                        <span class="sub-info">- w zależności od zabrudzenia; - przednie fotele oraz tylnia kanapa</span>
                    </td>
                    <td class="service-price">
                        150 - 180 zł
                    </td>
                </tr>
                <tr>
                    <td class="service-name">
                        Pakiet Pranie MEDIUM
                        <span class="sub-info">- w zależności od zabrudzenia; - przednie fotele oraz tylnia kanapa, podłoga, bagażnik, dywaniki</span>
                    </td>
                    <td class="service-price">
                        200 - 250 zł
                    </td>
                </tr>
                <tr>
                    <td class="service-name">
                        Pakiet Pranie MAXI
                        <span class="sub-info">- w zależności od zabrudzenia; - przednie fotele oraz tylnia kanapa, podłoga, bagażnik, dywaniki, czyszczenie plastików, wycieranie szyb, ozonowanie*</span>
                    </td>
                    <td class="service-price">
                        250 - 300 zł
                    </td>
                </tr>
            </tbody>
        </table>


        <h4 class="price-header">SAMOCHODY DUŻE</h4>
            <p class="price-header-sub-info">- np. minivany, duży SUV, Busy; - OPEL ZAFIRA, MAZDA 5</p>


            <table class="price-table">
                    <tbody>

                <tr>
                    <td class="service-name">
                        Ozonowanie*
                        <span class="sub-info"></span>
                    </td>
                    <td class="service-price">
                        50 zł
                    </td>
                </tr>
                <tr>
                    <td class="service-name">
                        Pakiet Pranie MINI
                        <span class="sub-info">- w zależności od zabrudzenia; - przednie fotele oraz tylnia kanapa</span>
                    </td>
                    <td class="service-price">
                        150 - 250 zł
                    </td>
                </tr>
                <tr>
                    <td class="service-name">
                        Pakiet Pranie MEDIUM
                        <span class="sub-info">- w zależności od zabrudzenia; - przednie fotele oraz tylnia kanapa, podłoga, bagażnik, dywaniki</span>
                    </td>
                    <td class="service-price">
                        250 - 300 zł
                    </td>
                </tr>
                <tr>
                    <td class="service-name">
                        Pakiet Pranie MAXI
                        <span class="sub-info">- w zależności od zabrudzenia; - przednie fotele oraz tylnia kanapa, podłoga, bagażnik, dywaniki, czyszczenie plastików, wycieranie szyb, ozonowanie*</span>
                    </td>
                    <td class="service-price">
                        250 - 350 zł
                    </td>
                </tr>
            </tbody>
        </table>


        <h4 class="price-header">SAMOCHODY CIĘŻAROWE</h4>
            <p class="price-header-sub-info">- np. TIR, ciągnik siodłowy</p>


            <table class="price-table">
                    <tbody>

                <tr>
                    <td class="service-name">
                        Ozonowanie*
                        <span class="sub-info"></span>
                    </td>
                    <td class="service-price">
                        70 zł
                    </td>
                </tr>
                <tr>
                    <td class="service-name">
                        Czyszczenie kabiny, pranie tapicerki
                        <span class="sub-info">- wycena indywidualna, najlepiej proszę dzwonić</span>
                    </td>
                    <td class="service-price">
                        od 350 zł
                    </td>
                </tr>
                
            </tbody>
        </table>

        <p class="prices-disclaimer">- W przypadku zamawiania usługi prania auta wymagane są dobry dostęp do wody oraz prądu. Usługę prania samochodu świadczymy na miejscu u klienta.</p>
        <p class="prices-disclaimer">- Ceny mogą się różnić w przypadkach różnych wersji danego samochodu np. wersji z 7 fotelami (kombi)</p>
        <p class="prices-disclaimer">- *Ozonowanie w pakiecie wykonywane gdy pogoda na to pozwala, brak opadów deszczu, brak dużej wilgotności powietrza</p>

        <div class="order-box">
            <a class="order-btn box-shadow" href="{{ route('kontakt') }}">Zamawiam pranie tapicerki samochodowej <i class="fas fa-angle-right"></i></a>
        </div>
        </div>
</div>
</div>


@stop