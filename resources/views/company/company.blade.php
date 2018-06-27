@extends('layouts.master')
@section('content')
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
@endsection