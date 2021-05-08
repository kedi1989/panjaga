<footer>
    <div class="top-footer-content">
        <div class="footer-logo-img">
            <a href="/">
                <img loading="lazy" src="{{ URL::asset('images/logo/logo.png') }}" alt="PanJaga.pl Logo" />
            </a>
        </div>
        <div class="shortcut-menu-footer">
            <div class="shortcut-footer-text">Na skróty:</div>
            <div class="footer-menu-box">
                <div class="menu__list navbar">
                    <div class="menu__item"><a href="{{ route('home') }}">Strona Główna</a></div>
                    <div class="menu__item"><a href="{{ route('offer') }}">Oferta</a> </div>
                    <div class="menu__item"><a href="{{ route('cennik') }}">Cennik</a></div>
                    <div class="menu__item"><a href="{{ route('realizacje') }}">Realizacje</a></div>
                    <div class="menu__item"><a href="{{ route('casestudy') }}">Case Study</a></div>
                    <div class="menu__item"><a href="{{ route('blog') }}">Blog</a></div>
                    <div class="menu__item"><a href="{{ route('faq') }}">Faq</a></div>
                    <div class="menu__item"><a href="{{ route('o-nas') }}">O nas</a></div>
                    <div class="menu__item"><a href="{{ route('kontakt') }}">Kontakt</a></div>
                </div>
            </div>
        </div>
        <div class="contact-footer">
            <div class="shortcut-footer-text">Skontaktuj się:</div>
            <span class="facebook-contact fb-btn"><a href="https://www.facebook.com/PANJAGAKARCHER"></a></span>
            <div class="phone-contact"><i class="fas fa-mobile-alt"></i>790-462-146</div>
        </div>
    </div>

    <div class="bottom-footer-content">
        <div class="footer-cities">
            Działamy na terenie miast: Kościan, Czacz, Śmigiel, Wielichowo, Lipno, Wilkowice, Włoszakowice, Przemęt, Grodzisk Wielkopolski, Kamieniec, Czempiń, Pecna, Krzywiń, Osieczna, Bucz, Stare Bojanowo, Jerka, Leszno, Lasocice, Święciechowa, Śrem, Nochowo, Manieczki, Kórnik, Mosina, Rogalin, Konstantynowo, Stęszew, Strykowo, Konarzewo, Czapury, Puszczykowo, Poznań, Boszkowo-Letnisko, Luboń, Komorniki, Zaniemyśl,    
        </div>

        <div class="footer-copyrights">
            COPYRIGHT © {{ now()->year }} Usługi Prania i Czyszczenia Specjalistycznego <a href="/">PANJAGA.PL</a>
        </div>

    </div>

    
</footer>