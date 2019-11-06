<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="/img/favicon.png" />

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="/vendor/lightbox/dist/ekko-lightbox.css">

    <!-- Main CSS -->
    <!-- Fontawesome -->
    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">
    <!-- Bootstrap CSS -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <title>Rosy Florist</title>
</head>

<body id="page-top">

        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top navbar-custom">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">Rosy Florist</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#page-top">Home
                            <span class="sr-only">(current)</span>
                          </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#sample_buket">Catalog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#about_service">Service</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#portofolio">Portofolios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#our_team">Our Team</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#testimoni">Testimoni</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Shop
                                    </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Fresh Flowers</a>
                                <a class="dropdown-item" href="#">Dried Flowers</a>
                                <a class="dropdown-item" href="#">Wedding</a>
                                <a class="dropdown-item" href="#">Snack Bouquet</a>
                                <a class="dropdown-item" href="#">Flowers Box</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')

        <footer class="footer-area footer--light" id="sticky-footer">
            <div class="footer-big bg-light">
                <!-- start .container -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-12">
                            <div class="footer-widget">
                                <div class="widget-about">
                                    <h2>Rosy Florist</h2>
                                    <p>Rosy Florist selalu mengutamakan kualitas dan keramahan terhadap para pelanggan.</p>
                                    <ul class="contact-details">
                                        <li>
                                            <span><i class="fas fa-phone-square fa-sm"></i></span> Call Us:
                                            <a href="tel:0812-8275-3661">0812-8275-3661</a>
                                        </li>
                                        <li>
                                            <span><i class="fas fa-envelope-open fa-sm"></i></span>
                                            <a href="mailto:mail@rosyflorist.com">mail@rosyflorist.com</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Ends: .footer-widget -->
                        </div>
                        <!-- end /.col-md-4 -->
                        <div class="col-md-3 col-sm-4">
                            <div class="footer-widget">
                                <div class="footer-menu footer-menu--1">
                                    <h4 class="footer-widget-title">Shop</h4>
                                    <ul>
                                        <li>
                                            <a href="#">Fresh Flowers</a>
                                        </li>
                                        <li>
                                            <a href="#">Dried Flowers</a>
                                        </li>
                                        <li>
                                            <a href="#">Wedding</a>
                                        </li>
                                        <li>
                                            <a href="#">Snack Bouquet</a>
                                        </li>
                                        <li>
                                            <a href="#">Flowers Box</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- end /.footer-menu -->
                            </div>
                            <!-- Ends: .footer-widget -->
                        </div>
                        <!-- end /.col-md-3 -->
    
                        <div class="col-md-3 col-sm-4">
                            <div class="footer-widget">
                                <div class="footer-menu">
                                    <h4 class="footer-widget-title">Our Social Media</h4>
                                    <ul>
                                        <li>
                                            <a href="#">Instagram</a>
                                        </li>
                                        <li>
                                            <a href="#">WhatsApp</a>
                                        </li>
                                        <li>
                                            <a href="#">Tokopedia</a>
                                        </li>
                                        <li>
                                            <a href="#">Bukalapak</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- end /.footer-menu -->
                            </div>
                            <!-- Ends: .footer-widget -->
                        </div>
                        <!-- end /.col-lg-3 -->
    
                        <div class="col-md-3 col-sm-4">
                            <div class="footer-widget">
                                <div class="footer-menu no-padding">
                                    <h4 class="footer-widget-title">Help Support</h4>
                                    <ul>
                                        <li>
                                            <a href="#">Support Forum</a>
                                        </li>
                                        <li>
                                            <a href="#">Terms &amp; Conditions</a>
                                        </li>
                                        <li>
                                            <a href="#">Support Policy</a>
                                        </li>
                                        <li>
                                            <a href="#">Refund Policy</a>
                                        </li>
                                        <li>
                                            <a href="#">FAQs</a>
                                        </li>
                                        <li>
                                            <a href="#">Buyers Faq</a>
                                        </li>
                                        <li>
                                            <a href="#">Sellers Faq</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- end /.footer-menu -->
                            </div>
                            <!-- Ends: .footer-widget -->
                        </div>
                        <!-- Ends: .col-lg-3 -->
    
                    </div>
                    <!-- end /.row -->
                </div>
                <!-- end /.container -->
            </div>
            <!-- end /.footer-big -->
    
            <div class="mini-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright-text">
                                <p>© 2019
                                    <a href="#">Rosy Florist</a>. All rights reserved. Created by
                                    <a href="#">Angga A.K</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="/vendor/jquery/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
    
        <!-- Plugin JS-->
        <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>
        <script src="/vendor/lightbox/dist/ekko-lightbox.js"></script>
    
        <!-- Custom JS for Scrolling when Clicked -->
        <script src="/js/scrolling-nav.js"></script>
        <script src="/js/lightbox.js"></script>
    </body>
    
    </html>