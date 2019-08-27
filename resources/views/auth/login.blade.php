<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="/assets/img/favicon.png" />
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
    <link rel="stylesheet" type="text/css" href="/css/material-icons/iconfont/app.css">
    <link href="/assets/vendors/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">

    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" />


    <style type="text/css">

        .wrapper {
            background-image: url(/images/bsis-logo.png) !important;
            background-color: rgba(6, 22, 43, 0.02);
            /*background-repeat: repeat;*/
            /*background-position: center;
            background-attachment: fixed;
            background-size: cover;*/
            /*background-repeat: repeat;*/
            background-position: center center;
            background-attachment: fixed;
            background-size: cover;
            background-size: 100%;
            opacity: 0.90;
            filter:alpha(opacity=1);
        }

    </style>



</head>

<body>
<nav class="navbar navbar-primary navbar-transparent navbar-absolute">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- <a class="navbar-brand" href=" ../index.html ">Welcome to Blood Safety Information System</a> -->
        </div>
    </div>
</nav>
<div class="wrapper wrapper-full-page">
    <div class="full-page login-page"  data-color="blue">
        <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}

                            <div class="card card-login ">
                                <div class="card-header text-center">
                                    <h4 class="card-title">Login</h4>
                                </div>
                                <div class="card-content">



                                    <h5 class="text-center">Please Login here</h5>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">email</i>
                                        </span>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Email</label>
                                            <input type="email" name="email" class="form-control" value="{{ old('email') }}" required autofocus>




                                        </div>

                                        @if ($errors->has('email'))
                                            <span class="help-block" style="color: red;">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif

                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">lock_outline</i>
                                        </span>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Password</label>
                                            <input type="password" class="form-control" id="password" name="password" required="">



                                        </div>

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                        @endif


                                    </div>
                                </div>
                                <div class="text-center">
                                    <!-- <button type="submit" class="btn btn-success btn-wd btn-lg">Sign In</button> -->
                                    <a href="{{route('dashboard')}}" class="btn btn-success btn-wd btn-lg">Sign In</a>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container">
                <!-- <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Blog
                            </a>
                        </li>
                    </ul>
                </nav> -->
                <!-- <p class="copyright pull-right">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>
                    <a href="#">BSIS</a>
                </p> -->
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
<script src="/assets/vendors/chartist.min.js"></script>
<!--  Plugin for the Wizard -->
<script src="/assets/vendors/jquery.bootstrap-wizard.js"></script>
<!--  Notifications Plugin    -->
<script src="/assets/vendors/bootstrap-notify.js"></script>
<!-- DateTimePicker Plugin -->
<script src="/assets/vendors/bootstrap-datetimepicker.js"></script>
<!-- Vector Map plugin -->
<script src="/assets/vendors/jquery-jvectormap.js"></script>
<!-- Sliders Plugin -->
<script src="/assets/vendors/nouislider.min.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js"></script>
<!-- Select Plugin -->
<script src="/assets/vendors/jquery.select-bootstrap.js"></script>
<!--  DataTables.net Plugin    -->
<script src="/assets/vendors/jquery.datatables.js"></script>
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
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="/assets/js/demo.js"></script>
<script type="text/javascript">
    $().ready(function() {
        demo.checkFullPageBackgroundImage();

        setTimeout(function() {
            // after 1000 ms we add the class animated to the login/register card
            $('.card').removeClass('card-hidden');
        }, 700)
    });
</script>

</html>
