<?php
//session_start();
//require_once "connection.php"

?>


<!doctype html>
<html>
<head>
    <title>Add_gift</title>
    <link rel="stylesheet" type="text/css" href="Add.css">
    <link rel="stylesheet" type="text/css" href="header.css">

</head>

<body>


<?php include 'header.php'; ?>

<div class="container">

    <div class="addItem2-box">

        <h1 style="margin-left: 20px">Add New Gift</h1>

        <div class="new_item-box">

            <form action="Add_Gift.php" method="post">

                <table>

                    <tr>
                        <td>Enter the Image:</td>
                        <td><input id="Image" type="file" name="Image" class="form-control"/>&nbsp;

                    </tr>

                    <tr>
                        <td>Product Name:</td>
                        <td><input id="P_name" type="text" name="ProductName"  class="form-control"/></td>

                    </tr>

                    <tr>
                        <td>Model number:</td>
                        <td><input id="G_id" type="text" name="GiftID" class="form-control"/>
                            <span style="color: red;">*</span></td>
                    </tr>

                    <tr>
                        <td>Price:</td>
                        <td><input id="G_price" type="text" name="GiftPrice" class="form-control"/>
                            <span style="color: red;">*</span>

                    </tr>

                    <tr>
                        <td>Available quantity:</td>
                        <td><input id="G_Qnt" type="number" min="0" name="GiftQuantity" class="form-control"/>
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



<?php

                $servername="localhost";
                $user="root";
                $password="";
                $database="Gifts";

                $connection=new mysqli($servername,$user,$password,$database);

                if($connection->connect_error){
                            echo"error";
                }
                else{
                            echo "Connected successfully";
                }

                if(isset($_POST['submit'])){

                $Image=$_POST['Image'];
                $ProductName=$_POST['ProductName'];
                $GiftID=$_POST['GiftID'];
                $GiftPrice=$_POST['GiftPrice'];
                $GiftQuantity=$_POST['GiftQuantity'];


                $sql="INSERT INTO Gifts(Image,Product_Name,Gift_ID,Gift_price,Gift_Quantity)  VALUES('$Image','$ProductName','$GiftID','$GiftPrice','$GiftQuantity')";

                    if ($connection -> query($sql) == TRUE){
                        echo "records saved";
                    }
                    else{
                        echo "error".$sql."<br/>".$connection-> error;
                    }
                }

?>


