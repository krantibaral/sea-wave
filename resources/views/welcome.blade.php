@extends('layouts.app')

@section('content')
    <!-- Hero Section Start -->
    <div class="hero parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Hero Content Start -->
                    <div class="hero-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Experience the Wave of Flavors </h3>
                            <h1 class="text-anime-style-2" data-cursor="-opaque">Ride the Wave of Taste at
                                <span>SeaWave Bistro</span>
                            </h1>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">We serve bold, fresh flavours straight from our
                                food truck to your hands, with a side of good vibes and coastal charm.
                                Whether you're stopping by the beach or booking us for your next event, we’ve got something
                                delicious waiting for you. </p>
                        </div>
                        <!-- Section Title End -->
                        <!-- Hero Button Start -->
                        <!-- <div class="hero-btn wow fadeInUp" data-wow-delay="0.4s">
                                                                                                                                                                                                                                                <a href="contact.html" class="btn-default">book a table</a>
                                                                                                                                                                                                                                                <a href="#" class="download-app-btn">download app <i class="fa-brands fa-google-play"></i></a>
                                                                                                                                                                                                                                                </div> -->
                        <!-- Hero Button End -->
                    </div>
                    <!-- Hero Content End -->
                </div>

                <div class="col-lg-6">
                    {{-- <!-- Hero Images Start -->
                    <div class="hero-images">
                        <!-- Hero Image Start -->
                        <div class="hero-image">
                            <figure class="image-anime">
                                <img src="images/hero-img.jpg" alt="">
                            </figure>
                        </div> --}}
                        <!-- Hero Image End -->

                        {{-- <!-- Hero Circle Image Start -->
                        <div class="hero-circle-img-1">
                            <figure class="image-anime">
                                <img src="images/hero-circle-img-1.jpg" alt="">
                            </figure>
                        </div>
                        <!-- Hero Circle Image End -->

                        <!-- Hero Circle Image Start -->
                        <div class="hero-circle-img-2">
                            <figure class="image-anime">
                                <img src="images/hero-circle-img-2.jpg" alt="">
                            </figure>
                        </div> --}}
                        <!-- Hero Circle Image End -->
                    </div>
                    <!-- Hero Images End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Section End -->
    <!-- About Us Section Start -->
    <div class="about-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-1 order-2">
                    <!-- About Us Image Start -->
                    <div class="about-us-image">
                        <!-- About Us Img Start -->
                        <div class="about-us-img">
                            <figure class="image-anime">
                                <img src="images/hero-bg.jpg" alt="">
                            </figure>
                        </div>
                        <!-- About Us Img End -->

                        <!-- Company Experience Box Start -->
                        {{-- <div class="company-experience">
                            <div class="icon-box">
                                <img src="images/logo.png" alt="">
                            </div>

                            <div class="company-experience-content">
                                <h3><span class="counter">5</span>+ years of experience</h3>
                            </div>
                        </div> --}}
                        <!-- Company Experience Box End -->

                        <!-- About Author Image Start -->
                        <div class="about-author-img">
                            <figure class="image-anime">
                                <img src="images/logo.png" alt="">
                            </figure>
                        </div>
                        <!-- About Author Image End -->
                    </div>
                    <!-- About Us Image End -->
                </div>

                <div class="col-lg-6  order-lg-2 order-1">
                    <!-- About Us Content Start -->
                    <div class="about-us-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">about us</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Bringing the Flavor of the Streets to
                                <span>Shores</span>
                            </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Every dish we create is a celebration of
                                connection, crafted with passion and inspired by diverse flavors. Join us in an inviting
                                space where every bite sparks joy and every moment becomes a cherished memory.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- About Content List Start -->
                        <div class="about-content-list wow fadeInUp" data-wow-delay="0.4s">
                            <ul>
                                <li>Fresh, quality ingredients – every time.</li>
                                <li>Friendly, fast service with a personal touch.</li>
                                <li>Creative, flavour-packed food that’s anything but ordinary.</li>
                                <li>Supporting local communities through authentic, heartfelt cooking.</li>
                            </ul>
                            Come for the food, stay for the vibe – and follow the wave wherever it takes you.
                        </div>
                        <!-- About Content List End -->

                        <!-- About Content Buttons Start -->
                        <div class="about-content-btn wow fadeInUp" data-wow-delay="0.6s">
                            <!-- <a href="contact.html" class="btn-default">order now</a> -->
                            <a href={{ route('front.about') }} class="btn-default btn-highlighted">read more</a>
                        </div>
                        <!-- About Content Buttons End -->
                    </div>
                    <!-- About Us Content End -->
                </div>

                <div class="col-lg-12 order-3">
                    <!-- About Detail Box Start -->
                    <div class="about-detail-box">
                        <!-- About Detail Item Start -->
                        <div class="about-detail-item wow fadeInUp">
                            <div class="icon-box">
                                <img src="images/icon-about-detail-1.svg" alt="">
                            </div>
                            <div class="about-detail-content">
                                <h3>Catering, the SeaWave Way</h3>
                                <p>Crafted with care, served with style, and always full of flavour.</p>
                            </div>
                        </div>
                        <!-- About Detail Item End -->

                        <!-- About Detail Item Start -->
                        <div class="about-detail-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="icon-box">
                                <img src="images/icon-about-detail-2.svg" alt="">
                            </div>
                            <div class="about-detail-content">
                                <h3>Wave of Flavours</h3>
                                <p>At SeaWave Bistro, every dish is crafted with passion and a punch of bold taste.</p>
                            </div>
                        </div>
                        <!-- About Detail Item End -->

                        <!-- About Detail Item Start -->
                        <div class="about-detail-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="icon-box">
                                <img src="images/icon-about-detail-3.svg" alt="">
                            </div>
                            <div class="about-detail-content">
                                <h3>Locally Inspired</h3>
                                <p>We fuse fresh local ingredients with street-style creativity and global flair.</p>
                            </div>
                        </div>
                        <!-- About Detail Item End -->
                    </div>
                    <!-- About Detail Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- About Us Section End -->

    <!-- Our Dishes Section Start -->
    <div class="our-dishes">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">our main dishes</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Our Signature Street Eats – Packed with
                            Flavour, <span>Made to Impress.</span></h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                @foreach ($specialMenus as $key => $menu)
                    <div class="col-lg-3 col-md-6">
                        <!-- Our Dish Item Start -->
                        <div class="our-dish-item wow fadeInUp" data-wow-delay="{{ $key * 0.2 }}s">
                            <div class="our-dish-img">
                                <figure class="image-anime">
                                    <img src="{{ $menu->getFirstMediaUrl('banner_images') }}" alt="{{ $menu->name }}">
                                </figure>
                            </div>
                            <div class="our-dish-content">
                                <h3>{{ $menu->name }}</h3>
                                <p>{{ $menu->description }}</p>
                            </div>
                        </div>
                        <!-- Our Dish Item End -->
                    </div>
                @endforeach

                <div class="col-lg-12">
                    <!-- Section Footer Text Start -->
                    <div class="section-footer-text wow fadeInUp" data-wow-delay="0.8s">
                        <p>Hungry for Something Delicious? <a href="{{ route('front.menu') }}">View All Dishes!</a></p>
                    </div>
                    <!-- Section Footer Text End -->
                </div>
            </div>

        </div>
    </div>
    <!-- Our Dishes Section End -->

    <!-- Daily Offer Section Start -->
    <div class="daily-offer">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Daily Offer Image Start -->
                    <div class="daily-offer-image">
                        <div class="daily-offer-img">
                            <figure>
                                <img src="
                                    images/cateern.jpg" alt="">
                            </figure>
                        </div>

                        <!-- Delicious Burger Box Start -->
                        {{-- <div class="delicious-burger-box">
                            <div class="delicious-burger-title">
                                <h3>Delicious Burger</h3>
                            </div>
                            <div class="delicious-burger-rating">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <div class="delicious-burger-list">
                                <ul>
                                    <li>tomato sauces</li>
                                    <li>vegitables</li>
                                    <li>lettuce</li>
                                    <li>cheese slice</li>
                                </ul>
                            </div>
                        </div> --}}
                        <!-- Delicious Burger Box End -->
                    </div>
                    <!-- Daily Offer Image End -->
                </div>

                <div class="col-lg-6">
                    <!-- Daily Offer Content Start -->
                    <div class="daily-offer-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">OUR CATERING OFFERS</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">FLAVOUR-FILLED EVENTS, <span>NOW WITH 10%
                                    OFF</span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Planning a celebration, office party, or special
                                gathering? Let SeaWave Bistro bring bold street eats and coastal vibes straight to your
                                event — and enjoy 10% off your first catering order.

                                Every booking includes custom menu options, dietary-friendly choices, and service with a
                                smile.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Daily Offer List Start -->
                        <div class="daily-offer-list wow fadeInUp" data-wow-delay="0.4s">
                            <ul>
                                <li>Fully Customisable Menus for Any Occasion</li>
                                <li>Fresh, Locally Sourced Ingredients</li>
                                <li>Vegetarian, Vegan & Gluten-Free Options</li>
                                <li>Hassle-Free Setup and Friendly On-Site Staff</li>
                            </ul>
                        </div>
                        <!-- Daily Offer List End -->

                        <div class="daily-offer-btn wow fadeInUp" data-wow-delay="0.6s">

                            <a href="{{ route('front.menu') }}" class="btn-default btn-highlighted">explore menu</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Daily Offer Section End -->

    {{-- <!-- Our Menu Section Start -->
    <div class="our-menu">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">from our menu</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">An Inspired Menu That <span>Blends
                                Tradition</span></h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Our Menu Tab Start -->
                    <div class="our-menu-tab">
                        <!-- Sidebar Our Menu Nav start -->

                        <!-- Sidebar Our Menu Nav End -->

                        <!-- Sidebar Our Menu Nav start -->
                        <div class="our-menu-tab-nav wow fadeInUp" data-wow-delay="0.2s">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                @foreach ($groupedMenus as $categoryName => $items)
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link @if ($loop->first) active @endif"
                                        id="{{ Str::slug($categoryName) }}-tab" data-bs-toggle="tab"
                                        data-bs-target="#{{ Str::slug($categoryName) }}" type="button" role="tab"
                                        aria-selected="{{ $loop->first ? 'true' : 'false' }}">
                                        {{ $categoryName }}
                                    </button>
                                </li>
                                @endforeach
                            </ul>
                        </div>

                        <!-- Tab Content -->
                        <div class="tab-content" id="myTabContent">
                            @foreach ($groupedMenus as $categoryName => $menus)
                            <div class="tab-pane fade @if ($loop->first) show active @endif"
                                id="{{ Str::slug($categoryName) }}" role="tabpanel">
                                <div class="row align-items-center">
                                    <div class="col-lg-12">
                                        <div class="our-menu-list">
                                            @foreach ($menus as $menu)
                                            <div class="our-menu-item">
                                                <!-- Our Menu Image Start -->
                                                <div class="our-menu-image">
                                                    <figure>
                                                        <img src="{{ $menu->getFirstMediaUrl('food_images') ?: asset('images/default.jpg') }}"
                                                            alt="{{ $menu->name }}">
                                                    </figure>
                                                </div>

                                                <!-- Menu Item Body Start -->
                                                <div class="menu-item-body">
                                                    <div class="menu-item-title">
                                                        <h3>{{ $menu->name }}</h3>
                                                        <hr>
                                                        <span>${{ number_format($menu->price, 2) }}</span>
                                                    </div>
                                                    <div class="menu-item-content">
                                                        <p>{{ $menu->description }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>

                    </div>
                    <!-- Our Approch Tab End -->
                </div>

                <div class="col-lg-12">
                    <!-- Section Footer Text Start -->
                    <div class="section-footer-text wow fadeInUp" data-wow-delay="0.4s">
                        <p>Ready to Savor the Best? <a href="{{ route('front.menu') }}">Check Our Dishes!</a></p>
                    </div>
                    <!-- Section Footer Text End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Menu Section End --> --}}

    <!-- Intro Video Section Start -->
    <div class="intro-video">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Intro Video Box Start -->
                    <div class="intro-video-box">
                        <div class="intro-bg-video">
                            <!-- Selfhosted Video Start -->
                            <!-- <video autoplay muted loop id="myVideo"><source src="images/hero-bg-video.mp4" type="video/mp4"></video> -->
                            <video autoplay muted loop id="myVideo">
                                <source src="https://demo.awaikenthemes.com/assets/videos/spicyhunt-intro-bg-video.mp4"
                                    type="video/mp4">
                            </video>
                            <!-- Selfhosted Video End -->

                            <!-- Youtube Video Start -->
                            <!-- <div id="herovideo" class="player" data-property="{videoURL:'74DWwSxsVSs',containment:'.hero-video', showControls:false, autoPlay:true, loop:true, vol:0, mute:false, startAt:0,  stopAt:296, opacity:1, addRaster:true, quality:'large', optimizeDisplay:true}"></div> -->
                            <!-- Youtube Video End -->
                        </div>
                        <!-- Video Play Button Start -->
                        <div class="video-play-button">
                            <a href="{{ $storeDetails->youtube_link ?? 'https://www.youtube.com/watch?v=ASrDoN2YsYc' }}"
                                class="popup-video" data-cursor-text="Play">
                                play
                            </a>
                        </div>

                        <!-- Video Play Button End -->
                    </div>
                    <!-- Intro Video Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Intro Video Section End -->

    <!-- Our Ingredients Section Start -->
    {{-- <div class="our-ingredients">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-1 order-2">
                    <!-- Our Ingredients Image Start -->
                    <div class="our-ingredients-image">
                        <!-- Our Ingredients Img Start -->
                        <div class="our-ingredients-img">
                            <figure>
                                <img src="images/our-ingredients-image.png" alt="">
                            </figure>
                        </div>
                        <!-- Our Ingredients Img End -->

                        <!-- Happy Customer Box Start -->
                        <div class="happy-customer-box">
                            <!-- Happy Customer Content Start -->
                            <div class="happy-customer-content">
                                <h3><span class="counter">620</span>+ exclusive</h3>
                                <p>happy customer</p>
                            </div>
                            <!-- Happy Customer Content End -->

                            <!-- Customer Review Images Start -->
                            <div class="happy-customer-images">
                                <!-- Customer Image Start -->
                                <div class="customer-image">
                                    <figure class="image-anime">
                                        <img src="images/happy-customer-img-1.jpg" alt="">
                                    </figure>
                                </div>
                                <!-- Customer Image End -->

                                <!-- Customer Image Start -->
                                <div class="customer-image">
                                    <figure class="image-anime">
                                        <img src="images/happy-customer-img-2.jpg" alt="">
                                    </figure>
                                </div>
                                <!-- Customer Image End -->

                                <!-- Customer Image Start -->
                                <div class="customer-image">
                                    <figure class="image-anime">
                                        <img src="images/happy-customer-img-3.jpg" alt="">
                                    </figure>
                                </div>
                                <!-- Customer Image End -->

                                <!-- Add More Customer Icon Start -->
                                <div class="customer-image add-more">
                                    <i class="fa-solid fa-plus"></i>
                                </div>
                                <!-- Add More Customer Icon End -->
                            </div>
                            <!-- Customer Review Images End -->
                        </div>
                        <!-- Happy Customer Box End -->
                    </div>
                    <!-- Our Ingredients Image End -->
                </div>

                <div class="col-lg-6 order-lg-2 order-1">
                    <!-- Our Ingredients Content Start -->
                    <div class="our-ingredients-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">our ingredients</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Crafting Dishes with <span>freshest
                                    Flavors</span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">We take pride in using only the freshest,
                                hand-picked ingredients that are free from preservatives and artificial additives. Taste the
                                difference with every bite as we serve dishes made from nature's finest.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Our Ingredients List Start -->
                        <div class="our-ingredients-list wow fadeInUp" data-wow-delay="0.4s">
                            <!-- Ingredients List Item Start -->
                            <div class="ingredients-list-item">
                                <div class="icon-box">
                                    <img src="images/icon-ingredients-list-1.svg" alt="">
                                </div>
                                <div class="ingredients-list-content">
                                    <h3>best qualities</h3>
                                </div>
                            </div>
                            <!-- Ingredients List Item End -->

                            <!-- Ingredients List Item Start -->
                            <div class="ingredients-list-item">
                                <div class="icon-box">
                                    <img src="images/icon-ingredients-list-2.svg" alt="">
                                </div>
                                <div class="ingredients-list-content">
                                    <h3>discount system</h3>
                                </div>
                            </div>
                            <!-- Ingredients List Item End -->

                            <!-- Ingredients List Item Start -->
                            <div class="ingredients-list-item">
                                <div class="icon-box">
                                    <img src="images/icon-ingredients-list-3.svg" alt="">
                                </div>
                                <div class="ingredients-list-content">
                                    <h3>first delivery</h3>
                                </div>
                            </div>
                            <!-- Ingredients List Item End -->
                        </div>
                        <!-- Our Ingredients List End -->

                        <!-- Our Ingredients Button Start -->
                        <div class="our-ingredients-btn wow fadeInUp" data-wow-delay="0.6s">
                            <!-- <a href="contact.html" class="btn-default">book table</a> -->
                        </div>
                        <!-- Our Ingredients Button End -->
                    </div>
                    <!-- Our Ingredients Content End -->
                </div>


            </div>
        </div>
    </div> --}}
    <!-- Our Ingredients Section End -->

    <!-- Our Testimonial Section Start -->
    {{-- <div class="our-testimonial parallaxie">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">our testimonials</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">real stories of memorable <span>meals and
                                experiences</span></h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Testimonial Slider Start -->
                    <div class="testimonial-slider">
                        <div class="swiper">
                            <div class="swiper-wrapper" data-cursor-text="Drag">
                                @foreach ($testimonials as $testimonial)
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-quote">
                                            <img src="{{ asset('images/testimonial-quote.svg') }}" alt="">
                                        </div>
                                        <div class="testimonial-content">
                                            <p>{{ $testimonial->comment }}</p>
                                        </div>
                                        <div class="author-info">
                                            <div class="author-image">
                                                <figure class="image-anime">
                                                    <img src="{{ $testimonial->getFirstMediaUrl() }}" alt="Author Image">
                                                </figure>
                                            </div>
                                            <div class="author-content">
                                                <h3>{{ $testimonial->name }}</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="testimonial-btn">
                                <div class="testimonial-btn-prev"></div>
                                <div class="testimonial-btn-next"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Slider End -->
                </div>
            </div>

        </div>
    </div> --}}
    <!-- Our Testimonial Section End -->




    </div>
    </div>
    </div>
@endsection