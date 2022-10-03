<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Volia | Event & Conference HTML Template | Home 01</title>
<!-- Stylesheets -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="plugins/revolution/css/settings.css" rel="stylesheet" type="text/css"><!-- REVOLUTION SETTINGS STYLES -->
<link href="plugins/revolution/css/layers.css" rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->
<link href="plugins/revolution/css/navigation.css" rel="stylesheet" type="text/css"><!-- REVOLUTION NAVIGATION STYLES -->
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">
<!--Color Switcher Mockup-->
<link href="css/color-switcher-design.css" rel="stylesheet">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">

    <!-- Preloader -->
    {{-- <div class="preloader"></div> --}}

    <!-- Main Header-->
    <header class="main-header header-style-one">

        <!-- Header top -->
        <div class="header-top">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="top-left">
                        <ul class="social-icon-one">
                            <li><a href="#"><span class="fab fa-dribbble"></span></a></li>
                            <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                        </ul>
                    </div>
                    <div class="top-right">
                        <ul class="contact-list-one">
                            <li><i class="flaticon-location"></i> 203 Madison Ave, NY, USA <strong>Address</strong></li>
                            <li><i class="flaticon-alarm-clock-1"></i>Monday - Friday 9am - 6pm <strong>Timeing</strong></li>
                            <li><i class="flaticon-email-1"></i> <a href="mailto:envato@gmail.com">envato@gmail.com</a> <strong>Mail to us</strong></li>
                        </ul>

                        <button class="nav-toggler"><i class="flaticon flaticon-menu-2"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Top -->

        <!-- Header Lower -->
        <div class="header-lower">
            <div class="auto-container">
                <!-- Main box -->
                <div class="main-box">
                    <div class="logo-box">
                        <div class="logo"><a href="/"><img src="images/logo.jpeg" alt="" title=""></a></div>
                    </div>

                    <div class="nav-outer">

                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md">
                            <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li><a href="/">Home</a>

                                    </li>
                                    <li class="dropdown"><a href="#">Event List</a>
                                        <ul>

                                            <li><a href="/allevents">Events</a></li>

                                        </ul>
                                    </li>

                                    <li><a href="/comingup">Coming Up</a></li>

                                    <li><a href="contact.html">Contact us</a></li>

                                    <li class="dropdown"><a href="#">Account</a>
                                        <ul>
                                            @if(Auth::guard('web')->check())
                                            <li><a href="/logout">Logout</a></li>
                                            @else
                                            <li><a href="/login">Login</a></li>
                                            <li><a href="/register">Register</a></li>
                                            @endif
                                            <li><a href="/profile">Profile</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </nav>

                        <!-- Main Menu End-->
                        <div class="outer-box clearfix">
                            <!-- Search Btn -->
                            {{-- <div class="search-box-btn search-btn search-box-outer"><span class="icon fa fa-search"></span></div> --}}

                            <!-- Quote Btn -->
                            <div class="btn-box">
                                <a href="/register" class="fas fa-user"></span></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container">

                <div class="main-box">
                    <div class="logo-box">
                        <div class="logo"><a href="/"><img src="images/logo.png" alt="" title=""></a></div>
                        <div class="upper-right">
                            <div class="search-box">
                                <button class="search-btn mobile-search-btn"><i class="flaticon-search-2"></i></button>
                            </div>
                            <a href="#nav-mobile" class="mobile-nav-toggler navbar-trigger"><i class="flaticon-menu"></i></a>
                        </div>
                    </div>

                    <nav class="main-menu navbar-expand-md">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
                </div>
            </div>
        </div><!-- End Sticky Menu -->

        <!-- Mobile Header -->
        <div class="mobile-header">
            <div class="logo"><a href="index.html"><img src="images/logo.png" alt="" title=""></a></div>

            <!--Nav Box-->
            <div class="nav-outer clearfix">
                <div class="outer-box">
                    <!-- Search Btn -->
                    <div class="search-box">
                        <button class="search-btn mobile-search-btn"><i class="flaticon-search-2"></i></button>
                    </div>

                    <a href="#nav-mobile" class="mobile-nav-toggler navbar-trigger"><i class="flaticon-menu"></i></a>
                </div>
            </div>
        </div>

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>

            <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            <nav class="menu-box">
                <div class="upper-box">
                    <div class="nav-logo"><a href="index.html"><img src="images/logo.png" alt="" title=""></a></div>
                    <div class="close-btn"><i class="icon flaticon-close"></i></div>
                </div>

                <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>

                <ul class="contact-list-one">
                    <li><i class="flaticon-location"></i> 203 Madison Ave, NY, USA <strong>Address</strong></li>
                    <li><i class="flaticon-alarm-clock-1"></i>Monday - Friday 9am - 6pm <strong>Timeing</strong></li>
                    <li><i class="flaticon-email-1"></i> <a href="mailto:envato@gmail.com">envato@gmail.com</a> <strong>Mail to us</strong></li>
                </ul>

                <ul class="social-links">
                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                    <li><a href="#"><span class="fab fa-pinterest"></span></a></li>
                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                    <li><a href="#"><span class="fab fa-dribbble"></span></a></li>
                </ul>
            </nav>
        </div><!-- End Mobile Menu -->

        <!-- Header Search -->
        <div class="search-popup">
            <button class="close-search"><i class="flaticon-close"></i></button>
            <form method="post" action="blog.html">
                <div class="form-group">
                    <input type="search" name="search-field" value="" placeholder="Search" required="">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </div>
            </form>
        </div>
        <!-- End Header Search -->

    </header>
    <!--End Main Header -->

    <!-- Hidden bar back drop -->
    <div class="form-back-drop"></div>

    <!-- Hidden Bar -->
    <section class="hidden-bar">
        <div class="inner-box">
            <div class="title-box">
                <h2>Contact Us</h2>
                <div class="cross-icon"><span class="fa fa-times"></span></div>
            </div>

            <!--Appointment Form-->
            <div class="form-style-one">
                <form action="#" method="post">
                    <div class="form-group">
                        <input type="text" name="username" class="username" placeholder="Your Name *">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="email" placeholder="Your Email *">
                    </div>
                    <div class="form-group">
                        <input type="text" name="phone" class="phone" value="" placeholder="Your Phone*" required>
                    </div>
                    <div class="form-group">
                        <textarea name="contact_message" class="message" placeholder="Text Message"></textarea>
                    </div>
                    <div class="form-group">
                        <button class="theme-btn btn-style-one" type="button" id="submit" name="submit-form"><span class="btn-title">Submit Now</span> </button>
                    </div>
                </form>
            </div>


            <ul class="contact-list-one">
                <li><i class="flaticon-location"></i> 203 Madison Ave, NY, USA <strong>Address</strong></li>
                <li><i class="flaticon-alarm-clock-1"></i>Monday - Friday 9am - 6pm <strong>Timeing</strong></li>
                <li><i class="flaticon-email-1"></i> <a href="mailto:envato@gmail.com">envato@gmail.com</a> <strong>Mail to us</strong></li>
            </ul>
        </div>
    </section>
    <!--End Hidden Bar -->

    @yield('content')

    <!-- Main Footer -->
    <footer class="main-footer">
        <div class="auto-container">
            <!-- Footer Content -->
            <div class="footer-content wow fadeInUp">
                <div class="text-center">
                    <div class="footer-logo"><a href="#"><img src="images/logo-2.png" alt=""></a></div>
                    <div class="text">We have very good strength in innovative technology and tools with over 35 years of experience. We makes long-term investments goal in global companies in different sectors, mainly in Europe and other countries.</div>
                </div>
                <ul class="social-icon-two">
                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                    <li><a href="#"><span class="fab fa-pinterest"></span></a></li>
                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                    <li><a href="#"><span class="fab fa-dribbble"></span></a></li>
                </ul>

                <ul class="contact-list-one">
                    <li><i class="flaticon-location"></i> 203 Madison Ave, NY, USA <strong>Address</strong></li>
                    <li><i class="flaticon-alarm-clock-1"></i>Monday - Friday 9am - 6pm <strong>Timeing</strong></li>
                    <li><i class="flaticon-email-1"></i> <a href="mailto:envato@gmail.com">envato@gmail.com</a> <strong>Mail to us</strong></li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="auto-container">
                <div class="inner-container">
                    <ul class="footer-nav">
                       <li><a href="#">Terms of Service</a></li>
                       <li><a href="#">Privacy Policy</a></li>
                    </ul>

                    <div class="copyright-text">
                        <p>Copyright © 2022 All Rights Reserved by <a href="#">ThemeCraze</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

</div>
<!-- End Page Wrapper -->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>


<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="{{ asset('/js/toastr.min.js') }}"></script>

<!--Revolution Slider-->
<script src="plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="js/main-slider-script.js"></script>
<!--Revolution Slider-->
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/jquery.countdown.js"></script>
<script src="js/appear.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/script.js"></script>
<script src="{{ asset('/js/toastr.min.js') }}"></script>

@yield('scripts')
<script>

    toastr.options = {
        timeOut: 1500,
        progressBar: true,
        showMethod: "slideDown",
        hideMethod: "slideUp",
        showDuration: 200,
        hideDuration: 200
    };

    $(document).ready(function() {

        @if(session()->has('error'))
            toastr.error('{{ session()->get('error') }}');
        @endif
        @if(session()->has('success'))
            toastr.success('{{ session()->get('success') }}');
        @endif
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                toastr.error('{{ $error }}');
            @endforeach
        @endif

    });
</script>

</body>
</html>
