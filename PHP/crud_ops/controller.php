<?php
    session_start();
    include("includes/sqlconnection.php");

    if(isset($_POST["save_record"])){
        //'mysqli_real_escape_string()' fixes string input that contains single or double quotes
        $title = mysqli_real_escape_string($conn,$_POST["txttitle"]);
        $author = $_POST["txtauthor"];
        $file_name = $_FILES["txtfile"]["name"];
        $blog = mysqli_real_escape_string($conn,$_POST["description"]);
        $date = $_POST["txtdate"];

        $sql = "INSERT INTO bloginfo(title,author,file_name,descript,date_)VALUES('$title', '$author', '$file_name', '$blog', '$date')";

        if($conn->query($sql) === TRUE) {
            move_uploaded_file($_FILES["txtfile"]["tmp_name"],"uploads/".$_FILES["txtfile"]["name"]);
            $_SESSION['status'] = "Record Inserted Successfully";
            header('location:index.php');
        }
        else{
            $_SESSION['status'] = "Insert failed :(";
            header('location:index.php');
        }

        $conn->close();
    }
    if(isset($_POST["update_record"])){
        $id = $_POST['txtid'];
        $title = mysqli_real_escape_string($conn,$_POST["txttitle"]);
        $author = $_POST["txtauthor"];
        $file_new = $_FILES["txtfile"]["name"];
        $file_old = $_POST["txtfile_old"];
        $blog = mysqli_real_escape_string($conn,$_POST["description"]);
        $date = $_POST["txtdate"];

        if($file_new != ''){
            $update_file = $file_new;
        }
        else{
            $update_file = $file_old;
        }

        echo "$update_file";

        $sql = "UPDATE bloginfo SET title='$title', author='$author', file_name='$update_file', descript='$blog', date_='$date' WHERE id='$id'";

        if($conn->query($sql) === TRUE) {
            move_uploaded_file($_FILES["txtfile"]["tmp_name"],"uploads/".$_FILES["txtfile"]["name"]);
            $_SESSION['status'] = "Record Updated Successfully";
            header('location:index.php');
        }
        else{
            $_SESSION['status'] = "Update failed :(";
            header('location:edit.php');
        }

        $conn->close();

    }

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $file_name = $_GET['file_name'];

        $sql = "DELETE FROM bloginfo WHERE id='$id'";

        if($conn->query($sql) === TRUE) {
            unlink("uploads/".$file_name);
            $_SESSION['status'] = "Record Deleted Successfully";
            header('location:index.php');
        }
        else{
            $_SESSION['status'] = "Delete failed :(";
            header('location:edit.php');
        }

        $conn->close();
    }
?>