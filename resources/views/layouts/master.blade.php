<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
    <title>Skillpark Messaging Service | Skillpark Inc.</title>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" href="./favicon.ico">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/css/vendor.min.css">

    <link rel="stylesheet" href="/css/theme.min.css">
    <style>
        .avatar{
            width: 6.125rem;
            height: 6.125rem;

        }
    </style>
</head>

<body>
    <!-- ========== HEADER ========== -->
    <header id="header" class="header header-bg-transparent header-abs-top">
        <div class="header-section">
            <div id="logoAndNav" class="container-fluid">
                <!-- Nav -->
                <nav class="navbar navbar-expand header-navbar">
                    <!-- White Logo -->
                    <a class="d-none d-lg-flex navbar-brand header-navbar-brand" href="{{ route('home') }}"
                        aria-label="Front">
                        <img src="/images/logo/biglogo-white.svg" style="width: 8rem;" alt="Logo">
                    </a>
                    <!-- End White Logo -->

                    <!-- Default Logo -->
                    <a class="d-flex d-lg-none navbar-brand header-navbar-brand header-navbar-brand-collapsed"
                        href="{{ route('home') }}" aria-label="Front">
                        <img src="/images/logo/biglogo.svg" style="width: 8rem;" alt="Logo">
                    </a>
                    <!-- End Default Logo -->

                    <!-- Button -->
                    <div class="ml-auto">
                        <a class="btn btn-sm btn-link text-body" href="https://skillpark.herokuapp.com">
                            <i class="fas fa-angle-left fa-sm mr-1"></i> Go to main
                        </a>
                    </div>
                    <!-- End Button -->
                </nav>
                <!-- End Nav -->
            </div>
        </div>
    </header>
    <!-- ========== END HEADER ========== -->

    @yield('content')

    <!-- JS Implementing Plugins -->
    <script src="/js/vendor.min.js"></script>

    <!-- JS Front -->
    <script src="/js/theme.min.js"></script>

    <!-- JS Plugins Init. -->
    <script>
        $(document).on('ready', function () {

      $('.js-slick-carousel').each(function() {
        var slickCarousel = $.HSCore.components.HSSlickCarousel.init($(this));
      });

      $('.js-validate').each(function () {
        var validation = $.HSCore.components.HSValidation.init($(this));
      });
    });
    </script>

</body>

</html>