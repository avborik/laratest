<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
        {{-- @stack('styles') --}}
        {{-- <link rel="stylesheet" href="{{ asset('css/styles.css') }}"> --}}

        <!-- Fonts -->
        <!-- Styles -->
        
    </head>
    <body>
       @include('layout.header')
       <div class="container">
           <div class="content">
                 @yield('appContent')
           </div>
       </div>
       @include('layout.footer')
    </body>
</html>
