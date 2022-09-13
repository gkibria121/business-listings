<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel="stylesheet" href={{asset("css/style.css")}}>
    <link rel="stylesheet" href={{asset("css/bootstrap.css")}}>
</head>
<body>
     

        <main class="py-4">
            @include('inc.login-nav')
            @yield('content')
        </main>
    </div>
</body>
<script src={{asset("js/bootstrap.bundle.js")}}></script>
<script src={{asset("js/javascript.js")}}></script>
</html>
