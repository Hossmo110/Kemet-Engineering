@extends('layouts.app')

{{-- =========================================================
PAGE CSS
========================================================= --}}

@push('styles')
    @vite('resources/css/admin/create.css')
@endpush

@section('title', 'Add New Job | KEMET Engineering')

@section('content')

    <div class="admin-career-form-page">


        {{-- =====================================================
         PAGE HEADER
    ===================================================== --}}

        <div class="admin-career-form-header">

            <div>

                <span class="admin-label">
                    ADMIN PANEL
                </span>

                <h1>
                    Add New Job
                </h1>

                <p>
                    Create a new career opportunity for KEMET Engineering.
                </p>

            </div>


            <a href="{{ route('admin.careers.index') }}" class="admin-back-btn">
                ← Back to Jobs
            </a>

        </div>


        {{-- =====================================================
         VALIDATION ERRORS
    ===================================================== --}}

        @if ($errors->any())

            <div class="admin-form-errors">

                <strong>
                    Please correct the following errors:
                </strong>

                <ul>

                    @foreach ($errors->all() as $error)
                        <li>
                            {{ $error }}
                        </li>
                    @endforeach

                </ul>

            </div>

        @endif


        {{-- =====================================================
         CREATE JOB FORM
    ===================================================== --}}

        <div class="admin-career-form-card">

            <form action="{{ route('admin.careers.store') }}" method="POST">

                @csrf


                {{-- =================================================
                 BASIC INFORMATION
            ================================================= --}}

                <div class="admin-form-section">

                    <div class="admin-form-section-heading">

                        <span>
                            01
                        </span>

                        <div>

                            <h2>
                                Basic Information
                            </h2>

                            <p>
                                Enter the main information about the position.
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

                            <input type="text" id="title" name="title" value="{{ old('title') }}"
                                placeholder="e.g. Senior Civil Engineer" required>

                        </div>


                        {{-- LOCATION --}}

                        <div class="admin-form-group">

                            <label for="location">
                                Location
                                <span>*</span>
                            </label>

                            <input type="text" id="location" name="location" value="{{ old('location') }}"
                                placeholder="e.g. Cairo, Egypt" required>

                        </div>


                        {{-- DEPARTMENT --}}

                        <div class="admin-form-group">

                            <label for="department">
                                Department
                                <span>*</span>
                            </label>

                            <input type="text" id="department" name="department" value="{{ old('department') }}"
                                placeholder="e.g. Engineering" required>

                        </div>


                        {{-- EMPLOYMENT TYPE --}}

                        <div class="admin-form-group">

                            <label for="type">
                                Employment Type
                                <span>*</span>
                            </label>

                            <select id="type" name="type" required>

                                <option value="">
                                    Select Employment Type
                                </option>

                                <option value="Full Time" {{ old('type') === 'Full Time' ? 'selected' : '' }}>
                                    Full Time
                                </option>

                                <option value="Part Time" {{ old('type') === 'Part Time' ? 'selected' : '' }}>
                                    Part Time
                                </option>

                                <option value="Contract" {{ old('type') === 'Contract' ? 'selected' : '' }}>
                                    Contract
                                </option>

                                <option value="Internship" {{ old('type') === 'Internship' ? 'selected' : '' }}>
                                    Internship
                                </option>

                            </select>

                        </div>

                    </div>

                </div>


                {{-- =================================================
                 JOB CONTENT
            ================================================= --}}

                <div class="admin-form-section">

                    <div class="admin-form-section-heading">

                        <span>
                            02
                        </span>

                        <div>

                            <h2>
                                Job Content
                            </h2>

                            <p>
                                Describe the position and its requirements.
                            </p>

                        </div>

                    </div>


                    {{-- DESCRIPTION --}}

                    <div class="admin-form-group">

                        <label for="description">
                            Job Description
                            <span>*</span>
                        </label>

                        <textarea id="description" name="description" rows="7" placeholder="Write the job description..." required>{{ old('description') }}</textarea>

                    </div>


                    {{-- RESPONSIBILITIES --}}

                    <div class="admin-form-group">

                        <label for="responsibilities">
                            Responsibilities
                        </label>

                        <textarea id="responsibilities" name="responsibilities" rows="8"
                            placeholder="Write each responsibility on a separate line...">{{ old('responsibilities') }}</textarea>

                        <small>
                            You can write each responsibility on a separate line.
                        </small>

                    </div>


                    {{-- QUALIFICATIONS --}}

                    <div class="admin-form-group">

                        <label for="qualifications">
                            Qualifications
                        </label>

                        <textarea id="qualifications" name="qualifications" rows="8"
                            placeholder="Write each qualification on a separate line...">{{ old('qualifications') }}</textarea>

                        <small>
                            You can write each qualification on a separate line.
                        </small>

                    </div>

                </div>


                {{-- =================================================
                 JOB DATES
            ================================================= --}}

                <div class="admin-form-section">

                    <div class="admin-form-section-heading">

                        <span>
                            03
                        </span>

                        <div>

                            <h2>
                                Job Dates
                            </h2>

                            <p>
                                Set the publishing and expiry dates for this position.
                            </p>

                        </div>

                    </div>


                    <div class="admin-form-grid">


                        {{-- POSTED DATE --}}

                        <div class="admin-form-group">

                            <label for="posted_at">
                                Posted Date
                                <span>*</span>
                            </label>

                            <input type="date" id="posted_at" name="posted_at"
                                value="{{ old('posted_at', now()->format('Y-m-d')) }}" required>

                        </div>


                        {{-- EXPIRY DATE --}}

                        <div class="admin-form-group">

                            <label for="expires_at">
                                Expiry Date
                            </label>

                            <input type="date" id="expires_at" name="expires_at" value="{{ old('expires_at') }}">

                        </div>

                    </div>

                </div>


                {{-- =================================================
                 FORM ACTIONS
            ================================================= --}}

                <div class="admin-form-actions">

                    <a href="{{ route('admin.careers.index') }}" class="admin-cancel-btn">
                        Cancel
                    </a>


                    <button type="submit" class="admin-submit-btn">

                        Add Job

                        <span>
                            →
                        </span>

                    </button>

                </div>


            </form>

        </div>

    </div>

@endsection
