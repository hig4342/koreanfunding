<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>국어문화원</title>

        <!-- Styles -->
        <style>
            body{
                width: 100%;
                margin: 0;
            }
            ul, li{
                list-style: none;
            }
            li{
                float: left;
            }
            .logo{
                float: left;
                padding-left: 30px;
                padding-top: 5px;
            }
            .menu-button{
                float: right;
                margin-right: 30px;
                padding-top: 30px;
            }
            .content {
                background-color: black;
                color: white;
                width: 100%;
                margin-top: 80px;
            }
            .menu{
                top: 0;
                position: fixed;
                background-color: white;
                color: black;
                width: 100%;
                height: 80px;
            }
        </style>
    </head>
    <body>
        <div class="menu">
            <div class="logo"><img src="/image/logo.png"></div>
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
        <div class="content">
            @for ($i = 0; $i < 50; $i++)
                <div>{{$i+1}}</div>
            @endfor
        </div>
    </body>
</html>
