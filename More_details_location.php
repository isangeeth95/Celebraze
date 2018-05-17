<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>More details of location</title>

    <link rel="stylesheet" type="text/css" href="header.css">
    <link rel="stylesheet"  type="text/css" href="services.css">
    <script src="services.js" type="text/javascript"></script>

</head>
<body style="background-color: peachpuff; position: static">

<?php include 'header.php'; ?>

    <div class="container" style="background-color: blanchedalmond">

    <h2 style="color: saddlebrown; font-size: 30px"><span style="padding-left:80px">Our Services</span></h2>

    <div class="full-box">
        <div class="left_box">
            <div class="gallery">
                <img class="slideshow" src="" style="width: 300px">
                <img class="slideshow" src="" style="width: 300px">
                <img class="slideshow" src="" style="width: 300px">
                <img class="slideshow" src="" style="width: 300px">
                <img class="slideshow" src="" style="width: 300px">

                <button class="click" onclick="plus(-1)">&#10094</button>
                <button class="click" onclick="plus(1)">&#10095</button>

            </div>
        </div>

        </br></br>

        <div class="middle_box">
            <table align="center" border="1" style="background: url(nimshi/location.jpg)">
                <tr>

                    <th><h4 style="font-size: 20px; font-family:'KacstBook'; float: left">
                            Are you looking for a best location to held you birthday party...</br>
                            Whether it's for a kid,teenage or a adult we have multi indoor and </br>
                            outdoor venues designed with safe & clean environment for you </br>
                            to celebrate your function to your heart content.</br></br>
                            With our location we offer:</br></br>
                            **Swimming pool facilities for kids & adults.</br>
                            **Take away available</br>
                            **Air conditioned reception halls.</br>
                            **Play areas for toddlers up to the age</br>
                            of 4 and big kids(between 4-12).</br>
                            **Play room.</br>
                            **Serve alcohol</br>
                            **Smoking space</br>
                            **Free Wi-Fi facility.</br>
                            **Parking facility.</br></br>

                            Open hours:</br>
                            Weekdays- 11.00 a.m.-11.00 p.m.
                            Weekends- 11.30 a.m.-12 midnight

                            </br></br>
                            Prices:</br>
                            Negotiable prices per your requirements.</br></br>

                            <hr>

                            <form name="myForm" method="Post" action="">
                                <table align="center"><tr>
                                        <td><a href="Shop.html"><input name="Buy Now" type="button" value="Buy Now"></a></td>
                                        <td><a href="Shop.html"><input name="Add to the Cart"  type="button" value="Add to the Cart" ></a></td>
                                    </tr></table>
                            </form>
                        </h4></th>
                </tr>
            </table>

        </div>

        </br></br>

        <script>
            var Index=1;
            showslide(Index);
        </script>

    </div>

    </br>




</div>

<?php include 'footer.php'; ?>

</body>

</html>