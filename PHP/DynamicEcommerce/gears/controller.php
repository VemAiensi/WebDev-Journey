<?php
    session_start();
    include("connection.php");
    include("functions.php");

    if(isset($_POST["login"])){
        $user = $_POST["username"];
        $passwrd = $_POST["password"];
        $sql = "SELECT * from users WHERE username='$user'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();

        if($row["password"] == $passwrd){
            header("location:../index.php?user_id=$row[user_id]");
        }else{
            header("location:../index.php");
            echo "wrong password";
        }
    }

    if(isset($_POST["create"])){
        $user_name = $_POST["username"];
        $display_name = $_POST["display_name"];
        $password = $_POST["password"];
        $pic = $_FILES["pic"]["name"];

        $sql = "INSERT INTO users (username,display_name,password,pic)VALUES('$user_name', '$display_name', '$password', '$pic')";
        
        if($conn->query($sql) === TRUE) {
            move_uploaded_file($_FILES["pic"]["tmp_name"],"../user_profiles/".$_FILES["pic"]["name"]);

            $sql = "SELECT * from users WHERE username='$user_name'";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            $_SESSION['status'] = "<div class='alert alert-primary' role='alert'>
                                    Account Created Successfully
                                    </div>";
            header('location:../index.php?user_id='.$row['user_id']);
        }
        else{
            $_SESSION['status'] = "<div class='alert alert-primary' role='alert'>
                                    Creation Failed
                                    </div>";
            header('location:index.php');
        }
    }

    if(isset($_POST["editAccount"])){
        $user_id = $_POST["user_id"];
        $username = $_POST["username"];
        $pic = $_FILES["pic"]["name"];
        $pic_old = $_POST["pic_old"];
        $display_name = $_POST["display_name"];
        $old_pass = $_POST["old_pass"];
        $new_pass = $_POST["new_pass"];
        
        $sql = "SELECT * FROM users WHERE user_id=$user_id";

        $result = $conn->query($sql);
        $row = $result->fetch_assoc();

        if($row['password']==$old_pass){
            if($pic != ''){
                $update_file = $pic;
            }
            else{
                $update_file = $pic_old;
            }
    
            $sql1 = "UPDATE users SET display_name='$display_name' WHERE username='$username';";
            $sql2 = "UPDATE users SET pic='$update_file' WHERE username='$username';";
            $sql3 = "UPDATE users SET password='$new_pass' WHERE username='$username';";
    
            if($conn->query($sql1) === TRUE && $conn->query($sql2) === TRUE && $conn->query($sql3) === TRUE) {
                move_uploaded_file($_FILES["pic"]["tmp_name"],"../user_profiles/".$_FILES["pic"]["name"]);
                header('location:../account.php?user_id='.$user_id);
            }
            else{
                header('location:../account.php?user_id=1'.$user_id);
            }
        }
    }

    if(isset($_POST["addPic"])){
        $prod_id = $_POST["prod_id"];
        $pic = $_FILES["prod_pic"]["name"];

        $sql = "INSERT INTO prod_images (prod_id,imgsrc)VALUES('$prod_id','$pic')";
        
        if($conn->query($sql) === TRUE) {
            move_uploaded_file($_FILES["prod_pic"]["tmp_name"],"../prod_imgs/".$_FILES["prod_pic"]["name"]);
            $_SESSION['status'] = "<div class='alert alert-primary' role='alert'>
                                    Pic added Successfully
                                    </div>";
            header('location:../editProduct.php?prod_id='.$prod_id);
        }
        else{
            $_SESSION['status'] = "<div class='alert alert-primary' role='alert'>
                                    Creation Failed
                                    </div>";
            header('location:../editProduct.php?prod_id='.$prod_id);
        }
    }

    if(isset($_GET["img_id"])){
        $id = $_GET["img_id"];

        $sql0 = "SELECT * FROM prod_images WHERE img_id=$id";

        $result = $conn->query($sql0);
        $row = $result->fetch_assoc();
        $prod_id = $row['prod_id'];
        $pic_name = $row['imgsrc'];

        $sql = "DELETE FROM prod_images WHERE img_id='$id'";

        if($conn->query($sql) === TRUE) {
            unlink("../prod_imgs/".$pic_name);
            header('location:../editProduct.php?prod_id='.$prod_id);
        }
        else{
            header('location:../editProduct.php?prod_id='.$prod_id);
        }

        $conn->close();
    }

    if(isset($_POST["addProduct"])){
        // Prepare the SQL statement with placeholders
        $sql = "INSERT INTO product (prod_name, details, material, weight, price, stock) VALUES (?, ?, ?, ?, ?, ?)";

        // Prepare the statement
        $stmt = $conn->prepare($sql);

        // Bind parameters
        $stmt->bind_param("ssssdi", $prod_name, $details, $material, $weight, $price, $stock);

        // Set parameters and execute
        $prod_name = $_POST["prod_name"];
        $details = $_POST["details"];
        $material = $_POST["material"];
        $weight = $_POST["weight"]; // Example weight (replace with actual value)
        $price = $_POST["price"]; // Example price (replace with actual value)
        $stock = $_POST["stock"]; // Example stock (replace with actual value)

        $stmt->execute();

        // Check for successful insertion
        if ($stmt->affected_rows > 0) {
            echo "Record inserted successfully.";
            header('location:../index.php?user_id=1');
        } else {
            echo "Error: " . $conn->error;
            header('location:../index.php?user_id=1');
        }

        // Close statement and connection
        $stmt->close();
        $conn->close();
    }

    if(isset($_POST["editProductDetails"])){
        $prod_id = $_POST["prod_id"];
        $prod_name = $_POST["prod_name"];
        $details = $_POST["details"];
        $material = $_POST["material"];
        $weight = $_POST["weight"];
        $price = $_POST["price"];
        $stock = $_POST["stock"];

        $sql = "UPDATE product 
                SET prod_name='$prod_name', details='$details', material='$material', weight='$weight', price='$price', stock='$stock'
                WHERE prod_id='$prod_id';";
            
            if($conn->query($sql)===TRUE) {
                header('location:../index.php?user_id=1');
            }
            else{
                header('location:../index.php?user_id=1');
            }
        }

        if(isset($_GET["prod_id"])){
            $id = $_GET["prod_id"];
    
            $sql = "DELETE FROM product WHERE prod_id='$id'";

            if($conn->query($sql) === TRUE) {
                $sql2 = "SELECT * FROM prod_images WHERE prod_id='$id'";
                $result = $conn->query($sql2);

                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        $sql3 = "DELETE FROM prod_images WHERE img_id='$row[img_id]'";
                        if($conn->query($sql3) === TRUE) {
                            unlink("../prod_imgs/".$row['imgsrc']);
                        }
                    }
                }

                header('location:../index.php?user_id=1');
            }
            else{
                header('location:../index.php?user_id=1');
            }
    
            $conn->close();
        }

        if(isset($_GET["user_id"])){
            $id = $_GET["user_id"];
    
            $sql0 = "SELECT * FROM users WHERE user_id=$id";
    
            $result = $conn->query($sql0);
            $row = $result->fetch_assoc();
            $pic_name = $row['pic'];
    
            $sql = "DELETE FROM users WHERE user_id='$id'";
    
            if($conn->query($sql) === TRUE) {
                if($row['pic'])
                unlink("../user_profiles/".$pic_name);
                header('location:../accountList.php?');
            }
            else{
                header('location:../account.php?');
            }
    
            $conn->close();
        }
?>