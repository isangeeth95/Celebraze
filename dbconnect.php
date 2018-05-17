<?php

// Connect the Server

$serverName = "localhost";
$userName   = "root";
$password   = "";
$dbName     = "Celebraze";

$conn = new mysqli($serverName, $userName, $password, $dbName);

if ($conn -> connect_error){
    $message1= "Failed to connect to Celebraze database";
    echo "<script type='text/javascript'>alert('$message1');</script>". mysqli_connect_error();
}

