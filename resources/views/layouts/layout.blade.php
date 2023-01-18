<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/normalize.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body class="antialiased">

@yield('content')
<footer>
    <p>CDAFAL 68</p>
    <p>3 Rue Georges Risler, 68100 Mulhouse</p>
    <p>Tel: 06 31 63 62 69</p>
    <p><a href="https://cdafal68.eu/">https://cdafal68.eu/</a></p>

    <!-- Add font awesome icons -->
    <a href="https://www.facebook.com/cdafal68/" class="fa fa-facebook social-media"></a>
    <a href="#" class="fa fa-twitter social-media"></a>
    <a href="#" class="fa fa-google social-media"></a>
    <a href="#" class="fa fa-linkedin social-media"></a>
    <a href="#" class="fa fa-youtube social-media"></a>
    <a href="#" class="fa fa-instagram social-media"></a>

</footer>
</body>
</html>
