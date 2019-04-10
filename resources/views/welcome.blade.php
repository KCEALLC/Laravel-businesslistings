<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Business Listings</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Merriweather:200, 400, 600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-image: url('/images/businesslistings-bg1.jpg');
                background-repeat: no-repeat;
                background-size: cover;
                color: #c1c1c1;
                font-family: 'Merriweather', sans-serif;
                font-weight: 400;
                line-height: 1.6em;
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
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #fefefe;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .features {
                list-style: none;
            }

            .security {
                text-align: justify;
                font-size: x-small;
            }
        </style>
    </head>
    <body>
        <footer class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <footer class="content">
                <div class="title m-b-md">
                    Business Listings
                </div>
                    <h3>Features:</h3>
                <ul class="features">
                    <li>CRUD (<em>Create, Read, Update & Delete</em>)</li>
                    <li>Create,Edit,Delete Business Listings</li>
                    <li>User Registration</li>
                    <li>User Authentication</li>
                    <li>Form validation with security tokens</li>
                    <li>Error Handling with Flash Messages</li>
                    <li>Save Business Listings to Databases</li>
                    <li><a class="btn-success" href="/listings"  role="button">View Listings</a></li>
                </ul>
                <p class="security">
                    This web application has been developed by KCEA,LLC using Laravel Technologies following MVC
                    patterns.<br>
                    Business Listings was built for educational purposes only. <br>
                    Feel free to register and login. <br>
                    <b>Data you enter into this application is NOT used for any other purposes
                        except
                        accessing
                        the application for your personal testing.</b> <br>
                    <b>You should NOT enter financial or private personal information to view this demo.</b>
                </p>
                <div class="links">
                    <a href="https://github.com/KCEALLC" target="blank" title="KCEALLC GitHub">KCEALLC GitHub</a>
                </div>
            </footer>
        </footer>
    </body>
</html>
