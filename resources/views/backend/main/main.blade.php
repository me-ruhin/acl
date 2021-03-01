<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8" />
        <title>Dashboard | UBold - Responsive Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('backend/images/favicon.ico')}}">

        <!-- Plugins css -->
        <link href="{{asset('backend/libs/flatpickr/flatpickr.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('backend/libs/selectize/css/selectize.bootstrap3.css')}}" rel="stylesheet" type="text/css" />
        
        <!-- App css -->
        <link href="{{asset('backend/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
        <link href="{{asset('backend/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

        <link href="{{asset('backend/css/bootstrap-dark.min.css')}}" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" />
        <link href="{{asset('backend/css/app-dark.min.css')}}" rel="stylesheet" type="text/css" id="app-dark-stylesheet" />

        <!-- icons -->
        <link href="{{asset('backend/css/icons.min.css')}}" rel="stylesheet" type="text/css" />

        @stack('css')

    </head>

    <body class="loading" data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": false}, "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": true}'>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
           @include('backend.main.partials.topbar')
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
           
            @include('backend.main.partials.sidebar')
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">

               @yield('content')
                
                <!-- content -->

                <!-- Footer Start -->
                
                @include('backend.main.partials.footer')
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

       
     

        <!-- Vendor js -->
        <script src="{{asset('backend/js/vendor.min.js')}}"></script>

        <!-- Plugins js-->
        <script src="{{asset('backend/libs/flatpickr/flatpickr.min.js')}}"></script>
        <script src="{{asset('backend/libs/apexcharts/apexcharts.min.js')}}"></script>

        <script src="{{asset('backend/libs/selectize/js/standalone/selectize.min.js')}}"></script>

        <!-- Dashboar 1 init js-->
        <script src="{{asset('backend/js/pages/dashboard-1.init.js')}}"></script>
        
        <!-- App js-->
        <script src="{{asset('backend/js/app.min.js')}}"></script>
        @stack('js')
    </body>
</html>