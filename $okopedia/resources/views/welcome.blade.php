<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>$okopedia</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
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
                float: left;
                background-color: white;
                width: 50%;
                height: 496px;
                position: absolute;
                top: 13%;
                left: 5%;
                color: white;
                border-radius: 10px;
                border: 2px solid #3F704D;
            }
            
            .content2{
                float: left;
                position: absolute;
                background-color: #3F704D;
                width: 48%;
                height: 500px;
                top: 13%; 
                left: 48%;
                border-radius: 50px;
            }

            .title {
                font-size: 84px;
                color: white;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .position{
                padding-left: 60px;
            }

            .positionBtn{
                position: absolute;
                left: 63px;
                background-color: white;
                border: none;
                border-radius: 10px;
                color: #3F704D;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 12pt;
            }

            .positionBtn:hover {background-color:grey; color: white }

            .positionImg{
               padding-left: 60px;
                height: 480px;
            }

            .textContent{
                font-size: 18pt;
                position: absolute;
                top: 150px;
                left: 10px;
                color: white;
            }

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            </div>



            <div class ="content">
                <img class="positionImg" src="/storage/img/people3.jpg">
            </div>
            <div class="content2">
                 <h1 class="title position">$okopedia</h1>
                <p class="textContent position">your place to shop for various products</p>
                <button class="positionBtn" onclick="location.href='{{ url('/home') }}'">See all products</button>
            </div>

    </body>
</html>
