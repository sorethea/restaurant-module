<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title>OneUIUX V2.0 - Mobile HTML template</title>

    <!-- manifest meta -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="manifest" href="manifest.json" />

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="assets/img/favicon180.png" sizes="180x180">
    <link rel="icon" href="assets/img/favicon32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="assets/img/favicon16.png" sizes="16x16" type="image/png">

    <!-- Google fonts-->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- nouislider CSS -->
    <link href="assets/vendor/nouislider/nouislider.min.css" rel="stylesheet">

    <!-- date rage picker -->
    <link rel="stylesheet" href="assets/vendor/daterangepicker/daterangepicker.css">

    <!-- swiper carousel css -->
    <link rel="stylesheet" href="assets/vendor/swiperjs-6.6.2/swiper-bundle.min.css">

    <!-- style css for this template -->
    <link href="assets/scss/style.css" rel="stylesheet" id="style">
</head>

<body class="body-scroll theme-red bg-theme transform-page-scale" data-page="shop">

<!-- loader section -->
<div class="container-fluid loader-wrap">
    <div class="row h-100">
        <div class="col-10 col-md-6 col-lg-5 col-xl-3 mx-auto text-center align-self-center">
            <div class="circular-loader">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
            <p class="mt-4"><span class="text-secondary">Shopping Experience Unlimited</span><br><strong>Please
                    wait...</strong></p>
        </div>
    </div>
</div>
<!-- loader section ends -->

<!-- Sidebar main menu -->
<div class="sidebar-wrap  sidebar-pushcontent">
    <!-- Add overlay or fullmenu instead pushcontent-->
    <div class="closemenu text-secondary">Close Menu</div>
    <div class="sidebar ">
        <!-- user information -->
        <div class="row">
            <div class="col-12 profile-sidebar">
                <div class="row">
                    <div class="col-auto">
                        <figure class="avatar avatar-80 rounded-18 shadow-sm p-1 bg-white">
                            <img src="assets/img/user1.jpg" alt="" class="rounded-15">
                        </figure>
                    </div>
                    <div class="col px-0 align-self-center">
                        <h5 class="mb-2">John Winsels</h5>
                        <p class="text-muted size-12">New York City,<br />United States</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- user emnu navigation -->
        <div class="row">
            <div class="col-12">
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.html">
                            <div class="avatar avatar-40 icon"><i class="bi bi-house-door"></i></div>
                            <div class="col">Shop</div>
                            <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                            <div class="avatar avatar-40 icon"><i class="bi bi-cart"></i></div>
                            <div class="col">Shop pages</div>
                            <div class="arrow"><i class="bi bi-chevron-down plus"></i> <i class="bi bi-chevron-up minus"></i>
                            </div>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item nav-link" href="products.html">
                                    <div class="avatar avatar-40 icon"><i class="bi bi-box-seam"></i>
                                    </div>
                                    <div class="col align-self-center">All Products</div>
                                    <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item nav-link" href="product.html">
                                    <div class="avatar avatar-40 icon"><i class="bi bi-box-seam"></i>
                                    </div>
                                    <div class="col align-self-center">Product</div>
                                    <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item nav-link" href="cart.html">
                                    <div class="avatar avatar-40 icon"><i class="bi bi-bag"></i>
                                    </div>
                                    <div class="col align-self-center">Cart</div>
                                    <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item nav-link" href="myorders.html">
                                    <div class="avatar avatar-40 icon"><i class="bi bi-view-list"></i>
                                    </div>
                                    <div class="col align-self-center">My Orders</div>
                                    <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item nav-link" href="payment.html">
                                    <div class="avatar avatar-40 icon"><i class="bi bi-cash-stack"></i>
                                    </div>
                                    <div class="col align-self-center">Payment</div>
                                    <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item nav-link" href="invoice.html">
                                    <div class="avatar avatar-40 icon"><i class="bi bi-receipt"></i>
                                    </div>
                                    <div class="col align-self-center">Invoice</div>
                                    <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="chat.html" tabindex="-1">
                            <div class="avatar avatar-40 icon"><i class="bi bi-chat-text"></i></div>
                            <div class="col">Messages</div>
                            <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="notifications.html" tabindex="-1">
                            <div class="avatar avatar-40 icon"><i class="bi bi-bell"></i></div>
                            <div class="col">Notification</div>
                            <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="blog.html" tabindex="-1">
                            <div class="avatar avatar-40 icon"><i class="bi bi-newspaper"></i></div>
                            <div class="col">Blogs</div>
                            <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="style.html" tabindex="-1">
                            <div class="avatar avatar-40 icon"><i class="bi bi-palette"></i></div>
                            <div class="col">Style <i class="bi bi-star-fill text-warning small"></i></div>
                            <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="pages.html" tabindex="-1">
                            <div class="avatar avatar-40 icon"><i class="bi bi-file-earmark-text"></i></div>
                            <div class="col">Pages <span class="badge bg-info fw-light">new</span></div>
                            <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="signin.html" tabindex="-1">
                            <div class="avatar avatar-40 icon"><i class="bi bi-box-arrow-right"></i></div>
                            <div class="col">Logout</div>
                            <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Sidebar main menu ends -->

<!-- Begin page -->
<main class="h-100 theme-light-radial-gradient">

    <!-- Header -->
    <header class="header position-fixed bg-theme-round-opac text-white">
        <div class="row">
            <div class="col-auto">
                <button type="button" class="btn btn-default btn-44 btn-rounded menu-btn">
                    <i class="bi bi-list"></i>
                </button>
            </div>
            <div class="col">
                <div class="logo-small">
                    <img src="assets/img/logo.png" alt="" class="rounded-circle" />
                    <h5>OneUIUX<br /><span class="text-muted fw-light">Foodies</span></h5>
                </div>
            </div>
            <div class="col-auto">
                <a href="notifications.html" target="_self" class="btn btn-default btn-44 btn-rounded">
                    <i class="bi bi-bell"></i>
                    <span class="count-indicator"></span>
                </a>
                <a href="profile.html" target="_self" class="btn btn-default btn-44 btn-rounded ms-2">
                    <i class="bi bi-person-circle"></i>
                </a>
            </div>
        </div>
    </header>
    <!-- Header ends -->

    <!-- main page content -->
    <div class="main-container container">

        <!-- search -->
        <div class="row mb-3">
            <div class="col-12 overflow-hidden">
                <!-- input -->
                <div class="row">
                    <div class="col position-relative align-self-center">
                        <div class="form-group form-floating mb-3 is-valid">
                            <input type="text" class="form-control" value="" id="searchmain" placeholder="Search">
                            <label class="form-control-label" for="searchmain">Search</label>
                        </div>
                    </div>
                    <div class="col-auto align-self-center">
                        <button class="btn btn-light btn-44 filter-btn">
                            <i class="bi bi-filter size-22"></i>
                        </button>
                    </div>
                </div>

            </div>
        </div>

        <!--categories -->
        <div class="row mb-3">
            <div class="col-12 px-0">
                <!-- swiper categories -->
                <div class="swiper-container connectionwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide text-center">
                            <a href="products.html" class="card text-center mb-2">
                                <div class="card-body p-1">
                                    <figure class="avatar avatar-80 rounded-18 coverimg">
                                        <img src="assets/img/intro4.jpg" alt="">
                                    </figure>
                                </div>
                            </a>
                            <p class="size-10 text-secondary">Breakfast</p>
                        </div>

                        <div class="swiper-slide text-center">
                            <a href="products.html" class="card text-center mb-2">
                                <div class="card-body p-1">
                                    <figure class="avatar avatar-80 rounded-20 coverimg">
                                        <img src="assets/img/intro1.jpg" alt="">
                                    </figure>
                                </div>
                            </a>
                            <p class="size-10 text-secondary">Lunch</p>
                        </div>

                        <div class="swiper-slide text-center">
                            <a href="products.html" class="card text-center mb-2">
                                <div class="card-body p-1">
                                    <figure class="avatar avatar-80 rounded-20 coverimg">
                                        <img src="assets/img/intro2.jpg" alt="">
                                    </figure>
                                </div>
                            </a>
                            <p class="size-10 text-secondary">Dinner</p>
                        </div>

                        <div class="swiper-slide text-center">
                            <a href="products.html" class="card text-center mb-2">
                                <div class="card-body p-1">
                                    <figure class="avatar avatar-80 rounded-20 coverimg">
                                        <img src="assets/img/intro3.jpg" alt="">
                                    </figure>
                                </div>
                            </a>
                            <p class="size-10 text-secondary">Fastfood</p>
                        </div>
                        <div class="swiper-slide text-center">
                            <a href="products.html" class="card text-center mb-2">
                                <div class="card-body p-1">
                                    <figure class="avatar avatar-80 rounded-20 coverimg">
                                        <img src="assets/img/intro4.jpg" alt="">
                                    </figure>
                                </div>
                            </a>
                            <p class="size-10 text-secondary">All</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!--products -->
        <div class="row mb-4">
            <div class="col-12 px-0">
                <!-- swiper categories -->
                <div class="swiper-container connectionwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide text-center">
                            <a href="product.html" class="card text-center bg-theme text-white">
                                <div class="card-body p-1">
                                    <figure class="avatar avatar-90 rounded-15 mb-1 coverimg">
                                        <img src="assets/img/intro6.jpg" alt="">
                                    </figure>
                                    <p class="text-center size-12"><small class="text-muted">Burger</small><br />$ 41.00</p>
                                </div>
                            </a>
                        </div>

                        <div class="swiper-slide text-center">
                            <a href="product.html" class="card text-center bg-theme text-white">
                                <div class="card-body p-1">
                                    <figure class="avatar avatar-90 rounded-15 mb-1 coverimg">
                                        <img src="assets/img/intro5.jpg" alt="">
                                    </figure>
                                    <p class="text-center size-12"><small class="text-muted">Pizza</small><br />$ 49.00</p>
                                </div>
                            </a>
                        </div>

                        <div class="swiper-slide text-center">
                            <a href="product.html" class="card text-center bg-theme text-white">
                                <div class="card-body p-1">
                                    <figure class="avatar avatar-90 rounded-15 mb-1 coverimg">
                                        <img src="assets/img/intro3.jpg" alt="">
                                    </figure>
                                    <p class="text-center size-12"><small class="text-muted">Panner</small><br />$ 10.00</p>
                                </div>
                            </a>
                        </div>

                        <div class="swiper-slide text-center">
                            <a href="product.html" class="card text-center bg-theme text-white">
                                <div class="card-body p-1">
                                    <figure class="avatar avatar-90 rounded-15 mb-1 coverimg">
                                        <img src="assets/img/intro4.jpg" alt="">
                                    </figure>
                                    <p class="text-center size-12"><small class="text-muted">Cream Salaad</small><br />$ 49.00</p>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide text-center">
                            <a href="product.html" class="card text-center bg-theme text-white">
                                <div class="card-body p-1">
                                    <figure class="avatar avatar-90 rounded-15 mb-1 coverimg">
                                        <img src="assets/img/intro2.jpg" alt="">
                                    </figure>
                                    <p class="text-center size-12"><small class="text-muted">Veg. Soup</small><br />$ 45.00</p>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!--high light -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="card theme-bg">
                    <img src="assets/img/highlight.png" alt="" class="burgerposition" />
                    <div class="card-body">
                        <div class="row mt-4">
                            <div class="col-auto align-self-center">
                                <h4><span class="fw-light">15% OFF</span><br />iWatch</h4>
                            </div>
                            <div class="col-auto align-self-center ms-auto text-end">
                                <img src="assets/img/visa.png" alt="" />
                                <p class="size-10"><span class="text-muted">Buy at 1450.00</span><br />Using Credit
                                    Card</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- product medsize box  -->
        <div class="row mb-2">
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card mb-3">
                    <div class="card-body p-1 position-relative">
                        <div class="position-absolute start-0 top-0 m-2 z-index-1">
                            <div class="tag tag-small bg-theme text-white">
                                26% OFF
                            </div>
                        </div>
                        <div class="position-absolute end-0 top-0 p-2 z-index-1 ">
                            <button class="btn btn-sm btn-26 roudned-circle shadow-sm shadow-danger text-white bg-danger">
                                <i class="bi bi-heart size-10 vm"></i>
                            </button>
                        </div>
                        <figure class="avatar h-140 w-100 rounded-15 border coverimg">
                            <img src="assets/img/intro6.jpg" alt="" class="w-100">
                        </figure>
                    </div>
                    <div class="card-body pt-2">
                        <div class="row">
                            <div class="col">
                                <p class="small"><small class="text-muted size-12">King Burger</small><br />$ 265.00
                                </p>
                            </div>
                            <div class="col-auto px-0">
                                <button class="btn btn-sm btn-link text-color-theme">
                                    <i class="bi bi-bag-plus"></i>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card mb-3">
                    <div class="card-body p-1 position-relative">
                        <div class="position-absolute start-0 top-0 m-2 z-index-1">
                            <div class="tag tag-small bg-theme text-white">
                                30% OFF
                            </div>
                        </div>
                        <div class="position-absolute end-0 top-0 p-2 z-index-1 ">
                            <button class="btn btn-sm btn-26 roudned-circle shadow-sm shadow-danger text-danger">
                                <i class="bi bi-heart size-10 vm"></i>
                            </button>
                        </div>
                        <figure class="avatar h-140 w-100 rounded-15 border coverimg">
                            <img src="assets/img/splash.jpg" alt="" class="w-100">
                        </figure>
                    </div>
                    <div class="card-body pt-2">
                        <div class="row">
                            <div class="col">
                                <p class="small"><small class="text-muted size-12">Pasta Creamy</small><br />$
                                    459.00</p>
                            </div>
                            <div class="col-auto px-0">
                                <button class="btn btn-sm btn-link text-color-theme">
                                    <i class="bi bi-bag-plus"></i>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card mb-3">
                    <div class="card-body p-1 position-relative">
                        <div class="position-absolute start-0 top-0 m-2 z-index-1">
                            <div class="tag tag-small bg-danger text-white">
                                SALE
                            </div>
                        </div>
                        <div class="position-absolute end-0 top-0 p-2 z-index-1 ">
                            <button class="btn btn-sm btn-26 roudned-circle shadow-sm shadow-danger text-white bg-danger">
                                <i class="bi bi-heart size-10 vm"></i>
                            </button>
                        </div>
                        <figure class="avatar h-140 w-100 rounded-15 border coverimg">
                            <img src="assets/img/intro2.jpg" alt="" class="w-100">
                        </figure>
                    </div>
                    <div class="card-body pt-2">
                        <div class="row">
                            <div class="col">
                                <p class="small"><small class="text-muted size-12">Veg. Soup</small><br />$ 265.00
                                </p>
                            </div>
                            <div class="col-auto px-0">
                                <button class="btn btn-sm btn-link text-color-theme">
                                    <i class="bi bi-bag-plus"></i>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card mb-3">
                    <div class="card-body p-1 position-relative">
                        <div class="position-absolute start-0 top-0 m-2 z-index-1">
                            <div class="tag tag-small bg-warning text-white">
                                1 Offer
                            </div>
                        </div>
                        <div class="position-absolute end-0 top-0 p-2 z-index-1 ">
                            <button class="btn btn-sm btn-26 roudned-circle shadow-sm shadow-danger text-danger">
                                <i class="bi bi-heart size-10 vm"></i>
                            </button>
                        </div>
                        <figure class="avatar h-140 w-100 rounded-15 border coverimg">
                            <img src="assets/img/intro4.jpg" alt="" class="w-100">
                        </figure>
                    </div>
                    <div class="card-body pt-2">
                        <div class="row">
                            <div class="col">
                                <p class="small"><small class="text-muted size-12">Sandwich Bread</small><br />$
                                    254.00</p>
                            </div>
                            <div class="col-auto px-0">
                                <button class="btn btn-sm btn-link text-color-theme">
                                    <i class="bi bi-bag-plus"></i>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- offer banner-->
        <div class="row mb-4">
            <div class="col-12">
                <div class="card theme-bg overflow-hidden">
                    <div class="position-absolute top-0 end-0">
                        <img src="assets/img/offer.png" alt="" />
                    </div>
                    <div class="card-body z-index-1">
                        <div class="row my-3">
                            <div class="col-10 align-self-center">
                                <h1 class="mb-3"><span class="fw-light">15% OFF</span><br>GiftCard</h1>
                                <p>Thank you for spending with us, You have received Gift Card.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- product medsize box no gap -->
        <div class="row mb-4 g-0 ">
            <div class="col-12">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="row mx-0">
                            <div class="col-6 col-md-4 col-lg-3 border-end p-3">
                                <div class="position-relative">
                                    <div class="position-absolute start-0 top-0 z-index-1">
                                        <div class="tag tag-small bg-theme text-white">
                                            26% OFF
                                        </div>
                                    </div>
                                    <div class="position-absolute end-0 top-0 z-index-1 ">
                                        <button class="btn btn-sm btn-26 roudned-circle shadow-sm shadow-danger text-danger">
                                            <i class="bi bi-heart size-10 vm"></i>
                                        </button>
                                    </div>
                                    <figure class="avatar w-100 rounded-15 h-140 mb-3 coverimg">
                                        <img src="assets/img/juice1.jpg" alt="" class="w-100">
                                    </figure>

                                    <div class="row">
                                        <div class="col">
                                            <p class="small"><small class="text-muted size-12">Melon Juice</small><br />$
                                                25.00</p>
                                        </div>
                                        <div class="col-auto px-0">
                                            <button class="btn btn-sm btn-link text-color-theme">
                                                <i class="bi bi-bag-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3 p-3">
                                <div class="position-relative">
                                    <div class="position-absolute start-0 top-0  z-index-1">
                                        <div class="tag tag-small bg-theme text-white">
                                            30% OFF
                                        </div>
                                    </div>
                                    <div class="position-absolute end-0 top-0  z-index-1 ">
                                        <button class="btn btn-sm btn-26 roudned-circle shadow-sm shadow-danger text-danger">
                                            <i class="bi bi-heart size-10 vm"></i>
                                        </button>
                                    </div>
                                    <figure class="avatar w-100 rounded-15 h-140 mb-3 coverimg">
                                        <img src="assets/img/juice2.jpg" alt="" class="w-100">
                                    </figure>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <p class="small"><small class="text-muted size-12">Mango</small><br />$ 19.00</p>
                                    </div>
                                    <div class="col-auto px-0">
                                        <button class="btn btn-sm btn-link text-color-theme">
                                            <i class="bi bi-bag-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mx-0 border-top">
                            <div class="col-6 col-md-4 col-lg-3 border-end p-3">
                                <div class="position-relative">
                                    <div class="position-absolute start-0 top-0 z-index-1">
                                        <div class="tag tag-small bg-danger text-white">
                                            SALE
                                        </div>
                                    </div>
                                    <div class="position-absolute end-0 top-0 z-index-1 ">
                                        <button class="btn btn-sm btn-26 roudned-circle shadow-sm shadow-danger text-white bg-danger">
                                            <i class="bi bi-heart size-10 vm"></i>
                                        </button>
                                    </div>
                                    <figure class="avatar w-100 rounded-15 h-140 mb-3 coverimg">
                                        <img src="assets/img/juice3.jpg" alt="" class="w-100">
                                    </figure>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <p class="small"><small class="text-muted size-12">Berry Smoothie</small><br />$
                                            15.00</p>
                                    </div>
                                    <div class="col-auto px-0">
                                        <button class="btn btn-sm btn-link text-color-theme">
                                            <i class="bi bi-bag-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3 p-3">
                                <div class="position-relative">
                                    <div class="position-absolute start-0 top-0 z-index-1">
                                        <div class="tag tag-small bg-warning text-white">
                                            1 Offer
                                        </div>
                                    </div>
                                    <div class="position-absolute end-0 top-0 z-index-1 ">
                                        <button class="btn btn-sm btn-26 roudned-circle shadow-sm shadow-danger text-danger">
                                            <i class="bi bi-heart size-10 vm"></i>
                                        </button>
                                    </div>
                                    <figure class="avatar w-100 rounded-15 h-140 mb-3 coverimg">
                                        <img src="assets/img/juice4.jpg" alt="" class="w-100">
                                    </figure>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <p class="small"><small class="text-muted size-12">Immunity Boost</small><br />$
                                            24.00</p>
                                    </div>
                                    <div class="col-auto px-0">
                                        <button class="btn btn-sm btn-link text-color-theme">
                                            <i class="bi bi-bag-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- popular shopping  -->
        <div class="row mb-3 gap-0">
            <div class="col">
                <h6 class="title">Popular</h6>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-body p-0">
                        <ul class="list-group list-group-flush bg-none">
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <div class="card border shadow-none">
                                            <div class="card-body p-1">
                                                <div class="avatar avatar-50 rounded-15 coverimg">
                                                    <img src="assets/img/intro4.jpg" alt="" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center ps-0">
                                        <p class="text-secondary size-10 mb-0">Breakfast</p>
                                        <p>Protien Pack</p>
                                    </div>
                                    <div class="col align-self-center text-end">
                                        <p class="text-secondary text-muted size-10 mb-0">On Sale</p>
                                        <p>25.00</p>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <div class="card border shadow-none">
                                            <div class="card-body p-1">
                                                <div class="avatar avatar-50 rounded-15 coverimg">
                                                    <img src="assets/img/intro5.jpg" alt="" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center ps-0">
                                        <p class="text-secondary size-10 mb-0">Fastfood</p>
                                        <p>Italian Pizza</p>
                                    </div>
                                    <div class="col align-self-center text-end">
                                        <p class="text-secondary text-muted size-10 mb-0">Trending</p>
                                        <p>50.00</p>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <div class="card border shadow-none">
                                            <div class="card-body p-1">
                                                <div class="avatar avatar-50 rounded-15 coverimg">
                                                    <img src="assets/img/juice2.jpg" alt="" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center ps-0">
                                        <p class="text-muted size-10 mb-0">Juice</p>
                                        <p>Mango Shake</p>
                                    </div>
                                    <div class="col align-self-center text-end">
                                        <p class="text-secondary text-muted size-10 mb-0">20% OFF</p>
                                        <p>35.00</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- main page content ends -->


</main>
<!-- Page ends-->

<!-- Footer -->
<footer class="footer">
    <div class="container">
        <ul class="nav nav-pills nav-justified">
            <li class="nav-item">
                <a class="nav-link active" href="index.html">
                        <span>
                            <i class="nav-icon bi bi-house"></i>
                            <span class="nav-text">Home</span>
                        </span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="stats.html">
                        <span>
                            <i class="nav-icon bi bi-binoculars"></i>
                            <span class="nav-text">Statistics</span>
                        </span>
                </a>
            </li>
            <li class="nav-item centerbutton">
                <a href="cart.html" class="nav-link" id="centermenubtn">
                        <span class="theme-linear-gradient">
                            <i class="bi bi-basket size-22"></i>
                        </span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="myorders.html">
                        <span>
                            <i class="nav-icon bi bi-bag"></i>
                            <span class="nav-text">Orders</span>
                        </span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="wallet.html">
                        <span>
                            <i class="nav-icon bi bi-wallet2"></i>
                            <span class="nav-text">Wallet</span>
                        </span>
                </a>
            </li>
        </ul>
    </div>
</footer>
<!-- Footer ends-->

<!-- filter menu -->
<div class="filter">
    <div class="card shadow h-100">
        <div class="card-header">
            <div class="row">
                <div class="col align-self-center">
                    <h6 class="mb-0">Filter Criteria</h6>
                    <p class="text-secondary small">2154 products</p>
                </div>
                <div class="col-auto px-0">
                    <button class="btn btn-link text-danger filter-close">
                        <i class="bi bi-x size-22"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="card-body overflow-auto">
            <div class="mb-4">
                <h6>Select Range</h6>
                <div id="rangeslider" class="mt-4"></div>
            </div>

            <div class="row mb-4">
                <div class="col">
                    <div class="form-floating">
                        <input type="number" class="form-control" min="0" max="500" value="100" step="1" id="input-select">
                        <label for="input-select">Minimum</label>
                    </div>
                </div>
                <div class="col-auto align-self-center"> to </div>
                <div class="col">
                    <div class="form-floating">
                        <input type="number" class="form-control" min="0" max="500" value="200" step="1" id="input-number">
                        <label for="input-number">Maximum</label>
                    </div>
                </div>
            </div>

            <div class="form-floating mb-4">
                <select class="form-control" id="filtertype">
                    <option selected>Veg</option>
                    <option>Non-Veg</option>
                    <option>Both</option>
                </select>
                <label for="filtertype">Select Shopping Type</label>
            </div>

            <div class="form-group floating-form-group active mb-4">
                <h6 class="mb-3">Select Facilities</h6>

                <div class="form-check form-switch mb-2">
                    <input type="checkbox" class="form-check-input" id="one" checked>
                    <label class="form-check-label" for="one">Lunch</label>
                </div>
                <div class="form-check form-switch mb-2">
                    <input type="checkbox" class="form-check-input" id="two" checked>
                    <label class="form-check-label" for="two">Dinner</label>
                </div>
                <div class="form-check form-switch mb-2">
                    <input type="checkbox" class="form-check-input" id="three">
                    <label class="form-check-label" for="three">Breckfast</label>
                </div>
                <div class="form-check form-switch mb-2">
                    <input type="checkbox" class="form-check-input" id="four">
                    <label class="form-check-label" for="four">Drinks</label>
                </div>
                <div class="form-check form-switch mb-2">
                    <input type="checkbox" class="form-check-input" id="five">
                    <label class="form-check-label" for="five">FastFood</label>
                </div>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" placeholder="Keyword">
                <label for="input-select">Keyword</label>
            </div>

            <div class="form-floating mb-3">
                <select class="form-control" id="discount">
                    <option>10% </option>
                    <option>30%</option>
                    <option>50%</option>
                    <option>80%</option>
                </select>
                <label for="discount">Offer Discount</label>
            </div>
        </div>
        <div class="card-footer">
            <button class="btn btn-default w-100 shadow-sm btn-rounded">Search</button>
        </div>
    </div>
</div>
<!-- filter menu ends-->

<!-- PWA app install toast message -->
<div class="position-fixed bottom-0 start-50 translate-middle-x  z-index-99">
    <div class="toast mb-3" role="alert" aria-live="assertive" aria-atomic="true" id="toastinstall" data-bs-animation="true">
        <div class="toast-header">
            <img src="assets/img/favicon32.png" class="rounded me-2" alt="...">
            <strong class="me-auto">Install PWA App</strong>
            <small>now</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            <div class="row">
                <div class="col">
                    Click "Install" to install PWA app & experience indepedent.
                </div>
                <div class="col-auto align-self-center ps-0">
                    <button class="btn-default btn btn-sm btn-rounded" id="addtohome">Install</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Required jquery and libraries -->
<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/vendor/bootstrap-5/js/bootstrap.bundle.min.js"></script>

<!-- Customized jquery file  -->
<script src="assets/js/main.js"></script>
<script src="assets/js/color-scheme.js"></script>

<!-- Chart js script -->
<script src="assets/vendor/chart-js-3.3.1/chart.min.js"></script>

<!-- Progress circle js script -->
<script src="assets/vendor/progressbar-js/progressbar.min.js"></script>

<!-- swiper js script -->
<script src="assets/vendor/swiperjs-6.6.2/swiper-bundle.min.js"></script>

<!-- daterange picker script -->
<script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script src="assets/vendor/daterangepicker/daterangepicker.js"></script>

<!-- nouislider js -->
<script src="assets/vendor/nouislider/nouislider.min.js"></script>

<!-- PWA app service registration and works -->
<script src="assets/js/pwa-services.js"></script>

<!-- page level custom script -->
<script src="assets/js/app.js"></script>

</body>

</html>
