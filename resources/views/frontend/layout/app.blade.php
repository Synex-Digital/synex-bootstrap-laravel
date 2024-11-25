<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <!-- Google tag (gtag.js) -->
    @include('frontend.layout.header-link')
    <link rel="stylesheet" href="{{ asset('Frontend') }}/css/web-agency.css" />
    @yield('style')
</head>

<body data-mobile-nav-style="classic" class="background-position-center-top"
    style="background-image: url({{ asset('Frontend/images/vertical-line-bg-small-medium-gray.svg') }})">

    {{-- Header --}}
    @include('frontend.layout.header')
    @yield('content')
    {{-- Footer --}}
    @include('frontend.layout.footer')
    <!-- start sticky elements -->
    <div class="sticky-wrap z-index-1 d-none d-xl-inline-block" data-animation-delay="100" data-shadow-animation="true">
        <div class="elements-social social-icon-style-10">
            <ul class="small-icon dark fw-600">
                <li class="fs-18">Follow us <span
                        class="separator-line-1px w-30px bg-dark-gray d-inline-block align-middle ms-15px"></span>
                </li>
                <li><a class="twitter" href="https://www.facebook.com/@synexdigital" target="_blank">Fb.</a></li>
                <li><a class="behance" href="https://www.linkedin.com/company/synex-digital/" target="_blank">Lin.</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="scroll-progress d-none d-xxl-block">
        <a href="#" class="scroll-top" aria-label="scroll">
            <span class="scroll-text">Scroll to top</span><span class="scroll-line"><span
                    class="scroll-point"></span></span>
        </a>
    </div>
    @include('frontend.layout.footer-link')
</body>

</html>
