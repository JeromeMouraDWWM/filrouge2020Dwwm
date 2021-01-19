<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

        <!-- Scripts -->
        @routes
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="bodyListePort">
        
        <!-- @if (Route::has('login'))
            <div class="menuConnexion">
                <nav class="navbar navbar-expand-sm menu_navbar navbar-dark">
                @auth
                    <div class="navbar-left" style="display:contents;">
                        <a href="{{ url('/dashboard') }}" style="color:white;">Dashboard</a>
                    </div>
                @else
                <div style="margin:auto; text-align:center;"></div>
                <div class="navbar-right" style="color: white !important;">
                    <a href="" data-toggle="modal" data-target="#modalCoForm" style="color: white !important;">Se connecter</a>
                    @if (Route::has('register'))
                        <span>/</span>
                        <a href="" data-toggle="modal" data-target="#modalInForm" style="color: white !important;">S'inscrire</a>
                    @endif
                </div>    
                @endauth
                </nav>
            </div>
        @endif-->

        <?php include "menu/header.php"; ?>
        @inertia
        <?php include "menu/footer.php"; ?>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
</html>
