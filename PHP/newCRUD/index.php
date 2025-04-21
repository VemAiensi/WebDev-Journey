<!DOCTYPE html>
<?php session_start();?>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="Assets/customStyle.css">
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
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="manage.php">Manage</a>
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
        <!--Trying out-->
        <div class="container">
            <?php viewall(); ?>
        </div>
        
    </body>
</html>

<?php
    function viewall(){
        include("includes/sqlconnection.php");
        $sql = "SELECT * from data order by id";
        $result = $conn->query($sql);

        #just a counter for columns
        $count = 0;

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                if($count === 0){
                    echo "<div class='row'>";
                }

                echo "
                    <div class='col-md-6'>
                        <div class='container-md'>
                            <div class='card'>
                                <img src='uploads/$row[pic]' class='card-img-top'>
                                <div class='card-body'>
                                    <h5 class='card-title'>$row[prod_name]</h5>
                                    <p class='card-text'>$row[description]</p>
                                    <div class='d-md-flex justify-content-md-between'>
                                        <span class='price'>PHP $row[price]</span>
                                        <a href='#' class='btn btn-warning'>Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
                $count++;

                if($count === 2){
                    echo "</div>";
                    $count = 0;
                }
            }
        }
        else{
            echo "<br><h3 class='text-center'>No Item to Show</h3><br>";
        }

        $conn->close();
    }
?>