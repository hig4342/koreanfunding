<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>footer</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

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
            .logo1{
                float: left;
                padding-left: 30px;
                padding-top: 5px;
            }
            .logo2{
                float: left;
                padding-left: 15px;
                padding-top: 10px;
            }

            .logo3{
                float: left;
                padding-left: 30px;
                padding-top: 20px;
            }

            .content {
                margin-top: 0px;
                background-color: white;
                padding-top: 5px;
                padding-left: 50px;
                width: 100%;

            }
            .footer{
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
            <footer>
            <div class="footer">
                    <div class="logo1">
                        <a href="https://www.mcst.go.kr/kor/main.jsp"><img src="/images/korea_culture.png"></a>
                    </div>
                    <div class="logo2">
                        <a href="http://urimal.hnu.kr/korea/html/new_open01.html"><img src="/images/logo.png"></a>
                    </div>

                    <div class="logo3">
                        <a href="http://www.xn--3e0bp5xb8hr6ao19b.com/default/main/main.php"><img src="/images/kruisler.png"></a>
                    </div>


                    <div class="content">
                        <b>문의사항</b>
                        <p>한남대학교 국어문화원 대표전화 : <a href="tel:042-629-7474">042-629-7474</a></p>
                    </div>
            </div>
            </footer>
        </body>
</html>
