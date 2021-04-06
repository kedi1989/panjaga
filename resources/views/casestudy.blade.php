@extends('layouts.master')
        @section('title', 'PanJaga.pl - CaseStudy - Studium Przypadków Naszej Pracy')
        @section('description', 'Jesteś ciekaw jak wykonuje swoje pracę ? Zajrzyj do mojego CaseStudy i zobacz jak odbywa się pranie tapicerek.')
        @section('keywords', 'pranie tapicerki meblowej śrem, pranie tapicerki, czyszczenie narożnika, pranie mebli ')
       
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