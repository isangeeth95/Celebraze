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

            <form id="cardDetailsForm" method="post" action="<?php echo $_SERVER["PHP_SELF"]?>" onsubmit="validateDetails()">

                <table>

                    <tr>
                        <td>Address 1</td>
                        <td><input id="inputWidth" type="text" name="address1" value=""/>
                            <span style="color: red;">*</span>

                    </tr>

                    <tr>
                        <td>Address 2</td>
                        <td><input id="inputWidth" type="text" name="address 2"  value=""/></td>

                    </tr>

                    <tr>
                        <td>Postcode</td>
                        <td><input id="inputWidth" type="text" name="postcode" value=""/>
                            <span style="color: red;">*</span></td>
                    </tr>

                    <tr>
                        <td>Country</td>
                        <td><input id="inputWidth" type="text" name="country" value="Sri Lanka"/>

                    </tr>

                    <tr>
                        <td>Phone</td>
                        <td><input id="inputWidth" type="text" name="pNo" placeholder="077 524 0944"/>
                            <span style="color: red;">*</span></td>

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