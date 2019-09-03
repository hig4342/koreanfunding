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
        </style>
    </head>
    <body>
        <div id="menu">
            <div class="logo"><img src="/images/logo.png" height="60px" width="auto"></div>
            <div class="menu-button">
                <ui>
                    <li>대회소개</li>
                    <li>접수하기</li>
                    <li>공지사항</li>
                    <li>모의투자</li>
                    <li>로그인</li>
                    <li>회원가입</li>
                </ui>
            </div>
        </div>
        <div id="quickmenu">
            <div class="squarebutton paper join"><a href ={{ url('/') }}>HOME</a></div>
            <div class="squarebutton paper"><a href ={{ url('/guideline') }}>공모요강</a></div>
            <div class="squarebutton paper"><a href ={{ url('/receipt') }}>접수하기</a></div>
            <div class="squarebutton paper"><a href ={{ url('/faq') }}>FAQ</a></div>
            <div class="squarebutton paper"><a href ={{ url('/login') }}>로그인</a></div>
        </div>
        <div class="contents"></div>
    </body>
</html>
