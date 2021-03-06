<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>E-Commerce Project</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </head>
    <body>
        {{View::make('header')}}
        @yield('content')
        {{View::make('footer')}}
    </body>
    <style>
        .custom-login
        {
            height: 500px;
            padding-top:  100px;
        }
        img.slider-img
        {
            height: 400px !important;
        }
        .custom-product
        {
            height: 600px;
        }
        .slider-text
        {
            background-color: #35443585;
        }
        img.trending-image
        {
            height: 100px;
        }
        .trending-item
        {
            float: left;
            width: 20%;
            padding-bottom: 50px
        }
        .trending-wrapper
        {
            margin: 30px;
        }
        .carousel-control-prev 
        {
            background-image: linear-gradient(to right, black , #35443500);
        }
        .carousel-control-next
        {
            background-image: linear-gradient(to left, black , #35443500)
        }
        img.detail-image
        {
            height: 200px;
        }
    </style>
</html>