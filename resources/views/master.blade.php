<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Commerce</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}

</body>
<style>
    .custom-login {
        height: 500px;
        padding-top: 100px;
    }

    img.slider-img {
        height: 400px !important
    }

    .custom-product {
        height: 600px
    }

    .trending-image {
        height: 100px;
    }

    .trening-item {
        float: left;
        width: 20%;
    }

    .trending-wrapper {
        margin: 30px;
    }

    .detail-img {
        height: 200px;
    }

    .search-box {
        width: 500px !important
    }

    .cart-list-devider {
        border-bottom: 1px solid #ccc;
        margin-bottom: 20px;
        padding-bottom: 20px
    }

    .pos {
        align-items: center;
        text-align: center;
        margin: 10px auto;
        padding: 5px 30px;
        width: 800px;
    }

    .fa {
        padding: 20px;
        font-size: 30px;
        width: 60px;
        text-align: center;
        text-decoration: none;
        border-radius: 40%;
    }

    .fa:hover {
        opacity: 0.7;
    }

    .fa-facebook {
        background: #3B5998;
        color: white;
    }

    .fa-twitter {
        background: #55ACEE;
        color: white;
    }

    .fa-google {
        background: #dd4b39;
        color: white;
    }

    .fa-linkedin {
        background: #007bb5;
        color: white;
    }

    .fa-youtube {
        background: #bb0000;
        color: white;
    }

    .fa-instagram {
        background: #125688;
        color: white;
    }

    .fa-skype {
        background: #00aff0;
        color: white;
    }

    .fa-reddit {
        background: #ff5700;
        color: white;
    }

    .footer-dark {
        padding: 50px 0;
        color: white;
        background-color: #071B4C;
    }

    .footer-dark h3 {
        margin-top: 0;
        margin-bottom: 12px;
        font-weight: bold;
        font-size: 16px;
    }

    .footer-dark ul {
        padding: 0;
        list-style: none;
        line-height: 1.6;
        font-size: 14px;
        margin-bottom: 0;
    }

    .footer-dark ul a {
        color: inherit;
        text-decoration: none;
        opacity: 0.6;
    }

    .footer-dark ul a:hover {
        opacity: 0.8;
    }
    .footer-dark .copyright {
        text-align: center;
        padding-top: 24px;
        opacity: 0.3;
        font-size: 13px;
        margin-bottom: 0;
    }
    .txt
    {
        color: white;
    }
</style>

</html>