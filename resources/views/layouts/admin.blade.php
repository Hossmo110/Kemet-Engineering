
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        @yield('title', 'KEMET Engineering | Admin')
    </title>


    {{-- =====================================================
         VITE CSS & JS
    ===================================================== --}}

    @vite([
        'resources/css/app.css',
        'resources/css/admin/admin.css',
        'resources/js/app.js'
    ])

</head>


<body class="admin-body">


    {{-- =====================================================
         ADMIN LAYOUT
    ===================================================== --}}

    <div class="admin-layout">


        {{-- =================================================
             SIDEBAR
        ================================================= --}}

        <aside class="admin-sidebar">


            {{-- =================================================
                 LOGO
            ================================================= --}}

            <div class="admin-sidebar-logo">

                <a href="{{ route('admin.careers.index') }}">

                    <img
                        src="{{ asset('images/logo.png') }}"
                        alt="KEMET Engineering"
                    >

                </a>

            </div>


            {{-- =================================================
                 ADMIN TITLE
            ================================================= --}}

            <div class="admin-sidebar-title">

                <span>
                    ADMIN PANEL
                </span>

                <h2>
                    KEMET Engineering
                </h2>

            </div>


            {{-- =================================================
                 NAVIGATION
            ================================================= --}}

            <nav class="admin-sidebar-nav">


                {{-- CAREER JOBS --}}

                <a
                    href="{{ route('admin.careers.index') }}"
                    class="{{ request()->routeIs('admin.careers.index') ? 'active' : '' }}"
                >

                    <span class="admin-nav-icon">
                        💼
                    </span>

                    <span>
                        Career Jobs
                    </span>

                </a>


                {{-- ADD NEW JOB --}}

                <a
                    href="{{ route('admin.careers.create') }}"
                    class="{{ request()->routeIs('admin.careers.create') ? 'active' : '' }}"
                >

                    <span class="admin-nav-icon">
                        ＋
                    </span>

                    <span>
                        Add New Job
                    </span>

                </a>


                {{-- VIEW WEBSITE --}}

                <a
                    href="{{ route('home') }}"
                    target="_blank"
                >

                    <span class="admin-nav-icon">
                        🌐
                    </span>

                    <span>
                        View Website
                    </span>

                </a>

            </nav>


            {{-- =================================================
                 SIDEBAR BOTTOM
            ================================================= --}}

            <div class="admin-sidebar-bottom">


                {{-- LOGGED IN USER --}}

                <div class="admin-user-info">

                    <div class="admin-user-avatar">

                        {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}

                    </div>


                    <div>

                        <strong>
                            {{ auth()->user()->name }}
                        </strong>

                        <span>
                            Administrator
                        </span>

                    </div>

                </div>


                {{-- LOGOUT --}}

                <form
                    action="{{ route('admin.logout') }}"
                    method="POST"
                >

                    @csrf

                    <button
                        type="submit"
                        class="admin-logout-btn"
                    >

                        <span>
                            ↪
                        </span>

                        Logout

                    </button>

                </form>

            </div>

        </aside>


        {{-- =================================================
             MAIN ADMIN AREA
        ================================================= --}}

        <div class="admin-main">


            {{-- =================================================
                 TOP BAR
            ================================================= --}}

            <header class="admin-topbar">


                <div>

                    <span class="admin-topbar-label">
                        KEMET ENGINEERING
                    </span>

                    <strong>
                        Administration
                    </strong>

                </div>


                {{-- VISIT WEBSITE --}}

                <a
                    href="{{ route('home') }}"
                    target="_blank"
                    class="admin-website-btn"
                >

                    Visit Website

                    <span>
                        →
                    </span>

                </a>

            </header>


            {{-- =================================================
                 PAGE CONTENT
            ================================================= --}}

            <main class="admin-content">

                @yield('content')

            </main>


        </div>

    </div>


</body>

</html>
