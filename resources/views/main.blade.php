<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>title Home2</title>
     
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Space+Mono&display=swap" rel="stylesheet">
        

        <!-- Styles  /../-->
        <link rel="stylesheet" href="css/fonts.css">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/main.css"> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
        
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    </head>
    <body class="">
        <div class="">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home2</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            
            <header class="header">
                <div class="container">
                    <div class="header__top">
                        <h5>Welcome to Early Birds. We ship every Tuesday and Thursday. Free shipping above €25 in The Netherlands</h5>
                    </div>
                    <div class="header__main">
                        <nav class="nav-header left-nav">
                            <ul class="nav-header__ul" id="nav_sliding_ul">
                                <li class="nav-header__item"><a class="nav-header__link" href="#">Home page2</a>
                                    <img src="storage/img/svg.qodef-svg--underline.png" alt="underline">
                                </li>
                                <li class="nav-header__item"><a class="nav-header__link" href="#">Reserve</a>
                                    <img src="storage/img/svg.qodef-svg--underline.png" alt="underline">
                                </li>
                                <li class="nav-header__item"><a class="nav-header__link" href="#">Shop</a>
                                    <img src="storage/img/svg.qodef-svg--underline.png" alt="underline">
                                </li>
                                <li class="nav-header__item"><a class="nav-header__link" href="#">Blog</a>
                                    <img src="storage/img/svg.qodef-svg--underline.png" alt="underline">
                                </li>
                                <li class="nav-header__item displayonless1024 d-none"><a class="nav-header__link" href="#">search</a>
                                    <img src="storage/img/svg.qodef-svg--underline.png" alt="underline">
                                </li>
                                <li class="nav-header__item displayonless1024 d-none"><a class="nav-header__link" href="#">cart(0)</a>
                                    <img src="storage/img/svg.qodef-svg--underline.png" alt="underline">
                                </li>
                            </ul>
                                <button type="button" id="bmenubtn"><img width ="44px" height="40px" src="storage/img/burgermenu.png" alt="bmenu_btn"></button>
                        </nav>
                        <div class="middle-img">
                            <img src="storage/img/logo-black-1.png.png" alt="logo">
                        </div>
                        
                        <div class="header__rigthside d-flex">
                            <nav class="nav-header right-nav">
                                <ul class ="nav-header__ul">
                                    <li class="nav-header__item"><a class="nav-header__link" href="#">cart(0)</a>
                                        <img src="storage/img/svg.qodef-svg--underline.png" alt="underline">
                                    </li>
                                    <li class="nav-header__item"><a class="nav-header__link" href="#">search</a>
                                        <img src="storage/img/svg.qodef-svg--underline.png" alt="underline">
                                    </li>
                                </ul>
                            </nav>
                            
                            <div class="search-png">
                                <img src="storage/img/svg.qodef-svg--side-area-opener.png" alt="logo star png">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="container_owl_carousel" class="container">
                    <div id="header_owl_carousel" class="header__carousel owl-carousel">
                        <div class="owl-carousel__item">
                            <img src="storage/img/image1.jpg" alt="owl2 carousel image 1">
                        </div>
                        <div class="owl-carousel__item">
                                <img src="storage/img/image2.jpg" alt="owl carousel image 2 ">
                        </div>
                        <div class="owl-carousel__item">
                            <img src="storage/img/image1.jpg" alt="owl2 carousel image 1">
                        </div>
                        <div class="owl-carousel__item">
                            <img src="storage/img/image2.jpg" alt="owl carousel image 2 ">
                        </div>
                    </div>
                </div>
                <section class="small-section">
                    <div class="container">
                        <div class="small-section__block">
                            <div><e>Fairtraide</e></div>
                            <div><e>Organic</e></div>
                            <div><e>Climate neutral</e></div>
                        </div>
                    </div>
                </section>
            </header>
            
            @yield('content')

            <footer class="footer">
                <div class="container">
                    <div class="footer__row">
                        <div class="footer__coll footer__coll_big">
                            <div class="footer__logo">
                                <img src="storage/img/footer-logo.png" alt="footer coffee shop logo image here">
                            </div>
                            <div class="footer__info">
                                <div class="footer__info-title">
                                    Early Birds
                                </div>
                                <address class="footer__info-address emphasized">Weteringstraat 48,1017 SP</address>
                                <address class="footer__info-city emphasized">Amsterdam</address>
                                <a class="footer__info-tel" href="tel:020-7718364">Tel: 234-7775553</a>      
                            </div>
                        </div>
                        <div class="footer__coll">
                            <nav class="footer__nav">
                                <ul class="footer__nav-ul">
                                    <li class="footer__nav-item emphasized"><a href="#">My Account</a></li> 
                                    <li class="footer__nav-item emphasized"><a href="#">Checkout</a></li>    
                                    <li class="footer__nav-item emphasized"><a href="#">Cart</a></li>    
                                    <li class="footer__nav-item emphasized"><a href="#">Shop</a></li>           
                                </ul>
                            </nav>
                        </div>
                        <div class="footer__coll">
                            <nav class="footer__social">
                                <ul class="footer__nav-ul">
                                    <li class="footer__social-item emphasized"><a href="#">Facebook</a></li> 
                                    <li class="footer__social-item emphasized"><a href="#">Instagram</a></li>    
                                    <li class="footer__social-item emphasized"><a href="#">Twitter</a></li>            
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </footer>


        </div>

    </body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- <script src="storage/js/main.js"></script> -->
    @vite(['resources/js/main.js'])

</html>
