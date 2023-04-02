<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="{{ asset('') }}/backend/assets/images/favicon.svg" type="image/x-icon" />
    <title>PlainAdmin Demo | Bootstrap 5 Admin Template</title>

    <!-- ========== All CSS files linkup ========= -->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/assets/css/lineicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/assets/css/materialdesignicons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/assets/css/fullcalendar.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/assets/css/fullcalendar.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/assets/css/main.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simple-notify@0.5.5/dist/simple-notify.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    @stack('style')
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>


</head>

<body>
    <!-- ======== sidebar-nav start =========== -->

    <div class="overlay"></div>
    <!-- ======== sidebar-nav end =========== -->
    @include('includes.backend.leftside-nav')
    <!-- ======== main-wrapper start =========== -->
    <main class="main-wrapper">
        <!-- ========== header start ========== -->
        @include('includes.backend.top-nav')
        <!-- ========== header end ========== -->

        <!-- ========== section start ========== -->
        <section class="section">
            @yield('content')
            <!-- end container -->
        </section>
        <!-- ========== section end ========== -->

        <!-- ========== footer start =========== -->
        @include('includes.backend.footer')
        <!-- ========== footer end =========== -->
    </main>
    <!-- ======== main-wrapper end =========== -->

    <!-- ========= All Javascript files linkup ======== -->
    <script src="{{ asset('backend/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/Chart.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/dynamic-pie-chart.js') }}"></script>
    <script src="{{ asset('backend/assets/js/moment.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/fullcalendar.js') }}"></script>
    <script src="{{ asset('backend/assets/js/jvectormap.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/world-merc.js') }}"></script>
    <script src="{{ asset('backend/assets/js/polyfill.js') }}"></script>
    <script src="{{ asset('backend/assets/js/main.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
        integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-notify@0.5.5/dist/simple-notify.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    @stack('script')

    <script>
        function toast(status, title, text) {
            new Notify({
                status: status,
                title: title,
                text: text,
                effect: 'fade',
                speed: 300,
                customClass: null,
                customIcon: null,
                showIcon: true,
                showCloseButton: true,
                autoclose: true,
                autotimeout: 2000,
                gap: 20,
                distance: 20,
                type: 1,
                position: 'right top'
            })
        }
    </script>
    @if (Session::has('success'))
        <script>
            toast('success', 'Success', "{{ Session::get('success') }}")
        </script>
    @elseif (Session::has('error'))
        <script>
            toast('error', 'Error', "{{ Session::get('error') }}")
        </script>
    @endif

</body>

</html>
