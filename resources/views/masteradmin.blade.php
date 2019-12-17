<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <div class="nav">
        <ul>
            <li>
                <a href="/dashboard">Home</a>
            </li>

            <li>
                <a href="/dashboard/insert">Insert</a>
            </li>

            <li>
                <a href="/dashboard/view">Coffee</a>
            </li>

            <li>
                <a href="/dashboard/viewmessage">Messages</a>
            </li>
            <li>
                <a href="/login">Logout</a>
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
            @yield('admin')
        </div>

        <div class ="footer">

        </div>
    </body>
    </html>
