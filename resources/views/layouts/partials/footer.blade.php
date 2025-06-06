<!-- Reserve Table Section Start -->
<div class="reserve-table">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <!-- Reserve table Content Start -->
                <div class="reserve-table-content">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Book Us for Catering</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Let’s Bring the Flavour to <span>Your
                                Event</span></h2>
                    </div>
                    <!-- Section Title End -->

                    <!-- Reserve Table Body Start -->
                    <div class="reserve-table-body wow fadeInUp" data-wow-delay="0.2s">
                        <p style="text-align: justify; font-size: 16px; line-height: 1.6; margin-bottom: 15px;">
                            Planning a party, wedding, corporate event, or special gathering? SeaWave Bistro is ready to
                            roll in with bold
                            street-style flavours and relaxed coastal vibes that your guests will love.
                        </p>
                        <p style="text-align: justify; font-size: 16px; line-height: 1.6; margin-bottom: 15px;">
                            Whether it’s an intimate beachside celebration or a large-scale festival, we’ll tailor our
                            menu and service to
                            suit your style. From setup to service, we make it easy — and delicious.
                        </p>
                        <p style="font-size: 16px; font-weight: 500; text-align: justify; margin-bottom: 20px;">
                            Fill out the form below and let’s start planning something unforgettable. <br>
                            <strong>👉 Spots fill fast, so book early to lock in your date!</strong>
                        </p>
                    </div>
                    <!-- Reserve Table Body End -->
                </div>
                <!-- Reserve table Content End -->
            </div>

            <div class="col-lg-6">
                <!-- Reserve Table Form Start -->
                <div class="reserve-table-form">
                    <form action="{{ route('reservations.store') }}" method="POST" data-toggle="validator"
                        class="wow fadeInUp">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-12 mb-4">
                                <label class="form-label">Your Name</label>
                                <input type="text" name="name" class="form-control" id="name"
                                    placeholder="e.g. John" value="{{ old('name') }}" required>
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group col-md-6 mb-4">
                                <label class="form-label">Email Address</label>
                                <input type="email" name="email" class="form-control" id="email"
                                    placeholder="e.g. John@example.com" value="{{ old('email') }}" required>
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group col-md-6 mb-4">
                                <label class="form-label">Phone Number</label>
                                <input type="text" name="phone" class="form-control" id="phone"
                                    placeholder="e.g. + 123 456 8792" value="{{ old('phone') }}" required>
                                @error('phone')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group col-md-4 mb-4">
                                <label class="form-label">Date</label>
                                <input type="date" name="date" class="form-control" id="date"
                                    value="{{ old('date') }}" required>
                                @error('date')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group col-md-4 mb-4">
                                <label class="form-label">Time</label>
                                <input type="time" name="time" class="form-control" id="time"
                                    value="{{ old('time') }}" required>
                                @error('time')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group col-md-4 mb-4">
                                <label class="form-label">Number of Persons</label>
                                <input type="number" name="person" class="form-control" id="person"
                                    placeholder="e.g. 5" value="{{ old('person') }}" min="1" required>
                                @error('person')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group col-md-12 mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="accept_terms"
                                        id="accept_terms" value="1" required>
                                    <label class="form-check-label" for="accept_terms">
                                        I accept the <a href="#">Terms and Conditions</a>
                                    </label>
                                </div>
                                @error('accept_terms')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <div class="reserve-table-btn">
                                    <button type="submit" class="btn-default">Reserve Now</button>
                                    @if (session('success'))
                                        <div id="msgSubmit" class="alert alert-success mt-3">
                                            {{ session('success') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
                <!-- Reserve Table Form End -->
            </div>

        </div>
    </div>
</div>
<!-- Reserve Table Section End -->



<!-- Main Footer Section Start -->
<footer class="main-footer">
   <div class="container">
    <div class="row">
        <div class="col-lg-6">
            <!-- Footer Content Start -->
            <div class="footer-content">
                <!-- Footer Logo Start -->
                <div class="footer-logo">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" style="width: 80px; height: 80px;">
                </div>
                <!-- Footer Logo End -->

                <!-- Footer Contact Box Start -->
                <div class="footer-contact-box">
                    <!-- Location -->
                    <div class="footer-contact-item">
                        <div class="icon-box">
                            <img src="{{ asset('images/icon-location.svg') }}" alt="Location Icon">
                        </div>
                        <div class="footer-contact-content">
                            <p>{{ $storeDetails->location ?? 'North Esplanade Glenelg North Adelaide South Australia' }}</p>
                        </div>
                    </div>

                    <!-- Phone -->
                    <div class="footer-contact-item">
                        <div class="icon-box">
                            <img src="{{ asset('images/icon-phone.svg') }}" alt="Phone Icon">
                        </div>
                        <div class="footer-contact-content">
                            <p>
                                <a href="tel:{{ $storeDetails->phone_number ?? '+61 432 081 334' }}">
                                    {{ $storeDetails->phone_number ?? '+61 432 081 334' }}
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Footer Contact Box End -->
            </div>
            <!-- Footer Content End -->
        </div>
    </div>

    <!-- Footer Copyright Section Start -->
    <div class="footer-copyright">
        <div class="row align-items-center">
            <div class="col-md-6">
                <!-- Footer Social Icon Start -->
                <div class="footer-social-icon">
                    <ul>
                        <li> <a href="{{ $storeDetails->tiktok_link ?? '#' }}" target="_blank" rel="noopener">
                <i class="fa-brands fa-tiktok"></i>
            </a></li>
                        <li> <a href="{{ $storeDetails->facebook_link ?? '#' }}" target="_blank" rel="noopener">
                <i class="fab fa-facebook-f"></i>
            </a></li>
                        <li><a href="{{ $storeDetails->insta_link ?? '#' }}" target="_blank" rel="noopener">
                <i class="fa-brands fa-instagram"></i>
            </a></i></a></li>
                    </ul>
                </div>
                <!-- Footer Social Icon End -->
            </div>

            <div class="col-lg-6 col-md-6">
                <!-- Footer Copyright Start -->
                <div class="footer-copyright-text">
                    <p>Copyright © 2025 All Rights Reserved.</p>
                    <p>Developed By <a href="https://www.ableinnovation.com.np" target="_blank">Able Innovation</a></p>
                </div>
                <!-- Footer Copyright End -->
            </div>
        </div>
    </div>
    <!-- Footer Copyright Section End -->
</div>

</footer>
<!-- Main Footer Section End -->
