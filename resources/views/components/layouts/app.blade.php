<!DOCTYPE html>
<html lang={{ app()->getLocale() }}>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="robots" content="noindex, nofollow">

  <title>{{ env('APP_NAME') }}</title>

  @vite('resources/css/app.css')
</head>

<body>
  <x-layouts.header />

  @yield('content')

  <x-layouts.footer />
</body>

</html>
