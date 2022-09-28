<!-- Restaurant Menu Section -->
<div id="restaurant-menu">
    <div class="section-title text-center center">
        <div class="overlay">
            <h2>Menu</h2>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit duis sed.</p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($meals as $meal)
            <div class="col-md-6">
                <div class="menu-section">
                    <h2 class="menu-section-title">{{$meal->name}}</h2>
                    <hr>
                    @foreach ($meal->dishes as $dish)
                    <div class="menu-item">
                        <div class="menu-item-name"> {{$dish->name}}</div>
                        <div class="menu-item-price"> ${{$dish->price}} </div>
                        <div class="menu-item-description"> {{$dish->description}} </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>