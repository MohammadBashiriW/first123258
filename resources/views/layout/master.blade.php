<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="HTML,CSS,JavaScript">
    <meta name="author" content="mohammad bashiri">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>


    <link href="/css/main.css" rel="stylesheet" type="text/css">
    <link href="/css/owl.carousel.min.css" rel="stylesheet" type="text/css">
    <link href="/css/owl.theme.default.min.css" rel="stylesheet" type="text/css">
    <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/css/bootstrap-rtl.css" rel="stylesheet" type="text/css">
    <link href="/css/animate.min.css" rel="stylesheet" type="text/css">
    <script src="/js/jquery.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/wow.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="/js/main.js" type="text/javascript"></script>
</head>

<body>

   @include('layout.navbar')



    @include('layout.slidebar')

    <div class="cart-button-float cart-btn">
        <i class="fa fa-shopping-cart wow fadeIn"></i>
    </div>

    <div class="main_over"></div>

   <br>
    @yield('delete_page')

    @include('layout.cart')

    @yield('info_1')<br><br><br>
   @yield('content')
    @yield('about')

    @yield('info_2')

    @yield('info_3')

    @yield('info_4')

    @yield('rights')

    @yield('form_update')

    @yield('sign_form')

    @include('layout.footer')
</body>

<script>
    AOS.init();

    AOS.init({

        offset: 120, // offset (in px) from the original trigger point
        delay: 0, // values from 0 to 3000, with step 50ms
        duration: 400, // values from 0 to 3000, with step 50ms
        easing: 'ease', // default easing for AOS animations
        once: false, // whether animation should happen only once - while scrolling down
        mirror: false, // whether elements should animate out while scrolling past them
        anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

    });
</script>

</html>
