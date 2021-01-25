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
        {{ $slot }}
    </body>
</html>
