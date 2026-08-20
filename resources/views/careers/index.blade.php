
@extends('layouts.app')

@section('title', 'Careers | KEMET Engineering')

@section('content')

{{-- =====================================================
     CAREERS HERO
     ===================================================== --}}

<section class="careers-hero">

    <img
        src="{{ asset('images/careers-hero.jpg') }}"
        alt="Careers at KEMET Engineering"
        class="careers-hero-image"
    >

    <div class="careers-hero-overlay"></div>

    <div class="careers-hero-content">

        <span>
            CAREERS
        </span>

        <div class="careers-hero-line"></div>

        <h1>
            Build Your Future
            <br>
            With KEMET
        </h1>

        <p>
            Join a team of talented professionals shaping the future
            through engineering, innovation and excellence.
        </p>

    </div>

</section>


{{-- =====================================================
     CAREERS INTRO
     ===================================================== --}}

<section class="careers-intro">

    <div class="careers-intro-content">

        <span class="careers-label">
            JOIN OUR TEAM
        </span>

        <h2>
            Grow With Us
        </h2>

        <div class="careers-line"></div>

        <p>
            At KEMET Engineering, we believe that our people are
            the foundation of everything we achieve. We are always
            looking for talented, motivated professionals who are
            ready to grow, innovate and make a real impact.
        </p>

    </div>

</section>


{{-- =====================================================
     CURRENT OPENINGS
     ===================================================== --}}

<section class="careers-jobs">

    <div class="careers-section-heading">

        <span>
            CURRENT OPPORTUNITIES
        </span>

        <h2>
            Explore Careers
        </h2>

        <div class="careers-heading-line"></div>

        <p>
            Discover our current opportunities and find the role
            that matches your skills and ambitions.
        </p>

    </div>


    {{-- =================================================
         JOBS GRID
         ================================================= --}}

    <div class="jobs-grid">

        @forelse($jobs as $job)

            <article class="job-card">

                <div class="job-card-top">

                    <span class="job-number">
                        {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}
                    </span>

                    <h3>
                        {{ $job['title'] }}
                    </h3>

                    <div class="job-location">
                        {{ $job['location'] }}
                    </div>

                    <p>
                        {{ $job['description'] }}
                    </p>

                </div>


                <div class="job-card-bottom">

                    <a
                        href="#"
                        class="apply-btn"
                    >
                        APPLY NOW
                        <span>→</span>
                    </a>

                </div>

            </article>

        @empty

            <div class="no-jobs">

                <span>
                    CAREERS
                </span>

                <h3>
                    No Current Openings
                </h3>

                <p>
                    We don't have any open positions at the moment.
                    Please check back soon for new opportunities.
                </p>

            </div>

        @endforelse

    </div>

</section>


{{-- =====================================================
     CAREERS CTA
     ===================================================== --}}

<section class="careers-cta">

    <div class="careers-cta-content">

        <span>
            YOUR NEXT STEP
        </span>

        <h2>
            Ready to Build the Future?
        </h2>

        <div class="careers-cta-line"></div>

        <p>
            If you are passionate about engineering, innovation and
            creating meaningful solutions, we would love to hear from you.
        </p>

        <a
            href="{{ url('/contact-us') }}"
            class="careers-contact-btn"
        >
            GET IN TOUCH
            <span>→</span>
        </a>

    </div>

</section>


{{-- =====================================================
     PAGE NAVIGATION
     ===================================================== --}}

<section class="page-navigation-section careers-navigation">

    <div class="page-navigation">

        <a
            href="{{ url('/csr') }}"
            class="page-nav-link page-nav-prev"
        >

            <span class="page-nav-arrow">
                ←
            </span>

            <span class="page-nav-label">
                CSR
            </span>

        </a>


        <a
            href="{{ url('/contact-us') }}"
            class="page-nav-link page-nav-next"
        >

            <span class="page-nav-label">
                Contact Us
            </span>

            <span class="page-nav-arrow">
                →
            </span>

        </a>

    </div>

</section>

@endsection

