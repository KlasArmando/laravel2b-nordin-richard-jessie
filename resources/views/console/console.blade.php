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
    </style>
</head>
<body>
<form action="{{url('console/create')}}" method="GET">
    <input type="submit" value="create">
</form>
<table>
    <tr>
        <th>console</th>
        <th>release date</th>
        <th>company</th>
        <th>price</th>
    </tr>
    @foreach($results as $result)
        <tr>
            <td>
                {{$result->naam}}
            </td>
            <td>
                {{$result->releasedate}}
            </td>
            <td>
                {{$result->company}}
            </td>
            <td>
                € {{$result->price}}
            </td>
            <td>
                <form action="{{url('console/edit', $result->id)}}" method="GET">
                    <input type="submit" value="edit">
                </form>
            </td>
            <td>
                <form action="{{url('/console/' . $result->id)}}" method="POST">
                    {{ csrf_field() }}
                    @method('DELETE')
                    <input type="submit" value="delete">
                </form>
            </td>
        </tr>
    @endforeach
</table>
</body>
</html>