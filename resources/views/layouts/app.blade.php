<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    @include('layouts.partials.assets')
    <title> Cafe | MegaOne HTML5 Template</title>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="90">

    <!-- Start loader -->
        @include('layouts.partials.loader')
    <!-- End loader -->

    <!-- Start Header -->
        @include('layouts.partials.navigation')
    <!-- End Header -->

    <!--Start Banner -->
        <main id="app">
            @yield('content')
        </main>
    <!-- Contact US ends -->

    <!--Site Footer Here-->
        {{--  @include('layouts.partials.footer')  --}}
    <!--Footer ends-->

    <!-- Start Scroll Top -->
    <div class="go-top"><i class="las la-arrow-up"></i><i class="las la-arrow-up"></i></div>
    <!-- End Scroll Top -->

    <!-- JavaScript -->
    <script src="vendor/js/bundle.min.js"></script>
    <!-- Plugin Js -->
    <script src="vendor/js/jquery.appear.js"></script>
    <script src="vendor/js/jquery.fancybox.min.js"></script>
    <script src="vendor/js/owl.carousel.min.js"></script>
    <script src="vendor/js/wow.min.js"></script>
    <script src="vendor/js/jquery.cubeportfolio.min.js"></script>
    <!-- CUSTOM JS -->
    <script src="vendor/js/contact_us.js"></script>
    <script src="cafe/js/script.js"></script>

    </body>
    </html>
