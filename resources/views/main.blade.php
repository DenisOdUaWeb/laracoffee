<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>title Home</title>
     
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
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
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
                                    <li class="nav-header__item"><a class="nav-header__link" href="#">Home</a>
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
                                <div><e>FairtraidE</e></div>
                                <div><e>OrganiC</e></div>
                                <div><e>Climate neutraL</e></div>
                            </div>
                        </div>
                    </section>
                </header>
            
            <main id="main_wrapper" class="wrapper">    
                <section class="our-blends">
                    <div class="container">
                        <div class="our-blends__container">
                            <div class="our-blends__info">
                                <div class="our-blends__infotitle">
                                    Our blends deliver on the promise of balance and consistency, <span class="ellipsed">roasted to</span><br>maximize sweetness.
                                </div>
                                <div class="our-blends__infotext">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper.
                                </div>
                                <div class="our-blends__infomore _infomore">
                                    <button type="button" class="our-blends__infobtn _infomore__btn">View More</button><img class="our-blends__infoimg" src="storage/img/arrow.png"> 
                                </div>
                            </div>
                            <div class="our-blends__cards product-cards">
                                <div class="product-cards__item">
                                    <div class="product-cards__img">
                                        <img src="storage/img/our_blends/product-1.png">
                                    </div>
                                    <div class="product-cards__title">
                                        Arabica Bekele
                                    </div>
                                    <div class="product-cards__price">
                                        $44.00
                                    </div>
                                </div>
                                <div class="product-cards__item">
                                    <div class="product-cards__img">
                                        <img src="storage/img/our_blends/product-2.png">
                                    </div>
                                    <div class="product-cards__title">
                                        Arabica Bekele
                                    </div>
                                    <div class="product-cards__price">
                                        $44.00
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </section>

                <section class="more-than">
                    <div class="container">
                        <div class="more-than__box">
                            <div class="more-than__text">
                                <h2>MORE THAN JUST A COFFEE <br> SHOP</h2>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="phrase-carousel">
                    <div class="container">
                        <div class="phrase-carousel__box">
                            <div class="phrase-carousel__coll">
                                <div id="phrase_carousel" class="phrase_carousel phrase-carousel__carousel owl-carousel "> <!-- owl-theme -->
                                    <div class="phrase-carousel__item"> 
                                        <div class="phrase-carousel__stars">
                                            <img class="phrase-carousel__star active-star" src="storage/img/phrase_carousel/star-painted.png" alt="star p">
                                            <img class="phrase-carousel__star active-star" src="storage/img/phrase_carousel/star-painted.png" alt="star p">
                                            <img class="phrase-carousel__star active-star" src="storage/img/phrase_carousel/star-painted.png" alt="star p">
                                            <img class="phrase-carousel__star active-star" src="storage/img/phrase_carousel/star-painted.png" alt="star p">
                                            <img class="phrase-carousel__star" src="storage/img/phrase_carousel/star-painted.png" alt="star p">
                                        </div>
                                        <div class="phrase-carousel__text _anton-35-black">
                                            "Another reason people just can't keep away from their local coffee shop is the quality of coffee that's on offer. "
                                        </div>
                                        <div class="phrase-carousel__author">
                                            Henry Monro
                                        </div>
                                    </div>
                                    <div class="phrase-carousel__item">
                                        <div class="phrase-carousel__stars">
                                            <img class="phrase-carousel__star active-star" src="storage/img/phrase_carousel/star-painted.png" alt="star p">
                                            <img class="phrase-carousel__star active-star" src="storage/img/phrase_carousel/star-painted.png" alt="star p">
                                            <img class="phrase-carousel__star active-star" src="storage/img/phrase_carousel/star-painted.png" alt="star p">
                                            <img class="phrase-carousel__star active-star" src="storage/img/phrase_carousel/star-painted.png" alt="star p">
                                            <img class="phrase-carousel__star" src="storage/img/phrase_carousel/star-painted.png" alt="star p">
                                        </div>
                                        <div class="phrase-carousel__text _anton-35-black">
                                            "Another reason people just can't keep away from their local coffee shop is the quality of coffee that's on offer. "
                                        </div>
                                        <div class="phrase-carousel__author">
                                            Henry Monro
                                        </div>
                                    </div>
                                    <div class="phrase-carousel__item">
                                        <div class="phrase-carousel__stars">
                                            <img class="phrase-carousel__star active-star" src="storage/img/phrase_carousel/star-painted.png" alt="star p">
                                            <img class="phrase-carousel__star active-star" src="storage/img/phrase_carousel/star-painted.png" alt="star p">
                                            <img class="phrase-carousel__star active-star" src="storage/img/phrase_carousel/star-painted.png" alt="star p">
                                            <img class="phrase-carousel__star active-star" src="storage/img/phrase_carousel/star-painted.png" alt="star p">
                                            <img class="phrase-carousel__star" src="storage/img/phrase_carousel/star-painted.png" alt="star p">
                                        </div>
                                        <div class="phrase-carousel__text _anton-35-black">
                                            "Another reason people just can't keep away from their local coffee shop is the quality of coffee that's on offer. "
                                        </div>
                                        <div class="phrase-carousel__author">
                                            Henry Monro
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="phrase-carousel__coll">
                                <div class="phrase-carousel__right-img">
                                    <img src="storage/img/phrase_carousel/img2.jpg" alt="coffe img">
                                </div>   
                            </div>
                            
                        </div>    
                    </div>
                </section>

                <section class="contact-us">
                    <div class="container">
                        <div class="contact-us__row">
                            <div class="contact-us__coll">
                                <div class="contact-us__cities">
                                    <div class="contact-us__lisabon">
                                    Lisbon Coffee Salon
                                </div>
                                <div class="contact-us__berlin">
                                    Berlin Coffee Roastery
                                </div>
                                <div class="contact-us__amsterdam">
                                    Amsterdam Coffee Shop
                                </div>
                                </div>
                            </div>
                            <div class="contact-us__coll contact-us__coll_big">
                                <div class="contact-us__img">
                                    <img src="storage/img/contacts/main.jpg" alt="main coffee blender jpg here">
                                </div>
                            </div>
                            <div class="contact-us__coll">
                                <div class="contact-us__contacts">
                                    <div class="contact-us__title">
                                        <h3>Amsterdam Centre Coffee</h3>
                                    </div>
                                    <div class="contact-us__text">
                                        <p>Weteringstraat 48,1017, Amsterdam</p>
                                        
                                        <p>Tel: 020-7718364</p>
                                        <p>Email: earlybirds@info.com</p> 
                                        
                                        <p> <span class="contact-us__time">Mon-Fri</span><span class="contact-us__dots">.........</span><span class="contact-us__time">6.45am-3.00pm</span></p> 
                                        <p> <span class="contact-us__time">Sat-Sun</span><span class="contact-us__dots">.........</span><span class="contact-us__time">8.30am-4.00pm</span></p>
                                    </div>
                                    <div class="contact-us__btn black-btn">
                                        <button type="button" class="black-btn__btn">Contact us</button>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </section>

                <section class="thats-right-for-you">
                    <div class="container">
                        <div class="thats-right-for-you__text _big-title">
                            The Coffee that's right for you
                        </div>
                        <div class="thats-right-for-you__shop-wrapper">
                            <div class="product-cards">
                                <div class="product-cards__item">
                                    <div class="product-cards__img">
                                        <img src="storage/img/product-cards/img1.png">
                                    </div>
                                    <div class="product-cards__title">
                                        Arabica Bekele
                                    </div>
                                    <div class="product-cards__price">
                                        $37.00
                                    </div>
                                </div>
                                <div class="product-cards__item">
                                    <div class="product-cards__img">
                                        <img src="storage/img/product-cards/img2.png">
                                    </div>
                                    <div class="product-cards__title">
                                        Arabica Bekele
                                    </div>
                                    <div class="product-cards__price">
                                        $41.00
                                    </div>
                                </div>
                                <div class="product-cards__item">
                                    <div class="product-cards__img">
                                        <img src="storage/img/product-cards/img3.png">
                                    </div>
                                    <div class="product-cards__title">
                                        Arabica Bekele
                                    </div>
                                    <div class="product-cards__price">
                                        $36.00
                                    </div>
                                </div>
                                <div class="product-cards__item">
                                    <div class="product-cards__img">
                                        <img src="storage/img/product-cards/img4.png">
                                    </div>
                                    <div class="product-cards__title">
                                        Arabica Bekele
                                    </div>
                                    <div class="product-cards__price">
                                        $45.00
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </section> 

                <section class="food">
                    <div class="container">
                        <div class="food__wrapper-row">
                            <div class="food__left-coll">
                                <div class="food__title _big-title">
                                    <h3>swing&nbspby our&nbspplace <br>we also <span class="_relative"><span class="ellipsed _absolute">have food.</span></span> </h3> 
                                </div>
                                <div class="food__img">
                                    <img src="storage/img/food/food_img.png">
                                </div>
                            </div>
                            <div class="food__right-coll">
                                <div class="food__right-coll-item">
                                    <div class="food__right-coll-title-text-wrapper">
                                        <div class="food__right-coll-item-title _anton-35-black">
                                            Delivery
                                        </div>
                                        <div class="food__right-coll-item-text">
                                            Vivamus hendrerit at sapien nec mattis. Quisque quis arcu
                                        </div>
                                    </div>
                                    <div class="food__right-coll-item-more _infomore">
                                        <button type="button" class="our-blends__infobtn _infomore__btn">View More</button>
                                        <img class="our-blends__infoimg" src="storage/img/arrow.png">
                                    </div>
                                </div>
                                <div class="food__right-coll-item">
                                    <div class="food__right-coll-title-text-wrapper">
                                        <div class="food__right-coll-item-title _anton-35-black">
                                            Wholesale
                                        </div>
                                        <div class="food__right-coll-item-text">
                                            Pellentesque in tempor lorem, vel porttitor est.
                                        </div>
                                    </div>
                                    <div class="food__right-coll-item-more _infomore">
                                        <button type="button" class="our-blends__infobtn _infomore__btn">View More</button>
                                        <img class="our-blends__infoimg" src="storage/img/arrow.png">
                                    </div>
                                </div>
                                <div class="food__right-coll-item">
                                    <div class="food__right-coll-title-text-wrapper">
                                        <div class="food__right-coll-item-title _anton-35-black">
                                            Consistency
                                        </div>
                                        <div class="food__right-coll-item-text">
                                            Aliquam ut arcu sodales, gravida quam vitae.
                                        </div>
                                    </div>    
                                    <div class="food__right-coll-item-more _infomore">
                                        <button type="button" class="our-blends__infobtn _infomore__btn">View More</button>
                                        <img class="our-blends__infoimg" src="storage/img/arrow.png">
                                    </div>
                                </div>
                                <div class="food__right-coll-item food__right-coll-item_last">
                                    <div class="food__right-coll-title-text-wrapper">
                                        <div class="food__right-coll-item-title _anton-35-black">
                                            Quality
                                        </div>
                                        <div class="food__right-coll-item-text">
                                            Nam at sapien ligula. Morbi maximus scelerisque mi sed.
                                        </div>
                                    </div>
                                    <div class="food__right-coll-item-more _infomore">
                                        <button type="button" class="our-blends__infobtn _infomore__btn">View More</button>
                                        <img class="our-blends__infoimg" src="storage/img/arrow.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> 

                <section class="reserve">
                    <div class="reserve__container container">
                        <div class="reserve__wrapper">
                            <div class="reserve__title">
                                Reserve Your Table
                            </div>
                            <div class="reserve__ul-wrapper">
                                <div class="reserve__item">
                                    1 person
                                </div>
                                <div class="reserve__item">
                                    21.10.22
                                </div>
                                <div class="reserve__item">
                                    11:00
                                </div>
                                <div class="reserve__item reserve__item_btn black-btn">
                                    <button type="button" class="black-btn__btn">Book a Table</button>
                                </div>
                            </div>
                            <div class="reserve__powered">
                                *Powered by OpenTable
                            </div>
                        </div>
                    </div>
                </section>  

                <section class="our-team">
                    <div class="container">
                        <div class="our-team__wrapp">
                            <div class="our-team__title _big-title">
                                Our Awesome Team
                            </div>
                            <div class="our-team__row">
                                <div class="out-team__item our-team-member">
                                    <div class="our-team-member__photo">
                                        <img src="storage/img/our_team/1.jpg" alt="coffee team member photo">
                                    </div>
                                    <div class="our-team-member__name">
                                        Uma Clark
                                    </div>
                                    <div class="our-team-member__job-title">
                                        Manager
                                    </div>
                                </div>
                                <div class="out-team__item our-team-member">
                                    <div class="our-team-member__photo">
                                        <img src="storage/img/our_team/2.jpg" alt="coffee team member photo">
                                    </div>
                                    <div class="our-team-member__name">
                                        Tom Splinder
                                    </div>
                                    <div class="our-team-member__job-title">
                                        Manager
                                    </div>
                                </div>
                                <div class="out-team__item our-team-member">
                                    <div class="our-team-member__photo">
                                        <img src="storage/img/our_team/3.jpg" alt="coffee team member photo">
                                    </div>
                                    <div class="our-team-member__name">
                                        Laura Simons
                                    </div>
                                    <div class="our-team-member__job-title">
                                        Pastry Chef
                                    </div>
                                </div>
                                <div class="out-team__item our-team-member">
                                    <div class="our-team-member__photo">
                                        <img src="storage/img/our_team/4.jpg" alt="coffee team member photo">
                                    </div>
                                    <div class="our-team-member__name">
                                        Jonas Hanks 
                                    </div>
                                    <div class="our-team-member__job-title">
                                        Media manager
                                    </div>
                                </div>
                                <div class="out-team__item our-team-member">
                                    <div class="our-team-member__photo">
                                        <img src="storage/img/our_team/5.jpg" alt="coffee team member photo">
                                    </div>
                                    <div class="our-team-member__name">
                                        Ed Morris
                                    </div>
                                    <div class="our-team-member__job-title">
                                        Chef
                                    </div>
                                </div>
                                <div class="out-team__item our-team-member">
                                    <div class="our-team-member__photo">
                                        <img src="storage/img/our_team/6.jpg" alt="coffee team member photo">
                                    </div>
                                    <div class="our-team-member__name">
                                        Rita Flams
                                    </div>
                                    <div class="our-team-member__job-title">
                                        Sales person
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="recent-posts">
                    <div class="container">
                        <div class="recent-posts__wrapper">
                            <div class="recent-posts__leftpart">
                                <div class="recent-posts__title _big-title">
                                    Recent blog posts Explore <span class="ellipsed">now</span>
                                </div>
                                <div class="recent-posts__all_btn black-btn">
                                    <button type="button" class="black-btn__btn">read all news</button>
                                </div>
                            </div>
                            <div class="recent-posts__rightpart">
                                <div class="recent-posts__row">
                                    <div class="recent-posts__coll-item posts-card">
                                        <div class="posts-card__img">
                                            <img src="storage/img/recent_posts/1.jpg" alt="coffee shop post image">
                                        </div>
                                        <div class="posts-card__info">
                                            <div class="posts-card__date-author">
                                                <div class="posts-card__date">
                                                    November 1, 2022
                                                    <img src="storage/img/svg.qodef-svg--underline.png" alt="underline">
                                                </div>
                                                <div class="posts-card__author">
                                                    cortado
                                                    <img src="storage/img/svg.qodef-svg--underline.png" alt="underline">
                                                </div>
                                            </div>
                                            <div class="posts-card__title">
                                                Make sure your coffee is as fresh as it can be.
                                            </div>
                                            <div class="posts-card__infomore _infomore">
                                                <button type="button" class="our-blends__infobtn _infomore__btn">Read More</button><img class="our-blends__infoimg" src="storage/img/arrow.png"> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="recent-posts__coll-item posts-card">
                                        <div class="posts-card__img">
                                            <img src="storage/img/recent_posts/2.jpg" alt="coffee shop post image">
                                        </div>
                                        <div class="posts-card__info">
                                            <div class="posts-card__date-author">
                                                <div class="posts-card__date">
                                                    November 2, 2022
                                                    <img src="storage/img/svg.qodef-svg--underline.png" alt="underline">
                                                </div>
                                                <div class="posts-card__author">
                                                    cortado
                                                    <img src="storage/img/svg.qodef-svg--underline.png" alt="underline">
                                                </div>
                                            </div>
                                            <div class="posts-card__title">
                                                The Best Coffee Advent Calendars of this year
                                            </div>
                                            <div class="posts-card__infomore _infomore">
                                                <button type="button" class="our-blends__infobtn _infomore__btn">Read More</button><img class="our-blends__infoimg" src="storage/img/arrow.png"> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="recent-posts__coll-item posts-card">
                                        <div class="posts-card__img">
                                            <img src="storage/img/recent_posts/3.jpg" alt="coffee shop post image">
                                        </div>
                                        <div class="posts-card__info">
                                            <div class="posts-card__date-author">
                                                <div class="posts-card__date">
                                                    November 3, 2022
                                                    <img src="storage/img/svg.qodef-svg--underline.png" alt="underline">
                                                </div>
                                                <div class="posts-card__author">
                                                    cortado
                                                    <img src="storage/img/svg.qodef-svg--underline.png" alt="underline">
                                                </div>
                                            </div>
                                            <div class="posts-card__title">
                                                The Most Common Way People Drink Noir Café
                                            </div>
                                            <div class="posts-card__infomore _infomore">
                                                <button type="button" class="our-blends__infobtn _infomore__btn">Read More</button><img class="our-blends__infoimg" src="storage/img/arrow.png"> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="recent-posts__coll-item posts-card">
                                        <div class="posts-card__img">
                                            <img src="storage/img/recent_posts/4.jpg" alt="coffee shop post image">
                                        </div>
                                        <div class="posts-card__info">
                                            <div class="posts-card__date-author">
                                                <div class="posts-card__date">
                                                    November 4, 2022
                                                    <img src="storage/img/svg.qodef-svg--underline.png" alt="underline">
                                                </div>
                                                <div class="posts-card__author">
                                                    cortado
                                                    <img src="storage/img/svg.qodef-svg--underline.png" alt="underline">
                                                </div>
                                            </div>
                                            <div class="posts-card__title">
                                                Coffee Beans Prepared In Four Different Ways
                                            </div>
                                            <div class="posts-card__infomore _infomore">
                                                <button type="button" class="our-blends__infobtn _infomore__btn">Read More</button><img class="our-blends__infoimg" src="storage/img/arrow.png"> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="recent-posts__coll-item posts-card">
                                        <div class="posts-card__img">
                                            <img src="storage/img/recent_posts/5.jpg" alt="coffee shop post image">
                                        </div>
                                        <div class="posts-card__info">
                                            <div class="posts-card__date-author">
                                                <div class="posts-card__date">
                                                    November 5, 2022
                                                    <img src="storage/img/svg.qodef-svg--underline.png" alt="underline">
                                                </div>
                                                <div class="posts-card__author">
                                                    cortado
                                                    <img src="storage/img/svg.qodef-svg--underline.png" alt="underline">
                                                </div>
                                            </div>
                                            <div class="posts-card__title">
                                                The Baristan Kettle is a Beacon for Preparation
                                            </div>
                                            <div class="posts-card__infomore _infomore">
                                                <button type="button" class="our-blends__infobtn _infomore__btn">Read More</button><img class="our-blends__infoimg" src="storage/img/arrow.png"> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="recent-posts__coll-item posts-card">
                                        <div class="posts-card__img">
                                            <img src="storage/img/recent_posts/6.jpg" alt="coffee shop post image">
                                        </div>
                                        <div class="posts-card__info">
                                            <div class="posts-card__date-author">
                                                <div class="posts-card__date">
                                                    November 6, 2022
                                                    <img src="storage/img/svg.qodef-svg--underline.png" alt="underline">
                                                </div>
                                                <div class="posts-card__author">
                                                    cortado
                                                    <img src="storage/img/svg.qodef-svg--underline.png" alt="underline">
                                                </div>
                                            </div>
                                            <div class="posts-card__title">
                                                The World’s Best Coffee Tours: Brasil, Columbi
                                            </div>
                                            <div class="posts-card__infomore _infomore">
                                                <button type="button" class="our-blends__infobtn _infomore__btn">Read More</button><img class="our-blends__infoimg" src="storage/img/arrow.png"> 
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="barista-schools">
                    <div class="container">
                        <div class="barista-schools__row">
                            <div class="barista-schools__img">
                                <img src="storage/img/school/school.jpg" alt="barista schools img">
                            </div>
                            <div class="barista-schools__info">
                                <div class="barista-schools__title _anton-35-black">
                                    Barista Schools & Careers
                                </div>
                                <div class="barista-schools__text">
                                    We host courses covering everything from simple home brewing techniques to advanced latte art to allow you to learn the essential life skill of how to make truly great coffee.
                                </div>
                                <div class="barista-schools__btn black-btn">
                                    <button type="button" class="black-btn__btn">View More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="supplies">
                    <div class="container">
                        <div class="supplies__big-title _big-title">
                            Our trusted Supplies
                        </div>
                        <div class="supplies__row">
                            <div class="supplies__item item-supplies">
                                <div class="item-supplies__img">
                                    <img src="storage/img/supplies/1.png" alt="coffee supplies images">
                                </div>
                            </div>
                            <div class="supplies__item item-supplies">
                                <div class="item-supplies__img">
                                    <img src="storage/img/supplies/2.png" alt="coffee supplies images">
                                </div>
                            </div>
                            <div class="supplies__item item-supplies">
                                <div class="item-supplies__img">
                                    <img src="storage/img/supplies/3.png" alt="coffee supplies images">
                                </div>
                            </div>
                            <div class="supplies__item item-supplies">
                                <div class="item-supplies__img">
                                    <img src="storage/img/supplies/4.png" alt="coffee supplies images">
                                </div>
                            </div>
                            <div class="supplies__item item-supplies">
                                <div class="item-supplies__img">
                                    <img src="storage/img/supplies/5.png" alt="coffee supplies images">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="coffee-menu">
                    <div class="container">
                        <div class="coffee-menu__row">
                            <div class="coffee-menu__menu">
                                <div class="coffee-menu__menu-ul coffee-menu-list">
                                    <div class="coffee-menu-list__item">
                                        <div class="coffee-menu-list__title-price">
                                            <div class="coffee-menu-list__title">Caffe Latte</div>
                                            <div class="coffee-menu-list__price">5.00$</div>
                                        </div>
                                        <div class="coffee-menu-list__description">
                                            Fresh brewed coffee
                                        </div>
                                    </div>
                                    <div class="coffee-menu-list__item">
                                        <div class="coffee-menu-list__title-price">
                                            <div class="coffee-menu-list__title">Cappucino</div>
                                            <div class="coffee-menu-list__price">7.00$</div>
                                        </div>
                                        <div class="coffee-menu-list__description">
                                            Espresso and milk
                                        </div>
                                    </div>
                                    <div class="coffee-menu-list__item">
                                        <div class="coffee-menu-list__title-price">
                                            <div class="coffee-menu-list__title">Ice Coffee</div>
                                            <div class="coffee-menu-list__price">4.00$</div>
                                        </div>
                                        <div class="coffee-menu-list__description">
                                            Cold brewed espresso
                                        </div>
                                    </div>
                                    <div class="coffee-menu-list__item">
                                        <div class="coffee-menu-list__title-price">
                                            <div class="coffee-menu-list__title">Mocha</div>
                                            <div class="coffee-menu-list__price">7.00$</div>
                                        </div>
                                        <div class="coffee-menu-list__description">
                                        Espresso, mocha sauce, milk
                                        </div>
                                    </div>
                                    <div class="coffee-menu-list__item">
                                        <div class="coffee-menu-list__title-price">
                                            <div class="coffee-menu-list__title">Espresso</div>
                                            <div class="coffee-menu-list__price">4.00$</div>
                                        </div>
                                        <div class="coffee-menu-list__description">
                                            Rich espresso with milk
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="coffee-menu__title-img">
                                <img src="storage/img/our_menu/img.jpg">
                                <div class="coffee-menu__title-img-title">
                                    <h1>Our Coffee</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="follow-us">
                    <div class="container">
                        <div class="follow-us__wrapper">
                            <div class="follow-us__title _big-title">
                                Follow Us For More
                            </div>
                            <div class="follow-us__cards-wripper">
                                <div class="follow-us__cards cards-box">
                                    <div class="cards-box__item">
                                        <img src="storage/img/follow_us/1.jpg" alt="coffee shop cards image">
                                    </div>
                                    <div class="cards-box__item">
                                        <img src="storage/img/follow_us/2.jpg" alt="coffee shop cards image">
                                    </div>
                                    <div class="cards-box__item">
                                        <img src="storage/img/follow_us/3.jpg" alt="coffee shop cards image">
                                    </div>
                                    <div class="cards-box__item">
                                        <img src="storage/img/follow_us/4.jpg" alt="coffee shop cards image">
                                    </div>
                                    <div class="cards-box__item">
                                        <img src="storage/img/follow_us/5.jpg" alt="coffee shop cards image">
                                    </div>
                                    <div class="cards-box__item">
                                        <img src="storage/img/follow_us/6.jpg" alt="coffee shop cards image">
                                    </div>
                                    <div class="cards-box__item">
                                        <img src="storage/img/follow_us/7.jpg" alt="coffee shop cards image">
                                    </div>
                                    <div class="cards-box__item">
                                        <img src="storage/img/follow_us/8.jpg" alt="coffee shop cards image">
                                    </div>
                                    <div class="cards-box__item">
                                        <img src="storage/img/follow_us/9.jpg" alt="coffee shop cards image">
                                    </div>
                                    <div class="cards-box__item">
                                        <img src="storage/img/follow_us/10.jpg" alt="coffee shop cards image">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="map">
                    <div class="container">
                        <div class="map__frame mb-5">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2079.7238979902613!2d1.5383474956499115!3d42.509115643868476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2ssa!4v1699957724072!5m2!1sen!2ssa" 
                                width="320" 
                                height="420" 
                                style="border:0;" 
                                allowfullscreen="" 
                                loading="lazy" 
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                    </div>

                </section>

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

            </main>
        </div>

    </body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- <script src="storage/js/main.js"></script> -->
    @vite(['resources/js/main.js'])

</html>
