@extends('layouts.app')

@section('title', 'Our Businesses')

@section('content')

    {{-- =========================================================
     BUSINESSES HERO
     ========================================================= --}}
    <section class="businesses-hero">

        <img src="{{ asset('images/businesses-hero.jpg') }}" alt="KEMET Engineering Businesses" class="businesses-hero-image">

        <div class="businesses-hero-overlay"></div>

        <div class="businesses-hero-content">

            <h1>
                Pioneering Solutions For Scalable Urban Growth
            </h1>

        </div>

    </section>


    {{-- =========================================================
     OUR BUSINESSES INTRO
     ========================================================= --}}
    <section class="businesses-intro-section">

        <div class="businesses-container">

            <div class="businesses-intro-label">
                OUR BUSINESS
            </div>

            <h2 class="businesses-intro-title">
                Engineering Expertise .
                <span> Integrated Solutions</span>
            </h2>

            <div class="businesses-intro-line"></div>

            <div class="businesses-intro-text">

                <p>
                    Every project presents unique technical demands —
                    evolving requirements, demanding timelines, technical
                    complexity, and the need for precision and reliable execution.
                </p>

                <p>
                    At KEMET ENGINEERING, we bring together engineering
                    expertise, construction capabilities, technical solutions,
                    and project management to provide an integrated approach
                    to project delivery.
                </p>

                <p>
                    Our businesses are built around a common commitment to
                    engineering excellence, practical execution, quality,
                    innovation, and long-term value for our clients.
                </p>

            </div>

        </div>

    </section>


    {{-- =========================================================
     BUSINESS 01
     ========================================================= --}}
    <section class="business-company business-company-dark">

        <div class="business-company-container">

            <div class="business-company-media">

                <div class="business-company-main-image">

                    <img src="{{ asset('images/businesses/engineering-design.jpg') }}" alt="Engineering and Design">

                </div>

                <div class="business-company-image-caption">
                    ENGINEERING & DESIGN
                </div>

            </div>


            <div class="business-company-content">


                <h2>
                    Engineering
                    <span>& Design</span>
                </h2>

                <div class="business-company-line"></div>

                <p>
                    KEMET ENGINEERING provides integrated engineering and
                    design solutions developed around project requirements,
                    technical performance, and practical execution.
                </p>

                <p>
                    Our engineering approach combines technical knowledge,
                    coordination, planning, and attention to detail to support
                    projects from concept and design through successful delivery.
                </p>


                <div class="business-company-info">

                    <div class="business-info-item">

                        <strong>
                            CORE
                        </strong>

                        <span>
                            Engineering
                        </span>

                    </div>


                    <div class="business-info-item">

                        <strong>
                            FOCUS
                        </strong>

                        <span>
                            Design & Planning
                        </span>

                    </div>


                    <div class="business-info-item">

                        <strong>
                            APPROACH
                        </strong>

                        <span>
                            Integrated Delivery
                        </span>

                    </div>

                </div>


                <a href="{{ url('/') }}" class="business-company-button">
                    EXPLORE BUSINESS
                    <span>→</span>
                </a>

            </div>

        </div>

    </section>


    {{-- =========================================================
     BUSINESS 02
     ========================================================= --}}
    <section class="business-company">

        <div class="business-company-container business-company-reverse">

            <div class="business-company-media">

                <div class="business-company-main-image">

                    <img src="{{ asset('images/businesses/construction.jpg') }}" alt="Construction">

                </div>

                <div class="business-company-image-caption">
                    CONSTRUCTION
                </div>

            </div>


            <div class="business-company-content">

                <h2>
                    Construction
                </h2>

                <div class="business-company-line"></div>

                <p>
                    Our construction capabilities focus on reliable project
                    execution, quality workmanship, efficient resource
                    management, and adherence to professional standards.
                </p>

                <p>
                    We transform engineering concepts and project plans into
                    practical, durable built environments while maintaining
                    strong attention to quality, safety, coordination, and delivery.
                </p>


                <div class="business-company-info">

                    <div class="business-info-item">

                        <strong>
                            CORE
                        </strong>

                        <span>
                            Construction
                        </span>

                    </div>


                    <div class="business-info-item">

                        <strong>
                            FOCUS
                        </strong>

                        <span>
                            Project Execution
                        </span>

                    </div>


                    <div class="business-info-item">

                        <strong>
                            APPROACH
                        </strong>

                        <span>
                            Quality & Safety
                        </span>

                    </div>

                </div>


                <a href="{{ url('/') }}" class="business-company-button">
                    EXPLORE BUSINESS
                    <span>→</span>
                </a>

            </div>

        </div>

    </section>




    {{-- =========================================================
     BUSINESS 04
     ========================================================= --}}
    <section class="business-company business-company-dark">

        <div class="business-company-container business-company-reverse">

            <div class="business-company-media">

                <div class="business-company-main-image">

                    <img src="{{ asset('images/businesses/project-management.jpg') }}" alt="Project Management">

                </div>

                <div class="business-company-image-caption">
                    PROJECT MANAGEMENT
                </div>

            </div>


            <div class="business-company-content">



                <h2>
                    Project
                    <span>Management</span>
                </h2>

                <div class="business-company-line"></div>

                <p>
                    Effective project delivery requires strong planning,
                    coordination, communication, and control throughout
                    the project lifecycle.
                </p>

                <p>
                    KEMET ENGINEERING applies structured project management
                    practices to coordinate resources, schedules, technical
                    requirements, stakeholders, and delivery.
                </p>


                <div class="business-company-info">

                    <div class="business-info-item">

                        <strong>
                            CORE
                        </strong>

                        <span>
                            Project Management
                        </span>

                    </div>


                    <div class="business-info-item">

                        <strong>
                            FOCUS
                        </strong>

                        <span>
                            Planning & Control
                        </span>

                    </div>


                    <div class="business-info-item">

                        <strong>
                            APPROACH
                        </strong>

                        <span>
                            Coordinated Delivery
                        </span>

                    </div>

                </div>


                <a href="{{ url('/') }}" class="business-company-button">
                    EXPLORE BUSINESS
                    <span>→</span>
                </a>

            </div>

        </div>

    </section>


    {{-- =========================================================
     BUSINESS 05
     ========================================================= --}}
    <section class="business-company">
        <div class="business-company-container">

            <div class="business-company-media">

                <div class="business-company-main-image">

                    <img src="{{ asset('images/businesses/technical-solutions.jpg') }}" alt="Technical Solutions">

                </div>

                <div class="business-company-image-caption">
                    TECHNICAL SOLUTIONS
                </div>

            </div>


            <div class="business-company-content">



                <h2>
                    Technical
                    <span>Solutions</span>
                </h2>

                <div class="business-company-line"></div>

                <p>
                    We develop practical technical solutions to address
                    complex engineering and construction requirements.
                </p>

                <p>
                    By combining technical expertise with modern methods
                    and innovative approaches, we seek to improve project
                    performance, efficiency, reliability, and constructability.
                </p>


                <div class="business-company-info">

                    <div class="business-info-item">

                        <strong>
                            CORE
                        </strong>

                        <span>
                            Technical Solutions
                        </span>

                    </div>


                    <div class="business-info-item">

                        <strong>
                            FOCUS
                        </strong>

                        <span>
                            Innovation
                        </span>

                    </div>


                    <div class="business-info-item">

                        <strong>
                            APPROACH
                        </strong>

                        <span>
                            Practical Solutions
                        </span>

                    </div>

                </div>


                <a href="{{ url('/') }}" class="business-company-button">
                    EXPLORE BUSINESS
                    <span>→</span>
                </a>

            </div>

        </div>

    </section>




    {{-- =========================================================
     INTEGRATED APPROACH
     ========================================================= --}}
    <section class="businesses-integrated-section">

        <div class="businesses-integrated-overlay"></div>

        <div class="businesses-integrated-content">

            <span class="businesses-integrated-label">
                ONE TEAM . MULTIPLE DISCIPLINES
            </span>

            <h2>
                Integrated Engineering
                <span>Solutions</span>
            </h2>

            <div class="businesses-integrated-line"></div>

            <p>
                Our businesses work together to provide coordinated solutions
                across the project lifecycle — combining engineering,
                construction, technical expertise, and project management
                under one integrated approach.
            </p>

            <a href="{{ url('/contact') }}" class="businesses-integrated-button">
                GET IN TOUCH
            </a>

        </div>

    </section>


    {{-- =========================================================
     PAGE NAVIGATION
     ========================================================= --}}
    <section class="businesses-page-navigation">

        <a href="{{ url('/about-us') }}" class="businesses-page-nav-link">

            <span class="businesses-page-nav-arrow">
                ←
            </span>

            <span>
                About Us
            </span>

        </a>


        <a href="{{ url('/innovation') }}" class="businesses-page-nav-link">

            <span>
                Innovation
            </span>

            <span class="businesses-page-nav-arrow">
                →
            </span>

        </a>

    </section>

@endsection
