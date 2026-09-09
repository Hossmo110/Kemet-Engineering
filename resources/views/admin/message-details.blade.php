@extends('layouts.admin')

@section('title', 'Message Details | KEMET Engineering')

@section('content')

<div class="admin-message-page">

    {{-- PAGE HEADER --}}
    <div class="admin-message-page-header">

        <div class="admin-message-page-heading">

            <span class="admin-label">
                CONTACT MESSAGE
            </span>

            <h1>
                Message Details
            </h1>

            <p>
                View and manage the message received from the KEMET Engineering website.
            </p>

        </div>

        <a href="{{ route('admin.messages.index') }}"
           class="admin-message-back-btn">

            <span>←</span>

            Back to Messages

        </a>

    </div>


    {{-- MESSAGE CARD --}}
    <div class="admin-message-card">

        {{-- CARD HEADER --}}
        <div class="admin-message-card-header">

            <div class="admin-message-card-title">

                <span class="admin-message-card-label">
                    MESSAGE
                </span>

                <h2>
                    {{ $message->subject ?? 'No Subject' }}
                </h2>

            </div>


            {{-- STATUS --}}
            @if($message->status === 'read')

                <span class="admin-message-status read">
                    <span class="status-dot"></span>
                    Read
                </span>

            @else

                <span class="admin-message-status new">
                    <span class="status-dot"></span>
                    New
                </span>

            @endif

        </div>


        {{-- SENDER INFORMATION --}}
        <div class="admin-message-section">

            <div class="admin-message-section-title">

                <div class="admin-message-section-icon">
                    👤
                </div>

                <div>
                    <span>
                        SENDER INFORMATION
                    </span>

                    <h3>
                        Contact Information
                    </h3>
                </div>

            </div>


            <div class="admin-message-info-grid">

                {{-- NAME --}}
                <div class="admin-message-info-item">

                    <span class="admin-message-info-label">
                        Name
                    </span>

                    <strong>
                        {{ $message->name }}
                    </strong>

                </div>


                {{-- EMAIL --}}
                <div class="admin-message-info-item">

                    <span class="admin-message-info-label">
                        Email Address
                    </span>

                    <strong class="admin-message-email">
                        {{ $message->email }}
                    </strong>

                </div>


                {{-- PHONE --}}
                <div class="admin-message-info-item">

                    <span class="admin-message-info-label">
                        Phone / Mobile
                    </span>

                    <strong>
                        {{ $message->phone ?? '—' }}
                    </strong>

                </div>


                {{-- COMPANY --}}
                <div class="admin-message-info-item">

                    <span class="admin-message-info-label">
                        Company
                    </span>

                    <strong>
                        {{ $message->company ?? '—' }}
                    </strong>

                </div>


                {{-- DATE --}}
                <div class="admin-message-info-item">

                    <span class="admin-message-info-label">
                        Received
                    </span>

                    <strong>
                        {{ $message->created_at->format('M d, Y - h:i A') }}
                    </strong>

                </div>

            </div>

        </div>


        {{-- SUBJECT --}}
        <div class="admin-message-section">

            <div class="admin-message-section-title">

                <div class="admin-message-section-icon">
                    📝
                </div>

                <div>
                    <span>
                        SUBJECT
                    </span>

                    <h3>
                        Message Subject
                    </h3>
                </div>

            </div>


            <div class="admin-message-subject-box">

                <h3>
                    {{ $message->subject ?? 'No Subject' }}
                </h3>

            </div>

        </div>


        {{-- MESSAGE CONTENT --}}
        <div class="admin-message-section">

            <div class="admin-message-section-title">

                <div class="admin-message-section-icon">
                    💬
                </div>

                <div>
                    <span>
                        MESSAGE CONTENT
                    </span>

                    <h3>
                        Message
                    </h3>
                </div>

            </div>


            <div class="admin-message-content-box">

                <p>
                    {{ $message->message }}
                </p>

            </div>

        </div>


        {{-- ACTIONS --}}
        <div class="admin-message-footer">

            <div class="admin-message-footer-info">

                <span>
                    MESSAGE ID
                </span>

                <strong>
                    #{{ $message->id }}
                </strong>

            </div>


            <div class="admin-message-actions">

                @if($message->status !== 'read')

                    <form action="{{ route('admin.messages.read', $message->id) }}"
                          method="POST">

                        @csrf
                        @method('PATCH')

                        <button type="submit"
                                class="admin-message-read-btn">

                            <span>
                                ✓
                            </span>

                            Mark as Read

                        </button>

                    </form>

                @endif


                <form action="{{ route('admin.messages.destroy', $message->id) }}"
                      method="POST"
                      onsubmit="return confirm('Are you sure you want to delete this message?');">

                    @csrf
                    @method('DELETE')

                    <button type="submit"
                            class="admin-message-delete-btn">

                        <span>
                            🗑
                        </span>

                        Delete Message

                    </button>

                </form>

            </div>

        </div>

    </div>

</div>

@endsection
