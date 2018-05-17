<?php
//session_start();
//require_once "connection.php"

?>


<!doctype html>
<html>
<head>
    <title>Add_package</title>


    <link rel="stylesheet" type="text/css" href="Add.css">
    <link rel="stylesheet" type="text/css" href="header.css">
    <script src="Service-DetailValidation.js" type="text/javascript"></script>

</head>

<body>


<?php include 'header.php'; ?>

<div class="container">

    <div class="addItem4-box">

        <h1 style="margin-left: 20px">Add New Package</h1>

        <div class="new_item-box">

            <form action="" method="post">

                <table>

                    <tr>
                        <td>Package Name:</td>
                        <td><input id="PName" type="text" name="packageName"  class="form-control"/></td>

                    </tr>

                    <tr>
                        <td>Package ID:</td>
                        <td><input id="P_id" type="text" name="PackageID" placeholder="1111-1111-CCC" class="form-control"/>
                            <span style="color: red;">*</span></td>
                    </tr>

                    <tr>
                        <td>Offers:</td>
                        <td><textarea id="P_offers" type="text" value="" name="Offers" class="form-control"></textarea>

                    </tr>

                    <tr>
                        <td>Total price:</td>
                        <td><input id="P_Price" type="text"  name="PPrice" class="form-control">
                            <span style="color: red;">*</span></td>

                    </tr>

                    <tr>
                        <td>Enter Images:</td>
                        <td><input id="PImages" type="file" name="Images" multiple class="form-control"/>&nbsp;

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
              $database="Packages";

              $connection=new mysqli($servername,$user,$password,$database);

              if($connection->connect_error){
                                    echo"error";
              }
              else{
                                    echo "Connected successfully";
              }

              if(isset($_POST['submit'])){

                        $PName=$_POST['packageName'];
                        $PID=$_POST['PackageID'];
                        $POffer=$_POST['Offers'];
                        $PPrice=$_POST['PPrice'];
                        $PImage=$_POST['Images'];


                        $sql="INSERT INTO Packages(Package_Name,Package_ID,Offers,Price,Images)  VALUES('$PName','$PID','$POffer','$PPrice','$PImage')";


                        if ($connection -> query($sql) == TRUE){
                                        echo "records saved";
                        }
                        else{
                                        echo "error".$sql."<br/>".$connection-> error;
                        }
              }

?>
