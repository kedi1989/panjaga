@extends('layouts.master')
        @section('title', 'PanJaga.pl - CaseStudy - Pranie Foteli Samochodowych - Kościan')
        @section('description', 'Jesteś ciekaw jak wykonuje swoje pracę ? Zajrzyj do mojego CaseStudy i zobacz jak odbywa się pranie tapicerek samochodowych.')
        @section('keywords', 'pranie tapicerki samochodowej kościan, pranie tapicerki, czyszczenie foteli, pranie foteli, usuwanie plam potu ')
        @section('image', 'https://www.panjaga.pl/images/casestudy/2/1.jpg')
@section('content')

        <div class="content-container">
          <div class="blog-article-container">
            
          <div class="article-box">
              <h1>Cieżkie do wyprania plamy od potu na fotelach. Udało się! Sprawdź! - Kościan</h1>
              <p class="post-published-date">Kwi 10, 2021 | Pranie Foteli Samochodowych - Kościan</p>

              <div class="sharethis-inline-share-buttons"></div>

              <div class="article-image">
                <img class="box-shadow" src="{{ URL::asset('images/casestudy/2/1.jpg') }}" alt="Porównanie brudnego i czystego fotela samochodowego - Kościan" />
              </div>
              <p>Okazuje się, że jednymi z trudniejszych plam mogą być plamy od potu na fotelach. Temat był dość ciężki ale udało się uzyskać zadowalający efekt...</p>
              
              <h2><strong>Pranie foteli samochodowych - Kościan</strong></h2>

              <p>Jednym ze zleceń było wypranie foteli samochodowych z...plam z potu. Wielu z was może wydawać się, że najgorsze mogą być plamy z kawy albo herbaty ale wcale tak nie jest. Najgorszymi z plam jak dla mnie są długo przeleżałe, utarte plamy pochodzenia biologicznego tj. pot, krew, mocz etc.</p>

              <p>Usuwanie takich plam wymaga odpowiedniego podejścia oraz dobrze dobranej chemii.</p>

              <h2><strong>Pranie tapicerki samochodowej - Do Dzieła ! - Kościan</strong></h2>

              <p>Przy pierwszym podejściu użyłem zwykłej chemii do prania tapicerek i wkrętarki z szczotką do prania tapicerki, jednak nic to nie dawało, ogólny brud został ściągnięty ale wciąż było widać mocne zaplamienie od potu. Każde kolejne pranie tego samego miejsca uświadomiło mnie w przekonaniu, że nie wypiorę tego zwykłą chemią Karcher RM-760.</p>

              <p>Naszczęście w mojej magicznej walizeczce udało mi się namierzyć chemię enzymatyczną ENZ-ALL ze stajni CHEMSPEC, nie czekając długo rozrobiłem chemię w gorącej wodzie a następnie spryskałem fotele i przetarłem szczotką do tapicerki.</p>

              <p>Chemia tego typu używana jest często w hotelach gdzie trzeba poradzić sobie z plamami biologicznymi. Ma rzeczywiście też kwaśniejszy odczyn od typowych środków Karchera ale nie wyrządziła żadnej krzywdy naszej tapicerce.</p>

              <p>Po wypłukaniu foteli dokładnie z pozostałości chemii udało mi się uzyskać efekt który widzicie poniżej.</p>

              <div class="inner-article-image-container">
                  <div class="inner-article-image-box">
                    <img class="box-shadow" src="{{ URL::asset('images/casestudy/2/2.jpg') }}" alt="pranie foteli samochodowych w Kościanie" />
                    <div class="article-image-description-box">
                      <p>Różnica widoczna gołym okiem. Plamy z potu zeszły.</p>
                    </div>
                  </div>
              </div>

              <p>Klient zadowolony a ja tymbardziej. Zapraszam :)</p>

          </div>
            
          @include('casestudy.includes.newestCasestudyBox') 

          </div>

        </div>

        <div class="sharethis-inline-share-buttons"></div>

        <div class="service-contact-offer-page">
          @include('includes.components.serviceContact')  
        </div>

        <div class="content-container">
          <div class="blog-cities-box">
          <h2 class="padding-top-0"><strong>Czyszczenie tapicerki i wykładzin wykonujemy w miastach:</strong></h2>
            @include('offers.components.citiesOffer') 
          </div>
          
        </div>

        </div>

        @stop