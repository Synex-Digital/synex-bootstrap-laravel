@extends('frontend.layout.app')

@section('content')
    <!-- start page title -->
    <section class="p-0 top-space-margin page-title-center-alignment">
        <div class="container">
            <div class="row align-items-center justify-content-center extra-very-small-screen">
                <div class="col-xl-8 col-lg-10 text-center position-relative page-title-extra-large"
                    data-anime='{ "el": "childs", "translateY": [-15, 0], "opacity": [0,1], "duration": 300, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h1 class="fw-700 text-dark-gray mb-20px ls-minus-2px">Service</h1>
                    <h2 class="fw-400 ls-0px mb-0">Perfect solutions for your business</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title -->

    <!-- start title feature section -->
    <section class="p-0">
        <div class="container">
            <div class="row mb-6 mt-7 md-mb-50px">
                <div class="col-xl-5 col-lg-6"
                    data-anime='{ "el": "childs", "translateY": [0, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h3 class="text-dark-gray fw-600 ls-minus-2px w-95 xl-w-100">Services We Provide</h3>
                    <p class="w-95 md-w-100">Unlock Your Business Potential with Our Specialized Services and Strategic
                        Expertise. We offer a wide range of services to help your business succeed. </p>
                </div>
                <div class="col-lg-6 offset-xl-1 progress-bar-style-01 mt-50px"
                    data-anime='{ "el": "childs", "translateY": [15, 0], "translateX": [15, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <!-- start progress bar item -->
                    <div class="progress mb-12 sm-mb-60px bg-extra-medium-gray">
                        <div class="progress-bar-title d-inline-block text-dark-gray fs-17 fw-500">Web Development</div>
                        <div class="progress-bar bg-dark-gray" role="progressbar" aria-valuenow="85" aria-valuemin="0"
                            aria-valuemax="100" aria-label="app-development">
                            <span
                                class="progress-bar-percent text-center bg-dark-gray fs-11 fw-600 lh-12 text-white">85%</span>
                        </div>
                    </div>
                    <!-- end progress bar item -->
                    <!-- start progress bar item -->
                    <div class="progress mb-12 sm-mb-60px bg-extra-medium-gray">
                        <div class="progress-bar-title d-inline-block text-dark-gray fs-17 fw-500">UI UX Design</div>
                        <div class="progress-bar bg-dark-gray" role="progressbar" aria-valuenow="87" aria-valuemin="0"
                            aria-valuemax="100" aria-label="branding">
                            <span
                                class="progress-bar-percent text-center bg-dark-gray fs-11 fw-600 lh-12 text-white">87%</span>
                        </div>
                    </div>
                    <!-- end progress bar item -->
                    <!-- start progress bar item -->
                    <div class="progress mb-12 sm-mb-60px bg-extra-medium-gray">
                        <div class="progress-bar-title d-inline-block text-dark-gray fs-17 fw-500">Digital Marketing</div>
                        <div class="progress-bar bg-dark-gray" role="progressbar" aria-valuenow="93" aria-valuemin="0"
                            aria-valuemax="100" aria-label="web-development">
                            <span
                                class="progress-bar-percent text-center bg-dark-gray fs-11 fw-600 lh-12 text-white">93%</span>
                        </div>
                    </div>
                    <!-- end progress bar item -->
                    <!-- start progress bar item -->
                    <div class="progress mb-12 sm-mb-60px bg-extra-medium-gray">
                        <div class="progress-bar-title d-inline-block text-dark-gray fs-17 fw-500">Mobile & App Development
                        </div>
                        <div class="progress-bar bg-dark-gray" role="progressbar" aria-valuenow="96" aria-valuemin="0"
                            aria-valuemax="100" aria-label="web-development">
                            <span
                                class="progress-bar-percent text-center bg-dark-gray fs-11 fw-600 lh-12 text-white">96%</span>
                        </div>
                    </div>
                    <!-- end progress bar item -->
                    <!-- start progress bar item -->
                    <div class="progress sm-mb-0 bg-extra-medium-gray">
                        <div class="progress-bar-title d-inline-block text-dark-gray fs-17 fw-500">Cloud Solution</div>
                        <div class="progress-bar bg-dark-gray" role="progressbar" aria-valuenow="96" aria-valuemin="0"
                            aria-valuemax="100" aria-label="web-development">
                            <span
                                class="progress-bar-percent text-center bg-dark-gray fs-11 fw-600 lh-12 text-white">96%</span>
                        </div>
                    </div>
                    <!-- end progress bar item -->
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2 justify-content-center text-center"
                data-anime='{ "el": "childs", "translateY": [15, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <!-- start features box item -->
                <div class="col icon-with-text-style-11 border-0 overflow-visible">
                    <div
                        class="text-box-wrapper align-items-center d-flex position-relative overflow-hidden border-radius-6px">
                        <div class="text-center w-100">
                            <div class="text-box last-paragraph-no-margin p-20">
                                <img class="w-110px mb-20px d-block mx-auto" alt="synex digital"
                                    data-cfsrc="{{ asset('Frontend/images') }}/demo-web-agency-expertise-01.png"
                                    style="display:none;visibility:hidden;" /><noscript><img
                                        src="{{ asset('Frontend/images') }}/demo-web-agency-expertise-01.png"
                                        class="w-110px mb-20px d-block mx-auto" alt="synex digital" /></noscript>
                                <span class="alt-font text-dark-gray fw-600 fs-20">Discussion</span>
                            </div>
                            <div
                                class="text-box-hover bg-dark-gray h-100 d-flex align-items-center justify-content-center flex-column">
                                <h1
                                    class="text-outline text-outline-color-base-color mb-10px ls-minus-2px fw-600 position-absolute bottom-minus-40px">
                                    01</h1>
                                <p class="d-inline-block w-70 mb-10px text-white opacity-5 lg-w-90">Analysis, Set Objectives
                                    and Risk Management.</p>
                                <span class="alt-font fw-500 fs-20 text-white mb-20px">Discussion</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->
                <!-- start features box item -->
                <div class="col icon-with-text-style-11 border-0 overflow-visible">
                    <div
                        class="text-box-wrapper align-items-center d-flex position-relative overflow-hidden border-radius-6px">
                        <div class="text-center w-100">
                            <div class="text-box last-paragraph-no-margin p-20">
                                <img class="w-110px mb-20px d-block mx-auto" alt="synex digital"
                                    data-cfsrc="{{ asset('Frontend/images') }}/demo-web-agency-expertise-02.png"
                                    style="display:none;visibility:hidden;" /><noscript><img
                                        src="{{ asset('Frontend/images') }}/demo-web-agency-expertise-02.png"
                                        class="w-110px mb-20px d-block mx-auto" alt="synex digital" /></noscript>
                                <span class="alt-font text-dark-gray fw-600 fs-20">Strategy</span>
                            </div>
                            <div
                                class="text-box-hover bg-dark-gray h-100 d-flex align-items-center justify-content-center flex-column">
                                <h1
                                    class="text-outline text-outline-color-base-color mb-10px ls-minus-2px fw-600 position-absolute bottom-minus-40px">
                                    02</h1>
                                <p class="d-inline-block w-70 mb-10px text-white opacity-5 lg-w-90">Design Planning, Feature
                                    Mapping and Timeline Creation.</p>
                                <span class="alt-font fw-500 fs-20 text-white mb-20px">Strategy</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->
                <!-- start features box item -->
                <div class="col icon-with-text-style-11 border-0 overflow-visible">
                    <div
                        class="text-box-wrapper align-items-center d-flex position-relative overflow-hidden border-radius-6px">
                        <div class="text-center w-100">
                            <div class="text-box last-paragraph-no-margin p-20">
                                <img class="w-110px mb-20px d-block mx-auto" alt="synex digital"
                                    data-cfsrc="{{ asset('Frontend/images') }}/demo-web-agency-expertise-03.png"
                                    style="display:none;visibility:hidden;" /><noscript><img
                                        src="{{ asset('Frontend/images') }}/demo-web-agency-expertise-03.png"
                                        class="w-110px mb-20px d-block mx-auto" alt="synex digital" /></noscript>
                                <span class="alt-font text-dark-gray fw-600 fs-20">Execute</span>
                            </div>
                            <div
                                class="text-box-hover bg-dark-gray h-100 d-flex align-items-center justify-content-center flex-column">
                                <h1
                                    class="text-outline text-outline-color-base-color mb-10px ls-minus-2px fw-600 position-absolute bottom-minus-40px">
                                    03</h1>
                                <p class="d-inline-block w-70 mb-10px text-white opacity-5 lg-w-90">Development, Testing
                                    and Iteration.</p>
                                <span class="alt-font fw-500 fs-20 text-white mb-20px">Execute</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->
                <!-- start features box item -->
                <div class="col icon-with-text-style-11 border-0 overflow-visible">
                    <div
                        class="text-box-wrapper align-items-center d-flex position-relative overflow-hidden border-radius-6px">
                        <div class="text-center w-100">
                            <div class="text-box last-paragraph-no-margin p-20">
                                <img class="w-110px mb-20px d-block mx-auto" alt="synex digital"
                                    data-cfsrc="{{ asset('Frontend/images') }}/demo-web-agency-expertise-04.png"
                                    style="display:none;visibility:hidden;" /><noscript><img
                                        src="{{ asset('Frontend/images') }}/demo-web-agency-expertise-04.png"
                                        class="w-110px mb-20px d-block mx-auto" alt="synex digital" /></noscript>
                                <span class="alt-font text-dark-gray fw-600 fs-20">Launch</span>
                            </div>
                            <div
                                class="text-box-hover bg-dark-gray h-100 d-flex align-items-center justify-content-center flex-column">
                                <h1
                                    class="text-outline text-outline-color-base-color mb-10px ls-minus-2px fw-600 position-absolute bottom-minus-40px">
                                    04</h1>
                                <p class="d-inline-block w-70 mb-10px text-white opacity-5 lg-w-90">Implementation, User
                                    Training and Ongoing Support.</p>
                                <span class="alt-font fw-500 fs-20 text-white mb-20px">Launch</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->
            </div>
        </div>
    </section>
    <!-- end section -->

    <!-- start section -->
    <section class="overflow-hidden position-relative pt-2 pb-0 xl-pt-5 lg-pt-8 md-pt-11 d-none d-md-block">
        <div class="container">
            <div class="row">
                <div class="col-xxl-6 col-lg-5 col-md-6">
                    <div
                        class="fs-300 xl-fs-250 lg-fs-200 text-dark-gray fw-600 ls-minus-20px word-break-normal position-relative">
                        best
                    </div>
                </div>
                <div class="col-xxl-6 col-lg-7 col-md-6">
                    <div class="outside-box-right-10 xl-outside-box-right-10 text-end">
                        <div
                            class="fs-300 xl-fs-250 lg-fs-200 text-base-color fw-600 ls-minus-20px d-inline-block word-break-normal">
                            service</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

    <!-- start types section -->
    <section class="pb-0 half-section">
        <div class="container">
            <div class="row justify-content-center mb-7 sm-mb-40px">
                <div class="col-xl-10"
                    data-anime='{ "el": "childs", "translateY": [15, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>

                    <div
                        class="row border-bottom border-2 border-color-dark-gray pb-50px mb-50px sm-pb-35px sm-mb-35px align-items-center">
                        <div class="col-md-1 text-center text-md-end md-mb-15px">
                            <div class="fs-16 fw-600 text-dark-gray">01</div>
                        </div>
                        <div class="col-md-7 offset-lg-1 icon-with-text-style-01 md-mb-25px">
                            <div class="feature-box feature-box-left-icon-middle last-paragraph-no-margin">
                                <div class="feature-box-icon me-50px md-me-35px">
                                    <img class="w-75px" alt="synex digital"
                                        data-cfsrc="{{ asset('Frontend/images/Services/management-software.svg') }}"
                                        style="display:none;visibility:hidden;" /><noscript><img
                                            src="{{ asset('Frontend/images/Services/management-software.svg') }}"
                                            class="w-75px" alt="synex digital" /></noscript>
                                </div>
                                <div class="feature-box-content">
                                    <span class="d-inline-block text-dark-gray mb-5px fs-20 ls-minus-05px">Best <span
                                            class="fw-700">Management Software</span></span>
                                    <p class="w-90 md-w-100">Streamline Your Operations with Cutting-Edge Solutions.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 text-center text-md-end">
                            <a href="{{ route('contact') }}"
                                class="btn btn-large btn-expand-ltr text-dark-gray btn-rounded fw-700"><span
                                    class="bg-base-color"></span>Get started now</a>
                        </div>
                    </div>

                    <div
                        class="row border-bottom border-2 border-color-dark-gray pb-50px mb-50px sm-pb-35px sm-mb-35px align-items-center">
                        <div class="col-md-1 text-center text-md-end md-mb-15px">
                            <div class="fs-16 fw-600 text-dark-gray">02</div>
                        </div>
                        <div class="col-md-7 offset-lg-1 icon-with-text-style-01 md-mb-25px">
                            <div class="feature-box feature-box-left-icon-middle last-paragraph-no-margin">
                                <div class="feature-box-icon me-50px md-me-35px">
                                    <img class="w-75px" alt="synex digital"
                                        data-cfsrc="{{ asset('Frontend/images/Services/web-developmnet.svg') }}"
                                        style="display:none;visibility:hidden;" /><noscript><img
                                            src="{{ asset('Frontend/images/Services/web-developmnet.svg') }}"
                                            class="w-75px" alt="synex digital" /></noscript>
                                </div>
                                <div class="feature-box-content">
                                    <span class="d-inline-block text-dark-gray mb-5px fs-20 ls-minus-05px">Creative <span
                                            class="fw-700">web development</span></span>
                                    <p class="w-90 md-w-100">Expert Solutions for Your Online Presence.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 text-center text-md-end">
                            <a href="{{ route('contact') }}"
                                class="btn btn-large btn-expand-ltr text-dark-gray btn-rounded fw-700"><span
                                    class="bg-base-color"></span>Get started now</a>
                        </div>
                    </div>

                    <div
                        class="row border-bottom border-2 border-color-dark-gray pb-50px mb-50px sm-pb-35px sm-mb-35px align-items-center">
                        <div class="col-md-1 text-center text-md-end md-mb-15px">
                            <div class="fs-16 fw-600 text-dark-gray">03</div>
                        </div>
                        <div class="col-md-7 offset-lg-1 icon-with-text-style-01 md-mb-25px">
                            <div class="feature-box feature-box-left-icon-middle last-paragraph-no-margin">
                                <div class="feature-box-icon me-50px md-me-35px">
                                    <img class="w-75px" alt="synex digital"
                                        data-cfsrc="{{ asset('Frontend/images/Services/ui-ux.svg') }}"
                                        style="display:none;visibility:hidden;" /><noscript><img
                                            src="{{ asset('Frontend/images/Services/ui-ux.svg') }}" class="w-75px"
                                            alt="synex digital" /></noscript>
                                </div>
                                <div class="feature-box-content">
                                    <span class="d-inline-block text-dark-gray mb-5px fs-20 ls-minus-05px">Best <span
                                            class="fw-700">UI UX Design</span></span>
                                    <p class="w-90 md-w-100">Create Intuitive and Engaging User Experiences.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 text-center text-md-end">
                            <a href="{{ route('contact') }}"
                                class="btn btn-large btn-expand-ltr text-dark-gray btn-rounded fw-700"><span
                                    class="bg-base-color"></span>Get started now</a>
                        </div>
                    </div>

                    <div
                        class="row border-bottom border-2 border-color-dark-gray pb-50px mb-50px sm-pb-35px sm-mb-35px align-items-center">
                        <div class="col-md-1 text-center text-md-end md-mb-15px">
                            <div class="fs-16 fw-600 text-dark-gray">04</div>
                        </div>
                        <div class="col-md-7 offset-lg-1 icon-with-text-style-01 md-mb-25px">
                            <div class="feature-box feature-box-left-icon-middle last-paragraph-no-margin">
                                <div class="feature-box-icon me-50px md-me-35px">
                                    <img class="w-75px" alt="synex digital"
                                        data-cfsrc="{{ asset('Frontend/images/Services/digital-marketing.svg') }}"
                                        style="display:none;visibility:hidden;" /><noscript><img
                                            src="{{ asset('Frontend/images/Services/digital-marketing.svg') }}"
                                            class="w-75px" alt="synex digital" /></noscript>
                                </div>
                                <div class="feature-box-content">
                                    <span class="d-inline-block text-dark-gray mb-5px fs-20 ls-minus-05px">Best <span
                                            class="fw-700">Digital Marketing</span></span>
                                    <p class="w-90 md-w-100">Boost Your Online Presence with Strategic Campaigns.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 text-center text-md-end">
                            <a href="{{ route('contact') }}"
                                class="btn btn-large btn-expand-ltr text-dark-gray btn-rounded fw-700"><span
                                    class="bg-base-color"></span>Get started now</a>
                        </div>
                    </div>

                    <div
                        class="row border-bottom border-2 border-color-dark-gray pb-50px mb-50px sm-pb-35px sm-mb-35px align-items-center">
                        <div class="col-md-1 text-center text-md-end md-mb-15px">
                            <div class="fs-16 fw-600 text-dark-gray">05</div>
                        </div>
                        <div class="col-md-7 offset-lg-1 icon-with-text-style-01 md-mb-25px">
                            <div class="feature-box feature-box-left-icon-middle last-paragraph-no-margin">
                                <div class="feature-box-icon me-50px md-me-35px">
                                    <img class="w-75px" alt="synex digital"
                                        data-cfsrc="{{ asset('Frontend/images/Services/graphic.svg') }}"
                                        style="display:none;visibility:hidden;" /><noscript><img
                                            src="{{ asset('Frontend/images/Services/graphic.svg') }}" class="w-75px"
                                            alt="synex digital" /></noscript>
                                </div>
                                <div class="feature-box-content">
                                    <span class="d-inline-block text-dark-gray mb-5px fs-20 ls-minus-05px">Best <span
                                            class="fw-700">Graphics Design</span></span>
                                    <p class="w-90 md-w-100">Expert Solutions for Your Online Presence.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 text-center text-md-end">
                            <a href="{{ route('contact') }}"
                                class="btn btn-large btn-expand-ltr text-dark-gray btn-rounded fw-700"><span
                                    class="bg-base-color"></span>Get started now</a>
                        </div>
                    </div>

                    <div
                        class="row border-bottom border-2 border-color-dark-gray pb-50px mb-50px sm-pb-35px sm-mb-35px align-items-center">
                        <div class="col-md-1 text-center text-md-end md-mb-15px">
                            <div class="fs-16 fw-600 text-dark-gray">06</div>
                        </div>
                        <div class="col-md-7 offset-lg-1 icon-with-text-style-01 md-mb-25px">
                            <div class="feature-box feature-box-left-icon-middle last-paragraph-no-margin">
                                <div class="feature-box-icon me-50px md-me-35px">
                                    <img class="w-75px" alt="synex digital"
                                        data-cfsrc="{{ asset('Frontend/images/Services/mobile-ap.svg') }}"
                                        style="display:none;visibility:hidden;" /><noscript><img
                                            src="{{ asset('Frontend/images/Services/mobile-ap.svg') }}" class="w-75px"
                                            alt="synex digital" /></noscript>
                                </div>
                                <div class="feature-box-content">
                                    <span class="d-inline-block text-dark-gray mb-5px fs-20 ls-minus-05px">Best <span
                                            class="fw-700">Mobile App Development</span></span>
                                    <p class="w-90 md-w-100">Build High-Performance Apps for iOS and Android.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 text-center text-md-end">
                            <a href="{{ route('contact') }}"
                                class="btn btn-large btn-expand-ltr text-dark-gray btn-rounded fw-700"><span
                                    class="bg-base-color"></span>Get started now</a>
                        </div>
                    </div>

                    <div
                        class="row border-bottom border-2 border-color-dark-gray pb-50px mb-50px sm-pb-35px sm-mb-35px align-items-center">
                        <div class="col-md-1 text-center text-md-end md-mb-15px">
                            <div class="fs-16 fw-600 text-dark-gray">07</div>
                        </div>
                        <div class="col-md-7 offset-lg-1 icon-with-text-style-01 md-mb-25px">
                            <div class="feature-box feature-box-left-icon-middle last-paragraph-no-margin">
                                <div class="feature-box-icon me-50px md-me-35px">
                                    <img class="w-75px" alt="synex digital"
                                        data-cfsrc="{{ asset('Frontend/images/Services/saas.svg') }}"
                                        style="display:none;visibility:hidden;" /><noscript><img
                                            src="{{ asset('Frontend/images/Services/saas.svg') }}" class="w-75px"
                                            alt="synex digital" /></noscript>
                                </div>
                                <div class="feature-box-content">
                                    <span class="d-inline-block text-dark-gray mb-5px fs-20 ls-minus-05px">SaaS <span
                                            class="fw-700">(Software as a Service)</span></span>
                                    <p class="w-90 md-w-100">Expert Solutions for Your Online Presence.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 text-center text-md-end">
                            <a href="{{ route('contact') }}"
                                class="btn btn-large btn-expand-ltr text-dark-gray btn-rounded fw-700"><span
                                    class="bg-base-color"></span>Get started now</a>
                        </div>
                    </div>

                    <div class="row align-items-center">
                        <div class="col-md-1 text-center text-md-end md-mb-15px">
                            <div class="fs-16 fw-600 text-dark-gray">08</div>
                        </div>
                        <div class="col-md-7 offset-lg-1 icon-with-text-style-01 md-mb-25px">
                            <div class="feature-box feature-box-left-icon-middle last-paragraph-no-margin">
                                <div class="feature-box-icon me-50px md-me-35px">
                                    <img class="w-75px" alt="synex digital"
                                        data-cfsrc="{{ asset('Frontend/images/Services/video.svg') }}"
                                        style="display:none;visibility:hidden;" /><noscript><img
                                            src="{{ asset('Frontend/images/Services/video.svg') }}" class="w-75px"
                                            alt="synex digital" /></noscript>
                                </div>
                                <div class="feature-box-content">
                                    <span class="d-inline-block text-dark-gray mb-5px fs-20 ls-minus-05px">Best <span
                                            class="fw-700">Video Editing</span></span>
                                    <p class="w-90 md-w-100">Impactful animated product explainer videos.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 text-center text-md-end">
                            <a href="{{ route('contact') }}"
                                class="btn btn-large btn-expand-ltr text-dark-gray btn-rounded fw-700"><span
                                    class="bg-base-color"></span>Get started now</a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row mx-0 justify-content-center"
                data-anime='{ "el": "childs", "translateY": [0, 0], "opacity": [0,1], "duration": 200, "delay": 0, "staggervalue": 100, "easing": "easeOutQuad" }'>
                <div
                    class="col-auto text-center last-paragraph-no-margin bg-dark-gray pt-15px pb-15px ps-8 pe-8 border-radius-100px">
                    <div class="d-inline-block align-middle me-5px text-base-color">✉</div>
                    <div class="d-inline-block align-middle text-white sm-lh-24">Our nearly <span
                            class="fw-500">50+</span> creative and expertise people are ready to help! <a
                            href="{{ route('contact') }}" class="text-white fw-500 text-decoration-line-bottom">Contact
                            now</a></div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

    <!-- start review section -->
    <section class="pb-4 lg-pb-6 position-relative">
        <div class="container position-relative">
            <div class="row justify-content-center mb-6 sm-mb-30px"
                data-anime='{ "el": "childs", "translateY": [0, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="col-lg-5">
                    <h3 class="text-dark-gray fw-600 ls-minus-2px w-80 lg-w-100">Trusted by genius people.</h3>
                    <div class="mb-30px d-flex align-items-center md-mb-30px">
                        <div class="fw-700 fs-70 text-dark-gray me-10px">4.96</div>
                        <div class="text-center">
                            <div
                                class="bg-base-color text-dark-gray border-radius-30px ps-20px pe-20px fs-16 ls-minus-2px">
                                ★
                                ★
                                ★
                                ★
                                ★
                            </div>
                            <span class="text-dark-gray fs-13 fw-500 text-uppercase">Clutch review</span>
                        </div>
                    </div>
                    <div class="d-flex md-mb-25px">
                        <!-- start slider navigation -->
                        <div
                            class="slider-one-slide-prev-1 bg-white border border-color-extra-medium-gray text-dark-gray swiper-button-prev slider-navigation-style-04">
                            ◄
                        </div>
                        <div
                            class="slider-one-slide-next-1 bg-white border border-color-extra-medium-gray text-dark-gray swiper-button-next slider-navigation-style-04">
                            ►
                        </div>
                        <!-- end slider navigation -->
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7 overflow-hidden offset-xl-1">
                    <div class="swiper magic-cursor"
                        data-slider-options='{ "slidesPerView": 1, "spaceBetween": 40, "loop": true, "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "992": { "slidesPerView": 1 }, "768": { "slidesPerView":1 }, "320": { "slidesPerView": 1 } }, "effect": "slide" }'>
                        <div class="swiper-wrapper">
                            <!-- start review item -->
                            <div class="swiper-slide">
                                <h5 class="text-dark-gray mb-20px w-90 xl-w-100 lh-42 fw-400 ls-minus-1px">I could not
                                    be happier with the website that Synex Digital created for my business. They took my
                                    ideas and turned them into a stunning, user-friendly website that exceeded my
                                    expectations.</h5>
                                <span class="text-dark-gray fw-600 d-block fs-15 text-uppercase lh-22 ls-2px">@Mahadi
                                    Tahsan</span>
                            </div>
                            <!-- end review item -->
                            <!-- start review item -->
                            <div class="swiper-slide">
                                <h5 class="text-dark-gray mb-20px w-90 xl-w-100 lh-42 fw-400 ls-minus-1px">Working with
                                    Synex Digital has been a game-changer for our online visibility. Their SEO team’s
                                    expertise and strategies have propelled our website to the top of search engine
                                    rankings. Glad to hire them on a monthly basis.</h5>
                                <span class="text-dark-gray fw-600 d-block fs-15 text-uppercase lh-22 ls-2px">@MD Sydul
                                    Amin</span>
                            </div>
                            <!-- end review item -->
                            <!-- start review item -->
                            <div class="swiper-slide">
                                <h5 class="text-dark-gray mb-20px w-90 xl-w-100 lh-42 fw-400 ls-minus-1px">Synex
                                    Digital’s management software completely revolutionized our school. For schools that
                                    require reliability, streamlined administration, user-friendly design, and
                                    responsive assistance redefine efficiency!</h5>
                                <span class="text-dark-gray fw-600 d-block fs-15 text-uppercase lh-22 ls-2px">@Shawon
                                    Islam</span>
                            </div>
                            <!-- end review item -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="separator-line-1px w-100 bg-dark-gray opacity-1 mb-6 sm-mb-30px"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

    <!-- start section -->
    <section class="pb-4 sm-pt-30px sm-pb-40px overflow-hidden position-relative">
        <div class="container">
            <div class="row">
                <div class="col-sm-5 text-center text-sm-start">
                    <div class="outside-box-left-25 xl-outside-box-left-10 sm-outside-box-left-0">
                        <div
                            class="fs-350 xl-fs-250 lg-fs-200 md-fs-170 sm-fs-100 text-dark-gray fw-600 ls-minus-20px word-break-normal">
                            work</div>
                    </div>
                </div>
                <div class="col-sm-7 text-center text-sm-end">
                    <div class="outside-box-right-5 sm-outside-box-right-0">
                        <div
                            class="fs-350 xl-fs-250 lg-fs-200 md-fs-170 sm-fs-100 text-base-color fw-600 ls-minus-20px position-relative d-inline-block word-break-normal">
                            together
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
@endsection
