<body class="vertical-layout vertical-menu-modern navbar-floating footer-static default menu-expanded" data-open="click" data-menu="vertical-menu-modern" data-col="default" data-framework="laravel" data-asset-path="{{ asset('/')}}">
  @include('customer.partials.navbar')

  @include('customer.partials.sidebar')

  <div class="app-content content ">
    <!-- BEGIN: Header-->
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
      <div class="content-body">
        @yield('content')
      </div>
    </div>
  </div>
  <div class="sidenav-overlay"></div>
  <div class="drag-target"></div>
  @include('customer.partials/footer')
  @include('customer.partials/scripts')
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