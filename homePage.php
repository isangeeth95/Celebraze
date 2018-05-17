<?php
require "dbconnect.php";

session_start();


?>

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
        <li><a href="register.php">Become seller</a></li>
        <li><a href="login.php">Sign in</a></li>
        <li id="join"><a href="register.php">Join</a></li>


    </ul>

    <ul>
        <?php
        if(isset($_SESSION['user_email'])){
            echo "You are logged as ".$_SESSION['user_email'];
        }
        ?>
    </ul>



</div>
<div class="nav">
    <div class="transparent">
        <div class="color">
            <div class="text">

                <p>Welcome to Celebraze !</p>

                We are here to celebrate your Birth Day with you.
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
            <td><a href="Service.php"/>Services</td>
            <td><a href="Shop.php"/>Shop</td>
            <td><a href="aboutUs.php"/>About Us</td>
            <td><a href="gallery.php"/>Gallery</td>
            <td><a href="contact.php"/>Contact Us</td>
        </tr>
    </table>
</div>

<script>
    window.onscroll=function () {navBarScrolled()};
</script>


<div class="container">

    <div class="search-box">
        <form id="searchForm" method="post" action="searchResults.php">
            <input style="width:400px; font-size: 20px; float: right;" type="text" name="search" maxlength="100" placeholder="Enter the key word"/>
            <input style="font-size: 20px; float: right;" type="submit" name="Submit" value="Search">
        </form>
    </div>

    <hr style="margin-top: 100px">
    <h1 style="margin: -50px 0px 0px 600px" class="packagesHeader">Packages</h1>

    <div class="packages-left">

        <a href="Package.php">
        <div class="packages-boxleft">
            <img src="homeImages/custom.jpg"/>
            <h2>Description</h2><p>Do you want to organize your birthday party in a 5 star HOTEL ?
                Do you have around 100 guests in your invitation list ? Wanna use the swimming pool ?
                Enjoy your day !</p>

            <h3>Cinnamon Lakeside Colombo</h3>
            <h3>Rs. 400,000/=</h3>

        </div>
        </a>

        <a href="Package.php">
        <div class="packages-boxleft">

            <img src="homeImages/gold.jpg"/>
            <h2>Description</h2><p>Do you want to organize your birthday party in a 3 star HOTEL ?
                Do you have around 100 guests in your invitation list ? Wanna use the swimming pool ?
                Enjoy your day !</p>

            <h3>Grand Oriental Hotel Colombo</h3>
            <h3>Rs. 200,000/=</h3>

        </div>
        </a>

        <a href="Package.php">
        <div class="packages-boxleft">

            <img src="homeImages/bronze.jpg"/>
            <h2>Description</h2><p>Do you want to organize your birthday party in a best HOTEL in Colombo ?
                Do you have around 50 guests in your invitation list ?
                Enjoy your day !</p>

            <h3>Juliana Hotel Colombo</h3>
            <h3>Rs. 50,000/=</h3>

        </div>
        </a>

    </div>


    <div class="packages-right">

        <a href="Package.php">
        <div class="packages-boxright">

            <img src="homeImages/platinum.jpg"/>
            <h2>Description</h2><p>Do you want to organize your birthday party in a 4 star HOTEL ?
                Do you have around 100 guests in your invitation list ? Wanna use the swimming pool ?
                Enjoy your day !</p>

            <h3>Ramada Colombo</h3>
            <h3>Rs. 300,000/=</h3>

        </div>
        </a>

        <a href="Package.php">
        <div class="packages-boxright">

            <img src="homeImages/silver.jpg"/>
            <h2>Description</h2><p>Do you want to organize your birthday party in a 2 star HOTEL ?
                Do you have around 70 guests in your invitation list ? Wanna use the swimming pool ?
                Enjoy your day !</p>

            <h3>Highbury Colombo</h3>
            <h3>Rs. 100,000/=</h3>

        </div>
        </a>

    </div>
    <hr>


    <div class="video-box">

        <video controls>
            <source src="homeImages/Frozen%20Party%20Decorations.mp4" type="video/mp4">
        </video>

    </div>
    <hr>


    <div class="quote-box">
        <blockquote>
            <p id="quote">There are two great days in a person's life-the day we
                are born and the day we discover why</p>
            <hr style="margin-top: 0px">
            <h2>William Barclay</h2>
            <p>Scottish author, radio and television presenter, Church of Scotland
                minister and Professor of Divinity and Biblical Criticism at the University
                of Glasgow.</p>
        </blockquote>
    </div>
    <hr>


    <div class="imagesForHome">

        <img src="homeImages/ImagesForHome/1.jpg">
        <img src="homeImages/ImagesForHome/2.jpg">
        <img src="homeImages/ImagesForHome/3.jpg">
        <img src="homeImages/ImagesForHome/4.jpg">
        
    </div>



    <div class=bottom></div>

</div>


<?php include 'footer.php'; ?>

</body>
</html>