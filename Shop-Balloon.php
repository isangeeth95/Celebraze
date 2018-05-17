<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Balloon shop</title>

    <link rel="stylesheet" type="text/css" href="header.css">
    <link rel="stylesheet"  type="text/css" href="Shop-Balloon.css"/>
    <script src="Shop-Items.js" type="text/javascript"></script>

</head>

<body style="background-color: lightskyblue; position: static">

<?php include 'header.php'; ?>

    <div class="container" style="background: url(nimshi/BB.png)">

    <h2 id="ballon"><span style="padding-left:550px">Details of Balloon packets</span></h2>

    <div align="center">
        <table cellspacing="1"  cellpaddind="4" border="3">

            <tr>
                <th width="100" >Image</th>
                <th width="100" >Model Number</th>
                <th width="600">Price(per packet)</th>
            </tr>

            <tr align="center">
                <td><img src="nimshi/chart.png" width="180" height="200"><p>6 colours in one packet</p></td>
                <td>BB000#</td>
                <td>
                    <form name="balloon1" >
                        <br> 280 LKR
                        <br> Please Select Quantity
                        <input type='button'  name='subtract' onclick='Total("q1,qn1",-1,"total1",280);' value='-'/>
                        <input type='button' name='add' onclick='Total("q1,qn1",1,"total1",280);' value='+'/>
                        <input type='text' name='qty' id='q1,qn1' readonly=true value="0"/>
                        <input type='text' name='total' id='total1' value="0" />
                    </form>

                    <form name="balloon1" id="q1,total1" method="Post" action="payment.php"><table align="center"><tr>
                                <td><a href="payment.php"><input name="Select" type="button" value="Buy now"></a></td>
                            </tr></table></form>
                    <form name="balloon1" id="qn1,total1" method="Post" action="Shopping_cart.php"><table align="center"><tr>
                                <td><input name="Add to the Cart"  type="button" value="Add to the Cart" ></td>
                            </tr></table></form>

                </td>
            </tr>

            <tr align="center">
                <td><img src="nimshi/chart1.png" width="360" height="380"><p>Multi colours per packet</p></td>
                <td>BB001#</td>
                <td>
                    <form name="balloon2" >
                        <br> 320 LKR
                        <br> Please Select Quantity
                        <input type='button'  name='subtract' onclick='Total("q2,qn2",-1,"total2",320);' value='-'/>
                        <input type='button' name='add' onclick='Total("q2,qn2",1,"total2",320);' value='+'/>
                        <input type='text' name='qty' id='q2,qn2' readonly=true value="0"/>
                        <input type='text' name='total' id='total2' value="0" />
                    </form>

                    <form name="balloon2" id="q2,total2" method="Post" action="payment.php"><table align="center"><tr>
                                <td><a href="payment.php"><input name="Select" type="button" value="Buy now"></a></td>
                            </tr></table></form>
                    <form name="balloon2" id="qn2,total2" method="Post" action="Shopping_cart.php"><table align="center"><tr>
                                <td><input name="Add to the Cart"  type="button" value="Add to the Cart" ></td>
                            </tr></table></form>
                </td>
            </tr>

            <tr align="center">
                <td><img src="nimshi/chart2.png" width="350" height="350"><p>6 designs in one packet</p></td>
                <td>BB002#</td>
                <td>
                    <form name="balloon3" >
                        <br> 550 LKR
                        <br> Please Select Quantity
                        <input type='button'  name='subtract' onclick='Total("q3,qn3",-1,"total3",550);' value='-'/>
                        <input type='button' name='add' onclick='Total("q3,qn3",1,"total3",550);' value='+'/>
                        <input type='text' name='qty' id='q3,qn3' readonly=true value="0"/>
                        <input type='text' name='total' id='total3' value="0" />
                    </form>

                    <form name="balloon3" id="q3,total3" method="Post" action="payment.php"><table align="center"><tr>
                                <td><a href="payment.php"><input name="Select" type="button" value="Buy now"></a></td>
                            </tr></table></form>
                    <form name="balloon3" id="qn3,total3" method="Post" action="Shopping_cart.php"><table align="center"><tr>
                                <td><input name="Add to the Cart"  type="button" value="Add to the Cart" ></td>
                            </tr></table></form>
                </td>
            </tr>

            <tr align="center">
                <td><img src="nimshi/chart3.png" width="350" height="350"><p>9 colour per packet</p></td>
                <td>BB003#</td>
                <td><form name="balloon4" >
                        <br> 450 LKR
                        <br> Please Select Quantity
                        <input type='button'  name='subtract' onclick='Total("q4,qn4",-1,"total4",450);' value='-'/>
                        <input type='button' name='add' onclick='Total("q4,qn4",1,"total4",450);' value='+'/>
                        <input type='text' name='qty' id='q4,qn4' readonly=true value="0"/>
                        <input type='text' name='total' id='total4' value="0" />
                    </form>

                    <form name="balloon4" id="q4,total4" method="Post" action="payment.php"><table align="center"><tr>
                                <td><a href="payment.php"><input name="Select" type="button" value="Buy now"></a></td>
                            </tr></table></form>
                    <form name="balloon4" id="qn4,total4" method="Post" action="Shopping_cart.php"><table align="center"><tr>
                                <td><input name="Add to the Cart"  type="button" value="Add to the Cart" ></td>
                            </tr></table></form>
                </td>
            </tr>

            <tr align="center">
                <td><p><img src="nimshi/chart4.png" width="350" height="350"><p>2 designs in one packet</p></td>
                <td>BB004#</td>
                <td><form name="balloon5" >
                        <br> 500 LKR
                        <br> Please Select Quantity
                        <input type='button'  name='subtract' onclick='Total("q5,qn5",-1,"total5",500);' value='-'/>
                        <input type='button' name='add' onclick='Total("q5,qn5",1,"total5",500);' value='+'/>
                        <input type='text' name='qty' id='q5,qn5' readonly=true value="0"/>
                        <input type='text' name='total' id='total5' value="0" />
                    </form>

                    <form name="balloon5" id="q5,total5" method="Post" action="payment.php"><table align="center"><tr>
                                <td><a href="payment.php"><input name="Select" type="button" value="Buy now"></a></td>
                            </tr></table></form>
                    <form name="balloon5" id="qn5,total5" method="Post" action="Shopping_cart.php"><table align="center"><tr>
                                <td><input name="Add to the Cart"  type="button" value="Add to the Cart" ></td>
                            </tr></table></form>
                </td>
            </tr>

            <tr align="center">
                <td><img src="nimshi/chart5.jpg" width="350" height="350"></td>
                <td>BB005#</td>
                <td><form name="balloon6" >
                        <br> 950 LKR
                        <br> Please Select Quantity
                        <input type='button'  name='subtract' onclick='Total("q6,qn6",-1,"total6",950);' value='-'/>
                        <input type='button' name='add' onclick='Total("q6,qn6",1,"total6",950);' value='+'/>
                        <input type='text' name='qty' id='q6,qn6' readonly=true value="0"/>
                        <input type='text' name='total' id='total6' value="0" />
                    </form>

                    <form name="balloon6" id="q6,total6" method="Post" action="payment.php"><table align="center"><tr>
                                <td><a href="payment.php"><input name="Select" type="button" value="Buy now"></a></td>
                            </tr></table></form>
                    <form name="balloon6" id="qn6,total6" method="Post" action="Shopping_cart.php"><table align="center"><tr>
                                <td><input name="Add to the Cart"  type="button" value="Add to the Cart" ></td>
                            </tr></table></form>
                </td>
            </tr>

        </table>

        <table>

            <form name="myform1">
                <table align="center"><tr>
                        <td><a href="Shop.html"><input name="Select" type="button" value="Go Back to Shop"></a></td>
                        <td><a href="Shopping_cart.php"><input name="Select" type="button" value="View Shopping Cart"></a></td>
                        <td><a href="Shop-Cupcake.php"><span style="padding-left: 25px"><input name="Select" type="button" value="Go to Next Item"></span></a></td>
                    </tr></table>

            </form>

        </table>

        </br> </br> </br>

    </div>
</div>


<?php include 'footer.php'; ?>


</body>
</html>
