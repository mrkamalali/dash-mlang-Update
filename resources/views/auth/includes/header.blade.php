<!DOCTYPE html>

<html lang="en">
<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>
    <title>

        @yield('title', 'Laravel')

    </title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--begin::Web font -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {"families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]},
            active: function () {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <!--end::Web font -->


    <!--begin::Base Styles -->

    <link href="{{ url('/') }}/dashboard/assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css"/>
    <link href="{{ url('/') }}/dashboard/assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap" rel="stylesheet">

    @if(LaravelLocalization::getCurrentLocale() == 'ar')

        <link href="{{asset("/dashboard/assets/demo/default/base/style.bundle.rtl.css")}}"
              rel="stylesheet" type="text/css"/>

        <style>
            body {
                font-family: 'Cairo', sans-serif; !important;
            }
        </style>
    @else
        <link
            href="{{asset("/dashboard/assets/demo/default/base/style.bundle.css")}}"
            rel="stylesheet" type="text/css"/>

        <style>
            body {
                font-family: 'Cairo', sans-serif; !important;

            }
        </style>
@endif

<!--end::Base Styles -->
    <link rel="shortcut icon" href="{{ url('/') }}/dashboard/assets/demo/default/media/img/logo/favicon.ico"/>
</head>
<!-- end::Head -->
<!-- end::Body -->
<body
    class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">
