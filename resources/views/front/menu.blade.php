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
                        <h2 class="text-anime-style-2" data-cursor="-opaque">our special <span>menu</span></h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">Enjoy the unique dishes from the basillico restaurant
                            that only our restaurant has,Fusce malesuada, lorem vitae euismod lobortis.</p>
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
                                                    <a href="#{{ $categorySlug }}" data-cursor-text="View">
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



@endsection