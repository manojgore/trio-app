<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from techydevs.com/demos/themes/html/trizen-demo/trizen/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Aug 2022 11:29:54 GMT -->
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trizen - Travel Booking HTML Template</title>
    <!-- Favicon -->
    <link rel="icon" href="images/favicon.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&amp;display=swap" rel="stylesheet">

    <!-- Template CSS Files -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" href="css/line-awesome.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/daterangepicker.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/animated-headline.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/flag-icon.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<!-- start cssload-loader -->
<div class="preloader" id="preloader">
    <div class="loader">
        <svg class="spinner" viewBox="0 0 50 50">
            <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
        </svg>
    </div>
</div>
<!-- end cssload-loader -->

<a href="http://techydevs.com/demos/themes/html/trizen/rtl/index.html" class="rtl-btn">RTL Version</a>

<!-- ================================
            START HEADER AREA
================================= -->
<header class="header-area">
    <div class="header-top-bar padding-right-100px padding-left-100px">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="header-top-content">
                        <div class="header-left">
                            <ul class="list-items">
                                <li><a href="#"><i class="la la-phone mr-1"></i>(123) 123-456</a></li>
                                <li><a href="#"><i class="la la-envelope mr-1"></i>trizen@example.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="header-top-content">
                        <div class="header-right d-flex align-items-center justify-content-end">
                            <div class="header-right-action">
                                <div class="select-contain select--contain w-auto">
                                    <select class="select-contain-select">
                                        <option data-content='<span class="flag-icon flag-icon-id mr-1"></span> Bahasa Indonesia'>Bahasa Indonesia</option>
                                        <option data-content='<span class="flag-icon flag-icon-de mr-1"></span> Deutsch'>Deutsch</option>
                                        <option data-content='<span class="flag-icon flag-icon-us mr-1"></span> English(US)' selected>English US</option>
                                        <option data-content='<span class="flag-icon flag-icon-gb-eng mr-1"></span> English(UK)'>English UK</option>
                                        <option data-content='<span class="flag-icon flag-icon-ro mr-1"></span> Romanian'>Romanian</option>
                                        <option data-content='<span class="flag-icon flag-icon-es mr-1"></span> Espa??ol'>Espa??ol</option>
                                        <option data-content='<span class="flag-icon flag-icon-fr mr-1"></span> Francais'>Francais</option>
                                        <option data-content='<span class="flag-icon flag-icon-it mr-1"></span> Italiano'>Italiano</option>
                                        <option data-content='<span class="flag-icon flag-icon-pl mr-1"></span> Polski'>Polski</option>
                                        <option data-content='<span class="flag-icon flag-icon-pt mr-1"></span> Portuguese'>Portuguese</option>
                                        <option data-content='<span class="flag-icon flag-icon-tr mr-1"></span> Turkish'>Turkish</option>
                                        <option data-content='<span class="flag-icon flag-icon-ru mr-1"></span> Russian'>Russian</option>
                                        <option data-content='<span class="flag-icon flag-icon-jp mr-1"></span> Japanese'>Japanese</option>
                                        <option data-content='<span class="flag-icon flag-icon-cn mr-1"></span> Mandarin'>Mandarin</option>
                                        <option data-content='<span class="flag-icon flag-icon-tw mr-1"></span> Mandarin Chinese'>Mandarin Chinese</option>
                                        <option data-content='<span class="flag-icon flag-icon-kr mr-1"></span> Korean'>Korean</option>
                                        <option data-content='<span class="flag-icon flag-icon-in mr-1"></span> Hindi'>Hindi</option>
                                    </select>
                                </div>
                            </div>
                            <div class="header-right-action">
                                <div class="select-contain select--contain w-auto">
                                    <select class="select-contain-select">
                                        <option value="1">AED</option>
                                        <option value="2">AUD</option>
                                        <option value="3">BRL</option>
                                        <option value="4">CAD</option>
                                        <option value="5">CHF</option>
                                        <option value="6">CNY</option>
                                        <option value="7">EUR</option>
                                        <option value="8">GBP</option>
                                        <option value="9">HKD</option>
                                        <option value="10">IDR</option>
                                        <option value="11">INR</option>
                                        <option value="12">JPY</option>
                                        <option value="13">KRW</option>
                                        <option value="14">MYR</option>
                                        <option value="15">NZD</option>
                                        <option value="16">PHP</option>
                                        <option value="17">PLN</option>
                                        <option value="18">RUB</option>
                                        <option value="19">SAR</option>
                                        <option value="20">SGD</option>
                                        <option value="21">THB</option>
                                        <option value="22">TRY</option>
                                        <option value="23">TWD</option>
                                        <option value="24" selected>USD</option>
                                        <option value="25">VND</option>
                                        <option value="26">MXN</option>
                                        <option value="27">ARS</option>
                                        <option value="28">INR</option>
                                    </select>
                                </div>
                            </div>
                            <div class="header-right-action">
                                <a href="#" class="theme-btn theme-btn-small theme-btn-transparent mr-1" data-toggle="modal" data-target="#signupPopupForm">Sign Up</a>
                                 <a href="#" class="theme-btn theme-btn-small" data-toggle="modal" data-target="#loginPopupForm">Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-menu-wrapper padding-right-100px padding-left-100px">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="menu-wrapper">
                        <a href="#" class="down-button"><i class="la la-angle-down"></i></a>
                        <div class="logo">
                            <a href="index.html"><img src="images/logo.png" alt="logo"></a>
                            <div class="menu-toggler">
                                <i class="la la-bars"></i>
                                <i class="la la-times"></i>
                            </div><!-- end menu-toggler -->
                        </div><!-- end logo -->
                        <div class="main-menu-content">
                            <nav>
                                <ul>
                                    <li>
                                        <a href="#">Home <i class="la la-angle-down"></i></a>
                                        <ul class="dropdown-menu-item">
                                            <li><a href="index.html">Home - main</a></li>
                                            <li><a href="index2.html">Home - Hotel</a></li>
                                            <li><a href="index3.html">Home - Activity</a></li>
                                            <li><a href="index4.html">Home - Car</a></li>
                                            <li><a href="index5.html">Home - Cruise</a></li>
                                            <li><a href="index6.html">Home - Flight</a></li>
                                            <li><a href="index7.html">Home - City Tour <span class="badge bg-2 text-white">New</span></a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Tour <i class="la la-angle-down"></i></a>
                                        <ul class="dropdown-menu-item">
                                            <li><a href="tour-fullwidth.html">Tour Full width</a></li>
                                            <li><a href="tour-grid.html">Tour Grid</a></li>
                                            <li><a href="tour-list.html">Tour List</a></li>
                                            <li><a href="tour-left-sidebar.html">Tour Left Sidebar</a></li>
                                            <li><a href="tour-right-sidebar.html">Tour Right Sidebar</a></li>
                                            <li><a href="tour-details.html">Tour details</a></li>
                                            <li><a href="tour-booking.html">Tour Booking</a></li>
                                            <li><a href="tour-search-result.html">Tour Search Result</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Cruise <i class="la la-angle-down"></i></a>
                                        <ul class="dropdown-menu-item">
                                            <li><a href="cruises.html">Cruises</a></li>
                                            <li><a href="cruises-list.html">Cruise list</a></li>
                                            <li><a href="cruise-sidebar.html">Cruise Sidebar</a></li>
                                            <li><a href="cruise-details.html">Cruise details</a></li>
                                            <li><a href="cruise-booking.html">Cruise Booking</a></li>
                                            <li><a href="cruise-search-result.html">Cruise Search Result</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Pages <i class="la la-angle-down"></i></a>
                                        <div class="dropdown-menu-item mega-menu">
                                            <ul class="row no-gutters">
                                                <li class="col-lg-3 mega-menu-item">
                                                    <ul>
                                                        <li><a href="add-hotel.html">add hotel </a></li>
                                                        <li><a href="add-flight.html">add flight </a></li>
                                                        <li><a href="add-tour.html">add tour </a></li>
                                                        <li><a href="add-cruise.html">add cruise </a></li>
                                                        <li><a href="add-car.html">add car</a></li>
                                                        <li><a href="user-dashboard.html">User Dashboard</a></li>
                                                        <li><a href="admin-dashboard.html">Admin Dashboard</a></li>
                                                        <li><a href="career.html">career <span class="badge bg-2 text-white">New</span></a></li>
                                                    </ul>
                                                </li>
                                                <li class="col-lg-3 mega-menu-item">
                                                    <ul>
                                                        <li><a href="career-details.html">career details<span class="badge bg-2 text-white">New</span></a></li>
                                                        <li><a href="user-profile.html">User profile</a></li>
                                                        <li><a href="become-local-expert.html">Become Local Expert</a></li>
                                                        <li><a href="contact.html">contact</a></li>
                                                        <li><a href="cart.html">Cart</a></li>
                                                        <li><a href="checkout.html">Checkout</a></li>
                                                        <li><a href="recover.html">recover password</a></li>
                                                        <li><a href="payment-received.html">payment received</a></li>
                                                    </ul>
                                                </li>
                                                <li class="col-lg-3 mega-menu-item">
                                                    <ul>
                                                        <li><a href="payment-complete.html">payment complete</a></li>
                                                        <li><a href="destinations.html">Destinations</a></li>
                                                        <li><a href="about.html">about</a></li>
                                                        <li><a href="services.html">Our Services</a></li>
                                                        <li><a href="gallery.html">Gallery</a></li>
                                                        <li><a href="pricing.html">pricing</a></li>
                                                        <li><a href="faq.html">faq</a></li>
                                                    </ul>
                                                </li>
                                                <li class="col-lg-3 mega-menu-item">
                                                    <ul>
                                                        <li><a href="add-new-post.html">add new post</a></li>
                                                        <li><a href="blog-full-width.html">blog full width</a></li>
                                                        <li><a href="blog-grid.html">blog grid</a></li>
                                                        <li><a href="blog-sidebar.html">blog sidebar</a></li>
                                                        <li><a href="blog-single.html">blog details</a></li>
                                                        <li><a href="coming-soon.html">Coming Soon</a></li>
                                                        <li><a href="page-404.html">404 page</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#">Flight <i class="la la-angle-down"></i></a>
                                        <ul class="dropdown-menu-item">
                                            <li><a href="flight-grid.html">Flight grid</a></li>
                                            <li><a href="flight-list.html">Flight list</a></li>
                                            <li><a href="flight-sidebar.html">Flight sidebar </a></li>
                                            <li><a href="flight-single.html">Flight details</a></li>
                                            <li><a href="flight-booking.html">Flight Booking</a></li>
                                            <li><a href="flight-search-result.html">Flight Search Result</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Hotel <i class="la la-angle-down"></i></a>
                                        <ul class="dropdown-menu-item">
                                            <li><a href="hotel-grid.html">Hotel grid</a></li>
                                            <li><a href="hotel-list.html">Hotel list</a></li>
                                            <li><a href="hotel-sidebar.html">Hotel sidebar </a></li>
                                            <li><a href="hotel-single.html">Hotel details</a></li>
                                            <li><a href="hotel-booking.html">Hotel Booking</a></li>
                                            <li><a href="hotel-search-result.html">Hotel Search Result</a></li>
                                            <li>
                                                <a href="#">Rooms <i class="la la-plus"></i></a>
                                                <ul class="sub-menu">
                                                    <li><a href="room-list.html">Room List</a></li>
                                                    <li><a href="room-grid.html">Room Grid</a></li>
                                                    <li><a href="room-search-result.html">Search Result</a></li>
                                                    <li><a href="room-search-result-list.html">Search Result list</a></li>
                                                    <li><a href="room-details.html">Room Details</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">car <i class="la la-angle-down"></i></a>
                                        <ul class="dropdown-menu-item">
                                            <li><a href="car-grid.html">car grid</a></li>
                                            <li><a href="car-list.html">car list</a></li>
                                            <li><a href="car-sidebar.html">car sidebar </a></li>
                                            <li><a href="car-single.html">car details</a></li>
                                            <li><a href="car-booking.html">Car Booking</a></li>
                                            <li><a href="car-search-result.html">Car Search Result</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div><!-- end main-menu-content -->
                        <div class="nav-btn">
                            <a href="become-local-expert.html" class="theme-btn">Become Local Expert</a>
                        </div><!-- end nav-btn -->
                    </div><!-- end menu-wrapper -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container-fluid -->
    </div><!-- end header-menu-wrapper -->
</header>
<!-- ================================
         END HEADER AREA
================================= -->

<!-- ================================
    START HERO-WRAPPER AREA
================================= -->
<section class="hero-wrapper">
    <div class="hero-box hero-bg">
        <span class="line-bg line-bg1"></span>
        <span class="line-bg line-bg2"></span>
        <span class="line-bg line-bg3"></span>
        <span class="line-bg line-bg4"></span>
        <span class="line-bg line-bg5"></span>
        <span class="line-bg line-bg6"></span>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto responsive--column-l">
                    <div class="hero-content pb-5">
                        <div class="section-heading">
                            <h2 class="sec__title cd-headline zoom">
                                Amazing <span class="cd-words-wrapper">
                                <b class="is-visible">Tours</b>
                                <b>Adventures</b>
                                <b>Flights</b>
                                <b>Hotels</b>
                                <b>Cars</b>
                                <b>Cruises</b>
                                <b>Package Deals</b>
                                <b>Fun</b>
                                <b>People</b>
                                </span>
                                Waiting for You
                            </h2>
                        </div>
                    </div><!-- end hero-content -->
                    <div class="section-tab text-center pl-4">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center active" id="flight-tab" data-toggle="tab" href="#flight" role="tab" aria-controls="flight" aria-selected="true">
                                    <i class="la la-plane mr-1"></i>Flights
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center" id="hotel-tab" data-toggle="tab" href="#hotel" role="tab" aria-controls="hotel" aria-selected="false">
                                    <i class="la la-hotel mr-1"></i>Hotels
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center" id="package-tab" data-toggle="tab" href="#package" role="tab" aria-controls="package" aria-selected="false">
                                    <i class="la la-shopping-bag mr-1"></i>Vacation Packages
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center" id="car-tab" data-toggle="tab" href="#car" role="tab" aria-controls="car" aria-selected="true">
                                    <i class="la la-car mr-1"></i>Cars
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center" id="cruise-tab" data-toggle="tab" href="#cruise" role="tab" aria-controls="cruise" aria-selected="false">
                                    <i class="la la-ship mr-1"></i>Cruises
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center" id="tour-tab" data-toggle="tab" href="#tour" role="tab" aria-controls="tour" aria-selected="false">
                                    <i class="la la-globe mr-1"></i>Tours
                                </a>
                            </li>
                        </ul>
                    </div><!-- end section-tab -->
                    <div class="tab-content search-fields-container" id="myTabContent">
                        <div class="tab-pane fade show active" id="flight" role="tabpanel" aria-labelledby="flight-tab">
                            <div class="section-tab section-tab-2 pb-3">
                                <ul class="nav nav-tabs" id="myTab3" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="one-way-tab" data-toggle="tab" href="#one-way" role="tab" aria-controls="one-way" aria-selected="true">
                                            One way
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="round-trip-tab" data-toggle="tab" href="#round-trip" role="tab" aria-controls="round-trip" aria-selected="false">
                                            Round-trip
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="multi-city-tab" data-toggle="tab" href="#multi-city" role="tab" aria-controls="multi-city" aria-selected="false">
                                            Multi-city
                                        </a>
                                    </li>
                                </ul>
                            </div><!-- end section-tab -->
                            <div class="tab-content" id="myTabContent3">
                                <div class="tab-pane fade show active" id="one-way" role="tabpanel" aria-labelledby="one-way-tab">
                                    <div class="contact-form-action">
                                        <form action="#" class="row align-items-center">
                                            <div class="col-lg-6 pr-0">
                                                <div class="input-box">
                                                    <label class="label-text">Flying from</label>
                                                    <div class="form-group">
                                                        <span class="la la-map-marker form-icon"></span>
                                                        <input class="form-control" type="text" placeholder="City or airport">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-3 -->
                                            <div class="col-lg-6">
                                                <div class="input-box">
                                                    <label class="label-text">Flying to</label>
                                                    <div class="form-group">
                                                        <span class="la la-map-marker form-icon"></span>
                                                        <input class="form-control" type="text" placeholder="City or airport">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-3 -->
                                            <div class="col-lg-3 pr-0">
                                                <div class="input-box">
                                                    <label class="label-text">Departing</label>
                                                    <div class="form-group">
                                                        <span class="la la-calendar form-icon"></span>
                                                        <input class="date-range form-control" type="text" name="daterange-single" readonly>
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-3 -->
                                            <div class="col-lg-3 pr-0">
                                                <div class="input-box">
                                                    <label class="label-text">Passengers</label>
                                                    <div class="form-group">
                                                        <div class="dropdown dropdown-contain gty-container">
                                                            <a class="dropdown-toggle dropdown-btn" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                                                 <span class="adult" data-text="Adult" data-text-multi="Adults">0 Adult</span>
                                                                -
                                                                <span class="children" data-text="Child" data-text-multi="Children">0 Children</span>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-wrap">
                                                                <div class="dropdown-item">
                                                                    <div class="qty-box d-flex align-items-center justify-content-between">
                                                                        <label>Adults</label>
                                                                        <div class="qtyBtn d-flex align-items-center">
                                                                            <div class="qtyDec"><i class="la la-minus"></i></div>
                                                                            <input type="text" name="adult_number" value="0">
                                                                            <div class="qtyInc"><i class="la la-plus"></i></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="dropdown-item">
                                                                    <div class="qty-box d-flex align-items-center justify-content-between">
                                                                        <label>Children</label>
                                                                        <div class="qtyBtn d-flex align-items-center">
                                                                            <div class="qtyDec"><i class="la la-minus"></i></div>
                                                                            <input type="text" name="child_number" value="0">
                                                                            <div class="qtyInc"><i class="la la-plus"></i></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="dropdown-item">
                                                                    <div class="qty-box d-flex align-items-center justify-content-between">
                                                                        <label>Infants</label>
                                                                        <div class="qtyBtn d-flex align-items-center">
                                                                            <div class="qtyDec"><i class="la la-minus"></i></div>
                                                                            <input type="text" name="infants_number" value="0" class="qty-input">
                                                                            <div class="qtyInc"><i class="la la-plus"></i></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- end dropdown -->
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-3 -->
                                            <div class="col-lg-3 pr-0">
                                                <div class="input-box">
                                                    <label class="label-text">Coach</label>
                                                    <div class="form-group select-contain w-auto">
                                                        <select class="select-contain-select">
                                                            <option value="1" selected>Economy</option>
                                                            <option value="2">Business</option>
                                                            <option value="3">First class</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-3 -->
                                            <div class="col-lg-3">
                                                <a href="flight-search-result.html" class="theme-btn w-100 text-center margin-top-20px">Search Now</a>
                                            </div>
                                        </form>
                                    </div>
                                </div><!-- end tab-pane -->
                                <div class="tab-pane fade" id="round-trip" role="tabpanel" aria-labelledby="round-trip-tab">
                                    <div class="contact-form-action">
                                        <form action="#" class="row align-items-center">
                                            <div class="col-lg-6 pr-0">
                                                <div class="input-box">
                                                    <label class="label-text">Flying from</label>
                                                    <div class="form-group">
                                                        <span class="la la-map-marker form-icon"></span>
                                                        <input class="form-control" type="text" placeholder="City or airport">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-3 -->
                                            <div class="col-lg-6">
                                                <div class="input-box">
                                                    <label class="label-text">Flying to</label>
                                                    <div class="form-group">
                                                        <span class="la la-map-marker form-icon"></span>
                                                        <input class="form-control" type="text" placeholder="City or airport">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-3 -->
                                            <div class="col-lg-3 pr-0">
                                                <div class="input-box">
                                                    <label class="label-text">Departing - Returning</label>
                                                    <div class="form-group">
                                                        <span class="la la-calendar form-icon"></span>
                                                        <input class="date-range form-control" type="text" name="daterange" readonly>
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-3 -->
                                            <div class="col-lg-3 pr-0">
                                                <div class="input-box">
                                                    <label class="label-text">Passengers</label>
                                                    <div class="form-group">
                                                        <div class="dropdown dropdown-contain gty-container">
                                                            <a class="dropdown-toggle dropdown-btn" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                                                <span class="adult" data-text="Adult" data-text-multi="Adults">0 Adult</span>
                                                                -
                                                                <span class="children" data-text="Child" data-text-multi="Children">0 Children</span>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-wrap">
                                                                <div class="dropdown-item">
                                                                    <div class="qty-box d-flex align-items-center justify-content-between">
                                                                        <label>Adults</label>
                                                                        <div class="qtyBtn d-flex align-items-center">
                                                                            <div class="qtyDec"><i class="la la-minus"></i></div>
                                                                            <input type="text" name="adult_number" value="0">
                                                                            <div class="qtyInc"><i class="la la-plus"></i></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="dropdown-item">
                                                                    <div class="qty-box d-flex align-items-center justify-content-between">
                                                                        <label>Children</label>
                                                                        <div class="qtyBtn d-flex align-items-center">
                                                                            <div class="qtyDec"><i class="la la-minus"></i></div>
                                                                            <input type="text" name="child_number" value="0">
                                                                            <div class="qtyInc"><i class="la la-plus"></i></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="dropdown-item">
                                                                    <div class="qty-box d-flex align-items-center justify-content-between">
                                                                        <label>Infants</label>
                                                                        <div class="qtyBtn d-flex align-items-center">
                                                                            <div class="qtyDec"><i class="la la-minus"></i></div>
                                                                            <input type="text" name="infants_number" value="0" class="qty-input">
                                                                            <div class="qtyInc"><i class="la la-plus"></i></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- end dropdown -->
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-3 -->
                                            <div class="col-lg-3 pr-0">
                                                <div class="input-box">
                                                    <label class="label-text">Coach</label>
                                                    <div class="form-group">
                                                        <div class="select-contain w-auto">
                                                            <select class="select-contain-select">
                                                                <option value="1" selected>Economy</option>
                                                                <option value="2">Business</option>
                                                                <option value="3">First class</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-3 -->
                                            <div class="col-lg-3">
                                                <a href="flight-search-result.html" class="theme-btn w-100 text-center margin-top-20px">Search Now</a>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="advanced-wrap">
                                        <a class="btn collapse-btn theme-btn-hover-gray font-size-15" data-toggle="collapse" href="#collapseThree" role="button" aria-expanded="false" aria-controls="collapseThree">
                                            Advanced options <i class="la la-angle-down ml-1"></i>
                                        </a>
                                        <div class="collapse pt-3" id="collapseThree">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="input-box">
                                                        <label class="label-text">Preferred airline</label>
                                                        <div class="form-group">
                                                            <div class="select-contain w-100">
                                                                <select class="select-contain-select">
                                                                    <option selected="selected" value=""> No preference</option>
                                                                    <option value="AN">Advanced Air</option>
                                                                    <option value="A3">Aegean</option>
                                                                    <option value="EI">Aer Lingus</option>
                                                                    <option value="5G">Aerocuahonte / Mayair</option>
                                                                    <option value="SU">Aeroflot-Russian Airlines</option>
                                                                    <option value="AR">Aerolineas Argentinas</option>
                                                                    <option value="VW">Aeromar Airlines</option>
                                                                    <option value="AM">Aeromexico</option>
                                                                    <option value="ZI">Aigle Azur</option>
                                                                    <option value="AH">Air Algerie</option>
                                                                    <option value="KC">Air Astana</option>
                                                                    <option value="UU">Air Austral</option>
                                                                    <option value="BT">Air Baltic</option>
                                                                    <option value="BP">Air Botswana</option>
                                                                    <option value="AC">Air Canada</option>
                                                                    <option value="TX">Air Caraibes</option>
                                                                    <option value="CA">Air China</option>
                                                                    <option value="3E">Air Choice One</option>
                                                                    <option value="XK">Air Corsica</option>
                                                                    <option value="UX">Air Europa</option>
                                                                    <option value="X4">Air Excursions LLC</option>
                                                                    <option value="AF">Air France</option>
                                                                    <option value="NY">Air Iceland Connect</option>
                                                                    <option value="AI">Air India</option>
                                                                    <option value="IG">Air Italy</option>
                                                                    <option value="MD">Air Madagascar</option>
                                                                    <option value="KM">Air Malta</option>
                                                                    <option value="MK">Air Mauritius</option>
                                                                    <option value="9U">Air Moldova</option>
                                                                    <option value="NZ">Air New Zealand</option>
                                                                    <option value="PX">Air Niugini</option>
                                                                    <option value="OG">Air Onix</option>
                                                                    <option value="JU">Air Serbia</option>
                                                                    <option value="TN">Air Tahiti Nui</option>
                                                                    <option value="TS">Air Transat</option>
                                                                    <option value="H/">AirAsia with baggage</option>
                                                                    <option value="AS">Alaska Airlines</option>
                                                                    <option value="AZ">Alitalia</option>
                                                                    <option value="NH">All Nippon Airways</option>
                                                                    <option value="G4">Allegiant Air</option>
                                                                    <option value="AA">American Airlines</option>
                                                                    <option value="OY">Andes Lineas Aereas</option>
                                                                    <option value="OZ">Asiana Airlines</option>
                                                                    <option value="KP">ASKY</option>
                                                                    <option value="OS">Austrian Airlines</option>
                                                                    <option value="AV">Avianca</option>
                                                                    <option value="2K">Avianca Ecuador</option>
                                                                    <option value="9V">Avior Airlines</option>
                                                                    <option value="J2">Azerbaijan Airlines</option>
                                                                    <option value="AD">Azul</option>
                                                                    <option value="JD">Beijing Capital Airlines</option>
                                                                    <option value="0B">BlueAir</option>
                                                                    <option value="OB">Boliviana De Aviacion</option>
                                                                    <option value="4B">Boutique Air</option>
                                                                    <option value="BA">British Airways</option>
                                                                    <option value="SN">Brussels Airlines</option>
                                                                    <option value="A7">Calafia Airlines</option>
                                                                    <option value="K6">Cambodia Angkor Air</option>
                                                                    <option value="BW">Caribbean Airlines</option>
                                                                    <option value="CX">Cathay Pacific</option>
                                                                    <option value="KX">Cayman Airways</option>
                                                                    <option value="CI">China Airlines</option>
                                                                    <option value="MU">China Eastern Airlines</option>
                                                                    <option value="CZ">China Southern Airlines</option>
                                                                    <option value="CC">CM Airlines</option>
                                                                    <option value="DE">Condor</option>
                                                                    <option value="LF">Contour Airlines</option>
                                                                    <option value="CM">Copa</option>
                                                                    <option value="SS">Corsair</option>
                                                                    <option value="OK">Czech Airlines</option>
                                                                    <option value="DL">Delta</option>
                                                                    <option value="KG">Denver Air Connection</option>
                                                                    <option value="U2">easyJet</option>
                                                                    <option value="MS">Egyptair</option>
                                                                    <option value="LY">EL AL Israel Airlines</option>
                                                                    <option value="7Q">Elite Airways</option>
                                                                    <option value="EL">Ellinair</option>
                                                                    <option value="EK">Emirates</option>
                                                                    <option value="ET">Ethiopian Airlines</option>
                                                                    <option value="EY">Etihad Airways</option>
                                                                    <option value="EW">Eurowings</option>
                                                                    <option value="BR">EVA Airways</option>
                                                                    <option value="FJ">Fiji Airways</option>
                                                                    <option value="AY">Finnair</option>
                                                                    <option value="FY">Firefly</option>
                                                                    <option value="F8">Flair Airlines</option>
                                                                    <option value="BE">Flybe</option>
                                                                    <option value="FZ">flydubai</option>
                                                                    <option value="XY">flynas</option>
                                                                    <option value="F9">Frontier Airlines</option>
                                                                    <option value="GA">Garuda Indonesia</option>
                                                                    <option value="GM">Germania Flug AG</option>
                                                                    <option value="4U">Germanwings</option>
                                                                    <option value="G3">GOL Linhas Aereas S.A.</option>
                                                                    <option value="ZK">Great Lakes Airlines</option>
                                                                    <option value="GF">Gulf Air</option>
                                                                    <option value="HU">Hainan Airlines</option>
                                                                    <option value="HA">Hawaiian Airlines</option>
                                                                    <option value="HX">Hong Kong Airlines</option>
                                                                    <option value="IB">Iberia</option>
                                                                    <option value="FI">Icelandair</option>
                                                                    <option value="JY">interCaribbean Airways</option>
                                                                    <option value="4O">Interjet</option>
                                                                    <option value="03">Involatus</option>
                                                                    <option value="JL">Japan Airlines</option>
                                                                    <option value="9W">Jet Airways</option>
                                                                    <option value="B6">JetBlue Airways</option>
                                                                    <option value="DV">JSC Aircompany SCAT</option>
                                                                    <option value="KQ">Kenya Airways</option>
                                                                    <option value="KL">KLM</option>
                                                                    <option value="KE">Korean Air</option>
                                                                    <option value="B0">La Compagnie</option>
                                                                    <option value="LR">LACSA</option>
                                                                    <option value="QV">Lao Airlines</option>
                                                                    <option value="LP">LATAM Airlines Group</option>
                                                                    <option value="LA">LATAM Airlines Group</option>
                                                                    <option value="JJ">LATAM Airlines Group</option>
                                                                    <option value="XL">LATAM Airlines Group</option>
                                                                    <option value="4M">LATAM Airlines Group</option>
                                                                    <option value="W4">LC Peru</option>
                                                                    <option value="LI">Liat</option>
                                                                    <option value="LO">LOT-Polish Airlines</option>
                                                                    <option value="LH">Lufthansa</option>
                                                                    <option value="LG">Luxair</option>
                                                                    <option value="MH">Malaysia Airlines</option>
                                                                    <option value="OD">Malindo Air</option>
                                                                    <option value="2M">Maya Island Air</option>
                                                                    <option value="7M">Mayair</option>
                                                                    <option value="OM">MIAT-Mongolian Airlines</option>
                                                                    <option value="ME">Middle East Airlines</option>
                                                                    <option value="YM">Montenegro</option>
                                                                    <option value="8M">Myanmar Airways International</option>
                                                                    <option value="NO">Neos S.P.A.</option>
                                                                    <option value="RA">Nepal Airlines</option>
                                                                    <option value="NP">Nile Air</option>
                                                                    <option value="W/">NokScoot with baggage</option>
                                                                    <option value="DN">Norwegian Air Argentina</option>
                                                                    <option value="D8">Norwegian Air International Ltd</option>
                                                                    <option value="DY">Norwegian Air Shuttle</option>
                                                                    <option value="DI">Norwegian Air UK</option>
                                                                    <option value="Y/">Olympic Air with baggage</option>
                                                                    <option value="WY">Oman Air</option>
                                                                    <option value="8Q">Onur Air</option>
                                                                    <option value="8P">Pacific Coastal Airlines</option>
                                                                    <option value="PK">Pakistan International Airlines</option>
                                                                    <option value="ZM">Pegasus Asia</option>
                                                                    <option value="KS">PenAir</option>
                                                                    <option value="PR">Philippine Airlines</option>
                                                                    <option value="PU">Plus Ultra Lineas Aereas S. A.</option>
                                                                    <option value="PD">Porter Airlines</option>
                                                                    <option value="PW">PrecisionAir</option>
                                                                    <option value="P0">Proflight Zambia</option>
                                                                    <option value="QF">Qantas Airways</option>
                                                                    <option value="QR">Qatar Airways</option>
                                                                    <option value="7H">Ravn Alaska</option>
                                                                    <option value="WZ">Red Wings Airlines</option>
                                                                    <option value="4P">Regional Sky</option>
                                                                    <option value="AT">Royal Air Maroc</option>
                                                                    <option value="BI">Royal Brunei Airlines</option>
                                                                    <option value="RJ">Royal Jordanian</option>
                                                                    <option value="WB">Rwandair</option>
                                                                    <option value="SK">SAS</option>
                                                                    <option value="S4">SATA International-Azores Airlines S.A.</option>
                                                                    <option value="SV">Saudi Arabian Airlines</option>
                                                                    <option value="/Y">Scoot with baggage</option>
                                                                    <option value="BB">Seaborne Airlines</option>
                                                                    <option value="SC">Shandong Airlines</option>
                                                                    <option value="3U">Sichuan Airlines</option>
                                                                    <option value="3M">Silver Airways</option>
                                                                    <option value="SQ">Singapore Airlines</option>
                                                                    <option value="H2">Sky Airlines</option>
                                                                    <option value="GQ">Sky Express</option>
                                                                    <option value="IE">Solomon Airlines</option>
                                                                    <option value="SA">South African Airways</option>
                                                                    <option value="9X">Southern Airways</option>
                                                                    <option value="NK">Spirit Airlines</option>
                                                                    <option value="UL">SriLankan Airlines</option>
                                                                    <option value="2I">STAR PERU</option>
                                                                    <option value="6G">Sun Air Express</option>
                                                                    <option value="SY">Sun Country Airlines</option>
                                                                    <option value="PY">Surinam Airways</option>
                                                                    <option value="LX">Swiss International Air Lines</option>
                                                                    <option value="WO">Swoop</option>
                                                                    <option value="DT">TAAG Angola Airlines</option>
                                                                    <option value="TA">TACA Airlines</option>
                                                                    <option value="VR">TACV-Cabo Verde Airlines</option>
                                                                    <option value="5U">TAG Airlines</option>
                                                                    <option value="EQ">Tame</option>
                                                                    <option value="TP">TAP Portugal</option>
                                                                    <option value="RO">Tarom-Romanian Air Transport</option>
                                                                    <option value="TG">Thai Airways International</option>
                                                                    <option value="MT">Thomas Cook Airlines</option>
                                                                    <option value="/X">Tigerair Australia with Bag</option>
                                                                    <option value="IT">Tigerair Taiwan</option>
                                                                    <option value="/Z">Tigerair Taiwan with bag</option>
                                                                    <option value="TJ">Tradewind Aviation</option>
                                                                    <option value="9N">Tropic Air</option>
                                                                    <option value="TB">TUI fly</option>
                                                                    <option value="TK">Turkish Airlines</option>
                                                                    <option value="PS">Ukraine International Airlines</option>
                                                                    <option value="UA">United</option>
                                                                    <option value="UT">Utair Aviation</option>
                                                                    <option value="HY">Uzbekistan Airways</option>
                                                                    <option value="VN">Vietnam Airlines</option>
                                                                    <option value="VX">Virgin America</option>
                                                                    <option value="VS">Virgin Atlantic</option>
                                                                    <option value="VA">Virgin Australia</option>
                                                                    <option value="V2">Vision Airlines</option>
                                                                    <option value="VB">Viva Aerobus</option>
                                                                    <option value="F1">Viva Air Colombia</option>
                                                                    <option value="VV">Viva Airlines Peru</option>
                                                                    <option value="Y4">Volaris</option>
                                                                    <option value="V7">Volotea</option>
                                                                    <option value="VY">Vueling Airlines</option>
                                                                    <option value="WS">WestJet</option>
                                                                    <option value="WM">Windward Island Airways International</option>
                                                                    <option value="MF">Xiamen Airlines</option>
                                                                    <option value="SE">XL Airways</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- end advanced-wrap -->
                                </div><!-- end tab-pane -->
                                <div class="tab-pane fade multi-flight-wrap" id="multi-city" role="tabpanel" aria-labelledby="multi-city-tab">
                                    <div class="contact-form-action multi-flight-field d-flex align-items-center">
                                        <form action="#" class="row flex-grow-1 align-items-center">
                                            <div class="col-lg-4 pr-0">
                                                <div class="input-box">
                                                    <label class="label-text">Flying from</label>
                                                    <div class="form-group">
                                                        <span class="la la-map-marker form-icon"></span>
                                                        <input class="form-control" type="text" placeholder="City or airport">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-3 -->
                                            <div class="col-lg-4 pr-0">
                                                <div class="input-box">
                                                    <label class="label-text">Flying to</label>
                                                    <div class="form-group">
                                                        <span class="la la-map-marker form-icon"></span>
                                                        <input class="form-control" type="text" placeholder="City or airport">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-3 -->
                                            <div class="col-lg-4">
                                                <div class="input-box">
                                                    <label class="label-text">Departing</label>
                                                    <div class="form-group">
                                                        <span class="la la-calendar form-icon"></span>
                                                        <input class="date-range form-control date-multi-picker" id="date" type="text" name="daterange-single" readonly>
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-3 -->
                                        </form>
                                        <div class="multi-flight-delete-wrap pt-3 pl-3">
                                            <button class="multi-flight-remove" type="button"><i class="la la-remove"></i></button>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-lg-3 pr-0">
                                            <div class="form-group">
                                                <button class="theme-btn add-flight-btn margin-top-40px w-100" type="button"><i class="la la-plus mr-1"></i>Add another flight</button>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 pr-0">
                                            <div class="input-box">
                                                <label class="label-text">Passengers</label>
                                                <div class="form-group">
                                                    <div class="dropdown dropdown-contain gty-container">
                                                        <a class="dropdown-toggle dropdown-btn" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                                            <span class="adult" data-text="Adult" data-text-multi="Adults">0 Adult</span>
                                                            -
                                                            <span class="children" data-text="Child" data-text-multi="Children">0 Children</span>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-wrap">
                                                            <div class="dropdown-item">
                                                                <div class="qty-box d-flex align-items-center justify-content-between">
                                                                    <label>Adults</label>
                                                                    <div class="qtyBtn d-flex align-items-center">
                                                                        <div class="qtyDec"><i class="la la-minus"></i></div>
                                                                        <input type="text" name="adult_number" value="0">
                                                                        <div class="qtyInc"><i class="la la-plus"></i></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="dropdown-item">
                                                                <div class="qty-box d-flex align-items-center justify-content-between">
                                                                    <label>Children</label>
                                                                    <div class="qtyBtn d-flex align-items-center">
                                                                        <div class="qtyDec"><i class="la la-minus"></i></div>
                                                                        <input type="text" name="child_number" value="0">
                                                                        <div class="qtyInc"><i class="la la-plus"></i></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="dropdown-item">
                                                                <div class="qty-box d-flex align-items-center justify-content-between">
                                                                    <label>Infants</label>
                                                                    <div class="qtyBtn d-flex align-items-center">
                                                                        <div class="qtyDec"><i class="la la-minus"></i></div>
                                                                        <input type="text" name="infants_number" value="0" class="qty-input">
                                                                        <div class="qtyInc"><i class="la la-plus"></i></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- end dropdown -->
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-3 -->
                                        <div class="col-lg-3 pr-0">
                                            <div class="input-box">
                                                <label class="label-text">Coach</label>
                                                <div class="form-group">
                                                    <div class="select-contain w-auto">
                                                        <select class="select-contain-select">
                                                            <option value="1" selected>Economy</option>
                                                            <option value="2">Business</option>
                                                            <option value="3">First class</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-3 -->
                                        <div class="col-lg-3">
                                            <a href="flight-search-result.html" class="theme-btn w-100 text-center margin-top-20px">Search Now</a>
                                        </div>
                                    </div>
                                </div><!-- end tab-pane -->
                            </div>
                        </div><!-- end tab-pane -->
                        <div class="tab-pane fade" id="hotel" role="tabpanel" aria-labelledby="hotel-tab">
                            <div class="contact-form-action">
                                <form action="#" class="row align-items-center">
                                    <div class="col-lg-3 pr-0">
                                        <div class="input-box">
                                            <label class="label-text">Destination / Hotel name</label>
                                            <div class="form-group">
                                                <span class="la la-map-marker form-icon"></span>
                                                <input class="form-control" type="text" placeholder="Enter city or property">
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-3 -->
                                    <div class="col-lg-3 pr-0">
                                        <div class="input-box">
                                            <label class="label-text">Check in</label>
                                            <div class="form-group">
                                                <span class="la la-calendar form-icon"></span>
                                                <input class="date-range form-control" type="text" name="daterange-single" readonly>
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-3 -->
                                    <div class="col-lg-3 pr-0">
                                        <div class="input-box">
                                            <label class="label-text">Check out</label>
                                            <div class="form-group">
                                                <span class="la la-calendar form-icon"></span>
                                                <input class="date-range form-control" type="text" name="daterange-single" readonly>
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-3 -->
                                    <div class="col-lg-3">
                                        <div class="input-box">
                                            <label class="label-text">Guests</label>
                                            <div class="form-group">
                                                <div class="dropdown dropdown-contain gty-container">
                                                    <a class="dropdown-toggle dropdown-btn" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                                        <span class="adult" data-text="Adult" data-text-multi="Adults">0 Adult</span>
                                                        -
                                                        <span class="children" data-text="Child" data-text-multi="Children">0 Children</span>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-wrap">
                                                        <div class="dropdown-item">
                                                            <div class="qty-box d-flex align-items-center justify-content-between">
                                                                <label>Rooms</label>
                                                                <div class="qtyBtn d-flex align-items-center">
                                                                    <div class="qtyDec"><i class="la la-minus"></i></div>
                                                                    <input type="text" name="room_number" value="0" class="qty-input">
                                                                    <div class="qtyInc"><i class="la la-plus"></i></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-item">
                                                            <div class="qty-box d-flex align-items-center justify-content-between">
                                                                <label>Adults</label>
                                                                <div class="qtyBtn d-flex align-items-center">
                                                                    <div class="qtyDec"><i class="la la-minus"></i></div>
                                                                    <input type="text" name="adult_number" value="0">
                                                                    <div class="qtyInc"><i class="la la-plus"></i></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-item">
                                                            <div class="qty-box d-flex align-items-center justify-content-between">
                                                                <label>Children</label>
                                                                <div class="qtyBtn d-flex align-items-center">
                                                                    <div class="qtyDec"><i class="la la-minus"></i></div>
                                                                    <input type="text" name="child_number" value="0">
                                                                    <div class="qtyInc"><i class="la la-plus"></i></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- end dropdown -->
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-3 -->
                                </form>
                            </div>
                            <div class="btn-box">
                                <a href="hotel-search-result.html" class="theme-btn">Search Now</a>
                            </div>
                        </div><!-- end tab-pane -->
                        <div class="tab-pane fade" id="package" role="tabpanel" aria-labelledby="package-tab">
                            <div class="section-tab section-tab-2 pb-3">
                                <ul class="nav nav-tabs" id="myTab2" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="flight-hotel-tab" data-toggle="tab" href="#flight-hotel" role="tab" aria-controls="flight-hotel" aria-selected="true">
                                            Flight + Hotel
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="flight-hotel-car-tab" data-toggle="tab" href="#flight-hotel-car" role="tab" aria-controls="flight-hotel-car" aria-selected="false">
                                            Flight + Hotel + Car
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="flight-car-tab" data-toggle="tab" href="#flight-car" role="tab" aria-controls="flight-car" aria-selected="false">
                                            Flight + Car
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="hotel-car-tab" data-toggle="tab" href="#hotel-car" role="tab" aria-controls="hotel-car" aria-selected="true">
                                            Hotel + Car
                                        </a>
                                    </li>
                                </ul>
                            </div><!-- end section-tab -->
                            <div class="tab-content" id="myTabContent2">
                                <div class="tab-pane fade show active" id="flight-hotel" role="tabpanel" aria-labelledby="flight-hotel-tab">
                                    <div class="contact-form-action">
                                        <form action="#" class="row align-items-center">
                                            <div class="col-lg-3 pr-0">
                                                <div class="input-box">
                                                    <label class="label-text">Flying from</label>
                                                    <div class="form-group">
                                                        <span class="la la-map-marker form-icon"></span>
                                                        <input class="form-control" type="text" placeholder="City or airport">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-3 -->
                                            <div class="col-lg-3 pr-0">
                                                <div class="input-box">
                                                    <label class="label-text">Flying to</label>
                                                    <div class="form-group">
                                                        <span class="la la-map-marker form-icon"></span>
                                                        <input class="form-control" type="text" placeholder="City or airport">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-3 -->
                                            <div class="col-lg-3 pr-0">
                                                <div class="input-box">
                                                    <label class="label-text">Departing - Returning</label>
                                                    <div class="form-group">
                                                        <span class="la la-calendar form-icon"></span>
                                                        <input class="date-range form-control" type="text" name="daterange" readonly>
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-3 -->
                                            <div class="col-lg-3">
                                                <div class="input-box">
                                                    <label class="label-text">Guests</label>
                                                    <div class="form-group">
                                                        <div class="dropdown dropdown-contain gty-container">
                                                            <a class="dropdown-toggle dropdown-btn" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                                                <span class="adult" data-text="Adult" data-text-multi="Adults">0 Adult</span>
                                                                -
                                                                <span class="children" data-text="Child" data-text-multi="Children">0 Children</span>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-wrap">
                                                                <div class="dropdown-item">
                                                                    <div class="qty-box d-flex align-items-center justify-content-between">
                                                                        <label>Rooms</label>
                                                                        <div class="qtyBtn d-flex align-items-center">
                                                                            <div class="qtyDec"><i class="la la-minus"></i></div>
                                                                            <input type="text" name="room_number" value="0" class="qty-input">
                                                                            <div class="qtyInc"><i class="la la-plus"></i></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="dropdown-item">
                                                                    <div class="qty-box d-flex align-items-center justify-content-between">
                                                                        <label>Adults</label>
                                                                        <div class="qtyBtn d-flex align-items-center">
                                                                            <div class="qtyDec"><i class="la la-minus"></i></div>
                                                                            <input type="text" name="adult_number" value="0">
                                                                            <div class="qtyInc"><i class="la la-plus"></i></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="dropdown-item">
                                                                    <div class="qty-box d-flex align-items-center justify-content-between">
                                                                        <label>Children</label>
                                                                        <div class="qtyBtn d-flex align-items-center">
                                                                            <div class="qtyDec"><i class="la la-minus"></i></div>
                                                                            <input type="text" name="child_number" value="0">
                                                                            <div class="qtyInc"><i class="la la-plus"></i></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- end dropdown -->
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-3 -->
                                        </form>
                                    </div>
                                    <div class="checkmark-wrap">
                                        <div class="custom-checkbox d-inline-block mb-0 mr-3">
                                            <input type="checkbox" id="directFlightChb">
                                            <label for="directFlightChb">Direct flights only</label>
                                        </div>
                                        <div class="custom-checkbox d-inline-block mb-0">
                                            <input type="checkbox" id="onlyHotelChb">
                                            <label for="onlyHotelChb">I only need a hotel for part of my stay</label>
                                        </div>
                                    </div><!-- end checkmark-wrap -->
                                    <div class="btn-box pt-3">
                                        <a href="activity-search-result.html" class="theme-btn">Search Now</a>
                                    </div>
                                </div><!-- end tab-pane -->
                                <div class="tab-pane fade" id="flight-hotel-car" role="tabpanel" aria-labelledby="flight-hotel-car-tab">
                                    <div class="contact-form-action">
                                        <form action="#" class="row align-items-center">
                                            <div class="col-lg-3 pr-0">
                                                <div class="input-box">
                                                    <label class="label-text">Flying from</label>
                                                    <div class="form-group">
                                                        <span class="la la-map-marker form-icon"></span>
                                                        <input type="text" class="form-control" placeholder="City or airport">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-3 -->
                                            <div class="col-lg-3 pr-0">
                                                <div class="input-box">
                                                    <label class="label-text">Flying to</label>
                                                    <div class="form-group">
                                                        <span class="la la-map-marker form-icon"></span>
                                                        <input class="form-control" type="text" placeholder="City or airport">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-3 -->
                                            <div class="col-lg-3 pr-0">
                                                <div class="input-box">
                                                    <label class="label-text">Departing - Returning</label>
                                                    <div class="form-group">
                                                        <span class="la la-calendar form-icon"></span>
                                                        <input class="date-range form-control" type="text" name="daterange" readonly>
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-3 -->
                                            <div class="col-lg-3">
                                                <div class="input-box">
                                                    <label class="label-text">Guests</label>
                                                    <div class="form-group">
                                                        <div class="dropdown dropdown-contain gty-container">
                                                            <a class="dropdown-toggle dropdown-btn" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                                                <span class="adult" data-text="Adult" data-text-multi="Adults">0 Adult</span>
                                                                -
                                                                <span class="children" data-text="Child" data-text-multi="Children">0 Children</span>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-wrap">
                                                                <div class="dropdown-item">
                                                                    <div class="qty-box d-flex align-items-center justify-content-between">
                                                                        <label>Rooms</label>
                                                                        <div class="qtyBtn d-flex align-items-center">
                                                                            <div class="qtyDec"><i class="la la-minus"></i></div>
                                                                            <input type="text" name="room_number" value="0" class="qty-input">
                                                                            <div class="qtyInc"><i class="la la-plus"></i></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="dropdown-item">
                                                                    <div class="qty-box d-flex align-items-center justify-content-between">
                                                                        <label>Adults</label>
                                                                        <div class="qtyBtn d-flex align-items-center">
                                                                            <div class="qtyDec"><i class="la la-minus"></i></div>
                                                                            <input type="text" name="adult_number" value="0">
                                                                            <div class="qtyInc"><i class="la la-plus"></i></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="dropdown-item">
                                                                    <div class="qty-box d-flex align-items-center justify-content-between">
                                                                        <label>Children</label>
                                                                        <div class="qtyBtn d-flex align-items-center">
                                                                            <div class="qtyDec"><i class="la la-minus"></i></div>
                                                                            <input type="text" name="child_number" value="0">
                                                                            <div class="qtyInc"><i class="la la-plus"></i></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- end dropdown -->
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-3 -->
                                        </form>
                                    </div>
                                    <div class="checkmark-wrap">
                                        <div class="custom-checkbox d-inline-block mb-0 mr-3">
                                            <input type="checkbox" id="directFlightChb2">
                                            <label for="directFlightChb2">Direct flights only</label>
                                        </div>
                                        <div class="custom-checkbox d-inline-block mb-0">
                                            <input type="checkbox" id="onlyHotelChb2">
                                            <label for="onlyHotelChb2">I only need a hotel for part of my stay</label>
                                        </div>
                                    </div><!-- end checkmark-wrap -->
                                    <div class="btn-box pt-3">
                                        <a href="activity-search-result.html" class="theme-btn">Search Now</a>
                                    </div>
                                </div><!-- end tab-pane -->
                                <div class="tab-pane fade" id="flight-car" role="tabpanel" aria-labelledby="flight-car-tab">
                                    <div class="contact-form-action">
                                        <form action="#" class="row align-items-center">
                                            <div class="col-lg-3 pr-0">
                                                <div class="input-box">
                                                    <label class="label-text">Flying from</label>
                                                    <div class="form-group">
                                                        <span class="la la-map-marker form-icon"></span>
                                                        <input class="form-control" type="text" placeholder="City or airport">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 pr-0">
                                                <div class="input-box">
                                                    <label class="label-text">Flying to</label>
                                                    <div class="form-group">
                                                        <span class="la la-map-marker form-icon"></span>
                                                        <input class="form-control" type="text" placeholder="City or airport">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 pr-0">
                                                <div class="input-box">
                                                    <label class="label-text">Departing - Returning</label>
                                                    <div class="form-group">
                                                        <span class="la la-calendar form-icon"></span>
                                                        <input class="date-range form-control" type="text" name="daterange" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="input-box">
                                                    <label class="label-text">Passengers</label>
                                                    <div class="form-group">
                                                        <div class="dropdown dropdown-contain gty-container">
                                                            <a class="dropdown-toggle dropdown-btn" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                                                <span class="adult" data-text="Adult" data-text-multi="Adults">0 Adult</span>
                                                                -
                                                                <span class="children" data-text="Child" data-text-multi="Children">0 Children</span>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-wrap">
                                                                <div class="dropdown-item">
                                                                    <div class="qty-box d-flex align-items-center justify-content-between">
                                                                        <label>Adults</label>
                                                                        <div class="qtyBtn d-flex align-items-center">
                                                                            <div class="qtyDec"><i class="la la-minus"></i></div>
                                                                            <input type="text" name="adult_number" value="0">
                                                                            <div class="qtyInc"><i class="la la-plus"></i></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="dropdown-item">
                                                                    <div class="qty-box d-flex align-items-center justify-content-between">
                                                                        <label>Children</label>
                                                                        <div class="qtyBtn d-flex align-items-center">
                                                                            <div class="qtyDec"><i class="la la-minus"></i></div>
                                                                            <input type="text" name="child_number" value="0">
                                                                            <div class="qtyInc"><i class="la la-plus"></i></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="dropdown-item">
                                                                    <div class="qty-box d-flex align-items-center justify-content-between">
                                                                        <label>Infants</label>
                                                                        <div class="qtyBtn d-flex align-items-center">
                                                                            <div class="qtyDec"><i class="la la-minus"></i></div>
                                                                            <input type="text" name="infants_number" value="0" class="qty-input">
                                                                            <div class="qtyInc"><i class="la la-plus"></i></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- end dropdown -->
                                                    </div>
                                                </div>
                                            </div>
                                        </form><!-- end row -->
                                    </div>
                                    <div class="checkmark-wrap">
                                        <div class="custom-checkbox d-inline-block mb-0">
                                            <input type="checkbox" id="directFlightChb3">
                                            <label for="directFlightChb3">Direct flights only</label>
                                        </div>
                                    </div><!-- end checkmark-wrap -->
                                    <div class="btn-box pt-3">
                                        <a href="activity-search-result.html" class="theme-btn">Search Now</a>
                                    </div>
                                </div><!-- end tab-pane -->
                                <div class="tab-pane fade" id="hotel-car" role="tabpanel" aria-labelledby="hotel-car-tab">
                                    <div class="contact-form-action">
                                        <form action="#" class="row align-items-center">
                                            <div class="col-lg-3 pr-0">
                                                <div class="input-box">
                                                    <label class="label-text">Going to</label>
                                                    <div class="form-group">
                                                        <span class="la la-map-marker form-icon"></span>
                                                        <input class="form-control" type="text" placeholder="Enter City or property">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-3 -->
                                            <div class="col-lg-3 pr-0">
                                                <div class="input-box">
                                                    <label class="label-text">Check in - Check-out</label>
                                                    <div class="form-group">
                                                        <span class="la la-calendar form-icon"></span>
                                                        <input class="date-range form-control" type="text" name="daterange" readonly>
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-3 -->
                                            <div class="col-lg-3 pr-0">
                                                <div class="input-box">
                                                    <label class="label-text">Room Type</label>
                                                    <div class="form-group">
                                                        <div class="select-contain w-auto">
                                                            <select class="select-contain-select">
                                                                <option value="0">Select Type</option>
                                                                <option value="1">Single</option>
                                                                <option value="2">Double</option>
                                                                <option value="3">Triple</option>
                                                                <option value="4">Quad</option>
                                                                <option value="5">Queen</option>
                                                                <option value="6">King</option>
                                                                <option value="7">Twin</option>
                                                                <option value="8">Double-double</option>
                                                                <option value="9">Studio</option>
                                                                <option value="10">Suite</option>
                                                                <option value="11">Mini Suite</option>
                                                                <option value="12">President Suite</option>
                                                                <option value="13">President Suite</option>
                                                                <option value="14">Apartments</option>
                                                                <option value="15">Connecting rooms</option>
                                                                <option value="16">Murphy Room</option>
                                                                <option value="17">Accessible Room</option>
                                                                <option value="18">Cabana</option>
                                                                <option value="19">Adjoining rooms</option>
                                                                <option value="20">Adjacent rooms</option>
                                                                <option value="21">Villa</option>
                                                                <option value="22">Executive Floor</option>
                                                                <option value="23">Smoking room</option>
                                                                <option value="24">Non-Smoking Room</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-3 -->
                                            <div class="col-lg-3">
                                                <div class="input-box">
                                                    <label class="label-text">Guests</label>
                                                    <div class="form-group">
                                                        <div class="dropdown dropdown-contain gty-container">
                                                            <a class="dropdown-toggle dropdown-btn" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                                                <span class="adult" data-text="Adult" data-text-multi="Adults">0 Adult</span>
                                                                -
                                                                <span class="children" data-text="Child" data-text-multi="Children">0 Children</span>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-wrap">
                                                                <div class="dropdown-item">
                                                                    <div class="qty-box d-flex align-items-center justify-content-between">
                                                                        <label>Rooms</label>
                                                                        <div class="qtyBtn d-flex align-items-center">
                                                                            <div class="qtyDec"><i class="la la-minus"></i></div>
                                                                            <input type="text" name="room_number" value="0" class="qty-input">
                                                                            <div class="qtyInc"><i class="la la-plus"></i></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="dropdown-item">
                                                                    <div class="qty-box d-flex align-items-center justify-content-between">
                                                                        <label>Adults</label>
                                                                        <div class="qtyBtn d-flex align-items-center">
                                                                            <div class="qtyDec"><i class="la la-minus"></i></div>
                                                                            <input type="text" name="adult_number" value="0">
                                                                            <div class="qtyInc"><i class="la la-plus"></i></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="dropdown-item">
                                                                    <div class="qty-box d-flex align-items-center justify-content-between">
                                                                        <label>Children</label>
                                                                        <div class="qtyBtn d-flex align-items-center">
                                                                            <div class="qtyDec"><i class="la la-minus"></i></div>
                                                                            <input type="text" name="child_number" value="0">
                                                                            <div class="qtyInc"><i class="la la-plus"></i></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- end dropdown -->
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-3 -->
                                        </form>
                                    </div>
                                    <div class="btn-box pt-2">
                                        <a href="activity-search-result.html" class="theme-btn">Search Now</a>
                                    </div>
                                </div><!-- end tab-pane -->
                            </div>
                        </div><!-- end tab-pane -->
                        <div class="tab-pane fade" id="car" role="tabpanel" aria-labelledby="car-tab">
                            <div class="contact-form-action">
                                <form action="#" class="row align-items-center">
                                    <div class="col-lg-4 pr-0">
                                        <div class="input-box">
                                            <label class="label-text">Picking up</label>
                                            <div class="form-group">
                                                <span class="la la-map-marker form-icon"></span>
                                                <input class="form-control" type="text" placeholder="City, airport or address">
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 pr-0">
                                        <div class="input-box">
                                            <label class="label-text">Pick-up date</label>
                                            <div class="form-group">
                                                <span class="la la-calendar form-icon"></span>
                                                <input class="date-range form-control" type="text" name="daterange-single" readonly>
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4">
                                        <div class="input-box">
                                            <label class="label-text">Time</label>
                                            <div class="form-group">
                                                <div class="select-contain w-auto">
                                                    <select class="select-contain-select">
                                                        <option value="1200AM">12:00AM</option>
                                                        <option value="1230AM">12:30AM</option>
                                                        <option value="0100AM">1:00AM</option>
                                                        <option value="0130AM">1:30AM</option>
                                                        <option value="0200AM">2:00AM</option>
                                                        <option value="0230AM">2:30AM</option>
                                                        <option value="0300AM">3:00AM</option>
                                                        <option value="0330AM">3:30AM</option>
                                                        <option value="0400AM">4:00AM</option>
                                                        <option value="0430AM">4:30AM</option>
                                                        <option value="0500AM">5:00AM</option>
                                                        <option value="0530AM">5:30AM</option>
                                                        <option value="0600AM">6:00AM</option>
                                                        <option value="0630AM">6:30AM</option>
                                                        <option value="0700AM">7:00AM</option>
                                                        <option value="0730AM">7:30AM</option>
                                                        <option value="0800AM">8:00AM</option>
                                                        <option value="0830AM">8:30AM</option>
                                                        <option value="0900AM" selected>9:00AM</option>
                                                        <option value="0930AM">9:30AM</option>
                                                        <option value="1000AM">10:00AM</option>
                                                        <option value="1030AM">10:30AM</option>
                                                        <option value="1100AM">11:00AM</option>
                                                        <option value="1130AM">11:30AM</option>
                                                        <option value="1200PM">12:00PM</option>
                                                        <option value="1230PM">12:30PM</option>
                                                        <option value="0100PM">1:00PM</option>
                                                        <option value="0130PM">1:30PM</option>
                                                        <option value="0200PM">2:00PM</option>
                                                        <option value="0230PM">2:30PM</option>
                                                        <option value="0300PM">3:00PM</option>
                                                        <option value="0330PM">3:30PM</option>
                                                        <option value="0400PM">4:00PM</option>
                                                        <option value="0430PM">4:30PM</option>
                                                        <option value="0500PM">5:00PM</option>
                                                        <option value="0530PM">5:30PM</option>
                                                        <option value="0600PM">6:00PM</option>
                                                        <option value="0630PM">6:30PM</option>
                                                        <option value="0700PM">7:00PM</option>
                                                        <option value="0730PM">7:30PM</option>
                                                        <option value="0800PM">8:00PM</option>
                                                        <option value="0830PM">8:30PM</option>
                                                        <option value="0900PM">9:00PM</option>
                                                        <option value="0930PM">9:30PM</option>
                                                        <option value="1000PM">10:00PM</option>
                                                        <option value="1030PM">10:30PM</option>
                                                        <option value="1100PM">11:00PM</option>
                                                        <option value="1130PM">11:30PM</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-4 -->
                                </form>
                                <form action="#" class="row align-items-center">
                                    <div class="col-lg-4 pr-0">
                                        <div class="input-box">
                                            <label class="label-text">Drop-off</label>
                                            <div class="form-group">
                                                <span class="la la-map-marker form-icon"></span>
                                                <input class="form-control" type="text" placeholder="Same as pick-up">
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 pr-0">
                                        <div class="input-box">
                                            <label class="label-text">Drop-off date</label>
                                            <div class="form-group">
                                                <span class="la la-calendar form-icon"></span>
                                                <input class="date-range form-control" type="text" name="daterange-single" readonly>
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4">
                                        <div class="input-box">
                                            <label class="label-text">Time</label>
                                            <div class="form-group">
                                                <div class="select-contain w-auto">
                                                    <select class="select-contain-select">
                                                        <option value="1200AM">12:00AM</option>
                                                        <option value="1230AM">12:30AM</option>
                                                        <option value="0100AM">1:00AM</option>
                                                        <option value="0130AM">1:30AM</option>
                                                        <option value="0200AM">2:00AM</option>
                                                        <option value="0230AM">2:30AM</option>
                                                        <option value="0300AM">3:00AM</option>
                                                        <option value="0330AM">3:30AM</option>
                                                        <option value="0400AM">4:00AM</option>
                                                        <option value="0430AM">4:30AM</option>
                                                        <option value="0500AM">5:00AM</option>
                                                        <option value="0530AM">5:30AM</option>
                                                        <option value="0600AM">6:00AM</option>
                                                        <option value="0630AM">6:30AM</option>
                                                        <option value="0700AM">7:00AM</option>
                                                        <option value="0730AM">7:30AM</option>
                                                        <option value="0800AM">8:00AM</option>
                                                        <option value="0830AM">8:30AM</option>
                                                        <option value="0900AM" selected>9:00AM</option>
                                                        <option value="0930AM">9:30AM</option>
                                                        <option value="1000AM">10:00AM</option>
                                                        <option value="1030AM">10:30AM</option>
                                                        <option value="1100AM">11:00AM</option>
                                                        <option value="1130AM">11:30AM</option>
                                                        <option value="1200PM">12:00PM</option>
                                                        <option value="1230PM">12:30PM</option>
                                                        <option value="0100PM">1:00PM</option>
                                                        <option value="0130PM">1:30PM</option>
                                                        <option value="0200PM">2:00PM</option>
                                                        <option value="0230PM">2:30PM</option>
                                                        <option value="0300PM">3:00PM</option>
                                                        <option value="0330PM">3:30PM</option>
                                                        <option value="0400PM">4:00PM</option>
                                                        <option value="0430PM">4:30PM</option>
                                                        <option value="0500PM">5:00PM</option>
                                                        <option value="0530PM">5:30PM</option>
                                                        <option value="0600PM">6:00PM</option>
                                                        <option value="0630PM">6:30PM</option>
                                                        <option value="0700PM">7:00PM</option>
                                                        <option value="0730PM">7:30PM</option>
                                                        <option value="0800PM">8:00PM</option>
                                                        <option value="0830PM">8:30PM</option>
                                                        <option value="0900PM">9:00PM</option>
                                                        <option value="0930PM">9:30PM</option>
                                                        <option value="1000PM">10:00PM</option>
                                                        <option value="1030PM">10:30PM</option>
                                                        <option value="1100PM">11:00PM</option>
                                                        <option value="1130PM">11:30PM</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-4 -->
                                </form><!-- end row -->
                            </div>
                            <div class="advanced-wrap">
                                <a class="btn collapse-btn theme-btn-hover-gray font-size-15" data-toggle="collapse" href="#collapseSix" role="button" aria-expanded="false" aria-controls="collapseSix">
                                    Advanced options <i class="la la-angle-down ml-1"></i>
                                </a>
                                <div class="pt-3 collapse" id="collapseSix">
                                    <div class="row">
                                        <div class="col-lg-3 pr-0">
                                            <div class="input-box">
                                                <label class="label-text">Car type</label>
                                                <div class="form-group">
                                                    <div class="select-contain w-auto">
                                                        <select class="select-contain-select">
                                                            <option value="1">No preference</option>
                                                            <option value="2">Economy</option>
                                                            <option value="3">Compact</option>
                                                            <option value="4">Midsize</option>
                                                            <option value="5">Standard</option>
                                                            <option value="6">Fullsize</option>
                                                            <option value="7">Premium</option>
                                                            <option value="8">Luxury</option>
                                                            <option value="9">Convertible</option>
                                                            <option value="10">Minivan</option>
                                                            <option value="11">Sport Utility</option>
                                                            <option value="12">Sports car</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-3 -->
                                        <div class="col-lg-3 pr-0">
                                            <div class="input-box">
                                                <label class="label-text">Rental car company</label>
                                                <div class="form-group">
                                                    <div class="select-contain w-auto">
                                                        <select class="select-contain-select">
                                                            <option value="">No preference</option>
                                                            <option value="AC">ACE Rent A Car</option>
                                                            <option value="AD">Advantage Rent-A-Car</option>
                                                            <option value="AL">Alamo Rent A Car</option>
                                                            <option value="ZI">Avis</option>
                                                            <option value="ZD">Budget</option>
                                                            <option value="ZR">Dollar Rent A Car</option>
                                                            <option value="EY">Economy Rent a Car</option>
                                                            <option value="ET">Enterprise</option>
                                                            <option value="EP">Europcar</option>
                                                            <option value="FX">Fox Rental Cars</option>
                                                            <option value="ZE">Hertz</option>
                                                            <option value="MW">Midway Car Rental</option>
                                                            <option value="ZL">National Car Rental</option>
                                                            <option value="NU">N?? Car</option>
                                                            <option value="ZA">Payless</option>
                                                            <option value="RO">Routes Car Rental</option>
                                                            <option value="SX">Sixt</option>
                                                            <option value="ZT">Thrifty Car Rental</option>
                                                            <option value="SV">U-Save</option>
                                                            <option value="SC">Silvercar</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-3 -->
                                        <div class="col-lg-3">
                                            <div class="input-box">
                                                <label class="label-text">Discount code</label>
                                                <div class="form-group">
                                                    <div class="select-contain w-auto">
                                                        <select class="select-contain-select">
                                                            <option value="0">I don't have a code</option>
                                                            <option value="1">Corporate or contracted</option>
                                                            <option value="2">Special or advertised</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-3 -->
                                    </div><!-- end row -->
                                </div>
                            </div><!-- end advanced-wrap -->
                            <div class="btn-box pt-3">
                                <a href="car-search-result.html" class="theme-btn">Search Now</a>
                            </div>
                        </div><!-- end tab-pane -->
                        <div class="tab-pane fade" id="cruise" role="tabpanel" aria-labelledby="cruise-tab">
                            <div class="contact-form-action">
                                <form action="#" class="row align-items-center">
                                    <div class="col-lg-3 pr-0">
                                        <div class="input-box">
                                            <label class="label-text">Going to</label>
                                            <div class="form-group">
                                                <div class="select-contain w-auto">
                                                    <select class="select-contain-select">
                                                        <option value="">Select destination</option>
                                                        <optgroup label="Most Popular">
                                                            <option value="caribbean">Caribbean</option>
                                                            <option value="bahamas">Bahamas</option>
                                                            <option value="mexico">Mexico</option>
                                                            <option value="alaska">Alaska</option>
                                                            <option value="europe">Europe</option>
                                                            <option value="bermuda">Bermuda</option>
                                                            <option value="hawaii">Hawaii</option>
                                                            <option value="nepal">Nepal</option>
                                                            <option value="italy">Italy</option>
                                                            <option value="canada-new-england">Canada / New England</option>
                                                        </optgroup>
                                                        <optgroup label="Other Destinations">
                                                            <option value="arctic-antarctic">Arctic / Antarctic</option>
                                                            <option value="middle-east">Middle East</option>
                                                            <option value="africa">Africa</option>
                                                            <option value="panama-canal">Panama Canal</option>
                                                            <option value="asia">Asia</option>
                                                            <option value="pacific-coastal">Pacific Coastal</option>
                                                            <option value="australia-new-zealand">Australia / New Zealand</option>
                                                            <option value="central-america">Central America</option>
                                                            <option value="galapagos">Galapagos</option>
                                                            <option value="getaway-at-sea">Getaway at Sea</option>
                                                            <option value="transatlantic">Transatlantic</option>
                                                            <option value="world-cruise">World</option>
                                                            <option value="south-america">South America</option>
                                                            <option value="south-pacific">South Pacific</option>
                                                            <option value="transpacific">Transpacific</option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-3 -->
                                    <div class="col-lg-3 pr-0">
                                        <div class="input-box">
                                            <label class="label-text">Departs as early as</label>
                                            <div class="form-group">
                                                <span class="la la-calendar form-icon"></span>
                                                <input class="date-range form-control" type="text" name="daterange-single" readonly>
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-3 -->
                                    <div class="col-lg-3 pr-0">
                                        <div class="input-box">
                                            <label class="label-text">Departs as late as</label>
                                            <div class="form-group">
                                                <span class="la la-calendar form-icon"></span>
                                                <input class="date-range form-control" type="text" name="daterange-single" readonly>
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-3 -->
                                    <div class="col-lg-3">
                                        <div class="input-box">
                                            <label class="label-text">Travelers in the cabin</label>
                                            <div class="form-group">
                                                <div class="dropdown dropdown-contain gty-container">
                                                    <a class="dropdown-toggle dropdown-btn" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                                        <span class="adult" data-text="Adult" data-text-multi="Adults">0 Adult</span>
                                                        -
                                                        <span class="children" data-text="Child" data-text-multi="Children">0 Children</span>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-wrap">
                                                        <div class="dropdown-item">
                                                            <div class="qty-box d-flex align-items-center justify-content-between">
                                                                <label>Adults</label>
                                                                <div class="qtyBtn d-flex align-items-center">
                                                                    <div class="qtyDec"><i class="la la-minus"></i></div>
                                                                    <input type="text" name="adult_number" value="0">
                                                                    <div class="qtyInc"><i class="la la-plus"></i></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-item">
                                                            <div class="qty-box d-flex align-items-center justify-content-between">
                                                                <label>Children</label>
                                                                <div class="qtyBtn d-flex align-items-center">
                                                                    <div class="qtyDec"><i class="la la-minus"></i></div>
                                                                    <input type="text" name="child_number" value="0">
                                                                    <div class="qtyInc"><i class="la la-plus"></i></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-item">
                                                            <div class="qty-box d-flex align-items-center justify-content-between">
                                                                <label>Infants</label>
                                                                <div class="qtyBtn d-flex align-items-center">
                                                                    <div class="qtyDec"><i class="la la-minus"></i></div>
                                                                    <input type="text" name="infants_number" value="0" class="qty-input">
                                                                    <div class="qtyInc"><i class="la la-plus"></i></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- end dropdown -->
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-3 -->
                                </form>
                            </div>
                            <div class="btn-box">
                                <a href="cruise-search-result.html" class="theme-btn">Search Now</a>
                            </div>
                        </div><!-- end tab-pane -->
                        <div class="tab-pane fade" id="tour" role="tabpanel" aria-labelledby="tour-tab">
                            <div class="contact-form-action">
                                <form action="#" class="row align-items-center">
                                    <div class="col-lg-4 pr-0">
                                        <div class="input-box">
                                            <label class="label-text">Where would like to go?</label>
                                            <div class="form-group">
                                                <span class="la la-map-marker form-icon"></span>
                                                <input class="form-control" type="text" placeholder="Destination, city, or region">
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 pr-0">
                                        <div class="input-box">
                                            <label class="label-text">From</label>
                                            <div class="form-group">
                                                <span class="la la-calendar form-icon"></span>
                                                <input class="date-range form-control" type="text" name="daterange-single" readonly>
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4">
                                        <div class="input-box">
                                            <label class="label-text">To</label>
                                            <div class="form-group">
                                                <span class="la la-calendar form-icon"></span>
                                                <input class="date-range form-control" type="text" name="daterange-single" readonly>
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-4 -->
                                </form>
                            </div>
                            <div class="advanced-wrap">
                                <a class="btn collapse-btn theme-btn-hover-gray font-size-15" data-toggle="collapse" href="#collapseSeven" role="button" aria-expanded="false" aria-controls="collapseSeven">
                                    Advanced search <i class="la la-angle-down ml-1"></i>
                                </a>
                                <div class="pt-3 collapse" id="collapseSeven">
                                    <div class="slider-range-wrap">
                                        <div class="price-slider-amount padding-bottom-20px">
                                            <label for="amount" class="filter__label">Price Range</label>
                                            <input type="text" id="amount" class="amounts">
                                        </div><!-- end price-slider-amount -->
                                        <div id="slider-range"></div><!-- end slider-range -->
                                    </div><!-- end slider-range-wrap -->
                                    <div class="checkbox-wrap padding-top-30px">
                                        <h3 class="title font-size-15 pb-3">Tour Categories</h3>
                                        <div class="custom-checkbox d-inline-block mr-4">
                                            <input type="checkbox" id="tourChb1">
                                            <label for="tourChb1">Active Adventure Tours</label>
                                        </div>
                                        <div class="custom-checkbox d-inline-block mr-4">
                                            <input type="checkbox" id="tourChb2">
                                            <label for="tourChb2">Ecotourism</label>
                                        </div>
                                        <div class="custom-checkbox d-inline-block mr-4">
                                            <input type="checkbox" id="tourChb3">
                                            <label for="tourChb3">Escorted Tours</label>
                                        </div>
                                        <div class="custom-checkbox d-inline-block mr-4">
                                            <input type="checkbox" id="tourChb4">
                                            <label for="tourChb4">Group Tours</label>
                                        </div>
                                        <div class="custom-checkbox d-inline-block mr-4">
                                            <input type="checkbox" id="tourChb5">
                                            <label for="tourChb5">Ligula</label>
                                        </div>
                                        <div class="custom-checkbox d-inline-block mr-4">
                                            <input type="checkbox" id="tourChb6">
                                            <label for="tourChb6">Family Tours</label>
                                        </div>
                                        <div class="custom-checkbox d-inline-block mr-4">
                                            <input type="checkbox" id="tourChb7">
                                            <label for="tourChb7">City Trips</label>
                                        </div>
                                        <div class="custom-checkbox d-inline-block mr-4">
                                            <input type="checkbox" id="tourChb8">
                                            <label for="tourChb8">National Parks Tours</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-box pt-3">
                                <a href="tour-search-result.html" class="theme-btn">Search Now</a>
                            </div>
                        </div><!-- end tab-pane -->
                    </div>
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
        <svg class="hero-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none"><path d="M0 10 0 0 A 90 59, 0, 0, 0, 100 0 L 100 10 Z"></path></svg>
    </div>
</section><!-- end hero-wrapper -->
<!-- ================================
    END HERO-WRAPPER AREA
================================= -->
