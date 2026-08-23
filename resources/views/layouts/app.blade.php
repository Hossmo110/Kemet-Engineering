
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


    @vite([
        'resources/css/app.css',
        'resources/css/about.css',
        'resources/css/pages/show.css',
        'resources/js/app.js'
    ])

</head>


<body>

    {{-- =====================================================
         MAIN WEBSITE HEADER
         Hide it only on individual career job pages
         ===================================================== --}}

    @if (!request()->is('careers/*'))

        @include('layouts.header')

    @endif


    <main>

        @yield('content')

    </main>


    {{-- =====================================================
         FOOTER
         ===================================================== --}}

    @include('layouts.footer')


</body>

</html>
