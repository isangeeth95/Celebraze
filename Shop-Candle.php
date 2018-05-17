<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Candles shop</title>

    <link rel="stylesheet" type="text/css" href="header.css">
    <link rel="stylesheet"  type="text/css" href="Shop-Candle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="Shop-Items.js" type="text/javascript"></script>

</head>

<body style="background-color: lightskyblue; position: static">

<?php include 'header.php'; ?>

<div class="container" style="background: url(nimshi/AA.png)">

    <h2><span style="padding-left:550px">Details of Candle packets</span></h2>

    <div align="center">
        <table cellspacing="1"  cellpaddind="4" border="3">

            <tr>
                <th width="100" >Image of Available Design</th>
                <th width="100" >Model Number</th>
                <th width="600">Price(per packet)</th>
            </tr>

            <tr align="center">
                <td><img src="nimshi/BC001.png" width="180" height="200"><p>6 colours in one packet</p></td>
                <td>BC001</td>
                <td>
                    <form name="candle1" >
                        <br> 100 LKR
                        <br> Please Select Quantity
                        <input type='button'  name='subtract' onclick='Total("q1,qn1",-1,"total1",100);' value='-'/>
                        <input type='button' name='add' onclick='Total("q1,qn1",1,"total1",100);' value='+'/>
                        <input type='text' name='qty' id='q1,qn1' readonly=true value="0"/>
                        <input type='text' name='total' id='total1' value="0" />
                    </form>

                    <form name="candle1" id="q1,total1" method="Post" action="payment.php"><table align="center"><tr>
                                <td><a href="payment.php"><input name="Select" type="button" value="Buy now"></a></td>
                            </tr></table></form>
                    <form name="candle1" id="qn1,total1" method="Post" action="Shopping_cart.php"><table align="center"><tr>
                                <td><input name="Add to the Cart"  type="button" value="Add to the Cart" ></td>
                            </tr></table></form>
                </td>
            </tr>

            <tr align="center">
                <td><img src="nimshi/BC002.jpg" width="200" height="200"></td>
                <td>BC002</td>
                <td>
                    <form name="candle2" >
                        <br> 80 LKR
                        <br> Please Select Quantity
                        <input type='button'  name='subtract' onclick='Total("q2,qn2",-1,"total2",80);' value='-'/>
                        <input type='button' name='add' onclick='Total("q2,qn2",1,"total2",80);' value='+'/>
                        <input type='text' name='qty' id='q2,qn2' readonly=true value="0"/>
                        <input type='text' name='total' id='total2' value="0" />
                    </form>

                    <form name="candle2" id="q2,total2" method="Post" action="payment.php"><table align="center"><tr>
                                <td><a href="payment.php"><input name="Select" type="button" value="Buy now"></a></td>
                            </tr></table></form>
                    <form name="candle2" id="qn2,total2" method="Post" action="Shopping_cart.php"><table align="center"><tr>
                                <td><input name="Add to the Cart"  type="button" value="Add to the Cart" ></td>
                            </tr></table></form>
                </td>
            </tr>

            <tr align="center">
                <td><img src="nimshi/BC003.jpg" width="180" height="200"><p>Fire cracker B'day Candle</p></td>
                <td>BC003</td>
                <td>
                    <form name="candle3" >
                        <br> 240 LKR
                        <br> Please Select Quantity
                        <input type='button'  name='subtract' onclick='Total("q3,qn3",-1,"total3",240);' value='-'/>
                        <input type='button' name='add' onclick='Total("q3,qn3",1,"total3",240);' value='+'/>
                        <input type='text' name='qty' id='q3,qn3' readonly=true value="0"/>
                        <input type='text' name='total' id='total3' value="0" />
                    </form>

                    <form name="candle3" id="q3,total3" method="Post" action="payment.php"><table align="center"><tr>
                                <td><a href="payment.php"><input name="Select" type="button" value="Buy now"></a></td>
                            </tr></table></form>
                    <form name="candle3" id="qn3,total3" method="Post" action="Shopping_cart.php"><table align="center"><tr>
                                <td><input name="Add to the Cart"  type="button" value="Add to the Cart" ></td>
                            </tr></table></form>
                </td>
            </tr>

            <tr align="center">
                <td><img src="nimshi/BC004.png" width="180" height="200"><p>3 in one packet</p></td>
                <td>BC004</td>
                <td>
                    <form name="candle4" >
                        <br> 300 LKR
                        <br> Please Select Quantity
                        <input type='button'  name='subtract' onclick='Total("q4,qn4",-1,"total4",300);' value='-'/>
                        <input type='button' name='add' onclick='Total("q4,qn4",1,"total4",300);' value='+'/>
                        <input type='text' name='qty' id='q4,qn4' readonly=true value="0"/>
                        <input type='text' name='total' id='total4' value="0" />
                    </form>

                    <form name="candle4" id="q4,total4" method="Post" action="payment.php"><table align="center"><tr>
                                <td><a href="payment.php"><input name="Select" type="button" value="Buy now"></a></td>
                            </tr></table></form>
                    <form name="candle4" id="qn4,total4" method="Post" action="Shopping_cart.php"><table align="center"><tr>
                                <td><input name="Add to the Cart"  type="button" value="Add to the Cart" ></td>
                            </tr></table></form>
                </td>
            </tr>

            <tr align="center">
                <td><img src="nimshi/BC005.jpg" width="180" height="200"><p>3 colours in one packet</p></td>
                <td>BC005</td>
                <td>
                    <form name="candle5" >
                        <br> 450 LKR
                        <br> Please Select Quantity
                        <input type='button'  name='subtract' onclick='Total("q5,qn5",-1,"total5",450);' value='-'/>
                        <input type='button' name='add' onclick='Total("q5,qn5",1,"total5",450);' value='+'/>
                        <input type='text' name='qty' id='q5,qn5' readonly=true value="0"/>
                        <input type='text' name='total' id='total5' value="0" />
                    </form>

                    <form name="candle5" id="q5,total5" method="Post" action="payment.php"><table align="center"><tr>
                                <td><a href="payment.php"><input name="Select" type="button" value="Buy now"></a></td>
                            </tr></table></form>
                    <form name="candle5" id="qn5,total5" method="Post" action="Shopping_cart.php"><table align="center"><tr>
                                <td><input name="Add to the Cart"  type="button" value="Add to the Cart" ></td>
                            </tr></table></form>
                </td>
            </tr>

            <tr align="center">
                <td><img src="nimshi/BC006.jpg" width="180" height="200"><p>5 colours in one packet</p></td>
                <td>BC006</td>
                <td>
                    <form name="candle5" >
                        <br> 200 LKR
                        <br> Please Select Quantity
                        <input type='button'  name='subtract' onclick='Total("q6,qn6",-1,"total6",200);' value='-'/>
                        <input type='button' name='add' onclick='Total("q6,qn6",1,"total6",200);' value='+'/>
                        <input type='text' name='qty' id='q6,qn6' readonly=true value="0"/>
                        <input type='text' name='total' id='total6' value="0" />
                    </form>

                    <form name="candle6" id="q6,total6" method="Post" action="payment.php"><table align="center"><tr>
                                <td><a href="payment.php"><input name="Select" type="button" value="Buy now"></a></td>
                            </tr></table></form>
                    <form name="candle6" id="qn6,total6" method="Post" action="Shopping_cart.php"><table align="center"><tr>
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
                        <td><a href="Shop-Balloon.php"><span style="padding-left: 25px"><input name="Select" type="button" value="Go to Next Item"></span></a></td>
                    </tr></table>

            </form>

        </table>

        </br> </br> </br>

    </div>

</div>

<?php include 'footer.php'; ?>


</body>
</html>
