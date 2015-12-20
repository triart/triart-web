<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 10)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Triartspace</title>
    <meta name="description" content="neko-description">
    <meta name="author" content="Little NEKO">
    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- CSS
    ================================================== -->

    @yield('revolution_slider_css')

    <!-- web font  -->
    <link href='http://fonts.googleapis.com/css?family=Helvetica:400,700' rel='stylesheet' type='text/css'>	<!-- Neko framework  -->
    <link type="text/css" rel="stylesheet" href="{{url('custom-icons/css/custom-icons.css')}}">
    <link type="text/css" rel="stylesheet" href="{{url('neko-framework/external-plugins/external-plugins.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{url('neko-framework/css/layout/neko-framework-layout.css')}}">
    <link type="text/css" rel="stylesheet" id="color" href="{{url('neko-framework/css/color/neko-framework-color.css')}}">
    <link type="text/css" rel="stylesheet" id="color" href="{{url('css/custom.css')}}">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="{{url('images/favicon.ico')}}">
    <link rel="apple-touch-icon" href="{{url('images/apple-touch-icon.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{url('images/apple-touch-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{url('images/apple-touch-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{url('images/apple-touch-icon-144x144.png')}}">

    <script src="{{url('neko-framework/external-plugins/modernizr/modernizr.custom.js')}}"></script>

</head>

<body class="activate-appear-animation header-7 parallaxed-footer">
<!-- global-wrapper -->
<div id="global-wrapper">

@include('web.layouts.header')
@yield('content')
@include('web.layouts.footer')
</div>
<!-- global wrapper -->

<!-- End Document ================================================== -->

<!-- Placed at the end of the document so the pages load faster -->
<script type="text/javascript" src="{{url('neko-framework/js/jquery/jquery-1.10.2.min.js')}}"></script>
<script type="text/javascript" src="{{url('neko-framework/js/jquery-ui/jquery-ui-1.8.23.custom.min.js')}}"></script>

<!-- external framework plugins -->
<script type="application/javascript" src="{{url('neko-framework/external-plugins/external-plugins.min.js')}}"></script>
<!-- neko framework script -->
<script type="text/javascript" src="{{url('neko-framework/js/neko-framework.js')}}"></script>

@yield('revolution_slider_js')

<!-- neko custom script -->
<script src="{{url('js/custom.js')}}"></script>
</body>
</html>
