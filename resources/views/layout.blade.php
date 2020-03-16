<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Juliette Meyers</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=BioRhyme|Cabin&display=swap" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" href="<?php echo asset('css/app.css')?>" type="text/css">
        @yield('head')

    </head>
    <body>

        <div id="main-header">
          <a href="/">
            <h1>Juliette Perine Meyers</h1>
          </a>
          <div id="main-header-space"></div>
        </div>

        <div id="content-navbar-wrapper">
          @include('navbar')
            <div id="content-wrapper">
              <div class="content">
                @yield('login')
                @yield('register')
                @yield('home')
                @yield('bio')
                @yield('medium')
                @yield('artwork')

                {{-- Admin Routes --}}
                @yield('create')
              </div>
            </div>
        </div>

    </body>
</html>
