<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="robots" content="noindex, nofollow">

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
  <div class="fixed bottom-4 right-6 z-[1231241] font-bold">
    <span class="block sm:hidden text-red-600">xs</span>
    <span class="hidden sm:block md:hidden text-red-600">sm</span>
    <span class="hidden md:block lg:hidden text-red-600">md</span>
    <span class="hidden lg:block xl:hidden text-red-600">lg</span>
    <span class="hidden xl:block 2xl:hidden text-red-600">xl</span>
    <span class="hidden 2xl:block text-red-600">2xl</span>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  @yield('scripts')
</body>

</html>
