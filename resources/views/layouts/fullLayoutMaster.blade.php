<!DOCTYPE html>
<html class="loaded" lang="en" data-textdirection="ltr" style="--vh: 2.5px;">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
  <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="PIXINVENT">
  <title>@yield('title') - Ulevel</title>
  <link rel="apple-touch-icon" href="{{asset('images/ico/apple-icon-120.png')}}">
  <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/logo/favicon.ico')}}">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">
  @include('layouts/styles')
  @include('layouts/styles')
</head>

<body class="pace-running vertical-layout vertical-menu-modern blank-page" data-menu="vertical-menu-modern" data-col="blank-page" data-framework="laravel" data-asset-path="{{ asset('/')}}">

  <!-- BEGIN: Content-->
  <div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>

    <div class="content-wrapper">
      <div class="content-body">
        @yield('content')
      </div>
    </div>
  </div>
  @include('layouts/scripts')

  <script type="text/javascript">
    $(window).on('load', function() {
      if (feather) {
        feather.replace({
          width: 14,
          height: 14
        });
      }
    })
  </script>

</body>

</html>