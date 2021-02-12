<header>
    <div class="content-container">
        <div class="menu">
            <div class="logo">
                <a href="/">
                    <img loading="lazy" src="{{ URL::asset('images/logo/logo.png') }}" alt="PanJaga.pl Logo" />
                </a>
            </div>
            <div class="menu-nav-box">
                <div class="top-nav">
                    <div class="contacts-box">
                            <span class="facebook-contact fb-btn"><a href="https://www.facebook.com/PANJAGAKARCHER"></a></span>
                        <div class="phone-contact"><i class="fas fa-mobile-alt"></i>Zadzwoń: 790-462-146</div>
                    </div>
                </div>
                <div class="bottom-nav">
                    <div class="menu__list navbar">
                        <div class="menu__item"><a href="/">STRONA GŁÓWNA</a></div>
                        <div class="menu__item dropdown-hover"><a href="#">OFERTA</a>
                        <div class="dropdown-content">
                            <a href="{{ route('pranie-tapicerki-meblowej') }}">Pranie Tapicerki Meblowej</a>
                            <a href="{{ route('pranie-tapicerki-samochodowej') }}">Pranie Tapicerki Samochodowej</a>
                            <a href="{{ route('pranie-dywanow-wykladzin') }}">Pranie Dywanów i Wykładzin</a>
                            </div>
                        </div>
                        <div class="menu__item"><a href="/cennik">CENNIK</a></div>
                        <div class="menu__item"><a href="/galeria">REALIZACJE</a></div>
                        <div class="menu__item"><a href="/najczesciej-zadawane-pytania">FAQ</a></div>
                        <div class="menu__item"><a href="/o-nas">O NAS</a></div>
                        <div class="menu__item"><a href="/kontakt">KONTAKT</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>