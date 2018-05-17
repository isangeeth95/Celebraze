<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shop</title>


    <link rel="stylesheet" type="text/css" href="header.css">
    <link rel="stylesheet"  type="text/css" href="Shop.css"/>
    <script src="Shop-Gifts.js" type="text/javascript"></script>

</head>
<body style="background-color: lightskyblue; position: static">

<?php include 'header.php'; ?>

<div class="container" style="background-color: blanchedalmond; min-height: 1500px;">

    <div class="beginBox">
        <span style="padding-left:350px"><img src="nimshi/PIC.gif"></span>

        <h1><span style="padding-left:80px">Select Items</span></h1>

        <h3>
            <span style="padding-left:300px">Every birthday celebration in life is a momentous occasion</span></br>
            <span style="padding-left:350px">& planning it perfect is what we do best....</span></br>
            <span style="padding-left:400px">From the first birth to an ovefr the hill B'Day party,</span></br>
            <span style="padding-left:450px">we have fabulous items you need.....</span>
        </h3>

    </div>

    </br>

    <div class="scrollmenu" style="background-color:papayawhip">

        <a href="Shop-Hat.php">B'day Hat
            <img src="nimshi/hat.jpg" alt="hats" width="150" height="130">
        </a><span style="padding-left:100px"></span>
        <a href="Shop-Cards.php">B'day Cards
            <img src="nimshi/card.jpg" alt="card" width="150" height="130">
        </a><span style="padding-left:130px"></span>
        <a href="Shop-invitations.php">B'day Invitations
            <img src="nimshi/invitations.jpg" alt="invitation" width="150" height="130">
        </a><span style="padding-left:180px"></span>
        <a href="Shop-Candle.php">Candles
            <img src="nimshi/candle.jpg" alt="candles" width="150" height="130">
        </a><span style="padding-left:90px"></span>
        <a href="Shop-Balloon.php">Balloons
            <img src="nimshi/balloon.jpg" alt="ballons" width="150" height="130">
        </a><span style="padding-left:90px"></span>
        <a href="Shop-Cupcake.php">Cupcake Papers
            <img src="nimshi/cupcake.jpg" alt="cup cakes" width="150" height="130">
        </a><span style="padding-left:90px"></span>

    </div>

    <h1><span style="padding-left:80px">Featured Items</span></h1>


    <div class="box">
        <img src="nimshi/G1.jpg" width="100" height="90">
        <ul>
            <li>Product Name-Gift pack</li>
            <li>Model Number-BDG001</li>
            <li>Price-LKR 2500.00</li>
        </ul>
    </div>

    <div class="box">
        <img src="nimshi/G2.jpg" width="100" height="90">
        <ul>
            <li>Product Name-Gift pack</li>
            <li>Model Number-BDG002</li>
            <li>Price-LKR 2000.00</li>
        </ul>
    </div>

    <div class="box">
        <img src="nimshi/G4.jpg" width="90" height="90">
        <ul>
            <li>Product Name-Flower Bouquet</li>
            <li>Model Number-BDG003</li>
            <li>Price-LKR 3000.00</li>
        </ul>
    </div>

    <div class="box">
        <img src="nimshi/G3.jpg" width="100" height="90">
        <ul>
            <li>Product Name-Special</li>
            <li>Model Number-BDG004</li>
            <li>Price-LKR 1750.00</li>
        </ul>
    </div>

    <div class="box">
        <img src="nimshi/G5.jpg" width="100" height="90">
        <ul>
            <li>Product Name-Teddy Bear</li>
            <li>Model Number-BDG005</li>
            <li>Price-LKR 1200.00</li>
        </ul>
    </div>

    <div class="box">
        <img src="nimshi/G6.png" width="100" height="90">
        <ul>
            <li>Product Name-Chocolate Box</li>
            <li>Model Number-BDG006</li>
            <li>Price-LKR 1500.00</li>
        </ul>
    </div>

    <div class="box">
        <img src="nimshi/G7.jpg" width="120" height="85">
        <ul>
            <li>Product Name-Bat Man Pack</li>
            <li>Model Number-BDG007</li>
            <li>Price-LKR 1700.00</li>
        </ul>
    </div>

    <div class="box">
        <img src="nimshi/G8.jpg" width="130" height="90">
        <ul>
            <li>Product Name-Colour Set</li>
            <li>Model Number-BDG008</li>
            <li>Price-LKR 1700.00</li>
        </ul>
    </div>

    <div class="box1" style="float: right; padding-right: 200px">
        <form name="myForm" method="Post" action="Payment.php">
            <table>
                <tr>
                    <td>Model No:</td>
                    <td><select>
                            <option onclick="return Item_Price1();" id="model_no1" value="1">BDG001</option>
                            <option onclick="return Item_Price2();" id="model_no2" value="2">BDG002</option>
                            <option onclick="return Item_Price3();" id="model_no3" value="3">BDG003</option>
                            <option onclick="return Item_Price4();" id="model_no4" value="4">BDG004</option>
                            <option onclick="return Item_Price5();" id="model_no5" value="5">BDG005</option>
                            <option onclick="return Item_Price6();" id="model_no6" value="6">BDG006</option>
                            <option onclick="return Item_Price7();" id="model_no7" value="7">BDG007</option>
                            <option onclick="return Item_Price8();" id="model_no8" value="8">BDG008</option>
                        </select></td>

                </tr>
                <tr>
                    <td>Item Price:</td>
                    <td><p id="price"></p></td>
                </tr>
                <tr>
                    <td>Quantity:</td>
                    <td><input id="qnt" type="number" min="0" name="qnt"/></td>
                </tr>
                <tr>
                    <td>Total Price:</td>
                    <td><input id="total" type="text" name="total_price" /></td>
                </tr>
                <tr>
                    <td><span style="padding-left:50px"><input type="submit" value="Buy Now"></span></td>
                    <td><span style="padding-left:50px"><input type="submit" value="Add to the Cart"></span></td>
                </tr>
            </table>
        </form>
    </div>


</div>

<?php include 'footer.php'; ?>

</body>
</html>