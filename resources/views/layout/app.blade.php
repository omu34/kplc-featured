<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    @vite('resources/css/app.css')
    @vite('resources/css/custom.css')
    {{-- @livewireStyles --}}
</head>


<body class="antialiased" x-cloak x-data="{ darkMode: $persist(false), zoomLevel: $persist(100), siteGrayscale: $persist(false) }" :class="{ 'dark': darkMode === true }"
    :style="'zoom: ' + zoomLevel + '%'">
    @livewire('navbar-selector')
    @yield('content')
</body>

<!-- Pre-loader HTML -->
<div id="preloader">
    <!-- Overlay -->
    <div class="overlay"></div>
    <!-- Loading spinner or animation -->
    <div class="spinner"></div>
</div>



<template x-if="siteGrayscale">
    <style>
        img {
            filter: grayscale(100%) !Important;
        }
    </style>
</template>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>

<script>
    AOS.init();
</script>

</html>

{{--  @extends('layouts.app')

@section('content')
    @livewire('basic-banner')
    @livewire('featured-news')
    @livewire('latest-videos')
    @livewire('latest-news')
    @livewire('latest-gallery')
    @livewire('banner')
    @livewire('breadcrumb')
    @livewire('tags')
    @livewire('search')
    @livewire('footer')
@endsection  --}}
