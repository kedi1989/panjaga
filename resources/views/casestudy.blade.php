@extends('layouts.master')
        @section('title', 'PanJaga.pl - Blog - Dowiedz się więcej o usuwaniu plam, praniu tapicerki, dywanów i wykładzin ! Pranie i czyszczenie Karcher. Mobilna myjnia.')
        @section('description', 'Dowiedz się więcej o praniu tapicerek, usuwaniu plam i innych. Zapraszamy na naszego bloga !')
        @section('keywords', 'pranie tapicerki, usuwanie plam, wywabianie zapachów, pranie tapicerki samochodowej, pranie tapicerki materiałowej, czyszczenie kanapy, pranie materacy')

@section('content')

        
        <div class="content-container">
            <h1 class="big-header"><span class="header-gap"></span>BLOG</h1>
        </div>

        <div class="content-container">
        <div class="blog-articles-list-container">
            
        <article class="article-container">
            <a href="{{ route('article_1') }}" >
                <div class="blog-image-wrapper">
                    <img loading="lazy" src="{{ URL::asset('images/blog/articles/1/furniture.jpg') }}" alt="meble tapicerowane"/>
                </div>
                <div class="article-content-box">
                    <div class="post-title">
                        <h3>Mocno zabrudzony narożnik przez dzieci :) Zobacz jak temu zaradziliśmy !</h3>
                    </div>
                    <div class="post-publised-date">
                        Lut 9, 2021
                    </div>
                    <div class="post-content">
                    <p>Naszymi klientami najczęściej są rodziny z dziećmi w szczególności tymi mniejszymi :) A dzieci jak to dzieci zawsze coś rozleją. Zobacz jak sobie poradziliśmy z tym przypadkiem !</p>
                    </div>
                </div>
            </a>
        </article>

        <article class="article-container">
            <a href="{{ route('article_3') }}">
                <div class="blog-image-wrapper">
                    <img loading="lazy" src="{{ URL::asset('images/blog/articles/3/carseats.jpg') }}" alt="siedzenia samochodowe"/>
                </div>
                <div class="article-content-box">
                    <div class="post-title">
                        <h3>Cieżkie do wyprania plamy od potu na fotelach. Udało się! Sprawdź!</h3>
                    </div>
                    <div class="post-publised-date">
                        Lut 18, 2021
                    </div>
                    <div class="post-content">
                        Okazuje się, że jednymi z trudniejszych plam mogą być plamy od potu na fotelach. Temat był dość ciężki ale udało się uzyskać zadowalający efekt...
                    </div>
                </div>
            </a>
        </article>

        <article class="article-container">
            <a href="{{ route('article_6') }}">
                <div class="blog-image-wrapper">
                    <img loading="lazy" src="{{ URL::asset('images/blog/articles/6/carpet.jpg') }}" alt="wykładzina w biurze"/>
                </div>
                <div class="article-content-box">
                    <div class="post-title">
                        <h3>Pranie i dezynfekcja kilkuletniego materaca</h3>
                    </div>
                    <div class="post-publised-date">
                        Lut 22, 2021
                    </div>
                    <div class="post-content">
                        Wieloletnie materace mają to do siebie, że coś w nich żyje :) szczególnie jeśli na materacu śpią dzieci. Wylany kubek herbaty ze śniadania, plamy po moczu...
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