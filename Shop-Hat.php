<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hats shop</title>


    <link rel="stylesheet" type="text/css" href="header.css">
    <link rel="stylesheet"  type="text/css" href="Shop-Hat.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="Shop-Items.js" type="text/javascript"></script>

</head>

<body style="background-color: lightskyblue; position: static">

<?php include 'header.php'; ?>

<div class="container" style="background: url(nimshi/GG.jpg)" >



    <h2><span style="padding-left:550px">Details of B'Day Hat packets</span></h2>

    <div align="center">
        <table cellspacing="1"  cellpaddind="4" border="3">

            <tr>
                <th width="100" >Image of Available designs</th>
                <th width="100" >Model Number</th>
                <th width="600">Price(per one)</th>
            </tr>

            <tr align="center">
                <td><img src="nimshi/BH000.png" width="250" height="230"></td>
                <td>BH000</td>
                <td><form name="hat1" >
                        <br> 70 LKR
                        <br> Please Select Quantity
                        <input type='button'  name='subtract' onclick='Total("q1,qn1",-1,"total1",70);' value='-'/>
                        <input type='button' name='add' onclick='Total("q1,qn1",1,"total1",70);' value='+'/>
                        <input type='text' name='qty' id='q1,qn1' readonly=true value="0"/>
                        <input type='text' name='total' id='total1' value="0" />
                    </form>

                    <form name="hat1" id="q1,total1" method="Post" action="payment.php"><table align="center"><tr>
                                <td><a href="payment.php"><input name="Select" type="button" value="Buy now"></a></td>
                            </tr></table></form>
                    <form name="hat1" id="qn1,total1" method="Post" action="Shopping_cart.php"><table align="center"><tr>
                                <td><input name="Add to the Cart"  type="button" value="Add to the Cart" ></td>
                            </tr></table></form>
                </td>
            </tr>

            <tr align="center">
                <td><img src="nimshi/BH001.png" width="250" height="230"></td>
                <td>BH001</td>
                <td><form name="hat2" >
                        <br> 50 LKR
                        <br> Please Select Quantity
                        <input type='button'  name='subtract' onclick='Total("q2,qn2",-1,"total2",50);' value='-'/>
                        <input type='button' name='add' onclick='Total("q2,qn2",1,"total2",50);' value='+'/>
                        <input type='text' name='qty' id='q2,qn2' readonly=true value="0"/>
                        <input type='text' name='total' id='total2' value="0" />
                    </form>

                    <form name="hat2" id="q2,total2" method="Post" action="payment.php"><table align="center"><tr>
                                <td><a href="payment.php"><input name="Select" type="button" value="Buy now"></a></td>
                            </tr></table></form>
                    <form name="hat2" id="qn2,total2" method="Post" action="Shopping_cart.php"><table align="center"><tr>
                                <td><input name="Add to the Cart"  type="button" value="Add to the Cart" ></td>
                            </tr></table></form>
                </td>
            </tr>

            <tr align="center">
                <td><img src="nimshi/BH002.png" width="250" height="230"></td>
                <td>BH002</td>
                <td>
                    <form name="hat3" >
                        <br> 80 LKR
                        <br> Please Select Quantity
                        <input type='button'  name='subtract' onclick='Total("q3,qn3",-1,"total3",80);' value='-'/>
                        <input type='button' name='add' onclick='Total("q3,qn3",1,"total3",80);' value='+'/>
                        <input type='text' name='qty' id='q3,qn3' readonly=true value="0"/>
                        <input type='text' name='total' id='total3' value="0" />
                    </form>

                    <form name="hat3" id="q3,total3" method="Post" action="payment.php"><table align="center"><tr>
                                <td><a href="payment.php"><input name="Select" type="button" value="Buy now"></a></td>
                            </tr></table></form>
                    <form name="hat3" id="qn3,total3" method="Post" action="Shopping_cart.php"><table align="center"><tr>
                                <td><input name="Add to the Cart"  type="button" value="Add to the Cart" ></td>
                            </tr></table></form>
                </td>
            </tr>

            <tr align="center">
                <td><img src="nimshi/BH003.png" width="180" height="150"></td>
                <td>BH003</td>
                <td>
                    <form name="hat4" >
                        <br> 100 LKR
                        <br> Please Select Quantity
                        <input type='button'  name='subtract' onclick='Total("q4,qn4",-1,"total4",100);' value='-'/>
                        <input type='button' name='add' onclick='Total("q4,qn4",1,"total4",100);' value='+'/>
                        <input type='text' name='qty' id='q4,qn4' readonly=true value="0"/>
                        <input type='text' name='total' id='total4' value="0" />
                    </form>

                    <form name="hat4" id="q4,total4" method="Post" action="payment.php"><table align="center"><tr>
                                <td><a href="payment.php"><input name="Select" type="button" value="Buy now"></a></td>
                            </tr></table></form>
                    <form name="hat4" id="qn4,total4" method="Post" action="Shopping_cart.php"><table align="center"><tr>
                                <td><input name="Add to the Cart"  type="button" value="Add to the Cart" ></td>
                            </tr></table></form>
                </td>
            </tr>

            <tr align="center">
                <td><img src="nimshi/BH004.png" width="250" height="230"></td>
                <td>BH004</td>
                <td>
                    <form name="hat5" >
                        <br> 150 LKR
                        <br> Please Select Quantity
                        <input type='button'  name='subtract' onclick='Total("q5,qn5",-1,"total5",150);' value='-'/>
                        <input type='button' name='add' onclick='Total("q5,qn5",1,"total5",150);' value='+'/>
                        <input type='text' name='qty' id='q5,qn5' readonly=true value="0"/>
                        <input type='text' name='total' id='total5' value="0" />
                    </form>

                    <form name="hat5" id="q5,total5" method="Post" action="payment.php"><table align="center"><tr>
                                <td><a href="payment.php"><input name="Select" type="button" value="Buy now"></a></td>
                            </tr></table></form>
                    <form name="hat5" id="qn5,total5" method="Post" action="Shopping_cart.php"><table align="center"><tr>
                                <td><input name="Add to the Cart"  type="button" value="Add to the Cart" ></td>
                            </tr></table></form>
                </td>
            </tr>

            <tr align="center">
                <td><img src="nimshi/BH005.png" width="250" height="200"></td>
                <td>BH005</td>
                <td>
                    <form name="hat6" >
                        <br> 150 LKR
                        <br> Please Select Quantity
                        <input type='button'  name='subtract' onclick='Total("q6,qn6",-1,"total6",150);' value='-'/>
                        <input type='button' name='add' onclick='Total("q6,qn6",1,"total6",150);' value='+'/>
                        <input type='text' name='qty' id='q6,qn6' readonly=true value="0"/>
                        <input type='text' name='total' id='total6' value="0" />
                    </form>

                    <form name="hat6" id="q6,total6" method="Post" action="payment.php"><table align="center"><tr>
                                <td><a href="payment.php"><input name="Select" type="button" value="Buy now"></a></td>
                            </tr></table></form>
                    <form name="hat6" id="qn6,total6" method="Post" action="Shopping_cart.php"><table align="center"><tr>
                                <td><input name="Add to the Cart"  type="button" value="Add to the Cart" ></td>
                            </tr></table></form>
                </td>
            </tr>

            <tr align="center">
                <td><img src="nimshi/BH006.png" width="250" height="230"></td>
                <td>BH006</td>
                <td>
                    <form name="hat7" >
                        <br> 200 LKR
                        <br> Please Select Quantity
                        <input type='button'  name='subtract' onclick='Total("q7,qn7",-1,"total7",200);' value='-'/>
                        <input type='button' name='add' onclick='Total("q7,qn7",1,"total7",200);' value='+'/>
                        <input type='text' name='qty' id='q7,qn7' readonly=true value="0"/>
                        <input type='text' name='total' id='total7' value="0" />
                    </form>

                    <form name="hat7" id="q7,total7" method="Post" action="payment.php"><table align="center"><tr>
                                <td><a href="payment.php"><input name="Select" type="button" value="Buy now"></a></td>
                            </tr></table></form>
                    <form name="hat7" id="qn7,total7" method="Post" action="Shopping_cart.php"><table align="center"><tr>
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
                        <td><a href="Shop-Cards.php"><span style="padding-left: 25px"><input name="Select" type="button" value="Go to Next Item"></span></a></td>
                    </tr></table>

            </form>

        </table>

        </br> </br> </br>

    </div>

</div>


<?php include 'footer.php'; ?>


</body>
</html>


