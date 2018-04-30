<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width initial-scale=1">
    <link rel="stylesheet" type="text/css" href="HomePage.css">
    <script src="javascript.js" type="text/javascript"></script>
    <title>Home</title>
</head>
<body style="background-color: whitesmoke">

<div class="headerBar">
    <header><img src="homeImages/LOGO.jpg"></header>

    <ul>
        <li><a href="#">Become seller</a></li>
        <li><a href="#">Sign in</a></li>
        <li id="join"><a href="#">Join</a></li>
    </ul>
</div>
<div class="nav">
    <div class="transparent">
        <div class="color">
            <div class="text">

                <p>Welcome to Celebraze !</p>

                We are here to celebrate with you.
                Do you want to celebrate it in a grand way?
                Try Us now!
            </div>
        </div>
    </div>

    <div class="homeImg">
        <img class="slideShow" src="homeImages/home1.jpg"/>
        <img class="slideShow" src="homeImages/home2.jpg"/>
        <img class="slideShow" src="homeImages/home15.jpg"/>
        <img class="slideShow" src="homeImages/home4.jpg"/>
        <img class="slideShow" src="homeImages/home5.jpg"/>
        <img class="slideShow" src="homeImages/home6.jpg"/>
        <img class="slideShow" src="homeImages/home7.jpg"/>
        <img class="slideShow" src="homeImages/home8.jpg"/>
        <img class="slideShow" src="homeImages/home12.jpg"/>
        <img class="slideShow" src="homeImages/home13.jpg"/>
        <img class="slideShow" src="homeImages/home14.jpg"/>

    </div>

    <script>
        var myIndex=0;
        mySlide();
    </script>
</div>

<div id="nav1">
    <table>
        <tr>
            <td><a href="homePage.php"/>Home</td>
            <td><a href="#"/>Services</td>
            <td><a href="aboutUs.php"/>About Us</td>
            <td><a href="#"/>Gallery</td>
            <td><a href="contact.php"/>Contact</td>
        </tr>
    </table>
</div>

<script>
    window.onscroll=function () {navBarScrolled()};
</script>


<div class="container">
    <!--
        <h1>PACKAGES</h1>

        <div class="packagesBlock">


            <div id="packagesBase1">
                <img src="homeImages/custom.jpg"/>
                <p>Do you want to see it in reality?
                    This would be the great choice you can made to Surprise Your loved one</p>
            </div>

            <div id="packagesBase2">
                <img src="homeImages/platinum.jpg"/>
                <p>Do you want to see it in reality?
                    This would be the great choice you can made to Surprise Your loved one</p>
            </div>

            <div id="packagesBase3">
                <img src="homeImages/gold.jpg"/>
                <p>Do you want to see it in reality?
                    This would be the great choice you can made to Surprise Your loved one</p>
            </div>

            <div id="packagesBase4">
                <img src="homeImages/silver.jpg"/>
                <p>Do you want to see it in reality?
                    This would be the great choice you can made to Surprise Your loved one</p>
            </div>

            <div id="packagesBase5">
                <img src="homeImages/bronze.jpg"/>
                <p>Do you want to see it in reality?
                    This would be the great choice you can made to Surprise Your loved one</p>
            </div>
        </div>
    -->

    <div class="packages-boxleft">

    </div>

    <div class="packages-boxright" id="packages-align">

    </div>

    <div class="packages-boxleft">

    </div>

    <div class="packages-boxright">

    </div>

    <div class="packages-boxleft">

    </div>

    <div class="packages-boxright">

    </div>



    <div class="quote-box">
        <blockquote>
            <p id="quote">There are two great days in a person's life-the day we are born and the day we discover why</p>
            <hr>
            <h2>William Barclay</h2>
            <p>Scottish author, radio and television presenter, Church of Scotland minister and Professor of Divinity and Biblical Criticism at the University of Glasgow.</p>
        </blockquote>
    </div>




    <div class=bottom>

    </div>

</div>


<?php include 'footer.php'; ?>

</body>
</html>