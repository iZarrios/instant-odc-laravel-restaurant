<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard @yield('title')</title>
    
    @include('manage.layout.head.links')
    @include('manage.layout.head.css')
    @include('manage.layout.head.js')

    @stack('head-css')
    @stack('head-js')
</head>