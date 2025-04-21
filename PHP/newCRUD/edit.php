<!DOCTYPE html>
<html>
    <head>
        <title>Edit Product</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="Assets/customStyle.css">

        <!--exclusive style-->
        <style>
            img{
                width: 100%;
                object-fit: cover;
            }
        </style>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Wind Instruments</a>
                <!--this is the hamburger icon-->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="manage.php">Manage</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Account
                            </a>

                            <ul class="dropdown-menu fade" aria-labelledby="navbarDropdown">
                                <form class="px-4 py-3">
                                    <div class="form-group">
                                      <label for="exampleDropdownFormEmail1">Email address</label>
                                      <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleDropdownFormPassword1">Password</label>
                                      <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                      <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="dropdownCheck">
                                        <label class="form-check-label" for="dropdownCheck">
                                          Remember me
                                        </label>
                                      </div>
                                    </div>
                                    <a href="manage.html" type="submit" class="btn btn-primary">Sign in</a>
                                </form>
                                <li><a class="dropdown-item" href="#">Log-in</a></li>
                                <li><a class="dropdown-item" href="#">Sign-up</a></li>
                            </ul>
                        </li>
                    </ul>

                    <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>

        <br>

            <form action="includes/controller.php" method="POST" enctype="multipart/form-data">
                <div class="container">
                    <div class="row">
                        <?php
                            getRecord($_GET['id']);
                        ?>
                    </div>
                </div>
            </form>
        
    </body>
</html>

<?php
    function getRecord($recno){
        include("includes/sqlconnection.php");
        $sql = "SELECT * from data WHERE id='$recno'";
        $result = $conn->query($sql);

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                echo "
                <div class='col col-md-8'>
                    <img src='uploads/".$row['pic']."'>

                    <input type='hidden' name='pic_old' value='".$row['pic']."'>
                    <label class='form-label'>Change Picture</label>
                    <input type='file' class='form-control' name='pic_new'></input>
                    
                </div>

                <div class='col col-md-4'>
                    <div class='mb-3'>
                        <input type='hidden' name='txtid' value='".$row['id']."'>
                        <label class='form-label'>Product Name</label>
                        <input type='text' class='form-control form-control-lg' name='prod_name' value='".$row['prod_name']."'>
                    </div>
                
                    <div class='mb-3'>
                        <label class='form-label'>Description</label>
                        <textarea class='form-control form-control-lg' name='description' rows='3'>".$row['description']."</textarea>
                    </div>
                
                    <div class='mb-3'>
                        <label class='form-label'>Price</label>
                        <input type='text' class='form-control form-control-lg' name='price' value='".$row['price']."'>
                    </div>

                    <div class='container d-flex justify-content-end'>
                        <button type='button' class='btn btn-secondary'>Cancel</button>
                        &nbsp
                        <button type='submit' name='update_record' class='btn btn-primary'>Save Changes</button>
                    </div>
                </div>
                ";
            }
        }
        else{
            echo "No Record Found";

        }

        $conn->close();
    }
?>