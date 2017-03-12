<!DOCTYPE html>
<html lang="fr" class="no-js">
@include('partials.head')
<body class="<?php if($page){ echo $page->slug; } ;?>">
{{--@if($page->id == 1) <!-- If home -->
    @include('partials.header-home')
@elseif($page->id == 2) <!-- if web-home -->
    @include('partials.web_home.header_web-home')
@endif--}}
@yield('header')

<div class="container">
    @yield('content')
</div>
<div class="footer__container">
    <footer class="footer">
        @include('partials.footer')
    </footer>
</div>
<script
        src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
        crossorigin="anonymous">
</script>
<script src="./js/all.js"></script>
</body>
</html>
