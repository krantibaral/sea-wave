@extends('layouts.app')
@section('content')
    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">our menu</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">menu</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Page Menu Start -->
    <div class="page-menu">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">taste the best that surprise you</h3>


                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Special Menu List Start -->
                    <div class="special-menu-list">
                        @foreach($menus->groupBy('category.category_name') as $categoryName => $groupedMenus)
                                            @php
                                                $firstMenu = $groupedMenus->first();
                                                $categorySlug = Str::slug($categoryName);
                                            @endphp

                                            <div class="special-menu-item wow fadeInUp" data-wow-delay="{{ $loop->index * 0.2 }}s">
                                                <div class="special-menu-img">
                                                    <a href="{{ route('front.menu-details', ['slug' => $categorySlug]) }}"
                                                        data-cursor-text="View">
                                                        <figure class="image-anime">
                                                            <img src="{{ $firstMenu->getFirstMediaUrl('food_images') ?: asset('images/default.jpg') }}"
                                                                alt="{{ $categoryName }}">
                                                        </figure>
                                                    </a>
                                                </div>
                                                <div class="special-menu-item-content">
                                                    <h3>
                                                        <a href="{{ route('front.menu-details', ['slug' => $categorySlug]) }}">
                                                            {{ $categoryName }}
                                                        </a>
                                                    </h3>
                                                </div>
                                            </div>

                        @endforeach
                    </div>
                    <!-- Special Menu List End -->
                </div>

            </div>
        </div>
    </div>
    <!-- Page Menu End -->

    <!-- Our Food Menu End -->
    <div class="our-food-menu">
        <!-- Food Menu Item Start -->
        <div class="food-menu-item" id="{{ strtolower($categoryName) }}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <!-- Food Menu Sidebar Start -->
                        <div class="food-menu-sidebar">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h3 class="wow fadeInUp">menu & pricing</h3>
                                <h2 class="text-anime-style-2" data-cursor="-opaque">special menu</h2>
                            </div>
                            <!-- Section Title End -->
                        </div>
                        <!-- Food Menu Sidebar End -->
                    </div>

                    <div class="col-lg-9">
                        <!-- Our Menu List Start -->
                        <div class="our-menu-list">
                            @foreach ($specialMenus as $menu)
                                <!-- Our Menu Item Start -->
                                <div class="our-menu-item wow fadeInUp" data-wow-delay="0.4s">
                                    <!-- Our Menu Image Start -->
                                    <div class="our-menu-image">
                                        <figure>
                                            <img src="{{ $menu->getFirstMediaUrl('food_images') ?: asset('images/default.jpg') }}"
                                                alt="{{ $categoryName }}">
                                        </figure>
                                    </div>
                                    <!-- Our Menu Image End -->

                                    <!-- Menu Item Body Start -->
                                    <div class="menu-item-body">
                                        <!-- Menu Item Title Start -->
                                        <div class="menu-item-title">
                                            <h3>{{ $menu->name }}</h3>
                                            <hr>
                                            <span>${{ number_format($menu->price, 2) }}</span>
                                        </div>
                                        <!-- Menu Item Title End -->

                                        <!-- Menu Item Content Start -->
                                        <div class="menu-item-content">
                                            <p>{{ $menu->description }}</p>
                                        </div>
                                        <!-- Menu Item Content End -->
                                    </div>
                                    <!-- Menu Item Body End -->
                                </div>
                                <!-- Our Menu Item End -->
                            @endforeach
                        </div>
                        <!-- Our Menu List End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Food Menu Item End -->
    </div>


@endsection