<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Lets rent your car</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <!--FontAwesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <!-- Styles -->
    <style>
        html, body {
            background-image: url("https://img.etimg.com/thumb/width-1200,height-900,imgsize-40622,resizemode-1,msid-75259494/small-biz/startups/newsbuzz/self-drive-vehicle-rental-companies-spot-a-fast-lane-to-riches.jpg");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            color: black;
            font-family: 'Raleway', sans-serif;
            font-weight: 140;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: black;
            padding: 0 25px;
            font-size: 15px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
        p {
            font-size: 120%;
            font-weight: bold;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
        .button {
            float: left;
            margin: 70px 0 0 60px;
        }
        .button i {
            font-size: 170%;
        }
        .button a {
            font-weight: bold;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @if (Auth::check())
                {{--                        <a href="{{ url('/home') }}" style="border:1.5px white;border-style: solid;border-radius: 50px; padding: 7px 8px 7px 8px; color: white; background-color: lightslategrey">You are login - Dashboard</a>--}}
                <a href="{{ url('/home') }}" class="btn btn-info" style="padding: 7px 8px 7px 8px;">You are login - Dashboard</a>
            @else
                <a href="{{ url('/login') }}" class="btn btn-info" style="padding: 7px 8px 7px 8px;">Login</a>
                <a href="{{ url('/register') }}" class="btn btn-info" style="padding: 7px 8px 7px 8px;">Register</a>
            @endif
        </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
            Let's Rent a Car
        </div>
        <p><i>Registr</i> or <i>Login</i> and choose a car for your needs and entertainment wherever you are. Just register or log in to your account.</p>
    </div>
</div>
</body>
</html>
