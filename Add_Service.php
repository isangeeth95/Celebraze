<?php
//session_start();
//require_once "connection.php"

?>


<!doctype html>
<html>
<head>
    <title>Add_Service</title>


    <link rel="stylesheet" type="text/css" href="Add.css">
    <link rel="stylesheet" type="text/css" href="header.css">
    <script src="Service-DetailValidation.js" type="text/javascript"></script>

</head>

<body>


<?php include 'header.php'; ?>

<div class="container">

    <div class="addItem3-box">

        <h1 style="margin-left: 20px">Add New Service</h1>

        <div class="new_item-box">

            <form action="Add_Service.php" method="post" name="service  onsubmit="return validateEmail()">

                <table>

                    <tr>
                        <td>Select Service Category:</td>
                        <td>
                            <select id="S_Category">
                                <option value="1">Location</option>
                                <option value="2">Catering</option>
                                <option value="3">Cake Decoration</option>
                                <option value="4">Photography</option>
                                <option value="5">Music-DJ</option>
                                <option value="6">Decoration</option>
                            </select>
                        </td>

                    </tr>

                    <tr>
                        <td>Company Name:</td>
                        <td><input id="CName" type="text" name="CompanyName"  class="form-control"/></td>


                    </tr>

                    <tr>
                        <td>Company ID:</td>
                        <td><input id="C_id" type="text" name="CompanyID" placeholder="1111-1111-CCC" class="form-control"/>
                            <span style="color: red;">*</span></td>
                    </tr>

                    <tr>
                        <td>Contact Number:</td>
                        <td><input id="C_no" type="text" name="CompanyNO" placeholder="077 524 0944" class="form-control"/>
                            <span style="color: red;">*</span>

                    </tr>

                    <tr>
                        <td>Address:</td>
                        <td><input id="C_Add" type="text" value="" name="CompanyAdd" class="form-control"/>

                    </tr>

                    <tr>
                        <td>Email:</td>
                        <td><input id="C_Mail" type="text"  name="CompanyMail" placeholder="Enter email address" class="form-control"/>

                    </tr>

                    <tr>
                        <td>WebSite:</td>
                        <td><input id="C_Web" type="url" value="" name="CompanyWeb" class="form-control"/>

                    </tr>

                    <tr>
                        <td>Brief Description:</td>
                        <td><textarea id="C_des" type="text" value="" name="Company" class="form-control"></textarea>

                    </tr>

                    <tr>
                        <td>Add More Details:</td>
                        <td><textarea id="C_More" type="text" value="" name="Company2" class="form-control"></textarea>
                            <span style="color: red;">*</span></td>

                    </tr>

                    <tr>
                        <td>Enter the Images:</td>
                        <td><input id="Images" type="file" name="Images" multiple class="form-control"/>&nbsp;

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