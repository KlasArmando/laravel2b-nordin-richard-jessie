<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-red.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif;}
    .w3-sidebar {
        z-index: 3;
        width: 250px;
        top: 43px;
        bottom: 0;
        height: inherit;
    }
    .mySlides {display:none;}
</style>
<body>

<div class="w3-top">
    <div class="w3-bar w3-theme w3-top w3-left-align w3-large">
        <a class="w3-bar-item w3-button w3-right w3-hide-large w3-hover-white w3-large w3-theme-l1" href="javascript:void(0)" onclick="w3_open()"><i class="fa fa-bars"></i></a>
        <a href="#" class="w3-bar-item w3-button w3-theme-l1">Logo</a>
        <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Games</a>
        <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Console</a>
        <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Handheld</a>
        <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Login</a>
    </div>
</div>
<br>
<br>

<div class="w3-content w3-section" style="max-width:500px">
    <img class="mySlides" src="{{asset('image/the-legend-of-zelda-breath-of-the-wild-review-onvergetelijk-106829.jpg')}}" style="width:100%">
    <img class="mySlides" src="{{asset('image/god-of-war-review-vers-bloed-voor-kratos-129565-1.jpg')}}" style="width: 100%">
    <img class="mySlides" src="{{asset('image/H2x1_NSwitch_SuperMarioOdyssey_image1600w.jpg')}}" style="width:100%">
</div>

<div class="w3-panel w3-red">
    <p>Popular items.</p>
</div>

<a class="w3-button" href="#">
    <div class="w3-card-4" style="width:20%">
        <img src="{{asset('image/1473142.jpg')}}" >
        <div class="w3-container w3-center">
            <p>Nintendo switch</p>
        </div>
    </div>
</a>

<a class="w3-button" href="#">
    <div class="w3-card-4" style="width:20%">
        <img src="{{asset('image/8d19ec52dea34f25b1611db2f943ff0f_Medium.png')}}" >
        <div class="w3-container w3-center">
            <p>Far cry 5</p>
        </div>
    </div>
</a>

<a class="w3-button" href="#">
    <div class="w3-card-4" style="width:20%">
        <img src="{{asset('image/9200000059380926.jpg')}}" >
        <div class="w3-container w3-center">
            <p>God of war</p>
        </div>
    </div>
</a>

<a class="w3-button" href="#">
    <div class="w3-card-4" style="width:20%">
        <img src="{{asset('image/9200000088311623.jpg')}}" >
        <div class="w3-container w3-center">
            <p>donkey kong country tropical freeze</p>
        </div>
    </div>
</a>

<br>

<a class="w3-button" href="#">
    <div class="w3-card-4" style="width:20%">
        <img src="{{asset('image/ps4-pro-of-xbox-one-kopen-alle-voor-en-nadelen-op-een-rijtje-126389.jpg')}}" >
        <div class="w3-container w3-center">
            <p>ps4</p>
        </div>
    </div>
</a>

<a class="w3-button" href="#">
    <div class="w3-card-4" style="width:20%">
        <img src="{{asset('image/9200000073684225.jpg')}}" >
        <div class="w3-container w3-center">
            <p>mario kart 8 deluxe</p>
        </div>
    </div>
</a>

<a class="w3-button" href="#">
    <div class="w3-card-4" style="width:20%">
        <img src="{{asset('image/91cygXStWYL._SX342_.jpg')}}" >
        <div class="w3-container w3-center">
            <p>fifa 18</p>
        </div>
    </div>
</a>

<a class="w3-button" href="#">
    <div class="w3-card-4" style="width:20%">
        <img src="{{asset('image/variety-box.png')}}" >
        <div class="w3-container w3-center">
            <p>nintendo labo</p>
        </div>
    </div>
</a>

<footer id="myFooter">
    <div class="w3-container w3-theme-l2 w3-padding-32">
        <a class="w3-button" href="#">Contact</a>
        <a class="w3-button" href="#">Help</a>
    </div>

    <div class="w3-container w3-theme-l1">
        <p>Made by Nordin, Richard and jessie </p>
    </div>
</footer>

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

<script>
    // Get the Sidebar
    var mySidebar = document.getElementById("mySidebar");

    // Get the DIV with overlay effect
    var overlayBg = document.getElementById("myOverlay");

    // Toggle between showing and hiding the sidebar, and add overlay effect
    function w3_open() {
        if (mySidebar.style.display === 'block') {
            mySidebar.style.display = 'none';
            overlayBg.style.display = "none";
        } else {
            mySidebar.style.display = 'block';
            overlayBg.style.display = "block";
        }
    }

    // Close the sidebar with the close button
    function w3_close() {
        mySidebar.style.display = "none";
        overlayBg.style.display = "none";
    }
</script>

</body>
</html>