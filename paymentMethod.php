<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width initial-scale=1">
    <link rel="stylesheet" type="text/css" href="paymentMethod.css">
    <title>Payment Methods</title>
</head>
<body>

<?php include 'header.php'; ?>

<div class="container">

    <div class="topic">
        <div class="h1-box">
            <h1>PAYMENTS</h1>
        </div>
    </div>




    <form name="paymentMethod" method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">

    <div class="methods-box">

        <div class="paypal-box">
            <img src="homeImages/PayPalCard.png">
            <div class="radio-box">
                <input type="radio" name="payment" value="payPal"/>
            </div>
        </div>

        <div class="creditcard-box">
            <img src="homeImages/credit-cards.jpg">
            <div class="radio-box">
                <input type="radio" name="payment" value="creditCard"/>
            </div>
        </div>

        <div class="onlinebanking-box">
            <img src="homeImages/bankOnline.png">
            <div class="radio-box">
                <input type="radio" name="payment" value="onlineBanking"/>
            </div>
        </div>

        <?php
        if ($_SERVER["REQUEST_METHOD"]=="POST") {

            if (!empty($_POST['payment'])) {

                if (($_POST['payment']) == "payPal" || ($_POST['payment']) == "creditCard") {
                    header("location:cardDetails.php");
                }

                else {
                    header("location:paymentDetails.php");
                }
            }

            else {
                $error = "Must select a Payment Method";
                echo "<h1 style='color: #cb2027'>* ".$error."</h1>";
            }
        }
        ?>

        <div class="submit-box">
            <input id="submit" type="submit" value="Pay"/>
        </div>

    </div>
        
    </form>



    <div class="bottom"></div>

</div>

<?php include 'footer.php'; ?>

</body>
</html>