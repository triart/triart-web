<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.header')

</head>


<body class="nav-md">

<div class="container body">


    <div class="main_container">

        @include('layouts.sidemenu')

        @include('layouts.topnav')

        @yield('content')
    </div>

</div>

<div id="custom_notifications" class="custom-notifications dsp_none">
    <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
    </ul>
    <div class="clearfix"></div>
    <div id="notif-group" class="tabbed_notifications"></div>
</div>

<script src="{{ asset('js/bootstrap.min.js')}}"></script>

<!-- chart js -->
<script src="{{ asset('js/chartjs/chart.min.js')}}"></script>
<!-- bootstrap progress js -->
<script src="{{ asset('js/progressbar/bootstrap-progressbar.min.js')}}"></script>
<script src="{{ asset('js/nicescroll/jquery.nicescroll.min.js')}}"></script>
<!-- icheck -->
<script src="{{ asset('js/icheck/icheck.min.js')}}"></script>

<script src="{{ asset('js/dashboard_custom.js')}}"></script>
<!-- dropzone -->
<script src="{{ asset('js/dropzone/dropzone.js')}}"></script>
<!-- PNotify -->
<script type="text/javascript" src="{{ asset('js/notify/pnotify.core.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/notify/pnotify.buttons.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/notify/pnotify.nonblock.js')}}"></script>

@yield('script')

</body>

</html>