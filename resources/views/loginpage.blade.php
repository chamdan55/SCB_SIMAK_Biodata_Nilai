<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
       
    </head>
    <body>
        <center>
            <form action="/dashboards" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                Username : <input type="text" name="username"> <br/>
                Password : <input type="password" name="password"> <br/>
                <input type="submit" name="login" value="Login"> <br/>
            </form>
        </center>
    </body>
</html>
