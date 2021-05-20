<!doctype html>
<html class="loading" data-textdirection="ltr" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <title>@yield('title')</title>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta name="author" content="Sirojiddin">

        <meta content="olympics.uz, olympic.uz olympics, olympic, online judge, dasturlash, programming, coding, cpp, java, python, pascal, onlayn hakam, sport dasturlashi, Competitive Programming, dasturlash tili, dasturlash tillari, dasturlash asoslari, algoritm, algoritmlash, программирование, программирование, кодирование, cpp, java, python, паскаль, онлайн-судья, спортивное программирование, соревновательное программирование, язык программирования, языки программирования, основы программирования, алгоритм, алгоритм, programming, programming, coding, cpp, java, python, pascal, online referee, sports programming, programming language, programming languages, programming basics, algorithm" name="keywords">
        <meta content="olympics.uz - Dasturiy yechim to'g'riligini avtomatik testlovchi tizim" name="description">
        <meta property="og:site_name" content="olympics.uz">
        <meta property="og:title" content="Olympics">
        <meta property="og:locale" content="uz-UZ">
        <meta property="og:type" content="page">
        <meta property="og:url" content="https://olympics.uz/">
        <meta property="og:image" content="/img/logo.png">
        <meta property="og:description" content="olympics.uz - Dasturiy yechim to'g'riligini avtomatik testlovchi tizim">
        <meta name="google" content="notranslate">
        <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="shortcut icon" type="image/x-icon" href="/img/logo.png">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

        <link href="/timer/TimeCircles.css" rel="stylesheet">
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> </script>
        <script type="text/javascript" src="/timer/TimeCircles.js"></script>
        <!-- BEGIN: Vendor CSS-->
        <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/vendors.min.css">
        <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/forms/quill/katex.min.css">
        <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/forms/quill/monokai-sublime.min.css">
        <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/forms/quill/quill.snow.css">
        <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/forms/quill/quill.bubble.css">
        <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/ui/prism.min.css">
        <!-- END: Vendor CSS-->

        <!-- BEGIN: Theme CSS-->
        <link rel="stylesheet" type="text/css" href="/app-assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/app-assets/css/bootstrap-extended.min.css">
        <link rel="stylesheet" type="text/css" href="/app-assets/css/colors.min.css">
        <link rel="stylesheet" type="text/css" href="/app-assets/css/components.min.css">
        <!-- END: Theme CSS-->

        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="/app-assets/css/core/menu/menu-types/vertical-menu.min.css">
        <link rel="stylesheet" type="text/css" href="/app-assets/css/core/colors/palette-gradient.min.css">
            @yield('page_css')
        <!-- END: Page CSS-->

        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="/assets/css/style.css">

        <!-- END: Custom CSS-->

    </head>

<body class="vertical-layout vertical-menu 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">

    @yield('nav')

    @yield('menu')

    @yield('content')

    <!-- BEGIN: Vendor JS-->
        <script src="/app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
        <script src="/app-assets/vendors/js/ui/prism.min.js"></script>
        @yield('page_vendor_js')
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
        <script src="/app-assets/js/core/app-menu.min.js"></script>
        <script src="/app-assets/js/core/app.min.js"></script>
        <script src="/app-assets/js/scripts/customizer.min.js"></script>

    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
        @yield('page_js')
    <!-- END: Page JS-->

</body>
</html>
