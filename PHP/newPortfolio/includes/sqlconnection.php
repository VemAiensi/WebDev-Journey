<?php
    $servername= "localhost";
    $username= "root";
    $password= "";
    $dbname= "portfolio";

    //create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    //to check connection
    if ($conn->connect_error) {
        die("Connection Failed". $conn->connect_error);
    }
?>