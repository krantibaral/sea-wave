@extends('layouts.app')
@section('content')

    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">About us</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">about us</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

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
                                <img src="images/about-us-image.jpg" alt="">
                            </figure>
                        </div>
                        <!-- About Us Img End -->

                        <!-- Company Experience Box Start -->
                        <div class="company-experience">
                            <div class="icon-box">
                                <img src="images/icon-company-experience.svg" alt="">
                            </div>

                            <div class="company-experience-content">
                                <h3><span class="counter">30</span>+ years of experience</h3>
                            </div>
                        </div>
                        <!-- Company Experience Box End -->

                        <!-- About Author Image Start -->
                        <div class="about-author-img">
                            <figure class="image-anime">
                                <img src="images/about-us-img-2.jpg" alt="">
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
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Our Commitment to Authenticity &
                                <span>excellence</span>
                            </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Every dish we create is a celebration of
                                connection, crafted with passion and inspired by diverse flavors. Join us in an inviting
                                space where every bite sparks joy and every moment becomes a cherished memory.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- About Content List Start -->
                        <div class="about-content-list wow fadeInUp" data-wow-delay="0.4s">
                            <ul>
                                <li>seasonal & locally sourced ingredients</li>
                                <li>vegetarian & dietary-friendly options</li>
                                <li>exquisite pairings & unique flavors</li>
                            </ul>
                        </div>
                        <!-- About Content List End -->

                        <!-- About Content Buttons Start -->
                        <div class="about-content-btn wow fadeInUp" data-wow-delay="0.6s">
                            <!-- <a href="contact.html" class="btn-default">order now</a> -->
                            <a href="{{ route('front.contact') }}" class="btn-default btn-highlighted">contact us</a>
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
                                <h3>premium dining</h3>
                                <p>It's very personal, and can only be a positive experience.</p>
                            </div>
                        </div>
                        <!-- About Detail Item End -->

                        <!-- About Detail Item Start -->
                        <div class="about-detail-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="icon-box">
                                <img src="images/icon-about-detail-2.svg" alt="">
                            </div>
                            <div class="about-detail-content">
                                <h3>abundant flavors</h3>
                                <p>At secret recipe, we take immense pride in crafting.</p>
                            </div>
                        </div>
                        <!-- About Detail Item End -->

                        <!-- About Detail Item Start -->
                        <div class="about-detail-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="icon-box">
                                <img src="images/icon-about-detail-3.svg" alt="">
                            </div>
                            <div class="about-detail-content">
                                <h3>indigenous meal</h3>
                                <p>With local ingredients, unique spins on traditional flavors.</p>
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

    <!-- Our Approach Section Start -->
    <div class="our-approach">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">our approach</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Delivering memorable dining
                            <span>experiences</span>
                        </h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Our Approch Tab Start -->
                    <div class="our-approch-tab">
                        <!-- Sidebar Our Approch Nav start -->
                        <div class="our-approch-tab-nav wow fadeInUp" data-wow-delay="0.2s">
                            <ul class="nav nav-tabs" id="approchTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="mission-tab" data-bs-toggle="tab"
                                        data-bs-target="#mission" type="button" role="tab" aria-selected="true">our
                                        mission</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="vision-tab" data-bs-toggle="tab" data-bs-target="#vision"
                                        type="button" role="tab" aria-selected="false">our vision</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="value-tab" data-bs-toggle="tab" data-bs-target="#value"
                                        type="button" role="tab" aria-selected="false">our value</button>
                                </li>
                            </ul>
                        </div>
                        <!-- Sidebar Our Approch Nav End -->

                        <!-- Approch Box Start -->
                        <div class="approch-box tab-content" id="approchTabContent">
                            <!-- Approch Item Start -->
                            <div class="approch-item tab-pane fade show active" id="mission" role="tabpanel">
                                <div class="row align-items-center">
                                    <div class="col-lg-6">
                                        <!-- Approch Tab Content Start -->
                                        <div class="approch-tab-content">
                                            <!-- Section Title Start -->
                                            <div class="section-title">
                                                <h3 class="wow fadeInUp">our mission</h3>
                                                <h2 class="text-anime-style-2" data-cursor="-opaque">creating moments around
                                                    flavor</h2>
                                                <p class="wow fadeInUp" data-wow-delay="0.2s">At SpicyHunt, our vision is to
                                                    redefine the dining experience by bringing people together over
                                                    authentic, flavorful meals crafted with love and passion. We aim to be a
                                                    beacon of culinary excellence, where every dish tells a story of
                                                    tradition, innovation, and uncompromising quality.</p>
                                            </div>
                                            <!-- Section Title End -->

                                            <!-- Approch Tab Content List Start -->
                                            <div class="approch-tab-content-list wow fadeInUp" data-wow-delay="0.4s">
                                                <ul>
                                                    <li>Delivering unforgettable flavors with every dish we serve.</li>
                                                    <li>Creating a welcoming space where food connects hearts.</li>
                                                    <li>Committed to quality, innovation, and exceptional service.</li>
                                                </ul>
                                            </div>
                                            <!-- Approch Tab Content List End -->
                                        </div>
                                        <!-- Approch Tab Content End -->
                                    </div>
                                    <div class="col-lg-6">
                                        <!-- Approch Tab Image Start -->
                                        <div class="approch-tab-image">
                                            <figure class="image-anime">
                                                <img src="images/our-mission-img.jpg" alt="">
                                            </figure>
                                        </div>
                                        <!-- Approch Tab Image End -->
                                    </div>
                                </div>
                            </div>
                            <!-- Approch Item End -->

                            <!-- Approch Item Start -->
                            <div class="approch-item tab-pane fade" id="vision" role="tabpanel">
                                <div class="row align-items-center">
                                    <div class="col-lg-6">
                                        <!-- Approch Tab Content Start -->
                                        <div class="approch-tab-content">
                                            <!-- Section Title Start -->
                                            <div class="section-title">
                                                <h3>our vision</h3>
                                                <h2 data-cursor="-opaque">creating moments around flavor</h2>
                                                <p>At SpicyHunt, our vision is to redefine the dining experience by bringing
                                                    people together over authentic, flavorful meals crafted with love and
                                                    passion. We aim to be a beacon of culinary excellence, where every dish
                                                    tells a story of tradition, innovation, and uncompromising quality.</p>
                                            </div>
                                            <!-- Section Title End -->

                                            <!-- Approch Tab Content List Start -->
                                            <div class="approch-tab-content-list">
                                                <ul>
                                                    <li>Delivering unforgettable flavors with every dish we serve.</li>
                                                    <li>Creating a welcoming space where food connects hearts.</li>
                                                    <li>Committed to quality, innovation, and exceptional service.</li>
                                                </ul>
                                            </div>
                                            <!-- Approch Tab Content List End -->
                                        </div>
                                        <!-- Approch Tab Content End -->
                                    </div>
                                    <div class="col-lg-6">
                                        <!-- Approch Tab Image Start -->
                                        <div class="approch-tab-image">
                                            <figure class="image-anime">
                                                <img src="images/our-vision-img.jpg" alt="">
                                            </figure>
                                        </div>
                                        <!-- Approch Tab Image End -->
                                    </div>
                                </div>
                            </div>
                            <!-- Approch Item End -->

                            <!-- Approch Item Start -->
                            <div class="approch-item tab-pane fade" id="value" role="tabpanel">
                                <div class="row align-items-center">
                                    <div class="col-lg-6">
                                        <!-- Approch Tab Content Start -->
                                        <div class="approch-tab-content">
                                            <!-- Section Title Start -->
                                            <div class="section-title">
                                                <h3>our value</h3>
                                                <h2 data-cursor="-opaque">creating moments around flavor</h2>
                                                <p>At SpicyHunt, our vision is to redefine the dining experience by bringing
                                                    people together over authentic, flavorful meals crafted with love and
                                                    passion. We aim to be a beacon of culinary excellence, where every dish
                                                    tells a story of tradition, innovation, and uncompromising quality.</p>
                                            </div>
                                            <!-- Section Title End -->

                                            <!-- Approch Tab Content List Start -->
                                            <div class="approch-tab-content-list">
                                                <ul>
                                                    <li>Delivering unforgettable flavors with every dish we serve.</li>
                                                    <li>Creating a welcoming space where food connects hearts.</li>
                                                    <li>Committed to quality, innovation, and exceptional service.</li>
                                                </ul>
                                            </div>
                                            <!-- Approch Tab Content List End -->
                                        </div>
                                        <!-- Approch Tab Content End -->
                                    </div>
                                    <div class="col-lg-6">
                                        <!-- Approch Tab Image Start -->
                                        <div class="approch-tab-image">
                                            <figure class="image-anime">
                                                <img src="images/our-value-img.jpg" alt="">
                                            </figure>
                                        </div>
                                        <!-- Approch Tab Image End -->
                                    </div>
                                </div>
                            </div>
                            <!-- Approch Item End -->
                        </div>
                        <!-- Approch Box End -->
                    </div>
                    <!-- Our Approch Tab End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Approach Section End -->

    <!-- Daily Offer Section Start -->
    <div class="daily-offer">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Daily Offer Image Start -->
                    <div class="daily-offer-image">
                        <div class="daily-offer-img">
                            <figure>
                                <img src="images/daily-offer-image.png" alt="">
                            </figure>
                        </div>

                        <!-- Delicious Burger Box Start -->
                        <div class="delicious-burger-box">
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
                        </div>
                        <!-- Delicious Burger Box End -->
                    </div>
                    <!-- Daily Offer Image End -->
                </div>

                <div class="col-lg-6">
                    <!-- Daily Offer Content Start -->
                    <div class="daily-offer-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">our daily offers</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">taste the savings with our <span>daily
                                    specials</span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Every day is an opportunity to enjoy your
                                favorites at a discounted price. Explore our daily rotating specials and indulge in
                                flavorful meals at a fraction of the cost.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Daily Offer List Start -->
                        <div class="daily-offer-list wow fadeInUp" data-wow-delay="0.4s">
                            <ul>
                                <li>seasonal & locally sourced ingredients</li>
                                <li>vegetarian & dietary-friendly options</li>
                                <li>exquisite pairings & unique flavors</li>
                            </ul>
                        </div>
                        <!-- Daily Offer List End -->

                        <!-- Daily Offer Button Start -->
                        <div class="daily-offer-btn wow fadeInUp" data-wow-delay="0.6s">
                            <!-- <a href="contact.html" class="btn-default">book table</a> -->
                            <a href="{{ route('front.menu') }}" class="btn-default btn-highlighted">explore menu</a>
                        </div>
                        <!-- Daily Offer Button End -->
                    </div>
                    <!-- Daily Offer Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Daily Offer Section End -->

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
                            <a href="https://www.youtube.com/watch?v=Y-x0efG1seA" class="popup-video"
                                data-cursor-text="Play">play</a>
                        </div>
                        <!-- Video Play Button End -->
                    </div>
                    <!-- Intro Video Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Intro Video Section End -->

    <!-- Our Team Section Start -->
    <div class="our-team">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">always quality</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">the talented minds behind every
                            <span>flavourful dish</span>
                        </h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <!-- Team Member Item Start -->
                    <div class="team-item wow fadeInUp">
                        <!-- team Image Start -->
                        <div class="team-image">
                            <a href="chef-single.html" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="images/team-1.jpg" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- team Image End -->

                        <!-- Team Body Start -->
                        <div class="team-body">
                            <!-- Team Content Start -->
                            <div class="team-content">
                                <h3><a href="chef-single.html">sophia martinez</a></h3>
                                <p>executive chef</p>
                            </div>
                            <!-- Team Content End -->

                            <!-- Team Social List Start -->
                            <div class="team-social-list">
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                </ul>
                            </div>
                            <!-- Team Social List End -->
                        </div>
                        <!-- Team Body End -->
                    </div>
                    <!-- Team Member Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Team Member Item Start -->
                    <div class="team-item wow fadeInUp" data-wow-delay="0.2s">
                        <!-- team Image Start -->
                        <div class="team-image">
                            <a href="chef-single.html" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="images/team-2.jpg" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- team Image End -->

                        <!-- Team Body Start -->
                        <div class="team-body">
                            <!-- Team Content Start -->
                            <div class="team-content">
                                <h3><a href="chef-single.html">liam patel</a></h3>
                                <p>sous chef</p>
                            </div>
                            <!-- Team Content End -->

                            <!-- Team Social List Start -->
                            <div class="team-social-list">
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                </ul>
                            </div>
                            <!-- Team Social List End -->
                        </div>
                        <!-- Team Body End -->
                    </div>
                    <!-- Team Member Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Team Member Item Start -->
                    <div class="team-item wow fadeInUp" data-wow-delay="0.4s">
                        <!-- team Image Start -->
                        <div class="team-image">
                            <a href="chef-single.html" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="images/team-3.jpg" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- team Image End -->

                        <!-- Team Body Start -->
                        <div class="team-body">
                            <!-- Team Content Start -->
                            <div class="team-content">
                                <h3><a href="chef-single.html">isabella carter</a></h3>
                                <p>pastry chef</p>
                            </div>
                            <!-- Team Content End -->

                            <!-- Team Social List Start -->
                            <div class="team-social-list">
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                </ul>
                            </div>
                            <!-- Team Social List End -->
                        </div>
                        <!-- Team Body End -->
                    </div>
                    <!-- Team Member Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Team Member Item Start -->
                    <div class="team-item wow fadeInUp" data-wow-delay="0.6s">
                        <!-- team Image Start -->
                        <div class="team-image">
                            <a href="chef-single.html" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="images/team-4.jpg" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- team Image End -->

                        <!-- Team Body Start -->
                        <div class="team-body">
                            <!-- Team Content Start -->
                            <div class="team-content">
                                <h3><a href="chef-single.html">ethan johnson</a></h3>
                                <p>restaurant manager</p>
                            </div>
                            <!-- Team Content End -->

                            <!-- Team Social List Start -->
                            <div class="team-social-list">
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                </ul>
                            </div>
                            <!-- Team Social List End -->
                        </div>
                        <!-- Team Body End -->
                    </div>
                    <!-- Team Member Item End -->
                </div>

                <div class="col-lg-12">
                    <!-- Section Footer Text Start -->
                    <div class="section-footer-text wow fadeInUp" data-wow-delay="0.8s">
                        <p>Meet the passionate team behind every flavour and experience <a href="chefs.html">meet our
                                team</a></p>
                    </div>
                    <!-- Section Footer Text End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Team Section End -->

@endsection