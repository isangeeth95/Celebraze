<?php

$nameErr=$cNoErr=$monthErr=$yearErr=$cvcErr="";
$name=$cNo=$month=$year=$cvc="";

if ($_SERVER["REQUEST_METHOD"]=="POST")
{

    //empty field error
    if (empty($_POST["name"]))
    {
        $nameErr="Required Name";
    }

    else
    {
        $name=testInput($_POST["name"]);
    }

    if (empty($_POST["cNo"]))
    {
        $cNoErr="Required Card Number";
    }

    else
    {
        $cNo=testInput($_POST["cNo"]);
    }

    if (empty($_POST["month"]))
    {
        $monthErr="Required Month";
    }

    else
    {
        $month=testInput($_POST["month"]);
    }

    if (empty($_POST["year"]))
    {
        $yearErr="Required Year";
    }

    else
    {
        $year=testInput($_POST["year"]);
    }

    if (empty($_POST["cvc"]))
    {
        $cvcErr="Required Card Validation Code";
    }

    else
    {
        $cvc=testInput($_POST["cvc"]);
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width initial-scale=1">
    <link rel="stylesheet" type="text/css" href="cardDetails.css">
    <script src="cardValidation.js" type="text/javascript"></script>
    <title>Card Details</title>
</head>
<body>

<?php include 'header.php'; ?>

<div class="container">

    <div class="border-box">

        <h1 style="margin-left: 20px">Enter Card Details</h1>

        <div class="cardDetails-box">



            <form id="cardDetailsForm" method="post" action="<?php echo $_SERVER["PHP_SELF"];?>" onsubmit="return validateDetails()">


                <table>

                    <tr>
                        <td>Name on card</td>
                        <td><input id="inputWidth" type="text" name="name" placeholder="CUSTOMER NAME" value="<?php echo $name;?>"/>
                            <span style="color: #bb0000; font-size: 20px;">*<?php echo $nameErr;?></span></td>
                    </tr>

                    <tr>
                        <td>Card Number</td>
                        <td><input id="inputWidth" type="text" name="cNo" placeholder="1111 2222 3333 4444" maxlength="16" value="<?php echo $cNo;?>"/>
                            <span style="color: #bb0000; font-size: 20px;">*<?php echo $cNoErr;?></span></td>

                    </tr>

                    <tr>
                        <td>Expiration</td>
                        <td colspan="2">
                            <input id="expiration" type="text" name="month" placeholder="MM" maxlength="2" value="<?php echo $month;?>"/>
                            <span style="color: #bb0000; font-size: 20px;">*<?php echo $monthErr;?></span>
                            <input id="expiration" type="text" name="year" placeholder="YYYY" maxlength="4" value="<?php echo $year;?>"/>
                            <span style="color: #bb0000; font-size: 20px;">*<?php echo $yearErr;?></span></td>
                    </tr>

                    <tr>
                        <td>CVC</td>
                        <td><input style="width: 70px" id="inputWidth" type="text" name="cvc" placeholder="123" maxlength="3" value="<?php echo $cvc;?>"/>
                            <span style="color: #bb0000; font-size: 20px;">*<?php echo $cvcErr;?></span></td>
                    </tr>

                    <tr>
                        <td></td>
                        <td><input style="width: 200px; float: right;" id="inputWidth" type="submit" name="submit" value="NEXT" /></td>
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



<?php

$host="localhost";
$username="root";
$password="";
$dbname="mydb";

//create connection
$con=mysqli_connect($host,$username,$password,$dbname);

//Check connection
if($con)
{
    echo "Connected successfully";
}


$con->close();

?>