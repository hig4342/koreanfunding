<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>국어문화원</title>
        <!-- Styles -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="./js/main.js"></script>
        <link href="./css/main.css" rel="stylesheet">
        <link href="./fonts/stylesheet.css" rel="stylesheet" type="text/css">
        <style>
            body{
                width: 100%;
                margin: 0;
                background: url('/images/background.jpg');

            }
            img {
                max-width: 100%;
            }
            .contents{
                background: url('/images/banner.png') no-repeat top center;
                margin: 0px auto;
                margin-top: 80px;
                width: 100%;
            }
            #quickmenu{
                z-index: 0;
            }
            #topmenu ul{
                font-size: 25px;
                padding: 25px;
                float:right;
            }
            .menu {
                text-align: center;
                display: inline-block;
            }
            .menu:first-child{
                border-left: none;
            }
            .menu:hover .submenu {
                display: block;
                opacity: 1;
                transform: translateY(0);
            }
            .submenu {
                display: none;
                position: absolute;
                background-color: white;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                transition: all .5s ease;
                z-index: 1;
            }
            .banner1{
                display: block; margin: 0px auto;
            }
            .main_title{
                display: block; margin: 0px auto;
                color: #f6e7d9;
            }
        </style>
    </head>
    <body>
        @include('partials.topmenu')
        @include('partials.quickmenu')
        <div class="contents">
            @yield('content')
        </div>
        <footer>
            @include('partials.footer')
        </footer>
    </body>
</html>
