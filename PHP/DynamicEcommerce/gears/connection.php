<?php
    $servername= "localhost";
    $username= "root";
    $password= "";
    $dbname= "dynamicecommerce";

    //create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    //to check connection
    if ($conn->connect_error) {
        die("Connection Failed". $conn->connect_error);
    }
?>