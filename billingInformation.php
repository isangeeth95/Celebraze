<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width initial-scale=1">
    <link rel="stylesheet" type="text/css" href="billingInformation.css">
    <script src="cardValidation.js" type="text/javascript"></script>
    <title>Billing Information</title>
</head>
<body>

<?php include 'header.php'; ?>

<div class="container">

    <div class="information-box">

        <h1 style="margin-left: 20px">Billing Information</h1>

        <div class="billingDetails-box">

            <?php

            $address1Err=$postcodeErr=$pNoErr="";
            $address1=$address2=$postcode=$pNo="";

            if ($_SERVER["REQUEST_METHOD"]=="POST")
            {

                //empty field error
                if (empty($_POST["address1"]))
                {
                    $address1Err="Required Address 1";
                }

                else
                {
                    $address1=testInput($_POST["address1"]);
                }


                if(empty($_POST["address2"]))
                {
                    $address2="";
                }

                else
                {
                    $address2=testInput($_POST["address2"]);
                }


                if (empty($_POST["postcode"]))
                {
                    $postcodeErr="Required Postcode";
                }

                else
                {
                    $postcode=testInput($_POST["postcode"]);
                }

                if (empty($_POST["pNo"]))
                {
                    $pNoErr="Required Telephone number";
                }

                else
                {
                    $pNo=testInput($_POST["pNo"]);
                }


            }

            function testInput($data)
            {
                $data=trim($data);//strip white spaces in the beginning and end of the string
                $data=stripslashes($data);//unquotes a quoted string
                $data=htmlspecialchars($data);//convert special characters into html entities

                return $data;
            }

            ?>


            <form id="billingInformationForm" method="post" action="<?php echo $_SERVER["PHP_SELF"]?>" onsubmit="return validateBillingInformation()">

                <table>

                    <tr>
                        <td>Address 1</td>
                        <td><input id="inputWidth" type="text" name="address1" value="<?php echo $address1 ?>"/>
                            <span style="color: red; font-size: 20px;">*<?php echo $address1Err?></span>

                    </tr>

                    <tr>
                        <td>Address 2</td>
                        <td><input id="inputWidth" type="text" name="address 2"  value="<?php echo $address2?>"/></td>

                    </tr>

                    <tr>
                        <td>Postcode</td>
                        <td><input id="inputWidth" type="text" name="postcode" value="<?php echo $postcode?>"/>
                            <span style="color: red; font-size: 20px;">*<?php echo $postcodeErr?></span></td>
                    </tr>

                    <tr>
                        <td>Country</td>
                        <td><input id="inputWidth" type="text" name="country" value="Sri Lanka"/>

                    </tr>

                    <tr>
                        <td>Phone</td>
                        <td><input id="inputWidth" type="text" name="pNo" placeholder="077 524 0944" value="<?php echo $pNo?>"/>
                            <span style="color: red; font-size: 20px;">*<?php echo $pNoErr?></span></td>

                    </tr>

                    <tr>
                        <td></td>
                        <td><input style="width: 200px; float: right;" id="inputWidth" type="submit" name="submit" value="Submit" /></td>
                    </tr>

                </table>

            </form>

        </div>

    </div>


    <div class="bottom"></div>

</div>

<?php include 'footer.php'; ?>

</body>
</html>