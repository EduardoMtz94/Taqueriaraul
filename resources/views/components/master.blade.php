<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Taqueria Raul') }}</title>
        <!--<link rel="icon" type="image/png" href="{{ asset('img/lalo-codes-favicon.png') }}"/>-->

        <meta name="description" content="{{ $metaTagsSeo->description }}">
        <meta name="robots" content="{{ $metaTagsSeo->robots }}">
        <meta name="keywords" content=" {{ $metaTagsSeo->keywords }}">

        <meta property="og:type" content="{{ $metaTagsSeo->ogType }}" />
        <meta property="og:title" content="{{ $metaTagsSeo->ogTitle }}" />
        <meta property="og:description" content="{{ $metaTagsSeo->ogDescription }}" />
        <meta property="og:url" content="{{ $metaTagsSeo->ogUrl }}" />

        <meta property="twitter:card" content="{{ $metaTagsSeo->twitter_card }}" />
        <meta property="twitter:creator" content="{{ $metaTagsSeo->twitter_creator }}" />
        <meta property="twitter:description" content="{{ $metaTagsSeo->twitter_description }}" />
        <meta property="twitter:title" content="{{ $metaTagsSeo->twitter_title }}" />
      
        <link rel="canonical" href="{{ $metaTagsSeo->canonical }}">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <section class="lc-header">
            <div class="lc-head-promo">
                <div class="container-xl">
                    <div class="row">
                        <div class="col-12 text-right pr-4 py-2">
                            <p class="mb-0">Servicio a domicilio GRATIS en pedidos mayores a $200.00</p>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-expand-lg lc-navbar-custom" id="lc-navbar">
                <div class="container">
                    <a href="/" class="navbar-brand">
                        <img src="{{ asset('img/logo-taqueria-raul.jpeg') }}" alt="Taqueria Raul Logo" height="90">
                    </a>
                    <button class="navbar-toggler float-right" id="lc-btn-navbar" type="button"
                        data-toggle="collapse" data-target="#lc-navbar" aria-label="hamburguer"
                        role="presentation">
                        <span class="lc-hamburguer" id="lc-hamburguer"></span>
                    </button>
                    <div class="navbar-collapse collapse lc-navbar-menu" id="lc-navbar">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" class="text-decoration-none" href="/"
                                    id="btn-home">INICIO</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" class="text-decoration-none" href="#menu"
                                    id="btn-menu">MEN&Uacute;</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" class="text-decoration-none" href="#galery"
                                    id="btn-galery">GALER&Iacute;A</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" class="text-decoration-none" href="#contact"
                                    id="btn-contact">CONTACTO</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <header>
                <div class="container-xl">
                    <div class="row lc-height">
                        <div class="col-md-6 align-self-center">
                            <h1>TAQUER&Iacute;A RA&Uacute;L</h1>
                            <p>Desde hace mas de 40 a&ntilde;os, somos representantes de una de las comidas m&aacute;s representativas de M&eacute;xico, 
                                nos respalda la calidad en nuestros tacos, adem&aacute;s de un gran sabor que se disfruta en cada mordida. </p>
                            <div class="lc-haz-tu-pedido">
                                <p>HAZ TU PEDIDO</p>
                                <span class="arrow" id="lc-arrow-header"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </section>
        
        {{ $slot }}

        <section class="lc-footer">
            <div class="container-xl">
                <div class="row d-flex justify-content-between">
                    <p>©2021 Taquería Raúl - All rights reserved.</p>
                    <p>
                        Site created by <a href="https://lalocodes.com" target="_blank" rel="noopener noreferrer">LaloCodes</a>
                    </p>
                </div>
            </div>
        </section>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
