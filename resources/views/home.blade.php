<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hello city</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body class="antialiased">
        <h1>Hello from france</h1>
        <p>Il est actuellement {{ date('h:i: A') }} </p>


    <footer>
        <p>&copy; Copyright {{ date('Y')}} &middot; <a href="#">About us</a></p>
    </footer>

    </body>
</html>
