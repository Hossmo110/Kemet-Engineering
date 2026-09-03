@extends('layouts.app')

@section('title', $project->title . ' | KEMET Engineering')

@section('content')

<main class="kemet-project-page">

    {{-- =========================================================
         PROJECT HERO
    ========================================================== --}}

    <section class="kemet-project-hero">

        @if($project->main_image)

            <img
                src="{{ asset('storage/' . $project->main_image) }}"
                alt="{{ $project->title }}"
                class="kemet-project-hero-image"
            >

        @else

            <img
                src="{{ asset('images/project-placeholder.jpg') }}"
                alt="{{ $project->title }}"
                class="kemet-project-hero-image"
            >

        @endif


        <div class="kemet-project-hero-overlay"></div>


        <div class="kemet-project-hero-content">

            {{-- PROJECT TITLE + CATEGORY --}}

            <div class="kemet-project-hero-info">

                <h1>
                    {{ $project->title }}
                </h1>

                @if($project->category)

                    <span class="kemet-project-category">
                        {{ $project->category }}
                    </span>

                @endif

            </div>


            {{-- SHARE --}}

            <div class="kemet-project-share">

                <div class="kemet-share-title">

                    <span class="kemet-share-icon">

                        <svg
                            viewBox="0 0 24 24"
                            width="20"
                            height="20"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.7"
                        >

                            <circle
                                cx="18"
                                cy="5"
                                r="2.5"
                            ></circle>

                            <circle
                                cx="6"
                                cy="12"
                                r="2.5"
                            ></circle>

                            <circle
                                cx="18"
                                cy="19"
                                r="2.5"
                            ></circle>

                            <line
                                x1="8.2"
                                y1="10.8"
                                x2="15.8"
                                y2="6.2"
                            ></line>

                            <line
                                x1="8.2"
                                y1="13.2"
                                x2="15.8"
                                y2="17.8"
                            ></line>

                        </svg>

                    </span>

                    <span>
                        Share Article
                    </span>

                </div>


                <div class="kemet-share-links">

                    <a
                        href="https://twitter.com/intent/tweet?url={{ urlencode(request()->fullUrl()) }}&text={{ urlencode($project->title) }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        aria-label="Share on X"
                    >
                        X
                    </a>


                    <a
                        href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(request()->fullUrl()) }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        aria-label="Share on LinkedIn"
                    >
                        in
                    </a>


                    <a
                        href="mailto:?subject={{ rawurlencode($project->title) }}&body={{ rawurlencode(request()->fullUrl()) }}"
                        aria-label="Share by Email"
                    >
                        @
                    </a>

                </div>

            </div>

        </div>

    </section>



    {{-- =========================================================
         PROJECT INFORMATION
         ECC STYLE
    ========================================================== --}}

    <section class="kemet-project-information">

        <div class="kemet-project-info-container">

            <div class="kemet-project-info-grid">


                {{-- SECTOR --}}

                @if($project->category)

                    <div class="kemet-project-grid-wrapper">

                        <div class="kemet-project-icon">

                            <svg
                                viewBox="0 0 256 256"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >

                                <polyline
                                    points="32 176 128 232 224 176"
                                    stroke="currentColor"
                                    stroke-width="24"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />

                                <polyline
                                    points="32 128 128 184 224 128"
                                    stroke="currentColor"
                                    stroke-width="24"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />

                                <polygon
                                    points="32 80 128 136 224 80 128 24 32 80"
                                    stroke="currentColor"
                                    stroke-width="24"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />

                            </svg>

                        </div>


                        <div class="kemet-project-info-col">

                            <div class="kemet-project-info-heading">
                                Sector:
                            </div>

                            <div class="kemet-project-info-value">
                                {{ $project->category }}
                            </div>

                        </div>

                    </div>

                @endif



                {{-- LOCATION --}}

                @if($project->location)

                    <div class="kemet-project-grid-wrapper">

                        <div class="kemet-project-icon">

                            <svg
                                viewBox="0 0 256 256"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >

                                <path
                                    d="M128 232C128 232 208 168 208 104C208 59.8172 172.183 24 128 24C83.8172 24 48 59.8172 48 104C48 168 128 232 128 232Z"
                                    stroke="currentColor"
                                    stroke-width="20"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />

                                <circle
                                    cx="128"
                                    cy="104"
                                    r="24"
                                    stroke="currentColor"
                                    stroke-width="20"
                                />

                            </svg>

                        </div>


                        <div class="kemet-project-info-col">

                            <div class="kemet-project-info-heading">
                                Location:
                            </div>

                            <div class="kemet-project-info-value">
                                {{ $project->location }}
                            </div>

                        </div>

                    </div>

                @endif



                {{-- STATUS --}}

                @if($project->status)

                    <div class="kemet-project-grid-wrapper">

                        <div class="kemet-project-icon">

                            <svg
                                viewBox="0 0 256 256"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >

                                <path
                                    d="M40 140V48C40 43.5817 43.5817 40 48 40H208C212.418 40 216 43.5817 216 48V208C216 212.418 212.418 216 208 216H140"
                                    stroke="currentColor"
                                    stroke-width="24"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />

                                <polyline
                                    points="40 192 64 216 120 160"
                                    stroke="currentColor"
                                    stroke-width="24"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />

                            </svg>

                        </div>


                        <div class="kemet-project-info-col">

                            <div class="kemet-project-info-heading">
                                Status:
                            </div>

                            <div class="kemet-project-info-value">
                                {{ $project->status }}
                            </div>

                        </div>

                    </div>

                @endif



                {{-- BUA --}}

                @if($project->bua)

                    <div class="kemet-project-grid-wrapper">

                        <div class="kemet-project-icon">

                            <svg
                                viewBox="0 0 256 256"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >

                                <line
                                    x1="24"
                                    y1="216"
                                    x2="128"
                                    y2="216"
                                    stroke="currentColor"
                                    stroke-width="24"
                                    stroke-linecap="round"
                                />

                                <line
                                    x1="24"
                                    y1="88"
                                    x2="240"
                                    y2="88"
                                    stroke="currentColor"
                                    stroke-width="24"
                                    stroke-linecap="round"
                                />

                                <line
                                    x1="48"
                                    y1="152"
                                    x2="104"
                                    y2="152"
                                    stroke="currentColor"
                                    stroke-width="24"
                                    stroke-linecap="round"
                                />

                                <polyline
                                    points="48 216 48 40 80 40 104 88 104 216"
                                    stroke="currentColor"
                                    stroke-width="24"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />

                            </svg>

                        </div>


                        <div class="kemet-project-info-col">

                            <div class="kemet-project-info-heading">
                                BUA:
                            </div>

                            <div class="kemet-project-info-value">
                                {{ number_format((float) $project->bua, 2) }} m²
                            </div>

                        </div>

                    </div>

                @endif



                {{-- CONSULTANT --}}

                @if($project->consultant)

                    <div class="kemet-project-grid-wrapper">

                        <div class="kemet-project-icon">

                            <svg
                                viewBox="0 0 256 256"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >

                                <circle
                                    cx="128"
                                    cy="80"
                                    r="40"
                                    stroke="currentColor"
                                    stroke-width="20"
                                />

                                <path
                                    d="M48 232C48 182 80 152 128 152C176 152 208 182 208 232"
                                    stroke="currentColor"
                                    stroke-width="20"
                                    stroke-linecap="round"
                                />

                            </svg>

                        </div>


                        <div class="kemet-project-info-col">

                            <div class="kemet-project-info-heading">
                                Consultant:
                            </div>

                            <div class="kemet-project-info-value">
                                {{ $project->consultant }}
                            </div>

                        </div>

                    </div>

                @endif



                {{-- MAIN CONTRACTOR --}}

                @if($project->main_contractor)

                    <div class="kemet-project-grid-wrapper">

                        <div class="kemet-project-icon">

                            <svg
                                viewBox="0 0 256 256"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >

                                <path
                                    d="M40 216V72H216V216"
                                    stroke="currentColor"
                                    stroke-width="20"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />

                                <path
                                    d="M72 72V40H184V72"
                                    stroke="currentColor"
                                    stroke-width="20"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />

                                <rect
                                    x="96"
                                    y="144"
                                    width="64"
                                    height="72"
                                    stroke="currentColor"
                                    stroke-width="20"
                                />

                                <line
                                    x1="72"
                                    y1="112"
                                    x2="88"
                                    y2="112"
                                    stroke="currentColor"
                                    stroke-width="20"
                                    stroke-linecap="round"
                                />

                                <line
                                    x1="168"
                                    y1="112"
                                    x2="184"
                                    y2="112"
                                    stroke="currentColor"
                                    stroke-width="20"
                                    stroke-linecap="round"
                                />

                            </svg>

                        </div>


                        <div class="kemet-project-info-col">

                            <div class="kemet-project-info-heading">
                                Main Contractor:
                            </div>

                            <div class="kemet-project-info-value">
                                {{ $project->main_contractor }}
                            </div>

                        </div>

                    </div>

                @endif



                {{-- SUBCONTRACTOR --}}

                @if($project->subcontractor)

                    <div class="kemet-project-grid-wrapper">

                        <div class="kemet-project-icon">

                            <svg
                                viewBox="0 0 256 256"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >

                                <circle
                                    cx="96"
                                    cy="80"
                                    r="32"
                                    stroke="currentColor"
                                    stroke-width="18"
                                />

                                <circle
                                    cx="176"
                                    cy="88"
                                    r="24"
                                    stroke="currentColor"
                                    stroke-width="18"
                                />

                                <path
                                    d="M32 216C36 172 58 148 96 148C134 148 156 172 160 216"
                                    stroke="currentColor"
                                    stroke-width="18"
                                    stroke-linecap="round"
                                />

                                <path
                                    d="M154 156C168 150 181 152 192 160C205 169 212 186 216 216"
                                    stroke="currentColor"
                                    stroke-width="18"
                                    stroke-linecap="round"
                                />

                            </svg>

                        </div>


                        <div class="kemet-project-info-col">

                            <div class="kemet-project-info-heading">
                                Subcontractor:
                            </div>

                            <div class="kemet-project-info-value">
                                {{ $project->subcontractor }}
                            </div>

                        </div>

                    </div>

                @endif



                {{-- START DATE --}}

                @if($project->start_date)

                    <div class="kemet-project-grid-wrapper">

                        <div class="kemet-project-icon">

                            <svg
                                viewBox="0 0 256 256"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >

                                <rect
                                    x="32"
                                    y="40"
                                    width="192"
                                    height="184"
                                    rx="8"
                                    stroke="currentColor"
                                    stroke-width="20"
                                />

                                <line
                                    x1="80"
                                    y1="24"
                                    x2="80"
                                    y2="56"
                                    stroke="currentColor"
                                    stroke-width="20"
                                    stroke-linecap="round"
                                />

                                <line
                                    x1="176"
                                    y1="24"
                                    x2="176"
                                    y2="56"
                                    stroke="currentColor"
                                    stroke-width="20"
                                    stroke-linecap="round"
                                />

                                <line
                                    x1="32"
                                    y1="88"
                                    x2="224"
                                    y2="88"
                                    stroke="currentColor"
                                    stroke-width="20"
                                />

                            </svg>

                        </div>


                        <div class="kemet-project-info-col">

                            <div class="kemet-project-info-heading">
                                Start:
                            </div>

                            <div class="kemet-project-info-value">
                                {{ \Carbon\Carbon::parse($project->start_date)->format('d M Y') }}
                            </div>

                        </div>

                    </div>

                @endif



                {{-- COMPLETION DATE --}}

                @if($project->completion_date)

                    <div class="kemet-project-grid-wrapper">

                        <div class="kemet-project-icon">

                            <svg
                                viewBox="0 0 256 256"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >

                                <circle
                                    cx="128"
                                    cy="128"
                                    r="96"
                                    stroke="currentColor"
                                    stroke-width="20"
                                />

                                <polyline
                                    points="88 128 112 152 168 96"
                                    stroke="currentColor"
                                    stroke-width="20"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />

                            </svg>

                        </div>


                        <div class="kemet-project-info-col">

                            <div class="kemet-project-info-heading">
                                Completed:
                            </div>

                            <div class="kemet-project-info-value">
                                {{ \Carbon\Carbon::parse($project->completion_date)->format('d M Y') }}
                            </div>

                        </div>

                    </div>

                @endif


            </div>

        </div>

    </section>



   


    {{-- =========================================================
         PROJECT GALLERY
    ========================================================== --}}

    @if($project->images && $project->images->count())

        <section class="kemet-project-gallery-section">

            <div class="kemet-project-gallery-wrapper">

                <div class="kemet-project-gallery-grid">

                    @foreach($project->images as $image)

                        <a
                            href="{{ asset('storage/' . $image->image) }}"
                            class="kemet-project-gallery-item"
                            target="_blank"
                            rel="noopener noreferrer"
                        >

                            <img
                                src="{{ asset('storage/' . $image->image) }}"
                                alt="{{ $project->title }}"
                                loading="lazy"
                            >


                            <span class="kemet-project-gallery-overlay">

                                <span class="kemet-gallery-view-icon">

                                    <svg
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="1.5"
                                    >

                                        <circle
                                            cx="11"
                                            cy="11"
                                            r="6.5"
                                        />

                                        <path d="m16 16 5 5" />

                                        <path d="M8.5 11h5" />

                                        <path d="M11 8.5v5" />

                                    </svg>

                                </span>

                            </span>

                        </a>

                    @endforeach

                </div>

            </div>

        </section>

    @endif



    {{-- =========================================================
         SEE MORE PROJECTS
    ========================================================== --}}

    <section class="kemet-see-more-projects">
    <div class="kemet-see-more-container">
        <a href="{{ url('/#latest-projects') }}" class="kemet-see-more-link">
            <span>See more projects</span>

            <svg
                viewBox="0 0 40 20"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path d="M1 10H35" stroke="currentColor" stroke-width="1.5"/>
                <path d="M28 3L35 10L28 17" stroke="currentColor" stroke-width="1.5"/>
            </svg>
        </a>
    </div>
</section>

</main>

@endsection