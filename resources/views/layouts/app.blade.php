<!doctype html>
<html lang="en">

<head>

    <div id="head">
        @include('grades.grade10.head')
    </div>
    </header>

</head>

<body data-topbar="dark">


    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">

            <div id="navbar">
                @include('navbar')
            </div>
        </header>

        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">

            <div data-simplebar class="h-100">

                <div id="sidebar">
                    @include('grades.grade10.sidebar')
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div id="app" class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                @yield('content')

                </div>
                <!-- End Page-content -->


                <div id="footer">
                    @include('footer')
                </div>

            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->







        <!-- JAVASCRIPT -->
        <script src="assets/auth/libs/jquery/jquery.min.js"></script>
        <script src="assets/auth/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/auth/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/auth/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/auth/libs/node-waves/waves.min.js"></script>


        <!-- apexcharts -->
        <script src="assets/auth/libs/apexcharts/apexcharts.min.js"></script>

        <!-- jquery.vectormap map -->
        <script src="assets/auth/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="assets/auth/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js"></script>

        <!-- Required datatable js -->
        <script src="assets/auth/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="assets/auth/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>

        <!-- Responsive examples -->
        <script src="assets/auth/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="assets/auth/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

        <script src="assets/auth/js/pages/dashboard.init.js"></script>

        <!-- App js -->
        <script src="assets/auth/js/app.js"></script>

        <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

        
</body>

</html>

