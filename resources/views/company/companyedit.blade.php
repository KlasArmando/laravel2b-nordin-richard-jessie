<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>

        $( function() {
            $( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' }).val();
        } );
    </script>
</head>
<body>
<div class="container">
    <form method="POST" action="{{url('company/update/' . $company->id)}}">


        <div class="form-group">
            <label for="title">Name:</label>
            <input type="text" name="naam" value="{{$company->naam}}" required>*required<br>
        </div>

        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
        <input type="submit" name="edit" value="edit">

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