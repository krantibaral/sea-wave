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

    <!-- Our Approach Section Start -->
    <div class="our-approach">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">taste the best that surprise you</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">
                            Your Cravings, Our Mission —
                            <span>Menus Made for the Moment.</span>
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
                                        data-bs-target="#mission" type="button" role="tab" aria-selected="true">catering
                                        menu</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="vision-tab" data-bs-toggle="tab" data-bs-target="#vision"
                                        type="button" role="tab" aria-selected="false">food truck
                                        menu</button>
                                </li>
                                <!-- <li class="nav-item" role="presentation">
                                                                                                                                <button class="nav-link" id="value-tab" data-bs-toggle="tab" data-bs-target="#value"
                                                                                                                                    type="button" role="tab" aria-selected="false">our value</button>
                                                                                                                            </li> -->
                            </ul>
                        </div>
                        <!-- Sidebar Our Approch Nav End -->

                        <!-- Approch Box Start -->
                        <div class="approch-box tab-content" id="approchTabContent">
                            <!-- Approch Item Start -->
                            <div class="approch-item tab-pane fade show active" id="mission" role="tabpanel">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <!-- Special Menu List Start -->
                                        <div class="special-menu-list">
                                            @foreach($cateringCategories as $category)
                                                @php
                                                    $categorySlug = Str::slug($category->category_name);
                                                @endphp

                                                <div class="special-menu-item wow fadeInUp"
                                                    data-wow-delay="{{ $loop->index * 0.2 }}s">
                                                    <div class="special-menu-img">
                                                        <a href="{{ route('front.menu-details', ['slug' => $categorySlug]) }}"
                                                            data-cursor-text="View">
                                                            <figure class="image-anime">
                                                                <img src="{{ $category->getFirstMediaUrl('catering_menu_category_images') ?: asset('images/default.jpg') }}"
                                                                    alt="{{ $category->category_name }}">
                                                            </figure>
                                                        </a>
                                                    </div>
                                                    <div class="special-menu-item-content">
                                                        <h3>
                                                            <a
                                                                href="{{ route('front.menu-details', ['slug' => $categorySlug]) }}">
                                                                {{ $category->category_name }}
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


                    </div>
                    <!-- Approch Item End -->

                    <!-- Approch Item Start -->
                    <div class="approch-item tab-pane fade" id="vision" role="tabpanel">
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- Special Menu List Start -->
                                <div class="special-menu-list">
                                    @foreach($foodTruckCategories as $category)
                                        @php
                                            $categorySlug = Str::slug($category->category_name);
                                        @endphp

                                        <div class="special-menu-item wow fadeInUp" data-wow-delay="{{ $loop->index * 0.2 }}s">
                                            <div class="special-menu-img">
                                                <a href="{{ route('front.menu-details', ['slug' => $categorySlug]) }}"
                                                    data-cursor-text="View">
                                                    <figure class="image-anime">
                                                        <img src="{{ $category->getFirstMediaUrl('food_truck_category_images') ?: asset('images/default.jpg') }}"
                                                            alt="{{ $category->category_name }}">
                                                    </figure>
                                                </a>
                                            </div>
                                            <div class="special-menu-item-content">
                                                <h3>
                                                    <a href="{{ route('front.menu-details', ['slug' => $categorySlug]) }}">
                                                        {{ $category->category_name }}
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
                <!-- Approch Box End -->
            </div>
            <!-- Our Approch Tab End -->
        </div>
    </div>
    <div class="our-food-menu">
        <!-- Food Menu Item Start -->
        <div class="food-menu-item">
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
                                @php
                                    // Determine if it's a CateringMenu or FoodTruckMenu based on the relationship
                                    $category = $menu->category;
                                    $categoryImage = null;

                                    if ($menu instanceof \App\Models\CateringMenu && $category) {
                                        $categoryImage = $category->getFirstMediaUrl('catering_menu_category_images');
                                    } elseif ($menu instanceof \App\Models\FoodTruckMenu && $category) {
                                        $categoryImage = $category->getFirstMediaUrl('food_truck_category_images');
                                    }

                                    $imageUrl = $categoryImage ?: asset('images/default.jpg');
                                @endphp

                                <div class="our-menu-item wow fadeInUp" data-wow-delay="0.4s">
                                    <div class="our-menu-image">
                                        <figure>
                                            <img src="{{ $imageUrl }}" alt="{{ $menu?->category_name ?? 'Category' }}">
                                        </figure>
                                    </div>

                                    <div class="menu-item-body">
                                        <div class="menu-item-title">
                                            <h3>{{ $menu->menu_name }}</h3>
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
        </div>
    </div>
@endsection