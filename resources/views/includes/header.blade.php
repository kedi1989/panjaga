<header>

        <div class="mobile-menu">
            <div class="menu-box">
                <a class="nav-trigger menu-trigger" href="#"><span></span></a>
                <div class="mobile-logo">
                <a href="/">
                    <img loading="lazy" src="{{ URL::asset('images/logo/logomobile.jpg') }}" alt="PanJaga.pl Logo">
                </a>
            </div>
            <div class="phone-contact-mobile"><a href="tel:790462146"><i class="fas fa-mobile-alt"></i></a></div>
            </div>
            <div class="menu-list-container">
            <div class="content-container">
                <ul class="menu-list">
                    <li><a href="{{ route('home') }}">STRONA GŁÓWNA</a></li>
                    <li id="toogle-submenu-sitemenu"><a href="#">OFERTA</a></li>
                    <li class="submenu-underlist">
                        <ul class="menu-sub-list">
                            <li><a href="{{ route('pranie-tapicerki-meblowej') }}">Pranie Tapicerki Meblowej</a></li>
                            <li><a href="{{ route('pranie-tapicerki-samochodowej') }}">Pranie Tapicerki Samochodowej</a></li>
                            <li><a href="{{ route('pranie-dywanow-wykladzin') }}">Pranie Dywanów i Wykładzin</a></li>       
                        </ul>
                    </li>
                    <li><a href="{{ route('cennik') }}">CENNIK</a></li>
                    <li><a href="{{ route('realizacje') }}">REALIZACJE</a></li>
                    <li><a href="{{ route('casestudy') }}">CASE STUDY</a></li>
                    <li><a href="{{ route('blog') }}">BLOG</a></li>
                    <li><a href="{{ route('faq') }}">FAQ</a></li>
                    <li><a href="{{ route('o-nas') }}">O NAS</a></li>
                    <li><a href="{{ route('kontakt') }}">KONTAKT</a></li>
                </ul>
                </div>
            </div>
        </div>

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
                        <div class="menu__item"><a href="{{ route('home') }}">STRONA GŁÓWNA</a></div>
                        <div class="menu__item dropdown-hover"><a href="{{ route('offer') }}">OFERTA</a>
                        <div class="dropdown-content">
                            <a href="{{ route('pranie-tapicerki-meblowej') }}">Pranie Tapicerki Meblowej</a>
                            <a href="{{ route('pranie-tapicerki-samochodowej') }}">Pranie Tapicerki Samochodowej</a>
                            <a href="{{ route('pranie-dywanow-wykladzin') }}">Pranie Dywanów i Wykładzin</a>
                            </div>
                        </div>
                        <div class="menu__item"><a href="{{ route('cennik') }}">CENNIK</a></div>
                        <div class="menu__item"><a href="{{ route('realizacje') }}">REALIZACJE</a></div>
                        <div class="menu__item"><a href="{{ route('casestudy') }}">CASE STUDY</a></div>
                        <div class="menu__item"><a href="{{ route('blog') }}">BLOG</a></div>
                        <div class="menu__item"><a href="{{ route('faq') }}">FAQ</a></div>
                        <div class="menu__item"><a href="{{ route('o-nas') }}">O NAS</a></div>
                        <div class="menu__item"><a href="{{ route('kontakt') }}">KONTAKT</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<script type="text/javascript">
    var triggerNav = document.getElementsByClassName("nav-trigger")[0],
    body = document.getElementsByTagName("body")[0],
    overlaylayer = document.querySelector(".overlaylayer");

    triggerNav.addEventListener("click", toggleNavigation);
    overlaylayer.addEventListener("click", toggleNavigation);

    function toggleNavigation(event) {
        event.preventDefault();
        body.classList.toggle("nav-open");
        $(".closeEm").toggle();
    
    }
    
    document.addEventListener('keyup', function(event) {
        if (event.keyCode == 27) {
            body.classList.remove("nav-open");
        }
    });

</script>
<script>$('#toogle-submenu-sitemenu').click(function(){$(this).parent().find('ul').slideToggle();});</script>