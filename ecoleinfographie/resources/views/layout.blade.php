<!DOCTYPE html>
<html lang="fr" class="no-js">
@include('partials.head')
<body class="<?php if($page){ echo $page->slug; } ;?> <?php if ($page->classBody) echo $page->classBody; ?>">
@yield('header')

<div class="container {{ $page->headerLarge == false ? 'container--header-min' : '' }}">
    @yield('content')
</div>
<div class="footer__container">
    <footer class="footer">
        @include('partials.footer')
    </footer>
</div>
<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous">
</script>
<script src="./js/all.js"></script>
</body>
</html>
