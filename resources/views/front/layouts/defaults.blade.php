<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta property="og:type" content="website" />
  <title>{{page_title($title) ?? ''}}</title>
  <meta property="og:image" content="{{ URL::asset('assets/images/logo/logo-white.png') }}" />
  @yield('meta')
  <meta name="author" content="Soft-Univers">
  <meta name="robots" content="all">
  <meta name="copyright" content="Church"/>
  
  <link rel="stylesheet" type="text/css" href="{{ asset('front/css/animate.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('front/css/bootstrap.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('front/css/font-awesome.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('front/css/owl.carousel.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('front/css/owl.theme.default.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('front/css/magnific-popup.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('front/css/fonts.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('front/css/reset.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('front/js/plugin/rs_slider/layers.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('front/js/plugin/rs_slider/navigation.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('front/js/plugin/rs_slider/settings.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('front/css/style.css') }}"/>
  <!-- favicon links -->
  <link rel="shortcut icon" type="image/png" href="{{ asset('front/images/header/favicon.png') }}" />
  <script src='../../google_analytics_auto.js'></script></head>
  
</head>
<body>

  {{-- <div id="preloader">
    <div id="status"><img src="front/images/header/preloader.gif" id="preloader_image" alt="loader">
    </div>
  </div> --}}

<!-- Top Scroll Start -->
<a href="javascript:" id="return-to-top"><i class="fa fa-angle-up"></i></a>
<!-- Top Scroll End -->

  @include('front.nav.header')
  @yield('content')
  <script src="//code.jquery.com/jquery.js"></script>
  @include('flashy::message')
  @include('front.nav.footer')
  
  <script type="text/javascript" src="{{ asset('front/js/jquery_min.js') }}"></script> 
  <script type="text/javascript" src="{{ asset('front/js/bootstrap.js') }}"></script>
  <script type="text/javascript" src="{{ asset('front/js/jquery.magnific-popup.js') }}"></script>
  <script type="text/javascript" src="{{ asset('front/js/jquery.menu-aim.js') }}"></script> 
  <script type="text/javascript" src="{{ asset('front/js/owl.carousel.js') }}"></script>
  <script type="text/javascript" src="{{ asset('front/js/jquery.shuffle.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('front/js/modernizr.js') }}"></script>
  <script type="text/javascript" src="{{ asset('front/js/jquery.countTo.js') }}"></script>
  <script type="text/javascript" src="{{ asset('front/js/jquery.inview.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('front/js/plugin/rs_slider/jquery.themepunch.revolution.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('front/js/plugin/rs_slider/jquery.themepunch.tools.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('front/js/plugin/rs_slider/revolution.addon.snow.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('front/js/plugin/rs_slider/revolution.extension.actions.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('front/js/plugin/rs_slider/revolution.extension.carousel.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('front/js/plugin/rs_slider/revolution.extension.kenburn.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('front/js/plugin/rs_slider/revolution.extension.layeranimation.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('front/js/plugin/rs_slider/revolution.extension.migration.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('front/js/plugin/rs_slider/revolution.extension.navigation.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('front/js/plugin/rs_slider/revolution.extension.parallax.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('front/js/plugin/rs_slider/revolution.extension.slideanims.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('front/js/plugin/rs_slider/revolution.extension.video.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('front/js/custom.js') }}"></script>
  <!--main js file end-->
  <script>
    function initMap() {
    var uluru = {lat: -36.742775, lng:  174.731559};
    var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 15,
    scrollwheel: false,
    center: uluru
    });
    var marker = new google.maps.Marker({
    position: uluru,
    map: map
    });
    }
  </script>
  <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCmdG8C6ItElq5ipuFv6O9AE48wyZm_vqU&amp;callback=initMap">
  </script>
  <script>
  function openNav() {
      document.getElementById("mySidenav").style.width = "300px";
  }

  function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
  }
  </script>

  @stack('script.footer')
</body>
</html>


