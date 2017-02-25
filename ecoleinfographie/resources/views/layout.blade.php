<!DOCTYPE html>
<html lang="fr" class="no-js">
@include('partials.head')
<body class="<?php if($page){ echo $page->slug; } ;?>">

<header class="header header-shawl" role="banner">
  @include('partials.header')
</header>

<div class="container">
    @yield('content')
</div>
<script
        src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
        crossorigin="anonymous">
</script>
<script src="./js/jquery-accessibleMegaMenu.js"></script>
<script src="./js/main.js"></script>
<script src="./js/modernizr.js"></script>
<script src="./js/sliderBlog.js"></script>
</body>
</html>
