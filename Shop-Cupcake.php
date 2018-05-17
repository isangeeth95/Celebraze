<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cup cakes shop</title>

    <link rel="stylesheet" type="text/css" href="header.css">
    <link rel="stylesheet"  type="text/css" href="Shop-Cupcake.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="Shop-Items.js" type="text/javascript"></script>

</head>

<body style="background-color: lightskyblue; position: static">

<?php include 'header.php'; ?>

<div class="container" style="background: url(nimshi/EE.jpg)">

    <h2><span style="padding-left:550px">Details of Cupcake Paper packets</span></h2>

    <div align="center">
        <table cellspacing="1"  cellpaddind="4" border="3">

            <tr>
                <th width="100" >Image of Available Design</th>
                <th width="100" >Model Number</th>
                <th width="600" > Price(per one)</th>
            </tr>

            <tr align="center">
                <td><img src="nimshi/CPP001.jpg" width="180" height="200"></td>
                <td>#CPP001</td>
                <td>
                    <form name="cup1" >
                        <br> 10 LKR
                        <br> Please Select Quantity
                        <input type='button'  name='subtract' onclick='Total("q1,qn1",-1,"total1",10);' value='-'/>
                        <input type='button' name='add' onclick='Total("q1,qn1",1,"total1",10);' value='+'/>
                        <input type='text' name='qty' id='q1,qn1' readonly=true value="0"/>
                        <input type='text' name='total' id='total1' value="0" />
                    </form>

                    <form name="cup1" id="q1,total1" method="Post" action="payment.php"><table align="center"><tr>
                                <td><a href="payment.php"><input name="Select" type="button" value="Buy now"></a></td>
                            </tr></table></form>
                    <form name="cup1" id="qn1,total1" method="Post" action="Shopping_cart.php"><table align="center"><tr>
                                <td><input name="Add to the Cart"  type="button" value="Add to the Cart" ></td>
                            </tr></table></form>
                </td>
            </tr>

            <tr align="center">
                <td><img src="nimshi/CPP002.jpg" width="180" height="200"></td>
                <td>#CPP002</td>
                <td>
                    <form name="cup2" >
                        <br> 15 LKR
                        <br> Please Select Quantity
                        <input type='button'  name='subtract' onclick='Total("q2,qn2",-1,"total2",15);' value='-'/>
                        <input type='button' name='add' onclick='Total("q2,qn2",1,"total2",15);' value='+'/>
                        <input type='text' name='qty' id='q2,qn2' readonly=true value="0"/>
                        <input type='text' name='total' id='total2' value="0" />
                    </form>

                    <form name="cup2" id="q2,total2" method="Post" action="payment.php"><table align="center"><tr>
                                <td><a href="payment.php"><input name="Select" type="button" value="Buy now"></a></td>
                            </tr></table></form>
                    <form name="cup2" id="qn2,total2" method="Post" action="Shopping_cart.php"><table align="center"><tr>
                                <td><input name="Add to the Cart"  type="button" value="Add to the Cart" ></td>
                            </tr></table></form>
                </td>
            </tr>

            <tr align="center">
                <td><img src="nimshi/design1.png" width="300" height="250"></td>
                <td>#CPP003</td>
                <td>
                    <form name="cup3" >
                        <br> 25 LKR
                        <br> Please Select Quantity
                        <input type='button'  name='subtract' onclick='Total("q3,qn3",-1,"total3",25);' value='-'/>
                        <input type='button' name='add' onclick='Total("q3,qn3",1,"total3",25);' value='+'/>
                        <input type='text' name='qty' id='q3,qn3' readonly=true value="0"/>
                        <input type='text' name='total' id='total3' value="0" />
                    </form>

                    <form name="cup3" id="q3,total3" method="Post" action="payment.php"><table align="center"><tr>
                                <td><a href="payment.php"><input name="Select" type="button" value="Buy now"></a></td>
                            </tr></table></form>
                    <form name="cup3" id="qn3,total3" method="Post" action="Shopping_cart.php"><table align="center"><tr>
                                <td><input name="Add to the Cart"  type="button" value="Add to the Cart" ></td>
                            </tr></table></form>
                </td>
            </tr>

            <tr align="center">
                <td><img src="nimshi/CPP004.jpg" width="180" height="200"></td>
                <td>#CPP004</td>
                <td>
                    <form name="cup4" >
                        <br> 40 LKR
                        <br> Please Select Quantity
                        <input type='button'  name='subtract' onclick='Total("q4,qn4",-1,"total4",40);' value='-'/>
                        <input type='button' name='add' onclick='Total("q4,qn4",1,"total4",40);' value='+'/>
                        <input type='text' name='qty' id='q4,qn4' readonly=true value="0"/>
                        <input type='text' name='total' id='total4' value="0" />
                    </form>

                    <form name="cup4" id="q4,total4" method="Post" action="payment.php"><table align="center"><tr>
                                <td><a href="payment.php"><input name="Select" type="button" value="Buy now"></a></td>
                            </tr></table></form>
                    <form name="cup4" id="qn4,total4" method="Post" action="Shopping_cart.php"><table align="center"><tr>
                                <td><input name="Add to the Cart"  type="button" value="Add to the Cart" ></td>
                            </tr></table></form>
                </td>

            </tr>

            <tr align="center">
                <td><img src="nimshi/CPP005.jpg" width="300" height="300"><img src="design.png" width="450" height="500"></td>
                <td>#CPP005</td>
                <td>
                    <form name="cup5" >
                        <br> 35 LKR
                        <br> Please Select Quantity
                        <input type='button'  name='subtract' onclick='Total("q5,qn5",-1,"total5",35);' value='-'/>
                        <input type='button' name='add' onclick='Total("q5,qn5",1,"total5",35);' value='+'/>
                        <input type='text' name='qty' id='q5,qn5' readonly=true value="0"/>
                        <input type='text' name='total' id='total5' value="0" />
                    </form>

                    <form name="cup5" id="q5,total5" method="Post" action="payment.php"><table align="center"><tr>
                                <td><a href="payment.php"><input name="Select" type="button" value="Buy now"></a></td>
                            </tr></table></form>
                    <form name="cup5" id="qn5,total5" method="Post" action="Shopping_cart.php"><table align="center"><tr>
                                <td><input name="Add to the Cart"  type="button" value="Add to the Cart" ></td>
                            </tr></table></form>
                </td>

            </tr>

            <tr align="center">
                <td><img src="nimshi/CPP006.png" width="250" height="200"></td>
                <td>#CPP006</td>
                <td>
                    <form name="cup5" >
                        <br> 80 LKR
                        <br> Please Select Quantity
                        <input type='button'  name='subtract' onclick='Total("q6,qn6",-1,"total6",80);' value='-'/>
                        <input type='button' name='add' onclick='Total("q6,qn6",1,"total6",80);' value='+'/>
                        <input type='text' name='qty' id='q6,qn6' readonly=true value="0"/>
                        <input type='text' name='total' id='total6' value="0" />
                    </form>

                    <form name="cup6" id="q6,total6" method="Post" action="payment.php"><table align="center"><tr>
                                <td><a href="payment.php"><input name="Select" type="button" value="Buy now"></a></td>
                            </tr></table></form>
                    <form name="cup6" id="qn6,total6" method="Post" action="Shopping_cart.php"><table align="center"><tr>
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
                    </tr></table>

            </form>

        </table>


        </br> </br> </br>

    </div>

</div>



<?php include 'footer.php'; ?>


</body>
</html>
