<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="This is an ecommerce website based on laravel named Easy Shopping">
    <meta name="author" content="Waliul Hasan">
    <meta name="keywords" content="online store, online business, ecom, ecommerce website, shopping cart, e business, ecommerce platforms">
    <meta name="robots" content="all">

    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title> @yield('title') </title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href=" {{ asset('frontend') }}/assets/css/bootstrap.min.css">

    <!-- Customizable CSS -->
    <link rel="stylesheet" href=" {{ asset('frontend') }}/assets/css/main.css">
    <link rel="stylesheet" href=" {{ asset('frontend') }}/assets/css/blue.css">
    <link rel="stylesheet" href=" {{ asset('frontend') }}/assets/css/owl.carousel.css">
    <link rel="stylesheet" href=" {{ asset('frontend') }}/assets/css/owl.transitions.css">
    <link rel="stylesheet" href=" {{ asset('frontend') }}/assets/css/animate.min.css">
    <link rel="stylesheet" href=" {{ asset('frontend') }}/assets/css/rateit.css">
    <link rel="stylesheet" href=" {{ asset('frontend') }}/assets/css/bootstrap-select.min.css">


    <!-- Icons/Glyphs -->
    <link rel="stylesheet" href=" {{ asset('frontend') }}/assets/css/font-awesome.css">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800'
        rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    {{-- tostr cdn --}}
    <link rel="stylesheet" href=" {{ asset('backend') }}/lib/toastr/toastr.min.css">

    {{-- Sweetalert 2 --}}
    <link rel="stylesheet" href=" {{ asset('backend') }}/lib/sweetalert/sweetalert2.min.css">

    {{-- Bootstrap tagsinput --}}
    <link rel="stylesheet" href=" {{ asset('backend') }}/lib/bootstrap-tagsinput/bootstrap-tagsinput.css ">

    {{-- Bootstrap tagsinput --}}
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" /> --}}
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
</head>

<body class="cnt-home">


    <!-- ============================================== HEADER ============================================== -->
    @include('frontend.layouts.header')
    <!-- ============================================== HEADER : END ============================================== -->
    <div class="body-content outer-top-xs" id="top-banner-and-menu">
        <div class="container">

            @yield('content')

            <!-- ============================================== BRANDS CAROUSEL ============================================== -->
            {{-- @include('frontend.layouts.footer-slider') --}}
            <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
        </div><!-- /.container -->
    </div><!-- /#top-banner-and-menu -->


    <!-- ============================================================= FOOTER ============================================================= -->
    @include('frontend.layouts.footer')
    <!-- ============================================================= FOOTER : END============================================================= -->

    {{-- tostr cdn --}}
    <script src=" {{ asset('backend/lib/toastr/jquery.min.js') }} "></script>
    <script src=" {{ asset('backend/lib/toastr/toastr.min.js') }} "></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script>
        @if (Session:: has('message'))
        toastr.options =
        {
            "closeButton": true,
            "progressBar": true
        }
        toastr.success("{{ session('message') }}");
        @endif

        @if (Session:: has('error'))
        toastr.options =
        {
            "closeButton": true,
            "progressBar": true
        }
        toastr.error("{{ session('error') }}");
        @endif

        @if (Session:: has('info'))
        toastr.options =
        {
            "closeButton": true,
            "progressBar": true
        }
        toastr.info("{{ session('info') }}");
        @endif

        @if (Session:: has('warning'))
        toastr.options =
        {
            "closeButton": true,
            "progressBar": true
        }
        toastr.warning("{{ session('warning') }}");
        @endif
    </script>

    {{-- ################## Bootstrap Tagsinput ###################--}}
    <script src=" {{ asset('backend') }}/lib/bootstrap-tagsinput/bootstrap-tagsinput.min.js "></script>

    <script src=" {{ asset('frontend') }}/assets/js/jquery-1.11.1.min.js"></script>
    <script src=" {{ asset('frontend') }}/assets/js/bootstrap.min.js"></script>
    <script src=" {{ asset('frontend') }}/assets/js/bootstrap-hover-dropdown.min.js"></script>
    <script src=" {{ asset('frontend') }}/assets/js/owl.carousel.min.js"></script>
    <script src=" {{ asset('frontend') }}/assets/js/echo.min.js"></script>
    <script src=" {{ asset('frontend') }}/assets/js/jquery.easing-1.3.min.js"></script>
    <script src=" {{ asset('frontend') }}/assets/js/bootstrap-slider.min.js"></script>
    <script src=" {{ asset('frontend') }}/assets/js/jquery.rateit.min.js"></script>
    <script src=" {{ asset('frontend') }}/assets/js/lightbox.min.js"></script>
    <script src=" {{ asset('frontend') }}/assets/js/bootstrap-select.min.js"></script>
    <script src=" {{ asset('frontend') }}/assets/js/wow.min.js"></script>
    <script src=" {{ asset('frontend') }}/assets/js/scripts.js"></script>

    {{-- ################## Jquery form validator ###################--}}
    <script src="{{asset('common')}}/jquery.validate.min.js"></script>
    <script>
        $.validate({
            lang : 'en'
        });
    </script>


    {{-- ################## Sweetalert 2 ###################--}}
    {{-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}
    <script src=" {{ asset('backend') }}/lib/sweetalert/sweetalert2.all.min.js "></script>

    @yield('scripts')

</body>

</html>
