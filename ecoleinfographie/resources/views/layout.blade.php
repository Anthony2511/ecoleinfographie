<!DOCTYPE html>
<html lang="fr" class="no-js">
@include('partials.head')
<body class=" @yield('class')">
<div class="alert">Le javascript de votre navigateur est désactivé. Pour une expérience optimale, activez-le.</div>
<div class="overlay"></div>


@yield('header')

    @yield('content')
</div>

<div class="footer__container">
    <footer class="footer">
        @include('partials.footer')
    </footer>
</div>
<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous">
</script>
<script src={{ asset('js/all.js') }}></script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-84266493-2', 'auto');
    ga('send', 'pageview');
</script>
</body>
</html>
