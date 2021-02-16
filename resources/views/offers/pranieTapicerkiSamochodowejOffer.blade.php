@extends('layouts.master')
        @section('title', 'PanJaga.pl - Oferta - Pranie tapicerki samochodowej')
        @section('description', 'Wypierzemy twoje fotele samochodowe! Sprawdź naszą ofertę prania tapicerki samochodowej. Usuwanie roztoczy, plam i zarazków, świeży zapach auta- Pomożemy ci!')
        @section('keywords', 'Pranie foteli samochodowych, pranie tapicerki samochodowej, czyszczenie foteli auta, czyszczenie samochodu, pranie karcher, usługi czyszczenia samochodu, odplamianie, usuwanie roztoczy')

@section('content')

        <div class="offer-banner-commercial car-seat-textile-cleaning-background box-shadow">
          <div class="description-box">
            <h1>Pranie tapicerki samochodowej</h1>
            <div class="description-banner-body">Metodą ekstrakcyjną</div>
          </div>
        </div>

        <div class="content-container">
        @include('includes.components.covid19Info') 
          <div class="single-offer-container">

          <div class="other-offers-container">

            <!-- <div class="other-offers-box">
              <h4>OFERTA</h4>
              <ul>
                <li class="active"><a href="#">Pranie tapicerki samochodowej</a></li>

                <li><a href="#">Pranie wykładzin i dywanów</a></li>

                <li><a href="#">Ozonowanie</a></li>

                <li><a href="#">Pranie materacy</a></li>
              </ul>
            </div> -->

            </div>

            <div class="offer-box">
                <p class="padding-top-0">Niedługo wiosna, a zatem… czy chciałbyś ujrzeć wnętrze swojego auta w dokładnie takim stanie, w jakim opuściło salon?</p>
                <p>Dzięki naszej profesjonalnej usłudze <strong>czyszczenia tapicerki samochodowej</strong> to możliwe. Od lat przywracamy <strong>tapicerce samochodowej</strong> jej fabryczną czystość, miękkość i zapach.</p>
              

                <h2><strong>Czyszczenie tapicerki samochodowej. Jak działamy?</strong></h2>
                
                <p>Przy użyciu <strong>profesjonalnego odkurzacza ekstrakcyjnego Karcher Puzzi</strong>, <strong>czyścimy tapicerkę</strong> odpowiednio przygotowaną mieszanką wody i specjalnego płynu czyszczącego- delikatnego dla materiału, a jednocześnie szalenie skutecznego. Następnie, zostawiamy fotele na kilka minut „sam na sam” ze <strong>środkiem czyszczącym</strong>, po czym ściągamy wodę z powrotem do odkurzacza. </p>
                
                  <div class="offer-images-container">
                    <div class="offer-images-box">
                      <img class="box-shadow" loading="lazy" src="../images/gallery/Samochody/4.jpg" alt="Pranie podłogi w FORD GALAXY">
                      <img class="box-shadow" loading="lazy" src="../images/gallery/Samochody/5.jpg" alt="Pranie i czyszczenie kabiny ciężarówki (czasem trzeba sobie pomóc szczotką na wiertarce :) )">
                      <div class="more-realizations-box">
                      <a href="{{ route('realizacje') }}">
                        GALERIA
                      </a>
                    </div>
                    </div>
                    <div class="offer-images-info">
                      <p>1. Pranie podłogi w FORD GALAXY</p>
                      <p>2. Pranie i czyszczenie kabiny ciężarówki (czasem trzeba sobie pomóc szczotką na wiertarce :) )</p>
                    </div>
                    
                  </div>

                <h2><strong>Dlaczego należy unikać samodzielnego prania tapicerki auta?</strong></h2>

                <p>Głównym zagrożeniem związanym z samodzielną próbą <strong>wyczyszczenia tapicerki samochodowej</strong>, jest oczywiście jej <strong>nadmierne przemoczenie</strong>. Wówczas, fotele schną nawet kilka dni, a w <strong>gąbce tapicerskiej</strong> zaczynają pojawiać się bakterie, które finalnie mogą doprowadzić do degradacji stanu wizualnego foteli. Ponadto, w przypadku użycia zwykłych płynów dostępnych na sklepowej półce, zamiast odpowiednio przygotowanych <strong>profesjonalnych detergentów</strong>, z reguły <strong>efekty czyszczenia</strong> pozostają wiele do życzenia.</p>

                <h2><strong>Czyszczenie auta. Co jeszcze możemy dla Ciebie zrobić?</strong></h2> 
                
                <p>Oprócz <strong>prania tapicerki</strong>, klienci z reguły powierzają nam również zadbanie o inne elementy samochodu- chociażby jego <strong>podłogę</strong>, <strong>bagażnik</strong> czy <strong>boczki</strong>. Gruntownie odkurzymy Twoje ulubione auto, zadbamy o wewnętrzne plastikowe elementy, a także dokładnie umyjemy szyby od środka. To wszystko sprawi, że poczujesz się w swoim aucie dokładnie tak, jakby dopiero opuściło salon samochodowy.</p>

                  <div class="offer-images-container">
                    <div class="offer-images-box">
                      <img class="box-shadow" loading="lazy" src="../images/gallery/Samochody/8.jpg" alt="Czyszczenie tapicerki na ściance i pranie materaca w ciężarówce VOLVO">
                      <img class="box-shadow" loading="lazy" src="../images/gallery/Samochody/13.jpg" alt="Czyszczenie kabiny i pranie materaca leżanki w ciężarówce MAN">
                      <div class="more-realizations-box">
                      <a href="{{ route('realizacje') }}">
                        GALERIA
                      </a>
                    </div>
                    </div>
                    <div class="offer-images-info">
                      <p>1. Czyszczenie tapicerki na ściance i pranie materaca w ciężarówce VOLVO</p>
                      <p>2. Czyszczenie kabiny i pranie materaca leżanki w ciężarówce MAN</p>
                    </div>
                  </div>
                
                <h2><strong>Co jeszcze można zyskać dzięki całościowemu czyszczeniu auta?</strong></h2>

                <p>Dzięki naszym profesjonalnym rozwiązaniom masz gwarancję, że każda powierzchnia będzie gruntownie wyczyszczona i odświeżona, a samochód nabierze zupełnie nowego blasku. Zmieni się także jego zapach- będzie on przyjemny zarówno dla nas, jak i dla pasażerów. Szczególnie <strong>alergicy</strong> i osoby wrażliwe na <strong>roztocza</strong> z pewnością docenią świeże powietrze i <strong>przyjemny zapach</strong> w Twoim samochodzie. </p>

                

                  <div class="offer-images-container">
                    <div class="offer-images-box">
                      <img class="box-shadow" loading="lazy" src="../images/gallery/Samochody/7.jpg" alt="Wyczyszczony kokpit MAN">
                      <img class="box-shadow" loading="lazy" src="../images/gallery/Samochody/12.jpg" alt="Wyprany metodą ekstrakcji fotel w ciężarówce MAN">
                      <div class="more-realizations-box">
                      <a href="{{ route('realizacje') }}">
                        GALERIA
                      </a>
                    </div>
                    </div>
                    <div class="offer-images-info">
                      <p>1. Wyczyszczony kokpit MAN</p>
                      <p>2. Wyprany metodą ekstrakcji fotel w ciężarówce MAN</p>
                    </div>
                    
                  </div>

                <h2><strong>Czyszczenie tapicerki samochodowej- jakie auta obsługujemy i jak się z nami skontaktować?</strong></h2>

                <p>Zajmujemy się zarówno <strong>samochodami osobowymi</strong>, <strong>busami</strong>, jak <strong>samochodami ciężarowymi</strong>. Wystarczy do nas zadzwonić- dla <strong>stuprocentowej wygody</strong>, zajmujemy się autami naszych klientów bezpośrednio w ich miejscu zamieszkania. Wymagany jest jedynie dostęp do prądu i wody.</p>

                <p>Jeżeli zatem nasza propozycja do Ciebie przemawia- skontaktuj się z nami pod numerem: 790-462-146, a my zadbamy o <strong>czystość Twojego samochodu</strong>. </p>

                  <div class="offer-images-container">
                    <div class="offer-images-box">
                      <img class="box-shadow" loading="lazy" src="../images/gallery/Samochody/3.jpg" alt="Wyprany fotel z siedziskiem dziecięcym w FORD GALAXY">
                      <img class="box-shadow" loading="lazy" src="../images/gallery/Samochody/1.jpg" alt="Wyprany fotel pasażera w FORD GALAXY">
                      <div class="more-realizations-box">
                      <a href="{{ route('realizacje') }}">
                        GALERIA
                      </a>
                    </div>
                    </div>
                    <div class="offer-images-info">
                      <p>1. Wyprany fotel z siedziskiem dziecięcym w FORD GALAXY</p>
                      <p>2. Wyprany fotel pasażera w FORD GALAXY</p>
                    </div>
                    
                  </div>

                <h2><strong>Pranie tapicerki samochodowej - Cennik</strong></h2>

                <div class="short-prices-box">
                  <p>Cennik skrócony (<a href="/cennik">Pełny cennik naszych usług</a>)</p>
                  <ul>
                    <li>- Pranie foteli i tylniej kanapy <strong>od 120 zł</strong></li>
                    <li>- Ozonowanie samochodu <strong>od 50 zł</strong></li>
                    <li>- Pranie i czyszczenie całego samochodu <strong>od 150 zł</strong></li>
                    <li>- Pranie bagażnika <strong>od 40 zł</strong></li>
                    <li>- Pranie podłogi samochodu <strong>od 60 zł</strong></li>
                    <li>- Czyszczenie i pranie kabiny ciężarówki <strong>od 350 zł</strong></li>
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