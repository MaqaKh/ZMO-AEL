<!-- master.blade.php -->

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Execution - Corporate Category Bootstrap Responsive Website Template - Home : W3Layouts</title>
    <!-- google-fonts -->
    <link href="http://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <!-- //google-fonts -->
    <!-- Font-Awesome-Icons-CSS -->

    <link rel="stylesheet" href={{asset('/css/fontawesome-all.min.css')}}>
    <!-- Template CSS Style link -->
    <link rel="stylesheet" href={{asset('/css/style-liberty.css')}}>



    @yield('styles')

</head>

<body>

    <!-- Header -->

    @include('main_header')



    {{-- @include('banner')
    @include('service_section') --}}
    @yield('content')
    @include('footer')
    <!-- Menu -->
    {{-- @include('menu')

    <!-- Content Section -->
    <div class="container">
        @yield('content')
    </div>

    <!-- Footer -->
    @include('partials.footer') --}}

    <!-- Add your common scripts, analytics, etc. here -->

</body>
</html>