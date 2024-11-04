<header class="header">
    <div class="container">
        <div class="header__top">
            <h5>Welcome to Early Birds. We ship every Tuesday and Thursday. Free shipping above €25 in The Netherlands</h5>
        </div>
        <div class="header__main">
            <nav class="nav-header left-nav">
                <ul class="nav-header__ul" id="nav_sliding_ul">
                    <li class="nav-header__item"><a class="nav-header__link" href="{{url('/')}}">Home page</a>
                        <img src="/storage/img/svg.qodef-svg--underline.png" alt="underline">
                    </li>
                    <li class="nav-header__item"><a class="nav-header__link" href="#">Reserve</a>
                        <img src="/storage/img/svg.qodef-svg--underline.png" alt="underline">
                    </li>
                    <li class="nav-header__item"><a class="nav-header__link" href="{{url('products')}}">Shop</a>
                        <img src="/storage/img/svg.qodef-svg--underline.png" alt="underline">
                    </li>
                    <li class="nav-header__item"><a class="nav-header__link" href="#">Blog</a>
                        <img src="/storage/img/svg.qodef-svg--underline.png" alt="underline">
                    </li>
                    <li class="nav-header__item displayonless1024 d-none"><a class="nav-header__link" href="#">search</a>
                        <img src="/storage/img/svg.qodef-svg--underline.png" alt="underline">
                    </li>
                    <li class="nav-header__item displayonless1024 d-none"><a class="nav-header__link" href="#">cart(0)</a>
                        <img src="/storage/img/svg.qodef-svg--underline.png" alt="underline">
                    </li>
                    @can('viewAny',   \App\Models\Showcaseitem::class)
                    <li class="nav-header__item"><a class="nav-header__link" href="/text-edit"><button class="btn btn-warning">Text Editor</button></a>
                    </li>
                    @endcan
                </ul>
                    <button type="button" id="bmenubtn"><img width ="44px" height="40px" src="/storage/img/burgermenu.png" alt="bmenu_btn"></button>
            </nav>
            <div class="middle-img">
                <img src="/storage/img/logo-black-1.png.png" alt="logo">
            </div>

            <div class="header__rigthside d-flex">
                <nav class="nav-header right-nav">
                    <ul class ="nav-header__ul">
                        <li class="nav-header__item"><a class="nav-header__link" href="#">cart(0)</a>
                            <img src="/storage/img/svg.qodef-svg--underline.png" alt="underline">
                        </li>
                        <li class="nav-header__item"><a class="nav-header__link" href="#">search</a>
                            <img src="/storage/img/svg.qodef-svg--underline.png" alt="underline">
                        </li>
                    </ul>
                </nav>

                <div class="search-png">
                    <img src="/storage/img/svg.qodef-svg--side-area-opener.png" alt="logo star png">
                </div>
            </div>
        </div>
    </div>

</header>
