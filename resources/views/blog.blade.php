@extends('layouts.master')
        @section('title', 'PanJaga.pl - Blog - Dowiedz się więcej o usuwaniu plam i praniu tapicerki !')
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
                            <h3>Czy da się wyprać meble ? Czyli pranie mebli tapicerowanych od środka !</h3>
                        </div>
                        <div class="post-publised-date">
                            Lut 9, 2021
                        </div>
                        <div class="post-content">
                        <p>Czy da się wyprać meble ? Takie pytanie zadaje sobie pewnie wielu z was widząc stare plamy na kanapie czy też ulubionym fotelu- owszem da się! Wielu z was również widzi taką możliwość pewnie pierwszy raz. Jak prać tapicerkę meblową ? Ile schnie tapicerka po praniu ? Jakich środków do prania użyć ?</p>
                        </div>
                    </div>
                </a>
            </article>

            <!-- <article class="article-container">
                <a href="">
                    <div class="blog-image-wrapper">
                        <img loading="lazy" src="{{ URL::asset('images/blog/articles/2/mattress.jpg') }}"/>
                    </div>
                    <div class="article-content-box">
                        <div class="post-title">
                            <h3>Jak prać materac ? Czemu powinniśmy to robić ? Przeczytaj</h3>
                        </div>
                        <div class="post-publised-date">
                            Lut 17, 2021
                        </div>
                        <div class="post-content">
                            Wielu z nas kładąc się codziennie spać nie zastanawia się nad tym czy materac się w ogóle pierze i czy da się go wyprać. Kupujemy go a następnie użytkujemy przez lata nie wiedząc, że to właśnie on może być powodem naszej alergii lub złej jakości snu. Pomóż sobie i swoim bliskim i dowiedz się więcej...
                        </div>
                    </div>
                </a>
            </article> -->

            <article class="article-container">
                <a href="{{ route('article_3') }}">
                    <div class="blog-image-wrapper">
                        <img loading="lazy" src="{{ URL::asset('images/blog/articles/3/carseats.jpg') }}" alt="siedzenia samochodowe"/>
                    </div>
                    <div class="article-content-box">
                        <div class="post-title">
                            <h3>Jak prać tapicerkę samochodową ? Czyszczenie tapicerki samochodowej w pigułce.</h3>
                        </div>
                        <div class="post-publised-date">
                            Lut 18, 2021
                        </div>
                        <div class="post-content">
                          Dla niektórych samochód osobowy, kabina ciężarówki są drugim domem a w domu powinno być czysto. Chcesz dowiedzieć się jak wyprać samochód ? Jak wyprać fotele samochodowe ? Ile kosztuje pranie tapicerki samochodowej ? Jak często prać wnętrze auta ? Zapraszamy do lektury ...
                    </div>
                </a>
            </article>

            <article class="article-container">
                <a href="">
                    <div class="blog-image-wrapper">
                        <img loading="lazy" src="{{ URL::asset('images/blog/articles/4/stain.jpg') }}"/>
                    </div>
                    <div class="article-content-box">
                        <div class="post-title">
                            <h3>Jak usuwać plamy czyli domowe sposoby na usuwanie plam !</h3>
                        </div>
                        <div class="post-publised-date">
                            Lut 21, 2021
                        </div>
                        <div class="post-content">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris scelerisque dignissim enim eget malesuada. Nunc non tincidunt nulla, vitae sodales lorem. Aenean ac aliquet tortor. Quisque a venenatis sapien. Etiam vulputate arcu ligula, et tincidunt tortor pharetra ut. Nullam tristique orci in libero sodales vehicula nec et eros. Quisque molestie bibendum ultrices.
                    </div>
                </a>
            </article>

            <article class="article-container">
                <a href="">
                    <div class="blog-image-wrapper">
                        <img loading="lazy" src="{{ URL::asset('images/blog/articles/5/stroller.jpg') }}"/>
                    </div>
                    <div class="article-content-box">
                        <div class="post-title">
                            <h3>Czyszczenie wózka dziecięcego</h3>
                        </div>
                        <div class="post-publised-date">
                            Lut 21, 2021
                        </div>
                        <div class="post-content">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris scelerisque dignissim enim eget malesuada. Nunc non tincidunt nulla, vitae sodales lorem. Aenean ac aliquet tortor. Quisque a venenatis sapien. Etiam vulputate arcu ligula, et tincidunt tortor pharetra ut. Nullam tristique orci in libero sodales vehicula nec et eros. Quisque molestie bibendum ultrices.
                    </div>
                </a>
            </article>

            <article class="article-container">
                <a href="">
                    <div class="blog-image-wrapper">
                        <img loading="lazy" src="{{ URL::asset('images/blog/articles/6/carpet.jpg') }}"/>
                    </div>
                    <div class="article-content-box">
                        <div class="post-title">
                            <h3>Pranie dywanów i wykładzin. Domowe sposoby i nie tylko !</h3>
                        </div>
                        <div class="post-publised-date">
                            Lut 21, 2021
                        </div>
                        <div class="post-content">
                        Chodząc po nich codziennie, rzadko zastanawiamy się co tak naprawdę się w nich znajduje. Roztocza, wirusy, bakterie, błoto z butów... O ile ubrania pierzemy kilka razy w tygodniu to dywany i wykładziny o wiele rzadziej. Jak odświeżyć dywan ? Jakie są domowe sposoby na czyszczenie dywanu ? O tym w dalszej części artykułu.
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