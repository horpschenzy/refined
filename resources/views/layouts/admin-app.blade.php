<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>Dashboard | REFINED</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="REFINED" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="dist/images/refined-new-black.png">

        <!-- Bootstrap Css -->
        <link href="admin/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="admin/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="admin/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>


    <body data-sidebar="dark">

    <!-- <body data-layout="horizontal" data-topbar="colored"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">


           @include('admin.panel.navbar')
            @include('admin.panel.sidebar')



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            @yield('content')
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->

        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        @stack('scripts')


        <!--Morris Chart-->
        @stack('charts')

    </body>

</html>
