<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width initial-scale=1">
    <link rel="stylesheet" type="text/css" href="login.css">
    <title>login</title>
</head>
<body>

<?php include 'header.php'; ?>

<div class="container">


<div class="form">
    <form action="login.php" method="post">
        <table class="formTable">
            <tr>
                <td><input type="email" placeholder="Enter Your Email" name="email"></td>
            </tr>
            <tr>
                <td><input type="password" placeholder="Enter the Password" name="password"></td>
            </tr>
        </table>
        <lable><a href="" class="fPass">forgot password ?<br></a></lable>
        <input type="submit" value="login" name="submitButton" id="sButton">
    </form>
</div>



    <div class="bottom">

    </div>
</div>

<?php include 'footer.php'; ?>

</body>
</html>


<?php

// Connect the Server

$serverName = "localhost";
$userName   = "root";
$password   = "";
$dbName     = "Celebraze";

$conn = new mysqli($serverName, $userName, $password, $dbName);

if ($conn -> connect_error){
    die ("Connection failed : ".$conn -> connect_error);
}
else {
    /* $message1= "Connected successfully";
     echo "<script type='text/javascript'>alert('$message1');</script>"; */
    echo "Connected successfully";
}



// get inputs and assign

if (isset($_POST['submitButton'])){
    $email = mysqli_real_escape_string($conn ,$_POST ['email']);
    $password = mysqli_real_escape_string($conn ,$_POST ['password']);

    // Error handling
    // Check empty fields
    if(empty($email) || empty($password)){
        $message= "Empty fields !!! fill all";
        echo "<script type='text/javascript'>alert('$message')</script>";
    }
    // check the email
    else{
        $sql = "SELECT * FROM user_celebraze WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        // if not match
        if($resultCheck < 1){
            $message= "Invalid email !!! try again";
            echo "<script type='text/javascript'>alert('$message')</script>";
        }
        // check the password
        else{
            $sql = "SELECT * FROM user_celebraze WHERE password='$password'";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            //if not match
            if($resultCheck < 1){
                $message= "Invalid password !!! try again";
                echo "<script type='text/javascript'>alert('$message')</script>";
            }
            else{
                session_start();
                //Log in the user
                $_SESSION['user_ID'] = $row['user_id'];
                $_SESSION['user_first'] = $row['fname'];
                $_SESSION['user_last'] = $row['lname'];
                $_SESSION['user_email'] = $email;

                $message= "welcome ".$_SESSION['user_email'];
                echo "<script type='text/javascript'>alert('$message')</script>";

                header("location: homePage.php");
                exit();
            }
        }

    }
}
$conn -> close();
?>