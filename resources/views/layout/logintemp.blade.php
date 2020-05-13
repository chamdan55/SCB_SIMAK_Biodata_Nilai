<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


    <!-- materialize css cdn link -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">


    <!-- CSS Style Main Template -->
        <style>
            *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            list-style: none;
            text-decoration: none;
            font-family: 'Josefin Sans', sans-serif;
            }

            .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            }

            body{
                    background-image: url('images/bg-login.png');
                    background-repeat: no-repeat;
                    background-size: auto, contain;
                    background-position: center;
                    background-attachment: fixed;
                }
                .login{
                    margin-top:100px;
                }

                .login .card{
                    background:rgba(0, 0, 0, .6);

                }

                .login label{
                    font-size: 16px;
                    color: #ccc;
                }

                .login input{
                    font-size: 22px !important;
                    color: #fff;
                }

                .login button:hover{
                    padding: 0px 40px;
                }

                .container {
                display: flex;
                justify-content: center;
                flex-direction: row;
                }

                .btn-success.custom-btn {
                    background-color: #26A74A;
                    border-color: #26A74A;
                }

                .card {
                margin: 0 auto; /* Added */
                float: none; /* Added */
                margin-bottom: 10px; /* Added */
                }

        </style>
</head>

<body>
    <div class="row login container">
        <div class="col">
            <div class="card">
                <div class="card-action white-text bg-success">
                    <div class="container">
                    <h4><b>SIMAK Sekolah Cendekia Baznas</b></h4>
                    </div>
                </div>
                @if (session('status'))
                    <div class="alert alert-danger">
                        {{ session('status') }}
                    </div>
                @endif
                <form action="/loginme" method="post">
                    <div class="card-content">
                        @csrf
                        <div class="form-field">
                            <label for="username"><b>Username</b></label>
                            <input type="text" id="username" name="username">
                        </div>

                        <div class="form-field">
                            <label for="password"><b>Password</b></label>
                            <input type="password" id="password" name="password">
                        </div>

                        <div class="form-field">
                            <input type="checkbox" id="remember">
                            <label for="remember"><b>Remember me</b></label>
                        </div>

                        <div>
                            <button type="submit" class="btn btn-large btn-success custom-btn btn-lg btn-block"><b>Login</b></button>
                        </div>
                    
                    </div>
                </form>
            </div>
                <a href="/gotosignup" class="btn btn-primary my-3"> Daftar </a>
        </div>
    </div>
</body>
</html>
