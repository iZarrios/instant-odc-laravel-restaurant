@extends('web.master')

@section('title', '- Contacts')

@section('content')
    <!-- Restaurant Menu Section -->
    <div id="restaurant-menu">
        <div class="section-title text-center center">
            <div class="overlay">
                <h2>Contact Us</h2>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit duis sed.</p>
            </div>
        </div>

    </div>
    @include('web.inc.contacts')
@endsection
