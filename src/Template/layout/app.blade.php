<!DOCTYPE html>
<html lang="{{sys()->getLocale()}}">
<head>
    <title>@yield('title', 'Creative Ideator')</title>
    <meta name="csrf_token" content="{{ csrf_token() }}" />
    @desktop
    <!--[if IE 8]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
    @elsedesktop
    <meta name="HandheldFriendly" content="true">
    @enddesktop

    @handheld
    <meta http-equiv="cleartype" content="on">
    @endhandheld

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="google" content="notranslate">
    <meta name="robots" content="noindex, nofollow">

    @ios
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="<?php echo $title; ?>">
    @endios

    @android
    <meta name="mobile-web-app-capable" content="yes">
    @endandroid

    @include('template::partial.styles')

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="fix-header fix-sidebar card-no-border">
<div class="preloader">
    <div class="loader">
        <div class="loader__figure"></div>
        <p class="loader__label">@yield('project.name', 'Creative Ideator')</p>
    </div>
</div>
<div id="main-wrapper">

    @if(!isset($error_call) || !$error_call)
        @include('template::partial.header')
    @endif

    @include('template::partial.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="page-wrapper">
        <div class="container-fluid">

            {{-- Flash message --}}
            @if (Session::has('flash_notification.message'))
                <div class="alert alert-{{ Session::get('flash_notification.level') }} flat">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

                    {{ Session::get('flash_notification.message') }}
                </div>
            @endif
            {{-- End Flash Message --}}

            {{-- Main content --}}
            @yield('page.content')
        </div>

        {{-- Page footer --}}
        @include('template::partial.footer')

    </div><!-- /.content -->

</div><!-- ./wrapper -->

{{-- Hidden container --}}
<div id="body-hidden-container" style="display: none;">
    @yield('page.hidden')
</div>

@include('template::partial.scripts')

</body>
</html>