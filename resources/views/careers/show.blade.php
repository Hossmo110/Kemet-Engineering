@extends('layouts.app')

@section('title', $job['title'] . ' | KEMET Engineering')

@section('content')

    <div class="careers-job-page">


        {{-- =====================================================
         CAREERS HEADER
         ===================================================== --}}

        <header class="careers-job-header">

            <div class="careers-job-header-inner">

                <a href="{{ url('/') }}" class="careers-job-logo">

                    <img src="{{ asset('images/logo.png') }}" alt="KEMET Engineering">

                </a>


                <a href="{{ url('/careers') }}" class="careers-home-link">
                    CAREERS HOME
                    <span>
                        →
                    </span>
                </a>

            </div>

        </header>



        {{-- =====================================================
         JOB CONTENT
         ===================================================== --}}

        <main class="careers-job-main">

            <div class="careers-job-container">


                {{-- =================================================
                 LEFT SIDE - JOB DETAILS
                 ================================================= --}}

                <section class="job-details">


                    {{-- JOB TITLE --}}

                    <h1 class="job-details-title">
                        {{ $job['title'] }}
                    </h1>


                    {{-- DEPARTMENT --}}

                    <div class="job-details-department">

                        <div class="job-department-name">

                            <strong>
                                {{ $job['department'] }}
                            </strong>

                        </div>

                        <div class="job-department-text">

                            Department:

                            <strong>
                                {{ $job['department'] }}
                            </strong>

                        </div>

                    </div>


                    {{-- POSTED / EXPIRES --}}

                    <div class="job-details-info">

                        <div>

                            Posted:

                            <strong>
                                {{ $job['posted'] }}
                            </strong>

                        </div>


                        <div>

                            Expires:

                            <strong>
                                {{ $job['expires'] }}
                            </strong>

                        </div>

                    </div>


                    {{-- DIVIDER --}}

                    <div class="job-details-divider"></div>



                    {{-- =================================================
                     JOB DESCRIPTION
                     ================================================= --}}

                    <div class="job-section">

                        <h2>
                            Job Description
                        </h2>

                        <p>
                            {{ $job['description'] }}
                        </p>

                    </div>



                    {{-- =================================================
                     QUALIFICATIONS
                     ================================================= --}}

                    @if (isset($job['qualifications']) && count($job['qualifications']) > 0)

                        <div class="job-section">

                            <h2>
                                Qualifications:
                            </h2>

                            <ul>

                                @foreach ($job['qualifications'] as $qualification)
                                    <li>
                                        {{ $qualification }}
                                    </li>
                                @endforeach

                            </ul>

                        </div>

                    @endif



                    {{-- =================================================
                     EMPLOYMENT DETAILS
                     ================================================= --}}

                    <div class="job-section">

                        <h2>
                            Employment Details
                        </h2>

                        <div class="employment-details">

                            <div class="employment-detail-item">

                                <span>
                                    Location
                                </span>

                                <strong>
                                    {{ $job['location'] }}
                                </strong>

                            </div>


                            <div class="employment-detail-item">

                                <span>
                                    Employment Type
                                </span>

                                <strong>
                                    {{ $job['type'] }}
                                </strong>

                            </div>

                        </div>

                    </div>


                </section>



                {{-- =================================================
                 RIGHT SIDE - APPLICATION FORM
                 ================================================= --}}

                <aside class="application-card">


                    <div class="application-card-header">

                        <span>
                            JOIN OUR TEAM
                        </span>

                        <h2>
                            Apply Now
                        </h2>

                        <p>
                            Interested in this position?
                            Submit your application below.
                        </p>

                    </div>



                    <form action="#" method="POST" enctype="multipart/form-data" class="application-form">

                        @csrf


                        {{-- FULL NAME --}}

                        <div class="form-group">

                            <label for="name">
                                Full Name
                            </label>

                            <input type="text" id="name" name="name" placeholder="Enter your full name" required>

                        </div>



                        {{-- EMAIL --}}

                        <div class="form-group">

                            <label for="email">
                                Email Address
                            </label>

                            <input type="email" id="email" name="email" placeholder="Enter your email address"
                                required>

                        </div>



                        {{-- PHONE --}}

                        <div class="form-group">

                            <label for="phone">
                                Phone Number
                            </label>

                            <input type="text" id="phone" name="phone" placeholder="Enter your phone number"
                                required>

                        </div>



                        {{-- COVER LETTER --}}

                        <div class="form-group">

                            <label for="message">
                                Cover Letter
                            </label>

                            <textarea id="message" name="message" placeholder="Tell us about yourself..."></textarea>

                        </div>



                        {{-- =================================================
                         UPLOAD CV
                         ================================================= --}}

                        <div class="career-form-group">

                            <label for="cv">
                                Upload CV
                            </label>

                            <div class="cv-upload">

                                <input type="file" id="cv" name="cv" accept=".pdf,.doc,.docx">

                                <label for="cv" class="cv-upload-btn">
                                    <span>📎</span>
                                    Choose File
                                </label>

                                <span class="cv-file-name">
                                    No file chosen
                                </span>

                            </div>

                            <small>
                                PDF, DOC or DOCX
                            </small>

                        </div>

                        {{-- SUBMIT --}}

                        <button type="submit" class="apply-submit">

                            SUBMIT APPLICATION

                            <span>
                                →
                            </span>

                        </button>

                    </form>

                </aside>

            </div>

        </main>

    </div>



    {{-- =====================================================
     CV FILE NAME SCRIPT
     ===================================================== --}}

    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const input = document.getElementById('cv');

            const fileName = document.querySelector('.cv-file-name');


            if (input && fileName) {

                input.addEventListener('change', function() {

                    if (this.files.length > 0) {

                        fileName.textContent =
                            this.files[0].name;

                    } else {

                        fileName.textContent =
                            'No file chosen';

                    }

                });

            }

        });
    </script>

    <script>
        const cvInput = document.getElementById('cv');
        const cvFileName = document.querySelector('.cv-file-name');

        if (cvInput && cvFileName) {

            cvInput.addEventListener('change', function() {

                if (this.files.length > 0) {

                    cvFileName.textContent = this.files[0].name;

                } else {

                    cvFileName.textContent = 'No file chosen';

                }

            });

        }
    </script>
@endsection
