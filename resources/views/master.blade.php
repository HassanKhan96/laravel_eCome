<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title>eCommerce</title>
    <style>
        body{
            width: 100%;
            height: 100vh;
        }

        .custom-container {
            width: 100%;
            height: 80%;
            display: flex;
            justify-content: stretch;
        }

        .carousel-img {
            height: 400px;
            object-fit: scale-down;
            background-color: transparent;
        }
        .carousel-inner {
            background-color: rgb(255, 255, 255);
        }

        .carousel-caption {
            background-color: rgba(0, 0, 0, 0.199);
        }

        .trending-container {
            width: 100%;
        }

        .trending-products {
            width: 20%;
            height: 250px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .trending-products a {
            text-decoration: none;
            color: rgb(49, 49, 49);
        }

        .trending-img {
            width: 100%;
            height: 160px;
            object-fit: contain
        }

        .detail-img img{
            height: 200px;
        }

        .footer {
            background-color: rgb(247, 247, 247);
            height: 11%;
        }
    </style>
</head>
<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}
</body>

</html>