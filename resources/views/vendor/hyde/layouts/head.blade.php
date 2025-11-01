<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@stack('title', 'Ebru Başak FTR - Manuel Terapi ve Klinik Egzersiz Merkezi')</title>
<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=inter:200,300,400,500,600,700,800" rel="stylesheet" />
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
<link rel="apple-touch-icon" sizes="180x180" href="/media/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/media/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/media/favicon-16x16.png">

{{-- App Meta Tags --}}
@include('hyde::layouts.meta')

{{-- App Stylesheets --}}
@include('hyde::layouts.styles')

@if (Vite::running())
    {{ Vite::assets(['resources/assets/app.css']) }}
@endif

{{-- Add any extra code to include before the closing <head> tag --}}
@stack('head')

{{-- If the user has defined any custom head tags, render them here --}}
{!! config('hyde.head') !!}
{!! Includes::html('head') !!}
