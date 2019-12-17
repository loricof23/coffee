<!doctype html>
<html langv="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <div class="header">
        <center><img src="image/logo.png"></center>
    </div>
    <div class="login">
        <center><h1>Log In To Your Account</h1></center>
        <form action="/login/process" method="post">
            @csrf
            <table>
                <tr>
                    <td>
                        Email
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <input type="text" name="email">
                    </td>
                </tr>
                <tr>
                    <td>
                        Password
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <input type="password" name="password">
                    </td>
                </tr>

                <tr>
                    <td>
                        <button type="submit">Login</button>
                    </td>
                </tr>
            </table>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </form>
        <center>need account ? <a href="/register">register</center>
        </div>
    </body>
    </html>
