<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <div class="nav">
        <a href="/home"><img src="image/logo.png"></a>
        <ul>
            <li>
                <a href="/">Home</a>
            </li>
            <li>
                <a href="/product">Coffee</a>
            </li>
            <li>
                <a href="/about">About</a>
            </li>
            <li>
                <a href="/contact">Contact</a>
            </li>
        </ul>

    </div>

    <div class="image">
        <h3>NOW YOU CAN FEEL THE ENERGY</H3>
            <h1>Start Your Day With
                <br>
                a COFFEE
            </h1>

        </div>
        <div class="content">
            @yield('user')
        </div>

        <div class ="footer">

        </div>
    </body>
    </html>
