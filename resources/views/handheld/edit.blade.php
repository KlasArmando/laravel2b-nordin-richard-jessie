<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $( function() {
            $( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' }).val();
        } );
    </script>
    <style>
        * {box-sizing: border-box;}
        body {
            margin: 0;
            font-family: Arial;
        }
        .header {
            overflow: hidden;
            background-color: #f45c42;
            padding: 20px 10px;
        }
        .header a {
            float: left;
            color: black;
            text-align: center;
            padding: 12px;
            text-decoration: none;
            font-size: 18px;
            line-height: 25px;
            border-radius: 4px;
        }
        .header a.logo {
            font-size: 25px;
            font-weight: bold;
        }
        .header a:hover {
            background-color: #ddd;
            color: black;
        }
        .header a.active {
            background-color: dodgerblue;
            color: white;
        }
        .header-right {
            float: Left;
        }
        @media screen and (max-width: 500px) {
            .header a {
                float: none;
                display: block;
                text-align: left;
            }
            .header-right {
                float: none;
            }
        }

        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #f45c42;
            color: black;
            text-align: Left;
            text-decoration: none;
            font-weight: normal;
        }
        a,
        a:link,
        a:visited,
        a:active{
            color: black;
            text-align: Left;
            text-decoration: none;
            font-weight: normal;
        }
    </style>
</head>
<body>

<div class="header">
    <a href="{{url('index')}}" class="logo">The Game Museum</a>
    <div class="header-right">
        <a href="#">Home</a>
        <a href="{{url('console')}}">Consoles</a>
        <a href="{{url('games')}}">Games</a>
        <a class="active" href="{{url('handheld')}}">Handheld</a>
        @if(Auth::user()['role_id'] == 2)
        @endif
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                @if(Auth::user()['role_id'] == 2)
                                    <a href="{{url('company')}}">Company</a>
                            @endif
                        </div>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"> update data</div>
                <br>

                <form method="POST" action="{{url('handhelds/update/' . $handheld->id)}}">
                    naam: <br>
                    <input type="text" name="name" value="{{$handheld->name}}" required>*required<br>
                    releasedate: <br>
                    <input type="text" name="releasedate" id="datepicker" value="{{$handheld->releasedate}}" required>*required<br>
                    price: <br>
                    <input type="number" name="price" min="0" value="{{$handheld->price}}" step=".01" required>*required<br>
                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                    <input type="submit" name="edit" value="edit">
                </form>
            </div>
        </div>
    </div>
</div>

<div class="footer">
    <a href="{{url('contact')}}">Contact</a>
</div>

</body>
</html>