

        

        <!DOCTYPE html>
        <html lang="en">
        
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="">
            <meta name="author" content="">
            <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('template-resources/plugins/images/favicon.png') }}">
            <title>Sadbarg-Admin</title>
            <!-- Bootstrap Core CSS -->
            <link href="{{ asset('template-resources/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
            <!-- Menu CSS -->
            <link href="{{ asset('template-resources/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css') }}" rel="stylesheet">
            <!-- toast CSS -->
            <link href="{{ asset('template-resources/plugins/bower_components/toast-master/css/jquery.toast.css') }}" rel="stylesheet">
            <!-- morris CSS -->
            <link href="{{ asset('template-resources/plugins/bower_components/morrisjs/morris.css') }}" rel="stylesheet">
            <link href="{{ asset('custom-resources/css/custom-style.css') }}" rel="stylesheet">
            <!-- chartist CSS -->
            <link href="{{ asset('template-resources/plugins/bower_components/chartist-js/dist/chartist.min.css') }}" rel="stylesheet">
            <link href="{{ asset('template-resources/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css') }}" rel="stylesheet">
            <!-- animation CSS -->
            <link href="{{ asset('template-resources/css/animate.css') }}" rel="stylesheet">
            <!-- Custom CSS -->
            <link href="{{ asset('template-resources/css/style.css') }}" rel="stylesheet">
            <!-- color CSS -->
            <link href="{{ asset('template-resources/css/colors/default.css') }}" id="theme" rel="stylesheet">
            <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
            <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
            <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        </head>
        
        <body class="fix-header">
            
            <!-- ============================================================== -->
            <!-- Preloader -->
            <!-- ============================================================== -->
            <div class="preloader">
                <svg class="circular" viewBox="25 25 50 50">
                    <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
                </svg>
            </div>
            <!-- ============================================================== -->
            <!-- Wrapper -->
            <!-- ============================================================== -->
            <div id="wrapper">
                <!-- ============================================================== -->
                <!-- Topbar header - style you can find in pages.scss -->
                <!-- ============================================================== -->
                <nav class="navbar navbar-default navbar-static-top m-b-0">
                    <div class="navbar-header" style="background-color: black;">
                        <div class="top-left-part" style="background-color:black;"
                            <!-- Logo -->
                            <a class="logo" href="index.html">
                                <!-- Logo icon image, you can use font-icon also --><b>
                                <!--This is dark logo icon--><img src="{{ asset('template-resources/plugins/images/admin-logo.png') }}" alt="home" class="dark-logo" /><!--This is light logo icon--><img src="{{asset('template-resources/plugins/images/admin-logo-dark.png')}}" alt="home" class="light-logo" />
                             </b>
                                <!-- Logo text image you can use text also --><span class="hidden-xs">
                                <!--This is dark logo text--><img src="{{ asset('template-resources/plugins/images/admin-text.png')}}" alt="home" class="dark-logo" /><!--This is light logo text--><img src="{{asset('template-resources/plugins/images/admin-text-dark.png')}}" alt="home" class="light-logo" />
                             </span> </a>
                        </div>
                        <!-- /Logo -->
                        <ul class="nav navbar-top-links navbar-right pull-right">
                            <li>
                                
                            </li>
                            <li>
                                <a class="profile-pic" href="profile.html"> <b class="hidden-xs">Steave</b><img src="{{ asset('template-resources/plugins/images/users/varun.jpg') }}" alt="user-img" width="36" class="img-circle"></a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-header -->
                    <!-- /.navbar-top-links -->
                    <!-- /.navbar-static-side -->
                </nav>
                <!-- End Top Navigation -->
                <!-- ============================================================== -->
                <!-- Left Sidebar - style you can find in sidebar.scss  -->
                <!-- ============================================================== -->
                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav slimscrollsidebar">
                        <div class="sidebar-head">
                            <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3>
                        </div>
                        <ul class="nav" id="side-menu">
                            <li style="padding: 100px 0 0;">
                                <a href="index.html" class="waves-effect"><i class="fa fa-fw" aria-hidden="true"></i>Submitted</a>
                            </li>
                            <li>
                                <a href="profile.html" class="waves-effect"><i class="fa fa-fw" aria-hidden="true"></i>Rejected</a>
                            </li>
                            <li>
                                <a href="basic-table.html" class="waves-effect"><i class="fa  fa-fw" aria-hidden="true"></i>For Editing</a>
                            </li>
                             <li>
                                <a href="basic-table.html" class="waves-effect"><i class="fa  fa-fw" aria-hidden="true"></i>Edited</a>
                            </li>
                            <li>
                                    <a href="basic-table.html" class="waves-effect"><i class="fa  fa-fw" aria-hidden="true"></i>Approved</a>
                            </li>
                            <li>
                                    <a href="basic-table.html" class="waves-effect"><i class="fa  fa-fw" aria-hidden="true"></i>Finalized</a>
                            </li>
                            
                            
        
                        </ul>
                       
                    </div>
                    
                </div>
                <!-- ============================================================== -->
                <!-- End Left Sidebar -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Page Content -->
                <!-- ============================================================== -->
                <div id="page-wrapper">
                    @yield('content') 
                    
        
                    
                </div>
                <!-- ============================================================== -->
                <!-- End Page Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Wrapper -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- All Jquery -->
            <!-- ============================================================== -->
            <script src="{{ asset('template-resources/plugins/bower_components/jquery/dist/jquery.min.js') }}"></script>
            <!-- Bootstrap Core JavaScript -->
            <script src="{{ asset('template-resources/bootstrap/dist/js/bootstrap.min.js') }}"></script>
            <!-- Menu Plugin JavaScript -->
            <script src="{{ asset('template-resources/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js') }}"></script>
            <!--slimscroll JavaScript -->
            <script src="{{ asset('template-resources/js/jquery.slimscroll.js') }}"></script>
            <!--Wave Effects -->
            <script src="{{ asset('template-resources/js/waves.js') }}"></script>
            <!--Counter js -->
            <script src="{{ asset('template-resources/plugins/bower_components/waypoints/lib/jquery.waypoints.js') }}"></script>
            <script src="{{ asset('template-resources/plugins/bower_components/counterup/jquery.counterup.min.js') }}"></script>
            <!-- chartist chart -->
            <script src="{{ asset('template-resources/plugins/bower_components/chartist-js/dist/chartist.min.js') }}"></script>
            <script src="{{ asset('template-resources/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js') }}"></script>
            <!-- Sparkline chart JavaScript -->
            <script src="{{ asset('template-resources/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
            <!-- Custom Theme JavaScript -->
            <script src="{{ asset('template-resources/js/custom.min.js') }}"></script>
            <script src="{{ asset('template-resources/js/dashboard1.js') }}"></script>
            <script src="{{ asset('template-resources/plugins/bower_components/toast-master/js/jquery.toast.js') }}"></script>
        </body>
        
        </html>
        
        