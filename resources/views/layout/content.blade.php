<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
</head>
<body>
<header>
        <h1>My First Laravel Layout</h1>
        <ul>
            <li> <a href="#">News</a> </li>
            <li> <a href="/contacts">Contacts</a> </li>
            <li> <a href="/about">About Us</a> </li>
        </ul>
    </header>
    @yield('content')
    <footer>
        <p>Made with &hearts; by Carmine Vitale - Boolean Class 12 &copy;</p>
    </footer>
    <!-- js -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>