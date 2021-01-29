<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        @include('includes.head')
    <body>
        <div class="main-page-container">
        @include('includes.header')
        <div class="main-container">
        
        <div class="content-container">
            <h2 class="big-header"><span class="header-gap"></span>KONTAKT</h2>
        </div>

        <div class="contact-container">
            <div class="contact-box">
                <p>SKONTAKTUJ SIĘ Z NAMI:</p>
                <p>TEL: 790-462-146</p>
                <p>FACEBOOK: <a href="https://www.facebook.com/PANJAGAKARCHER">https://www.facebook.com/PANJAGAKARCHER</a></p>
            </div>
        </div>

        </div>
        </div>
            @include('includes.footer')
    </body>
</html>