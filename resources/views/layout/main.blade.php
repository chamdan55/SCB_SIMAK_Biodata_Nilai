<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


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

            body{
            background-color: #f3f5f9;
            }

            .wrapper{
            display: flex;
            position: relative;
            }

            .wrapper .sidebar{
            width: 200px;
            height: 100%;
            background: #16744A;
            padding: 30px 0px;
            position: fixed;
            }

            .wrapper .sidebar h3{
            color: #fff;
            text-transform: uppercase;
            text-align: center;
            margin-bottom: 30px;
            }

            .wrapper .sidebar ul li{
            padding: 15px;
            border-bottom: 1px solid #bdb8d7;
            border-bottom: 1px solid rgba(0,0,0,0.05);
            border-top: 1px solid rgba(255,255,255,0.05);
            }

            .wrapper .sidebar ul li a{
            color: #bdb8d7;
            display: block;
            }

            .wrapper .sidebar ul li a .fas{
            width: 25px;
            }

            .wrapper .sidebar ul li:hover{
            background-color: #594f8d;
            }

            .wrapper .sidebar ul li:hover a{
            color: #fff;
            }

            .wrapper .sidebar .social_media{
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            }

            .wrapper .sidebar .social_media a{
            display: block;
            width: 40px;
            background: #594f8d;
            height: 40px;
            line-height: 45px;
            text-align: center;
            margin: 0 5px;
            color: #bdb8d7;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
            }

            .wrapper .main_content{
            width: 100%;
            margin-left: 200px;
            }

            .wrapper .main_content .header{
            padding: 20px;
            background: #fff;
            color: #717171;
            border-bottom: 1px solid #e0e4e8;
            }

            .wrapper .main_content .info{
            margin: 20px;
            color: #717171;
            line-height: 25px;
            }

            .wrapper .main_content .info div{
            margin-bottom: 20px;
            }

            .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            }


        </style>

        <meta charset="UTF-8">
        <!-- Using Template Engine Blade Laravel for Title Page -->
        <title>@yield('title')</title>
        <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color:  #16744A;">
        <a class="navbar-brand" href="#">
            <img src = "{{ url ('images/logo_smp_CB.png') }}"  class = "center" alt="" width = "165" height = "40">
        </a>
    </nav>

    <!-- Sidebar -->
    <div class="wrapper">
        <div class="sidebar">
            <ul>
                <li><a ></i>Siswa</a></li>
                <li><a href="{{ url ('/Dashboard') }}"><i class="fas fa-tv"></i>Dashboard</a></li>
                <li><a href="{{ url ('/students') }}"><i class="fas fa-users"></i>Biodata Siswa</a></li>
                <li><a href="{{ url ('/scorestudents') }}"><i class="fas fa-file"></i>Nilai Siswa</a></li>
                <li><a href="{{ url ('/Asrama') }}"><i class="fas fa-home"></i>Asrama</a></li>
                <li><a ></i>Guru</a></li>
                <li><a href="{{ url ('/ProfilWaliKelas') }}"><i class="fas fa-user"></i>Profil Wali Kelas</a></li>
                <li><a href="{{ url ('/DataGuru') }}"><i class="fas fa-address-card"></i>Data Guru</a></li>
            </ul>
            <div class="social_media">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
        </div>
            <div class="main_content">
                <!-- Using Templating Engine Blade Laravel for Main Content -->
                @yield('container')
            </div>
        </div>
    </div>

</body>
</html>
