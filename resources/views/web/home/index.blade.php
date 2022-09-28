@extends('web.master')

@section('title', '- Test')

@section('content')
    <!-- Header -->
    <header id="header">
        <div class="intro">
            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="intro-text">
                            <h1>InstantODC</h1>
                            <p>Restaurant / Coffee / Pub</p>
                            <a href="#about" class="btn btn-custom btn-lg page-scroll">Discover Story</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <div id="about">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6 ">
                    <div class="about-img"><img src="{{ asset('theme/img/about.jpg') }}" class="img-responsive"
                            alt=""></div>
                </div>
                <div class="col-xs-12 col-md-6">
                    <div class="about-text">
                        <h2>Our Restaurant</h2>
                        <hr>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam.
                            Sed commodo nibh ante facilisis bibendum dolor feugiat at. Duis sed dapibus leo nec ornare diam
                            commodo nibh.</p>
                        <h3>Awarded Chefs</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam.
                            Sed commodo nibh ante facilisis bibendum dolor feugiat at. Duis sed dapibus leo nec ornare.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('web.inc.menus')
    @include('web.inc.galleries')
    @include('web.inc.chefs')

    <!-- Call Reservation Section -->
    <div id="call-reservation" class="text-center">
        <div class="container">
            <h2>Want to make a reservation? Call <strong>1-887-654-3210</strong></h2>
        </div>
    </div>


    @include('web.inc.contacts')
@endsection
