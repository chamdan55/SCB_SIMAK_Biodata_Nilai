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
                <form method="post" action="/Dashboard">
                    @csrf
                    <div class="card-content">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control " id="username" name="username" placeholder="Masukan Username" Required>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama" Required>
                        </div>
                        <div class="form-group">
                            <label for="nip">Nomor Induk Pegawai / Nomor Induk Guru</label>
                            <input type="text" class="form-control" id="nip" name="nip" placeholder="Masukan NIP/NIG | maks: 13 karakter" Required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Masukan Email | ex : example@email.com" Required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Masukan Password | min : 8 karakter" Required>
                        </div>
                        <!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
                        <div>
                        <button type="submit" class="btn btn-large btn-success custom-btn btn-lg btn-block"> Daftar </button>
                        </div>
                        
                    </div>
                </form><br><br>
                <div>
                    <center>
                        <label for="info"> Sudah punya akun?</label><br>
                        <a href="/" class="btn btn-primary my-1"> Masuk </a>
                    </center>
                </div>
            </div>
                
        </div>
    </div>
</body>
</html>
