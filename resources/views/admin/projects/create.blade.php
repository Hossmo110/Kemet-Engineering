@extends('layouts.admin')

@section('title', 'Add Project | KEMET Engineering')

@section('content')

    <div class="admin-project-page">


        {{-- PAGE HEADER --}}
        <div class="admin-project-header">

            <div>
                <span class="admin-label">
                    PROJECT MANAGEMENT
                </span>

                <h1>
                    Add New Project
                </h1>

                <p>
                    Create a new project and add its information to the system.
                </p>
            </div>

            <a href="{{ route('admin.projects.index') }}" class="admin-project-back-btn">

                ← Back to Projects

            </a>

        </div>


        {{-- VALIDATION ERRORS --}}
        @if ($errors->any())

            <div class="admin-error-message">

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


        {{-- FORM --}}
        <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">

            @csrf


            {{-- =====================================================
         BASIC INFORMATION
    ====================================================== --}}

            <div class="admin-project-card">

                <div class="admin-project-card-header">

                    <span>
                        PROJECT INFORMATION
                    </span>

                    <h2>
                        Basic Information
                    </h2>

                </div>


                <div class="admin-project-form-grid">

                    {{-- TITLE --}}
                    <div class="admin-project-field admin-project-field-full">

                        <label for="title">
                            Project Name *
                        </label>

                        <input type="text" id="title" name="title" value="{{ old('title') }}"
                            placeholder="Enter project name" required>

                    </div>


                    {{-- LOCATION --}}
                    <div class="admin-project-field">

                        <label for="location">
                            Location
                        </label>

                        <input type="text" id="location" name="location" value="{{ old('location') }}"
                            placeholder="e.g. New Cairo, Egypt">

                    </div>


                    {{-- CATEGORY --}}
                    <div class="admin-project-field">

                        <label for="category">
                            Category
                        </label>

                        <input type="text" id="category" name="category" value="{{ old('category') }}"
                            placeholder="e.g. Commercial">

                    </div>


                    {{-- STATUS --}}
                    <div class="admin-project-field">

                        <label for="status">
                            Project Status *
                        </label>

                        <select id="status" name="status" required>

                            <option value="Ongoing" {{ old('status', 'Ongoing') == 'Ongoing' ? 'selected' : '' }}>
                                Ongoing
                            </option>

                            <option value="Completed" {{ old('status') == 'Completed' ? 'selected' : '' }}>
                                Completed
                            </option>

                            <option value="Upcoming" {{ old('status') == 'Upcoming' ? 'selected' : '' }}>
                                Upcoming
                            </option>

                        </select>

                    </div>


                    {{-- BUA --}}
                    <div class="admin-project-field">

                        <label for="bua">
                            Built-Up Area (BUA)
                        </label>

                        <input type="number" step="0.01" id="bua" name="bua" value="{{ old('bua') }}"
                            placeholder="e.g. 25000">

                    </div>

                </div>

            </div>


            {{-- =====================================================
     PROJECT PARTIES
====================================================== --}}

            <div class="admin-project-card">

                <div class="admin-project-card-header">
                    <span>PROJECT PARTIES</span>

                    <h2>Project Partners</h2>
                </div>

                <div class="admin-project-form-grid">

                    {{-- CLIENT --}}
                    <div class="admin-project-field">
                        <label for="client">Client</label>

                        <input type="text" id="client" name="client" value="{{ old('client') }}"
                            placeholder="Client company">
                    </div>

                    {{-- CONSULTANT --}}
                    <div class="admin-project-field">
                        <label for="consultant">Consultant</label>

                        <input type="text" id="consultant" name="consultant" value="{{ old('consultant') }}"
                            placeholder="Consultant company">
                    </div>

                    {{-- MAIN CONTRACTOR --}}
                    <div class="admin-project-field">
                        <label for="main_contractor">Main Contractor</label>

                        <input type="text" id="main_contractor" name="main_contractor"
                            value="{{ old('main_contractor') }}" placeholder="Main contractor company">
                    </div>

                    {{-- SUBCONTRACTOR --}}
                    <div class="admin-project-field admin-project-field-full">
                        <label for="subcontractor">Subcontractor</label>

                        <input type="text" id="subcontractor" name="subcontractor" value="{{ old('subcontractor') }}"
                            placeholder="Subcontractor company">
                    </div>

                </div>

            </div>


            {{-- =====================================================
         DESCRIPTION
    ====================================================== --}}

            <div class="admin-project-card">

                <div class="admin-project-card-header">

                    <span>
                        PROJECT DESCRIPTION
                    </span>

                    <h2>
                        Description
                    </h2>

                </div>


                <div class="admin-project-field">

                    <textarea id="description" name="description" rows="7"
                        placeholder="Write a detailed description of the project...">{{ old('description') }}</textarea>

                </div>

            </div>


            {{-- =====================================================
         PROJECT DATES
    ====================================================== --}}

            <div class="admin-project-card">

                <div class="admin-project-card-header">

                    <span>
                        PROJECT TIMELINE
                    </span>

                    <h2>
                        Project Dates
                    </h2>

                </div>


                <div class="admin-project-form-grid">

                    {{-- START DATE --}}
                    <div class="admin-project-field">

                        <label for="start_date">
                            Start Date
                        </label>

                        <input type="date" id="start_date" name="start_date" value="{{ old('start_date') }}">

                    </div>


                    {{-- COMPLETION DATE --}}
                    <div class="admin-project-field">

                        <label for="completion_date">
                            Completion Date
                        </label>

                        <input type="date" id="completion_date" name="completion_date"
                            value="{{ old('completion_date') }}">

                    </div>


                    {{-- SORT ORDER --}}
                    <div class="admin-project-field">

                        <label for="sort_order">
                            Display Order
                        </label>

                        <input type="number" id="sort_order" name="sort_order" value="{{ old('sort_order', 0) }}"
                            min="0">

                    </div>


                    {{-- FEATURED --}}
                    <div class="admin-project-field">

                        <label>
                            Featured Project
                        </label>

                        <label class="admin-project-checkbox">

                            <input type="checkbox" name="featured" value="1"
                                {{ old('featured') ? 'checked' : '' }}>

                            <span>
                                Show this project as featured
                            </span>

                        </label>

                    </div>

                </div>

            </div>


            {{-- =====================================================
         MAIN IMAGE
    ====================================================== --}}

            <div class="admin-project-card">

                <div class="admin-project-card-header">

                    <span>
                        PROJECT MEDIA
                    </span>

                    <h2>
                        Main Image
                    </h2>

                </div>


                <div class="admin-project-field">

                    <label for="main_image">
                        Main Project Image
                    </label>

                    <input type="file" id="main_image" name="main_image" accept="image/jpeg,image/png,image/webp">

                    <small>
                        This image will be used as the main project image.
                        Recommended formats: JPG, PNG or WEBP. Maximum size: 5MB.
                    </small>


                    {{-- MAIN IMAGE PREVIEW --}}
                    <div id="main-image-preview" class="admin-project-image-preview"></div>

                </div>

            </div>


            {{-- =====================================================
         PROJECT GALLERY
    ====================================================== --}}

            <div class="admin-project-card">

                <div class="admin-project-card-header">

                    <span>
                        PROJECT GALLERY
                    </span>

                    <h2>
                        Gallery Images
                    </h2>

                    <p>
                        Add multiple images that will appear on the project details page.
                    </p>

                </div>


                <div class="admin-project-field">

                    <label for="gallery">
                        Project Gallery Images
                    </label>

                    <input type="file" id="gallery" name="gallery[]" accept="image/jpeg,image/png,image/webp"
                        multiple>

                    <small>
                        You can select multiple images at once.
                        Hold Ctrl and select multiple images, or select a folder of images.
                        Recommended formats: JPG, PNG or WEBP. Maximum size: 5MB per image.
                    </small>


                    {{-- GALLERY PREVIEW --}}
                    <div id="gallery-preview" class="admin-project-gallery-preview"></div>

                </div>

            </div>


            {{-- =====================================================
         FORM ACTIONS
    ====================================================== --}}

            <div class="admin-project-form-actions">

                <a href="{{ route('admin.projects.index') }}" class="admin-project-cancel-btn">
                    Cancel
                </a>


                <button type="submit" class="admin-project-save-btn">
                    Save Project
                </button>

            </div>

        </form>
        ```

    </div>

    {{-- =====================================================
IMAGE PREVIEW SCRIPT
===================================================== --}}

    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const mainImageInput = document.getElementById('main_image');
            const mainImagePreview = document.getElementById('main-image-preview');

            const galleryInput = document.getElementById('gallery');
            const galleryPreview = document.getElementById('gallery-preview');


            /*
            |--------------------------------------------------------------------------
            | Main Image Preview
            |--------------------------------------------------------------------------
            */

            if (mainImageInput) {

                mainImageInput.addEventListener('change', function() {

                    mainImagePreview.innerHTML = '';

                    const file = this.files[0];

                    if (!file) {
                        return;
                    }

                    const reader = new FileReader();

                    reader.onload = function(event) {

                        const wrapper = document.createElement('div');

                        wrapper.className = 'admin-project-preview-item';

                        wrapper.innerHTML = `
                    <img
                        src="${event.target.result}"
                        alt="Main project image preview"
                    >
                `;

                        mainImagePreview.appendChild(wrapper);
                    };

                    reader.readAsDataURL(file);

                });

            }


            /*
            |--------------------------------------------------------------------------
            | Gallery Preview
            |--------------------------------------------------------------------------
            */

            if (galleryInput) {

                galleryInput.addEventListener('change', function() {

                    galleryPreview.innerHTML = '';

                    const files = Array.from(this.files);

                    if (!files.length) {
                        return;
                    }

                    files.forEach(function(file) {

                        if (!file.type.startsWith('image/')) {
                            return;
                        }

                        const reader = new FileReader();

                        reader.onload = function(event) {

                            const wrapper = document.createElement('div');

                            wrapper.className = 'admin-project-gallery-preview-item';

                            wrapper.innerHTML = `
                        <img
                            src="${event.target.result}"
                            alt="Gallery image preview"
                        >
                    `;

                            galleryPreview.appendChild(wrapper);

                        };

                        reader.readAsDataURL(file);

                    });

                });

            }

        });
    </script>

@endsection
