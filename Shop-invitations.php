<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Invitations shop</title>


    <link rel="stylesheet" type="text/css" href="header.css">
    <link rel="stylesheet"  type="text/css" href="Shop-Invitations.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="Shop-Items.js" type="text/javascript"></script>

</head>

<body style="background-color: lightskyblue; position: static">

<?php include 'header.php'; ?>

<div class="container" style="background: url(nimshi/FF.png)">


    <h2><span style="padding-left:550px">Details of Invitation cards</span></h2>

    <div align="center">
        <table cellspacing="1"  cellpaddind="4" border="3">

            <tr>
                <th width="100" >Image</th>
                <th width="100" >Model Number</th>
                <th width="600" >Price(per one invitation card)</th>
            </tr>

            </tr>

            <tr align="center">
                <td><img src="nimshi/BI001.jpg" width="250" height="250"></td>
                <td>BI001#</td>
                <td>
                    <form name="in1" >
                        <br> 50 LKR
                        <br> Please Select Quantity
                        <input type='button'  name='subtract' onclick='Total("q1,qn1",-1,"total1",50);' value='-'/>
                        <input type='button' name='add' onclick='Total("q1,qn1",1,"total1",50);' value='+'/>
                        <input type='text' name='qty' id='q1,qn1' readonly=true value="0"/>
                        <input type='text' name='total' id='total1' value="0" />
                    </form>

                    <form name="in1" id="q1,total1" method="Post" action="payment.php"><table align="center"><tr>
                                <td><a href="payment.php"><input name="Select" type="button" value="Buy now"></a></td>
                            </tr></table></form>
                    <form name="in1" id="qn1,total1" method="Post" action="Shopping_cart.php"><table align="center"><tr>
                                <td><input name="Add to the Cart"  type="button" value="Add to the Cart" ></td>
                            </tr></table></form>
                </td>
            </tr>

            <tr align="center">
                <td><img src="nimshi/BI002.jpg" width="250" height="250"></td>
                <td>BI002#</td>
                <td>
                    <form name="in2" >
                        <br> 40 LKR
                        <br> Please Select Quantity
                        <input type='button'  name='subtract' onclick='Total("q2,qn2",-1,"total2",40);' value='-'/>
                        <input type='button' name='add' onclick='Total("q2,qn2",1,"total2",40);' value='+'/>
                        <input type='text' name='qty' id='q2,qn2' readonly=true value="0"/>
                        <input type='text' name='total' id='total2' value="0" />
                    </form>

                    <form name="in2" id="q2,total2" method="Post" action="payment.php"><table align="center"><tr>
                                <td><a href="payment.php"><input name="Select" type="button" value="Buy now"></a></td>
                            </tr></table></form>
                    <form name="in2" id="qn2,total2" method="Post" action="Shopping_cart.php"><table align="center"><tr>
                                <td><input name="Add to the Cart"  type="button" value="Add to the Cart" ></td>
                            </tr></table></form>
                </td>
            </tr>

            <tr align="center">
                <td><img src="nimshi/BI003.jpg" width="250" height="250"></td>
                <td>BI003#</td>
                <td>
                    <form name="in3" >
                        <br> 40 LKR
                        <br> Please Select Quantity
                        <input type='button'  name='subtract' onclick='Total("q3,qn3",-1,"total3",40);' value='-'/>
                        <input type='button' name='add' onclick='Total("q3,qn3",1,"total3",40);' value='+'/>
                        <input type='text' name='qty' id='q3,qn3' readonly=true value="0"/>
                        <input type='text' name='total' id='total3' value="0" />
                    </form>

                    <form name="in3" id="q3,total3" method="Post" action="payment.php"><table align="center"><tr>
                                <td><a href="payment.php"><input name="Select" type="button" value="Buy now"></a></td>
                            </tr></table></form>
                    <form name="in3" id="qn3,total3" method="Post" action="Shopping_cart.php"><table align="center"><tr>
                                <td><input name="Add to the Cart"  type="button" value="Add to the Cart" ></td>
                            </tr></table></form>
                </td>
            </tr>

            <tr align="center">
                <td><img src="nimshi/BI004.jpg" width="250" height="250"></td>
                <td>BI004#</td>
                <td>
                    <form name="in4" >
                        <br> 45 LKR
                        <br> Please Select Quantity
                        <input type='button'  name='subtract' onclick='Total("q4,qn4",-1,"total4",45);' value='-'/>
                        <input type='button' name='add' onclick='Total("q4,qn4",1,"total4",45);' value='+'/>
                        <input type='text' name='qty' id='q4,qn4' readonly=true value="0"/>
                        <input type='text' name='total' id='total4' value="0" />
                    </form>

                    <form name="in4" id="q4,total4" method="Post" action="payment.php"><table align="center"><tr>
                                <td><a href="payment.php"><input name="Select" type="button" value="Buy now"></a></td>
                            </tr></table></form>
                    <form name="in4" id="qn4,total4" method="Post" action="Shopping_cart.php"><table align="center"><tr>
                                <td><input name="Add to the Cart"  type="button" value="Add to the Cart" ></td>
                            </tr></table></form>
                </td>
            </tr>

            <tr align="center">
                <td><img src="nimshi/BI005.jpg" width="250" height="250"></td>
                <td>BI005#</td>
                <td>
                    <form name="in5" >
                        <br> 50 LKR
                        <br> Please Select Quantity
                        <input type='button'  name='subtract' onclick='Total("q5,qn5",-1,"total5",50);' value='-'/>
                        <input type='button' name='add' onclick='Total("q5,qn5",1,"total5",50);' value='+'/>
                        <input type='text' name='qty' id='q5,qn5' readonly=true value="0"/>
                        <input type='text' name='total' id='total5' value="0" />
                    </form>

                    <form name="in5" id="q5,total5" method="Post" action="payment.php"><table align="center"><tr>
                                <td><a href="payment.php"><input name="Select" type="button" value="Buy now"></a></td>
                            </tr></table></form>
                    <form name="in5" id="qn5,total5" method="Post" action="Shopping_cart.php"><table align="center"><tr>
                                <td><input name="Add to the Cart"  type="button" value="Add to the Cart" ></td>
                            </tr></table></form>
                </td>
            </tr>

            <tr align="center">
                <td><img src="nimshi/BI006.jpg" width="250" height="270"></td>
                <td>BI006#</td>
                <td>
                    <form name="in5" >
                        <br> 45 LKR
                        <br> Please Select Quantity
                        <input type='button'  name='subtract' onclick='Total("q6,qn6",-1,"total6",45);' value='-'/>
                        <input type='button' name='add' onclick='Total("q6,qn6",1,"total6",45);' value='+'/>
                        <input type='text' name='qty' id='q6,qn6' readonly=true value="0"/>
                        <input type='text' name='total' id='total6' value="0" />
                    </form>

                    <form name="in6" id="q6,total6" method="Post" action="payment.php"><table align="center"><tr>
                                <td><a href="payment.php"><input name="Select" type="button" value="Buy now"></a></td>
                            </tr></table></form>
                    <form name="in6" id="qn6,total6" method="Post" action="Shopping_cart.php"><table align="center"><tr>
                                <td><input name="Add to the Cart"  type="button" value="Add to the Cart" ></td>
                            </tr></table></form>
                </td>
            </tr>

            <tr align="center">
                <td><img src="nimshi/BI007.jpg" width="270" height="250"></td>
                <td>BI007#</td>
                <td>
                    <form name="in7" >
                        <br> 45 LKR
                        <br> Please Select Quantity
                        <input type='button'  name='subtract' onclick='Total("q7,qn7",-1,"total7",45);' value='-'/>
                        <input type='button' name='add' onclick='Total("q7,qn7",1,"total7",45);' value='+'/>
                        <input type='text' name='qty' id='q7,qn7' readonly=true value="0"/>
                        <input type='text' name='total' id='total7' value="0" />
                    </form>

                    <form name="in7" id="q7,total7" method="Post" action="payment.php"><table align="center"><tr>
                                <td><a href="payment.php"><input name="Select" type="button" value="Buy now"></a></td>
                            </tr></table></form>
                    <form name="in7" id="qn7,total7" method="Post" action="Shopping_cart.php"><table align="center"><tr>
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
                        <td><a href="Shop-Candle.php"><span style="padding-left: 25px"><input name="Select" type="button" value="Go to Next Item"></span></a></td>
                    </tr></table>

            </form>

        </table>


        </br> </br> </br>

    </div>

</div>


<?php include 'footer.php'; ?>


</body>
</html>



