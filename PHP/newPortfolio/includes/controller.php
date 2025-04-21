<?php
    session_start();
    include("sqlconnection.php");

    if(isset($_POST["login"])){
        $user = $_POST["usernameInput"];
        $passwrd = $_POST["passwordInput"];
        $sql = "SELECT * from user WHERE username='$user'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();

        if($row["password"] == $passwrd){
            header("location:../index.php?id=$row[id]");
        }else{
            header("location:../login.php");
            echo "wrong password";
        }
    }

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
    if(isset($_POST["edit-section1"])){
        $brand = $_POST["brand"];
        $logo = $_FILES["logo"]["name"];
        $logo_old = $_POST["logo_old"];
        $subheading = $_POST["subHeading"];

        if($logo != ''){
            $update_file = $logo;
        }
        else{
            $update_file = $logo_old;
        }

        $sql1 = "UPDATE portfolio_details SET text_value='$brand' WHERE id_name='brand';";
        $sql2 = "UPDATE portfolio_assets SET logo_pic='$update_file' WHERE id='1';";
        $sql3 = "UPDATE portfolio_details SET text_value='$subheading' WHERE id_name='subheading';";

        if($conn->query($sql1) === TRUE && $conn->query($sql2) === TRUE && $conn->query($sql1) === TRUE) {
            move_uploaded_file($_FILES["logo"]["tmp_name"],"../Assets/".$_FILES["logo"]["name"]);
            header('location:../manage.php?id=1');
        }
        else{
            header('location:../manage.php?id=1');
        }
    }

    if(isset($_POST["edit-section2"])){
        $exp = $_POST["exp"];

        $sql = "UPDATE portfolio_details SET text_value='$exp' WHERE id_name='exp';";
        
        if($conn->query($sql) === TRUE) {
            header('location:../manage.php?id=1');
        }
        else{
            header('location:../manage.php?id=1');
        }
        $conn->close();
    }

    

    

    if(isset($_POST["add_link"])){
        $link = $_POST["link"];
        $sql = "INSERT INTO websites (link) VALUES ('$link')";

        if($conn->query($sql) === TRUE) {
            header('location:../manage.php?id=1');
        }
        else{
            header("location:../manage.php?id=1");
        }

        $conn->close();
    }

    if(isset($_GET["linkId"])){

        $id = $_GET["linkId"];

        $sql = "DELETE FROM websites WHERE id='$id'";

        if($conn->query($sql) === TRUE) {
            header('location:../manage.php?id=1');
        }
        else{
            header('location:../manage.php?id=1');
        }

        $conn->close();
    }

    // section 3 conditions
    if(isset($_POST["edit-section3"])){
        $skills = $_POST["skills"];
        $certs = $_POST["certs"];

        $sql1 = "UPDATE portfolio_details SET text_value='$skills' WHERE id_name='skill';";
        $sql2 = "UPDATE portfolio_details SET text_value='$certs' WHERE id_name='cert'";
        
        if($conn->query($sql1) === TRUE && $conn->query($sql2) === TRUE) {
            header('location:../manage.php?id=1');
        }
        else{
            header('location:../manage.php?id=1');
        }
        $conn->close();
    }

    if(isset($_POST['add_icon'])){
        $desc = $_POST["label"];
        $icon_name = $_FILES["iconInsert"]["name"];

        $sql="INSERT INTO skill_icon (`desc`,icon_name) VALUES ('$desc', '$icon_name')";

        if($conn->query($sql) === TRUE) {
            move_uploaded_file($_FILES["iconInsert"]["tmp_name"],"../Assets/icons-myexp/".$_FILES["iconInsert"]["name"]);
            header("location:../manage.php?id=1");
        }

        $conn->close();
    }

    if(isset($_POST['add_cert'])){
        $cert = $_FILES["inCert"]["name"];

        $sql="INSERT INTO certs (file_name) VALUES ('$cert')";

        if($conn->query($sql) === TRUE) {
            move_uploaded_file($_FILES["inCert"]["tmp_name"],"../Assets/certs/".$_FILES["inCert"]["name"]);
            header("location:../manage.php?id=1");
        }

        $conn->close();
    }

    if(isset($_GET["icon_name"])){
        $desc = $_GET["icon_name"];
        $icon = $_GET["file_name"];
        
        $sql = "DELETE FROM skill_icon WHERE `desc`='$desc'";

        if($conn->query($sql) === TRUE) {
            unlink("../Assets/icons-myexp/".$icon);
            header('location:../manage.php?id=1');
        }
        
        $conn->close();
    }

    if(isset($_GET["certId"])){
        $id = $_GET["certId"];
        $cert = $_GET["certImage"];
        
        $sql = "DELETE FROM certs WHERE id='$id'";

        if($conn->query($sql) === TRUE) {
            unlink("../Assets/certs/".$cert);
            header('location:../manage.php?id=1');
        }
        
        $conn->close();
    }

    // section 4 conditions
    if(isset($_POST["edit-section4"])){
        $about = $_POST["about"];
        $desc1raw = $_POST["desc1"];
        $desc2raw = $_POST["desc2"];
        $desc1 = mysqli_real_escape_string($conn, $desc1raw);
        $desc2 = mysqli_real_escape_string($conn, $desc2raw);
        $profPic = $_FILES["profPic"]["name"];
        $old_profPic = $_POST["old_profPic"];
        $imageAbout = $_FILES["imageAbout"]["name"];
        $old_image = $_POST["old_image"];

        if($profPic != ''){
            $update_profPic = $profPic;
        }
        else{
            $update_profPic = $old_profPic;
        }

        if($imageAbout != ''){
            $update_image = $imageAbout;
        }
        else{
            $update_image = $old_image;
        }

        $sql1 = "UPDATE portfolio_details SET text_value='$about' WHERE id_name='about';";
        $sql2 = "UPDATE portfolio_details SET text_value='$desc1' WHERE id_name='desc1'";
        $sql3 = "UPDATE portfolio_details SET text_value='$desc2' WHERE id_name='desc2'";
        $sql4 = "UPDATE portfolio_details SET text_value='$update_profPic' WHERE id_name='profile_pic'";
        $sql5 = "UPDATE portfolio_details SET text_value='$update_image' WHERE id_name='image'";
        
        if($conn->query($sql1) === TRUE &&
           $conn->query($sql2) === TRUE &&
           $conn->query($sql3) === TRUE &&
           $conn->query($sql4) === TRUE &&
           $conn->query($sql5) === TRUE)
        {
            move_uploaded_file($_FILES["profPic"]["tmp_name"],"../Assets/".$_FILES["profPic"]["name"]);
            move_uploaded_file($_FILES["imageAbout"]["tmp_name"],"../Assets/".$_FILES["imageAbout"]["name"]);
            header('location:../manage.php?id=1');
        }
        else{
            header('location:../manage.php?id=1');
        }
        $conn->close();
    }
?>