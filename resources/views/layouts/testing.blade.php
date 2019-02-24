<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

        <!-- FontAwesome CSS -->
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">

        <!-- ElegantFonts CSS -->
        <link rel="stylesheet" href="{{ asset('css/elegant-fonts.css') }}">

        <!-- themify-icons CSS -->
        <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">

        <!-- Swiper CSS -->
        <link rel="stylesheet" href="{{ asset('css/swiper.min.css') }}">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Better Life') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

</head>

<body class="single-page about-page">
<header class="site-header">
    <div class="top-header-bar">
        <div class="container">
            <div class="row flex-wrap justify-content-center justify-content-lg-between align-items-lg-center">
                <div class="col-12 col-lg-8 d-none d-md-flex flex-wrap justify-content-center justify-content-lg-start mb-3 mb-lg-0">
                    <div class="header-bar-email">
                        MAIL: <a href="#">contact@ourcharity.com</a>
                    </div><!-- .header-bar-email -->

                    <div class="header-bar-text">
                        <p>PHONE: <span>+24 3772 120 091 / +56452 4567</span></p>
                    </div><!-- .header-bar-text -->
                </div><!-- .col -->

                <div class="col-12 col-lg-4 d-flex flex-wrap justify-content-center justify-content-lg-end align-items-center">
                    <div class="donate-btn">
                        <a href="#">Donate Now</a>
                    </div><!-- .donate-btn -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .top-header-bar -->

    <div class="nav-bar">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex flex-wrap justify-content-between align-items-center">
                    <div class="site-branding d-flex align-items-center">
                        <a class="d-block" href="index.html" rel="home"><img class="d-block" src="images/logo.png" alt="logo"></a>
                    </div><!-- .site-branding -->

                    <nav class="site-navigation d-flex justify-content-end align-items-center">
                        <ul class="d-flex flex-column flex-lg-row justify-content-lg-end align-content-center">
                            <li class="current-menu-item"><a href="index.html">Home</a></li>
                            <li><a href="about.html">About us</a></li>
                            <li><a href="causes.html">Causes</a></li>
                            <li><a href="portfolio.html">Gallery</a></li>
                            <li><a href="news.html">News</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </nav><!-- .site-navigation -->

                    <div class="hamburger-menu d-lg-none">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div><!-- .hamburger-menu -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .nav-bar -->
</header><!-- .site-header -->

 @yield('content')

  <footer class="site-footer">
      <div class="footer-widgets">
          <div class="container">
              <div class="row">
                  <div class="col-12 col-md-6 col-lg-3">
                      <div class="foot-about">
                          <h2><a class="foot-logo" href="#"><img src="images/foot-logo.png" alt=""></a></h2>

                          <p>Lorem ipsum dolor sit amet, con sectetur adipiscing elit. Mauris temp us vestib ulum mauris.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris.Lorem ipsum dolo.</p>

                          <ul class="d-flex flex-wrap align-items-center">
                              <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                              <li><a href="#"><i class="fa fa-behance"></i></a></li>
                              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                          </ul>
                      </div><!-- .foot-about -->
                  </div><!-- .col -->

                  <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
                      <h2>Useful Links</h2>

                      <ul>
                          <li><a href="#">Privacy Polticy</a></li>
                          <li><a href="#">Become  a Volunteer</a></li>
                          <li><a href="#">Donate</a></li>
                          <li><a href="#">Testimonials</a></li>
                          <li><a href="#">Causes</a></li>
                          <li><a href="#">Portfolio</a></li>
                          <li><a href="#">News</a></li>
                      </ul>
                  </div><!-- .col -->

                  <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
                      <div class="foot-latest-news">
                          <h2>Latest News</h2>

                          <ul>
                              <li>
                                  <h3><a href="#">A new cause to help</a></h3>
                                  <div class="posted-date">MArch 12, 2018</div>
                              </li>

                              <li>
                                  <h3><a href="#">We love to help people</a></h3>
                                  <div class="posted-date">MArch 12, 2018</div>
                              </li>

                              <li>
                                  <h3><a href="#">The new ideas for helping</a></h3>
                                  <div class="posted-date">MArch 12, 2018</div>
                              </li>
                          </ul>
                      </div><!-- .foot-latest-news -->
                  </div><!-- .col -->

                  <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
                      <div class="foot-contact">
                          <h2>Contact</h2>

                          <ul>
                              <li><i class="fa fa-phone"></i><span>+45 677 8993000 223</span></li>
                              <li><i class="fa fa-envelope"></i><span>office@template.com</span></li>
                              <li><i class="fa fa-map-marker"></i><span>Main Str. no 45-46, b3, 56832, Los Angeles, CA</span></li>
                          </ul>
                      </div><!-- .foot-contact -->

                      <div class="subscribe-form">
                          <form class="d-flex flex-wrap align-items-center">
                              <input type="email" placeholder="Your email">
                              <input type="submit" value="send">
                          </form><!-- .flex -->
                      </div><!-- .search-widget -->
                  </div><!-- .col -->
              </div><!-- .row -->
          </div><!-- .container -->
      </div><!-- .footer-widgets -->
  </footer><!-- .site-footer -->

  <script type='text/javascript' src='{{ asset('js/jquery.js') }}'></script>
  <script type='text/javascript' src='{{ asset('js/jquery.collapsible.min.js') }}'></script>
  <script type='text/javascript' src='{{ asset('js/swiper.min.js') }}'></script>
  <script type='text/javascript' src='{{ asset('js/jquery.countdown.min.js') }}'></script>
  <script type='text/javascript' src='{{ asset('js/circle-progress.min.js') }}'></script>
  <script type='text/javascript' src='{{ asset('js/jquery.countTo.min.js') }}'></script>
  <script type='text/javascript' src='{{ asset('js/jquery.barfiller.js') }}'></script>
  <script type='text/javascript' src='{{ asset('js/custom.js') }}'></script>

</body>

</html>
