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
            <td><a href="contact.php"/>Contact Us</td>
        </tr>
    </table>
</div>

<script>
    window.onscroll=function () {navBarScrolled()};
</script>


<div class="container">

    <hr style="margin-top: 100px; color: #cb2027; width: 90%">
    <h1 style="margin-left: 600px" class="packagesHeader">Packages</h1>

    <div class="packages-left">

        <a href="https://www.tripadvisor.com/Hotels-g293962-Colombo_Western_Province-Hotels.html">
        <div class="packages-boxleft">
            <img src="homeImages/custom.jpg"/>
            <h2>Description</h2><p>Do you want to organize your birthday party in a 5 star HOTEL ?
                Do you have around 100 guests in your invitation list ? Wanna use the swimming pool ?
                Enjoy your day !</p>

            <h3>Cinnamon Lakeside Colombo</h3>
            <h3>Rs. 400,000/=</h3>

        </div>
        </a>

        <a href="https://www.tripadvisor.com/Hotels-g293962-Colombo_Western_Province-Hotels.html">
        <div class="packages-boxleft">

            <img src="homeImages/gold.jpg"/>
            <h2>Description</h2><p>Do you want to organize your birthday party in a 3 star HOTEL ?
                Do you have around 100 guests in your invitation list ? Wanna use the swimming pool ?
                Enjoy your day !</p>

            <h3>Grand Oriental Hotel</h3>
            <h3>Rs. 200,000/=</h3>

        </div>
        </a>

        <a href="https://www.tripadvisor.com/Hotels-g293962-Colombo_Western_Province-Hotels.html">
        <div class="packages-boxleft">

            <img src="homeImages/bronze.jpg"/>
            <h2>Description</h2><p>Do you want to organize your birthday party in a best HOTEL in Colombo ?
                Do you have around 100 guests in your invitation list ?
                Enjoy your day !</p>

            <h3>Juliana Hotel</h3>
            <h3>Rs. 50,000/=</h3>

        </div>
        </a>

    </div>


    <div class="packages-right">

        <a href="https://www.tripadvisor.com/Hotels-g293962-Colombo_Western_Province-Hotels.html">
        <div class="packages-boxright">

            <img src="homeImages/platinum.jpg"/>
            <h2>Description</h2><p>Do you want to organize your birthday party in a 4 star HOTEL ?
                Do you have around 100 guests in your invitation list ? Wanna use the swimming pool ?
                Enjoy your day !</p>

            <h3>Ramada Colombo</h3>
            <h3>Rs. 300,000/=</h3>

        </div>
        </a>

        <a href="https://www.tripadvisor.com/Hotels-g293962-Colombo_Western_Province-Hotels.html">
        <div class="packages-boxright">

            <img src="homeImages/silver.jpg"/>
            <h2>Description</h2><p>Do you want to organize your birthday party in a 2 star HOTEL ?
                Do you have around 100 guests in your invitation list ? Wanna use the swimming pool ?
                Enjoy your day !</p>

            <h3>Highbury Colombo</h3>
            <h3>Rs. 100,000/=</h3>

        </div>
        </a>

    </div>
    <hr style="margin-top: -200px; color: #cb2027; clear: left; width: 90%">


    <div class="quote-box">
        <blockquote>
            <p id="quote">There are two great days in a person's life-the day we
                are born and the day we discover why</p>
            <hr>
            <h2>William Barclay</h2>
            <p>Scottish author, radio and television presenter, Church of Scotland
                minister and Professor of Divinity and Biblical Criticism at the University
                of Glasgow.</p>
        </blockquote>
    </div>




    <div class=bottom>

    </div>

</div>


<?php include 'footer.php'; ?>

</body>
</html>