<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width initial-scale=1">
    <link rel="stylesheet" type="text/css" href="register.css">
    <title>Register</title>
</head>
<body>

<?php include 'header.php'; ?>

<div class="container">



    <h1 class="formHeading">sign up for free</h1>
    <div class="form">
        <form action="register.php" method="post" class="formTable">
            <table>
                <tr>
                    <td><input type="text" placeholder="Enter First Name" name="fName" ></td>
                </tr>
                <tr>
                    <td><input type="text" placeholder="Enter Last Name" name="lName" ></td>
                </tr>
                <tr>
                    <td><input type="email" placeholder="Enter Email Address" name="email" ></td>
                </tr>
                <tr>
                    <td><input type="password" placeholder="Enter a Password" name="password" ></td>
                </tr>
                <tr>
                    <td><input type="password" placeholder="Confirm the Password" name="confirmPassword" ></td>
                </tr>
            </table>
            <input type="submit" value="get started" name="submitButton" id="sButton">
        </form>
    </div>














    <div class="bottom">

    </div>
</div>

<?php include 'footer.php'; ?>

</body>
</html>