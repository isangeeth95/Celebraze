<?php
require "dbconnect.php";

session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width initial-scale=1">
    <link rel="stylesheet" type="text/css" href="header.css">
    <title>header style</title>
</head>
<body style="background-color: whitesmoke">

<div class="headerBar">
    <header><img src="homeImages/LOGO.jpg"></header>

    <ul>
        <?php
        if(isset($_SESSION['user_email'])){
            echo"You are login as ".$_SESSION['user_email'];
        }
        ?>
        <li><a href="register.php">Become seller</a></li>
        <li><a href="login.php">Sign in</a></li>
        <li id="join"><a href="register.php">Join</a></li>
    </ul>
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

</body>
</html>