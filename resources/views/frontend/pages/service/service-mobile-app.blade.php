<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="ThemeZaa">
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <!-- favicon icon -->
    <link rel="shortcut icon" href="{{ asset('Frontend/images/icons/fav-low.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('Frontend/images/icons/fav-low.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('Frontend/images/icons/fav-low.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('Frontend/images/icons/fav-low.png') }}">
    @include('frontend.layout.headerlink')
    <link rel="stylesheet" href="{{ asset('Frontend/css/application.css') }}" />
</head>

<body data-mobile-nav-style="classic" class="custom-cursor">
    <!-- start cursor -->
    <div class="cursor-page-inner">
        <div class="circle-cursor circle-cursor-inner"></div>
        <div class="circle-cursor circle-cursor-outer"></div>
    </div>
    <!-- end cursor -->
    <!-- start header -->
    <header>
        <!-- start navigation -->
        <nav class="navbar navbar-expand-lg header-light bg-transparent disable-fixed" data-header-hover="light">
            <div class="container-fluid">
                <div class="col-auto me-auto">
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <script type="text/javascript" style="display:none">
                            //<![CDATA[
                            window.__mirage2 = {
                                petok: "HBpmF2N2wK1S2eLv1yTwXLgPP6OMa1AC3PBy315l5UE-3600-0.0.1.1"
                            };
                            //]]>
                        </script>
                        <script type="text/javascript" src="{{ asset('Frontend/js/mirage2.min.js') }}"></script>
                        <img data-at2x="{{ asset('Frontend') }}/images/logo-text.svg" alt=""
                            class="default-logo" data-cfsrc="{{ asset('Frontend') }}/images/logo-text.svg"
                            style="display:none;visibility:hidden;"><noscript><img
                                src="{{ asset('Frontend') }}/images/logo-text.svg"
                                data-at2x="{{ asset('Frontend') }}/images/logo-text.svg" alt=""
                                class="default-logo"></noscript>
                        <img data-at2x="{{ asset('Frontend') }}/images/logo-text.svg" alt="" class="alt-logo"
                            data-cfsrc="{{ asset('Frontend') }}/images/logo-text.svg"
                            style="display:none;visibility:hidden;"><noscript><img
                                src="{{ asset('Frontend') }}/images/logo-text.svg"
                                data-at2x="{{ asset('Frontend') }}/images/logo-text.svg" alt=""
                                class="alt-logo"></noscript>
                        <img data-at2x="{{ asset('Frontend') }}/images/logo-text.svg" alt=""
                            class="mobile-logo" data-cfsrc="{{ asset('Frontend') }}/images/logo-text.svg"
                            style="display:none;visibility:hidden;"><noscript><img
                                src="{{ asset('Frontend') }}/images/logo-text.svg"
                                data-at2x="{{ asset('Frontend') }}/images/logo-text.svg" alt=""
                                class="mobile-logo"></noscript>
                    </a>
                </div>
                <div class="col-auto menu-order position-static">
                    <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a href="#features" class="nav-link">Features</a></li>
                            <li class="nav-item"><a href="#projects" class="nav-link">Projects</a></li>
                            <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-auto col-auto xs-ps-0">
                    <div class="header-icon">
                        <div class="header-button">
                            <a href="{{ route('contact') }}"
                                class="btn btn-small btn-rounded with-rounded btn-box-shadow btn-dark-gray text-uppercase-inherit">Get
                                a Quote<span class="bg-licorice-blue text-white">➔</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- end navigation -->
    </header>
    <!-- end header -->
    <!-- start section -->
    <section class="p-0 cover-background full-screen ipad-top-space-margin md-h-auto position-relative md-pb-70px"
        style="background-image: url('{{ asset('Frontend/images/demo-application-home-banner.jpg') }}')">
        <div id="particles-style-01" class="h-100 position-absolute left-0px top-0 w-100" data-particle="true"
            data-particle-options='{"particles": {"number": {"value": 12,"density": {"enable": true,"value_area": 2000}},"color": {"value": ["#8f76f5", "#a65cef", "#c74ad2", "#e754a4", "#ff6472"]},"shape": {"type": "circle","stroke":{"width":0,"color":"#000000"}},"opacity": {"value": 0.3,"random": false,"anim": {"enable": false,"speed": 1,"sync": false}},"size": {"value": 8,"random": true,"anim": {"enable": false,"sync": true}},"line_linked":{"enable":false,"distance":0,"color":"#ffffff","opacity":0.4,"width":1},"move": {"enable": true,"speed":1,"direction": "right","random": false,"straight": false}},"interactivity": {"detect_on": "canvas","events": {"onhover": {"enable": false,"mode": "repulse"},"onclick": {"enable": false,"mode": "push"},"resize": true}},"retina_detect": false}'>
        </div>
        <div class="container h-100 position-relative z-index-9">
            <div class="row align-items-center h-100 justify-content-center">
                <div class="col-lg-6 col-md-10 text-center position-relative md-mb-50px"
                    data-anime='{ "el": "childs", "opacity": [0, 1], "translateY": [80, 0], "staggervalue": 200, "duration": 900, "easing": "easeOutCirc" }'>
                    <div class="d-inline-block">
                        <div class="text-end w-90 lg-w-80 ms-auto animation-float">
                            <img alt=""
                                data-cfsrc="{{ asset('Frontend') }}/images/demo-application-home-01.png"
                                style="display:none;visibility:hidden;"><noscript><img
                                    src="{{ asset('Frontend') }}/images/demo-application-home-01.png"
                                    alt=""></noscript>
                        </div>
                    </div>
                    <div
                        class="w-60 position-absolute left-minus-40px lg-left-minus-30px xs-left-15px xs-w-50 bottom-minus-50px mb-30 xs-mb-15">
                        <img class="border-radius-18px box-shadow-extra-large" alt=""
                            data-cfsrc="{{ asset('Frontend') }}/images/demo-application-home-01-02.jpg"
                            style="display:none;visibility:hidden;"><noscript><img
                                src="{{ asset('Frontend') }}/images/demo-application-home-01-02.jpg"
                                class="border-radius-18px box-shadow-extra-large" alt=""></noscript>
                    </div>
                </div>
                <div class="col-xl-5 ps-3 md-ps-15px col-lg-6 col-md-9 position-relative text-center text-lg-start"
                    data-anime='{ "el": "childs", "translateY": [50, 0], "perspective": [1200,1200], "scale": [1.1, 1], "rotateY": [50, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <div class="fs-90 xl-fs-80 lh-80 mb-35px text-dark-gray ls-minus-3px">
                        <span class="d-inline-block">Best mobile</span>
                        <span class="fw-800 d-inline-block">app award.</span>
                    </div>
                    <span class="fs-19 w-90 xs-w-100 d-block lh-32 mb-35px mx-auto mx-lg-0">Your ultimate travel
                        partner. Carries the information you need while travelling.</span>
                    <div class="row pe-20px md-ps-25px sm-px-0 md-border-end-0">
                        <a href="#" class="col-6">
                            <img src="{{ asset('Frontend') }}/images/app-store-white.svg"
                                class="box-shadow-medium-bottom box-shadow-quadruple-large-hover border-radius-4px"
                                alt="">
                        </a>
                        <a href="#" class="col-6">
                            <img src="{{ asset('Frontend') }}/images/play-store-white.svg"
                                class="box-shadow-medium-bottom box-shadow-quadruple-large-hover border-radius-4px"
                                alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- start marquees -->
        <div
            class="marquees-text fw-800 fs-250 md-fs-200 ls-minus-10px text-dark-gray text-nowrap position-absolute bottom-130px opacity-1 text-center">
            travel application travel application</div>
        <!-- end marquees -->
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="pb-0 half-section lg-pt-0">
        <div class="container">
            <div class="row"
                data-anime='{ "translateX": [0, 0], "opacity": [0,1], "duration": 600, "delay": 300, "staggervalue": 250, "easing": "easeOutQuad" }'>
                <div class="col text-center">
                    <span class="fs-19 alt-font mb-35px d-inline-block text-dark-gray fw-600 ls-minus-05px">Join the
                        <span class="fw-800">10000+</span> people trusting travel application.</span>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="pb-0">
        <div class="container">
            <div id="features"
                class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center mb-6 sm-mb-12"
                data-anime='{ "el": "childs", "translateY": [0, 0], "perspective": [1200,1200], "scale": [1.1, 1], "rotateX": [50, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <!-- start features box item -->
                <div class="col icon-with-text-style-04 transition-inner-all md-mb-30px">
                    <div
                        class="feature-box bg-white text-start justify-content-start h-100 border-radius-6px p-16 lg-p-13 box-shadow-quadruple-large box-shadow-quadruple-large-hover">
                        <div class="feature-box-icon mb-25px">
                            <img class="w-60px" alt=""
                                data-cfsrc="{{ asset('Frontend') }}/images/secure.png"
                                style="display:none;visibility:hidden;"><noscript><img
                                    src="{{ asset('Frontend') }}/images/secure.png" class="w-60px"
                                    alt=""></noscript>
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="d-inline-block text-dark-gray fw-700 fs-18 mb-5px">Guaranteed safety</span>
                            <p>We believe that what we create today, it will transform to brand growth in future.</p>
                            <a href="demo-application-features.html"
                                class="btn btn-link btn-hover-animation-switch btn-extra-large text-dark-gray fw-700 text-uppercase-inherit mt-15px">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->
                <!-- start features box item -->
                <div class="col icon-with-text-style-04 transition-inner-all md-mb-30px">
                    <div
                        class="feature-box bg-white text-start justify-content-start h-100 border-radius-6px p-16 lg-p-13 box-shadow-quadruple-large box-shadow-quadruple-large-hover">
                        <div class="feature-box-icon mb-25px">
                            <img class="w-60px" alt=""
                                data-cfsrc="{{ asset('Frontend') }}/images/market-down.png"
                                style="display:none;visibility:hidden;"><noscript><img
                                    src="{{ asset('Frontend') }}/images/market-down.png" class="w-60px"
                                    alt=""></noscript>
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="d-inline-block text-dark-gray fw-700 fs-18 mb-5px">Fast performance</span>
                            <p>We believe that what we create today, it will transform to brand growth in future.</p>
                            <a href="demo-application-features.html"
                                class="btn btn-link btn-hover-animation-switch btn-extra-large text-dark-gray fw-700 text-uppercase-inherit mt-15px">
                            </a>
                        </div>
                        <span
                            class="position-absolute top-25px right-25px bg-dark-gray border-radius-18px text-white fs-11 fw-700 text-uppercase ps-15px pe-15px lh-26">New</span>
                    </div>
                </div>
                <!-- end features box item -->
                <!-- start features box item -->
                <div class="col icon-with-text-style-04 transition-inner-all">
                    <div
                        class="feature-box bg-white text-start justify-content-start h-100 border-radius-6px p-16 lg-p-13 box-shadow-quadruple-large box-shadow-quadruple-large-hover">
                        <div class="feature-box-icon mb-25px">
                            <img class="w-60px" alt=""
                                data-cfsrc="{{ asset('Frontend') }}/images/awesome-design.png"
                                style="display:none;visibility:hidden;"><noscript><img
                                    src="{{ asset('Frontend') }}/images/awesome-design.png" class="w-60px"
                                    alt=""></noscript>
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="d-inline-block text-dark-gray fw-700 fs-18 mb-5px">Awesome design</span>
                            <p>We believe that what we create today, it will transform to brand growth in future.</p>
                            <a href="demo-application-features.html"
                                class="btn btn-link btn-hover-animation-switch btn-extra-large text-dark-gray fw-700 text-uppercase-inherit mt-15px">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->
            </div>
            <div class="row justify-content-center align-items-center"
                data-anime='{ "translateX": [0, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 250, "easing": "easeOutQuad" }'>
                <div class="col-12 text-center align-items-center">
                    <div
                        class="bg-white border border-1 border-color-extra-medium-gray box-shadow-extra-large fw-800 text-dark-gray text-uppercase border-radius-30px ps-20px pe-20px fs-12 me-10px sm-m-10px d-inline-block align-middle">
                        hurray</div>
                    <div class="text-dark-gray d-block d-sm-inline-block align-middle fs-18 fw-600 ls-minus-05px">
                        Contact <a href="{{ route('contact') }}"
                            class="fw-800 text-decoration-line-bottom text-dark-gray">us</a> and get a
                        special discount.</div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="position-relative half-section">
        <div class="container-fluid">
            <div class="row">
                <div class="p-0 overlap-section position-absolute right-0px text-end w-auto xs-w-200px z-index-minus-1"
                    data-bottom-top="transform: translateY(-150px)" data-top-bottom="transform: translateY(150px)">
                    <img alt=""
                        data-cfsrc="{{ asset('Frontend') }}/images/demo-application-home-bg-right.png"
                        style="display:none;visibility:hidden;"><noscript><img
                            src="{{ asset('Frontend') }}/images/demo-application-home-bg-right.png"
                            alt=""></noscript>
                </div>
            </div>
        </div>
        <div class="position-absolute left-0px bottom-minus-100px w-auto xs-w-180px z-index-minus-1"
            data-bottom-top="transform: translateY(-100px)" data-top-bottom="transform: translateY(100px)">
            <img alt="" data-cfsrc="{{ asset('Frontend') }}/images/demo-application-home-bg-left.png"
                style="display:none;visibility:hidden;"><noscript><img
                    src="{{ asset('Frontend') }}/images/demo-application-home-bg-left.png" alt=""></noscript>
        </div>
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-7 position-relative md-mb-20px"
                    data-anime='{ "effect": "slide", "color": "#ffffff", "direction":"lr", "easing": "easeOutQuad", "delay":50}'>
                    <figure>
                        <div class="atropos" data-atropos>
                            <div class="atropos-scale">
                                <div class="atropos-rotate">
                                    <div class="atropos-inner">
                                        <img data-atropos-offset="5" alt=""
                                            data-cfsrc="{{ asset('Frontend') }}/images/demo-application-home-02.png"
                                            style="display:none;visibility:hidden;"><noscript><img
                                                data-atropos-offset="5"
                                                src="{{ asset('Frontend') }}/images/demo-application-home-02.png"
                                                alt=""></noscript>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <figcaption
                            class="position-absolute bottom-90px xs-bottom-50px right-0px transform-3d xs-w-80 z-index-9">
                            <img class="animation-float" alt=""
                                data-cfsrc="{{ asset('Frontend') }}/images/demo-application-home-02-2.png"
                                style="display:none;visibility:hidden;"><noscript><img
                                    src="{{ asset('Frontend') }}/images/demo-application-home-02-2.png"
                                    class="animation-float" alt=""></noscript>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-lg-5 col-md-8 col-sm-10 text-center text-lg-start">
                    <div class="bg-base-color d-inline-block mb-20px fw-600 text-white text-uppercase border-radius-30px ps-20px pe-20px fs-12"
                        data-anime='{ "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        How it works</div>
                    <h3 class="fw-700 mb-45px text-dark-gray ls-minus-1px"
                        data-anime='{ "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        Find amazing travel places and hotels.</h3>
                    <div class="row row-cols-1"
                        data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <!-- start process step item -->
                        <div class="col-12 process-step-style-05 position-relative hover-box">
                            <div class="process-step-item d-flex">
                                <div class="process-step-icon-wrap position-relative">
                                    <div
                                        class="process-step-icon d-flex justify-content-center align-items-center mx-auto rounded-circle h-55px w-55px bg-linen fs-15 fw-700 position-relative">
                                        <span class="number position-relative z-index-1 text-dark-gray">01</span>
                                        <div class="box-overlay bg-base-color rounded-circle"></div>
                                    </div>
                                    <span class="progress-step-separator bg-dark-gray opacity-1"></span>
                                </div>
                                <div class="process-content ps-35px last-paragraph-no-margin mb-30px">
                                    <span class="d-block fw-700 text-dark-gray mb-5px fs-18">Explore your
                                        interests</span>
                                    <p class="w-70 lg-w-90 sm-w-100">We believe that what we create today it will
                                        transform to brand.</p>
                                </div>
                            </div>
                        </div>
                        <!-- end process step item -->
                        <!-- start process step item -->
                        <div class="col-12 process-step-style-05 position-relative hover-box">
                            <div class="process-step-item d-flex">
                                <div class="process-step-icon-wrap position-relative">
                                    <div
                                        class="process-step-icon d-flex justify-content-center align-items-center mx-auto rounded-circle h-55px w-55px bg-linen fs-15 fw-700 fw-600 position-relative">
                                        <span class="number position-relative z-index-1 text-dark-gray">02</span>
                                        <div class="box-overlay bg-base-color rounded-circle"></div>
                                    </div>
                                    <span class="progress-step-separator bg-dark-gray opacity-1"></span>
                                </div>
                                <div class="process-content ps-35px last-paragraph-no-margin mb-30px">
                                    <span class="d-block fw-700 text-dark-gray mb-5px fs-18">Select budget range</span>
                                    <p class="w-70 lg-w-90 sm-w-100">We believe that what we create today it will
                                        transform to brand.</p>
                                </div>
                            </div>
                        </div>
                        <!-- end process step item -->
                        <!-- start process step item -->
                        <div class="col-12 process-step-style-05 position-relative hover-box">
                            <div class="process-step-item d-flex">
                                <div class="process-step-icon-wrap position-relative">
                                    <div
                                        class="process-step-icon d-flex justify-content-center align-items-center mx-auto rounded-circle h-55px w-55px bg-linen fs-15 fw-700 fw-600 position-relative">
                                        <span class="number position-relative z-index-1 text-dark-gray">03</span>
                                        <div class="box-overlay bg-base-color rounded-circle"></div>
                                    </div>
                                </div>
                                <div class="process-content ps-35px last-paragraph-no-margin">
                                    <span class="d-block fw-700 text-dark-gray mb-5px fs-18">Create the perfect
                                        trip</span>
                                    <p class="w-70 lg-w-90 sm-w-100">We believe that what we create today it will
                                        transform to brand.</p>
                                </div>
                            </div>
                        </div>
                        <!-- end process step item -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="p-0">
        <div class="container">
            <div class="row m-0 align-items-center p-55px lg-p-35px md-p-50px xs-pt-40px xs-pb-40px xs-ps-15px xs-pe-15px justify-content-center bg-floral-white border-radius-6px"
                data-bottom-top="transform: translate3d(30px, 0px, 0px);"
                data-top-bottom="transform: translate3d(-30px, 0px, 0px);">
                <!-- start content box item -->
                <div class="col-lg-6 text-dark-gray md-mb-50px sm-mb-40px">
                    <div class="row align-items-center justify-content-center justify-content-lg-start">
                        <div class="col-5 col-sm-4 md-mb-20px"><img class="rounded-circle w-100" alt=""
                                data-cfsrc="{{ asset('Frontend') }}/images/demo-application-home-avtar-01.jpg"
                                style="display:none;visibility:hidden;"><noscript><img
                                    src="{{ asset('Frontend') }}/images/demo-application-home-avtar-01.jpg"
                                    class="rounded-circle w-100" alt=""></noscript></div>
                        <div class="col-lg-8 text-center text-lg-start">
                            <div class="fs-19 lh-30 mb-3 w-90 md-w-75 sm-w-100 mx-auto mx-lg-0">Travel makes one
                                modest. You see what a tiny place your favorite occupy in the world.</div>
                            <div>
                                <div class="text-dark-gray fw-700 fs-19 d-inline-block me-10px">Jacob kalling</div>
                                <div class="review-star-icon position-relative d-inline-block top-0px fs-18">
                                    ★
                                    ★
                                    ★
                                    ★
                                    ★
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end content box item -->
                <!-- start content box item -->
                <div
                    class="col-6 col-lg-3 col-md-5 text-dark-gray border-start border-color-transparent-dark-very-light md-border-start-0 text-center text-lg-start ps-6 pe-6">
                    <h3 class="mb-0 fw-800 ls-minus-1px lh-38">4.96</h3>
                    <span class="fs-17 fw-600">User reviews</span>
                    <div class="review-star-icon fs-18">
                        ★
                        ★
                        ★
                        ★
                        ★
                        <span class="fs-12 lh-16 d-block text-medium-gray">Rating on app store</span>
                    </div>
                </div>
                <!-- end content box item -->
                <!-- start content box item -->
                <div
                    class="col-6 col-lg-3 col-md-5 text-dark-gray border-start border-color-transparent-dark-very-light text-center text-lg-start ps-6 pe-6">
                    <h3 class="mb-0 fw-800 ls-minus-1px lh-38">12m+</h3>
                    <span class="fs-17 fw-600">Installations</span>
                    <div class="review-star-icon fs-18">
                        ★
                        ★
                        ★
                        ★
                        ★
                        <span class="fs-12 lh-16 d-block text-medium-gray">Rating on app store</span>
                    </div>
                </div>
                <!-- end content box item -->
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section id="projects" class="stack-box py-0">
        <div class="stack-box-contain">
            <!-- start stack item -->
            <div class="stack-item stack-item-01 bg-white lg-pt-8 lg-pb-8 xs-pt-50px xs-pb-50px">
                <div class="stack-item-wrapper">
                    <div class="container">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-xl-4 col-lg-5 col-md-6 sm-mb-40px text-center text-md-start"
                                data-anime='{ "el": "childs", "opacity": [0, 1], "rotateY": [-90, 0], "rotateZ": [-10, 0], "translateY": [80, 0], "translateZ": [50, 0], "staggervalue": 200, "duration": 900, "easing": "easeOutCirc" }'>
                                <div
                                    class="d-inline-block mb-20px bg-base-color fw-600 text-white text-uppercase border-radius-30px ps-20px pe-20px fs-12">
                                    Data dashboard</div>
                                <h3 class="fw-700 text-dark-gray ls-minus-1px">Easy to manage your all app data.</h3>
                                <p class="lg-w-85 md-w-95 sm-w-100">Lorem ipsum is simply printing typesetting industry
                                    industry's standard dummy text printer scrambled ipsum is simply dummy text of the
                                    printing.</p>
                                <img class="mt-10px" alt=""
                                    data-cfsrc="{{ asset('Frontend') }}/images/demo-application-home-manage-data-graphic.png"
                                    style="display:none;visibility:hidden;"><noscript><img
                                        src="{{ asset('Frontend') }}/images/demo-application-home-manage-data-graphic.png"
                                        class="mt-10px" alt=""></noscript>
                            </div>
                            <div class="col-xl-8 col-lg-7 col-md-6 position-relative atropos" data-atropos>
                                <div class="atropos-scale">
                                    <div class="atropos-rotate">
                                        <div class="atropos-inner text-center">
                                            <div data-atropos-offset="-5"
                                                class="position-absolute left-0px right-0px">
                                                <img alt=""
                                                    data-cfsrc="{{ asset('Frontend') }}/images/demo-application-home-manage-data-bg.png"
                                                    style="display:none;visibility:hidden;"><noscript><img
                                                        src="images/demo-application-home-manage-data-bg.png"
                                                        alt=""></noscript>
                                            </div>
                                            <img data-atropos-offset="5" class="position-relative z-index-9"
                                                alt=""
                                                data-cfsrc="{{ asset('Frontend') }}/images/demo-application-home-manage-data.png"
                                                style="display:none;visibility:hidden;"><noscript><img
                                                    data-atropos-offset="5" class="position-relative z-index-9"
                                                    src="{{ asset('Frontend') }}/images/demo-application-home-manage-data.png"
                                                    alt=""></noscript>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end stack item -->
            <!-- start stack item -->
            <div class="stack-item stack-item-02 bg-linen lg-pt-8 lg-pb-8 xs-pt-50px xs-pb-50px">
                <div class="stack-item-wrapper">
                    <div class="container">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-xl-4 col-lg-5 col-md-6 sm-mb-40px text-center text-md-start">
                                <div
                                    class="d-inline-block mb-20px bg-base-color fw-600 text-white text-uppercase border-radius-30px ps-20px pe-20px fs-12">
                                    Data dashboard</div>
                                <h3 class="fw-700 text-dark-gray ls-minus-1px">Easy book trips easy payment.</h3>
                                <p class="lg-w-85 md-w-95 sm-w-100">Lorem ipsum is simply printing typesetting industry
                                    industry's standard dummy text printer scrambled ipsum is simply dummy text of the
                                    printing.</p>
                                <img class="mt-10px" alt=""
                                    data-cfsrc="{{ asset('Frontend') }}/images/demo-application-home-easy-payment-graphic.png"
                                    style="display:none;visibility:hidden;"><noscript><img
                                        src="{{ asset('Frontend') }}/images/demo-application-home-easy-payment-graphic.png"
                                        class="mt-10px" alt=""></noscript>
                            </div>
                            <div class="col-xl-8 col-lg-7 col-md-6 position-relative atropos transform-3d"
                                data-atropos>
                                <div class="atropos-scale">
                                    <div class="atropos-rotate">
                                        <div class="atropos-inner text-center">
                                            <div data-atropos-offset="-5"
                                                class="position-absolute left-0px right-0px">
                                                <img alt=""
                                                    data-cfsrc="{{ asset('Frontend') }}/images/demo-application-home-easy-payment-bg.png"
                                                    style="display:none;visibility:hidden;"><noscript><img
                                                        src="{{ asset('Frontend') }}/images/demo-application-home-easy-payment-bg.png"
                                                        alt=""></noscript>
                                            </div>
                                            <img data-atropos-offset="5" class="position-relative z-index-9"
                                                alt=""
                                                data-cfsrc="{{ asset('Frontend') }}/images/demo-application-home-easy-payment.png"
                                                style="display:none;visibility:hidden;"><noscript><img
                                                    data-atropos-offset="5" class="position-relative z-index-9"
                                                    src="{{ asset('Frontend') }}/images/demo-application-home-easy-payment.png"
                                                    alt=""></noscript>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end stack item -->
            <!-- start stack item -->
            <div class="stack-item stack-item-03 bg-white lg-pt-8 xs-pt-50px xs-pb-20px">
                <div class="stack-item-wrapper">
                    <div class="container">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-xl-4 col-lg-5 col-md-6 sm-mb-40px text-center text-md-start">
                                <div
                                    class="d-inline-block mb-20px bg-base-color fw-600 text-white text-uppercase border-radius-30px ps-20px pe-20px fs-12">
                                    Data dashboard</div>
                                <h3 class="fw-700 text-dark-gray ls-minus-1px">Easy to manage your all app data.</h3>
                                <p class="lg-w-85 md-w-95 sm-w-100">Lorem ipsum is simply printing typesetting industry
                                    industry's standard dummy text printer scrambled ipsum is simply dummy text of the
                                    printing.</p>
                                <img class="mt-10px" alt=""
                                    data-cfsrc="{{ asset('Frontend') }}/images/demo-application-home-free-support-graphic.png"
                                    style="display:none;visibility:hidden;"><noscript><img
                                        src="{{ asset('Frontend') }}/images/demo-application-home-free-support-graphic.png"
                                        class="mt-10px" alt=""></noscript>
                            </div>
                            <div class="col-xl-8 col-lg-7 col-md-6 position-relative atropos transform-3d"
                                data-atropos>
                                <div class="atropos-scale">
                                    <div class="atropos-rotate">
                                        <div class="atropos-inner text-center">
                                            <div data-atropos-offset="-5"
                                                class="position-absolute left-0px right-0px">
                                                <img alt=""
                                                    data-cfsrc="{{ asset('Frontend') }}/images/demo-application-home-free-support-bg.png"
                                                    style="display:none;visibility:hidden;"><noscript><img
                                                        src="{{ asset('Frontend') }}/images/demo-application-home-free-support-bg.png"
                                                        alt=""></noscript>
                                            </div>
                                            <img data-atropos-offset="5" class="position-relative z-index-9"
                                                alt=""
                                                data-cfsrc="{{ asset('Frontend') }}/images/demo-application-home-free-support.png"
                                                style="display:none;visibility:hidden;"><noscript><img
                                                    data-atropos-offset="5" class="position-relative z-index-9"
                                                    src="{{ asset('Frontend') }}/images/demo-application-home-free-support.png"
                                                    alt=""></noscript>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end stack item -->
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    {{-- <section class="position-relative z-index-2">
        <div class="container">
            <div class="row justify-content-center mb-3">
                <div class="col-md-7 text-center"
                    data-anime='{ "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <div
                        class="bg-base-color d-inline-block mb-15px fw-600 text-white text-uppercase border-radius-30px ps-20px pe-20px fs-12">
                        Affordable pricing</div>
                    <h3 class="fw-700 text-dark-gray w-65 lg-w-85 mx-auto ls-minus-1px">Choose the plan that's right
                        for you</h3>
                </div>
            </div>
            <div class="row align-items-center justify-content-center pricing-table-style-07">
                <div class="col-lg-6 col-md-12 md-mb-30px">
                    <!-- start tab navigation -->
                    <ul class="nav nav-tabs justify-content-center border-0 text-left"
                        data-anime='{ "el": "childs", "translateY": [-30, 0], "perspective": [1200,1200], "scale": [1.1, 1], "rotateX": [50, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <li class="nav-item mb-30px p-0">
                            <a data-bs-toggle="tab" href="#tab_four1"
                                class="nav-link active box-shadow-extra-large ps-45px pe-45px pt-35px pb-35px lg-p-5 xs-p-8 border-radius-8px">
                                <div class="flex-column flex-sm-row d-flex align-items-center">
                                    <div
                                        class="col-auto align-items-center d-flex me-auto w-150px lg-w-140px xs-w-auto mx-auto xs-mb-20px">
                                        <div
                                            class="icon w-30px h-30px d-flex flex-shrink-0 align-items-center justify-content-center fs-11 border border-2 border-radius-100 me-10px">
                                            <i class="fa-solid fa-check"></i>
                                        </div>
                                        <div class="fs-20 lg-fs-18 text-dark-gray fw-700 me-15px xs-me-0">Primary</div>
                                    </div>
                                    <div
                                        class="offer d-inline-block border border-color-light-medium-gray fw-600 text-dark-gray text-uppercase border-radius-30px ps-20px pe-20px fs-12 lh-26 xs-mb-20px">
                                        Save 20%</div>
                                    <div class="col ms-auto text-end mx-auto">
                                        <h5 class="fw-700 text-dark-gray d-inline-block align-middle mb-0">$10</h5>
                                        <span class="d-inline-block align-middle ms-10px opacity-7">Per month</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item mb-30px p-0">
                            <a data-bs-toggle="tab" href="#tab_four2"
                                class="nav-link box-shadow-extra-large ps-45px pe-45px pt-35px pb-35px lg-p-5 xs-p-8 border-radius-8px">
                                <div class="flex-column flex-sm-row d-flex align-items-center">
                                    <div
                                        class="col-auto align-items-center d-flex me-auto w-150px lg-w-140px xs-w-auto mx-auto xs-mb-20px">
                                        <div
                                            class="icon w-30px h-30px d-flex flex-shrink-0 align-items-center justify-content-center fs-11 border border-2 border-radius-100 me-10px">
                                            <i class="fa-solid fa-check"></i>
                                        </div>
                                        <div class="fs-20 lg-fs-18 text-dark-gray fw-700 me-15px xs-me-0">Popular</div>
                                    </div>
                                    <div
                                        class="offer d-inline-block border border-color-light-medium-gray fw-600 text-dark-gray text-uppercase border-radius-30px ps-20px pe-20px fs-12 lh-26 xs-mb-20px">
                                        Save 30%</div>
                                    <div class="col ms-auto text-end mx-auto">
                                        <h5 class="fw-700 text-dark-gray d-inline-block align-middle mb-0">$19</h5>
                                        <span class="d-inline-block align-middle ms-10px opacity-7">Per month</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item p-0">
                            <a data-bs-toggle="tab" href="#tab_four3"
                                class="nav-link box-shadow-extra-large ps-45px pe-45px pt-35px pb-35px lg-p-5 xs-p-8 border-radius-8px">
                                <div class="flex-column flex-sm-row d-flex align-items-center">
                                    <div
                                        class="col-auto align-items-center d-flex me-auto w-150px lg-w-140px xs-w-auto mx-auto xs-mb-20px">
                                        <div
                                            class="icon w-30px h-30px d-flex flex-shrink-0 align-items-center justify-content-center fs-11 border border-2 border-radius-100 me-10px">
                                            <i class="fa-solid fa-check"></i>
                                        </div>
                                        <div class="fs-20 lg-fs-18 text-dark-gray fw-700 me-15px xs-me-0">Premium</div>
                                    </div>
                                    <div
                                        class="offer d-inline-block border border-color-light-medium-gray fw-600 text-dark-gray text-uppercase border-radius-30px ps-20px pe-20px fs-12 lh-26 xs-mb-20px">
                                        Save 35%</div>
                                    <div class="col ms-auto text-end mx-auto">
                                        <h5 class="fw-700 text-dark-gray d-inline-block align-middle mb-0">$28</h5>
                                        <span class="d-inline-block align-middle ms-10px opacity-7">Per month</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- end tab navigation -->
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="tab-content"
                        data-anime='{ "el": "childs", "translateY": [-30, 0], "perspective": [1200,1200], "scale": [1.05, 1], "rotateX": [5, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <!-- start tab content -->
                        <div class="tab-pane position-relative fade in active show box-shadow-quadruple-large border-radius-8px pt-40px"
                            id="tab_four1">
                            <span
                                class="text-dark-gray fw-700 mb-15px fs-24 ls-minus-05px d-inline-block ps-45px pe-45px sm-ps-25px sm-pe-25px">The
                                most primary plan</span>
                            <div class="pricing-body overflow-hidden">
                                <ul class="p-0 list-style-02 text-start">
                                    <li
                                        class="border-bottom border-color-extra-medium-gray pt-15px pb-15px ps-45px pe-45px sm-ps-25px sm-pe-25px fw-500 text-dark-gray">
                                        <i class="feather icon-feather-check fs-20 text-green me-10px"></i>Find places
                                        near hotels and camp</li>
                                    <li
                                        class="border-bottom border-color-extra-medium-gray pt-15px pb-15px ps-45px pe-45px sm-ps-25px sm-pe-25px fw-500 opacity-8">
                                        <i class="feather icon-feather-x fs-20 text-red me-10px"></i>Track record and
                                        reward programs</li>
                                    <li class="pt-15px pb-15px ps-45px pe-45px sm-ps-25px sm-pe-25px fw-500 opacity-8">
                                        <i class="feather icon-feather-x fs-20 text-red me-10px"></i>Shows
                                        transportation option</li>
                                </ul>
                                <div
                                    class="d-block bg-gradient-very-light-gray pt-25px pb-25px ps-45px pe-45px sm-ps-25px sm-pe-25px border-radius-8px">
                                    <a href="#"
                                        class="btn btn-medium btn-rounded btn-dark-gray btn-box-shadow fw-700 sm-mb-10px">Join
                                        this plan</a>
                                    <span class="fs-15 ms-15px d-inline-block">Offer save 20%*</span>
                                </div>
                            </div>
                            <span
                                class="position-absolute top-25px right-25px bg-white border border-1 border-color-extra-medium-gray box-shadow-large fw-800 text-dark-gray text-uppercase border-radius-3px ps-15px pe-15px fs-12 xs-right-10px xs-top-10px">Primary</span>
                        </div>
                        <!-- end tab content -->
                        <!-- start tab content -->
                        <div class="tab-pane position-relative fade in box-shadow-quadruple-large border-radius-8px pt-40px"
                            id="tab_four2">
                            <span
                                class="text-dark-gray fw-700 mb-15px fs-24 ls-minus-05px d-inline-block ps-45px pe-45px sm-ps-25px sm-pe-25px">The
                                most popular plan</span>
                            <div class="pricing-body overflow-hidden">
                                <ul class="p-0 list-style-02 text-start">
                                    <li
                                        class="border-bottom border-color-extra-medium-gray pt-15px pb-15px ps-45px pe-45px sm-ps-25px sm-pe-25px fw-500 text-dark-gray">
                                        <i class="feather icon-feather-check fs-20 text-green me-10px"></i>Find places
                                        near hotels and camp</li>
                                    <li
                                        class="border-bottom border-color-extra-medium-gray pt-15px pb-15px ps-45px pe-45px sm-ps-25px sm-pe-25px fw-500 text-dark-gray">
                                        <i class="feather icon-feather-check fs-20 text-green me-10px"></i>Track record
                                        and reward programs</li>
                                    <li class="pt-15px pb-15px ps-45px pe-45px sm-ps-25px sm-pe-25px fw-500 opacity-8">
                                        <i class="feather icon-feather-x fs-20 text-red me-10px"></i>Shows
                                        transportation option</li>
                                </ul>
                                <div
                                    class="d-block bg-gradient-very-light-gray pt-25px pb-25px ps-45px pe-45px sm-ps-25px sm-pe-25px border-radius-8px">
                                    <a href="#"
                                        class="btn btn-medium btn-rounded btn-dark-gray btn-box-shadow fw-700 sm-mb-10px">Join
                                        this plan</a>
                                    <span class="fs-15 ms-15px d-inline-block">Offer save 30%*</span>
                                </div>
                            </div>
                            <span
                                class="position-absolute top-25px right-25px bg-white border border-1 border-color-extra-medium-gray box-shadow-large fw-800 text-dark-gray text-uppercase border-radius-3px ps-15px pe-15px fs-12 xs-right-10px xs-top-10px">Popular</span>
                        </div>
                        <!-- end tab content -->
                        <!-- start tab content -->
                        <div class="tab-pane position-relative fade in box-shadow-quadruple-large border-radius-8px pt-40px"
                            id="tab_four3">
                            <span
                                class="text-dark-gray fw-700 mb-15px fs-24 ls-minus-05px d-inline-block ps-45px pe-45px sm-ps-25px sm-pe-25px">The
                                most premium plan</span>
                            <div class="pricing-body overflow-hidden">
                                <ul class="p-0 list-style-02 text-start">
                                    <li
                                        class="border-bottom border-color-extra-medium-gray pt-15px pb-15px ps-45px pe-45px sm-ps-25px sm-pe-25px fw-500 text-dark-gray">
                                        <i class="feather icon-feather-check fs-20 text-green me-10px"></i>Find places
                                        near hotels and camp</li>
                                    <li
                                        class="border-bottom border-color-extra-medium-gray pt-15px pb-15px ps-45px pe-45px sm-ps-25px sm-pe-25px fw-500 text-dark-gray">
                                        <i class="feather icon-feather-check fs-20 text-green me-10px"></i>Track record
                                        and reward programs</li>
                                    <li
                                        class="pt-15px pb-15px ps-45px pe-45px sm-ps-25px sm-pe-25px fw-500 text-dark-gray">
                                        <i class="feather icon-feather-check fs-20 text-green me-10px"></i>Shows
                                        transportation option</li>
                                </ul>
                                <div
                                    class="d-block bg-gradient-very-light-gray pt-25px pb-25px ps-45px pe-45px sm-ps-25px sm-pe-25px border-radius-8px">
                                    <a href="#"
                                        class="btn btn-medium btn-rounded btn-dark-gray btn-box-shadow fw-700 sm-mb-10px">Join
                                        this plan</a>
                                    <span class="fs-15 ms-15px d-inline-block">Offer save 35%*</span>
                                </div>
                            </div>
                            <span
                                class="position-absolute top-25px right-25px bg-white border border-1 border-color-extra-medium-gray box-shadow-large fw-800 text-dark-gray text-uppercase border-radius-3px ps-15px pe-15px fs-12 xs-right-10px xs-top-10px">Premium</span>
                        </div>
                        <!-- end tab content -->
                    </div>
                </div>
            </div>
            <div class="row justify-content-center align-items-center pt-5"
                data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="col-12 text-center align-items-center">
                    <div
                        class="bg-white border border-1 border-color-extra-medium-gray box-shadow-extra-large fw-800 text-dark-gray text-uppercase border-radius-30px ps-20px pe-20px fs-12 me-10px xs-m-10px d-inline-block align-middle">
                        Contact</div>
                    <div class="text-dark-gray d-block d-sm-inline-block align-middle fs-18 fw-600 ls-minus-05px">
                        Looking for a corporate solution? <a href="#"
                            class="fw-800 text-dark-gray text-decoration-line-bottom">Contact crafto</a></div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- end section -->
    <!-- start section -->
    <section class="pt-0">
        <div class="container">
            <div
                class="row row-cols-1 row-cols-md-4 row-cols-sm-2 position-relative z-index-2 justify-content-center counter-style-02">
                <!-- start counter item -->
                <div class="col text-center sm-mb-30px">
                    <h2 class="vertical-counter d-inline-flex alt-font text-dark-gray fw-800 mb-0 ls-minus-4px md-ls-minus-2px"
                        data-to="6350"></h2>
                    <span class="d-block lh-24">Active users</span>
                </div>
                <!-- end counter item -->
                <!-- start counter item -->
                <div class="col text-center sm-mb-30px">
                    <h2 class="vertical-counter d-inline-flex alt-font text-dark-gray fw-800 mb-0 ls-minus-4px md-ls-minus-2px"
                        data-to="5298"></h2>
                    <span class="d-block lh-24">New installation</span>
                </div>
                <!-- end counter item -->
                <!-- start counter item -->
                <div class="col text-center xs-mb-30px">
                    <h2 class="vertical-counter d-inline-flex alt-font text-dark-gray fw-800 mb-0 ls-minus-4px md-ls-minus-2px"
                        data-to="5864"></h2>
                    <span class="d-block lh-24">User reviews</span>
                </div>
                <!-- end counter item -->
                <!-- start counter item -->
                <div class="col text-center">
                    <h2 class="vertical-counter d-inline-flex alt-font text-dark-gray fw-800 mb-0 ls-minus-4px md-ls-minus-2px"
                        data-to="7450"></h2>
                    <span class="d-block lh-24">Telephonic talk</span>
                </div>
                <!-- end counter item -->
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="position-relative p-0 z-index-1">
        <div class="container-fluid">
            <div class="row">
                <div class="p-0 overlap-section position-absolute right-0px text-end w-auto"
                    data-bottom-top="transform: translateY(-150px)" data-top-bottom="transform: translateY(150px)">
                    <img class="w-80" alt=""
                        data-cfsrc="{{ asset('Frontend') }}/images/demo-application-home-bg-right.png"
                        style="display:none;visibility:hidden;"><noscript><img
                            src="{{ asset('Frontend') }}/images/demo-application-home-bg-right.png" class="w-80"
                            alt=""></noscript>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="overflow-hidden position-relative bg-gradient-very-light-gray py-0 lg-pt-8 lg-pb-8">
        <div id="particles-style-02" class="h-100 position-absolute left-0px top-0 w-100" data-particle="true"
            data-particle-options='{"particles": {"number": {"value": 18,"density": {"enable": true,"value_area": 2000}},"color": {"value": ["#8f76f5", "#a65cef", "#c74ad2", "#e754a4", "#ff6472"]},"shape": {"type": "circle","stroke":{"width":0,"color":"#000000"}},"opacity": {"value": 0.3,"random": false,"anim": {"enable": false,"speed": 1,"sync": false}},"size": {"value": 8,"random": true,"anim": {"enable": false,"sync": true}},"line_linked":{"enable":false,"distance":0,"color":"#ffffff","opacity":0.4,"width":1},"move": {"enable": true,"speed":1,"direction": "right","random": false,"straight": false}},"interactivity": {"detect_on": "canvas","events": {"onhover": {"enable": false,"mode": "repulse"},"onclick": {"enable": false,"mode": "push"},"resize": true}},"retina_detect": false}'>
        </div>
        <div class="container">
            <div
                class="row align-items-center ps-50px pe-50px lg-px-0 position-relative z-index-1 justify-content-md-center">
                <div class="col-lg-6 md-mb-50px">
                    <div class="row">
                        <div class="col-sm-6 xs-mb-30px">
                            <img class="w-100 box-shadow-quadruple-large border-radius-10px"
                                data-bottom-top="transform: translateY(-250px)"
                                data-top-bottom="transform: translateY(200px)" alt=""
                                data-cfsrc="{{ asset('Frontend') }}/images/demo-application-home-06.jpg"
                                style="display:none;visibility:hidden;"><noscript><img
                                    src="{{ asset('Frontend') }}/images/demo-application-home-06.jpg"
                                    class="w-100 box-shadow-quadruple-large border-radius-10px"
                                    data-bottom-top="transform: translateY(-250px)"
                                    data-top-bottom="transform: translateY(200px)" alt=""></noscript>
                        </div>
                        <div class="col-sm-6">
                            <img class="w-100 box-shadow-quadruple-large border-radius-10px"
                                data-bottom-top="transform: translateY(200px)"
                                data-top-bottom="transform: translateY(-300px)" alt=""
                                data-cfsrc="{{ asset('Frontend') }}/images/demo-application-home-07.jpg"
                                style="display:none;visibility:hidden;"><noscript><img
                                    src="{{ asset('Frontend') }}/images/demo-application-home-07.jpg"
                                    class="w-100 box-shadow-quadruple-large border-radius-10px"
                                    data-bottom-top="transform: translateY(200px)"
                                    data-top-bottom="transform: translateY(-300px)" alt=""></noscript>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1 col-md-8 text-center text-lg-start">
                    <h3 class="fw-800 text-dark-gray ls-minus-1px">Download the travellers app now!</h3>
                    <span class="fs-18 w-80 xl-w-100 d-block mb-35px">Your ultimate travel partner. Carries the
                        information you need while travelling.</span>
                    <div class="row pe-20px xl-pe-0 justify-content-center justify-content-lg-start">
                        <a href="#" class="col-6 col-lg-6 col-sm-5">
                            <img src="{{ asset('Frontend') }}/images/app-store-white.svg"
                                class="box-shadow-medium-bottom border-radius-6px" alt="">
                        </a>
                        <a href="#" class="col-6 col-lg-6 col-sm-5">
                            <img src="{{ asset('Frontend') }}/images/play-store-white.svg"
                                class="box-shadow-medium-bottom border-radius-6px" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start footer -->
    <footer id="contact" class="footer-dark p-0 position-relative bg-black-pearl-blue-dark">
        <div class="pt-40px pb-40px bg-black-pearl-blue">
            <div class="container position-relative">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-8 col-md-10 icon-with-text-style-08 md-mb-20px">
                        <div class="feature-box feature-box-left-icon-middle overflow-hidden">
                            <div
                                class="feature-box-icon feature-box-icon-rounded w-90px h-90px rounded-circle border border-2 border-color-transparent-white-light me-30px">
                                <img class="w-40px h-40px" alt=""
                                    data-cfsrc="{{ asset('Frontend') }}/images/demo-application-home-icon.png"
                                    style="display:none;visibility:hidden;"><noscript><img
                                        src="{{ asset('Frontend') }}/images/demo-application-home-icon.png"
                                        class="w-40px h-40px" alt=""></noscript>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <h5 class="d-inline-block fw-700 text-white mb-0">Help your customers on live chat.
                                </h5>
                                <p>Trusted by over 30,000 worldwide customers since 2023.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 text-center text-lg-end">
                        <a href="#"><img alt=""
                                data-cfsrc="{{ asset('Frontend') }}/images/demo-application-home-08.png"
                                style="display:none;visibility:hidden;"><noscript><img
                                    src="{{ asset('Frontend') }}/images/demo-application-home-08.png"
                                    alt=""></noscript></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center pt-6 sm-pt-40px">
                <!-- start footer column -->
                <div class="col-lg-3 col-md-3 col-sm-6 md-mb-30px text-center text-sm-start">
                    <a href="{{ route('home') }}" class="footer-logo mb-15px d-inline-block">
                        <img data-at2x="{{ asset('Frontend') }}/images/logo-white.png" alt=""
                            data-cfsrc="{{ asset('Frontend') }}/images/logo-white.png"
                            style="display:none;visibility:hidden;"><noscript><img
                                src="{{ asset('Frontend') }}/images/logo-white.png"
                                data-at2x="{{ asset('Frontend') }}/images/logo-white.png" alt=""></noscript>
                    </a>
                    <p>Your ultimate travel partner. Carries the info you need while travelling.</p>
                    <div
                        class="row align-items-center border border-color-transparent-white-light g-0 border-radius-4px mt-30px lg-mt-25px">
                        <div class="col-5 text-center">
                            <h3 class="text-white fw-700 mb-0">4.96</h3>
                        </div>
                        <div
                            class="col-7 border-start border-color-transparent-white-light text-yellow ps-20px pe-20px pt-15px pb-15px lg-ps-15px lg-pe-15px text-center text-sm-start">
                            <div class="review-star-icon fs-14 lh-30">
                                ★
                                ★
                                ★
                                ★
                                ★
                            </div>
                            <span class="d-block fs-14 text-white lh-20 fw-500">30k Reviews</span>
                        </div>
                    </div>
                </div>
                <!-- end footer column -->
                <!-- start footer column -->
                <div class="col-5 col-lg-2 col-md-3 col-sm-5 offset-sm-1 md-mb-30px">
                    <span class="d-block text-white fw-600 mb-10px">About Synex Digital</span>
                    <ul>
                        <li><a href="{{ route('about') }}">About Us</a></li>
                        <li><a href="{{ route('services') }}">Services</a></li>
                        <li><a href="{{ route('projects') }}">Projects</a></li>
                        <li><a href="{{ route('blogs') }}">Blog</a></li>
                    </ul>
                </div>
                <!-- end footer column -->
                <!-- start footer column -->
                <div class="col-7 col-lg-3 col-md-4 col-sm-5 offset-md-0 offset-sm-1 order-5 order-md-3 xs-mb-30px">
                    <span class="d-block text-white fw-600 mb-10px">Need help?</span>
                    <span class="d-block">Call us directly?</span>
                    <a href="tel:1235678901" class="text-white fw-600 mb-15px d-inline-block">+880 1613-408101</a>
                    <span class="d-block">Need live support?</span>
                    <a href="mailto:office@synexdigital.com"
                        class="text-dark-gray text-dark-gray-hover fw-600 text-decoration-line-bottom">
                        office@synexdigital.com</a>
                </div>
                <!-- end footer column -->
                <!-- start footer column -->
                {{-- <div class="col-lg-3 col-md-10 col-sm-6 text-md-center text-lg-start order-last order-sm-4">
                    <span class="d-block text-white fw-600 mb-10px">Keep in touch with us</span>
                    <p class="mb-20px lh-30 w-90 xl-w-100">Subscribe our newsletter to get the latest news and updates.
                    </p>
                    <div class="d-inline-block w-100 newsletter-style-02 position-relative mb-15px">
                        <form action="https://craftohtml.themezaa.com/email-templates/subscribe-newsletter.php"
                            method="post" class="position-relative w-100">
                            <input
                                class="input-small bg-transparent border-color-transparent-white-light w-100 form-control required"
                                type="email" name="email" placeholder="Enter your email">
                            <input type="hidden" name="redirect" value="">
                            <button class="btn submit" aria-label="submit"><i
                                    class="icon feather icon-feather-mail icon-small text-medium-gray"></i></button>
                            <div
                                class="form-results border-radius-4px pt-5px pb-5px ps-15px pe-15px fs-14 lh-22 mt-10px w-100 text-center position-absolute d-none">
                            </div>
                        </form>
                    </div>
                    <div class="d-flex align-items-center justify-content-lg-start justify-content-md-center">
                        <i class="line-icon-Handshake align-middle icon-medium me-10px"></i>
                        <span class="fs-14">Protecting your privacy</span>
                    </div>
                </div> --}}
                <!-- end footer column -->
            </div>
            <div class="row justify-content-center align-items-center pt-5 md-pt-30px">
                <div class="col-12">
                    <div class="divider-style-03 divider-style-03-01 border-color-transparent-white-light"></div>
                </div>
                <div
                    class="col-xl-8 col-lg-9 pt-30px pb-30px fs-14 lh-26 last-paragraph-no-margin text-center order-2 order-sm-1">
                    <p>Copyright © 2024 Synex Digital. All rights reserved</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
    <!-- start scroll progress -->
    <div class="scroll-progress d-none d-xxl-block">
        <a href="#" class="scroll-top" aria-label="scroll">
            <span class="scroll-text">Scroll</span><span class="scroll-line"><span
                    class="scroll-point"></span></span>
        </a>
    </div>
    <!-- end scroll progress -->
    <!-- javascript libraries -->
    @include('frontend.layout.footerLink')
</body>

</html>