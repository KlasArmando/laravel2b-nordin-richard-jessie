@extends('layouts.master')
@section('content')
<br>
@if(Auth::user()['role_id'] == 2)
    <form action="{{url('handhelds/create')}}" method="GET">
        <input type="submit" value="create">
    </form>
@endif
<br>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Handhelds..">
<table id="myTable">
    <tr class="header">
        <th>Handheld</th>
        <th>release date</th>
        <th>company</th>
        <th>price</th>
    </tr>
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
            @if(Auth::user()['role_id'] == 2)
                <td>
                    <form action="{{url('handhelds/edit', $handheld->id)}}" method="GET">
                        <input type="submit" value="edit">
                    </form>
                </td>
                <td>
                    <form action="{{url('/handhelds/' . $handheld->id)}}" method="POST">
                        {{ csrf_field() }}
                        @method('DELETE')
                        <input type="submit" value="delete">
                    </form>
                </td>
            @endif
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
@endsection