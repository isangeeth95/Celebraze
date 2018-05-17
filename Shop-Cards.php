<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cards shop</title>

    <link rel="stylesheet" type="text/css" href="header.css">
    <link rel="stylesheet"  type="text/css" href="Shop-Cards.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="Shop-Items.js" type="text/javascript"></script>

</head>

<body style="background-color: lightskyblue; position: static">

<?php include 'header.php'; ?>

<div class="container" style="background: url(nimshi/DD.jpg)">


    <h2><span style="padding-left:550px">Details of Invitation cards</span></h2>

    <div align="center">
        <table cellspacing="1"  cellpaddind="4" border="3">

            <tr align="center">
                <th width="100">Image</th>
                <th width="100">Model Number</th>
                <th width="600">Price(per one card)</th>
            </tr>

            <tr align="center">
                <td><img src="nimshi/CC001.jpg" width="250" height="250"></td>
                <td>CC001#</td>
                <td>
                    <form name="card1" >
                        <br> 150 LKR
                        <br> Please Select Quantity
                        <input type='button'  name='subtract' onclick='Total("q1,qn1",-1,"total1",150);' value='-'/>
                        <input type='button' name='add' onclick='Total("q1,qn1",1,"total1",150);' value='+'/>
                        <input type='text' name='qty' id='q1,qn1' readonly=true value="0"/>
                        <input type='text' name='total' id='total1' value="0" />
                    </form>

                    <form name="card1" id="q1,total1" method="Post" action="payment.php"><table align="center"><tr>
                                <td><a href="payment.php"><input name="Select" type="button" value="Buy now"></a></td>
                            </tr></table></form>
                    <form name="card1" id="qn1,total1" method="Post" action="Shopping_cart.php"><table align="center"><tr>
                                <td><input name="Add to the Cart"  type="button" value="Add to the Cart" ></td>
                            </tr></table></form>
                </td>
            </tr>

            <tr align="center">
                <td><img src="nimshi/CC002.jpg" width="250" height="250"></td>
                <td>CC002#</td>
                <td>
                    <form name="card2" >
                        <br> 120 LKR
                        <br> Please Select Quantity
                        <input type='button'  name='subtract' onclick='Total("q2,qn2",-1,"total2",120);' value='-'/>
                        <input type='button' name='add' onclick='Total("q2,qn2",1,"total2",120);' value='+'/>
                        <input type='text' name='qty' id='q2,qn2' readonly=true value="0"/>
                        <input type='text' name='total' id='total2' value="0" />
                    </form>

                    <form name="card2" id="q2,total2" method="Post" action="payment.php"><table align="center"><tr>
                                <td><a href="payment.php"><input name="Select" type="button" value="Buy now"></a></td>
                            </tr></table></form>
                    <form name="card2" id="qn2,total2" method="Post" action="Shopping_cart.php"><table align="center"><tr>
                                <td><input name="Add to the Cart"  type="button" value="Add to the Cart" ></td>
                            </tr></table></form>
                </td>
            </tr>

            <tr align="center">
                <td><img src="nimshi/CC003.jpg" width="300" height="300"></td>
                <td>CC003#</td>
                <td>
                    <form name="card3" >
                        <br> 250 LKR
                        <br> Please Select Quantity
                        <input type='button'  name='subtract' onclick='Total("q3,qn3",-1,"total3",250);' value='-'/>
                        <input type='button' name='add' onclick='Total("q3,qn3",1,"total3",250);' value='+'/>
                        <input type='text' name='qty' id='q3,qn3' readonly=true value="0"/>
                        <input type='text' name='total' id='total3' value="0" />
                    </form>

                    <form name="card3" id="q3,total3" method="Post" action="payment.php"><table align="center"><tr>
                                <td><a href="payment.php"><input name="Select" type="button" value="Buy now"></a></td>
                            </tr></table></form>
                    <form name="card3" id="qn3,total3" method="Post" action="Shopping_cart.php"><table align="center"><tr>
                                <td><input name="Add to the Cart"  type="button" value="Add to the Cart" ></td>
                            </tr></table></form>
                </td>
            </tr>

            <tr align="center">
                <td><img src="nimshi/CC004.jpg" width="300" height="300"></td>
                <td>CC004#</td>
                <td>
                    <form name="card4" >
                        <br> 200 LKR
                        <br> Please Select Quantity
                        <input type='button'  name='subtract' onclick='Total("q4,qn4",-1,"total4",200);' value='-'/>
                        <input type='button' name='add' onclick='Total("q4,qn4",1,"total4",200);' value='+'/>
                        <input type='text' name='qty' id='q4,qn4' readonly=true value="0"/>
                        <input type='text' name='total' id='total4' value="0" />
                    </form>

                    <form name="card4" id="q4,total4" method="Post" action="payment.php"><table align="center"><tr>
                                <td><a href="payment.php"><input name="Select" type="button" value="Buy now"></a></td>
                            </tr></table></form>
                    <form name="card4" id="qn4,total4" method="Post" action="Shopping_cart.php"><table align="center"><tr>
                                <td><input name="Add to the Cart"  type="button" value="Add to the Cart" ></td>
                            </tr></table></form>
                </td>
            </tr>

            <tr align="center">
                <td><img src="nimshi/CC005.png" width="300" height="300"></td>
                <td>CC005#</td>
                <td>
                    <form name="card5" >
                        <br> 250 LKR
                        <br> Please Select Quantity
                        <input type='button'  name='subtract' onclick='Total("q5,qn5",-1,"total5",250);' value='-'/>
                        <input type='button' name='add' onclick='Total("q5,qn5",1,"total5",250);' value='+'/>
                        <input type='text' name='qty' id='q5,qn5' readonly=true value="0"/>
                        <input type='text' name='total' id='total5' value="0" />
                    </form>

                    <form name="card5" id="q5,total5" method="Post" action="payment.php"><table align="center"><tr>
                                <td><a href="payment.php"><input name="Select" type="button" value="Buy now"></a></td>
                            </tr></table></form>
                    <form name="card5" id="qn5,total5" method="Post" action="Shopping_cart.php"><table align="center"><tr>
                                <td><input name="Add to the Cart"  type="button" value="Add to the Cart" ></td>
                            </tr></table></form>
                </td>
            </tr>

            <tr align="center">
                <td><img src="nimshi/CC006.png" width="280" height="250"></td>
                <td>CC006#</td>
                <td>
                    <form name="card5" >
                        <br> 250 LKR
                        <br> Please Select Quantity
                        <input type='button'  name='subtract' onclick='Total("q6,qn6",-1,"total6",250);' value='-'/>
                        <input type='button' name='add' onclick='Total("q6,qn6",1,"total6",250);' value='+'/>
                        <input type='text' name='qty' id='q6,qn6' readonly=true value="0"/>
                        <input type='text' name='total' id='total6' value="0" />
                    </form>

                    <form name="card6" id="q6,total6" method="Post" action="payment.php"><table align="center"><tr>
                                <td><a href="payment.php"><input name="Select" type="button" value="Buy now"></a></td>
                            </tr></table></form>
                    <form name="card6" id="qn6,total6" method="Post" action="Shopping_cart.php"><table align="center"><tr>
                                <td><input name="Add to the Cart"  type="button" value="Add to the Cart" ></td>
                            </tr></table></form>
                </td>
            </tr>

            <tr align="center">
                <td><img src="nimshi/CC007.png" width="300" height="300"></td>
                <td>CC007#</td>
                <td>
                    <form name="card7" >
                        <br> 200 LKR
                        <br> Please Select Quantity
                        <input type='button'  name='subtract' onclick='Total("q7,qn7",-1,"total7",200);' value='-'/>
                        <input type='button' name='add' onclick='Total("q7,qn7",1,"total7",200);' value='+'/>
                        <input type='text' name='qty' id='q7,qn7' readonly=true value="0"/>
                        <input type='text' name='total' id='total7' value="0" />
                    </form>

                    <form name="card7" id="q7,total7" method="Post" action="payment.php"><table align="center"><tr>
                                <td><a href="payment.php"><input name="Select" type="button" value="Buy now"></a></td>
                            </tr></table></form>
                    <form name="card7" id="qn7,total7" method="Post" action="Shopping_cart.php"><table align="center"><tr>
                                <td><input name="Add to the Cart"  type="button" value="Add to the Cart" ></td>
                            </tr></table></form>
                </td>
            </tr>

            <tr align="center">
                <td><img src="nimshi/CC008.png" width="300" height="300"></td>
                <td>CC008#</td>
                <td>
                    <form name="card7" >
                        <br> 200 LKR
                        <br> Please Select Quantity
                        <input type='button'  name='subtract' onclick='Total("q8,qn8",-1,"total8",200);' value='-'/>
                        <input type='button' name='add' onclick='Total("q8,qn8",1,"total8",200);' value='+'/>
                        <input type='text' name='qty' id='q8,qn8' readonly=true value="0"/>
                        <input type='text' name='total' id='total8' value="0" />
                    </form>

                    <form name="card7" id="q8,total8" method="Post" action="payment.php"><table align="center"><tr>
                                <td><a href="payment.php"><input name="Select" type="button" value="Buy now"></a></td>
                            </tr></table></form>
                    <form name="card7" id="qn8,total8" method="Post" action="Shopping_cart.php"><table align="center"><tr>
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
                        <td><a href="Shop-invitations.php"><span style="padding-left: 25px"><input name="Select" type="button" value="Go to Next Item"></span></a></td>
                    </tr></table>

            </form>

        </table>

        </br> </br> </br>

    </div>

</div>



<?php include 'footer.php'; ?>


</body>
</html>
