<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Plantilla Maestra</title>
</head>
<body>
    <header style="border: solid 2px orangered; margin: 15px">
        @yield('header')
    </header>

    <div style="border: solid 2px darkblue; margin: 15px">
        @yield('container')
    </div>

    <footer style="border: solid 2px purple; margin: 15px">
        @yield('footer')
    </footer>
</body>
</html>
