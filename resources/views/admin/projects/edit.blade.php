@extends('layouts.admin')

@section('title', 'Edit Project | KEMET Engineering')

@section('content')

<div class="admin-project-page">

    {{-- =====================================================
         PAGE HEADER
    ====================================================== --}}

    <div class="admin-project-header">

        <div>

            <span class="admin-label">
                PROJECT MANAGEMENT
            </span>

            <h1>
                Edit Project
            </h1>

            <p>
                Update the information and media of this project.
            </p>

        </div>


        <a
            href="{{ route('admin.projects.index') }}"
            class="admin-project-back-btn"
        >
            ← Back to Projects
        </a>

    </div>


    {{-- =====================================================
         VALIDATION ERRORS
    ====================================================== --}}

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


    {{-- =====================================================
         SUCCESS MESSAGE
    ====================================================== --}}

    @if(session('success'))

        <div class="admin-success-message">

            {{ session('success') }}

        </div>

    @endif


    {{-- =====================================================
         FORM
    ====================================================== --}}

    <form
        action="{{ route('admin.projects.update', $project->id) }}"
        method="POST"
        enctype="multipart/form-data"
    >

        @csrf

        @method('PUT')


        {{-- =================================================
             BASIC INFORMATION
        ================================================== --}}

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

                    <input
                        type="text"
                        id="title"
                        name="title"
                        value="{{ old('title', $project->title) }}"
                        placeholder="Enter project name"
                        required
                    >

                </div>


                {{-- LOCATION --}}

                <div class="admin-project-field">

                    <label for="location">
                        Location
                    </label>

                    <input
                        type="text"
                        id="location"
                        name="location"
                        value="{{ old('location', $project->location) }}"
                        placeholder="e.g. New Cairo, Egypt"
                    >

                </div>


                {{-- CATEGORY --}}

                <div class="admin-project-field">

                    <label for="category">
                        Category
                    </label>

                    <input
                        type="text"
                        id="category"
                        name="category"
                        value="{{ old('category', $project->category) }}"
                        placeholder="e.g. Commercial"
                    >

                </div>


                {{-- STATUS --}}

                <div class="admin-project-field">

                    <label for="status">
                        Project Status *
                    </label>

                    <select
                        id="status"
                        name="status"
                        required
                    >

                        <option
                            value="Ongoing"
                            {{ old('status', $project->status) == 'Ongoing' ? 'selected' : '' }}
                        >
                            Ongoing
                        </option>

                        <option
                            value="Completed"
                            {{ old('status', $project->status) == 'Completed' ? 'selected' : '' }}
                        >
                            Completed
                        </option>

                        <option
                            value="Upcoming"
                            {{ old('status', $project->status) == 'Upcoming' ? 'selected' : '' }}
                        >
                            Upcoming
                        </option>

                    </select>

                </div>


                {{-- BUA --}}

                <div class="admin-project-field">

                    <label for="bua">
                        Built-Up Area (BUA)
                    </label>

                    <input
                        type="number"
                        step="0.01"
                        id="bua"
                        name="bua"
                        value="{{ old('bua', $project->bua) }}"
                        placeholder="e.g. 25000"
                    >

                </div>

            </div>

        </div>


        {{-- =================================================
             PROJECT PARTIES
        ================================================== --}}

        <div class="admin-project-card">

            <div class="admin-project-card-header">

                <span>
                    PROJECT PARTIES
                </span>

                <h2>
                    Project Partners
                </h2>

            </div>


            <div class="admin-project-form-grid">


                {{-- CONSULTANT --}}

                <div class="admin-project-field">

                    <label for="consultant">
                        Consultant
                    </label>

                    <input
                        type="text"
                        id="consultant"
                        name="consultant"
                        value="{{ old('consultant', $project->consultant) }}"
                        placeholder="Consultant company"
                    >

                </div>


                {{-- MAIN CONTRACTOR --}}

                <div class="admin-project-field">

                    <label for="main_contractor">
                        Main Contractor
                    </label>

                    <input
                        type="text"
                        id="main_contractor"
                        name="main_contractor"
                        value="{{ old('main_contractor', $project->main_contractor) }}"
                        placeholder="Main contractor company"
                    >

                </div>


                {{-- SUBCONTRACTOR --}}

                <div class="admin-project-field admin-project-field-full">

                    <label for="subcontractor">
                        Subcontractor
                    </label>

                    <input
                        type="text"
                        id="subcontractor"
                        name="subcontractor"
                        value="{{ old('subcontractor', $project->subcontractor) }}"
                        placeholder="Subcontractor company"
                    >

                </div>

            </div>

        </div>


        {{-- =================================================
             DESCRIPTION
        ================================================== --}}

        <div class="admin-project-card">

            <div class="admin-project-card-header">

                <span>
                    PROJECT DESCRIPTION
                </span>

                <h2>
                    Description
                </h2>

            </div>


            <div class="admin-project-form-grid">

                <div class="admin-project-field admin-project-field-full">

                    <textarea
                        id="description"
                        name="description"
                        rows="7"
                        placeholder="Write a detailed description of the project..."
                    >{{ old('description', $project->description) }}</textarea>

                </div>

            </div>

        </div>


        {{-- =================================================
             PROJECT DATES
        ================================================== --}}

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

                    <input
                        type="date"
                        id="start_date"
                        name="start_date"
                        value="{{ old('start_date', $project->start_date ? \Carbon\Carbon::parse($project->start_date)->format('Y-m-d') : '') }}"
                    >

                </div>


                {{-- COMPLETION DATE --}}

                <div class="admin-project-field">

                    <label for="completion_date">
                        Completion Date
                    </label>

                    <input
                        type="date"
                        id="completion_date"
                        name="completion_date"
                        value="{{ old('completion_date', $project->completion_date ? \Carbon\Carbon::parse($project->completion_date)->format('Y-m-d') : '') }}"
                    >

                </div>


                {{-- SORT ORDER --}}

                <div class="admin-project-field">

                    <label for="sort_order">
                        Display Order
                    </label>

                    <input
                        type="number"
                        id="sort_order"
                        name="sort_order"
                        value="{{ old('sort_order', $project->sort_order ?? 0) }}"
                        min="0"
                    >

                </div>


                {{-- FEATURED --}}

                <div class="admin-project-field">

                    <label>
                        Featured Project
                    </label>

                    <label class="admin-project-checkbox">

                        <input
                            type="checkbox"
                            name="featured"
                            value="1"
                            {{ old('featured', $project->featured) ? 'checked' : '' }}
                        >

                        <span>
                            Show this project as featured
                        </span>

                    </label>

                </div>

            </div>

        </div>


        {{-- =================================================
             MAIN IMAGE
        ================================================== --}}

        <div class="admin-project-card">

            <div class="admin-project-card-header">

                <span>
                    PROJECT MEDIA
                </span>

                <h2>
                    Main Image
                </h2>

            </div>


            <div class="admin-project-media-content">


                {{-- CURRENT MAIN IMAGE --}}

                @if($project->main_image)

                    <div class="admin-current-image">

                        <span class="admin-media-label">
                            Current Main Image
                        </span>

                        <img
                            src="{{ asset('storage/' . $project->main_image) }}"
                            alt="{{ $project->title }}"
                        >

                    </div>

                @endif


                {{-- NEW IMAGE --}}

                <div class="admin-project-field">

                    <label for="main_image">
                        Replace Main Project Image
                    </label>

                    <input
                        type="file"
                        id="main_image"
                        name="main_image"
                        accept="image/jpeg,image/png,image/webp"
                    >

                    <small>
                        Leave empty if you want to keep the current image.
                    </small>

                </div>

            </div>

        </div>


        {{-- =================================================
             CURRENT GALLERY
        ================================================== --}}

        <div class="admin-project-card">

            <div class="admin-project-card-header">

                <span>
                    PROJECT GALLERY
                </span>

                <h2>
                    Current Gallery
                </h2>

            </div>


            <div class="admin-gallery-content">

                @if($project->images->count())

                    <div class="admin-gallery-grid">

                        @foreach($project->images as $image)

                            <div class="admin-gallery-item">

                                <img
                                    src="{{ asset('storage/' . $image->image) }}"
                                    alt="{{ $project->title }} gallery image"
                                >


                                <div class="admin-gallery-item-footer">

                                    <span>
                                        Gallery Image
                                    </span>


                                    <form
                                        action="{{ route('admin.projects.images.destroy', $image->id) }}"
                                        method="POST"
                                        onsubmit="return confirm('Are you sure you want to delete this image?');"
                                    >

                                        @csrf

                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            class="admin-gallery-delete-btn"
                                        >
                                            Delete
                                        </button>

                                    </form>

                                </div>

                            </div>

                        @endforeach

                    </div>

                @else

                    <div class="admin-gallery-empty">

                        <p>
                            No gallery images have been added to this project yet.
                        </p>

                    </div>

                @endif

            </div>

        </div>


        {{-- =================================================
             ADD NEW GALLERY IMAGES
        ================================================== --}}

        <div class="admin-project-card">

            <div class="admin-project-card-header">

                <span>
                    PROJECT GALLERY
                </span>

                <h2>
                    Add Gallery Images
                </h2>

            </div>


            <div class="admin-project-field admin-project-gallery-upload">

                <label for="gallery">
                    Add New Gallery Images
                </label>

                <input
                    type="file"
                    id="gallery"
                    name="gallery[]"
                    accept="image/jpeg,image/png,image/webp"
                    multiple
                >

                <small>
                    You can select multiple images. Existing gallery images will not be removed.
                </small>

            </div>

        </div>


        {{-- =================================================
             FORM ACTIONS
        ================================================== --}}

        <div class="admin-project-form-actions">

            <a
                href="{{ route('admin.projects.index') }}"
                class="admin-project-cancel-btn"
            >
                Cancel
            </a>


            <button
                type="submit"
                class="admin-project-save-btn"
            >
                Update Project
            </button>

        </div>


    </form>

</div>

@endsection