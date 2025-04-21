<?php
    $servername= "localhost";
    $username= "root";
    $password= "";
    $dbname= "blog";

    //create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    //to check connection
    if ($conn->connect_error) {
        die("Connection Failed". $conn->connect_error);
    }
    else{
        //echo "Connection Successful";
    }
?>