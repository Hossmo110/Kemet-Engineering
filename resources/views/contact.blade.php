@extends('layouts.app')

@section('title', 'Contact Us | KEMET Engineering')

@section('content')


    {{-- =====================================================
     CONTACT HERO
     ===================================================== --}}

    <section class="contact-hero">

        <img src="{{ asset('images/contact-hero.jpg') }}" alt="KEMET Engineering Contact Us" class="contact-hero-image">

        <div class="contact-hero-overlay"></div>

        <div class="contact-hero-content">

            <h1>
                Contact Us
            </h1>

        </div>

    </section>


    {{-- =====================================================
     CONTACT INTRO + INFORMATION + FORM
     ===================================================== --}}

    <section class="contact-section">

        <div class="contact-container">

            {{-- INTRO --}}
            <div class="contact-intro">

                <span class="contact-label">
                    Get In Touch
                </span>

                <div class="contact-line"></div>

                <p>
                    At KEMET Engineering, we value meaningful connections
                    with our clients, partners, consultants and stakeholders.
                    Whether you are looking to collaborate on a project,
                    explore our capabilities or learn more about our
                    engineering solutions, our team is here to assist you.
                </p>

                <p>
                    We believe in building strong relationships driven by
                    trust, transparency and responsiveness. Reach out to us
                    and we will be happy to support your inquiry.
                </p>

            </div>


            {{-- CONTACT CONTENT --}}
            <div class="contact-main">

                <div class="contact-information">

                    <div class="contact-info-item">

                        <span class="contact-info-label">

                            <span class="contact-info-icon">

                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 15 15"
                                    aria-hidden="true">
                                    <path
                                        d="M5.17,6.24c.76,1.34,1.87,2.45,3.21,3.21l.72-1.01c.24-.33.69-.44,1.05-.24,1.14.62,2.4,1,3.72,1.11.42.03.75.39.75.81v3.62c0,.42-.31.76-.73.81-.43.04-.86.07-1.3.07C5.63,14.61,0,8.98,0,2.03c0-.44.02-.87.07-1.3.04-.41.39-.73.81-.73h3.62c.42,0,.78.33.81.75.1,1.32.48,2.58,1.11,3.72.2.36.09.81-.24,1.05l-1.01.72ZM3.12,5.7l1.54-1.1c-.44-.94-.74-1.95-.89-2.98H1.63c0,.14,0,.27,0,.41,0,6.05,4.91,10.96,10.96,10.96.14,0,.27,0,.41,0v-2.14c-1.03-.15-2.03-.45-2.98-.89l-1.1,1.54c-.45-.17-.88-.38-1.29-.61l-.05-.03c-1.59-.9-2.91-2.23-3.82-3.82l-.03-.05c-.23-.41-.44-.84-.61-1.29Z"
                                        fill="currentColor"></path>
                                </svg>

                            </span>

                            PHONE

                        </span>

                        <a href="tel:+971504655687">
                            +971504655687
                        </a>

                    </div>


                    <div class="contact-info-item">

                        <span class="contact-info-label">

                            <span class="contact-info-icon">

                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="20" viewBox="0 0 17 15"
                                    aria-hidden="true">
                                    <path
                                        d="M.81,0h14.61c.45,0,.81.36.81.81v12.99c0,.45-.36.81-.81.81H.81c-.45,0-.81-.36-.81-.81V.81c0-.45.36-.81.81-.81ZM14.61,3.44l-6.44,5.76L1.62,3.42v9.57h12.99V3.44ZM2.04,1.62l6.13,5.41L14.21,1.62H2.04Z"
                                        fill="currentColor"></path>
                                </svg>

                            </span>

                            EMAIL

                        </span>

                        <a href="mailto:info.kemet.uae@gmail.com">
                             info.kemet.uae@gmail.com
                        </a>

                    </div>


                    <div class="contact-info-item">

                        <span class="contact-info-label">

                            <span class="contact-info-icon">

                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="23" viewBox="0 0 15 18"
                                    aria-hidden="true">
                                    <path
                                        d="M7.31,17.64l-5.17-5.17C-.71,9.62-.71,4.99,2.14,2.14c2.85-2.85,7.48-2.85,10.33,0,2.85,2.85,2.85,7.48,2.85,10.33l-5.17,5.17ZM11.32,11.32c2.22-2.22,2.22-5.82,0-8.04-2.22-2.22-5.82-2.22-8.04,0-2.22,2.22-2.22,5.82,0,8.04l4.02,4.02,4.02-4.02ZM7.31,8.93c-.9,0-1.62-.73-1.62-1.62s.73-1.62,1.62-1.62,1.62.73,1.62,1.62-.73,1.62-1.62,1.62Z"
                                        fill="currentColor"></path>
                                </svg>

                            </span>

                            ADDRESS

                        </span>

                        <span class="contact-info-address">
                            Al Dewan Towers - Al Ajman - United Arab Emirates
                        </span>

                    </div>

                </div>


                {{-- CONTACT FORM --}}
                <div class="contact-form-wrapper">

                    <div class="contact-form-heading">

                        <span>
                            SEND US A MESSAGE
                        </span>

                        <h3>
                            How Can We Help You?
                        </h3>

                    </div>


                    {{-- SUCCESS MESSAGE --}}
                    @if (session('success'))
                        <div class="contact-success-message">
                            {{ session('success') }}
                        </div>
                    @endif


                    {{-- VALIDATION ERRORS --}}
                    @if ($errors->any())

                        <div class="contact-error-message">

                            <strong>
                                Please correct the following:
                            </strong>

                            <ul>

                                @foreach ($errors->all() as $error)
                                    <li>
                                        {{ $error }}
                                    </li>
                                @endforeach

                            </ul>

                        </div>

                    @endif


                    <form action="{{ route('contact.store') }}" method="POST" class="contact-form">

                        @csrf


                        {{-- FIRST NAME + LAST NAME --}}
                        <div class="contact-form-row">

                            <div class="contact-form-group">

                                <label for="first_name">
                                    First Name
                                </label>

                                <input type="text" id="first_name" name="first_name" value="{{ old('first_name') }}"
                                    placeholder="First Name" required>

                            </div>


                            <div class="contact-form-group">

                                <label for="last_name">
                                    Last Name
                                </label>

                                <input type="text" id="last_name" name="last_name" value="{{ old('last_name') }}"
                                    placeholder="Last Name" required>

                            </div>

                        </div>


                        {{-- EMAIL + PHONE --}}
                        <div class="contact-form-row">

                            <div class="contact-form-group">

                                <label for="email">
                                    Email
                                </label>

                                <input type="email" id="email" name="email" value="{{ old('email') }}"
                                    placeholder="Email Address" required>

                            </div>


                            <div class="contact-form-group">

                                <label for="phone">
                                    Phone / Mobile
                                </label>

                                <input type="tel" id="phone" name="phone" value="{{ old('phone') }}"
                                    placeholder="Phone Number">

                            </div>

                        </div>


                        {{-- SUBJECT --}}
                        <div class="contact-form-group">

                            <label for="subject">
                                Subject
                            </label>

                            <input type="text" id="subject" name="subject" value="{{ old('subject') }}"
                                placeholder="Purpose of Enquiry" required>

                        </div>


                        {{-- MESSAGE --}}
                        <div class="contact-form-group">

                            <label for="message">
                                Your Message
                            </label>

                            <textarea id="message" name="message" rows="6" placeholder="Tell us how we can help you..." required>{{ old('message') }}</textarea>

                        </div>


                        {{-- SUBMIT BUTTON --}}
                        <button type="submit" class="contact-submit-button">

                            <span>
                                Submit Form
                            </span>

                            <span class="contact-submit-arrow">
                                →
                            </span>

                        </button>

                    </form>

                </div>

            </div>

        </div>

    </section>


    {{-- =====================================================
     PAGE NAVIGATION
     ===================================================== --}}

    <section class="contact-page-navigation">

        <a href="{{ url('/businesses') }}" class="contact-page-nav-link contact-page-nav-prev">

            <span class="contact-page-nav-arrow">
                ←
            </span>

            <span>
                Our Businesses
            </span>

        </a>


        <a href="{{ url('/') }}" class="contact-page-nav-link contact-page-nav-next">

            <span>
                Home
            </span>

            <span class="contact-page-nav-arrow">
                →
            </span>

        </a>

    </section>


@endsection
