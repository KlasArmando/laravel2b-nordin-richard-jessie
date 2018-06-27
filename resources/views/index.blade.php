@extends('layouts.master')
@section('content')
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
    <th>
        name
    </th>
    <th>
        release date
    </th>
    <th>
        company
    </th>
    <th>
        price
    </th>
    <th>
        add to chart
    </th>
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
                {{\App\Company::where('id', $games->name_id)->first()->name}}
            </td>
            <td>
                $ {{$games->price}}
            </td>
            <td>
                <!-- ADD TO CART button code. -->
                <form action="https://www.e-junkie.com/ecom/fgb.php?c=cart&cl=1&ejc=2" target="ej_ejc" method="POST">

                    <!-- paypal email(remove if not using PayPal) -->
                    <input type="hidden" name="business" value="your_paypal_email"/>

                    <!-- site url -->
                    <input type="hidden" name="site_url" value="http://yoursite.com"/>

                    <!-- contact email (where we can notify of the updates) -->
                    <input type="hidden" name="contact_email" value="your@email.address"/>

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
                {{\App\Company::where('id', $consoles->name_id)->first()->name}}
            </td>
            <td>
                $ {{$consoles->price}}
            </td>
            <td>
                <!-- ADD TO CART button code. -->
                <form action="https://www.e-junkie.com/ecom/fgb.php?c=cart&cl=1&ejc=2" target="ej_ejc" method="POST">

                    <!-- paypal email(remove if not using PayPal) -->
                    <input type="hidden" name="business" value="your_paypal_email"/>

                    <!-- site url -->
                    <input type="hidden" name="site_url" value="http://yoursite.com"/>

                    <!-- contact email (where we can notify of the updates) -->
                    <input type="hidden" name="contact_email" value="your@email.address"/>

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
    @foreach($handhelds as $handheld)
        <tr>
            <td>
                {{$handheld->name}}
            </td>
            <td>
                {{$handheld->releasedate}}
            </td>
            <td>
                {{\App\Company::where('id', $handheld->name_id)->first()->name}}
            </td>
            <td>
                $ {{$handheld->price}}
            </td>
            <td>
                <!-- ADD TO CART button code. -->
                <form action="https://www.e-junkie.com/ecom/fgb.php?c=cart&cl=1&ejc=2" target="ej_ejc" method="POST">

                    <!-- paypal email(remove if not using PayPal) -->
                    <input type="hidden" name="business" value="your_paypal_email"/>

                    <!-- site url -->
                    <input type="hidden" name="site_url" value="http://yoursite.com"/>

                    <!-- contact email (where we can notify of the updates) -->
                    <input type="hidden" name="contact_email" value="your@email.address"/>

                    <!-- item name -->
                    <input type="hidden" name="item_name" value="{{$handheld->naam}}"/>

                    <!-- item number (should be different for each product)-->
                    <input type="hidden" name="item_number" value="{{$handheld->id}}"/>

                    <!-- item price -->
                    <input type="hidden" name="amount" value="{{$handheld->price}}"/>

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
@endsection
