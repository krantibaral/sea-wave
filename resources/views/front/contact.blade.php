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
                        <p class="wow fadeInUp" data-wow-delay="0.2s">Have questions or feedback? Reach out to us
                            through the form below, call us, or visit our restaurant. We're here to help and look
                            forward to connecting with you!</p>
                    </div>
                    <!-- Section Title End -->

                    <!-- Contact Info List Start -->
                    <div class="contact-info-list wow fadeInUp" data-wow-delay="0.4s">
                        <ul>
                            <li>27 Division St, New York, NY 10002, USA</li>
                            <li><a href="tel:780859632">+01 780 859 632</a></li>
                            <li><a href="#">info@domainname.com</a></li>
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
                    <form id="contactForm" action="#" method="POST" data-toggle="validator" class="wow fadeInUp">
                        <div class="row">
                            <div class="form-group col-md-12 mb-4">
                                <label class="form-label">your name</label>
                                <input type="text" name="Name" class="form-control" id="Name" placeholder="e.g. John"
                                    required>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-md-6 mb-4">
                                <label class="form-label">email address</label>
                                <input type="email" name="Email" class="form-control" id="Email"
                                    placeholder="e.g. John@example.com" required>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-md-6 mb-4">
                                <label class="form-label">phone number</label>
                                <input type="text" name="Phone" class="form-control" id="Phone"
                                    placeholder="e.g. + 123 456 879 2" required>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-md-12 mb-5">
                                <label class="form-label">message</label>
                                <textarea name="Message" class="form-control" id="Message" rows="4"
                                    placeholder="Write Message.."></textarea>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="col-md-12">
                                <button type="submit" class="btn-default">submit inquiry</button>
                                <div id="MsgSubmit" class="h3 hidden"></div>
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
                <div class="google-map-iframe">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96737.10562045308!2d-74.08535042841811!3d40.739265258395164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sin!4v1703158537552!5m2!1sen!2sin"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <!-- Google Map End -->
            </div>
        </div>
    </div>
</div>
<!-- Google Map End -->

@endsection