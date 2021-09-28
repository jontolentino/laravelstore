<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <header>
        <div class="menu">
            <h1>Jon Tolentino Menustore Laravel</h1>
        </div>
    </header>
    <div class="main-container">
        @yield('content')
    </div>


</body>
</html>
