<!DOCTYPE html>
<html lang="pl">
        @include('includes.head')
    <body>
    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
      <script>
      setTimeout(function(){ 
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v10.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/pl_PL/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    }, 7000);
      </script>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution="setup_tool"
        page_id="100845578476654">
      </div>
    <div class="main-page-container">
    @include('includes.header')
    <div class="main-container">
        @yield('content')
    </div>
    </div>
        @include('includes.footer')

        <script>
            $(function(){

    $('#face-slider').hover(

        function(){ $('#face-slider').stop().animate({"left": "0"}, 1000); } ,

        function(){ $('#face-slider').stop().animate({"left": "-302px"}, 1000); }

    );

});

        </script>

        <div id="face-slider">
            <div class="tab"></div>
                <div id="face-code">
                    <div class="fb-page fb_iframe_widget" data-href="https://www.facebook.com/PANJAGAKARCHER" data-tabs="timeline" data-width="500" data-height="602" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=126463334741629&amp;container_width=282&amp;height=602&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%PANJAGAKARCHER&amp;locale=pl_PL&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;tabs=timeline&amp;width=500"><span style="vertical-align: bottom; width: 282px; height: 602px;"><iframe name="f4b815acec10a8" width="500px" height="602px" data-testid="fb:page Facebook Social Plugin" title="fb:page Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://web.facebook.com/v2.10/plugins/page.php?adapt_container_width=true&amp;app_id=126463334741629&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df13821b3d8ae4ac%26domain%3Dwww.panjaga.pl%26origin%3Dhttps%253A%252F%252Fwww.panjaga.pl%252Ff846064896e31c%26relation%3Dparent.parent&amp;container_width=282&amp;height=602&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2FPANJAGAKARCHER&amp;locale=pl_PL&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;tabs=timeline&amp;width=500" style="border: none; visibility: visible; width: 282px; height: 602px;" class=""></iframe></span></div> 
                </div>
        </div>
    </body>
</html>