@extends('layouts.master')
        @section('title', 'PanJaga.pl - Czyszczenie szoferki TIRa oraz pranie foteli samochodowych, czyszczenie podsufitki TIR, pranie materaca - Karcher - Kościan - CaseStudy')
        @section('description', 'Szukasz prania i czyszczenia samochodu ciężarowego w Kościanie ? Jesteś ciekaw jak wykonuje swoje pracę ? Zajrzyj do mojego CaseStudy i zobacz jak odbywa się pranie i czyszczenie samochodów w Kościanie.')
        @section('keywords', 'czyszczenie szoferki, pranie tapicerki samochodowej, czyszczenie materacy samochodowych, pranie foteli ')
        @section('image', '')
@section('content')

        <div class="content-container">
          <div class="blog-article-container">
            
          <div class="article-box">
              <h1>-</h1>
              <p class="post-published-date">Maj 10, 2021 | Pranie wózków dziecięcych - Leszno</p>

              <div class="sharethis-inline-share-buttons"></div>

              <div class="article-image">
                <img class="box-shadow" src="{{ URL::asset('images/casestudy/8/1.jpg') }}" alt="-" />
              </div>
              <p>Lorem ipsum</p>
              
              <h2><strong>XXX</strong></h2>

              <p>Lorem ipsum</p>

          
              <div class="inner-article-image-container">
                  <div class="inner-article-image-box">
                    <img class="box-shadow" src="{{ URL::asset('images/casestudy/8/2.jpg') }}" alt="-" />
                    <div class="article-image-description-box">
                      <p>Lorem ipsum</p>
                    </div>
                  </div>
              </div>

              <div class="inner-article-image-container">
                  <div class="inner-article-image-box">
                    <img class="box-shadow" src="{{ URL::asset('images/casestudy/8/3.jpg') }}" alt="-" />
                    <div class="article-image-description-box">
                      <p>Lorem ipsum</p>
                    </div>
                  </div>
              </div>

              <div class="inner-article-image-container">
                  <div class="inner-article-image-box">
                    <img class="box-shadow" src="{{ URL::asset('images/casestudy/8/4.jpg') }}" alt="-" />
                    <div class="article-image-description-box">
                      <p>Lorem ipsum</p>
                    </div>
                  </div>
              </div>

              <div class="inner-article-image-container">
                  <div class="inner-article-image-box">
                    <img class="box-shadow" src="{{ URL::asset('images/casestudy/8/5.jpg') }}" alt="-" />
                    <div class="article-image-description-box">
                      <p>Lorem ipsum</p>
                    </div>
                  </div>
              </div>

              <div class="inner-article-image-container">
                  <div class="inner-article-image-box">
                    <img class="box-shadow" src="{{ URL::asset('images/casestudy/8/6.jpg') }}" alt="-" />
                    <div class="article-image-description-box">
                      <p>Lorem ipsum</p>
                    </div>
                  </div>
              </div>

              <div class="inner-article-image-container">
                  <div class="inner-article-image-box">
                    <img class="box-shadow" src="{{ URL::asset('images/casestudy/8/7.jpg') }}" alt="-" />
                    <div class="article-image-description-box">
                      <p>Lorem ipsum</p>
                    </div>
                  </div>
              </div>

              <div class="inner-article-image-container">
                  <div class="inner-article-image-box">
                    <img class="box-shadow" src="{{ URL::asset('images/casestudy/8/8.jpg') }}" alt="-" />
                    <div class="article-image-description-box">
                      <p>Lorem ipsum</p>
                    </div>
                  </div>
              </div>

              <div class="inner-article-image-container">
                  <div class="inner-article-image-box">
                    <img class="box-shadow" src="{{ URL::asset('images/casestudy/8/9.jpg') }}" alt="-" />
                    <div class="article-image-description-box">
                      <p>Lorem ipsum</p>
                    </div>
                  </div>
              </div>

              <div class="inner-article-image-container">
                  <div class="inner-article-image-box">
                    <img class="box-shadow" src="{{ URL::asset('images/casestudy/8/10.jpg') }}" alt="-" />
                    <div class="article-image-description-box">
                      <p>Lorem ipsum</p>
                    </div>
                  </div>
              </div>


              

              

              <h2><strong>Lorem ipsum</strong></h2>

              <p>-</p>



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