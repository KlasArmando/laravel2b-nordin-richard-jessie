<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <!--<link rel="stylesheet" href="css/materialize.css">-->
    <!--<script src="js/materialize.js"></script>-->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="style.css" type="text/css">
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>-->
</head>
<body>
<a class='dropdown-trigger btn' href='#' data-target='dropdown1'>Drop Me!</a>

<!-- Dropdown Structure -->
<ul id='dropdown1' class='dropdown-content'>
    <li><a href="#">one</a></li>
    <li><a href="#">two</a></li>
    <li class="divider" tabindex="-1"></li>
    <li><a href="#">three</a></li>
    <li><a href="#">four</a></li>
    <li><a href="#">five</a></li>
</ul>
<script>

    $(".dropdown-trigger").click(function () {
        $(".dropdown-content").slideToggle();
    });

</script>
</body>
</html>