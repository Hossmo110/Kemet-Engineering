<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="UTF-8">

<meta
    name="viewport"
    content="width=device-width, initial-scale=1.0"
>

<title>
    @yield('title', 'Engineering Company')
</title>


{{-- =====================================================
     MAIN CSS & JS
     ===================================================== --}}

@vite([
    'resources/css/app.css',
    'resources/js/app.js'
])


{{-- =====================================================
     PAGE-SPECIFIC CSS
     ===================================================== --}}

@stack('styles')

</head>

<body>


{{-- =====================================================
     MAIN WEBSITE HEADER
     Hide it on:
     - Individual career pages
     - Admin pages
     ===================================================== --}}

@if (
    !request()->is('careers/*') &&
    !request()->is('admin/*')
)

    @include('layouts.header')

@endif


{{-- =====================================================
     MAIN CONTENT
     ===================================================== --}}

<main>

    @yield('content')

</main>


{{-- =====================================================
     MAIN WEBSITE FOOTER
     Hide it on admin pages
     ===================================================== --}}

@if (!request()->is('admin/*'))

    @include('layouts.footer')

@endif


{{-- =====================================================
     PAGE-SPECIFIC SCRIPTS
     ===================================================== --}}

@stack('scripts')

</body>

</html>
