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
                            <h2>Mocno zabrudzony narożnik przez dzieci :) Zobacz jak temu zaradziliśmy ! - Śrem</h2>
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
                            <h2>Cieżkie do wyprania plamy od potu na fotelach. Udało się! Sprawdź! - Kościan</h2>
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
                            <h2>Czyszczenie wózka dziecięcego czyli pranie gondoli i fotelika samochodowego Karcherem ! - Kościan</h2>
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
                            <h2>Czyszczenie wieloletniego tapczanu, wersalki, kanapy i foteli za pomocą Karcher Puzzi - Zobacz! - Kościan</h2>
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
                            <h2>Czyszczenie stelażu wózka dziecięcego parą i pranie gondoli oraz akcesoriów Karcherem - Zobacz! - Śrem</h2>
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

            <article class="article-container">
                <a href="{{ route('casestudy_6') }}">
                    <div class="blog-image-wrapper">
                        <img loading="lazy" src="{{ URL::asset('images/casestudy/6/8.jpg') }}" alt="rogówka, narożnik z widoczną dyszą od Karchera"/>
                    </div>
                    <div class="article-content-box">
                        <div class="post-title">
                            <h2>Pranie i czyszczenie rogówki, narożnika Karcherem - Zajrzyj! - Kościan</h2>
                        </div>
                        <div class="post-publised-date">
                            Maj 1, 2021
                        </div>
                        <div class="post-content">
                            Fajny klimat jest wtedy kiedy siadamy na swoim ulubionym narożniku i odpalamy dobry film z ukochaną osobą :) Ważne, żeby jednak ta rogówka była czysta ;) Pranie i czyszczenie mebli od środka ! Zapraszam !
                        </div>
                    </div>
                </a>
            </article>

            <article class="article-container">
                <a href="{{ route('casestudy_8') }}">
                    <div class="blog-image-wrapper">
                        <img loading="lazy" src="{{ URL::asset('images/casestudy/8/1.jpg') }}" alt="Stelaż wózka"/>
                    </div>
                    <div class="article-content-box">
                        <div class="post-title">
                            <h2>Czyszczenie parowe wózka, mycie tapicerki wózka, czyszczenie stelaża i pranie gondoli Karcherem - Jak uprać wózek ? - Leszno</h2>
                        </div>
                        <div class="post-publised-date">
                            Maj 10, 2021
                        </div>
                        <div class="post-content">
                            Każdy wózek prędzej czy później dostaje drugie życie i ma nowego właściciela :) Przed tym- trzeba go odświeżyć. Zastanawiacie się jak wyczyścić wózek ? Zapraszam !
                        </div>
                    </div>
                </a>
            </article>

            <article class="article-container">
                <a href="{{ route('casestudy_9') }}">
                    <div class="blog-image-wrapper">
                        <img loading="lazy" src="{{ URL::asset('images/casestudy/9/1.jpg') }}" alt="Brudny tapczan"/>
                    </div>
                    <div class="article-content-box">
                        <div class="post-title">
                            <h2>Czyszczenie, mycie tapicerki młodzieżowej wersalki, kanapy - Pranie tapicerki Karcher - Śrem</h2>
                        </div>
                        <div class="post-publised-date">
                            Maj 20, 2021
                        </div>
                        <div class="post-content">
                            Każda wersalka, kanapa, tapczan są inne ale łączy je jedno- z czasem stają się brudne i trzeba je wyprać metodą ekstrakcyjną Karcherem - Zapraszam !
                        </div>
                    </div>
                </a>
            </article>

            <article class="article-container">
                <a href="{{ route('casestudy_10') }}">
                    <div class="blog-image-wrapper">
                        <img loading="lazy" src="{{ URL::asset('images/casestudy/10/2.jpg') }}" alt="Brudny materac do prania"/>
                    </div>
                    <div class="article-content-box">
                        <div class="post-title">
                            <h2>Pranie i czyszczenie materaca, usuwanie plam, dezynfekcja - Śrem</h2>
                        </div>
                        <div class="post-publised-date">
                            Maj 28, 2021
                        </div>
                        <div class="post-content">
                           Materace czasem przydałoby się wyprać- tak da się prać materace a nawet czasami powinno, w końcu na nich spędzamy sporą część swojego życia zwyczajnie śpiąc. Zapraszam !
                        </div>
                    </div>
                </a>
            </article>

            <article class="article-container">
                <a href="{{ route('casestudy_11') }}">
                    <div class="blog-image-wrapper">
                        <img loading="lazy" src="{{ URL::asset('images/casestudy/11/1.jpg') }}" alt="Narożniki, rogówki"/>
                    </div>
                    <div class="article-content-box">
                        <div class="post-title">
                            <h2>Mycie, czyszczenie tapicerki narożnika, krzeseł i fotela, odświeżanie mebli - Usługi Karcher - Kościan</h2>
                        </div>
                        <div class="post-publised-date">
                            Cze 3, 2021
                        </div>
                        <div class="post-content">
                            Czyszczenie i odświeżanie fajnych mebli to wisienka na torcie w mojej codziennej pracy. Zobacz co fajnego miałem do roboty :) A może sam/sama zdecydujesz się zamówić podobną usługę u mnie. Zapraszam !
                        </div>
                    </div>
                </a>
            </article>

            <article class="article-container">
                <a href="{{ route('casestudy_12') }}">
                    <div class="blog-image-wrapper">
                        <img loading="lazy" src="{{ URL::asset('images/casestudy/12/2.jpg') }}" alt="Nastopnice, nakładki schodowe"/>
                    </div>
                    <div class="article-content-box">
                        <div class="post-title">
                            <h2>Pranie i czyszczenie nastopnic schodowych, nakładek schodowych - Karcherem - Kościan</h2>
                        </div>
                        <div class="post-publised-date">
                            Cze 10, 2021
                        </div>
                        <div class="post-content">
                          Pewnie nie każdy z was pomyślał, że da się wyprać nastopnice schodowe. Da się i to całkiem sprawnie, nawet bez odklejania się od schodów. Ten przypadek cię zaciekawi :) Zapraszam!
                        </div>
                    </div>
                </a>
            </article>

            <article class="article-container">
                <a href="{{ route('casestudy_13') }}">
                    <div class="blog-image-wrapper">
                        <img loading="lazy" src="{{ URL::asset('images/casestudy/13/1.jpg') }}" alt="Narożnik w kształcie U"/>
                    </div>
                    <div class="article-content-box">
                        <div class="post-title">
                            <h2>Czyszczenie tapicerki narożnika z plam, pranie tapicerki meblowej - Karcher - Rydzyna, Leszno</h2>
                        </div>
                        <div class="post-publised-date">
                            Cze 15, 2021
                        </div>
                        <div class="post-content">
                        Niektóre meble mają zabrudzenia tylko w niektórych miejscach a ogólnie są czyste. Bywa jednak, że i to kuje w oczy i chce się to jednak odświeżyć. Usuwanie plam z potu - Zapraszam!
                        </div>
                    </div>
                </a>
            </article>

            <article class="article-container">
                <a href="{{ route('casestudy_14') }}">
                    <div class="blog-image-wrapper">
                        <img loading="lazy" src="{{ URL::asset('images/casestudy/14/7.jpg') }}" alt="Moduł narożnika"/>
                    </div>
                    <div class="article-content-box">
                        <div class="post-title">
                            <h2>Pranie, mycie tapicerki meblowej - Narożnik po remoncie - Usługi Karcher - Śrem</h2>
                        </div>
                        <div class="post-publised-date">
                            Cze 21, 2021
                        </div>
                        <div class="post-content">
                            Zostałem wezwany, żeby finalnie zakończyć remont dużego pokoju a mianowicie doprać przykryty folią narożnik Karcherem a potem pomóc go złożyć :)
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