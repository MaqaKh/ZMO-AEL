<!-- master.blade.php -->

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>ZIMMER - A TRADITIONAL GERMAN BRAND</title>
    <!-- google-fonts -->
    <link href="http://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">
        <link rel="icon" type="image/x-icon" href="{{asset('/images/favicon.ico')}}">


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
    <script>

        // jQuery
        $(window).scroll(function () {
            var scrolled = $(window).scrollTop() > 10; // Check if page is scrolled

            if (scrolled) {
                $('.logoImg').addClass('scrolled'); // Add scrolled class
                $('.logoImg').removeClass('navbar-logo-main'); // Add scrolled class
            } else {
                $('.logoImg').addClass('navbar-logo-main');
                $('.logoImg').removeClass('scrolled'); // Remove scrolled class
            }
        });

    </script>

</body>
</html>

