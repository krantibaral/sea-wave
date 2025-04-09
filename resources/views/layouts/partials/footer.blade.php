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
                            <h2 class="text-anime-style-2" data-cursor="-opaque">reserve now your table and <span>enjoy dining experience.</span></h2>
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
                        <form id="appointmentForm" action="#" method="POST" data-toggle="validator" class="wow fadeInUp">
                            <div class="row">
                                <div class="form-group col-md-12 mb-4">
                                    <label class="form-label">your name</label>
                                    <input type="text" name="name" class="form-control" id="name" placeholder="e.g. John" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <label class="form-label">email address</label>
                                    <input type="email" name ="email" class="form-control" id="email" placeholder="e.g. John@example.com" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                                
                                <div class="form-group col-md-6 mb-4">
                                    <label class="form-label">phone number</label>
                                    <input type="text" name="phone" class="form-control" id="phone" placeholder="e.g. + 123 456 8792" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-4 mb-4">
                                    <label class="form-label">date</label>
                                    <input type="date" name="date" class="form-control" id="date" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-4 mb-4">
                                    <label class="form-label">time</label>
                                    <select name="time" class="form-control form-select" id="time" required>
                                        <option value="" disabled selected>Select time</option>
                                        <option value="6_30pm">06:30 PM</option>
                                        <option value="7_00pm">07:00 PM</option>
                                        <option value="7_30pm">07:30 PM</option>
                                        <option value="8_00pm">08:00 PM</option>
                                        <option value="8_30pm">08:30 PM</option>
                                        <option value="9_00pm">09:00 PM</option>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-4 mb-4">
                                    <label class="form-label">Number Of Person</label>
                                    <select name="person" class="form-control form-select" id="person" required>
                                        <option value="" disabled selected>number of person</option>
                                        <option value="1_person">1 Person</option>
                                        <option value="5_person">5 Person</option>
                                        <option value="10_person">10 Person</option>
                                        <option value="15_person">15 Person</option>
                                        <option value="20_person">20 Person</option>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="reserve-table-btn">
                                        <button type="submit" class="btn-default">reserve now</button>
                                        <div id="msgSubmit" class="h3 hidden"></div>
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
            <img src="{{ asset('images/logo.svg') }}" alt="Logo">
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
