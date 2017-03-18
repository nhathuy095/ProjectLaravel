<title>Colored  an Admin Panel Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Colored Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="{{url("/")}}/resources/assets/css/bootstrap.css">
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="{{url("/")}}/resources/assets/css/style.css" rel='stylesheet' type='text/css' />
<link href="{{url("/")}}/resources/assets/css/app.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="{{url("/")}}/resources/assets/css/font.css" type="text/css"/>
{{--<link href="{{url("/")}}/resources/assets/css/font-awesome.css" rel="stylesheet">--}}
<!-- //font-awesome icons -->
<script src="{{url("/")}}/resources/assets/js/jquery2.0.3.min.js"></script>
<script src="{{url("/")}}/resources/assets/js/modernizr.js"></script>
<script src="{{url("/")}}/resources/assets/js/jquery.cookie.js"></script>
<script src="{{url("/")}}/resources/assets/js/screenfull.js"></script>
<script>
    $(function () {
        $('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

        if (!screenfull.enabled) {
            return false;
        }



        $('#toggle').click(function () {
            screenfull.toggle($('#container')[0]);
        });
    });
</script>
<!-- charts -->
<script src="{{url("/")}}/resources/assets/js/raphael-min.js"></script>
<script src="{{url("/")}}/resources/assets/js/morris.js"></script>
<link rel="stylesheet" href="{{url("/")}}/resources/assets/css/morris.css">
<!-- //charts -->
<!--skycons-icons-->
<script src="{{url("/")}}/resources/assets/js/skycons.js"></script>
<!--//skycons-icons-->
<script>
    $(function () {
        $('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

        if (!screenfull.enabled) {
            return false;
        }

        $('#toggle').click(function () {
            screenfull.toggle($('#container')[0]);
        });
    });
</script>
<!-- tables -->
<link rel="stylesheet" type="text/css" href="{{url("/")}}/resources/assets/css/table-style.css" />
<link rel="stylesheet" type="text/css" href="{{url("/")}}/resources/assets/css/basictable.css" />
<script type="text/javascript" src="{{url("/")}}/resources/assets/js/jquery.basictable.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#table').basictable();

        $('#table-breakpoint').basictable({
            breakpoint: 768
        });

        $('#table-swap-axis').basictable({
            swapAxis: true
        });

        $('#table-force-off').basictable({
            forceResponsive: false
        });

        $('#table-no-resize').basictable({
            noResize: true
        });

        $('#table-two-axis').basictable();

        $('#table-max-height').basictable({
            tableWrapper: true
        });
    });
</script>
<script src="{{url("/")}}/resources/assets/js/app.js"></script>