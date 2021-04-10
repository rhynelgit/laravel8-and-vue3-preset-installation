<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>{{ Helper::slug_invert(env("APP_NAME")) }}</title>
     <link rel="icon" href="{{ url('favicon.ico') }}">
     <link rel="stylesheet" href="{{ url('css/app.css') }}">
  </head>
  <body>
     <div id="app"></div>
     <script async src="{{ url('js/app.js') }}"></script>
     <noscript>You need to enable JavaScript to run this app.</noscript>
  </body>
</html>