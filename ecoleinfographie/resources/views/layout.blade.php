<html>
<head>
    <title>App Name - <?php echo $page->title;?></title>
</head>
<body>
@section('sidebar')
    This is the master sidebar.
@show

<div class="container">
    @yield('content')
</div>
</body>
</html>
