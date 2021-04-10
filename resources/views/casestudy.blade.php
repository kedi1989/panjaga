@extends('layouts.master')
        @section('title', 'PanJaga.pl - CaseStudy - Studium Przypadków Mojej Pracy')
        @section('description', 'Jesteś ciekaw jak wykonuje swoją pracę ? Zajrzyj do mojego CaseStudy i zobacz jak odbywa się pranie tapicerek u różnych moich klientów.')
        @section('keywords', 'pranie tapicerki meblowej śrem, pranie tapicerki, czyszczenie narożnika, pranie mebli, czyszczenie wózków dziecięcych ')
       
@section('content')

        <div class="content-container">
            <h1 class="big-header"><span class="header-gap"></span>CASE STUDY</h1>
        </div>

        <div class="content-container">
        <div class="case-study-list-container">
            
            <article class="article-container">
                <a href="{{ route('casestudy_1') }}" >
                    <div class="blog-image-wrapper">
                        <img loading="lazy" src="{{ URL::asset('images/casestudy/1/1.jpg') }}" alt="meble tapicerowane"/>
                    </div>
                    <div class="article-content-box">
                        <div class="post-title">
                            <h3>Mocno zabrudzony narożnik przez dzieci :) Zobacz jak temu zaradziliśmy ! - Śrem</h3>
                        </div>
                        <div class="post-publised-date">
                            Kwi 6, 2021
                        </div>
                        <div class="post-content">
                        <p>Naszymi klientami najczęściej są rodziny z dziećmi w szczególności tymi mniejszymi :) A dzieci jak to dzieci zawsze coś rozleją. Zobacz jak sobie poradziliśmy z tym przypadkiem !</p>
                        </div>
                    </div>
                </a>
            </article>

            <article class="article-container">
                <a href="{{ route('casestudy_2') }}">
                    <div class="blog-image-wrapper">
                        <img loading="lazy" src="{{ URL::asset('images/casestudy/2/1.jpg') }}" alt="siedzenia samochodowe"/>
                    </div>
                    <div class="article-content-box">
                        <div class="post-title">
                            <h3>Cieżkie do wyprania plamy od potu na fotelach. Udało się! Sprawdź! - Kościan</h3>
                        </div>
                        <div class="post-publised-date">
                            Kwi 10, 2021
                        </div>
                        <div class="post-content">
                            Okazuje się, że jednymi z trudniejszych plam mogą być plamy od potu na fotelach. Temat był dość ciężki ale udało się uzyskać zadowalający efekt...
                        </div>
                    </div>
                </a>
            </article>

            <article class="article-container">
                <a href="{{ route('casestudy_3') }}">
                    <div class="blog-image-wrapper">
                        <img loading="lazy" src="{{ URL::asset('images/casestudy/3/1.jpg') }}" alt="gondola wózka i karcher"/>
                    </div>
                    <div class="article-content-box">
                        <div class="post-title">
                            <h3>Czyszczenie wózka dziecięcego czyli pranie gondoli i fotelika samochodowego Karcherem ! - Kościan</h3>
                        </div>
                        <div class="post-publised-date">
                            Kwi 14, 2021
                        </div>
                        <div class="post-content">
                            Moimi klientami stają się nawet ci najmniejsi a czasami jeszcze nienarodzeni :) Wózek dziecięcy czasem chce się odświeżyć a czasem trzeba dla kolejnego dziecka. Zobacz jak to robię !
                        </div>
                    </div>
                </a>
            </article>

            <article class="article-container">
                <a href="{{ route('casestudy_4') }}">
                    <div class="blog-image-wrapper">
                        <img loading="lazy" src="{{ URL::asset('images/casestudy/4/1.jpg') }}" alt="Czyszczenie tapczanu i foteli Karcherem"/>
                    </div>
                    <div class="article-content-box">
                        <div class="post-title">
                            <h3>Czyszczenie wieloletniego tapczanu,kanapy i foteli za pomocą Karcher Puzzi - Zobacz! - Kościan</h3>
                        </div>
                        <div class="post-publised-date">
                            Kwi 18, 2021
                        </div>
                        <div class="post-content">
                            Stare meble są na tyle fajne, że są nietypowe i ciężko już takie dostać gdziekolwiek. Warto zatem je doprać i dać im drugie życie. Z tym tutaj trochę pracy było ale udało się. Zobaczcie sami!
                        </div>
                    </div>
                </a>
            </article>

            <article class="article-container">
                <a href="{{ route('casestudy_5') }}">
                    <div class="blog-image-wrapper">
                        <img loading="lazy" src="{{ URL::asset('images/casestudy/5/7.jpg') }}" alt="Czyszczenie stelaza wózka dziecięcego oraz gondoli karcherem"/>
                    </div>
                    <div class="article-content-box">
                        <div class="post-title">
                            <h3>Czyszczenie stelażu wózka dziecięcego parą i pranie gondoli oraz akcesoriów Karcherem - Zobacz! - Śrem</h3>
                        </div>
                        <div class="post-publised-date">
                            Kwi 24, 2021
                        </div>
                        <div class="post-content">
                            Wózki dziecięce mają to do siebie że... się brudzą :) a ja jestem po to żeby właśnie pomóc je doczyścić. A tak na poważnie to szykowałem wózek pod młodszego jeszcze nie narodzonego klienta który dostał go po bracie. Zapraszam!
                        </div>
                    </div>
                </a>
            </article>

            

            
            
          </div>
          </div>
        </div>
</div>

<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}
</script>

@stop