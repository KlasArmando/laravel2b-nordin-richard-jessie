<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table class="table">
    <thead>
    <tr>
        <th class="label-primary">Id</th>
        <th class="label-primary">Titel</th>
        <th class="label-primary">Author</th>
        <th class="label-primary">Edit</th>
        <th class="label-primary">Delete</th>

    </tr>
    </thead>
    <tbody>

    @foreach($items as $item)
        <tr>
            <th>
                {{$item->id}}
            </th>
            <th>
                {{$item->title}}
            </th>
            <th>
                {{$item->author}}
            </th>
            <th>
                <form action="{{ route('books.edit', $item->id)}}">

                    <input value="Edit" type="submit" class="btn btn-dark">
                </form>


            </th>
            <th>
                <form action="{{url('books.delete' . $boek->id)}}">
                    <input value="Delete" type="submit" class="btn btn-dark">
                </form>
            </th>

        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>