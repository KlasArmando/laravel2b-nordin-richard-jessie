<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
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

        #myInput {
            background-image: url('{{asset('image/search.png')}}'); /* Add a search icon to input */
            background-position: 10px 12px; /* Position the search icon */
            background-repeat: no-repeat; /* Do not repeat the icon image */
            width: 100%; /* Full-width */
            font-size: 16px; /* Increase font-size */
            padding: 12px 20px 12px 40px; /* Add some padding */
            border: 1px solid #ddd; /* Add a grey border */
            margin-bottom: 12px; /* Add some space below the input */
        }

        #myTable {
            border-collapse: collapse; /* Collapse borders */
            width: 100%; /* Full-width */
            border: 1px solid #ddd; /* Add a grey border */
            font-size: 18px; /* Increase font-size */
        }

        #myTable th, #myTable td {
            text-align: left; /* Left-align text */
            padding: 12px; /* Add padding */
        }

        #myTable tr {
            /* Add a bottom border to all table rows */
            border-bottom: 1px solid #ddd;
        }

        #myTable tr.header, #myTable tr:hover {
            /* Add a grey background color to the table header and on hover */
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>
<div class="header">
    <a href="{{url('index')}}" class="logo">The Game Museum</a>
    <div class="header-right">
        <a href="{{url('index')}}">Home</a>
        <a href="{{url('console')}}">Consoles</a>
        <a href="{{url('games')}}">Games</a>
        <a href="{{url('handhelds')}}">Handheld</a>
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
@if(Auth::user()['role_id'] == 2)
    <form action="{{url('company/create')}}" method="GET">
        <input type="submit" value="create">
    </form>
@endif
<br>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Companies..">
<table id="myTable">
    <tr class="header">
        <th>Name</th>

    </tr>
    @foreach($companys as $company)
        <tr>
            <td>
                {{$company->name}}
            </td>

            @if(Auth::user()['role_id'] == 2)
                <td>
                    <form action="{{url('company/edit', $company ->id)}}" method="GET">
                        <input type="submit" value="edit">
                    </form>
                </td>
                <td>
                    <form action="{{url('/company/' . $company->id)}}" method="POST">
                        {{ csrf_field() }}
                        @method('DELETE')
                        <input type="submit" value="delete">
                    </form>
                </td>
            @endif

        </tr>
    @endforeach
</table>
<div class="footer">
    <a href="{{url('contact')}}">Contact</a>
</div>

<script language="javascript" type="text/javascript">
    <!--
    function EJEJC_lc(th) { return false; }
    // -->
</script>
<script type="text/javascript"
        src="https://www.e-junkie.com/ecom/box.js"></script>

<script>
    function myFunction() {
        // Declare variables
        var input, filter, table, tr, td, i;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");

        // Loop through all table rows, and hide those who don't match the search query
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
                if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>
</body>
</html>