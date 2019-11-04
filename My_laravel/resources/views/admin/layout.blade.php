<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Home Page') </title>
    
    <!-- Bootstrap -->
    <link href="/public/admin/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/public/admin/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="/public/admin/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="/public/admin/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="/public/admin/build/css/custom.min.css" rel="stylesheet">
  </head>
  
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="/public/admin/images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>John Doe</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            @include('admin.sidebar')
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            @include('admin.footerbuttons')
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        @include('admin.topnav')
        <!-- /top navigation -->

        <!-- page content -->
            <div class="right_col" role="main">
                @yield('content')
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        @include('admin.footer')
        <!-- /footer content -->
      </div>
    </div>

<!-- jQuery -->
    <script src="/public/admin/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="/public/admin/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="/public/admin/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="/public/admin/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="/public/admin/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="/public/admin/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="/public/admin/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="/public/admin/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="/public/admin/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="/public/admin/vendors/Flot/jquery.flot.js"></script>
    <script src="/public/admin/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="/public/admin/vendors/Flot/jquery.flot.time.js"></script>
    <script src="/public/admin/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="/public/admin/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="/public/admin/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="/public/admin/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="/public/admin/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="/public/admin/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="/public/admin/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="/public/admin/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="/public/admin/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="/public/admin/vendors/moment/min/moment.min.js"></script>
    <script src="/public/admin/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="/public/admin/build/js/custom.min.js"></script>
    
  </body>
</html>
