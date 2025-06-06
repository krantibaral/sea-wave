@extends('layouts.app')
@section('content')
    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Contact us</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">contact us</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Page Contact Us Start -->
    <div class="page-contact-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Contect Us Content Start -->
                    <div class="contact-us-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">contact us</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Get in touch <span>with us</span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Have a question, craving, or event in mind? We’d
                                love to hear from you! Whether you’re looking to book our food truck, plan catering, or just
                                say hello — we’re here and ready to chat.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Contact Info List Start -->
                        <div class="contact-info-list wow fadeInUp" data-wow-delay="0.4s">
                            <ul>
                                <li>North Esplanade Glenelg North Adeliade South Australia</li>
                                <li><a href="tel:+61 432081334">+61 432 081 334</a></li>
                                <li><a href="#">seawavebistro@gmail.com</a></li>
                            </ul>
                        </div>
                        <!-- Contact Info List End -->

                        <!-- Contact Social List Start -->
                        <div class="contact-social-list wow fadeInUp" data-wow-delay="0.6s">
                            <ul>
                                <li><a href="#"><i class="fa-brands fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <!-- Contact Social List End -->
                    </div>
                    <!-- Contect Us Content End -->
                </div>

                <div class="col-lg-6">
                    <!-- Contact Form Start -->
                    <div class="contact-form">
                        <form method="POST" action="{{ route('contact.submit') }}" class="wow fadeInUp"
                            data-toggle="validator">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-12 mb-4">
                                    <label class="form-label">Your Name</label>
                                    <input type="text" name="name" class="form-control" id="Name" placeholder="e.g. John"
                                        required>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <label class="form-label">Email Address</label>
                                    <input type="email" name="email" class="form-control" id="Email"
                                        placeholder="e.g. John@example.com" required>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <label class="form-label">Phone Number</label>
                                    <input type="text" name="phone" class="form-control" id="Phone"
                                        placeholder="e.g. +1234567890" required>
                                </div>

                                <div class="form-group col-md-12 mb-5">
                                    <label class="form-label">Message</label>
                                    <textarea name="message" class="form-control" id="Message" rows="4"
                                        placeholder="Write Message.." required></textarea>
                                </div>

                                <div class="col-md-12">
                                    <button type="submit" class="btn-default">Submit Inquiry</button>
                                </div>
                            </div>
                        </form>

                    </div>

                    <!-- Contact Form End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Contact Us End -->

    <!-- Google Map Start -->
    <div class="google-map">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Google Map Start -->
                    @if (!empty($storeDetails->map_link))
                        <div class="google-map-iframe">
                            <iframe src="{{ $storeDetails->map_link }}" width="600" height="450" style="border:0;"
                                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    @endif


                    <!-- Google Map End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Google Map End -->
@endsection