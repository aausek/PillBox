<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        

        <title>PillBox</title>


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


        <!-- Styles -->
        <style>
            html, body {
                background-color: #b20838;   
                color: #ddd;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 90vh;
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
                font-size: 100px;
            }

            .links > a {
                color: #ddd;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
                text-shadow: 2px 2px 4px #000000;
            }
            .image {
                position: fixed;
                display: block;
                border-radius: 10px;

            }

            .overlay {
                position: relative;
                border-radius: 10px;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
                height: 350px;
                width: 500px;
                opacity: 0;
                transition: .5s ease;
                background-color: #ffffff;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            }

            .content:hover .overlay {
                opacity: 1;
            }

            .text {
              color: #b20838;
              font-size: 30px;
              position: relative;
              top: 50%;
              left: 50%;
              transform: translate(-50%, -50%);
              -ms-transform: translate(-50%, -50%);
            }

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
        
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                        {{-- <a href="{{ url('/admin') }}">Admin Login</a> --}}
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    PillBox
                </div>
                
                <div class="text-overlay">
                    <img src="/images/pills2.jpg" style="width:500px; height:350px" class="image">
                    <div class="overlay">
                        <div class="text">Welcome to the PillBox  application that accomodates users' needs for on-demand prescription requests! Login or Register to input LEGAL drug refills!</div>
                    </div> 
                </div>


                <div class="content">
                    @yield('content')
                </div>
            </div>
        </div>
        <footer class="footer" align="center">
            <p>&copy; PillBox Inc 2017</p>
        </footer>
    </body>
</html>
