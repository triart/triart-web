<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!-- Meta, title, CSS, favicons, etc. -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Triartspace | Dashboard</title>

<!-- Bootstrap core CSS -->

<link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">

<link href="{{ asset('fonts/css/font-awesome.min.css')}}" rel="stylesheet">
<link href="{{ asset('css/animate.min.css')}}" rel="stylesheet">

<!-- Custom styling plus plugins -->
<link href="{{ asset('css/dashboard_custom.css')}}" rel="stylesheet">
<link href="{{ asset('css/icheck/flat/green.css')}}" rel="stylesheet">

<!-- select2 -->
<link href="{{ asset('css/select/select2.min.css') }}" rel="stylesheet">


<script src="{{ asset('js/jquery.min.js')}}"></script>

<!--[if lt IE 9]>
<script src="../assets/js/ie8-responsive-file-warning.js"></script>
<![endif]-->

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<script>
    $.ajaxSetup({
        headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}' }
    });
</script>