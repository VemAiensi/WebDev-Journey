<?php
    session_start();
    include("sqlconnection.php");

    if(isset($_POST["save_record"])){
        //'mysqli_real_escape_string()' fixes string input that contains single or double quotes
        $prod_name = $_POST["prod_name"];
        $pic = $_FILES["pic"]["name"];
        $description = $_POST["description"];
        $price = $_POST["price"];

        $sql = "INSERT INTO data(prod_name,pic,description,price)VALUES('$prod_name', '$pic', '$description', '$price')";

        if($conn->query($sql) === TRUE) {
            move_uploaded_file($_FILES["pic"]["tmp_name"],"../uploads/".$_FILES["pic"]["name"]);
            $_SESSION['status'] = "Record Inserted Successfully";
            header('location:../manage.php');
        }
        else{
            $_SESSION['status'] = "Insert failed :(";
            header('location:manage.php');
        }

        $conn->close();
    }
    if(isset($_POST["update_record"])){
        $id = $_POST['txtid'];
        $prod_name = $_POST["prod_name"];
        $pic_new = $_FILES["pic_new"]["name"];
        $pic_old = $_POST["pic_old"];
        $description = $_POST["description"];
        $price = $_POST["price"];

        if($pic_new != ''){
            $update_file = $pic_new;
        }
        else{
            $update_file = $pic_old;
        }

        echo "$update_file";

        $sql = "UPDATE data SET prod_name='$prod_name', pic='$update_file', description='$description', price='$price' WHERE id='$id'";

        if($conn->query($sql) === TRUE) {
            move_uploaded_file($_FILES["pic_new"]["tmp_name"],"../uploads/".$_FILES["pic_new"]["name"]);
            $_SESSION['status'] = "Record Updated Successfully";
            header('location:../manage.php');
        }
        else{
            $_SESSION['status'] = "Update failed :(";
            header('location:edit.php');
        }

        $conn->close();

    }

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $pic = $_GET['pic'];

        $sql = "DELETE FROM data WHERE id='$id'";

        if($conn->query($sql) === TRUE) {
            unlink("../uploads/".$pic);
            $_SESSION['status'] = "Record Deleted Successfully";
            header('location:../manage.php');
        }
        else{
            $_SESSION['status'] = "Delete failed :(";
            header('location:../manage.php');
        }

        $conn->close();
    }
?>