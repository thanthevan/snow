<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Gâu Gâu :p</title>
    <!-- Simplebar -->
    <link type="text/css" href="asset/home/vendor/simplebar.min.css" rel="stylesheet">

    <!-- App CSS -->
    <link type="text/css" href="asset/home/css/app.css" rel="stylesheet">
    <link type="text/css" href="asset/home/css/app.rtl.css" rel="stylesheet">

    <!-- Material Design Icons -->
    <link type="text/css" href="asset/home/css/vendor-material-icons.css" rel="stylesheet">
    <link type="text/css" href="asset/home/css/vendor-material-icons.rtl.css" rel="stylesheet">

    <!-- Font Awesome FREE Icons -->
    <link type="text/css" href="asset/home/css/vendor-fontawesome-free.css" rel="stylesheet">
    <link type="text/css" href="asset/home/css/vendor-fontawesome-free.rtl.css" rel="stylesheet">

    <!-- ion Range Slider -->
    <link type="text/css" href="asset/home/css/vendor-ion-rangeslider.css" rel="stylesheet">
    <link type="text/css" href="asset/home/css/vendor-ion-rangeslider.rtl.css" rel="stylesheet">
    <!-- Flatpickr -->
    <link type="text/css" href="asset/home/css/vendor-flatpickr.css" rel="stylesheet">
    <link type="text/css" href="asset/home/css/vendor-flatpickr.rtl.css" rel="stylesheet">
    <link type="text/css" href="asset/home/css/vendor-flatpickr-airbnb.css" rel="stylesheet">
    <link type="text/css" href="asset/home/css/vendor-flatpickr-airbnb.rtl.css" rel="stylesheet">

    <!-- Vector Maps -->
    <link type="text/css" href="asset/home/vendor/jqvmap/jqvmap.min.css" rel="stylesheet">
    @yield('css')


</head>

<body class="layout-default">
    {{-- <audio autoplay loop>
        <source src="{{ asset('mp3/TraSua-QuytNho-5298123.mp3') }}" >
    </audio> --}}
    <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px" data-fullbleed>
        <div class="mdk-drawer-layout__content">

            <!-- Header Layout -->
            <div class="mdk-header-layout js-mdk-header-layout" data-has-scrolling-region>

                <!-- Header -->

                @include('common.header')

                <!-- // END Header -->

                <!-- Header Layout Content -->
                <div class="mdk-header-layout__content mdk-header-layout__content--fullbleed mdk-header-layout__content--scrollable page"
                    style="padding-top: 60px;">
                    <div class="container-fluid page__container">
                      @yield('content')
                    </div>
                </div>
                <!-- // END header-layout__content -->

            </div>
            <!-- // END header-layout -->
        </div>
        <!-- // END drawer-layout__content -->

      @include('common.menu')
    </div>
    <!-- // END drawer-layout -->
   

    <!-- jQuery -->
    <script src="asset/home/vendor/jquery.min.js"></script>

    <!-- Bootstrap -->
    <script src="asset/home/vendor/popper.min.js"></script>
    <script src="asset/home/vendor/bootstrap.min.js"></script>

    <!-- Simplebar -->
    <script src="asset/home/vendor/simplebar.min.js"></script>

    <!-- DOM Factory -->
    <script src="asset/home/vendor/dom-factory.js"></script>

    <!-- MDK -->
    <script src="asset/home/vendor/material-design-kit.js"></script>

    <!-- Range Slider -->
    <script src="asset/home/vendor/ion.rangeSlider.min.js"></script>
    <script src="asset/home/js/ion-rangeslider.js"></script>

    <!-- App -->
    <script src="asset/home/js/toggle-check-all.js"></script>
    <script src="asset/home/js/check-selected-row.js"></script>
    <script src="asset/home/js/dropdown.js"></script>
    <script src="asset/home/js/sidebar-mini.js"></script>
    <script src="asset/home/js/app.js"></script>


    <!-- Flatpickr -->
    {{-- <script src="asset/home/vendor/flatpickr/flatpickr.min.js"></script>
    <script src="asset/home/js/flatpickr.js"></script> --}}

    <!-- Global Settings -->
    <script src="asset/home/js/settings.js"></script>

    <!-- Moment.js -->
    {{-- <script src="asset/home/vendor/moment.min.js"></script>
    <script src="asset/home/vendor/moment-range.js"></script> --}}


    <!-- Chart.js -->
    {{-- <script src="asset/home/vendor/Chart.min.js"></script> --}}

    <!-- App Charts JS -->
    {{-- <script src="asset/home/js/chartjs-rounded-bar.js"></script>
    <script src="asset/home/js/charts.js"></script> --}}

    <!-- Chart Samples -->
    {{-- <script src="asset/home/js/page.analytics.js"></script> --}}
    <script src="asset/js/lib.js"></script>
    @yield('js')
</body>

</html>