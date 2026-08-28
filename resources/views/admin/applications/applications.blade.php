@extends('layouts.admin')

@section('title', 'Job Applications | KEMET Engineering')

@section('content')

    <div class="admin-page-header">

        <div>

            <span class="admin-page-label">
                CAREERS
            </span>

            <h1>
                Job Applications
            </h1>

            <p>
                Manage and review applications submitted for available positions.
            </p>

        </div>

    </div>


    <div class="admin-card">


        {{-- =====================================================
         CARD HEADER
    ====================================================== --}}

        <div class="admin-card-header">

            <div>

                <h2>
                    All Applications
                </h2>

                <span>
                    {{ $applications->count() }} application(s)
                </span>

            </div>

        </div>


        {{-- =====================================================
         APPLICATIONS
    ====================================================== --}}

        @if ($applications->count() > 0)

            <div class="admin-table-wrapper">

                <table class="admin-table">

                    <thead>

                        <tr>

                            <th>
                                Applicant
                            </th>

                            <th>
                                Position
                            </th>

                            <th>
                                Email
                            </th>

                            <th>
                                Phone
                            </th>

                            <th>
                                Applied
                            </th>

                            <th>
                                Action
                            </th>

                        </tr>

                    </thead>


                    <tbody>

                        @foreach ($applications as $application)
                            <tr>


                                {{-- =================================================
                                 APPLICANT
                            ================================================== --}}

                                <td>

                                    <div class="application-applicant">

                                        <div class="application-avatar">

                                            {{ strtoupper(substr($application->name, 0, 1)) }}

                                        </div>

                                        <strong>
                                            {{ $application->name }}
                                        </strong>

                                    </div>

                                </td>


                                {{-- =================================================
                                 JOB POSITION
                            ================================================== --}}

                                <td>

                                    @if ($application->careerJob)
                                        <span class="application-job">

                                            {{ $application->careerJob->title }}

                                        </span>
                                    @else
                                        <span class="application-muted">

                                            Job Deleted

                                        </span>
                                    @endif

                                </td>


                                {{-- =================================================
                                 EMAIL
                            ================================================== --}}

                                <td>

                                    <a href="mailto:{{ $application->email }}" class="application-email">

                                        {{ $application->email }}

                                    </a>

                                </td>


                                {{-- =================================================
                                 PHONE
                            ================================================== --}}

                                <td>

                                    <a href="tel:{{ $application->phone }}" class="application-phone">
                                        {{ $application->phone }}
                                    </a>

                                </td>


                                {{-- =================================================
                                 DATE
                            ================================================== --}}

                                <td>

                                    <span class="application-date">

                                        {{ $application->created_at->format('d M Y') }}

                                    </span>

                                    <small>

                                        {{ $application->created_at->format('h:i A') }}

                                    </small>

                                </td>


                                {{-- =================================================
                                 ACTION / CV
                            ================================================== --}}

                                <td>

                                    @if ($application->cv)
                                        <a href="{{ asset('storage/' . $application->cv) }}" target="_blank"
                                            rel="noopener noreferrer" class="admin-action-btn">

                                            CV

                                            <span>
                                                ↗
                                            </span>

                                        </a>
                                    @else
                                        <span class="application-muted">
                                            No CV
                                        </span>
                                    @endif

                                </td>


                            </tr>
                        @endforeach

                    </tbody>

                </table>

            </div>
        @else
            {{-- =====================================================
             EMPTY STATE
        ====================================================== --}}

            <div class="admin-empty-state">

                <div class="admin-empty-icon">
                    📄
                </div>

                <h3>
                    No Applications Yet
                </h3>

                <p>
                    There are currently no job applications submitted.
                </p>

            </div>


        @endif


    </div>

@endsection
