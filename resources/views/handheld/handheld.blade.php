<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1 align="center">HANDHELDS!</h1>



<div class="container">
    <div>
        <form action="books/create">
            <input value="Create" type="submit" class="btn btn-dark">
        </form>
    </div>



    <table class="table">
        <thead>
        <tr>
            <th class="label-primary">Id</th>
            <th class="label-primary">Name</th>
            <th class="label-primary">Developer</th>
            <th class="label-primary">Discription</th>
            <th class="label-primary">Price</th>
            <th class="label-primary">Edit</th>
            <th class="label-primary">Delete</th>

        </tr>
        </thead>
        <tbody>

        @foreach($handhelds as $handheld)
            <tr>
                <th>
                    {{$handheld->id}}
                </th>
                <th>
                    {{$handheld->name}}
                </th>
                <th>
                    {{$handheld->developer}}
                </th>
                <th>
                    {{$handheld->discription}}
                </th>
                <th>
                    {{$handheld->price}}
                </th>
                <th>
                    <form action="{{ url('handhelds/'. $handheld->id .'/edit')}}">

                        <input value="Edit" type="submit" class="btn btn-dark">
                    </form>


                </th>
                <th>
                    <form action="{{ route('handhelds.delete', $handheld->id)}}" METHOD="post">
                        @method('DELETE')
                        <input value="Delete" type="submit" class="btn btn-dark">
                        @csrf
                    </form>
                </th>

            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>