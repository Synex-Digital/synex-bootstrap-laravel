@extends('frontend.layout.app')
@section('style')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/intlTelInput-jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

    <style>
        .input-container {
            position: relative;
            width: 100%;
            height: 50px;
            overflow-x: clip;
        }

        .input-wrapper {
            display: flex;
            align-items: center;
            position: absolute;
            top: 0;
            width: 100%;
            height: 100%;


            transition: transform 0.5s cubic-bezier(0.18, 0.89, 0.32, 1.28);
            transform: translateX(100%);

        }

        .visible {
            transform: translateX(0);
        }

        .hidden {
            transform: translateX(-100%);
        }

        .iti.iti--allow-dropdown.iti--separate-dial-code {
            width: 100%;
        }

        .toggle-button {


            border-radius: 6px;
            cursor: pointer;
            background: #eff6ff;
            border: none;
            font-size: 18px;
            padding: 3px 6px;
            padding-left: 0px;
        }

        .input-wrapper input {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            flex: 1;
        }

        .or {
            margin: 0 10px;
            font-weight: 700
        }
    </style>
@endsection
@section('content')
    <!-- start page title -->

    <section class="p-0 top-space-margin page-title-center-alignment">
        <div class="container">
            <div class="row align-items-center justify-content-center extra-very-small-screen">
                <div class="col-xl-8 col-lg-10 text-center position-relative page-title-extra-large"
                    data-anime='{ "el": "childs", "translateY": [-15, 0], "opacity": [0,1], "duration": 300, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h1 class="fw-700 text-dark-gray mb-20px ls-minus-2px">Contact</h1>
                    <h2 class="fw-400 ls-0px mb-0">We'd love to hear from you</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title -->
    <!-- start address section -->
    <section class="pt-4 lg-pt-65px">
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-2 row-cols-md-2 justify-content-center">

                <div class="col md-mb-60px sm-mb-45px" data-bottom-top="transform: translateY(50px)"
                    data-top-bottom="transform: translateY(-50px)">
                    <div class="position-relative ps-40px pe-40px pt-50px lg-ps-25px lg-pe-25px sm-pt-35px">
                        <div
                            class="fs-80 fw-700 text-uppercase text-dark-gray position-absolute top-minus-40px left-40px lg-left-25px">
                            Can</div>
                        <p class="mt-10px mb-15px lh-28"> 379 Lawthorn Way SE, AB, Canada</p>
                        <div class="d-block">
                            <span class="text-dark-gray fw-600">Email:</span>
                            <a href="mailto:office@synexdigital.com"
                                class="text-dark-gray text-dark-gray-hover fw-600 text-decoration-line-bottom">
                                office@synexdigital.com</a>
                        </div>
                        <div class="d-block">
                            <span class="text-dark-gray fw-600">Phone:</span>
                            <a href="tel:12345678910" class="text-dark-gray-hover">+880 1613-408101</a>
                        </div>
                        <div class="text-dark-gray mt-20px">
                            <a href="https://maps.app.goo.gl/LkvdphV5K1iUnhbi9" target="_blank"
                                class="btn btn-large btn-expand-ltr text-dark-gray btn-rounded fw-700"><span
                                    class="bg-base-color"></span>View on google map</a>
                        </div>
                    </div>
                </div>
                <div class="col mt-4 md-mt-0 md-mb-60px sm-mb-45px" data-bottom-top="transform: translateY(-50px)"
                    data-top-bottom="transform: translateY(50px)">
                    <div class="position-relative ps-40px pe-40px pt-50px lg-ps-25px lg-pe-25px sm-pt-35px">
                        <div
                            class="fs-80 fw-700 text-uppercase text-dark-gray position-absolute top-minus-40px left-40px lg-left-25px">
                            Ban</div>
                        <p class="mt-10px mb-15px lh-28"> 87/3, West Dhanmondi, Shankar, Dhaka-1207</p>
                        <div class="d-block">
                            <span class="text-dark-gray fw-600">Email:</span>
                            <a href="mailto:office@synexdigital.com"
                                class="text-dark-gray text-dark-gray-hover fw-600 text-decoration-line-bottom">
                                office@synexdigital.com</a>
                        </div>
                        <div class="d-block">
                            <span class="text-dark-gray fw-600">Phone:</span>
                            <a href="tel:12345678910" class="text-dark-gray-hover">+880 1613-408101</a>
                        </div>
                        <div class="text-dark-gray mt-20px">
                            <a href="https://maps.app.goo.gl/LkvdphV5K1iUnhbi9" target="_blank"
                                class="btn btn-large btn-expand-ltr text-dark-gray btn-rounded fw-700"><span
                                    class="bg-base-color"></span>View on google map</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

    <!-- start form section -->
    <section class="pt-2" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6">
                    <h2 class="text-dark-gray fw-600 mb-10 ls-minus-2px">Let us help you get your project started.</h2>
                    <div class="outside-box-left-35 d-none d-lg-inline-block">
                        <div class="fs-350 xl-fs-300 lg-fs-250 text-base-color fw-600 ls-minus-20px word-break-normal"
                            data-bottom-top="transform:scale(1, 1) translate3d(0px, 0px, 0px);"
                            data-top-bottom="transform:scale(1, 1) translate3d(-100px, 0px, 0px);">contact</div>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1 contact-form-style-03"
                    data-anime='{ "el": "childs", "translateY": [-15, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h6 class="fw-500 text-dark-gray mb-20px sm-mb-10px ls-minus-05px"><span class="fw-700">Hello,</span>
                        Tell us about your project.</h6>
                    <form action="{{ route('contact.submit') }}" method="POST">
                        @csrf
                        <!-- Name -->
                        <div class="position-relative form-group mb-20px">
                            <span class="form-icon">
                                <!-- SVG Icon -->
                            </span>
                            <input
                                class="ps-0 border-radius-0px border-color-dark-gray form-control required @error('name') border-danger @enderror"
                                type="text" name="name" value="{{ old('name') }}" placeholder="Your name*" />
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <!-- Whatsapp Number -->
                        <div class="position-relative form-group mb-20px">
                            <span class="form-icon">
                                <!-- SVG Icon -->
                            </span>
                            <input
                                class="ps-0 border-radius-0px border-bottom border-color-dark-gray form-control required @error('number') border-danger @enderror"
                                type="number" name="number" value="{{ old('number') }}" placeholder="Whatsapp number*" />
                            @error('number')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <!-- Email -->
                        <div class="position-relative form-group mb-20px">
                            <span class="form-icon">
                                <!-- SVG Icon -->
                            </span>
                            <input
                                class="ps-0 border-radius-0px border-bottom border-color-dark-gray form-control @error('email') border-danger @enderror"
                                type="email" name="email" value="{{ old('email') }}"
                                placeholder="Your email address*" />
                            @error('email')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <!-- Category -->
                        <div class="position-relative form-group mb-20px">
                            <span class="form-icon">
                                <!-- SVG Icon -->
                            </span>
                            <select id="category" name="category"
                                class="ps-0 border-radius-0px border-bottom border-color-dark-gray form-select @error('category') border-danger @enderror"
                                required>
                                <option value="">Select a Service*</option>
                                <option value="management-software"
                                    {{ old('category') == 'management-software' ? 'selected' : '' }}>Management Software
                                </option>
                                <option value="saas" {{ old('category') == 'saas' ? 'selected' : '' }}>SaaS (Software as
                                    a Service)</option>
                                <option value="web-development"
                                    {{ old('category') == 'web-development' ? 'selected' : '' }}>Web Development</option>
                                <option value="app-development"
                                    {{ old('category') == 'app-development' ? 'selected' : '' }}>Mobile App Development
                                </option>
                                <option value="digital-marketing"
                                    {{ old('category') == 'digital-marketing' ? 'selected' : '' }}>Digital Marketing
                                </option>
                                <option value="ui-design" {{ old('category') == 'ui-design' ? 'selected' : '' }}>UI UX
                                    Design</option>
                                <option value="graphics-design"
                                    {{ old('category') == 'graphics-design' ? 'selected' : '' }}>Graphics Design</option>
                                <option value="video-editing" {{ old('category') == 'video-editing' ? 'selected' : '' }}>
                                    Video Editing</option>
                            </select>
                            @error('category')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <!-- Message -->
                        <div class="position-relative form-group form-textarea mb-0">
                            <textarea
                                class="ps-0 border-radius-0px border-bottom border-color-dark-gray form-control required @error('message') border-danger @enderror"
                                name="message" placeholder="Your message*" rows="4" required>{{ old('message') }}</textarea>
                            @error('message')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <!-- Submit -->
                        <button class="btn btn-small btn-dark-gray btn-box-shadow btn-round-edge mt-35px mb-25px w-100"
                            type="submit">Send message</button>
                        <p class="fs-14 lh-24 w-100 mb-0 text-center text-lg-start">We are committed to protecting your
                            privacy. We will never collect information about you without your explicit consent.</p>
                        <div class="form-results mt-20px d-none"></div>
                    </form>


                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

    <!-- start map section -->
    <section class="py-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 p-0">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.939759563768!2d90.3672568!3d23.7495275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40311a29c1f9eaa9%3A0x7eda334fe00e121c!2sSynex%20Digital!5e0!3m2!1sen!2sbd!4v1731920894363!5m2!1sen!2sbd"
                        width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
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
@if ($errors->any())
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Scroll to the #contact section
            const contactSection = document.querySelector('#contact');
            if (contactSection) {
                contactSection.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });
    </script>
@endif
@section('script')
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script> --}}
    <script>
        function toggleInput() {
            const emailInput = document.getElementById('email-input');
            const whatsappInput = document.getElementById('whatsapp-input');
            const emailField = emailInput.querySelector('input');
            const whatsappField = whatsappInput.querySelector('input');

            if (emailInput.classList.contains('visible')) {
                emailInput.classList.remove('visible');
                emailInput.classList.add('hidden');

                whatsappInput.classList.remove('hidden');
                whatsappInput.classList.add('visible');

                whatsappField.setAttribute('required', 'true');
                emailField.setAttribute('required', 'false');
                // Set disabled attribute
                whatsappField.removeAttribute('disabled');
                emailField.setAttribute('disabled', 'disabled');
            } else {
                whatsappInput.classList.remove('visible');
                whatsappInput.classList.add('hidden');

                emailInput.classList.remove('hidden');
                emailInput.classList.add('visible');


                whatsappField.removeAttribute('required');
                emailField.setAttribute('required', 'true');
                // Set disabled attribute
                emailField.removeAttribute('disabled');
                whatsappField.setAttribute('disabled', 'disabled');

            }

        }
        document.addEventListener("DOMContentLoaded", function() {
            const input = document.querySelector("#number");

            // Function to initialize intl-tel-input
            function initializeIntlTelInput(initialCountry) {
                return window.intlTelInput(input, {
                    initialCountry: initialCountry,
                    separateDialCode: true,
                    // Uncomment the line below to use the utils script if needed
                    // utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.4/js/utils.js"
                });
            }

            // Function to get the selected country code
            function getCountryCode() {
                const countryData = iti.getSelectedCountryData();
                $('#countryCode').val(countryData.dialCode);
            }

            // Fetch the user's country code
            fetch('https://ipinfo.io?token=d54f029935345c') // Replace 'YOUR_ACCESS_TOKEN' with your IPinfo token
                .then(response => response.json())
                .then(data => {
                    const countryCode = data.country ? data.country.toLowerCase() :
                        'us'; // Default to 'us' if no country code is found
                    iti = initializeIntlTelInput(
                        countryCode); // Initialize intl-tel-input with the detected country code
                })
                .catch(error => {
                    console.error('Error fetching country code:', error);
                    iti = initializeIntlTelInput('us'); // Fallback to default country if there's an error
                });

            // Add event listener to the button
            document.querySelector("#send").addEventListener("click", getCountryCode);
        });
    </script>
@endsection
