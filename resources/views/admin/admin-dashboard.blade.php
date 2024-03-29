<!doctype html>
<html lang="en" class="color-header headercolor4">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="{{ asset('backadmin/assets/images/favicon-32x32.png') }}" type="image/png" />
    <!--plugins-->
    <link href="{{ asset('backadmin/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />
    <link href="{{ asset('backadmin/assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
    <link href="{{ asset('backadmin/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
    <link href="{{ asset('backadmin/assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />

	<link href="{{ asset('backadmin/assets/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />

    <!-- loader-->
    <link href="{{ asset('backadmin/assets/css/pace.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('backadmin/assets/js/pace.min.js') }}"></script>

    <!-- Bootstrap CSS -->
    <link href="{{ asset('backadmin/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backadmin/assets/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('backadmin/assets/css/icons.css') }}" rel="stylesheet">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="{{ asset('backadmin/assets/css/dark-theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('backadmin/assets/css/semi-dark.css') }}" />
    <link rel="stylesheet" href="{{ asset('backadmin/assets/css/header-colors.css') }}" />

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Bucket SMK - Mini Coding School</title>
</head>

<body>
    <!--wrapper-->
    <div class="wrapper">
        <!--sidebar wrapper -->
        @include('admin.part.sidebar')
        <!--end sidebar wrapper -->

        <!--start header -->
        @include('admin.part.header')
        <!--end header -->

        <!--start page wrapper -->
        <div class="page-wrapper">
            @yield('content')
        </div>
        <!--end page wrapper -->

        <!--start overlay-->
        <div class="overlay toggle-icon"></div>
        <!--end overlay-->
        <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i
                class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->
        @include('admin.part.footer')
    </div>
    <!--end wrapper-->

    <!-- Bootstrap JS -->
    <script src="{{ asset('backadmin/assets/js/bootstrap.bundle.min.js') }}"></script>
    <!--plugins-->
    <script src="{{ asset('backadmin/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('backadmin/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('backadmin/assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('backadmin/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('backadmin/assets/plugins/chartjs/js/Chart.min.js') }}"></script>
    <script src="{{ asset('backadmin/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('backadmin/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('backadmin/assets/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
    <script src="{{ asset('backadmin/assets/plugins/sparkline-charts/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('backadmin/assets/plugins/jquery-knob/excanvas.js') }}"></script>
    <script src="{{ asset('backadmin/assets/plugins/jquery-knob/jquery.knob.js') }}"></script>

	<script src="{{ asset('backadmin/assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script>
		$(document).ready(function() {
			$('#example').DataTable();
		  } );
	</script>

    <script>
        $(function() {
            $(".knob").knob();
        });
    </script>
    <script src="{{ asset('backadmin/assets/js/index.js') }}"></script>
    <!--app JS-->
    <script src="{{ asset('backadmin/assets/js/app.js') }}"></script>
    <script src="{{ asset('backadmin/assets/js/validate.min.js') }}"></script>


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        @if (Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}"
            switch (type) {
                case 'info':
                    toastr.info(" {{ Session::get('message') }} ");
                    break;

                case 'success':
                    toastr.success(" {{ Session::get('message') }} ");
                    break;

                case 'warning':
                    toastr.warning(" {{ Session::get('message') }} ");
                    break;

                case 'error':
                    toastr.error(" {{ Session::get('message') }} ");
                    break;
            }
        @endif
    </script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script src="{{ asset('backadmin/assets/js/code.js') }}"></script>
</body>

</html>
