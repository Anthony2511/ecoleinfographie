<!DOCTYPE html>
<html lang="fr" class="no-js">
@include('partials.head')
<body class="<?php if($page){ echo $page->slug; } ;?>">

@include('partials.header')

<div class="container">
    @yield('content')
</div>
</body>
</html>
