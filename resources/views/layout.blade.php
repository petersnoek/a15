<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- include the w3.css stylesheet for some basic formatting -->
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">

    <title>A15</title>
</head>

<body>

<ul class="w3-navbar w3-black">
    <li><a href="#">Home</a></li>
    <li><a href="#">Link 1</a></li>
    <li><a href="#">Link 2</a></li>
    <li><a href="#">Link 3</a></li>
</ul>

<div class="w3-container">
    @yield('content')
</div>

</body>
</html>