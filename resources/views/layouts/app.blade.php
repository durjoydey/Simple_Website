<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
       <link href="/css/style.css" rel="stylesheet">
    </head>
    <body class="container">
        @include('inc.topnav')
        <div>
            @yield('content')
        </div>
    </body>
</html>