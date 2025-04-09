<!-- Header Start -->
<header class="main-header">
  <div class="header-sticky">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <!-- Logo Start -->
        <a class="navbar-brand" href="./">
          <img src="{{ asset('images/logo.svg') }}" alt="Logo">
        </a>
        <!-- Logo End -->

        <!-- Main Menu Start -->
        <div class="collapse navbar-collapse main-menu">
          <div class="nav-menu-wrapper">
            <ul class="navbar-nav mr-auto" id="menu">
              <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ route('front.about') }}">About Us</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ route('front.menu') }}">Menu</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ route('front.contact') }}">Contact Us</a></li>
            </ul>
          </div>
          <!-- Header Contact Box Start -->
          <div class="header-btn">
            <a href="{{ url('contact.html') }}" class="btn-default">Book a Table</a>
          </div>
          <!-- Header Contact Box End -->
        </div>
        <!-- Main Menu End -->
        <div class="navbar-toggle"></div>
      </div>
    </nav>
    <div class="responsive-menu"></div>
  </div>
</header>
<!-- Header End -->
