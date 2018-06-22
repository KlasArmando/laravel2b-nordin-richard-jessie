<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
        <a class="active" href="{{url('console')}}">Consoles</a>
        <a href="{{url('games')}}">Games</a>
        <a href="{{url('handheld')}}">Handheld</a>
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
<br>
<div class="container">
    <form method="POST" action="{{url('company/update/' . $company->id)}}">


        <div class="form-group">
            <label for="title">Name:</label>
            <input type="text" name="name" value="{{$company->name}}" required>*required<br>
        </div>

        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
        <input type="submit" name="edit" value="edit">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </form>
</div>
<div class="footer">
    <a href="{{url('contact')}}">Contact</a>
</div>
</body>
</html>