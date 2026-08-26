@extends('layouts.admin')

@section('title', 'Manage Careers | KEMET Engineering')

@section('content')

<div class="admin-careers-page">

{{-- =====================================================
     PAGE HEADER
===================================================== --}}

<div class="admin-careers-header">

    <div class="admin-careers-heading">

        <span class="admin-label">
            CAREERS MANAGEMENT
        </span>

        <h1>
            Manage Career Jobs
        </h1>

        <p>
            Create, edit and manage all available career opportunities.
        </p>

    </div>


    {{-- ADD NEW JOB --}}

    <a
        href="{{ route('admin.careers.create') }}"
        class="admin-add-job-btn"
    >
        <span>＋</span>
        Add New Job
    </a>

</div>


{{-- =====================================================
     SUCCESS MESSAGE
===================================================== --}}

@if (session('success'))

    <div class="admin-success-message">

        <span>✓</span>

        {{ session('success') }}

    </div>

@endif


{{-- =====================================================
     ERROR MESSAGE
===================================================== --}}

@if (session('error'))

    <div class="admin-error-message">

        <span>!</span>

        {{ session('error') }}

    </div>

@endif


{{-- =====================================================
     JOBS
===================================================== --}}

@if ($jobs->count() > 0)

    <div class="admin-jobs-grid">

        @foreach ($jobs as $job)

            <article class="admin-job-card">


                {{-- TOP --}}

                <div class="admin-job-card-top">

                    <div>

                        <span class="admin-job-number">
                            JOB #{{ $job->id }}
                        </span>

                        <h2>
                            {{ $job->title }}
                        </h2>

                    </div>


                    {{-- TYPE --}}

                    <span class="admin-job-type-badge">
                        {{ $job->type }}
                    </span>

                </div>


                {{-- JOB INFO --}}

                <div class="admin-job-info">


                    <div class="admin-job-info-item">

                        <span class="admin-info-label">
                            DEPARTMENT
                        </span>

                        <strong>
                            {{ $job->department }}
                        </strong>

                    </div>


                    <div class="admin-job-info-item">

                        <span class="admin-info-label">
                            LOCATION
                        </span>

                        <strong>
                            {{ $job->location }}
                        </strong>

                    </div>


                    <div class="admin-job-info-item">

                        <span class="admin-info-label">
                            POSTED
                        </span>

                        <strong>
                            {{ $job->posted_at?->format('Y-m-d') ?? '-' }}
                        </strong>

                    </div>


                    <div class="admin-job-info-item">

                        <span class="admin-info-label">
                            EXPIRES
                        </span>

                        <strong>
                            {{ $job->expires_at?->format('Y-m-d') ?? '-' }}
                        </strong>

                    </div>

                </div>


                {{-- DESCRIPTION --}}

                <div class="admin-job-description">

                    <p>
                        {{ \Illuminate\Support\Str::limit($job->description, 180) }}
                    </p>

                </div>


                {{-- ACTIONS --}}

                <div class="admin-job-card-actions">


                    {{-- VIEW --}}

                    <a
                        href="{{ route('careers.show', $job->id) }}"
                        target="_blank"
                        class="admin-card-action admin-view-action"
                        title="View job on website"
                    >

                        <span class="action-icon">
                            👁
                        </span>

                        <span>
                            View
                        </span>

                    </a>


                    {{-- EDIT --}}

                    <a
                        href="{{ route('admin.careers.edit', $job->id) }}"
                        class="admin-card-action admin-edit-action"
                        title="Edit this job"
                    >

                        <span class="action-icon">
                            ✎
                        </span>

                        <span>
                            Edit
                        </span>

                    </a>


                    {{-- DELETE --}}

                    <form
                        action="{{ route('admin.careers.destroy', $job->id) }}"
                        method="POST"
                        class="admin-delete-form"
                    >

                        @csrf

                        @method('DELETE')

                        <button
                            type="submit"
                            class="admin-card-action admin-delete-action"
                            onclick="return confirm('Are you sure you want to delete this job?')"
                            title="Delete this job"
                        >

                            <span class="action-icon">
                                ×
                            </span>

                            <span>
                                Delete
                            </span>

                        </button>

                    </form>

                </div>


            </article>

        @endforeach

    </div>


@else


    {{-- =================================================
         NO JOBS
    ================================================= --}}

    <div class="admin-no-jobs">

        <div class="admin-no-jobs-icon">
            💼
        </div>

        <span>
            CAREERS
        </span>

        <h2>
            No Jobs Found
        </h2>

        <p>
            There are currently no career opportunities.
            Start by creating your first job opening.
        </p>


        <a
            href="{{ route('admin.careers.create') }}"
            class="admin-add-job-btn"
        >

            <span>
                ＋
            </span>

            Add New Job

        </a>

    </div>

@endif

</div>

@endsection
