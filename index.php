<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <title> Wyrski Serwis Pielgrzymkowy - Pielgrzymka Wyry-Częstochowa </title>

    <link rel="stylesheet" type="text/css" href="morph/css/component.css" />
    <link rel="stylesheet" type="text/css" href="morph/css/content.css" />
    <link rel="stylesheet" href=" style.css " type="text/css">
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="morph/js/modernizr.custom.js"></script>
    <script type="text/javascript">
        function listenWidth(){
          $(".full-width").css("min-height", $(window).height()+"px");
      }
      $(document).ready(function() {
        listenWidth();
        $(document).load($(window).bind("resize", listenWidth));
    });


  </script>
  <!-- start Mixpanel --><script type="text/javascript">(function(f,b){if(!b.__SV){var a,e,i,g;window.mixpanel=b;b._i=[];b.init=function(a,e,d){function f(b,h){var a=h.split(".");2==a.length&&(b=b[a[0]],h=a[1]);b[h]=function(){b.push([h].concat(Array.prototype.slice.call(arguments,0)))}}var c=b;"undefined"!==typeof d?c=b[d]=[]:d="mixpanel";c.people=c.people||[];c.toString=function(b){var a="mixpanel";"mixpanel"!==d&&(a+="."+d);b||(a+=" (stub)");return a};c.people.toString=function(){return c.toString(1)+".people (stub)"};i="disable track track_pageview track_links track_forms register register_once alias unregister identify name_tag set_config people.set people.set_once people.increment people.append people.track_charge people.clear_charges people.delete_user".split(" ");
for(g=0;g<i.length;g++)f(c,i[g]);b._i.push([a,e,d])};b.__SV=1.2;a=f.createElement("script");a.type="text/javascript";a.async=!0;a.src="//cdn.mxpnl.com/libs/mixpanel-2.2.min.js";e=f.getElementsByTagName("script")[0];e.parentNode.insertBefore(a,e)}})(document,window.mixpanel||[]);
mixpanel.init("556ceafeae422306cefcda3fe3defa0c");</script><!-- end Mixpanel -->
</head>
<body>

    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/pl_PL/sdk.js#xfbml=1&appId=628650527163647&version=v2.0";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <div class="full-width">

        <img src="logo2019.png" style="width: 250px;" />
        <h1>27 PIESZA PIELGRZYMKA<br>WYRY/CZĘSTOCHOWA</h1>
        <h2>14-17 SIERPNIA 2019</h2>

        <div class="morph-button morph-button-overlay morph-button-fixed">
            <button type="button">ZAPISZ SIĘ</button>
            <div class="morph-content" style="left: 59px; top: 770.234375px;">
                <div>
                    <div class="content-style-overlay">
                        <span class="icon icon-close">Close the overlay</span>
                        <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSeMzrHyUng0wsuDInApmlcp4j7E6yaaSA5u7uxMfg3pPfYj3Q/viewform?embedded=true" width="760" height="500" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="top_menu">
        <div class="links">
            <?php include('menu_top.php'); ?>
        </div>
    </div>
    <!-- <div class="logo"><img src="logo.png" /></div> -->
    <div class="content">
        <div class="menu">
            <div class="menu_top">
                <div>Menu</div>
            </div>
            <?php include('menu_left.php'); ?>
        </div>
        <div class="text">

            <div class="header" style="width:100%; background:#ffd42a;">
                <div>Na bieżąco</div>
            </div>
            <div class="p">
                <div class="fb-like-box" data-href="https://www.facebook.com/pielgrzymka.wyry" data-width="600" data-height="1200" data-colorscheme="light" data-show-faces="false" data-header="false" data-stream="true" data-show-border="false"></div>
            </div>


        </div>

    </div>
    <div class="bottom">
        <div class="bottom_top">
            <div class="gray">
                <div class="gray_box"></div>
            </div>
        </div>
        <?php include('bottom.php'); ?>
    </div>

<script src="morph/js/classie.js"></script>
<script src="morph/js/uiMorphingButton_fixed.js"></script>
<script>
    (function() {
        var docElem = window.document.documentElement, didScroll, scrollPosition;

    // trick to prevent scrolling when opening/closing button
    function noScrollFn() {
        window.scrollTo( scrollPosition ? scrollPosition.x : 0, scrollPosition ? scrollPosition.y : 0 );
    }

    function noScroll() {
        window.removeEventListener( 'scroll', scrollHandler );
        window.addEventListener( 'scroll', noScrollFn );
    }

    function scrollFn() {
        window.addEventListener( 'scroll', scrollHandler );
    }

    function canScroll() {
        window.removeEventListener( 'scroll', noScrollFn );
        scrollFn();
    }

    function scrollHandler() {
        if( !didScroll ) {
            didScroll = true;
            setTimeout( function() { scrollPage(); }, 60 );
        }
    };

    function scrollPage() {
        scrollPosition = { x : window.pageXOffset || docElem.scrollLeft, y : window.pageYOffset || docElem.scrollTop };
        didScroll = false;
    };

    scrollFn();

    var el = document.querySelector( '.morph-button' );

    new UIMorphingButton( el, {
        closeEl : '.icon-close',
        onBeforeOpen : function() {
            // don't allow to scroll
            noScroll();
        },
        onAfterOpen : function() {
            // can scroll again
            canScroll();
            // add class "noscroll" to body
            classie.addClass( document.body, 'noscroll' );
            // add scroll class to main el
            classie.addClass( el, 'scroll' );
        },
        onBeforeClose : function() {
            // remove class "noscroll" to body
            classie.removeClass( document.body, 'noscroll' );
            // remove scroll class from main el
            classie.removeClass( el, 'scroll' );
            // don't allow to scroll
            noScroll();
        },
        onAfterClose : function() {
            // can scroll again
            canScroll();
        }
    } );
    })();
</script>
<script type="text/javascript" charset="utf-8" async defer>
    mixpanel.track(
        "Clicked Ad",
        { "Banner Color": "Blue" }
    );
</script>
</body>
</html>
