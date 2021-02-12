<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Taqueria Raul') }}</title>
        <link rel="icon" type="image/png" href="{{ asset('img/logo-don-raul.svg') }}"/>

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
        <script src="{{ asset('js/app.js') }}"></script>
    </head>
    <body>
        <section class="lc-header fixed-top" id="lc-header">
            <div class="lc-head-promo" id="lc-head-promo">
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
                        <img src="{{ asset('img/logo-taqueria-raul.jpeg') }}" id="logo" alt="Taqueria Raul Logo" height="90">
                    </a>
                    <button class="navbar-toggler float-right" id="lc-btn-navbar" type="button"
                        data-toggle="collapse" data-target="#lc-navbar-child" aria-label="hamburguer"
                        role="presentation">
                        <span class="lc-hamburguer" id="lc-hamburguer"></span>
                    </button>
                    <div class="navbar-collapse collapse lc-navbar-menu" id="lc-navbar-child">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" class="text-decoration-none" href="/"
                                    id="btn-home">INICIO</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" class="text-decoration-none" href="/#menu"
                                    id="btn-menu">MEN&Uacute;</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" class="text-decoration-none" href="/gallery"
                                    id="btn-gallery">GALER&Iacute;A</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" class="text-decoration-none" href="/contacto"
                                    id="btn-contact">CONTACTO</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </section>
        
        {{ $slot }}

        <section class="lc-footer">
            <div class="container-xl">
                <div class="row d-flex justify-content-center justify-content-md-between">
                    <p>©2021 Taquería Raúl - All rights reserved.</p>
                    <p>
                        Site created by <a href="https://lalocodes.com" target="_blank" rel="noopener noreferrer">LaloCodes</a>
                    </p>
                </div>
            </div>
        </section>
        <div>
            <a href="https://tinyurl.com/yxuoj9c6" target="_blank" rel="noopener noreferrer">
                <img src="img/wa.svg" width="60" class="wa-bubble" alt="Whatsapp Bubble Taqueria Raul">
            </a>
        </div>
        <!-- Load Facebook SDK for JavaScript -->
        <div id="fb-root"></div>
        <script>
            window.fbAsyncInit = function() {
                FB.init({
                    xfbml            : true,
                    version          : 'v9.0'
                });
            };

            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>

        <!-- Your Chat Plugin code -->
        <div class="fb-customerchat"
        attribution="setup_tool"
        page_id="179709812561851">
        </div>
        <script src="{{ asset('js/lc-app.js') }}"></script>
    </body>
</html>
