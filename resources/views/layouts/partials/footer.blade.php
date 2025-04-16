<!-- Reserve Table Section Start -->
<div class="reserve-table">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <!-- Reserve table Content Start -->
        <div class="reserve-table-content">
          <!-- Section Title Start -->
          <div class="section-title">
            <h3 class="wow fadeInUp">reserve a table</h3>
            <h2 class="text-anime-style-2" data-cursor="-opaque">reserve now your table and <span>enjoy dining
                experience.</span></h2>
          </div>
          <!-- Section Title End -->

          <!-- Reserve Table Body Start -->
          <div class="reserve-table-body wow fadeInUp" data-wow-delay="0.2s">
            <h3>open hours</h3>
            <ul>
              <li>Mon - Thu <span>10:00 AM - 09:00 PM</span></li>
              <li>Fri - Sat <span>09:00 AM - 10:00 PM</span></li>
              <li>Sun <span>Closed</span></li>
            </ul>
          </div>
          <!-- Reserve Table Body End -->
        </div>
        <!-- Reserve table Content End -->
      </div>

      <div class="col-lg-6">
        <!-- Reserve Table Form Start -->
        <div class="reserve-table-form">
          <form action="{{ route('reservations.store') }}" method="POST" data-toggle="validator" class="wow fadeInUp">
            @csrf
            <div class="row">
              <div class="form-group col-md-12 mb-4">
                <label class="form-label">Your Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="e.g. John"
                  value="{{ old('name') }}" required>
                @error('name') <div class="text-danger">{{ $message }}</div> @enderror
              </div>

              <div class="form-group col-md-6 mb-4">
                <label class="form-label">Email Address</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="e.g. John@example.com"
                  value="{{ old('email') }}" required>
                @error('email') <div class="text-danger">{{ $message }}</div> @enderror
              </div>

              <div class="form-group col-md-6 mb-4">
                <label class="form-label">Phone Number</label>
                <input type="text" name="phone" class="form-control" id="phone" placeholder="e.g. + 123 456 8792"
                  value="{{ old('phone') }}" required>
                @error('phone') <div class="text-danger">{{ $message }}</div> @enderror
              </div>

              <div class="form-group col-md-4 mb-4">
                <label class="form-label">Date</label>
                <input type="date" name="date" class="form-control" id="date" value="{{ old('date') }}" required>
                @error('date') <div class="text-danger">{{ $message }}</div> @enderror
              </div>

              <div class="form-group col-md-4 mb-4">
                <label class="form-label">Time</label>
                <input type="time" name="time" class="form-control" id="time" value="{{ old('time') }}" required>
                @error('time') <div class="text-danger">{{ $message }}</div> @enderror
              </div>

              <div class="form-group col-md-4 mb-4">
                <label class="form-label">Number of Persons</label>
                <input type="number" name="person" class="form-control" id="person" placeholder="e.g. 5"
                  value="{{ old('person') }}" min="1" required>
                @error('person') <div class="text-danger">{{ $message }}</div> @enderror
              </div>

              <div class="form-group col-md-12 mb-4">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="accept_terms" id="accept_terms" value="1"
                    required>
                  <label class="form-check-label" for="accept_terms">
                    I accept the <a href="#">Terms and Conditions</a>
                  </label>
                </div>
                @error('accept_terms') <div class="text-danger">{{ $message }}</div> @enderror
              </div>

              <div class="col-lg-12">
                <div class="reserve-table-btn">
                  <button type="submit" class="btn-default">Reserve Now</button>
                  @if(session('success'))
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
            <img src="{{ asset('images/logo.png') }}" alt="Logo" style="width: 60px; height: 60px;">
          </div>
          <!-- Footer Logo End -->

          <!-- Footer Contact Box Start -->
          <div class="footer-contact-box">
            <!-- Footer Contact Item Start -->
            <div class="footer-contact-item">
              <div class="icon-box">
                <img src="{{ asset('images/icon-location.svg') }}" alt="Location Icon">
              </div>
              <div class="footer-contact-content">
                <p>4517 Washington Ave, Kentucky 39495</p>
              </div>
            </div>
            <!-- Footer Contact Item End -->

            <!-- Footer Contact Item Start -->
            <div class="footer-contact-item">
              <div class="icon-box">
                <img src="{{ asset('images/icon-phone.svg') }}" alt="Phone Icon">
              </div>
              <div class="footer-contact-content">
                <p><a href="tel:078859632">+01 780 859 632</a></p>
              </div>
            </div>
            <!-- Footer Contact Item End -->
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
              <li><a href="#"><i class="fa-brands fa-dribbble"></i></a></li>
              <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
            </ul>
          </div>
          <!-- Footer Social Icon End -->
        </div>

        <div class="col-lg-6 col-md-6">
          <!-- Footer Copyright Start -->
          <div class="footer-copyright-text">
            <p>Copyright © 2025 All Rights Reserved.</p>
          </div>
          <!-- Footer Copyright End -->
        </div>
      </div>
    </div>
    <!-- Footer Copyright Section End -->
  </div>
</footer>
<!-- Main Footer Section End -->