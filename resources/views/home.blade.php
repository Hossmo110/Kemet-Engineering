@extends('layouts.app')

@section('title', 'KEMET')

@section('content')

    <!-- Hero -->

   @include('sections.hero')

    <!-- About -->

    <section class="about-section">

        <div class="container">

            <div class="about-content">

                <span class="section-subtitle">
                    WHO WE ARE
                </span>

                <h2 class="section-title">
                    Building The Future Through Smart Engineering
                </h2>

                <div class="section-line"></div>

                <p class="section-text">

                    KEMET Engineering is a multidisciplinary engineering and construction company delivering innovative,
                    sustainable, and high-quality solutions across residential, commercial, industrial, infrastructure, and
                    smart building projects.

                </p>

                <p class="section-text">

                    Inspired by the timeless heritage of Ancient Egypt and driven by modern engineering, KEMET combines
                    technical excellence, innovation, and precision to deliver projects that create long-term value while
                    maintaining the highest standards of quality, safety, and sustainability.

                </p>

            </div>

            <div class="about-stats">

                <div class="stat-box">
                    <h3>150+</h3>
                    <p>Projects Completed</p>
                </div>

                <div class="stat-box">
                    <h3>50+</h3>
                    <p>Engineering Experts</p>
                </div>

                <div class="stat-box">
                    <h3>12+</h3>
                    <p>Years Experience</p>
                </div>

                <div class="stat-box">
                    <h3>100%</h3>
                    <p>Client Satisfaction</p>
                </div>

            </div>

        </div>

    </section>


    <!-- Businesses -->

    <section class="business-section">

    <div class="container-fluid px-5">

        <div class="section-heading">

            <span class="section-subtitle">OUR BUSINESSES</span>

            <h2 class="section-title">
                Engineering Solutions Across Every Sector
            </h2>

            <div class="section-line"></div>

            <p class="section-description">
                KEMET Engineering delivers integrated engineering solutions through a diverse portfolio of specialized services, ensuring quality, innovation and sustainability in every project.
            </p>

        </div>

        <div class="row g-4">

            <!-- Card 1 -->
            <div class="col-lg-4 col-md-6">

                <div class="business-card">

                    <img src="{{ asset('images/business1.jpg') }}" alt="Construction">

                    <div class="business-overlay">

                        <h3>Construction</h3>

                        <p>
                            High-quality residential, commercial and industrial construction services.
                        </p>

                    </div>

                </div>

            </div>

            <!-- Card 2 -->
            <div class="col-lg-4 col-md-6">

                <div class="business-card">

                    <img src="{{ asset('images/business2.jpg') }}" alt="Infrastructure">

                    <div class="business-overlay">

                        <h3>Infrastructure</h3>

                        <p>
                            Roads, utilities and infrastructure projects built to global standards.
                        </p>

                    </div>

                </div>

            </div>

            <!-- Card 3 -->
            <div class="col-lg-4 col-md-6">

                <div class="business-card">

                    <img src="{{ asset('images/business3.jpg') }}" alt="Smart Buildings">

                    <div class="business-overlay">

                        <h3>Smart Buildings</h3>

                        <p>
                            Innovative smart technologies for modern and sustainable buildings.
                        </p>

                    </div>

                </div>

            </div>

            <!-- Card 4 -->
            <div class="col-lg-4 col-md-6">

                <div class="business-card">

                    <img src="{{ asset('images/business4.jpg') }}" alt="Engineering">

                    <div class="business-overlay">

                        <h3>Engineering Consultancy</h3>

                        <p>
                            Professional engineering studies and technical consulting solutions.
                        </p>

                    </div>

                </div>

            </div>

            <!-- Card 5 -->
            <div class="col-lg-4 col-md-6">

                <div class="business-card">

                    <img src="{{ asset('images/business5.jpg') }}" alt="Project Management">

                    <div class="business-overlay">

                        <h3>Project Management</h3>

                        <p>
                            Efficient planning and management from concept to completion.
                        </p>

                    </div>

                </div>

            </div>

            <!-- Card 6 -->
            <div class="col-lg-4 col-md-6">

                <div class="business-card">

                    <img src="{{ asset('images/business6.jpg') }}" alt="Maintenance">

                    <div class="business-overlay">

                        <h3>Maintenance</h3>

                        <p>
                            Comprehensive maintenance solutions for long-term operational excellence.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


    <!-- Projects -->

    <section class="projects-section">

    <div class="container-fluid px-5">

        <div class="section-heading">

            <span class="section-subtitle">LATEST PROJECTS</span>

            <h2 class="section-title">
                Our Featured Projects
            </h2>

            <div class="section-line"></div>

            <p class="section-description">
                Discover our latest engineering and construction projects delivered with excellence,
                innovation and quality.
            </p>

        </div>

        <div class="swiper projectsSwiper">

            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="project-card">
                        <img src="{{ asset('images/project1.jpg') }}">
                        <div class="project-overlay">
                            <span>Commercial</span>
                            <h3>Business Tower</h3>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="project-card">
                        <img src="{{ asset('images/project2.jpg') }}">
                        <div class="project-overlay">
                            <span>Infrastructure</span>
                            <h3>Modern Bridge</h3>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="project-card">
                        <img src="{{ asset('images/project3.jpg') }}">
                        <div class="project-overlay">
                            <span>Residential</span>
                            <h3>Luxury Compound</h3>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="project-card">
                        <img src="{{ asset('images/project4.jpg') }}">
                        <div class="project-overlay">
                            <span>Industrial</span>
                            <h3>Industrial Plant</h3>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="project-card">
                        <img src="{{ asset('images/project5.jpg') }}">
                        <div class="project-overlay">
                            <span>Healthcare</span>
                            <h3>Medical Center</h3>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="project-card">
                        <img src="{{ asset('images/project6.jpg') }}">
                        <div class="project-overlay">
                            <span>Education</span>
                            <h3>University Campus</h3>
                        </div>
                    </div>
                </div>

            </div>

        </div>

       <div class="projects-navigation">

    <button
        class="project-arrow project-prev"
        type="button"
        aria-label="Previous project"
    >
        <svg
            viewBox="0 0 17 7"
            xmlns="http://www.w3.org/2000/svg"
            aria-hidden="true"
        >
            <path
                d="M1.3 3.5H16.8"
                fill="none"
                stroke="currentColor"
                stroke-width="1"
            />

            <path
                d="M3.8 6.5L.8 3.5L3.8 .5"
                fill="none"
                stroke="currentColor"
                stroke-width="1"
            />
        </svg>
    </button>


    <button
        class="project-arrow project-next"
        type="button"
        aria-label="Next project"
    >
        <svg
            viewBox="0 0 17 7"
            xmlns="http://www.w3.org/2000/svg"
            aria-hidden="true"
        >
            <path
                d="M15.7 3.5H.2"
                fill="none"
                stroke="currentColor"
                stroke-width="1"
            />

            <path
                d="M13.2 .5L16.2 3.5L13.2 6.5"
                fill="none"
                stroke="currentColor"
                stroke-width="1"
            />
        </svg>
    </button>

</div>
</section>


    <!-- Clients -->

    <section class="clients-section">

    <div class="container">

        <div class="clients-heading">

            <span class="clients-subtitle">
                OUR CLIENTS
            </span>

            <h2 class="clients-title">
                Trusted By Leading Companies
            </h2>

            <div class="clients-line"></div>

        </div>

    </div>


    <div class="clients-slider">

        <div class="swiper clientsSwiper">

            <div class="swiper-wrapper">

                <!-- Client 1 -->
                <div class="swiper-slide">
                    <div class="client-logo">
                        <img
                            src="{{ asset('images/client1.png') }}"
                            alt="Client 1"
                        >
                    </div>
                </div>

                <!-- Client 2 -->
                <div class="swiper-slide">
                    <div class="client-logo">
                        <img
                            src="{{ asset('images/client2.png') }}"
                            alt="Client 2"
                        >
                    </div>
                </div>

                <!-- Client 3 -->
                <div class="swiper-slide">
                    <div class="client-logo">
                        <img
                            src="{{ asset('images/client3.png') }}"
                            alt="Client 3"
                        >
                    </div>
                </div>

                <!-- Client 4 -->
                <div class="swiper-slide">
                    <div class="client-logo">
                        <img
                            src="{{ asset('images/client4.png') }}"
                            alt="Client 4"
                        >
                    </div>
                </div>

                <!-- Client 5 -->
                <div class="swiper-slide">
                    <div class="client-logo">
                        <img
                            src="{{ asset('images/client5.png') }}"
                            alt="Client 5"
                        >
                    </div>
                </div>

                <!-- Client 6 -->
                <div class="swiper-slide">
                    <div class="client-logo">
                        <img
                            src="{{ asset('images/client6.png') }}"
                            alt="Client 6"
                        >
                    </div>
                </div>

                <!-- Client 7 -->
                <div class="swiper-slide">
                    <div class="client-logo">
                        <img
                            src="{{ asset('images/client7.png') }}"
                            alt="Client 7"
                        >
                    </div>
                </div>

                <!-- Client 8 -->
                <div class="swiper-slide">
                    <div class="client-logo">
                        <img
                            src="{{ asset('images/client8.png') }}"
                            alt="Client 8"
                        >
                    </div>
                </div>

            </div>

        </div>


        <!-- Navigation Arrows -->

        <div class="clients-navigation">

            <button
                class="client-arrow client-prev"
                type="button"
                aria-label="Previous client"
            >
                <svg
                    viewBox="0 0 17 7"
                    xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true"
                >
                    <path
                        d="M1.3 3.5H16.8"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1"
                    />

                    <path
                        d="M3.8 6.5L.8 3.5L3.8 .5"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1"
                    />
                </svg>
            </button>


            <button
                class="client-arrow client-next"
                type="button"
                aria-label="Next client"
            >
                <svg
                    viewBox="0 0 17 7"
                    xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true"
                >
                    <path
                        d="M15.7 3.5H.2"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1"
                    />

                    <path
                        d="M13.2 .5L16.2 3.5L13.2 6.5"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1"
                    />
                </svg>
            </button>

        </div>

    </div>

</section>


    <!-- News -->

    <section class="latest-news-section">

    <div class="container-fluid px-5">

        <div class="news-heading">

            <span class="news-subtitle">
                LATEST NEWS
            </span>

            <h2 class="news-title">
                Latest News & Updates
            </h2>

            <div class="news-line"></div>

            <p class="news-description">
                Stay updated with our latest news, achievements and developments.
            </p>

        </div>


        <div class="news-grid">

            {{-- News 1 --}}
            <article class="news-card">

                <img src="{{ asset('images/news1.jpg') }}"
                    alt="ECC Contracting Wins Digital Construction Project of the Year">

                <div class="news-overlay"></div>

                <div class="news-content">

                    <h3>
                        KEMET Contracting Wins “Digital Construction Project of the Year – Residential” for Seagate
                    </h3>
                    <a href="#" class="news-read-more">
                        <span>Read More</span>

                        <svg viewBox="0 0 30 12" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <line x1="1" y1="6" x2="27" y2="6" />
                            <polyline points="21,1 27,6 21,11" />
                        </svg>
                    </a>

                </div>

            </article>


            {{-- News 2 --}}
            <article class="news-card">

                <img src="{{ asset('images/news2.jpg') }}" alt="ECC Contracting Latest News">

                <div class="news-overlay"></div>

                <div class="news-content">

                    <h3>
                        KEMET Contracting Delivers Excellence Through Innovation and Quality
                    </h3>
                    <a href="#" class="news-read-more">
                        <span>Read More</span>

                        <svg viewBox="0 0 30 12" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <line x1="1" y1="6" x2="27" y2="6" />
                            <polyline points="21,1 27,6 21,11" />
                        </svg>
                    </a>

                </div>

            </article>


            {{-- News 3 --}}
            <article class="news-card">

                <img src="{{ asset('images/news3.jpg') }}" alt="ECC Contracting Project">

                <div class="news-overlay"></div>

                <div class="news-content">

                    <h3>
                        New Engineering Projects Strengthen Our Commitment to Excellence
                    </h3>
                    <a href="#" class="news-read-more">
                        <span>Read More</span>

                        <svg viewBox="0 0 30 12" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <line x1="1" y1="6" x2="27" y2="6" />
                            <polyline points="21,1 27,6 21,11" />
                        </svg>
                    </a>

                </div>

            </article>


            {{-- News 4 --}}
            <article class="news-card">

                <img src="{{ asset('images/news4.jpg') }}" alt="ECC Contracting Achievement">

                <div class="news-overlay"></div>

                <div class="news-content">

                    <h3>
                        Building The Future Through Sustainable Engineering Solutions
                    </h3>
                    <a href="#" class="news-read-more">
                        <span>Read More</span>

                        <svg viewBox="0 0 30 12" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <line x1="1" y1="6" x2="27" y2="6" />
                            <polyline points="21,1 27,6 21,11" />
                        </svg>
                    </a>

                </div>

            </article>

        </div>

    </div>

</section>


    <!-- Careers -->

    <!--==========================
CAREERS
==========================-->

<section class="careers-section">

    <div class="careers-image">

        <img
            src="{{ asset('images/careers.jpg') }}"
            alt="Build Your Future With Us"
        >

        <div class="careers-overlay"></div>

        <div class="careers-content">

            <span class="careers-subtitle">
                CAREERS
            </span>

            <h2>
                Build Your Future With Us
            </h2>

            <p>
                We’re always looking for talented individuals who are ready
                to make an impact. Explore opportunities to grow your career
                with a team that values innovation, collaboration, and excellence.
            </p>

            <a href="#" class="careers-btn">
                Explore Careers
                <span>→</span>
            </a>

        </div>

    </div>


    {{-- =========================================================
     PAGE NAVIGATION
     ========================================================= --}}
    <section class="businesses-page-navigation">

        <a href="{{ url('/about-us') }}" class="businesses-page-nav-link">



        <a href="{{ url('/innovation') }}" class="businesses-page-nav-link">

            <span>
                About Us
            </span>

            <span class="businesses-page-nav-arrow">
                →
            </span>

        </a>


</section>


    <!-- Footer -->



@endsection
