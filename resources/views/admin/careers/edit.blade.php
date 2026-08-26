@extends('layouts.admin')

@section('title', 'Edit Career Job | KEMET Engineering')

@section('content')

<div class="admin-edit-page">

{{-- PAGE HEADER --}}
<div class="admin-edit-header">

    <div class="admin-edit-heading">

        <span class="admin-label">
            CAREERS MANAGEMENT
        </span>

        <h1>
            Edit Career Job
        </h1>

        <p>
            Update the information and details of this career opportunity.
        </p>

    </div>

    <a
        href="{{ route('admin.careers.index') }}"
        class="admin-back-btn"
    >
        <span>←</span>
        Back to Jobs
    </a>

</div>


{{-- VALIDATION ERRORS --}}
@if ($errors->any())

    <div class="admin-error-message">

        <div class="admin-error-title">
            Please fix the following errors:
        </div>

        <ul>

            @foreach ($errors->all() as $error)

                <li>
                    {{ $error }}
                </li>

            @endforeach

        </ul>

    </div>

@endif


{{-- EDIT FORM --}}
<div class="admin-edit-card">

    <div class="admin-edit-card-header">

        <div>

            <span class="admin-table-label">
                CAREER OPPORTUNITY
            </span>

            <h2>
                {{ $job->title }}
            </h2>

        </div>

        <span class="admin-edit-job-id">
            #{{ $job->id }}
        </span>

    </div>


    <form
        action="{{ route('admin.careers.update', $job->id) }}"
        method="POST"
        class="admin-edit-form"
    >

        @csrf

        @method('PUT')


        {{-- =========================================
             BASIC INFORMATION
        ========================================== --}}

        <div class="admin-form-section">

            <div class="admin-form-section-title">

                <span>
                    01
                </span>

                <div>
                    <h3>
                        Basic Information
                    </h3>

                    <p>
                        Main information about the position.
                    </p>
                </div>

            </div>


            <div class="admin-form-grid">


                {{-- JOB TITLE --}}
                <div class="admin-form-group admin-form-full">

                    <label for="title">
                        Job Title
                        <span>*</span>
                    </label>

                    <input
                        type="text"
                        id="title"
                        name="title"
                        value="{{ old('title', $job->title) }}"
                        placeholder="e.g. Senior Civil Engineer"
                        required
                    >

                </div>


                {{-- DEPARTMENT --}}
                <div class="admin-form-group">

                    <label for="department">
                        Department
                        <span>*</span>
                    </label>

                    <input
                        type="text"
                        id="department"
                        name="department"
                        value="{{ old('department', $job->department) }}"
                        placeholder="e.g. Engineering"
                        required
                    >

                </div>


                {{-- LOCATION --}}
                <div class="admin-form-group">

                    <label for="location">
                        Location
                        <span>*</span>
                    </label>

                    <input
                        type="text"
                        id="location"
                        name="location"
                        value="{{ old('location', $job->location) }}"
                        placeholder="e.g. Cairo, Egypt"
                        required
                    >

                </div>


                {{-- EMPLOYMENT TYPE --}}
                <div class="admin-form-group">

                    <label for="type">
                        Employment Type
                        <span>*</span>
                    </label>

                    <select
                        id="type"
                        name="type"
                        required
                    >

                        <option
                            value=""
                            disabled
                            {{ old('type', $job->type) ? '' : 'selected' }}
                        >
                            Select employment type
                        </option>

                        <option
                            value="Full Time"
                            {{ old('type', $job->type) === 'Full Time' ? 'selected' : '' }}
                        >
                            Full Time
                        </option>

                        <option
                            value="Part Time"
                            {{ old('type', $job->type) === 'Part Time' ? 'selected' : '' }}
                        >
                            Part Time
                        </option>

                        <option
                            value="Contract"
                            {{ old('type', $job->type) === 'Contract' ? 'selected' : '' }}
                        >
                            Contract
                        </option>

                        <option
                            value="Internship"
                            {{ old('type', $job->type) === 'Internship' ? 'selected' : '' }}
                        >
                            Internship
                        </option>

                    </select>

                </div>

            </div>

        </div>


        {{-- =========================================
             JOB DESCRIPTION
        ========================================== --}}

        <div class="admin-form-section">

            <div class="admin-form-section-title">

                <span>
                    02
                </span>

                <div>

                    <h3>
                        Job Details
                    </h3>

                    <p>
                        Describe the position and its responsibilities.
                    </p>

                </div>

            </div>


            <div class="admin-form-grid">


                {{-- DESCRIPTION --}}
                <div class="admin-form-group admin-form-full">

                    <label for="description">
                        Job Description
                        <span>*</span>
                    </label>

                    <textarea
                        id="description"
                        name="description"
                        rows="6"
                        placeholder="Write a description for this position..."
                        required
                    >{{ old('description', $job->description) }}</textarea>

                </div>


                {{-- RESPONSIBILITIES --}}
                <div class="admin-form-group admin-form-full">

                    <label for="responsibilities">
                        Responsibilities
                    </label>

                    <textarea
                        id="responsibilities"
                        name="responsibilities"
                        rows="7"
                        placeholder="List the main responsibilities of this position..."
                    >{{ old('responsibilities', $job->responsibilities) }}</textarea>

                    <small>
                        You can write each responsibility on a separate line.
                    </small>

                </div>


                {{-- QUALIFICATIONS --}}
                <div class="admin-form-group admin-form-full">

                    <label for="qualifications">
                        Qualifications
                    </label>

                    <textarea
                        id="qualifications"
                        name="qualifications"
                        rows="7"
                        placeholder="List the required qualifications..."
                    >{{ old('qualifications', $job->qualifications) }}</textarea>

                    <small>
                        You can write each qualification on a separate line.
                    </small>

                </div>

            </div>

        </div>


        {{-- =========================================
             DATES
        ========================================== --}}

        <div class="admin-form-section">

            <div class="admin-form-section-title">

                <span>
                    03
                </span>

                <div>

                    <h3>
                        Publication Dates
                    </h3>

                    <p>
                        Set when this opportunity is published and when it expires.
                    </p>

                </div>

            </div>


            <div class="admin-form-grid">


                {{-- POSTED DATE --}}
                <div class="admin-form-group">

                    <label for="posted_at">
                        Posted Date
                    </label>

                    <input
                        type="date"
                        id="posted_at"
                        name="posted_at"
                        value="{{ old('posted_at', $job->posted_at?->format('Y-m-d')) }}"
                    >

                </div>


                {{-- EXPIRES DATE --}}
                <div class="admin-form-group">

                    <label for="expires_at">
                        Expiry Date
                    </label>

                    <input
                        type="date"
                        id="expires_at"
                        name="expires_at"
                        value="{{ old('expires_at', $job->expires_at?->format('Y-m-d')) }}"
                    >

                </div>

            </div>

        </div>


        {{-- =========================================
             FORM ACTIONS
        ========================================== --}}

        <div class="admin-form-actions">

            <a
                href="{{ route('admin.careers.index') }}"
                class="admin-cancel-btn"
            >
                Cancel
            </a>

            <button
                type="submit"
                class="admin-update-btn"
            >
                <span>
                    ✓
                </span>

                Update Job
            </button>

        </div>

    </form>

</div>

</div>

@endsection
