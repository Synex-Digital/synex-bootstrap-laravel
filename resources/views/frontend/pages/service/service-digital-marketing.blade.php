<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="Synex Digital">
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <!-- favicon icon -->
    <link rel="shortcut icon" href="{{ asset('Frontend/images/icons/fav-low.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('Frontend/images/icons/fav-low.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('Frontend/images/icons/fav-low.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('Frontend/images/icons/fav-low.png') }}">
    @include('frontend.layout.header-link')
    <link rel="stylesheet" href="{{ asset('Frontend/css/seo-agency.css') }}" />
</head>

<body data-mobile-nav-style="full-screen-menu" data-mobile-nav-bg-color="#2a2b3f" class="custom-cursor">
    <!-- start cursor -->
    <div class="cursor-page-inner">
        <div class="circle-cursor circle-cursor-inner"></div>
        <div class="circle-cursor circle-cursor-outer"></div>
    </div>
    <!-- end cursor -->
    <!-- start header -->
    <header>
        <!-- start navigation -->
        <nav class="navbar navbar-expand-lg bg-transparent header-light header-reverse glass-effect"
            data-header-hover="light">
            <div class="container-fluid">
                <div class="col-auto">
                    <a class="navbar-brand">
                        <script type="text/javascript" style="display:none">
                            //<![CDATA[
                            window.__mirage2 = {
                                petok: "HBpmF2N2wK1S2eLv1yTwXLgPP6OMa1AC3PBy315l5UE-3600-0.0.1.1"
                            };
                            //]]>
                        </script>
                        <script type="text/javascript" src="{{ asset('Frontend/js/mirage2.min.js') }}"></script>
                        <img data-at2x="{{ asset('Frontend') }}/images/logo-text.svg" alt="synex digital"
                            class="default-logo" data-cfsrc="{{ asset('Frontend') }}/images/logo-text.svg"
                            style="display:none;visibility:hidden;"><noscript><img
                                src="{{ asset('Frontend') }}/images/logo-text.svg"
                                data-at2x="{{ asset('Frontend') }}/images/logo-text.svg" alt="synex digital"
                                class="default-logo"></noscript>
                        <img data-at2x="{{ asset('Frontend') }}/images/logo-text.svg" alt="synex digital" class="alt-logo"
                            data-cfsrc="{{ asset('Frontend') }}/images/logo-text.svg"
                            style="display:none;visibility:hidden;"><noscript><img
                                src="{{ asset('Frontend') }}/images/logo-text.svg"
                                data-at2x="{{ asset('Frontend') }}/images/logo-text.svg" alt="synex digital"
                                class="alt-logo"></noscript>
                        <img data-at2x="{{ asset('Frontend') }}/images/logo-text.svg" alt="synex digital"
                            class="mobile-logo" data-cfsrc="{{ asset('Frontend') }}/images/logo-text.svg"
                            style="display:none;visibility:hidden;"><noscript><img
                                src="{{ asset('Frontend') }}/images/logo-text.svg"
                                data-at2x="{{ asset('Frontend') }}/images/logo-text.svg" alt="synex digital"
                                class="mobile-logo"></noscript>
                    </a>
                </div>
                <div class="col-auto menu-order ">
                    <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav alt-font">
                            <li class="nav-item"><a href="#about" class="nav-link">About Us</a></li>
                            <li class="nav-item"><a href="#process" class="nav-link">Working Process</a>
                            </li>
                            <li class="nav-item"><a href="#services" class="nav-link">Services</a></li>
                            <li class="nav-item"><a href="#contact" class="nav-link">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-auto ms-auto">
                    <div class="header-icon">
                        <div class="header-button"><a href="{{ route('contact') }}"
                                class="btn btn-small btn-dark-gray btn-box-shadow btn-rounded">Get a quote</a></div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- end navigation -->
    </header>
    <!-- end header -->
    <!-- start banner slider -->
    <section class="cover-background position-relative ipad-top-space-margin"
        style="background-image: url({{ asset('Frontend/images/demo-seo-agency-bg.jpg') }})">
        <div class="background-position-left-top h-100 w-100 position-absolute left-0px top-0"
            style="background-image: url('images/vertical-line-bg-medium-gray.svg')"></div>
        <div class="background-position-center-bottom background-size-100 background-no-repeat position-absolute bottom-0 left-0px w-100 h-400px lg-h-170px z-index-1"
            style="background-image: url({{ asset('Frontend/images/demo-seo-agency-bottom-bg.png') }})"></div>
        <div id="particles-style-01" class="h-100 position-absolute left-0px top-0 w-100" data-particle="true"
            data-particle-options='{"particles": {"number": {"value": 1.1,"density": {"enable": true,"value_area": 900}},"shape": {"type": ["image"],"image":{"src":"images/particles-demo-4-bg.png","width":180,"height":100}},"opacity": {"value": 0.5,"random": false,"anim": {"enable": false,"speed": 1,"sync": false}},"size": {"value": 120,"random": true,"anim": {"enable": false,"sync": true}},"line_linked":{"enable":false,"distance":0,"color":"#ffffff","opacity":0.4,"width":1},"move": {"enable": true,"speed":1,"direction": "right","random": false,"straight": false}},"interactivity": {"detect_on": "canvas","events": {"onhover": {"enable": false,"mode": "repulse"},"onclick": {"enable": false,"mode": "push"},"resize": true}},"retina_detect": false}'>
        </div>
        <div class="container position-relative pb-2">
            <div class="row align-items-center text-center text-md-start justify-content-sm-center">
                <div class="col-md-6 col-sm-9 position-relative z-index-1 text-dark-gray md-mb-35px">
                    <div class="alt-font fs-110 md-fs-100 fw-300 lh-85 ls-minus-2px mb-15px fancy-text-style-4"
                        data-anime='{ "el": "childs", "opacity": [0, 1], "rotateY": [-90, 0], "rotateZ": [-10, 0], "translateY": [80, 0], "translateZ": [50, 0], "staggervalue": 200, "duration": 900, "easing": "easeOutCirc" }'>
                        <span class="d-inline-block">Organic</span>
                        <span class="fw-700 fs-150 md-fs-120 ls-minus-5px d-inline-block"
                            data-fancy-text='{ "effect": "rubber-band", "string": ["search", "results"] }'></span>
                    </div>
                    <div
                        data-anime='{ "opacity": [0, 1], "rotateY": [-90, 0], "rotateZ": [-10, 0], "translateY": [80, 0], "translateZ": [50, 0], "duration": 900, "delay": 500, "easing": "easeOutCirc" }'>
                        <span
                            class="alt-font fs-20 fw-500 w-70 lg-w-85 sm-w-100 mb-40px md-mb-30px d-block opacity-7">We
                            offer flexible pricing plans so that our clients can take advantage of services.</span>
                    </div>
                    <a href="{{ route('contact') }}"
                        class="btn btn-extra-large btn-rounded with-rounded btn-gradient-orange-sky-blue btn-box-shadow box-shadow-extra-large"
                        data-anime='{ "opacity": [0, 1], "rotateY": [-90, 0], "rotateZ": [-10, 0], "translateY": [80, 0], "translateZ": [50, 0], "duration": 900, "delay": 800, "easing": "easeOutCirc" }'>Get
                        free analysis<span class="bg-white text-base-color">➔</span></a>
                </div>
                <div class="col-md-6 text-center"
                    data-anime='{ "opacity": [0, 1], "translateY": [150, 0], "duration": 2000, "easing": "easeOutBack" }'>
                    <img alt="synex digital" class="animation-float"
                        data-cfsrc="{{ asset('Frontend/images/demo-seo-agency-banner-right.png') }}"
                        style="display:none;visibility:hidden;"><noscript><img
                            src="{{ asset('Frontend/images/demo-seo-agency-banner-right.png') }}" alt="synex digital"
                            class="animation-float"></noscript>
                </div>
            </div>
            <div class="position-absolute bottom-minus-90px md-bottom-minus-70px sm-bottom-minus-50px right-30px sm-right-10px z-index-9"
                data-anime='{ "opacity": [0, 1], "scale": [0, 1], "translateZ": [50, 0], "staggervalue": 200, "duration": 900, "delay": 800, "easing": "easeOutCirc" }'>
                <img alt="synex digital" class="md-w-180px xs-w-150px"
                    data-cfsrc="{{ asset('Frontend/images/demo-seo-agency-banner-bottom.png') }}"
                    style="display:none;visibility:hidden;"><noscript><img
                        src="url({{ asset('Frontend/images/demo-seo-agency-banner-bottom.png') }}" alt="synex digital"
                        class="md-w-180px xs-w-150px"></noscript>
            </div>
        </div>
    </section>
    <!-- end banner slider -->
    <!-- start section -->
    <section id="about" class="background-position-center-top pb-0 pt-4 sm-pt-40px"
        style="background-image: url({{ asset('Frontend/images/demo-seo-agency-vertical-line-bg.svg') }})">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-xl-10 col-lg-12 col-md-10 text-center"
                    data-anime='{ "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <h1 class="fw-600 text-dark-gray alt-font ls-minus-1px">Our Digital Marketing Agency – Your Growth Partner</h1>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-xl-4 row-cols-lg-3 row-cols-sm-2 justify-content-center"
                data-anime='{ "el": "childs", "rotateZ": [5, 0], "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                <!-- start features box item -->
                <div class="col icon-with-text-style-03 lg-mb-50px xs-mb-40px transition-inner-all">
                    <div class="feature-box ps-7 pe-7 sm-ps-4 sm-pe-4">
                        <div class="feature-box-icon mb-30px sm-mb-20px">
                            <img class="h-65px" src="{{ asset('Frontend/images/demo-seo-agency-icon-03.svg') }}"
                                alt="synex digital">
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="d-inline-block alt-font fw-700 text-dark-gray mb-5px fs-20">Real time
                                analytics</span>
                            <p>We deliver email marketing campaigns to your audience.</p>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->
                <!-- start features box item -->
                <div class="col icon-with-text-style-03 lg-mb-50px xs-mb-40px transition-inner-all">
                    <div class="feature-box ps-7 pe-7 sm-ps-4 sm-pe-4">
                        <div class="feature-box-icon mb-30px sm-mb-20px">
                            <img class="h-65px" src="{{ asset('Frontend/images/demo-seo-agency-icon-01.svg') }}"
                                alt="synex digital">
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="d-inline-block alt-font fw-700 text-dark-gray mb-5px fs-20">Keywords
                                analytics</span>
                            <p>We also help our clients with social media strategy.</p>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->
                <!-- start features box item -->
                <div class="col icon-with-text-style-03 xs-mb-40px transition-inner-all">
                    <div class="feature-box ps-7 pe-7 sm-ps-4 sm-pe-4">
                        <div class="feature-box-icon mb-30px sm-mb-20px">
                            <img class="h-65px" src="{{ asset('Frontend/images/demo-seo-agency-icon-04.svg') }}"
                                alt="synex digital">
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="d-inline-block alt-font fw-700 text-dark-gray mb-5px fs-20">SEO
                                optimization</span>
                            <p>We believe in challenges and so we have made challenges.</p>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->
                <!-- start features box item -->
                <div class="col icon-with-text-style-03">
                    <div class="feature-box ps-7 pe-7 sm-ps-4 sm-pe-4">
                        <div class="feature-box-icon mb-30px sm-mb-20px">
                            <img class="h-65px" src="{{ asset('Frontend/images/demo-seo-agency-icon-02.svg') }}"
                                alt="synex digital">
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="d-inline-block alt-font fw-700 text-dark-gray mb-5px fs-20">Boost
                                performance</span>
                            <p>Team delivers incomparable quality with designing.</p>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section
        class="position-relative background-position-center-top half-section xs-ps-15px xs-pe-15px overflow-hidden"
        style="background-image: url({{ asset('Frontend/images/vertical-line-bg-medium-gray.svg') }})">
        <div id="particles-style-02" class="h-100 position-absolute left-0px top-0 z-index-minus-1 w-100"
            data-particle="true"
            data-particle-options='{"particles": {"number": {"value":8,"density": {"enable": true,"value_area": 4000}},"shape": {"type": ["image"],"image":{"src":"images/demo-seo-agency-particles-img.png","width":220,"height":134}},"opacity": {"value": 0.5,"random": false,"anim": {"enable": false,"speed": 1,"sync": false}},"size": {"value": 120,"random": true,"anim": {"enable": false,"sync": true}},"line_linked":{"enable":false,"distance":0,"color":"#ffffff","opacity":0.4,"width":1},"move": {"enable": true,"speed":1,"direction": "right","random": false,"straight": false}},"interactivity": {"detect_on": "canvas","events": {"onhover": {"enable": false,"mode": "repulse"},"onclick": {"enable": false,"mode": "push"},"resize": true}},"retina_detect": false}'>
        </div>
        <div class="container bg-white border-radius-6px box-shadow-double-large"
            data-bottom-top="transform:scale(1, 1) translateX(20px);"
            data-top-bottom="transform:scale(1, 1) translateX(-20px);">
            <div
                class="row row-cols-1 row-cols-lg-3 row-cols-sm-2 align-items-center pt-50px pb-50px ps-30px pe-30px justify-content-center">
                <!-- start content box item -->
                <div class="col md-mb-40px alt-font text-dark-gray fw-600">
                    <div
                        class="d-flex flex-column flex-md-row justify-content-center align-items-center g-0 text-center text-md-start">
                        <div class="flex-shrink-0 me-15px sm-me-0">
                            <h2 class="mb-0">99<sup class="fs-30">%</sup></h2>
                        </div>
                        <div>
                            <span class="fs-18 lh-26 d-block">Track and analyze <br />business reports.</span>
                        </div>
                    </div>
                </div>
                <!-- end content box item -->
                <!-- start content box item -->
                <div class="col md-mb-40px alt-font text-dark-gray fw-600">
                    <div
                        class="d-flex flex-column flex-md-row justify-content-center align-items-center g-0 text-center text-md-start">
                        <div class="flex-shrink-0 me-15px sm-me-0">
                            <h2 class="mb-0">4.96</h2>
                        </div>
                        <div>
                            <div class="review-star-icon fs-20 lh-34 text-gradient-orange-sky-blue">
                                ★
                                ★
                                ★
                                ★
                                ★
                            </div>
                            <span class="d-block fs-18 lh-20">Best rated agency</span>
                        </div>
                    </div>
                </div>
                <!-- end content box item -->
                <!-- start content box item -->
                <div class="col alt-font text-dark-gray fw-600">
                    <div
                        class="d-flex flex-column flex-md-row justify-content-center align-items-center g-0 text-center text-md-start">
                        <div class="flex-shrink-0 me-15px sm-me-0">
                            <h2 class="mb-0">98<sup class="fs-30">%</sup></h2>
                        </div>
                        <div>
                            <span class="fs-18 lh-26 d-block">Genuine repeated <br />happy customers.</span>
                        </div>
                    </div>
                </div>
                <!-- end content box item -->
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section id="process" class="background-position-center-top pt-0"
        style="background-image: url({{ asset('Frontend/images/vertical-line-bg-medium-gray.svg') }})">
        <div class="container">
            <div class="row justify-content-center">
                <div
                    class="col-12 d-block d-sm-flex align-items-center text-center text-sm-start justify-content-center fs-22 alt-font mb-7">
                    <div class="me-5px xs-ms-10px d-inline-block align-middle"><i
                            class="fa-regular fa-heart text-red"></i></div>
                    <div class="d-inline-block align-middle">Join the <span
                            class="fw-800 text-dark-gray text-decoration-line-bottom-medium">10000+</span> companies
                        trusting our agency.</div>
                </div>
            </div>
            <div class="row justify-content-center align-items-center">
                <div class="col-md-6 animation-float sm-mb-50px"
                    data-anime='{ "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <img alt="synex digital" data-cfsrc="{{ asset('Frontend/images/demo-seo-agency-03.png') }}"
                        style="display:none;visibility:hidden;"><noscript><img
                            src="{{ asset('Frontend/images/demo-seo-agency-03.png') }}" alt="synex digital"></noscript>
                </div>
                <div class="col-lg-5 offset-lg-1 col-md-6 text-center text-md-start"
                    data-anime='{ "el": "childs", "willchange": "transform", "opacity": [0, 1], "rotateY": [-90, 0], "rotateZ": [-10, 0], "translateY": [80, 0], "translateZ": [50, 0], "staggervalue": 200, "duration": 600, "delay": 100, "easing": "easeOutCirc" }'>
                    <span
                        class="ps-20px pe-20px mb-25px md-mb-20px text-uppercase text-dark-gray fs-13 lh-40 md-lh-50 ls-1px alt-font fw-700 border-radius-4px bg-gradient-chablis-red-quartz-white d-inline-block">Working
                        process</span>
                    <h2 class="alt-font text-dark-gray fw-600 ls-minus-1px">Why Choose Us?</h2>
                    <p class="w-80 xl-w-85 lg-w-90 md-w-100 mb-20px">In today’s highly competitive online environment, selecting the right team to manage your digital presence is essential. Our digital marketing agency is dedicated to helping businesses grow, attract new customers, and achieve measurable success.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="background-position-center-bottom background-size-100 background-no-repeat bg-base-color"
        style="background-image: url({{ asset('Frontend/images/demo-seo-agency-analysis-bg.png') }})"
        data-anime='{ "translate": [0, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
        <div class="container-fluid d-none d-md-block">
            <div class="row">
                <div class="p-0 overlap-section text-end pe-4 md-pe-5">
                    <img alt="synex digital" class="animation-rotation lg-w-150px"
                        data-cfsrc="{{ asset('Frontend/images/demo-seo-agency-08.png') }}"
                        style="display:none;visibility:hidden;"><noscript><img
                            src="{{ asset('Frontend/images/demo-seo-agency-08.png') }}" alt="synex digital"
                            class="animation-rotation lg-w-150px"></noscript>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center mb-1">
                <div class="col-12 text-center">
                    <h2 class="fw-600 alt-font text-white ls-minus-1px">Receive your free SEO analysis?</h2>
                </div>
            </div>
            <div class="row contact-form-style-06 position-relative justify-content-center pb-12">
                <div class="col-xl-10">
                    <!-- start SEO analysis form -->
                    <form action="https://craftohtml.themezaa.com/email-templates/contact-form.php" method="post"
                        class="row justify-content-center">
                        <div class="col-md-5 sm-mb-25px">
                            <input
                                class="border-color-transparent-white-very-light input-medium bg-transparent ps-35px border-radius-100px fw-300 placeholder-light form-control required"
                                type="url" name="url" placeholder="Enter your website URL.." />
                        </div>
                        <div class="col-md-5 sm-mb-25px">
                            <input
                                class="border-color-transparent-white-very-light input-medium bg-transparent ps-35px border-radius-100px fw-300 placeholder-light form-control required"
                                type="email" name="email" placeholder="Enter your email..." />
                        </div>
                        <div class="col-12 col-md-auto">
                            <button type="submit" aria-label="submit"
                                class="btn bg-white text-base-color p-0 btn-rounded submit w-65px h-65px sm-w-100">➔</button>
                        </div>
                        <div
                            class="col-12 col-md-10 form-results border-radius-4px mt-15px lh-normal pt-10px pb-10px ps-15px pe-15px fs-16 text-center d-none">
                        </div>
                    </form>
                    <!-- end SEO analysis form -->
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section id="services" class="background-position-center-top pt-4 md-pt-6 sm-pt-40px"
        style="background-image: url('images/demo-seo-agency-vertical-line-bg.svg')">
        <div class="container">
            <div class="row mb-8 md-mb-10">
                <div class="col-12 tab-style-04">
                    <!-- start tab navigation -->
                    <ul class="nav nav-tabs border-0 justify-content-center fw-500 fs-19 mb-4 md-mb-6 sm-mb-5px alt-font">
                        <li class="nav-item"><a data-bs-toggle="tab" href="#tab_five1" class="nav-link active">Expert Team<span class="tab-border bg-dark-gray"></span></a></li>

                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab_five2">Customized Strategies<span class="tab-border bg-dark-gray"></span></a></li>

                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab_five3">Full-Service Solutions<span class="tab-border bg-dark-gray"></span></a></li>

                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab_five4">Quality Assurance<span class="tab-border bg-dark-gray"></span></a></li>
                    </ul>
                    <!-- end tab navigation -->
                    <div class="tab-content">
                        <!-- start tab content -->
                        <div class="tab-pane fade in active show" id="tab_five1">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-lg-7 col-md-6 sm-mb-30px"
                                    data-anime='{ "opacity": [0, 1], "staggervalue": 200, "duration": 600, "delay": 0, "easing": "easeOutCirc" }'>
                                    <img alt="synex digital"
                                        data-cfsrc="{{ asset('Frontend/images/demo-seo-agency-tab-01.png') }}"
                                        style="display:none;visibility:hidden;" /><noscript><img
                                            src="{{ asset('Frontend/images/demo-seo-agency-tab-01.png') }}"
                                            alt="synex digital" /></noscript>
                                </div>
                                <div class="col-lg-5 col-md-6 ps-8 lg-ps-3 sm-ps-15px text-center text-md-start"
                                    data-anime='{ "el": "childs", "willchange": "transform", "opacity": [0, 1], "rotateY": [-90, 0], "rotateZ": [-10, 0], "translateY": [80, 0], "translateZ": [50, 0], "staggervalue": 200, "duration": 600, "delay": 100, "easing": "easeOutCirc" }'>
                                    <span class="ps-20px pe-20px mb-30px md-mb-20px text-uppercase text-dark-gray fs-13 lh-40 md-lh-50 ls-1px alt-font fw-700 border-radius-4px bg-gradient-chablis-red-quartz-white d-inline-block">Expert Team</span>
                                    <h2 class="alt-font text-dark-gray fw-600 ls-minus-1px">Expert Team with Proven Results</h2>
                                    <p class="w-80 xl-w-90 md-w-100">Our digital marketing agency prides itself on having a team of experienced professionals skilled in SEO, social media management, content creation, and online advertising. By leveraging the latest tools and techniques, we ensure your business achieves its full potential.</p>
                                </div>
                            </div>
                        </div>
                        <!-- end tab content -->
                        <!-- start tab content -->
                        <div class="tab-pane fade in" id="tab_five2">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-lg-7 col-md-6 sm-mb-30px">
                                    <img alt="synex digital"
                                        data-cfsrc="{{ asset('Frontend/images/demo-seo-agency-tab-02.png') }}"
                                        style="display:none;visibility:hidden;" /><noscript><img
                                            src="{{ asset('Frontend/images/demo-seo-agency-tab-02.png') }}"
                                            alt="synex digital" /></noscript>
                                </div>
                                <div class="col-lg-5 col-md-6 ps-8 lg-ps-3 sm-ps-15px text-center text-md-start">
                                    <span class="ps-20px pe-20px mb-30px md-mb-20px text-uppercase text-dark-gray fs-13 lh-40 md-lh-50 ls-1px alt-font fw-700 border-radius-4px bg-gradient-chablis-red-quartz-white d-inline-block">Customized Strategies</span>
                                    <h2 class="alt-font text-dark-gray fw-600 ls-minus-1px">Customized Strategies for Every Business</h2>
                                    <p class="w-80 xl-w-90 md-w-100">We understand that no two businesses are alike. That’s why our digital marketing agency creates personalized strategies tailored to your unique goals. Whether you’re aiming to increase website traffic, generate more leads, or boost sales, we craft a plan that aligns perfectly with your objectives.</p>
                                </div>
                            </div>
                        </div>
                        <!-- end tab content -->
                        <!-- start tab content -->
                        <div class="tab-pane fade in" id="tab_five3">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-lg-7 col-md-6 sm-mb-30px">
                                    <img alt="synex digital"
                                        data-cfsrc="{{ asset('Frontend/images/demo-seo-agency-tab-03.png') }}"
                                        style="display:none;visibility:hidden;" /><noscript><img
                                            src="{{ asset('Frontend/images/demo-seo-agency-tab-03.png') }}"
                                            alt="synex digital" /></noscript>
                                </div>
                                <div class="col-lg-5 col-md-6 ps-8 lg-ps-3 sm-ps-15px text-center text-md-start">
                                    <span
                                        class="ps-20px pe-20px mb-30px md-mb-20px text-uppercase text-dark-gray fs-13 lh-40 md-lh-50 ls-1px alt-font fw-700 border-radius-4px bg-gradient-chablis-red-quartz-white d-inline-block">Full-Service Solutions</span>
                                    <h2 class="alt-font text-dark-gray fw-600 ls-minus-1px">Full-Service Marketing Solutions.</h2>
                                    <p class="w-80 xl-w-90 md-w-100">Our digital marketing agency offers a wide range of services to meet all your online marketing needs:
                                        <ul class="list-style-05">
                                            <li></li>
                                            <li>Optimize your website to enhance search visibility and attract natural traffic.</li>
                                            <li>Social media campaigns to connect with your audience.</li>
                                            <li>PPC advertising for instant results.</li>
                                            <li>Content marketing to build credibility and authority.</li>
                                            <li>Email marketing to engage your customers directly.</li>
                                            <li>With everything handled by our digital marketing agency, there’s no need to juggle multiple service providers.</li>
                                        </ul>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- end tab content -->
                        <!-- start tab content -->
                        <div class="tab-pane fade in" id="tab_five4">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-lg-7 col-md-6 sm-mb-30px">
                                    <img alt="synex digital"
                                        data-cfsrc="{{ asset('Frontend/images/demo-seo-agency-tab-04.png') }}"
                                        style="display:none;visibility:hidden;" /><noscript><img
                                            src="{{ asset('Frontend/images/demo-seo-agency-tab-04.png') }}"
                                            alt="synex digital" /></noscript>
                                </div>
                                <div class="col-lg-5 col-md-6 ps-8 lg-ps-3 sm-ps-15px text-center text-md-start">
                                    <span
                                        class="ps-20px pe-20px mb-30px md-mb-20px text-uppercase text-dark-gray fs-13 lh-40 md-lh-50 ls-1px alt-font fw-700 border-radius-4px bg-gradient-chablis-red-quartz-white d-inline-block">Quality Assurance</span>
                                    <h2 class="alt-font text-dark-gray fw-600 ls-minus-1px">Affordable Solutions With Quality Assurance</h2>
                                    <p class="w-80 xl-w-90 md-w-100">Employing a dedicated marketing team can stretch your finances. With our digital marketing agency, you gain access to expert services at an affordable price ensuring exceptional results without overspending.</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- end tab content -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="bg-gradient-top-very-light-gray overlap-height position-relative">
        <div class="container overlap-gap-section">
            <div class="row justify-content-center mb-4">
                <div class="col-xxl-6 col-lg-8 col-md-10 text-center"
                    data-anime='{ "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <h2 class="fw-600 alt-font text-dark-gray ls-minus-1px">Trusted by over 26 reputed companies
                    </h2>
                </div>
            </div>
            <div class="row justify-content-center row-cols-2 row-cols-md-4 row-cols-sm-3 clients-style-03">
                <!-- start client item -->
                <div class="col text-center mb-35px"
                    data-anime='{ "translateY": [15, 0], "opacity": [0,1], "duration": 600, "delay": 300, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <div class="client-box">
                        <a href="#"><img alt="synex digital"
                                class="box-shadow-extra-large border-radius-100px lg-w-80 md-w-95 xs-w-auto"
                                data-cfsrc="{{ asset('Frontend/images/demo-seo-agency-clients-01.jpg') }}"
                                style="display:none;visibility:hidden;"><noscript><img
                                    src="{{ asset('Frontend/images/demo-seo-agency-clients-01.jpg') }}"
                                    alt="synex digital"
                                    class="box-shadow-extra-large border-radius-100px lg-w-80 md-w-95 xs-w-auto"></noscript></a>
                    </div>
                </div>
                <!-- end client item -->
                <!-- start client item -->
                <div class="col text-center mb-35px"
                    data-anime='{ "translateY": [15, 0], "opacity": [0,1], "duration": 600, "delay": 1000, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <div class="client-box">
                        <a href="#"><img alt="synex digital"
                                class="box-shadow-extra-large border-radius-100px lg-w-80 md-w-95 xs-w-auto"
                                data-cfsrc="{{ asset('Frontend/images/demo-seo-agency-clients-02.jpg') }}"
                                style="display:none;visibility:hidden;"><noscript><img
                                    src="{{ asset('Frontend/images/demo-seo-agency-clients-02.jpg') }}"
                                    alt="synex digital"
                                    class="box-shadow-extra-large border-radius-100px lg-w-80 md-w-95 xs-w-auto"></noscript></a>
                    </div>
                </div>
                <!-- end client item -->
                <!-- start client item -->
                <div class="col text-center mb-35px"
                    data-anime='{ "translateY": [15, 0], "opacity": [0,1], "duration": 600, "delay":900, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <div class="client-box">
                        <a href="#"><img alt="synex digital"
                                class="box-shadow-extra-large border-radius-100px lg-w-80 md-w-95 xs-w-auto"
                                data-cfsrc="{{ asset('Frontend/images/demo-seo-agency-clients-03.jpg') }}"
                                style="display:none;visibility:hidden;"><noscript><img
                                    src="{{ asset('Frontend/images/demo-seo-agency-clients-03.jpg') }}"
                                    alt="synex digital"
                                    class="box-shadow-extra-large border-radius-100px lg-w-80 md-w-95 xs-w-auto"></noscript></a>
                    </div>
                </div>
                <!-- end client item -->
                <!-- start client item -->
                <div class="col text-center mb-35px"
                    data-anime='{ "translateY": [15, 0], "opacity": [0,1], "duration": 600, "delay": 500, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <div class="client-box">
                        <a href="#"><img alt="synex digital"
                                class="box-shadow-extra-large border-radius-100px lg-w-80 md-w-95 xs-w-auto"
                                data-cfsrc="{{ asset('Frontend/images/demo-seo-agency-clients-04.jpg') }}"
                                style="display:none;visibility:hidden;"><noscript><img
                                    src="{{ asset('Frontend/images/demo-seo-agency-clients-04.jpg') }}"
                                    alt="synex digital"
                                    class="box-shadow-extra-large border-radius-100px lg-w-80 md-w-95 xs-w-auto"></noscript></a>
                    </div>
                </div>
                <!-- end client item -->
                <!-- start client item -->
                <div class="col text-center sm-mb-35px"
                    data-anime='{ "translateY": [15, 0], "opacity": [0,1], "duration": 600, "delay": 700, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <div class="client-box">
                        <a href="#"><img alt="synex digital"
                                class="box-shadow-extra-large border-radius-100px lg-w-80 md-w-95 xs-w-auto"
                                data-cfsrc="{{ asset('Frontend/images/demo-seo-agency-clients-05.jpg') }}"
                                style="display:none;visibility:hidden;"><noscript><img
                                    src="{{ asset('Frontend/images/demo-seo-agency-clients-05.jpg') }}"
                                    alt="synex digital"
                                    class="box-shadow-extra-large border-radius-100px lg-w-80 md-w-95 xs-w-auto"></noscript></a>
                    </div>
                </div>
                <!-- end client item -->
                <!-- start client item -->
                <div class="col text-center sm-mb-35px"
                    data-anime='{ "translateY": [15, 0], "opacity": [0,1], "duration": 600, "delay":1200, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <div class="client-box">
                        <a href="#"><img alt="synex digital"
                                class="box-shadow-extra-large border-radius-100px lg-w-80 md-w-95 xs-w-auto"
                                data-cfsrc="{{ asset('Frontend/images/demo-seo-agency-clients-06.jpg') }}"
                                style="display:none;visibility:hidden;"><noscript><img
                                    src="{{ asset('Frontend/images/demo-seo-agency-clients-06.jpg') }}"
                                    alt="synex digital"
                                    class="box-shadow-extra-large border-radius-100px lg-w-80 md-w-95 xs-w-auto"></noscript></a>
                    </div>
                </div>
                <!-- end client item -->
                <!-- start client item -->
                <div class="col text-center"
                    data-anime='{ "translateY": [15, 0], "opacity": [0,1], "duration": 600, "delay": 800, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <div class="client-box">
                        <a href="#"><img alt="synex digital"
                                class="box-shadow-extra-large border-radius-100px lg-w-80 md-w-95 xs-w-auto"
                                data-cfsrc="{{ asset('Frontend/images/demo-seo-agency-clients-07.jpg') }}"
                                style="display:none;visibility:hidden;"><noscript><img
                                    src="{{ asset('Frontend/images/demo-seo-agency-clients-07.jpg') }}"
                                    alt="synex digital"
                                    class="box-shadow-extra-large border-radius-100px lg-w-80 md-w-95 xs-w-auto"></noscript></a>
                    </div>
                </div>
                <!-- end client item -->
            </div>
            <div class="row justify-content-center mt-7 mb-4 sm-mt-40px sm-mb-0">
                <div class="col-12 d-block d-sm-flex align-items-center text-center text-sm-start justify-content-center fs-22 alt-font">
                    <div class="me-5px xs-ms-10px d-inline-block align-middle"><i class="fa-regular fa-heart text-red"></i></div>
                    <div class="d-inline-block align-middle">Join the <span class="fw-800 text-dark-gray text-decoration-line-bottom-medium">100+</span> companies trusting our agency.</div>
                </div>
                <p style="margin-top: 30px; text-align: center;">Choosing our digital marketing agency means partnering with a team that’s fully committed to your success. Let us handle your marketing efforts so you can focus on what matters most—growing your business. Reach out to us today to embark on your path to digital success!</p>
            </div>
        </div>
        <div class="background-position-center-bottom background-size-100 background-no-repeat h-300px sm-h-150px position-absolute sm-position-relative left-0px bottom-0 w-100 d-none d-md-block"
            style="background-image: url('images/demo-seo-agency-analysis-bg.png')"></div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section id="contact" class="p-0">
        <div class="container overlap-section">
            <div class="row justify-content-center box-shadow-quadruple-large border-radius-6px overflow-hidden g-0">
                <!-- start contact address -->
                <div class="col-lg-6">
                    <div class="p-15 lg-p-13 md-p-10 bg-white h-100 background-position-right-bottom background-no-repeat xs-background-image-none"
                        style="background-image: url('images/demo-seo-agency-contact-bottom.png')">
                        <span
                            class="ps-25px pe-25px mb-25px text-uppercase text-dark-gray fs-13 lh-42 ls-1px alt-font fw-700 border-radius-4px bg-gradient-chablis-red-quartz-white d-inline-block">Keep
                            in touch</span>
                        <h3 class="alt-font text-dark-gray fw-600">Start Today with Our Digital Marketing Agency</h3>
                        <p>Feel free to get in touch..</p>
                    </div>
                </div>
                <!-- end contact address -->
                <div class="col-lg-6 contact-form-style-03">
                    <div class="p-15 lg-p-13 md-p-10 bg-dark-gray h-100">
                        <h1 class="fw-600 alt-font text-white fancy-text-style-4 ls-minus-1px">Say
                            <span
                                data-fancy-text='{ "effect": "rotate", "string": ["hello!", "hallå!", "salve!"] }'></span>
                        </h1>
                        <!-- start contact form -->
                        {{-- <form action="https://craftohtml.themezaa.com/email-templates/contact-form.php"
                            method="post">
                            <div class="position-relative form-group mb-20px">
                                <span class="form-icon"><i class="bi bi-person icon-extra-medium"></i></span>
                                <input
                                    class="ps-0 border-radius-0px fs-17 bg-transparent border-color-transparent-white-light placeholder-medium-gray form-control required"
                                    type="text" name="name" placeholder="Enter your name*">
                            </div>
                            <div class="position-relative form-group mb-20px">
                                <span class="form-icon"><i class="bi bi-envelope icon-extra-medium"></i></span>
                                <input
                                    class="ps-0 border-radius-0px fs-17 bg-transparent border-color-transparent-white-light placeholder-medium-gray form-control required"
                                    type="email" name="email" placeholder="Enter your email address*">
                            </div>
                            <div class="position-relative form-group form-textarea mt-15px mb-25px">
                                <textarea
                                    class="ps-0 border-radius-0px fs-17 bg-transparent border-color-transparent-white-light placeholder-medium-gray form-control"
                                    name="comment" placeholder="Enter your message" rows="4"></textarea>
                                <span class="form-icon"><i
                                        class="bi bi-chat-square-dots icon-extra-medium"></i></span>
                                <input type="hidden" name="redirect" value="">
                                <button
                                    class="btn btn-small btn-gradient-orange-sky-blue ls-1px mt-30px submit w-100 btn-round-edge-small"
                                    type="submit">Send message</button>
                                <div class="form-results mt-20px d-none"></div>
                            </div>
                            <span class="text-white opacity-3 fs-14 lh-22 d-block">I accept the terms & conditions and
                                i understand that my data will be hold securely in accordance with the privacy
                                policy.</span>
                        </form> --}}
                        <!-- end contact form -->

                        <a href="{{ route('contact') }}" class="btn btn-extra-large btn-gradient-orange-sky-blue btn-box-shadow box-shadow-extra-large w-100">Send Message</a>

                        <span class="mt-5 text-white opacity-3 fs-14 lh-22 d-block">I accept the terms & conditions and i understand that my data will be hold securely in accordance with the privacy policy.</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start subscription popup -->
    {{-- <div id="subscribe-popup" class="mfp-hide subscribe-popup">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9 col-md-10 bg-white">
                    <div class="row position-relative box-shadow-quadruple-large">
                        <div class="col-lg-6 cover-background md-h-400px xs-h-300px"
                            style="background-image:url('images/newsletter-popup-img-01.jpg');"></div>
                        <div class="col-lg-6 newsletter-popup p-8 pt-10 pb-10 lg-p-5 md-p-6 xs-p-8 position-relative">
                            <h4 class="d-inline-block alt-font fw-700 text-dark-gray mb-15px">Subscribe to the latest
                                updates!</h4>
                            <p>Subscribe to our newsletters and get the latest business updates.</p>
                            <div class="d-inline-block w-100 newsletter-style-05 position-relative mb-20px">
                                <form action="https://craftohtml.themezaa.com/email-templates/subscribe-newsletter.php"
                                    method="post">
                                    <input class="input-medium w-100 border-radius-4px form-control required mb-15px"
                                        type="email" name="email" placeholder="Enter your email address" />
                                    <input type="hidden" name="redirect" value="">
                                    <button type="submit"
                                        class="btn btn-medium btn-round-edge btn-dark-gray btn-box-shadow w-100 submit">Subscribe
                                        now!</button>
                                    <div
                                        class="form-results border-radius-4px mt-10px lh-normal pt-10px pb-10px ps-15px pe-15px fs-16 w-100 text-center position-absolute z-index-1 d-none">
                                    </div>
                                </form>
                            </div>
                            <label for="newsletter-off" class="fs-15"><input
                                    class="w-auto me-10px position-relative top-1px p-0" type="checkbox"
                                    id="newsletter-off" name="newsletter-off">Don't show this popup again</label>
                        </div>
                        <button title="Close (Esc)" type="button" class="mfp-close text-dark-gray"></button>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- end subscription popup -->
    <!-- start footer -->
    <footer class="footer-light half-footer">
        <div class="container">
            <div class="row align-items-center">
                <!-- start footer column -->
                <div class="col-12 col-md-auto sm-mb-15px text-center text-md-start">
                    <a class="footer-logo"><img data-at2x="{{ asset('Frontend') }}/images/logo-text.svg" alt="synex digital" data-cfsrc="{{ asset('Frontend') }}/images/logo-text.svg" style="display:none;visibility:hidden;"><noscript><img src="{{ asset('Frontend') }}/images/logo-text.svg" data-at2x="{{ asset('Frontend') }}/images/logo-text.svg" alt="synex digital"></noscript></a>
                </div>
                <!-- end footer column -->
                <!-- start footer column -->
                <div class="col">
                    <ul class="footer-navbar fs-18 alt-font text-end fw-600 text-center text-md-end sm-lh-24">
                        <li class="nav-item active"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">About Us</a></li>
                        <li class="nav-item"><a href="{{ route('services') }}" class="nav-link">Services</a></li>
                        <li class="nav-item"><a href="{{ route('projects') }}" class="nav-link">Projects</a></li>
                        <li class="nav-item"><a href="{{ route('blogs') }}" class="nav-link">Blog</a></li>
                        <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
                    </ul>
                </div>
                <!-- end footer column -->
            </div>
            <div class="row justify-content-center align-items-center pt-40px sm-pt-30px">
                <!-- start footer divider -->
                <div class="col-12 mb-40px sm-mb-30px">
                    <div class="divider-style-03 divider-style-03-01 border-color-transparent-dark-very-light"></div>
                </div>
                <!-- end footer divider -->
                <!-- start footer column -->
                <div
                    class="col-lg-7 col-md-8 fs-14 lh-24 text-center text-md-start last-paragraph-no-margin sm-mb-20px">
                    <p>Copyright © 2024 Synex Digital. All Rights Reserved</p>
                </div>
                <!-- end footer column -->
                <!-- start footer column -->
                <div class="col-lg-5 col-md-4 text-end elements-social social-icon-style-08 text-center text-md-end">
                    <ul class="medium-icon dark d-inline-block">
                        <li class="mb-0"><a class="facebook" href="https://www.facebook.com/synexdigital" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li class="mb-0"><a class="instagram" href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>
                    </ul>
                </div>
                <!-- end footer column -->
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
    @include('frontend.layout.footer-link')
</body>

</html>
