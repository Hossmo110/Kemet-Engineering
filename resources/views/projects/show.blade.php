@extends('layouts.app')

@section('title', $project->title . ' | KEMET Engineering')

@section('content')

<section class="project-details-page">


{{-- HERO --}}
<div class="project-details-hero">

    @if($project->main_image)

        <img
            src="{{ asset('storage/' . $project->main_image) }}"
            alt="{{ $project->title }}"
            class="project-details-hero-image"
        >

    @else

        <img
            src="{{ asset('images/project-placeholder.jpg') }}"
            alt="{{ $project->title }}"
            class="project-details-hero-image"
        >

    @endif

    <div class="project-details-hero-overlay"></div>

    <div class="project-details-hero-content">

        @if($project->category)

            <span class="project-details-category">
                {{ $project->category }}
            </span>

        @endif

        <h1>
            {{ $project->title }}
        </h1>

        @if($project->location)

            <div class="project-details-location">
                <span>LOCATION</span>
                {{ $project->location }}
            </div>

        @endif

    </div>

</div>


{{-- MAIN CONTENT --}}
<div class="container-fluid px-5">

    <div class="project-details-container">

        {{-- PROJECT INFORMATION --}}
        <section class="project-info-section">

            <div class="project-section-heading">

                <span>
                    PROJECT INFORMATION
                </span>

                <h2>
                    Project Overview
                </h2>

                <div></div>

            </div>


            <div class="project-info-grid">

                @if($project->location)

                    <div class="project-info-item">

                        <span>
                            LOCATION
                        </span>

                        <strong>
                            {{ $project->location }}
                        </strong>

                    </div>

                @endif


                @if($project->category)

                    <div class="project-info-item">

                        <span>
                            CATEGORY
                        </span>

                        <strong>
                            {{ $project->category }}
                        </strong>

                    </div>

                @endif


                @if($project->status)

                    <div class="project-info-item">

                        <span>
                            STATUS
                        </span>

                        <strong class="project-status">
                            {{ $project->status }}
                        </strong>

                    </div>

                @endif


                @if($project->bua)

                    <div class="project-info-item">

                        <span>
                            BUILT-UP AREA
                        </span>

                        <strong>
                            {{ number_format($project->bua) }}
                        </strong>

                    </div>

                @endif

            </div>

        </section>


        {{-- PROJECT PARTNERS --}}
        @if(
            $project->consultant ||
            $project->main_contractor ||
            $project->subcontractor
        )

            <section class="project-partners-section">

                <div class="project-section-heading">

                    <span>
                        PROJECT PARTIES
                    </span>

                    <h2>
                        Project Partners
                    </h2>

                    <div></div>

                </div>


                <div class="project-partners-grid">

                    @if($project->consultant)

                        <div class="project-partner-card">

                            <span>
                                CONSULTANT
                            </span>

                            <h3>
                                {{ $project->consultant }}
                            </h3>

                        </div>

                    @endif


                    @if($project->main_contractor)

                        <div class="project-partner-card">

                            <span>
                                MAIN CONTRACTOR
                            </span>

                            <h3>
                                {{ $project->main_contractor }}
                            </h3>

                        </div>

                    @endif


                    @if($project->subcontractor)

                        <div class="project-partner-card">

                            <span>
                                SUBCONTRACTOR
                            </span>

                            <h3>
                                {{ $project->subcontractor }}
                            </h3>

                        </div>

                    @endif

                </div>

            </section>

        @endif


        {{-- DESCRIPTION --}}
        @if($project->description)

            <section class="project-description-section">

                <div class="project-section-heading">

                    <span>
                        PROJECT DESCRIPTION
                    </span>

                    <h2>
                        About The Project
                    </h2>

                    <div></div>

                </div>


                <div class="project-description">

                    {!! nl2br(e($project->description)) !!}

                </div>

            </section>

        @endif


        {{-- TIMELINE --}}
        @if($project->start_date || $project->completion_date)

            <section class="project-timeline-section">

                <div class="project-section-heading">

                    <span>
                        PROJECT TIMELINE
                    </span>

                    <h2>
                        Project Dates
                    </h2>

                    <div></div>

                </div>


                <div class="project-timeline-grid">

                    @if($project->start_date)

                        <div class="project-date-card">

                            <span>
                                START DATE
                            </span>

                            <strong>
                                {{ \Carbon\Carbon::parse($project->start_date)->format('d M Y') }}
                            </strong>

                        </div>

                    @endif


                    @if($project->completion_date)

                        <div class="project-date-card">

                            <span>
                                COMPLETION DATE
                            </span>

                            <strong>
                                {{ \Carbon\Carbon::parse($project->completion_date)->format('d M Y') }}
                            </strong>

                        </div>

                    @endif

                </div>

            </section>

        @endif


        {{-- GALLERY --}}
        @if($project->images && $project->images->count())

            <section class="project-gallery-section">

                <div class="project-section-heading">

                    <span>
                        PROJECT GALLERY
                    </span>

                    <h2>
                        Project Images
                    </h2>

                    <div></div>

                </div>


                <div class="project-gallery-grid">

                    @foreach($project->images as $image)

                        <div class="project-gallery-item">

                            <img
                                src="{{ asset('storage/' . $image->image) }}"
                                alt="{{ $project->title }}"
                                loading="lazy"
                            >

                        </div>

                    @endforeach

                </div>

            </section>

        @endif


        {{-- BACK BUTTON --}}
        <div class="project-details-back">

            <a href="{{ url('/#projects') }}">

                <svg
                    viewBox="0 0 30 12"
                    xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true"
                >

                    <line
                        x1="29"
                        y1="6"
                        x2="3"
                        y2="6"
                    />

                    <polyline
                        points="9,1 3,6 9,11"
                    />

                </svg>

                <span>
                    Back to Projects
                </span>

            </a>

        </div>

    </div>

</div>

</section>

@endsection
