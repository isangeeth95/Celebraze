<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width initial-scale=1">
    <link rel="stylesheet" type="text/css" href="contact.css">
    <title>Contact</title>
</head>
<body>

<?php include 'header.php'; ?>

<div class="container">

    <div class="contactPage-box">
        <div class="left">
            <div class="contactDetails-box">
                <h1>Address</h1>
                <p>St Michaels Rd, Colombo</p>

                <h1>Lets talk</h1>
                <p>+94 77 123 4567</p>

                <h1>General support</h1>
                <p>celebrazeJG_03@gmail.com</p>
            </div>
        </div>

        <div class="right">
            <div class="table-box">
            <table>
                <tr>
                    <td><h1>Tell us your name</h1></td>
                </tr>
                <tr>
                    <td colspan="2"><input class="inputWidth" type="text" name="fname" id="fname" placeholder="First name">
                    <input class="inputWidth" type="text" name="lname" id="lname" placeholder="Last name"></td>
                </tr>

                <tr>
                    <td><h1>Enter your email</h1></td>
                </tr>
                <tr>
                    <td><input class="inputWidth" type="text" name="email" id="email" placeholder="celebrazeJG_03@gmail.com"></td>
                </tr>

                <tr>
                    <td><h1>Enter your phone number</h1></td>
                </tr>
                <tr>
                    <td><input class="inputWidth" type="text" name="tno" id="tno" placeholder="Eg. +94 77 123 4567"></td>
                </tr>

                <tr>
                    <td><h1>Message</h1></td>
                </tr>
                <tr>
                    <td><textarea style="font-size: 25px" name="message" id="message" placeholder="Message" rows="6" cols="28"></textarea></td>
                </tr>
            </table>
            </div>
        </div>
    </div>



    <div class="bottom"></div>
</div>

<?php include "footer.php"; ?>

</body>
</html>