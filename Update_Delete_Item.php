<?php
//session_start();
//require_once "connection.php"

?>

<!DOCTYPE html>
<html>
<head>
    <title>Update_Item</title>
    <link rel="stylesheet" type="text/css" href="Add.css">
    <link rel="stylesheet" type="text/css" href="header.css">

</head>

<body>


<?php include 'header.php'; ?>

<div class="container">

    <div class="addItem1-box">

        <h1 style="margin-left: 20px">Update Item</h1>

        <div class="new_item-box">

            <form action="Add%20_Item.php" method="post">

                <table>

                    <tr>
                        <td>Enter the Category:</td>
                        <td><select id="Item_C" name="itemC">
                                <option value="B_Day Hat">B_Day Hat</option>
                                <option value="B_Day Candle">B_Day Candle</option>
                                <option value="B_Day Card">B_Day Card</option>
                                <option value="B_Day Invitation">B_Day Invitation</option>
                                <option value="B_Day Cupcake Papers">B_Day Cupcake Papers</option>
                                <option value="B_Day Balloon">B_Day Balloon</option>

                            </select></td>

                    </tr>

                    <tr>
                        <td>Enter the Image:</td>
                        <td><input id="Image" type="file" name="Image" class="form-control"/>&nbsp;

                    </tr>

                    <tr>
                        <td>Model number:</td>
                        <td><input id="I_id" type="text" name="ModelID" class="form-control"/>
                            <span style="color: red;">*</span></td>
                    </tr>

                    <tr>
                        <td>Item Price:</td>
                        <td><input id="I_price" type="text" name="ItemPrice" class="form-control"/>
                            <span style="color: red;">*</span>

                    </tr>

                    <tr>
                        <td>Available quantity:</td>
                        <td><input id="I_Qnt" type="number" min="0" name="ItemQuantity" class="form-control"/>
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
$database="Shop_Item";

$connection=new mysqli($servername,$user,$password,$database);

if($connection->connect_error){
    echo"error";
}
else{
    echo "Connected successfully";
}

if(isset($_POST['submit'])) {

    $sql= "SELECT * FROM Items";
    $result=$coonectin->query ($sql);


    if ($result-> num_rows>0){
       while($row=$result->fetch_assoc()){
           echo "<tr><form action='Update_Delete_Item.php'  method='POST'>".
               "<td>".$row['Image']."</td>".
               "<td>".$row['Item_price']."</td>".
               "<td>".$row['Item_Qnt']."</td>".
               "<td>
                        <button type='submit' name='submit'>Update</button></td>
                        
                        </form>
                        <td>
                        <form method='post' action='Update_Delete_Item.php'>
                        <button type='submit' name='delete'>Delete</button>
                        
                        </form>
                        </td>";
       }
    }

    else{
        echo "0 result";
    }
}

?>