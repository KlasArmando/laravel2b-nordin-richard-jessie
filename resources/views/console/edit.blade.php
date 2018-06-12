<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"> update data</div>

                <form method="POST" action="{{url('console/update/' . $consoles->id)}}">
                    naam: <br>
                    <input type="text" name="naam" value="{{$consoles->naam}}" required>*required<br>
                    releasedate: <br>
                    <input type="text" name="releasedate" id="datepicker" value="{{$consoles->releasedate}}" required>*required<br>
                    company: <br>
                    <input type="text" name="company" value="{{$consoles->company}}" required>*required<br>
                    price: <br>
                    <input type="number" name="price" min="0" value="{{$consoles->price}}" step=".01" required>*required<br>
                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                    <input type="submit" name="edit" value="edit">
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>