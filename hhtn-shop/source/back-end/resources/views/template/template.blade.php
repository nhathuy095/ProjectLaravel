<!DOCTYPE html>
<head>
    @include("widget.head")
</head>
<body class="dashboard-page">
<script>
    var theme = $.cookie('protonTheme') || 'default';
    $('body').removeClass (function (index, css) {
        return (css.match (/\btheme-\S+/g) || []).join(' ');
    });
    if (theme !== 'default') $('body').addClass(theme);
</script>
@include("widget.left")
<section class="wrapper scrollable">
    <nav class="user-menu">
        <a href="javascript:;" class="main-menu-access">
            <i class="icon-proton-logo"></i>
            <i class="icon-reorder"></i>
        </a>
    </nav>
    @include("widget.menu")
    <div class="main-grid">
    @yield("layout")
    </div>
    @include("widget.footer")
</section>
<script src="{{url("/")}}/resources/assets/js/bootstrap.js"></script>
</body>
</html>
