<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Y MVC</title>
</head>
<body>
    {{--Seccion de cabecera--}}
    <header style="border: solid 2px orangered; margin: 15px auto; max-width: 600px">
        @yield('header')
    </header>
    {{--Seccion de body--}}
    <div style="border: solid 2px purple; margin: 15px auto; width: auto">
        @yield('body')
    </div>
    {{--Seccion de footer--}}
    <footer style="border: solid 2px brown; margin: 15px auto; max-width: 600px">
        @yield('footer')
    </footer>
</body>
</html>
