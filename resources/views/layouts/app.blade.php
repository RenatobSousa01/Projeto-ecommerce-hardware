<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Ecommerce Hardware') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gray-100">

    {{-- 
        Esta diretiva injeta o conteúdo de todas as views 
        que usam @extends('layouts.app'), como a sua home.blade.php
    --}}
    @yield('content')

    {{-- Aqui iriam scripts JavaScript adicionais --}}
</body>
</html>