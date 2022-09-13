<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title></title>

     <link rel="stylesheet" href={{asset("css/style.css")}}>
     <link rel="stylesheet" href={{asset("css/bootstrap.css")}}>
</head>
<body class="unselectable">

        @include('inc.login-nav')
    </div>
    <main class="py-4 container" >
        @include('inc.messages')
        @yield('content')
       
        
    </main>
</body>
<script src={{asset("js/bootstrap.bundle.js")}}></script>
<script src={{asset("js/javascript.js")}}></script>
</html>
