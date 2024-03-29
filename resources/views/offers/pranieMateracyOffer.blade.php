@extends('layouts.master')
        @section('title', 'PanJaga.pl - Oferta - Pranie i dezynfekcja materacy')
        @section('description', 'Wypierzemy i zdezynfekujemy twój materac! Sprawdź naszą ofertę prania i dezynfekcji materacy. Usuwanie roztoczy, plam i zarazków, świeży materac bez alergenów - Pomożemy ci!')
        @section('keywords', 'Pranie materaca, czyszczenie materaca, dezynfekcja materaca, usuwanie roztoczy, alergoff, świeży materac')

@section('content')

        <div class="offer-banner-commercial mattress-cleaning-background box-shadow">
          <div class="description-box">
            <h1>Pranie i dezynfekcja materacy</h1>
            <div class="description-banner-body">Metodą ekstrakcyjną i parową</div>
          </div>
        </div>

        <div class="content-container">
        
          <div class="single-offer-container">

          <div class="other-offers-container">

            </div>

            <div class="offer-box">
                <p class="padding-top-0">Każdy z nas kładzie się na nim codziennie nie myśląc o tym jak rzeczywiście bardzo wpływa na jakość naszego snu. Mowa tu o materacach...</p>
                <p>Dzięki naszej profesjonalnej usłudze <strong>prania i dezynfekcji materacy</strong> mogą Państwo zyskać zdrowy sen, świeżość materaca oraz zniwelować objawy alergii.</p>
              
                <h2><strong>Pranie, czyszczenie i dezynfekcja materacy. Jak działamy?</strong></h2>
                
                <p>Przy użyciu <strong>profesjonalnej parownicy Karcher SV7</strong>, <strong>dezynfekujemy materac</strong> przy użyciu pary o temperaturze 100 stopni co pozwala zabić istniejące w nim roztocza, wirusy, bakterie oraz wstępnie odświeżyć piankę materaca i poszewkę.</p>
                
                <p>Następnie przy użyciu <strong>profesjonalnego odkurzacza piorącego Karcher Puzzi</strong> oraz odpowiedniej chemii- pierzemy materac metodą ekstrakcyjną tak aby wyciągnąć z niego odchody roztoczy, martwe roztocza i inne niepożądane rzeczy mające wpływ na jakość snu a przede wszystkim na samopoczucie alergików.</p>

                <p>Dla alergików mamy specjalną ofertę zabiegu po praniu materaca specjalnym środkiem antyalergicznym pozwalającym zabezpieczyć materac na dłuższy czas przed roztoczami i innymi alergenami. Środek Allergoff rozpylamy na materacu po jego wypraniu.</p>

                  <div class="offer-images-container">
                    <div class="offer-images-box">
                      <img class="box-shadow" loading="lazy" src="../images/gallery/Materace/1.jpg" alt="Pranie podłogi w FORD GALAXY">
                      <img class="box-shadow" loading="lazy" src="../images/gallery/Materace/9.jpg" alt="Pranie i czyszczenie kabiny ciężarówki (czasem trzeba sobie pomóc szczotką na wiertarce :) )">
                      <div class="more-realizations-box">
                      <a href="{{ route('realizacje') }}">
                        GALERIA
                      </a>
                    </div>
                    </div>
                    <div class="offer-images-info">
                      <p>1. Pranie materaca dziecięcego</p>
                      <p>2. Dezynfekcja materaca parownicą</p>
                    </div>
                    
                  </div>

                <h2><strong>Dlaczego należy unikać samodzielnego prania i czyszczenia materaca?</strong></h2>

                <p>Głównym powodem przez który możemy zaszkodzić naszemu materacowi jest jego nadmierne przemoczenie przez co zwyczajnie może spleśnieć. Drugim powodem może być nie umiejętne ściągnięcie pokrowca materaca który w rzeczywistości nie jest do ściągnięcia. Nie wiele osób wie ale zamek na poszewce materaca czasami jest tylko zamkiem technologicznym, wyciągnięcie materaca może okazać się pozbyciem się poszewki na stałe. Zamek technologiczny służy tylko i wyłącznie do montażu pokrowca w fazie produkcji. Niektóre materace nie posiadają w ogóle zamków.</p>

                <h2><strong>Pranie i dezynfekcja materaca. Co jeszcze możemy dla Ciebie zrobić?</strong></h2> 
                
                <p>Wylane śniadanie, pot, resztki naskórka, wsiąknięty mocz dziecka w materac. Wszystkie te rzeczy sprawiają, że z czasem znacząco pogorszy się zapach w pomieszczeniu sypialni w którym leży materac. Dzięki praniu ekstrakcyjnemu możemy odświeżyć materac i pozbyć się przykrych zapachów raz na zawsze. <strong>Pranie materaca</strong> to nie kwestia estetyki a zdrowia.</p>

                <p>Jeżeli zatem nasza propozycja do Ciebie przemawia- skontaktuj się z nami pod numerem: <strong>790-462-146</strong>, a my zadbamy o <strong>czystość Twojego materaca</strong>. </p>

                  <div class="offer-images-container">
                    <div class="offer-images-box">
                      <img class="box-shadow" loading="lazy" src="../images/gallery/Materace/8.jpg" alt="Czyszczenie tapicerki na ściance i pranie materaca w ciężarówce VOLVO">
                      <img class="box-shadow" loading="lazy" src="../images/gallery/Materace/3.jpg" alt="Czyszczenie kabiny i pranie materaca leżanki w ciężarówce MAN">
                      <div class="more-realizations-box">
                      <a href="{{ route('realizacje') }}">
                        GALERIA
                      </a>
                    </div>
                    </div>
                    <div class="offer-images-info">
                      <p>1. Duży materac przed praniem</p>
                      <p>2. Materacyk dziecięcy do prania</p>
                    </div>
                  </div>
                
                <h2><strong>Pranie i dezynfekcja materacy - Cennik</strong></h2>

                <div class="short-prices-box">
                  <p>Cennik skrócony (<a href="/cennik">Pełny cennik naszych usług</a>)</p>
                  <ul>
                    <li>- Pranie materaca dziecięcego - dwustronne - <strong>od 30 zł</strong></li>
                    <li>- Pranie materaca do 2m szerokości - dwustronne - <strong>od 60 zł</strong></li>
                    <li>- Pranie materaca powyżej 2m szerokości - dwustronne - <strong>od 80 zł</strong></li>
                    <li>- Dezynfekcja materaca parą - <strong>50 zł</strong></li>
                    <li>- Zabieg przeciw roztoczom ALLERGOFF - <strong>50 zł</strong></li>
                  </ul>
                </div>

              </div>
          </div>
        </div>

        <div class="service-contact-offer-page">
          @include('includes.components.serviceContact')  
        </div>
        <div class="content-container">
        <div class="single-offer-container">

        <!-- <div class="other-offers-container">
            <div class="other-offers-box">
              <h4>CZY WIESZ ŻE ?</h4>
              <p>Aby pozbyć się plamy z jagód nałóż na nią zsiadłe mleko albo kefir! Wetrzyj to w plamę i zostaw na 3 godziny. Na koniec spłucz wodą i wypierz jak zawsze.</p>
            </div>
        </div> -->

          <div class="offer-box">
            <h2 class="padding-top-0"><strong>Do prania tapicerki dojeżdżamy do miejscowości</strong></h2>
            
            @include('offers.components.citiesOffer')  
            
          </div>
        </div>
        </div>

        @stop