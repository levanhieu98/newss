<!DOCTYPE html>
<html lang="en">

<head>
    <base href="{{asset('')}}" >
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Quản lý website tin tức</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="admin/images/favicon.png">
    <!-- Pignose Calender -->
    <link href="admin/plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="admin/plugins/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="admin/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
    <!-- Custom Stylesheet -->
    <link href="admin/css/style.css" rel="stylesheet">
    <!-- data table -->
    <link href="admin/plugins/tables/css/datatable/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
        ********************-->
        <div id="preloader">
            <div class="loader">
                <svg class="circular" viewBox="25 25 50 50">
                    <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
                </svg>
            </div>
        </div>
    <!--*******************
        Preloader end
        ********************-->


    <!--**********************************
        Main wrapper start
        ***********************************-->
        <div id="main-wrapper">

        <!--**********************************
            Nav header start
            ***********************************-->
            <div class="nav-header text-center pt-3 bg-success ">
               <a  href="admin/home" class=""  style="font-size:28px ;color:white ;font-style:italic">L.H.Đ_D16</a>

            </div>
        <!--**********************************
            Nav header end
            ***********************************-->

        <!--**********************************
            Header start
            ***********************************-->
            <div class="header bg-danger">    
                @include('layouts.header')
                
            </div>
        <!--**********************************
            Header end ti-comment-alt
            ***********************************-->

        <!--**********************************
            Sidebar start
            ***********************************-->
            <div class="nk-sidebar">           
               @include('layouts.menu')
        </div>
        <!--**********************************
            Sidebar end
            ***********************************-->

        <!--**********************************
            Content body start
            ***********************************-->
            <div class="content-body">

                <div class="container-fluid mt-3">
                    @yield('content')
                </div>
                <!-- #/ container -->
            </div>
        <!--**********************************
            Content body end
            ***********************************-->


    <!--**********************************
        Scripts
        ***********************************-->
        <script src="admin/plugins/common/common.min.js"></script>
        <script src="admin/js/custom.min.js"></script>
        <script src="admin/js/settings.js"></script>
        <script src="admin/js/gleek.js"></script>
        <script src="admin/js/styleSwitcher.js"></script>

        <!-- Chartjs -->
        <script src="admin/plugins/chart.js/Chart.bundle.min.js"></script>
        <!-- Circle progress -->
        <script src="admin/plugins/circle-progress/circle-progress.min.js"></script>
        <!-- Datamap -->
        <script src="admin/plugins/d3v3/index.js"></script>
        <script src="admin/plugins/topojson/topojson.min.js"></script>
        <script src="admin/plugins/datamaps/datamaps.world.min.js"></script>
        <!-- Morrisjs -->
        <script src="admin/plugins/raphael/raphael.min.js"></script>
        <script src="admin/plugins/morris/morris.min.js"></script>
        <!-- Pignose Calender -->
        <script src="admin/plugins/moment/moment.min.js"></script>
        <script src="admin/plugins/pg-calendar/js/pignose.calendar.min.js"></script>
        <!-- ChartistJS -->
        <script src="admin/plugins/chartist/js/chartist.min.js"></script>
        <script src="admin/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>



        {{-- <script src="./admin/js/dashboard/dashboard-1.js"></script> --}}
         <!-- data table -->
        <script src="admin/plugins/tables/js/jquery.dataTables.min.js"></script>
        <script src="admin/plugins/tables/js/datatable/dataTables.bootstrap4.min.js"></script>
        <script src="admin/plugins/tables/js/datatable-init/datatable-basic.min.js"></script>
    </body>

    </html>