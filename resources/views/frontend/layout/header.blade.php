<header>
    <!-- start navigation -->
    <nav class="navbar navbar-expand-lg header-light header-transparent bg-transparent disable-fixed">
        <div class="container-fluid">
            <div class="col-auto col-lg-2 me-lg-0 me-auto">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <script type="text/javascript" style="display:none">
                        //<![CDATA[
                        window.__mirage2 = {
                            petok: "HBpmF2N2wK1S2eLv1yTwXLgPP6OMa1AC3PBy315l5UE-3600-0.0.1.1"
                        };
                        //]]>
                    </script>
                    <script type="text/javascript" src="{{ asset('Frontend/js/mirage2.min.js') }}"></script>
                    <img data-at2x="{{ asset('Frontend') }}/images/logo-text.svg" alt="synex digital-logo" class="default-logo"
                        data-cfsrc="{{ asset('Frontend') }}/images/logo-text.svg"
                        style="display:none;visibility:hidden;"><noscript><img
                            src="{{ asset('Frontend') }}/images/logo-text.svg"
                            data-at2x="{{ asset('Frontend') }}/images/logo-text.svg" alt="synex digital-logo"
                            class="default-logo"></noscript>
                    <img data-at2x="{{ asset('Frontend') }}/images/logo-text.svg" alt="synex digital-logo" class="alt-logo"
                        data-cfsrc="{{ asset('Frontend') }}/images/logo-text.svg"
                        style="display:none;visibility:hidden;"><noscript><img
                            src="{{ asset('Frontend') }}/images/logo-text.svg"
                            data-at2x="{{ asset('Frontend') }}/images/logo-text.svg" alt="synex digital-logo"
                            class="alt-logo"></noscript>
                    <img data-at2x="{{ asset('Frontend') }}/images/logo-text.svg" alt="synex digital-logo" class="mobile-logo"
                        data-cfsrc="{{ asset('Frontend') }}/images/logo-text.svg"
                        style="display:none;visibility:hidden;"><noscript><img
                            src="{{ asset('Frontend') }}/images/logo-text.svg"
                            data-at2x="{{ asset('Frontend') }}/images/logo-text.svg" alt="synex digital-logo"
                            class="mobile-logo"></noscript>
                </a>
            </div>
            <div class="col-auto col-lg-8 menu-order position-static">
                <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">About Us</a>
                        </li>
                        <li class="nav-item dropdown dropdown-with-icon">
                            <a href="{{ route('services') }}" class="nav-link">Services</a>
                            <i id="navbarDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false"></i>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li>
                                    <a href="{{ route('service.web-dev') }}">
                                        <img class="w-40px" alt="synex digital-web"
                                            data-cfsrc="{{ asset('Frontend/images/Services/web-developmnet.svg') }}"
                                            style="display:none;visibility:hidden;" /><noscript><img
                                                src="{{ asset('Frontend/images/Services/web-developmnet.svg') }}"
                                                class="w-40px" alt="synex digital-web" /></noscript>
                                        <div class="">
                                            <span>Web Development</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('service.uiux') }}">
                                        <img class="w-40px" alt="synex digital-uiux"
                                            data-cfsrc="{{ asset('Frontend/images/Services/ui-ux.svg') }}"
                                            style="display:none;visibility:hidden;" /><noscript><img
                                                src="{{ asset('Frontend/images/Services/ui-ux.svg') }}" class="w-40px"
                                                alt="synex digital-uiux" /></noscript>
                                        <div class="submenu-icon-content">
                                            <span>UI UX Design</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('service.digital-marketing') }}">
                                        <img class="w-40px" alt="synex digital-marketing"
                                            data-cfsrc="{{ asset('Frontend/images/Services/digital-marketing.svg') }}"
                                            style="display:none;visibility:hidden;" /><noscript><img
                                                src="{{ asset('Frontend/images/Services/digital-marketing.svg') }}"
                                                class="w-40px" alt="synex digital-marketing" /></noscript>
                                        <div class="submenu-icon-content">
                                            <span>Digital Marketing</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('service.mobile-app') }}">
                                        <img class="w-40px" alt="synex digital-app"
                                            data-cfsrc="{{ asset('Frontend/images/Services/mobile-ap.svg') }}"
                                            style="display:none;visibility:hidden;" /><noscript><img
                                                src="{{ asset('Frontend/images/Services/mobile-ap.svg') }}"
                                                class="w-40px" alt="synex digital-app" /></noscript>
                                        <div class="submenu-icon-content">
                                            <span>Mobile and Apps Development</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('service.cloud-solution') }}">
                                        <img class="w-40px" alt="synex digital-software"
                                            data-cfsrc="{{ asset('Frontend/images/Services/saas.svg') }}"
                                            style="display:none;visibility:hidden;" /><noscript><img
                                                src="{{ asset('Frontend/images/Services/saas.svg') }}" class="w-40px"
                                                alt="synex digital-software" /></noscript>
                                        <div class="submenu-icon-content">
                                            <span>Cloud Solution</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item"><a href="{{ route('projects') }}" class="nav-link">Projects</a></li>
                        <li class="nav-item"><a href="{{ route('blogs') }}" class="nav-link">Blog</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-auto col-lg-2 text-end">
                <div class="header-icon">
                    <div class="header-button">
                        <a href="{{ route('contact') }}"
                            class="btn btn-rounded btn-dark-gray btn-medium btn-switch-text btn-box-shadow text-transform-none">
                            <span>
                                <span class="btn-double-text" data-text="Hire agency">Hire agency</span>
                                {{-- <span style="margin-left:10px;">→</span> --}}
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- end navigation -->
</header>
