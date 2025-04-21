<?php
    $servername= "localhost";
    $username= "root";
    $password= "";
    $dbname= "wind_e_commerce";

    //create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    //to check connection
    if ($conn->connect_error) {
        die("Connection Failed". $conn->connect_error);
    }
?>