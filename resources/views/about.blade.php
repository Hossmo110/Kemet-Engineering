@extends('layouts.app')

@section('title', 'About Us')

@section('content')

    {{-- =========================================================
         ABOUT HERO
         ========================================================= --}}

    <section class="businesses-hero">

        <img src="{{ asset('images/about-hero.jpg') }}" alt="KEMET Engineering About Us" class="businesses-hero-image">

        <div class="businesses-hero-overlay"></div>

        <div class="businesses-hero-content">

            <h1>
                Forging A Legacy Rooted In Purpose </h1>

        </div>

    </section>

    {{-- =========================================================
         GROUP OVERVIEW
         ========================================================= --}}
    <section class="group-overview-section">

        <div class="container">

            <div class="group-overview-heading">
                <h2>Group Overview</h2>
                <div class="heading-line"></div>
            </div>

            <p class="group-overview-text">
                KEMET ENGINEERING is a leading engineering and construction company
                committed to delivering innovative, reliable, and high-quality
                solutions across diverse sectors. Through expertise, technology,
                and strong professional standards, we create sustainable value
                for our clients and contribute to the development of the communities
                we serve.
            </p>


            {{-- =====================================================
                 MISSION / VISION / VALUES
                 ===================================================== --}}
            <div class="about-pillars">

                {{-- Mission --}}
                <div class="about-pillar">

                    <div class="pillar-icon">

                        <svg xmlns="http://www.w3.org/2000/svg" width="132" height="132" viewBox="0 0 132 132"
                            fill="none">

                            <path
                                d="M130.778 28.8893L111.657 27.82L115.652 23.8254C117.713 21.7642 117.713 18.4102 115.652 16.3489C113.589 14.289 110.237 14.289 108.176 16.3489L104.182 20.3435L103.112 1.22239C103.084 0.713207 102.758 0.266936 102.282 0.0848555C101.806 -0.0958921 101.266 0.0166085 100.905 0.379437L88.0542 13.2301C80.1021 9.49279 71.2559 7.35821 61.9023 7.35821C27.7693 7.35821 0 35.1275 0 69.26C0 103.394 27.7693 131.163 61.9023 131.163C96.0353 131.163 123.805 103.394 123.805 69.26C123.805 60.3551 121.865 51.9128 118.456 44.2614L131.621 31.0961C131.982 30.736 132.097 30.1964 131.915 29.7197C131.733 29.242 131.288 28.9173 130.778 28.8893ZM102.05 60.1317C102.158 60.1317 102.259 60.096 102.362 60.0699C103.035 63.029 103.413 66.0993 103.413 69.26C103.413 92.1499 84.7914 110.772 61.9023 110.772C39.0132 110.772 20.3912 92.1496 20.3912 69.26C20.3912 46.3714 39.0132 27.7494 61.9023 27.7494C65.4671 27.7494 68.9152 28.2322 72.2167 29.085C71.9831 29.3412 71.852 29.6752 71.8712 30.0231L72.6826 44.5354C69.3796 43.0775 65.7404 42.2502 61.9023 42.2502C47.009 42.2502 34.8931 54.3662 34.8931 69.26C34.8931 84.1538 47.009 96.2698 61.9023 96.2698C76.7956 96.2698 88.9121 84.1538 88.9121 69.26C88.9121 65.7285 88.2029 62.3719 86.9502 59.2888L101.978 60.129C102.002 60.1304 102.026 60.1317 102.05 60.1317ZM84.0729 59.1277C85.504 62.2148 86.3238 65.6373 86.3238 69.26C86.3238 82.7257 75.3685 93.6814 61.9023 93.6814C48.4366 93.6814 37.4814 82.7257 37.4814 69.26C37.4814 55.7943 48.4366 44.8385 61.9023 44.8385C65.8452 44.8385 69.5537 45.8057 72.8474 47.481L73.0697 51.455L65.6516 58.8731C58.4143 56.2046 50.829 61.6553 50.829 69.2597C50.829 75.3652 55.7964 80.3331 61.9023 80.3331C68.9365 80.3331 74.3022 73.7782 72.6874 66.7898L80.547 58.9302L84.0729 59.1277ZM60.2998 71.7017C62.355 73.7568 65.6975 73.78 67.7758 71.7017L70.3766 69.1008C70.475 73.8813 66.6097 77.745 61.9023 77.745C57.2237 77.745 53.4173 73.9384 53.4173 69.26C53.4173 63.8848 58.3932 59.8593 63.5693 60.9557L60.2998 64.2252C58.2391 66.2862 58.2391 69.6404 60.2998 71.7017ZM110.006 18.1788C111.057 17.1274 112.769 17.1274 113.822 18.1788C114.873 19.2316 114.873 20.9428 113.822 21.9956C70.4326 65.3841 110.663 25.1544 65.9457 69.8718C64.9252 70.8905 63.1483 70.8891 62.1297 69.8718C61.0783 68.8191 61.0783 67.1078 62.1297 66.0551C108.927 19.2905 7.4645 120.722 110.006 18.1788ZM101.726 22.7985L75.5248 49L74.4877 30.4563L100.689 4.25538L101.726 22.7985ZM121.217 69.26C121.217 101.966 94.608 128.575 61.9023 128.575C29.1966 128.575 2.58805 101.966 2.58805 69.26C2.58805 36.5543 29.1966 9.94653 61.9023 9.94653C70.5329 9.94653 78.7196 11.8308 86.1198 15.1645L74.3264 26.9579C70.3844 25.7939 66.2173 25.1613 61.9023 25.1613C37.5856 25.1613 17.8028 44.9436 17.8028 69.26C17.8028 93.5764 37.5856 113.36 61.9023 113.36C86.219 113.36 106.002 93.5767 106.002 69.26C106.002 65.4235 105.483 61.7113 104.556 58.1616L116.509 46.2083C119.523 53.299 121.217 61.08 121.217 69.26ZM101.544 57.513L83.0018 56.4754L109.203 30.2745L127.746 31.3121L101.544 57.513Z"
                                fill="currentColor" />

                        </svg>

                    </div>

                    <h3>Mission</h3>

                    <p>
                        To deliver pioneering, technology-driven engineering and
                        construction solutions while maintaining the highest
                        standards of quality, efficiency, and reliability for
                        our clients and partners.
                    </p>

                </div>


                {{-- Vision --}}
                <div class="about-pillar">

                    <div class="pillar-icon">

                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 131 131" fill="none">

                            <path d="M65.5 2.55859V19.4453" stroke="currentColor" stroke-width="4" stroke-linecap="round" />

                            <path d="M65.5 111.555V128.441" stroke="currentColor" stroke-width="4" stroke-linecap="round" />

                            <path d="M16.9609 22.0782L27.8171 32.9343" stroke="currentColor" stroke-width="4"
                                stroke-linecap="round" />

                            <path d="M103.183 100.624L114.039 111.48" stroke="currentColor" stroke-width="4"
                                stroke-linecap="round" />

                            <path d="M114.039 22.0782L103.183 32.9343" stroke="currentColor" stroke-width="4"
                                stroke-linecap="round" />

                            <path d="M27.817 100.624L16.9609 111.48" stroke="currentColor" stroke-width="4"
                                stroke-linecap="round" />

                            <path
                                d="M121.789 65.5C121.789 65.5 99.4142 98.7617 65.5 98.7617C31.5858 98.7617 9.21094 65.5 9.21094 65.5C9.21094 65.5 31.5858 32.2383 65.5 32.2383C99.4142 32.2383 121.789 65.5 121.789 65.5Z"
                                stroke="currentColor" stroke-width="4" stroke-linecap="round" />

                            <path
                                d="M65.5 73.1758C61.2681 73.1758 57.8242 69.7319 57.8242 65.5C57.8242 61.2681 61.2681 57.8242 65.5 57.8242C69.7319 57.8242 73.1758 61.2681 73.1758 65.5C73.1758 69.7319 69.7319 73.1758 65.5 73.1758Z"
                                stroke="currentColor" stroke-width="4" />

                        </svg>

                    </div>

                    <h3>Vision</h3>

                    <p>
                        To be a trusted engineering partner recognized for
                        excellence, innovation, reliability, and the ability
                        to deliver lasting value through every project.
                    </p>

                </div>


                {{-- Values --}}
                <div class="about-pillar">

                    <div class="pillar-icon">

                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 131 131" fill="none">

                            <path
                                d="M130.434 59.6822L102.827 29.4978L65.2612 28.9241H29.0341L0.293839 57.2845L35.9623 98.0232L61.2764 119.387L42.0499 104.514L63.84 127.75C64.6 128.5 65.8 128.5 66.65 127.75L130.228 59.953C130.3 59.85 130.38 59.76 130.434 59.6822ZM49.9416 56.7108L65.2442 34.2661L80.5468 56.7108H49.9416ZM124.225 56.7108H87.6559L101.799 33.9423L124.225 56.7108ZM97.9922 32.774L84.1168 55.1117L68.8872 32.774H97.9922ZM28.6893 33.9423L42.8325 56.7108H6.26356L28.6893 33.9423ZM81.6542 60.5637L65.2442 119.28L48.8342 60.5637H81.6542ZM69.212 119.386L85.653 60.5607H124.379L69.212 119.386Z"
                                fill="currentColor" />

                            <path
                                d="M65.2442 14.0233C66.3076 14.0233 67.1691 13.1618 67.1691 12.0984V4.7394C67.1691 3.67598 66.3076 2.81445 65.2442 2.81445C64.1807 2.81445 63.3192 3.67598 63.3192 4.7394V12.0984C63.3192 13.1608 64.1807 14.0233 65.2442 14.0233Z"
                                fill="currentColor" />

                            <path
                                d="M44.2507 16.0611C44.6265 16.4369 45.1192 16.6248 45.612 16.6248C46.1047 16.6248 46.5974 16.4369 46.9732 16.0611C47.7248 15.3086 47.7248 14.0902 46.9732 13.3376L41.7701 8.13449C41.0185 7.3829 39.7992 7.3829 39.0476 8.13449C38.296 8.88708 38.296 10.1054 39.0476 10.857L44.2507 16.0611Z"
                                fill="currentColor" />

                            <path
                                d="M84.8765 16.6248C85.3692 16.6248 85.8619 16.4369 86.2377 16.0611L91.4409 10.858C92.1935 10.1054 92.1935 8.88708 91.4409 8.13449C90.6893 7.3829 89.471 7.3829 88.7184 8.13449L83.5152 13.3386C82.7636 14.0902 82.7636 15.3096 83.5152 16.0611C83.891 16.4369 84.3838 16.6248 84.8765 16.6248Z"
                                fill="currentColor" />

                        </svg>

                    </div>

                    <h3>Values</h3>

                    <p>
                        We prioritize integrity, trust, innovation, knowledge
                        sharing, quality, and continuous improvement while
                        building strong and lasting relationships with our
                        clients, partners, and communities.
                    </p>

                </div>

            </div>

        </div>

    </section>


    {{-- =========================================================
         OUR APPROACH
         ========================================================= --}}
    <section class="our-approach-section">

        <div class="container">

            <div class="our-approach-heading">

                <h2>Our Approach</h2>

                <div class="approach-heading-line"></div>

                <p>
                    We combine engineering expertise, innovation, and collaboration
                    to deliver reliable solutions that create lasting value.
                </p>

            </div>


            <div class="our-approach-grid">

                {{-- Innovation --}}
                <div class="approach-item">

                    <img src="{{ asset('images/about/approach-innovation.jpg') }}" alt="Innovation">

                    <div class="approach-overlay">

                        <div class="approach-content">

                            <h3>Innovation</h3>

                            <p>
                                We embrace innovative ideas and modern technologies
                                to develop smarter and more effective engineering solutions.
                            </p>

                        </div>

                    </div>

                </div>


                {{-- Excellence --}}
                <div class="approach-item">

                    <img src="{{ asset('images/about/approach-excellence.jpg') }}" alt="Excellence">

                    <div class="approach-overlay">

                        <div class="approach-content">

                            <h3>Excellence</h3>

                            <p>
                                We are committed to delivering high-quality work
                                with attention to every detail and the highest
                                professional standards.
                            </p>

                        </div>

                    </div>

                </div>


                {{-- Collaboration --}}
                <div class="approach-item">

                    <img src="{{ asset('images/about/approach-collaboration.jpg') }}" alt="Collaboration">

                    <div class="approach-overlay">

                        <div class="approach-content">

                            <h3>Collaboration</h3>

                            <p>
                                We work closely with our clients and partners
                                to understand their needs and achieve successful results.
                            </p>

                        </div>

                    </div>

                </div>


                {{-- Sustainability --}}
                <div class="approach-item">

                    <img src="{{ asset('images/about/approach-sustainability.jpg') }}" alt="Sustainability">

                    <div class="approach-overlay">

                        <div class="approach-content">

                            <h3>Sustainability</h3>

                            <p>
                                We consider long-term impact and responsible
                                practices in every solution we deliver.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- =========================================================
         OUR EXPERTISE
         ========================================================= --}}
    <section class="our-expertise-section">

        <div class="container">

            <div class="our-expertise-heading">

                <h2>Our Expertise</h2>

                <div class="expertise-heading-line"></div>

                <p>
                    Our capabilities bring together engineering knowledge,
                    technical expertise, and practical solutions across
                    a wide range of projects and sectors.
                </p>

            </div>


            <div class="our-expertise-grid">

                {{-- Engineering & Design --}}
                <div class="expertise-item">

                    <img src="{{ asset('images/about/expertise-engineering.jpg') }}" alt="Engineering and Design">

                    <div class="expertise-content">

                        <h3>Engineering & Design</h3>

                        <p>
                            Engineering and design solutions developed with
                            precision, technical expertise, and practical
                            project requirements in mind.
                        </p>

                    </div>

                </div>


                {{-- Construction --}}
                <div class="expertise-item">

                    <img src="{{ asset('images/about/expertise-construction.jpg') }}" alt="Construction">

                    <div class="expertise-content">

                        <h3>Construction</h3>

                        <p>
                            Reliable construction solutions focused on
                            quality, efficiency, safety, and successful
                            project execution.
                        </p>

                    </div>

                </div>


                {{-- Infrastructure --}}
                <div class="expertise-item">

                    <img src="{{ asset('images/about/expertise-infrastructure.jpg') }}" alt="Infrastructure">

                    <div class="expertise-content">

                        <h3>Infrastructure</h3>

                        <p>
                            Practical infrastructure solutions designed
                            to support sustainable development and
                            long-term performance.
                        </p>

                    </div>

                </div>


                {{-- Project Management --}}
                <div class="expertise-item">

                    <img src="{{ asset('images/about/expertise-project-management.jpg') }}" alt="Project Management">

                    <div class="expertise-content">

                        <h3>Project Management</h3>

                        <p>
                            Structured project management that brings
                            together planning, coordination, resources,
                            and delivery.
                        </p>

                    </div>

                </div>


                {{-- Technical Solutions --}}
                <div class="expertise-item">

                    <img src="{{ asset('images/about/expertise-technical-solutions.jpg') }}" alt="Technical Solutions">

                    <div class="expertise-content">

                        <h3>Technical Solutions</h3>

                        <p>
                            Innovative technical approaches tailored
                            to solve complex engineering challenges
                            and project requirements.
                        </p>

                    </div>

                </div>


                {{-- Industrial Services --}}
                <div class="expertise-item">

                    <img src="{{ asset('images/about/expertise-industrial-services.jpg') }}" alt="Industrial Services">

                    <div class="expertise-content">

                        <h3>Industrial Services</h3>

                        <p>
                            Professional industrial services delivered
                            with a focus on reliability, performance,
                            and operational efficiency.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- =========================================================
         OUR COMMITMENT & RESPONSIBILITY
         ========================================================= --}}
    <section class="commitment-responsibility-section">

        <div class="commitment-responsibility-background">

            <img src="{{ asset('images/about/commitment-responsibility.jpg') }}"
                alt="KEMET Engineering Commitment and Responsibility">

            <div class="commitment-responsibility-overlay"></div>

            <div class="commitment-responsibility-content">

                <span class="commitment-responsibility-label">
                    OUR COMMITMENT & RESPONSIBILITY
                </span>

                <h2>
                    Engineering with Purpose.
                    <span>Building with Responsibility.</span>
                </h2>

                <div class="commitment-responsibility-line"></div>

                <p>
                    At KEMET ENGINEERING, we are committed to delivering reliable
                    engineering solutions while creating positive and sustainable
                    impact for our clients, people, communities, and the environment.
                </p>


                <div class="commitment-responsibility-values">

                    <div class="commitment-responsibility-value">

                        <h3>Quality & Reliability</h3>

                        <p>
                            Delivering dependable solutions with high professional
                            and quality standards.
                        </p>

                    </div>


                    <div class="commitment-responsibility-value">

                        <h3>People & Community</h3>

                        <p>
                            Building strong relationships and contributing positively
                            to the communities we serve.
                        </p>

                    </div>


                    <div class="commitment-responsibility-value">

                        <h3>Sustainability</h3>

                        <p>
                            Promoting responsible practices and considering long-term
                            environmental impact.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- =========================================================
         PAGE NAVIGATION
         ========================================================= --}}
    <section class="page-navigation-section">

        <div class="page-navigation">

            {{-- Previous Page --}}
            <a href="{{ url('/') }}" class="page-nav-link page-nav-prev">

                <span class="page-nav-arrow">
                    ←
                </span>

                <span class="page-nav-label">
                    Home
                </span>

            </a>


            {{-- Next Page --}}
            <a href="{{ url('/our-businesses') }}" class="page-nav-link page-nav-next">

                <span class="page-nav-label">
                    Our Businesses
                </span>

                <span class="page-nav-arrow">
                    →
                </span>

            </a>

        </div>

    </section>

@endsection
