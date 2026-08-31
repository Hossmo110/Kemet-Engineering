@extends('layouts.admin')

@section('title', 'Projects | KEMET Engineering')

@section('content')

<div class="admin-careers-page">

    <div class="admin-careers-header">

        <div class="admin-careers-heading">

            <span class="admin-label">
                PROJECTS
            </span>

            <h1>
                Projects
            </h1>

            <p>
                Manage KEMET Engineering projects.
            </p>

        </div>

        <a href="{{ route('admin.projects.create') }}"
           class="admin-add-job-btn">

            <span>＋</span>

            Add New Project

        </a>

    </div>


    <div class="admin-careers-table-wrapper">

        <div class="admin-table-header">

            <div>

                <span class="admin-table-label">
                    PROJECT MANAGEMENT
                </span>

                <h2>
                    All Projects
                </h2>

            </div>

            <span class="admin-job-count">
                {{ $projects->count() }} Projects
            </span>

        </div>


        @if($projects->count())

            <div class="table-responsive">

                <div class="admin-careers-table">

                    <table>

                        <thead>

                            <tr>

                                <th>
                                    #
                                </th>

                                <th>
                                    Project
                                </th>

                                <th>
                                    Category
                                </th>

                                <th>
                                    Location
                                </th>

                                <th>
                                    Status
                                </th>

                                <th>
                                    Actions
                                </th>

                            </tr>

                        </thead>

                        <tbody>

                            @foreach($projects as $project)

                                <tr>

                                    <td>
                                        <span class="admin-job-id">
                                            {{ $project->id }}
                                        </span>
                                    </td>


                                    <td>

                                        <div class="admin-job-title-wrapper">

                                            <strong>
                                                {{ $project->title }}
                                            </strong>

                                            @if($project->consultant)
                                                <span>
                                                    Consultant:
                                                    {{ $project->consultant }}
                                                </span>
                                            @endif

                                        </div>

                                    </td>


                                    <td>

                                        {{ $project->category ?? '—' }}

                                    </td>


                                    <td>

                                        {{ $project->location ?? '—' }}

                                    </td>


                                    <td>

                                        <span class="admin-job-type">
                                            {{ $project->status }}
                                        </span>

                                    </td>


                                    <td>

                                        <div class="admin-job-actions">

                                            <a href="{{ route('admin.projects.edit', $project->id) }}"
                                               class="admin-edit-btn">

                                                Edit

                                            </a>


                                            <form action="{{ route('admin.projects.destroy', $project->id) }}"
                                                  method="POST"
                                                  class="admin-delete-form"
                                                  onsubmit="return confirm('Are you sure you want to delete this project?');">

                                                @csrf

                                                @method('DELETE')

                                                <button type="submit"
                                                        class="admin-delete-btn">

                                                    Delete

                                                </button>

                                            </form>

                                        </div>

                                    </td>

                                </tr>

                            @endforeach

                        </tbody>

                    </table>

                </div>

            </div>

        @else

            <div class="admin-no-jobs">

                <div class="admin-no-jobs-icon">
                    🏗️
                </div>

                <span>
                    NO PROJECTS
                </span>

                <h2>
                    No Projects Yet
                </h2>

                <p>
                    There are currently no projects added to the system.
                </p>

                <a href="{{ route('admin.projects.create') }}"
                   class="admin-add-job-btn">

                    <span>＋</span>

                    Add Your First Project

                </a>

            </div>

        @endif

    </div>

</div>

@endsection