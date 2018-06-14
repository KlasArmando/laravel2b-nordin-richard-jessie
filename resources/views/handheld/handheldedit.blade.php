<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action={{url('handheld/' . $handhelds->id)}} method="post">
            {{method_field('PATCH')}}
            @csrf
            <div class="form-group">
                <label for="title">Name:</label>
                <input type="text" class="form-control" name="title" id="title">
            </div>
            <div class="form-group">
                <label for="author">Developer:</label>
                <input type="text" class="form-control" name="Developer" id="Developer">
            </div>
            <div class="form-group">
                <label for="author">Discription:</label>
                <input type="text" class="form-control" name="discription" id="discription">
            </div>
            <div class="form-group">
                <label for="author">Price:</label>
                <input type="text" class="form-control" name="price" id="price">
            </div>

            <button type="submit" class="btn btn-default">Submit</button>

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
</body>
</html>