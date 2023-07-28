<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        <!-- Styles -->
        
    </head>
    <body class="antialiased">
    @extends('layouts.app')
@section('content')
  <div id="app">
    <product-attributes></product-attributes>
  </div>
@endsection
<script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
