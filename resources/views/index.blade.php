<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/scss" href="/public/css/test.scss">
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
        * {box-sizing: border-box}
        body {font-family: Verdana, sans-serif; margin:0}
        .mySlides {display: none}
        img {vertical-align: middle;}
        /* Slideshow container */
        .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
        }
        /* Next & previous buttons */
        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -22px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
        }
        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }
        /* On hover, add a black background color with a little bit see-through */
        .prev:hover, .next:hover {
            background-color: rgba(0,0,0,0.8);
        }
        /* Caption text */
        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }
        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }
        /* The dots/bullets/indicators */
        .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }
        .active, .dot:hover {
            background-color: #717171;
        }
        /* Fading animation */
        .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s;
            animation-name: fade;
            animation-duration: 1.5s;
        }
        @-webkit-keyframes fade {
            from {opacity: .4}
            to {opacity: 1}
        }
        @keyframes fade {
            from {opacity: .4}
            to {opacity: 1}
        }
        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
            .prev, .next,.text {font-size: 11px}
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
        <a class="active" href="#">Home</a>
        <a href="{{url('console')}}">Consoles</a>
        <a href="{{url('games')}}">Games</a>
        <a href="{{url('handhelds')}}">Handheld</a>
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

<div class="slideshow-container">

    <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="{{asset('image/the-legend-of-zelda-breath-of-the-wild-review-onvergetelijk-106829.jpg')}}" style="width:100%">
    </div>

    <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src="{{asset('image/god-of-war-review-vers-bloed-voor-kratos-129565-1.jpg')}}" style="width:100%">
    </div>

    <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img src="{{asset('image/index.jpg')}}" style="width:100%">
    </div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
</div>

<div style="text-align: center">
    <h2>Popular items</h2>
</div>

<table id="myTable">
<tr class="header">
</tr>
@foreach($game as $games)
<tr>
<td>
{{$games->naam}}
</td>
<td>
{{$games->releasedate}}
</td>
<td>
{{$games->company}}
</td>
<td>
$ {{$games->price}}
</td>
<td>
<!-- ADD TO CART button code. -->
<form action="https://www.e-junkie.com/ecom/fgb.php?c=cart&cl=1&ejc=2" target="ej_ejc" method="POST">

<!-- paypal email(remove if not using PayPal) -->
<input type="hidden" name="business" value="nordin-van-der-leije@live.nl"/>

<!-- site url -->
<input type="hidden" name="site_url" value="http://localhost/TheGameMuseum/public/games"/>

<!-- contact email (where we can notify of the updates) -->
<input type="hidden" name="contact_email" value="nordin-van-der-leije@live.nl"/>

<!-- item name -->
<input type="hidden" name="item_name" value="{{$games->naam}}"/>

<!-- item number (should be different for each product)-->
<input type="hidden" name="item_number" value="{{$games->id}}"/>

<!-- item price -->
<input type="hidden" name="amount" value="{{$games->price}}"/>

<!-- initial quantity -->
<input type="hidden" name="quantity" value="1"/>

<!-- shipping cost -->
<input type="hidden" name="shipping" value="1">

<!-- shipping cost of each additional unit -->
<input type="hidden" name="shipping2" value="0.5">

<!--handling cost -->
<input type="hidden" name="handling" value="0.5">

<!-- tax (flat amount, NOT percentage)-->
<input type="hidden" name="tax" value="0.50"/>

<!-- following options are applicable to whole cart-->

<!-- you thank you page -->
<input type="hidden" name="return_url" value="http://www.e-junkie.com/"/>

<!-- any custom info you want to pass for the whole order -->
<input type="hidden" name="custom" value="anything"/>

<!-- currency (For PayPal: any currency that PayPal supports -->
<input type="hidden" name="currency_code" value="USD"/>

<input type="image" src="https://www.e-junkie.com/ej/ej_add_to_cart.gif" border="0" onClick="javascript:return EJEJC_lc(this.parentNode);">
</form>
</td>
</tr>
@endforeach
    @foreach($console as $consoles)
        <tr>
            <td>
                {{$consoles->naam}}
            </td>
            <td>
                {{$consoles->releasedate}}
            </td>
            <td>
                {{$consoles->company}}
            </td>
            <td>
                $ {{$consoles->price}}
            </td>
            <td>
                <!-- ADD TO CART button code. -->
                <form action="https://www.e-junkie.com/ecom/fgb.php?c=cart&cl=1&ejc=2" target="ej_ejc" method="POST">

                    <!-- paypal email(remove if not using PayPal) -->
                    <input type="hidden" name="business" value="nordin-van-der-leije@live.nl"/>

                    <!-- site url -->
                    <input type="hidden" name="site_url" value="http://localhost/TheGameMuseum/public/games"/>

                    <!-- contact email (where we can notify of the updates) -->
                    <input type="hidden" name="contact_email" value="nordin-van-der-leije@live.nl"/>

                    <!-- item name -->
                    <input type="hidden" name="item_name" value="{{$consoles->naam}}"/>

                    <!-- item number (should be different for each product)-->
                    <input type="hidden" name="item_number" value="{{$consoles->id}}"/>

                    <!-- item price -->
                    <input type="hidden" name="amount" value="{{$consoles->price}}"/>

                    <!-- initial quantity -->
                    <input type="hidden" name="quantity" value="1"/>

                    <!-- shipping cost -->
                    <input type="hidden" name="shipping" value="1">

                    <!-- shipping cost of each additional unit -->
                    <input type="hidden" name="shipping2" value="0.5">

                    <!--handling cost -->
                    <input type="hidden" name="handling" value="0.5">

                    <!-- tax (flat amount, NOT percentage)-->
                    <input type="hidden" name="tax" value="0.50"/>

                    <!-- following options are applicable to whole cart-->

                    <!-- you thank you page -->
                    <input type="hidden" name="return_url" value="http://www.e-junkie.com/"/>

                    <!-- any custom info you want to pass for the whole order -->
                    <input type="hidden" name="custom" value="anything"/>

                    <!-- currency (For PayPal: any currency that PayPal supports -->
                    <input type="hidden" name="currency_code" value="USD"/>

                    <input type="image" src="https://www.e-junkie.com/ej/ej_add_to_cart.gif" border="0" onClick="javascript:return EJEJC_lc(this.parentNode);">
                </form>
            </td>
        </tr>
    @endforeach
</table>
<br>
<br>

<div class="footer">
    <a href="{{url('contact')}}">Contact</a>
</div>

<script>
    var myIndex = 0;
    carousel();
    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}
        x[myIndex-1].style.display = "block";
        setTimeout(carousel, 2000); // Change image every 2 seconds
    }
</script>
</body>
</html>
