<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body {
            font: normal 18px/1.5 "Fira Sans", "Helvetica Neue", sans-serif;
            /*background: #3AAFAB;*/
            color: black;
            padding: 50px 0;
        }

        .container {
            width: 80%;
            max-width: 1200px;
            margin: 0 auto;
        }

        .container * {
            box-sizing: border-box;
        }

        .flex-outer,
        .flex-inner {
            list-style-type: none;
            padding: 0;
        }

        .flex-outer {
            max-width: 800px;
            margin: 0 auto;
        }

        .flex-outer li,
        .flex-inner {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
        }

        .flex-inner {
            padding: 0 8px;
            justify-content: space-between;
        }

        .flex-outer > li:not(:last-child) {
            margin-bottom: 20px;
        }

        .flex-outer li label,
        .flex-outer li p {
            padding: 8px;
            font-weight: 300;
            letter-spacing: .09em;
            text-transform: uppercase;
        }

        .flex-outer > li > label,
        .flex-outer li p {
            flex: 1 0 120px;
            max-width: 220px;
        }

        .flex-outer > li > label + *,
        .flex-inner {
            flex: 1 0 220px;
        }

        .flex-outer li p {
            margin: 0;
        }

        .flex-outer li input:not([type='checkbox']),
        .flex-outer li textarea {
            padding: 15px;
            border: solid;
        }

        .flex-outer li button {
            margin-left: auto;
            padding: 8px 16px;
            border: solid;
            background: #333;
            color: #f2f2f2;
            text-transform: uppercase;
            letter-spacing: .09em;
            border-radius: 2px;
        }

        .flex-inner li {
            width: 100px;
        }

        .item1 { grid-area: header; }
        .item3 { grid-area: main; }
        .item5 { grid-area: footer; }

        .grid-container {
            display: grid;
            grid-template-areas:
                    'header header header header header header'
                    'menu main main main right right'
                    'menu footer footer footer footer footer';
            grid-gap: 10px;
        }
        .grid-container > div {
            background-color: rgba(255, 255, 255, 0.8);
        }

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }

        * {box-sizing: border-box;}

        body {
            margin: 0;
            font-family: Arial;
        }
        .header {
            overflow: hidden;
            background-color: #f45c42;
            padding: 20px 10px;
            margin-top: -50px;
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
<div class="grid-container">
    <div class="item1"><div class="header">
            <a href="{{url('index')}}" class="logo">The Game Museum</a>
            <div class="header-right">
                <a href="{{url('index')}}">Home</a>
                <a href="{{url('console')}}">Consoles</a>
                <a href="{{url('games')}}">Games</a>
                <a href="{{url('handheld')}}">Handheld</a>
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
    <div class="item3"><div class="container">
            <form>
                <ul class="flex-outer">
                    <li>
                        <label for="first-name">First Name</label>
                        <input type="text" id="first-name" placeholder="Enter your first name here">
                    </li>
                    <li>
                        <label for="last-name">Last Name</label>
                        <input type="text" id="last-name" placeholder="Enter your last name here">
                    </li>
                    <li>
                        <label for="email">Email</label>
                        <input type="email" id="email" placeholder="Enter your email here">
                    </li>
                    <li>
                        <label for="phone">Phone</label>
                        <input type="tel" id="phone" placeholder="Enter your phone here">
                    </li>
                    <li>
                        <label for="message">Message</label>
                        <textarea rows="6" id="message" placeholder="Enter your message here"></textarea>
                    </li>
                    <li>
                        <button type="submit">Submit</button>
                    </li>
                </ul>
            </form>
        </div>
    <div class="item5"><div class="footer">
            <a href="{{url('contact')}}">Contact</a>
        </div></div>
</div>
</div>

</body>
</html>