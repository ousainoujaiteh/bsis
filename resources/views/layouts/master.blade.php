<!doctype html>
<html lang="en" style="display:none;">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Blood Safety Information System</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="/assets/css/turbo.css" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->

    <link href="/assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" />

    <link rel="stylesheet" type="text/css" href="/css/material-icons/iconfont/app.css">
    <link href="/assets/vendors/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">

    <link href="/assets/vendors/jquery-ui-1.12.0/jquery-ui.css" rel="stylesheet">

    <link href="/assets/vendors/dropzone/dropzone.min.css" rel="stylesheet">


    <!-- Waves Effect Css -->
    <link href="/assets/vendors/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="/assets/vendors/animate-css/animate.css" rel="stylesheet" />


    <!-- Custom Css -->
{{--<link href="/assets/vendors/css/style.css" rel="stylesheet">--}}

<!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
{{--<link href="/assets/vendors/css/themes/all-themes.css" rel="stylesheet" />--}}

{{--    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">--}}

<!-- JQuery DataTable Css -->
    <link href="/assets/css/dataTables.bootstrap.css" rel="stylesheet">


    <link href="http://allfont.net/allfont.css?fonts=roboto-regular" rel="stylesheet" type="text/css" />

    <style type="text/css">

        body {
            font-style: Open Sans;
        }

        .info-box{
            box-shadow: 0 2px 10px rgba(0,0,0,0.2);
            height: 100px;
            display: flex;
            cursor: default;
            background-color: #fff;
            position: relative;
            overflow: hidden;
            margin-bottom: 30px;
            padding: 10px;
        }
        .bg-indigo{
            background-color: #3F51B5; !important;
            color: #fff;
        }
        .bg-blue{
            background-color: #0D47A1 !important;
            color: #fff;
        }
        .bg-pink{
            background-color: #E91E63 !important;
            color: #fff;
        }
        .bg-teal{
            background-color: #009688 !important;
            color: #fff;
        }
        .bg-black{
            background-color: #000000 !important;
            color: #fff;
        }
    </style>


    {{--    <meta name="csrf-token" content="{{ csrf_token() }}" />--}}

</head>

<body>
<div class="wrapper">
    <div class="sidebar" data-background-color="white">
        <div class="logo">
            <a href="{{url('/')}}" class="simple-text">
                <img src="/images/bsis-logo.png" alt="" width="100%">
            </a>
        </div>
        <div class="logo logo-mini">
            <a href="#" class="simple-text">
                BSIS
            </a>
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                    <li class="{{Request::is('/') ? 'active':''}}">
                        <a href="{{url('/')}}">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                <li>
                    <a href="{{url('donors')}}">
                        <i class="material-icons">person</i>
                        <p>Donors</p>
                    </a>
                </li>
                <li>
                    <a href="{{url('donations')}}">
                        <i class="material-icons">view_list</i>
                        <p>Donations</p>
                    </a>
                </li>

                {{-- /dashboard --}}

                <li class="{{Request::is('/hospitals') ? 'active':''}}">
                    <a href="{{url('hospitals')}}">
                        <i class="material-icons">home</i>
                        <p>Hospital</p>
                    </a>
                </li>
                <li class="{{Request::is('/appointments') ? 'active':''}}">
                    <a href="{{url('appointments')}}">
                        <i class="material-icons">view_list</i>
                        <p>Appointments</p>
                    </a>
                </li>
{{--                @if(auth()->user()->isAdmin() == 'Administrators')--}}
                    <li>
                        <a data-toggle="collapse" href="#layouts2" class="collapsed" aria-expanded="false">
                            <i class="material-icons">settings</i>
                            <p>Administrator
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="layouts2" aria-expanded="false" style="height: 0px;">
                            <ul class="nav">
                                <!-- <li>
                                    <a href="{{url('blood_test')}}">Blood Test</a>
                                </li> -->
                                <li>
                                    <a href="{{url('users')}}">Users</a>
                                </li>

{{--                                <li>--}}
{{--                                    <a href="/backups">Backups</a>--}}
{{--                                </li>--}}

{{--                                <li>--}}
{{--                                    <a href="/activity-logs">Activity Logs</a>--}}
{{--                                </li>--}}
                            </ul>
                        </div>
                    </li>
{{--                @endif--}}
            </ul>
        </div>
    </div>
    <div class="main-panel">
        <nav class="navbar navbar-default navbar-absolute" data-topbar-color="red">
            <div class="container-fluid">
                <div class="navbar-minimize">
                    <button id="minimizeSidebar" class="btn btn-round btn-white btn-fill btn-just-icon">
                        <i class="material-icons visible-on-sidebar-regular f-26">keyboard_arrow_left</i>
                        <i class="material-icons visible-on-sidebar-mini f-26">keyboard_arrow_right</i>
                    </button>
                </div>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Blood Safety Information System </a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="material-icons">settings</i>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="/my-profile">  <i class="material-icons">person</i> Profile</a>
                                </li>
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">

                                        <i class="material-icons">settings</i> Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>

                            </ul>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
        <div class="content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
        <footer class="footer">
            <div class="container">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                BSIS
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>
                    <a href="#"></a> Blood Safety Information System
                </p>
            </div>
        </footer>
    </div>
</div>
</body>
<!--   Core JS Files   -->
<script src="/assets/vendors/jquery-3.1.1.min.js" type="text/javascript"></script>
<script src="/assets/vendors/jquery-ui.min.js" type="text/javascript"></script>
<script src="/assets/vendors/bootstrap.min.js" type="text/javascript"></script>
<script src="/assets/vendors/material.min.js" type="text/javascript"></script>
<script src="/assets/vendors/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
<!-- Forms Validations Plugin -->
<script src="/assets/vendors/jquery.validate.min.js"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="/assets/vendors/moment.min.js"></script>

<!--  Charts Plugin -->
{{--<script src="/assets/vendors/charts/flot/jquery.flot.js"></script>--}}
{{--<script src="/assets/vendors/charts/flot/jquery.flot.resize.js"></script>--}}
{{--<script src="/assets/vendors/charts/flot/jquery.flot.pie.js"></script>--}}
{{--<script src="/assets/vendors/charts/flot/jquery.flot.stack.js"></script>--}}
{{--<script src="/assets/vendors/charts/flot/jquery.flot.categories.js"></script>--}}
{{--<script src="/assets/vendors/charts/chartjs/Chart.min.js" type="text/javascript"></script>--}}

<!--  Plugin for the Wizard -->
<script src="/assets/vendors/jquery.bootstrap-wizard.js"></script>
<!--  Notifications Plugin    -->
<script src="/assets/vendors/bootstrap-notify.js"></script>
<!-- DateTimePicker Plugin -->
<script src="/assets/vendors/bootstrap-datetimepicker.js"></script>
<!-- Vector Map plugin -->
{{--<script src="/assets/vendors/jquery-jvectormap.js"></script>--}}
<!-- Sliders Plugin -->
<script src="/assets/vendors/nouislider.min.js"></script>
<!--  Google Maps Plugin    -->
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAurmSUEQDwY86-wOG3kCp855tCI8lHL-I"></script> -->
<!-- Select Plugin -->
<script src="/assets/vendors/jquery.select-bootstrap.js"></script>


<!--  DataTables.net Plugin    -->
<script src="/assets/vendors/jquery.datatables.js"></script>

<script src="/assets/vendors/jzip.js"></script>

<script src="/assets/vendors/datatables.buttons.js"></script>

<script src="/assets/vendors/button.html5.min.js"></script>


<script src="/assets/vendors/button.print.min.js"></script>

<script src="/assets/vendors/button.print.min.js"></script>

<script src="/assets/vendors/pdfmake.min.js"></script>


<script src="/assets/vendors/vfs_fonts.js"></script>


{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>--}}

{{--<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>--}}

{{--<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>--}}

{{--<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>--}}

{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>--}}

{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>--}}


<!-- Sweet Alert 2 plugin -->
<script src="/assets/vendors/sweetalert2.js"></script>
<!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="/assets/vendors/jasny-bootstrap.min.js"></script>
<!--  Full Calendar Plugin    -->
<script src="/assets/vendors/fullcalendar.min.js"></script>
<!-- TagsInput Plugin -->
<script src="/assets/vendors/jquery.tagsinput.js"></script>
<!-- Material Dashboard javascript methods -->
<script src="/assets/js/turbo.js"></script>

<script src="/assets/vendors/node-waves/waves.js"></script>

<!-- Sparkline Chart Plugin Js -->
<script src="/assets/vendors/jquery-sparkline/jquery.sparkline.js"></script>

<script src="/assets/vendors/jquery-countto/jquery.countTo.js"></script>

<script src="/assets/vendors/jquery-countto/jquery.countTo.js"></script>

<script src="/assets/vendors/infobox/infobox-2.js"></script>





<!-- Material Dashboard DEMO methods, don't include it in your project! -->
{{--<script src="/assets/js/demo.js"></script>--}}


{{--<script src="/assets/js/charts/flot-charts.js"></script>--}}
{{--<script src="/assets/js/charts/chartjs-charts.js"></script>--}}

<script src="/js/custom.js"></script>

{{--<script src="/assets/vendors/dropzone/dropzone.min.js"></script>--}}

{{--<script type="text/javascript">--}}
{{--$(document).ready(function() {--}}

{{--// Javascript method's body can be found in assets/js/demos.js--}}
{{--demo.initVectorMap();--}}
{{--});--}}
{{--</script>--}}


@yield('scripts')

</html>