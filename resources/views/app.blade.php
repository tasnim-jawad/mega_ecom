<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>
        ETEK
    </title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="big-deal">
    <meta name="keywords" content="big-deal">
    <meta name="author" content="big-deal">
    <link rel="shortcut icon" href="/frontend/images/etek_favicon.png"
        type="image/x-icon">
    <!--Google font-->
    <link href="{{ asset('frontend') }}/assets/css/css" rel="stylesheet">
    <link href="{{ asset('frontend') }}/assets/css/css(1)" rel="stylesheet">
    <!--icon css-->
    {{--
    <link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/assets/css/font-awesome.css"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/assets/css/themify.css">
    <!--Slick slider css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/assets/css/slick-theme.css">
    <!--Animate css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/assets/css/animate.css">
    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/assets/css/bootstrap.css">
    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/assets/css/color4.css" media="screen" id="color">
    {{-- <link rel="stylesheet" href="https://themes.pixelstrap.com/bigdeal/assets/css/color1.css"> --}}

    <!-- latest jquery-->
    <script src="{{ asset('frontend') }}/assets/js/jquery-3.3.1.min.js.download"></script>
    <!-- slick js-->
    <script src="{{ asset('frontend') }}/assets/js/slick.js"></script>
    <!-- tool tip js -->
    <script src="{{ asset('frontend') }}/assets/js/tippy-popper.min.js.download"></script>
    <script src="{{ asset('frontend') }}/assets/js/tippy-bundle.iife.min.js.download"></script>
    <!-- popper js-->
    <script src="{{ asset('frontend') }}/assets/js/popper.min.js.download"></script>
    <!-- Height js-->
    <script src="{{ asset('frontend') }}/assets/js/equal-height.js.download"></script>
    <!-- Timer js-->
    <script src="{{ asset('frontend') }}/assets/js/menu.js"></script>
    <!-- father icon -->
    <script src="{{ asset('frontend') }}/assets/js/feather.min.js.download"></script>
    <script src="{{ asset('frontend') }}/assets/js/feather-icon.js.download"></script>
    <!-- Bootstrap js-->
    <script src="{{ asset('frontend') }}/assets/js/bootstrap-notify.min.js.download"></script>
    <!-- Bootstrap js-->
    <script src="{{ asset('frontend') }}/assets/js/bootstrap.js.download"></script>
    <!-- Theme js-->
    {{-- <script src="{{asset("frontend")}}/assets/js/slider-animat-three.js.download"></script> --}}
    <script src="{{ asset('frontend') }}/assets/js/script.js"></script>
    {{-- <script src="{{asset("frontend")}}/assets/js/timer2.js.download"></script> --}}
    <script src="{{ asset('frontend') }}/assets/js/modal.js.download"></script>
    @vite(['resources/js/frontend/app.js'])
    @inertiaHead

    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/custom.css"">
</head>

<body>
    @inertia
</body>

</html>
