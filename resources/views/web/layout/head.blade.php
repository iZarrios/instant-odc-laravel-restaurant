<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>InstantODC @yield('title')</title>
    <meta name="description" content="">
    <meta name="author" content="">

    @include('web.layout.head.links')
    @include('web.layout.head.css')
    @include('web.layout.head.js')

    @stack('head-css')
    @stack('head-js')
</head>