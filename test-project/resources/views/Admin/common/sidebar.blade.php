<aside class="menu-sidebar d-none d-lg-block">
    <<div class="logo">
        <a href="{{route('dashboard')}}"><img src="{{asset('assets/images/logo.png')}}" alt="#"></a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="active has-sub">
                    <a class="js-arrow" href="{{route('dashboard')}}">
                        <i class="fas fa-tachometer-alt"></i>Dashboard
                    </a>
                </li>
                <li class="active has-sub">
                    <a class="js-arrow" href="{{route('banner')}}">
                        <i class="fa fa-list-alt"></i>Banners
                    </a>
                </li>
                <li class="active has-sub">
                    <a class="js-arrow" href="{{route('enquiries')}}">
                        <i class="fa fa-question-circle" aria-hidden="true"></i>Enquiries
                    </a>
                </li>
                <li class="active has-sub">
                    <a class="js-arrow" href="{{route('featured_products')}}">
                        <i class="fa fa-window-maximize"></i>Featured Products
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>