@extends('layouts.app')

@section('title', 'Innovation | KEMET Engineering')

@section('content')

    {{-- =====================================================
         INNOVATION HERO
         ===================================================== --}}

    <section class="innovation-hero">

        <img
            src="{{ asset('images/innovation-hero.jpg') }}"
            alt="KEMET Engineering Innovation"
            class="innovation-hero-image"
        >

        <div class="innovation-hero-content">

            <h1>
                Innovation Is Our Foundation
            </h1>

        </div>

    </section>


    {{-- =====================================================
         INTRO
         ===================================================== --}}

    <section class="innovation-intro">

        <div class="innovation-intro-container">

            <span class="innovation-intro-label">
                OUR INNOVATION
            </span>

            <div class="innovation-intro-line"></div>

            <p>
                At KEMET Engineering, innovation is at the heart of the way
                we design, coordinate and deliver modern engineering solutions.
                We combine advanced technologies, digital tools and efficient
                construction methodologies to create smarter and more
                sustainable built environments.
            </p>

        </div>

    </section>


    {{-- =====================================================
         ONE CONTINUOUS INNOVATION SECTION
         ===================================================== --}}

    <section class="innovation-split">


        {{-- =================================================
             01 - AI INTELLIGENCE & DIGITAL TWIN
             ================================================= --}}

        <article class="innovation-block">

            <div class="innovation-media">

                <img
                    src="{{ asset('images/innovation-ai.jpg') }}"
                    alt="AI Intelligence and Digital Twin"
                    loading="lazy"
                >

            </div>


            <div class="innovation-content">

                <h2>
                    AI Intelligence
                    and Digital Twin
                </h2>

                <div class="innovation-text">

                    <p>
                        KEMET Engineering is advancing engineering innovation
                        through intelligent digital solutions that improve
                        project coordination, decision-making and construction
                        performance.
                    </p>

                    <p>
                        Our approach combines digital twins, artificial
                        intelligence, BIM technologies and real-time project
                        data to create smarter and more efficient construction
                        environments.
                    </p>

                    <p>
                        Digital models can provide a virtual representation
                        of project conditions, helping engineering teams
                        understand progress, identify potential issues and
                        make informed decisions throughout the project
                        lifecycle.
                    </p>

                </div>

                <button
                    class="innovation-read-more"
                    type="button"
                    aria-expanded="false"
                >
                    <span>Read more</span>

                    <span class="innovation-arrow">
                        →
                    </span>
                </button>

            </div>

        </article>


        {{-- =================================================
             02 - MEP MODULAR SYSTEMS
             ================================================= --}}

        <article class="innovation-block innovation-image-right">

            <div class="innovation-media">

                <img
                    src="{{ asset('images/innovation-mep.jpg') }}"
                    alt="MEP Modular Systems"
                    loading="lazy"
                >

            </div>


            <div class="innovation-content">

                <h2>
                    MEP Modular
                    Systems
                </h2>

                <div class="innovation-text">

                    <p>
                        KEMET Engineering integrates modern modular
                        construction methodologies to improve quality,
                        productivity, safety and project delivery.
                    </p>

                    <p>
                        Through BIM-based coordination and prefabricated
                        systems, our engineering teams work toward minimizing
                        waste while maximizing construction efficiency.
                    </p>

                    <p>
                        Modular MEP solutions can support more controlled
                        fabrication, better coordination between disciplines
                        and faster installation on site.
                    </p>

                </div>

                <button
                    class="innovation-read-more"
                    type="button"
                    aria-expanded="false"
                >
                    <span>Read more</span>

                    <span class="innovation-arrow">
                        →
                    </span>
                </button>

            </div>

        </article>


        {{-- =================================================
             03 - LOW CARBON MATERIAL INNOVATION
             ================================================= --}}

        <article class="innovation-block">

            <div class="innovation-media">

                <img
                    src="{{ asset('images/innovation-materials.jpg') }}"
                    alt="Low Carbon Material Innovation"
                    loading="lazy"
                >

            </div>


            <div class="innovation-content">

                <h2>
                    Low-Carbon
                    Material Innovation
                </h2>

                <div class="innovation-text">

                    <p>
                        KEMET Engineering is committed to exploring sustainable
                        materials and construction methods that reduce
                        environmental impact while maintaining high engineering
                        standards.
                    </p>

                    <p>
                        Our innovation strategy focuses on efficient material
                        usage, waste reduction and environmentally responsible
                        construction.
                    </p>

                    <p>
                        By considering material performance, lifecycle impact
                        and construction efficiency, we aim to support more
                        sustainable projects from design through delivery.
                    </p>

                </div>

                <button
                    class="innovation-read-more"
                    type="button"
                    aria-expanded="false"
                >
                    <span>Read more</span>

                    <span class="innovation-arrow">
                        →
                    </span>
                </button>

            </div>

        </article>


        {{-- =================================================
             04 - DIGITAL BIM AUTOMATION
             ================================================= --}}

        <article class="innovation-block innovation-image-right">

            <div class="innovation-media">

                <img
                    src="{{ asset('images/innovation-bim.jpg') }}"
                    alt="Digital BIM Automation"
                    loading="lazy"
                >

            </div>


            <div class="innovation-content">

                <h2>
                    Digital BIM
                    Automation
                </h2>

                <div class="innovation-text">

                    <p>
                        BIM is at the core of KEMET Engineering's digital
                        approach, enabling better coordination between design,
                        engineering, construction and project management teams.
                    </p>

                    <p>
                        By integrating digital workflows and automated
                        processes, we improve accuracy, reduce coordination
                        risks and accelerate project delivery.
                    </p>

                    <p>
                        Our BIM-driven approach supports better visualization,
                        clash coordination, information management and
                        collaboration throughout the project lifecycle.
                    </p>

                </div>

                <button
                    class="innovation-read-more"
                    type="button"
                    aria-expanded="false"
                >
                    <span>Read more</span>

                    <span class="innovation-arrow">
                        →
                    </span>
                </button>

            </div>

        </article>


        {{-- =================================================
             05 - LEAN SYSTEMS & AUTOMATION
             ================================================= --}}

        <article class="innovation-block">

            <div class="innovation-media">

                <img
                    src="{{ asset('images/innovation-lean.jpg') }}"
                    alt="Lean Systems and Automation"
                    loading="lazy"
                >

            </div>


            <div class="innovation-content">

                <h2>
                    Lean Systems
                    and Automation
                </h2>

                <div class="innovation-text">

                    <p>
                        KEMET Engineering applies lean principles and
                        intelligent automation to streamline operations and
                        improve efficiency across engineering and construction
                        workflows.
                    </p>

                    <p>
                        Our goal is to eliminate unnecessary processes,
                        improve productivity and create a more responsive
                        and reliable project delivery system.
                    </p>

                    <p>
                        By continuously improving workflows and utilizing
                        digital automation where appropriate, KEMET Engineering
                        aims to deliver greater value with better control
                        over time, cost and quality.
                    </p>

                </div>

                <button
                    class="innovation-read-more"
                    type="button"
                    aria-expanded="false"
                >
                    <span>Read more</span>

                    <span class="innovation-arrow">
                        →
                    </span>
                </button>

            </div>

        </article>

    </section>


    {{-- =====================================================
         PAGE NAVIGATION
         ===================================================== --}}

    <section class="page-navigation-section">

        <div class="page-navigation">

            {{-- Previous Page --}}

            <a
                href="{{ url('/our-businesses') }}"
                class="page-nav-link page-nav-prev"
            >

                <span class="page-nav-arrow">
                    ←
                </span>

                <span class="page-nav-label">
                    Businesses
                </span>

            </a>


            {{-- Next Page --}}

            <a
                href="{{ url('/csr') }}"
                class="page-nav-link page-nav-next"
            >

                <span class="page-nav-label">
                    CSR
                </span>

                <span class="page-nav-arrow">
                    →
                </span>

            </a>

        </div>

    </section>


    {{-- =====================================================
         READ MORE SCRIPT
         ===================================================== --}}

    <script>

        document.addEventListener('DOMContentLoaded', function () {

            const buttons = document.querySelectorAll(
                '.innovation-read-more'
            );


            buttons.forEach(function (button) {

                const content =
                    button.parentElement.querySelector(
                        '.innovation-text'
                    );


                if (!content) {
                    return;
                }


                const paragraphs =
                    content.querySelectorAll('p');


                if (paragraphs.length <= 2) {

                    button.style.display = 'none';

                    return;

                }


                /*
                 * Hide all paragraphs after the first two
                 */

                paragraphs.forEach(function (paragraph, index) {

                    if (index >= 2) {

                        paragraph.classList.add(
                            'innovation-hidden-text'
                        );

                    }

                });


                /*
                 * Read More / Read Less
                 */

                button.addEventListener('click', function () {

                    const expanded =
                        button.getAttribute('aria-expanded') === 'true';


                    if (expanded) {

                        paragraphs.forEach(function (
                            paragraph,
                            index
                        ) {

                            if (index >= 2) {

                                paragraph.classList.add(
                                    'innovation-hidden-text'
                                );

                            }

                        });


                        button.setAttribute(
                            'aria-expanded',
                            'false'
                        );


                        button.querySelector(
                            'span:first-child'
                        ).textContent = 'Read more';


                    } else {

                        paragraphs.forEach(function (paragraph) {

                            paragraph.classList.remove(
                                'innovation-hidden-text'
                            );

                        });


                        button.setAttribute(
                            'aria-expanded',
                            'true'
                        );


                        button.querySelector(
                            'span:first-child'
                        ).textContent = 'Read less';

                    }

                });

            });

        });

    </script>

@endsection
