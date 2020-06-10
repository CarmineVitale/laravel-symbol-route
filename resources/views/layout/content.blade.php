<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
        <h1>My First Laravel Layout</h1>
        <ul class="links">
            <li> <a href="#">News</a> </li>
            <li> <a href="#">Contacts</a> </li>
            <li> <a href="#">About Us</a> </li>
        </ul>
    </header>
    @yield('content')
    <footer>
        <p>Made with love by Carmine Vitale - Boolean Class 12 &copy;</p>
    </footer>
</body>
</html>