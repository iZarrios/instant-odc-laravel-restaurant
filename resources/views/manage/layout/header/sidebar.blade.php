<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="index.html">
                <i class="mdi mdi-grid-large menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>

        <li class="nav-item nav-category">Main</li>

        {{-- Begin Meals --}}
        <li class="nav-item {{(request()->is('manage/meals', 'manage/meals/create')) ? 'active' :''}}">
            <a class="nav-link" data-bs-toggle="collapse" href="#meals" aria-expanded="false" aria-controls="meals">
                <i class="menu-icon mdi mdi-floor-plan"></i>
                <span class="menu-title">Meals</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse {{(request()->is('manage/meals', 'manage/meals/create')) ? 'show' :''}}" id="meals">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link {{(request()->is('manage/meals')) ? 'active' :''}}" href="{{route('manage.meals.index')}}">Show All Meals</a></li>
                    <li class="nav-item"> <a class="nav-link {{(request()->is('manage/meals/create')) ? 'active' :''}}" href="{{route('manage.meals.create')}}">Add New Meal</a></li>
                </ul>
            </div>
        </li>
        {{-- End Meals --}}

        {{-- Begin Dishes --}}
        <li class="nav-item {{(request()->is('manage/dishes', 'manage/dishes/create')) ? 'active' :''}}">
            <a class="nav-link" data-bs-toggle="collapse" href="#dishes" aria-expanded="false" aria-controls="dishes">
                <i class="menu-icon mdi mdi-floor-plan"></i>
                <span class="menu-title">Dishes</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse {{(request()->is('manage/dishes', 'manage/dishes/create')) ? 'show' :''}}" id="dishes">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link {{(request()->is('manage/dishes')) ? 'active' :''}}" href="{{route('manage.dishes.index')}}">Show All Dishes</a></li>
                    <li class="nav-item"> <a class="nav-link {{(request()->is('manage/dishes/create')) ? 'active' :''}}" href="{{route('manage.dishes.create')}}">Add New Dish</a></li>
                </ul>
            </div>
        </li>
        {{-- End Dishes --}}

        {{-- Begin Chefs --}}
        <li class="nav-item {{(request()->is('manage/chefs', 'manage/chefs/create')) ? 'active' :''}}">
            <a class="nav-link" data-bs-toggle="collapse" href="#chefs" aria-expanded="false" aria-controls="chefs">
                <i class="menu-icon mdi mdi-floor-plan"></i>
                <span class="menu-title">Chefs</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse {{(request()->is('manage/chefs', 'manage/chefs/create')) ? 'show' :''}}" id="chefs">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link {{(request()->is('manage/chefs')) ? 'active' :''}}" href="{{route('manage.chefs.index')}}">Show All Chefs</a></li>
                    <li class="nav-item"> <a class="nav-link {{(request()->is('manage/chefs/create')) ? 'active' :''}}" href="{{route('manage.chefs.create')}}">Add New Chef</a></li>
                </ul>
            </div>
        </li>
        {{-- End Chefs --}}

        {{-- Begin Contacts --}}
        <li class="nav-item {{(request()->is('manage/contacts', 'manage/contacts/create')) ? 'active' :''}}">
            <a class="nav-link" data-bs-toggle="collapse" href="#contacts" aria-expanded="false" aria-controls="contacts">
                <i class="menu-icon mdi mdi-floor-plan"></i>
                <span class="menu-title">Contacts</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse {{(request()->is('manage/contacts')) ? 'show' :''}}" id="contacts">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link {{(request()->is('manage/contacts')) ? 'active' :''}}" href="{{route('manage.contacts.index')}}">Show All Contacts</a></li>
                </ul>
            </div>
        </li>
        {{-- End Contacts --}}
    </ul>
</nav>