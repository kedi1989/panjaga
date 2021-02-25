@extends('layouts.master')
        @section('title', 'PanJaga.pl - Galeria Realizacji')
        @section('description', 'Sprawdź nasze realizacje dobrze wypranej tapicerki meblowej i samochodowej !')
        @section('keywords', 'realizacje prania tapicerki, galeria prania tapicerki, pranie tapicerki meblowej, pranie tapicerki samochodowej, czyszczenie, galeria, realizacje ')

@section('content')

        <div class="content-container">
          <div class="blog-article-container">
            
          <div class="article-box">
              <h1>Jak prać materac ? Zdrowy sen bez alergii.</h1>
              <p class="post-published-date">Lut 17, 2021 | Pranie Materaca</p>
              <div class="article-image">
                <img class="box-shadow" src="{{ URL::asset('images/blog/articles/2/mattress.jpg') }}" alt="łóżko z materacem" />
              </div>
              <p>Wielu z nas kładąc się codziennie spać nie zastanawia się nad tym czy <strong>pranie materaca</strong> jest w ogóle możliwe. Kupujemy go a następnie użytkujemy przez lata nie wiedząc, że to właśnie on może być powodem naszej alergii lub złej jakości snu. Pomóż sobie i swoim bliskim i dowiedz się więcej...</p>
              
              <h2><strong>Pranie materaca w domu- domowym sposobem</strong></h2>
              
            
              <h3><strong>Profesjonalne czyszczenie materacy</strong></h3>

              <h3><strong>Pranie materaca cena</strong></h3>

              <p><strong>Ile kosztuje pranie materaca</strong> ?</p>


              <!-- <div class="inner-article-image-container">
                  <div class="inner-article-image-box">
                    <img class="box-shadow" src="{{ URL::asset('images/blog/articles/1/5.jpg') }}" alt="pranie ekstrakcyjne kanapy" />
                    <div class="article-image-description-box">
                      <p>Pranie ekstrakcyjne wieloletniej kanapy</p>
                    </div>
                  </div>
              </div> -->


              
              
              
          </div>
            
          @include('articles.includes.newestArticlesBox') 

          </div>

        </div>


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