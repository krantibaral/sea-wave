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
    <!-- Our Food Menu Start -->
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
                                <h2 class="text-anime-style-2" data-cursor="-opaque">{{ $categoryName }}</h2>
                            </div>
                            <!-- Section Title End -->
                        </div>
                        <!-- Food Menu Sidebar End -->
                    </div>

                    <div class="col-lg-9">
                        <!-- Our Menu List Start -->
                        <div class="our-menu-list">
                            @foreach ($menus as $menu)
                                <!-- Our Menu Item Start -->
                                <div class="our-menu-item wow fadeInUp" data-wow-delay="0.4s">
                                    <!-- Our Menu Image Start -->
                                 
                                    <!-- Our Menu Image End -->

                                    <!-- Menu Item Body Start -->
                                    <div class="menu-item-body">
                                        <!-- Menu Item Title Start -->
                                        <div class="menu-item-title">
                                            <h3>{{ $menu->menu_name }}</h3>
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