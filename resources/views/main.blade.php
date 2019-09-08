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
                margin-top: 80px;
                width: 100%;
                height: 1684px;
                margin: 0px;
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
        </style>
    </head>
    <body>
        <div id="topmenu">
            <div class="logo"><img src="/images/logo.png" height="60px" width="auto"></div>
            <ul>
                <li class="menu">
                    <a href="#" class="dropbtn">대회소개</a>
                    <ul class="submenu">
                        <li>공모요강</li>
                        <li>인사말</li>
                    </ul>
                </li>
                <li class="menu"><a href="#">접수하기</a></li>
                <li class="menu"><a href="#">공지사항</a></li>
                <li class="menu"><a href="#">모의투자</a></li>
                <li class="menu"><a href="#">로그인</a></li>
                <li class="menu"><a href="#">회원가입</a></li>
            </ul>
        </div>
        <div id="quickmenu">
            <div class="squarebutton paper on"><a href ={{ url('/') }}>HOME</a></div>
            <div class="squarebutton paper"><a href ={{ url('/guideline') }}>공모요강</a></div>
            <div class="squarebutton paper"><a href ={{ url('/receipt') }}>접수하기</a></div>
            <div class="squarebutton paper"><a href ={{ url('/faq') }}>FAQ</a></div>
            <div class="squarebutton paper"><a href ={{ url('/login') }}>로그인</a></div>
        </div>
        <div class="contents"></div>
    </body>
</html>
