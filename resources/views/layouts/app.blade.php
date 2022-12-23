<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head></head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>@yield('page_title', 'Gift')</title>

<!-- Fonts -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Mountains+of+Christmas:wght@400;700&display=swap" rel="stylesheet">
<!-- Styles -->
@vite('resources/js/app.js')

</head>

<body>

    {{-- <!-- @include('partials.header') --> --}}

    <main class="position-relative"></main>
    <div id="snow-container">


    </div>
    @yield('content')

    </main>

    @include('partials.footer')

</body>

</html>
