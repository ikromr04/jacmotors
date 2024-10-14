<!DOCTYPE html>
<html class="scroll-smooth" lang="{{ app()->getLocale() }}">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="keywords" content="jac джак моторс motors Душанбе официальный сайт Таджикистан легковые автомобили сайт китайский авто машина 2018 легковые автосалон automobile car">
  <meta property="og:site_name" content="JAC Motors Tajikistan">
  <meta property="og:type" content="object">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="description" content="Автосалон JAC Motors (Джак Моторс). Каталог моделей китайских легковых автомобилей, цены.">
  <meta property="og:description" content="Автосалон JAC Motors (Джак Моторс). Каталог моделей китайских легковых автомобилей, цены.">
  <meta property="og:title" content="JAC Motors Tajikistan">
  <meta property="og:image" content="{{ asset('/favicons/180x180.png') }}">
  <meta property="og:image:alt" content="JAC Motors Tajikistan – Лого">
  <meta name="twitter:title" content="JAC Motors Tajikistan">
  <meta name="twitter:image" content="{{ asset('/favicons/180x180.png') }}">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <link rel="icon" href="{{ asset('favicon.ico') }}">
  <link rel="icon" href="{{ asset('favicons/icon.svg') }}" type="image/svg+xml">
  <link rel="apple-touch-icon" href="{{ asset('favicons/180x180.png') }}">
  <link rel="manifest" href="{{ asset('manifest.webmanifest') }}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  @vite('resources/css/app.css')
  @yield('styles')

  <title>{{ $documentTitle }}</title>
</head>

<body class="flex flex-col min-h-screen group">
  <x-icons />

  <x-layouts.header />

  @yield('content')

  <x-layouts.footer />

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-E7RSE9KZ8J"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-E7RSE9KZ8J');
  </script>
  <!-- Yandex.Metrika counter -->
  <script type="text/javascript">
    (function(m, e, t, r, i, k, a) {
      m[i] = m[i] || function() {
        (m[i].a = m[i].a || []).push(arguments)
      };
      m[i].l = 1 * new Date();
      for (var j = 0; j < document.scripts.length; j++) {
        if (document.scripts[j].src === r) {
          return;
        }
      }
      k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
    })
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(93958305, "init", {
      clickmap: true,
      trackLinks: true,
      accurateTrackBounce: true,
      webvisor: true
    });
  </script><noscript>
    <div><img src="https://mc.yandex.ru/watch/93958305" style="position:absolute; left:-9999px;" alt=""></div>
  </noscript>
  <!-- /Yandex.Metrika counter -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  @yield('scripts')
  @stack('script')
</body>

</html>
