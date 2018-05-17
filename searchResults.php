<?php

include "dbconnect.php";

if ($_SERVER["REQUEST_METHOD"]=="POST") {
    if (empty($_POST["search"])) {
        header("location:homePage.php");
    }

    $search_sql = "SELECT FROM item_celebraze WHERE item_category LIKE '%".$_POST["search"]."%'";
    $search_query = mysqli_query($conn, $search_sql);
    $result = mysqli_num_rows($search_query);
    echo "<script type='text/javascript'>alert('$result');</script>";

    if ($result > 0) {
      $search_rs = mysqli_fetch_assoc($search_query);
    //echo "<script type='text/javascript'>alert('$search_rs');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width initial-scale=1">
    <link rel="stylesheet" type="text/css" href="">
    <title>Search Results</title>
</head>
<body>

<?php include 'header.php'; ?>

<div class="container">

    <p>Search Results</p>

    <?php
        if ($result>0)
        {
            do{?>
    <p><a href=""><?php echo $search_rs["item_category"]; ?></a></p>
    <?php     }while($search_rs=mysqli_fetch_assoc($search_query));

        }

        else
            {
                echo "No search results found !";
            }

    ?>

    <div class="bottom"></div>
</div>

<?php include "footer.php"; ?>

</body>
</html>
