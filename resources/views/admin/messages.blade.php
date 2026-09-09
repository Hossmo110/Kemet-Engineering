@extends('layouts.admin')

@section('title', 'Contact Messages | KEMET Engineering')

@section('content')

<div class="admin-careers-page">

    {{-- Header --}}
    <div class="admin-careers-header">

        <div class="admin-careers-heading">

            <span class="admin-label">
                CONTACT US
            </span>

            <h1>
                Contact Messages
            </h1>

            <p>
                Manage messages received from the KEMET Engineering website.
            </p>

        </div>

    </div>


    {{-- Messages Table --}}
    <div class="admin-careers-table-wrapper">

        <div class="admin-table-header">

            <div>

                <span class="admin-table-label">
                    MESSAGE MANAGEMENT
                </span>

                <h2>
                    All Messages
                </h2>

            </div>

            <span class="admin-job-count">
                {{ $messages->count() }} Messages
            </span>

        </div>


        @if($messages->count())

            <div class="table-responsive">

                <div class="admin-careers-table">

                    <table>

                        <thead>

                            <tr>

                                <th>
                                    #
                                </th>

                                <th>
                                    Name
                                </th>

                                <th>
                                    Company
                                </th>

                                <th>
                                    Subject
                                </th>

                                <th>
                                    Email
                                </th>

                                <th>
                                    Status
                                </th>

                                <th>
                                    Date
                                </th>

                                <th>
                                    Actions
                                </th>

                            </tr>

                        </thead>


                        <tbody>

                            @foreach($messages as $message)

                                <tr>

                                    {{-- ID --}}
                                    <td>

                                        <span class="admin-job-id">
                                            {{ $message->id }}
                                        </span>

                                    </td>


                                    {{-- Name --}}
                                    <td>

                                        <div class="admin-job-title-wrapper">

                                            <strong>
                                                {{ $message->name }}
                                            </strong>

                                            @if($message->phone)

                                                <span>
                                                    {{ $message->phone }}
                                                </span>

                                            @endif

                                        </div>

                                    </td>


                                    {{-- Company --}}
                                    <td>

                                        {{ $message->company ?? '—' }}

                                    </td>


                                    {{-- Subject --}}
                                    <td>

                                        <div class="admin-job-title-wrapper">

                                            <strong>
                                                {{ $message->subject ?? 'No Subject' }}
                                            </strong>

                                        </div>

                                    </td>


                                    {{-- Email --}}
                                    <td>

                                        {{ $message->email }}

                                    </td>


                                    {{-- Status --}}
                                    <td>

                                        @if($message->status === 'read')

                                            <span class="admin-message-status read">
                                                Read
                                            </span>

                                        @else

                                            <span class="admin-message-status new">
                                                New
                                            </span>

                                        @endif

                                    </td>


                                    {{-- Date --}}
                                    <td>

                                        {{ $message->created_at->format('M d, Y') }}

                                    </td>


                                    {{-- Actions --}}
                                    <td>

                                        <div class="admin-job-actions">

                                            <a href="{{ route('admin.messages.show', $message->id) }}"
                                               class="admin-edit-btn">

                                                View

                                            </a>


                                            @if($message->status !== 'read')

                                                <form action="{{ route('admin.messages.read', $message->id) }}"
                                                      method="POST">

                                                    @csrf

                                                    @method('PATCH')

                                                    <button type="submit"
                                                            class="admin-edit-btn">

                                                        Mark Read

                                                    </button>

                                                </form>

                                            @endif


                                            <form action="{{ route('admin.messages.destroy', $message->id) }}"
                                                  method="POST"
                                                  class="admin-delete-form"
                                                  onsubmit="return confirm('Are you sure you want to delete this message?');">

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
                    💬
                </div>

                <span>
                    NO MESSAGES
                </span>

                <h2>
                    No Messages Yet
                </h2>

                <p>
                    There are currently no messages received from the contact form.
                </p>

            </div>

        @endif

    </div>

</div>

@endsection
