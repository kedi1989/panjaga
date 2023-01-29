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
                            <h2>Czy da się wyprać meble ? Czyli pranie mebli tapicerowanych od środka !</h2>
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

            <article class="article-container">
                <a href="{{ route('article_3') }}">
                    <div class="blog-image-wrapper">
                        <img loading="lazy" src="{{ URL::asset('images/blog/articles/3/carseats.jpg') }}" alt="siedzenia samochodowe"/>
                    </div>
                    <div class="article-content-box">
                        <div class="post-title">
                            <h2>Jak prać tapicerkę samochodową ? Czyszczenie tapicerki samochodowej w pigułce.</h2>
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
            <a href="{{ route('article_6') }}">
                <div class="blog-image-wrapper">
                    <img loading="lazy" src="{{ URL::asset('images/blog/articles/6/carpet.jpg') }}" alt="wykładzina w biurze"/>
                </div>
                <div class="article-content-box">
                    <div class="post-title">
                        <h2>Pranie dywanów i wykładzin. Domowe sposoby i nie tylko !</h2>
                    </div>
                    <div class="post-publised-date">
                        Lut 22, 2021
                    </div>
                    <div class="post-content">
                        Chodząc po nich codziennie, rzadko zastanawiamy się co tak naprawdę się w nich znajduje. Roztocza, wirusy, bakterie, błoto z butów... O ile ubrania, pierzemy kilka razy w tygodniu, to dywany i wykładziny o wiele rzadziej. Jak odświeżyć dywan ? Jakie są domowe sposoby na czyszczenie dywanu ? O tym, w dalszej części artykułu. 
                    </div>
                </div>
                </a>
            </article>

            <article class="article-container">
            <a href="{{ route('article_7') }}">
                <div class="blog-image-wrapper">
                    <img loading="lazy" src="{{ URL::asset('images/blog/articles/7/facts.jpg') }}" alt="Kolorowe farby"/>
                </div>
                <div class="article-content-box">
                    <div class="post-title">
                        <h2>Pranie i czyszczenie Karcher - Pogromcy mitów</h2>
                    </div>
                    <div class="post-publised-date">
                        Lut 25, 2021
                    </div>
                    <div class="post-content">
                        Wokół prania mebli i ich tapicerek a również prania dywanów i czyszczenia wykładzin np. tzw. Karcherem, krąży wiele mitów. Postaramy się je obalić w tym artykule. Przeczytaj i przekonaj się co możesz zrobić dla swojego domu bez szkody dla swoich mebli i dywanów.
                    </div>
                </div>
                </a>
            </article>

            <article class="article-container">
            <a href="{{ route('article_8') }}">
                <div class="blog-image-wrapper">
                    <img loading="lazy" src="{{ URL::asset('images/blog/articles/8/leszno.jpg') }}" alt="Kolorowe farby"/>
                </div>
                <div class="article-content-box">
                    <div class="post-title">
                        <h2>Pranie i czyszczenie tapicerki mebli, dywanów, wykładzin w Lesznie</h2>
                    </div>
                    <div class="post-publised-date">
                        Lut 26, 2021
                    </div>
                    <div class="post-content">
                    "Czyszczenie kanap Leszno" jest najczęstszym wpisywanym przez naszych klientów hasłem w wyszukiwarce Google. Co kryje się dokładnie pod tym hasłem ? Otóż zazwyczaj chodzi o...
                    </div>
                </div>
                </a>
            </article>

            <article class="article-container">
            <a href="{{ route('article_2') }}">
                <div class="blog-image-wrapper">
                    <img loading="lazy" src="{{ URL::asset('images/blog/articles/2/mattress.jpg') }}"/>
                </div>
                <div class="article-content-box">
                    <div class="post-title">
                        <h2>Jak prać materac ? Czemu powinniśmy to robić ? Przeczytaj</h2>
                    </div>
                    <div class="post-publised-date">
                        Mar 12, 2021
                    </div>
                    <div class="post-content">
                        Wielu z nas kładąc się codziennie spać nie zastanawia się nad tym czy materac się w ogóle pierze i czy da się go wyprać. Kupujemy go a następnie użytkujemy przez lata nie wiedząc, że to właśnie on może być powodem naszej alergii lub złej jakości snu. Pomóż sobie i swoim bliskim i dowiedz się więcej...
                    </div>
                </div>
            </a>
        </article>

        <article class="article-container">
            <a href="{{ route('article_9') }}">
                <div class="blog-image-wrapper">
                    <img loading="lazy" src="{{ URL::asset('images/blog/articles/9/srem.jpg') }}"/>
                </div>
                <div class="article-content-box">
                    <div class="post-title">
                        <h2>Pranie tapicerki meblowej w Śremie</h2>
                    </div>
                    <div class="post-publised-date">
                        Mar 17, 2021
                    </div>
                    <div class="post-content">
                    Pranie tapicerki Śrem to usługa, która skutecznie odciąża domowników, a szczególnie Panie domu, z ich niełatwych obowiązków. Zarówno czyszczenie kanapy, sofy jak i mebli potrafi nastręczyć wiele problemów i sprawić, że cały weekend upłynie pod znakiem prania tapicerki...</p>
                    </div>
                </div>
            </a>
        </article>

        <article class="article-container">
            <a href="{{ route('article_10') }}">
                <div class="blog-image-wrapper">
                    <img loading="lazy" src="{{ URL::asset('images/blog/articles/10/koscian.jpg') }}"/>
                </div>
                <div class="article-content-box">
                    <div class="post-title">
                        <h2>Pranie tapicerki meblowej,czyszczenie mebli w Kościanie</h2>
                    </div>
                    <div class="post-publised-date">
                        Kwi 25, 2021
                    </div>
                    <div class="post-content">
                    <p>Pranie tapicerki Kościan to usługa, która może zdecydowanie usprawnić naszą codzienność i sprawić, że cykliczne porządki w mieszkaniu czy domu będą zdecydowanie łatwiejsze. Każda zapracowana Pani domu doskonale wie, ile zajmuje pranie tapicerki meblowej, czyli głównie sof, kanap, narożników czy puf...</p>
                    </div>
                </div>
            </a>
        </article>

        <article class="article-container">
            <a href="{{ route('article_11') }}">
                <div class="blog-image-wrapper">
                    <img loading="lazy" src="{{ URL::asset('images/blog/articles/10/koscian.jpg') }}"/>
                </div>
                <div class="article-content-box">
                    <div class="post-title">
                        <h2>Pranie tapicerki meblowej i samochodowej w Mosinie</h2>
                    </div>
                    <div class="post-publised-date">
                        Paź 25, 2021
                    </div>
                    <div class="post-content">
                    <p>Każdy z nas ma w swoim domu wiele mebli- puf, sof, narożników czy innych elementów zawierających materace. To samo dotyczy samochodów- siedzenia są wykonane najczęściej z gąbki, która z czasem się po prostu brudzi. I w przypadku zarówno domu, jak i posiadanego auta- raz na jakiś czas warto rozważyć profesjonalne ...</p>
                    </div>
                </div>
            </a>
        </article>

        <article class="article-container">
                <a href="{{ route('article_12') }}" >
                    <div class="blog-image-wrapper">
                        <img loading="lazy" src="{{ URL::asset('images/blog/articles/12/kuchnia.webp') }}" alt="pranie za pomocą pokrywki"/>
                    </div>
                    <div class="article-content-box">
                        <div class="post-title">
                            <h2>Pranie kanapy za pomocą pokrywki, przykrywki od garnka. No nie... nie rób tego. </h2>
                        </div>
                        <div class="post-publised-date">
                            Gru 9, 2021
                        </div>
                        <div class="post-content">
                        <p>Czy da się wyczyścić meble za pomocą pokrywki i tabletki do zmywarki ? No pewnie się da... Czy ktoś jednak pomyślał czemu by tego jednak nie robić ?</p>
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