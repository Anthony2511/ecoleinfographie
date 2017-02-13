<html>
<head>
    <title>App Name - <?php echo $page->title;?></title>
    <link rel="stylesheet" href="./css/app.css">
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
