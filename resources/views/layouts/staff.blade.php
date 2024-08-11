{{-- resources/views/layouts/admin.blade.php --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">
    <title>Dashboard</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/morris/morris.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/switchery/switchery.min.css') }}" />
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>

    @include('partials.nav')
    <div class="wrapper">

        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="page-title">Dashboard</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    @yield('content')
                </div>
            </div>
        </div>
        <footer class="footer">
            &copy; 2017. All Righs Reserved.
        </footer>
    </div>
    <!-- Footer -->
    <script>
        var resizefunc = [];
    </script>

    <!-- jQuery  -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script><!-- Tether for Bootstrap -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/waves.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nicescroll.js') }}"></script>
    <script src="{{ asset('assets/plugins/switchery/switchery.min.js') }}"></script>

    <!--Morris Chart-->
    <script src="{{ asset('assets/plugins/morris/morris.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/raphael/raphael-min.js') }}"></script>

    <!-- Counter Up  -->
    <script src="{{ asset('assets/plugins/waypoints/lib/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/counterup/jquery.counterup.min.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('assets/js/jquery.core.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.app.js') }}"></script>

    <!-- Page specific js -->
    <script src="{{ asset('assets/pages/jquery.dashboard.js') }}"></script>
</body>

</html>