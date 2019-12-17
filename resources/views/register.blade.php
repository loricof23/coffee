<!doctype html>
<html langv="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <div class="header">
        <center><img src="image/logo.png"></center>
    </div>
    <div class="register">
        <center><h1>Register Account Form</h1></center>
        <form action="/register/process" method="post">
            @csrf
            <table>
                <tr>
                    <td>
                        Name
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <input type="text" name="name">
                    </td>
                </tr>

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
                        Gender
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <input type="radio" name="gender" id="male"> Male
                        <input type="radio" name="gender" id="female"> Female

                    </td>
                </tr>

                <tr>
                    <td>
                        Birth Date
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <input type="date" name="date">
                    </td>
                </tr>

                <tr>
                    <td>
                        Phone Number
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <input type="text" name="phone">
                    </td>
                </tr>

                <tr>
                    <td>
                        address
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <textarea rows="6" cols="40" name="address">
                        </textarea>
                    </td>
                </tr>

                <tr>
                    <td>
                        <button type="submit">Submit</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
