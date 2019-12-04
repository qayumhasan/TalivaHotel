<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('back-end')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{asset('back-end')}}/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- select menu area -->
    <link href="{{asset('back-end')}}/vendor/selecttwo/css/select2.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('back-end')}}/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{asset('back-end')}}/vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{asset('back-end')}}/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="soft-all-wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            @include('back-end.inc.header')
            @include('back-end.inc.menu')

        </nav>

            @yield('main-content')

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{{asset('back-end')}}/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('back-end')}}/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{asset('back-end')}}/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="{{asset('back-end')}}/vendor/raphael/raphael.min.js"></script>
    <script src="{{asset('back-end')}}/vendor/morrisjs/morris.min.js"></script>
    <script src="{{asset('back-end')}}/data/morris-data.js"></script>

    <!-- select 2 js -->
    <script src="{{asset('back-end')}}/vendor/selecttwo/js/select2.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{asset('back-end')}}/dist/js/sb-admin-2.js"></script>

    @yield('footer-script')

</body>

</html>
