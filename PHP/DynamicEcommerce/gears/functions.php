<?php

function verifyAdmin($user_id) {
    include("gears/connection.php");
    $sql = "SELECT * from users WHERE user_id='$user_id'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    if ($row['username'] == 'vem.aiensi')
    {
        return true;
    }

    $conn->close();

    
}

function getUserDetails($user_id, $column){
    include("connection.php");
    $sql = "SELECT * from users WHERE user_id='$user_id'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    if($column == 'user_id'){
        return $row['user_id'];
    }
    elseif($column == 'username'){
        return $row['username'];
    }
    elseif($column == 'display_name'){
        return $row['display_name'];
    }
    elseif($column == 'password'){
        return $row['password'];
    }
    elseif($column == 'pic'){
        if($row['pic'] == null){
            return "default.jpg";
        }
        else{
            return $row['pic'];
        }
    }
}



function getAllUsers(){
    include("connection.php");
    $sql1 = "SELECT * FROM users";
    $result = $conn->query($sql1);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo "<div class='container bg-white col col-lg-8 rounded-3 mb-3'>
                    <div class='row p-3'>
                        <div class='col col-sm-1'>
                            <img src='user_profiles/<?php echo getUserDetails($row[user_id], 'pic')?>' class='w-100 rounded-circle' alt=''>
                        </div>
                        <div class='col col-sm-3'>
                            <span class='fw-bold'>USERNAME:</span><br>
                            <span class='fs-3'>$row[username]</span>
                        </div>
                        <div class='col col-sm-3 me-auto'>
                            <span class='fw-bold'>DISPLAY NAME:</span><br>
                            <span class='fs-3'>$row[display_name]</span>
                        </div>
                        ";

            if(verifyAdmin($row['user_id'])){
                echo "<div class='col col-sm-2'>
                            <span class='h3 text-success'>ADMIN
                            </span>
                        </div>
                    </div>
                </div>";
            }
            else{
                echo "<div class='col col-sm-1'>
                            <span><a type='button' class='fs-1 text-danger' href='gears/controller.php?user_id=$row[user_id]'>
                                    <i class='bi bi-trash-fill'></i>
                            </a></span><br> 
                        </div>
                    </div>
                </div>";
            }
        }
    }
}

function nav_user($user_id){
    include("connection.php");
    $sql = "SELECT * from users WHERE user_id='$user_id'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    $pic = getUserDetails($user_id, "pic");

    echo "<div class='nav-item dropdown'>
            <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
                <img src='user_profiles/$pic' class='rounded-circle' style='width:30px'>
                <span> $row[display_name]</span>
            </a>
            <ul class='dropdown-menu dropdown-menu-end text-center' aria-labelledby='navbarDropdown'>
                <a class='btn btn-primary' href='index.php'>Logout</a></li>
            </ul>
        </div>
        
        <a href='account.php?user_id=$user_id'><li class='nav-link btn btn-warning'>
            <i class='bi bi-cart-fill'></i>
        </li></a>";

    $conn->close();

}

function nav_default(){
    echo "<div class='nav-item dropdown'>
        <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
            <img src='user_profiles/default.jpg' class='rounded-circle' style='width:30px'>
            <span> Account</span>
        </a>
        <ul class='dropdown-menu dropdown-menu-end text-center' aria-labelledby='navbarDropdown'>
            <form action='gears/controller.php' method='POST' enctype='multipart/form-data'>
                
                    <div class='container'>
                        <div class='input-group mb-3'>
                            <span class='input-group-text'>@</span>
                            <input type='text' class='form-control' name='username' placeholder='Username'>
                        </div>
    
                    <div class='input-group mb-3'>
                        <span class='input-group-text'><i class='bi bi-key-fill'></i></span>
                        <input type='password' class='form-control' name='password' placeholder='Password'>
                    </div>
                </div>
                
                <li><hr class='dropdown-divider'></li>
                <button class='btn btn-primary' name='login'>Login</button></li>
            </form>
        </ul>
    </div>
    
    <a href='create.php'><li class='nav-link btn btn-primary text-white'>
        Create Account
    </li></a>";
}
function defaultIndex(){
    include("connection.php");
    $sql1 = "SELECT * FROM product";
    $result = $conn->query($sql1);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $sql2 = "SELECT * FROM prod_images WHERE prod_id='$row[prod_id]'";
            $result2 = $conn->query($sql2);
            if($result2->num_rows > 0){
                $row2 = $result2->fetch_assoc();
            }

            echo "
                <div class='col col-lg-4 mb-3'>
                    <div class='card'>
                        <img src='prod_imgs/$row2[imgsrc]' class='card-img-top'>
                        <div class='card-body'>
                            <h4 class='card-title text-truncate'>$row[prod_name]</h4>
                            <p class='card-text text-truncate'>$row[details]</p>
                            <div class='d-flex justify-content-between'>
                                <span class='h3 fw-bold text-success'>PHP $row[price]</span>
                                <a href='product.php?prod_id=$row[prod_id]' class='btn btn-warning'>Details</a>
                            </div>
                        </div>
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
function defaultUserIndex($user_id){
    include("connection.php");
    $sql1 = "SELECT * FROM product";
    $result = $conn->query($sql1);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $sql2 = "SELECT * FROM prod_images WHERE prod_id='$row[prod_id]'";
            $result2 = $conn->query($sql2);
            if($result2->num_rows > 0){
                $row2 = $result2->fetch_assoc();
            }

            echo "
                <div class='col col-lg-4 mb-3'>
                    <div class='card'>
                        <img src='prod_imgs/$row2[imgsrc]' class='card-img-top'>
                        <div class='card-body'>
                            <h4 class='card-title text-truncate'>$row[prod_name]</h4>
                            <p class='card-text text-truncate'>$row[details]</p>
                            <div class='d-flex justify-content-between'>
                                <span class='h3 fw-bold text-success'>PHP $row[price]</span>
                                <a href='product.php?prod_id=$row[prod_id] &user_id=$user_id' class='btn btn-warning'>Details</a>
                            </div>
                        </div>
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

function manageIndex(){
    include("connection.php");
    $sql1 = "SELECT * FROM product";
    $result = $conn->query($sql1);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo "
            <div class='container rounded bg-white  mb-5'>
                <div class='row'>
                    <div class='col col-md-3'>
                        <span class='fw-bold'>Product Name:</span><br>
                        <span class='h4 fw-bold text-truncate'>$row[prod_name]</span>
                    </div>
                    <div class='col col-md-3'>
                        <span class='fw-bold'>Description:</span><br>
                        <span class='h4'>
                            <p class='text-truncate'>
                            $row[details]</p>
                        </span>
                    </div>
                    <div class='col'>
                        <span class='fw-bold'>Material:</span><br>
                        <span class='h4'>$row[material]</span>
                    </div>
                    <div class='col'>
                        <span class='fw-bold'>Weight:</span><br>
                        <span class='h4'>$row[weight] kg</span>
                    </div>
                    <div class='col'>
                        <span class='fw-bold'>Price: </span><br>
                        <span class='fw-bold text-success'>PHP </span>
                        <span class='h4 fw-bold text-success'>$row[price]</span>
                    </div>
                    <div class='col'>
                        <span class='fw-bold'>Stock: </span><br>
                        <span class='h4 fw-bold text-danger'>$row[stock]</span>
                    </div>
                    <div class='col'>
                        <span class='fw-bold'>Edit </span><br>
                        
                        <div class='text-dark d-flex text-end me-4'>
                            <a type='button' class='fs-1' href='editProduct.php?prod_id=$row[prod_id]'>
                                <i class='bi bi-pencil-square'></i>
                            </a>
                            <a type='button' class='fs-1 text-danger' href='gears/controller.php?prod_id=$row[prod_id]'>
                                <i class='bi bi-trash-fill'></i>
                            </a>
                        </div>
                        
                    </div>
                </div>
                
                <hr>
                <div class='row'>
                    <div>Images</div>
            ";


            $sql2 = "SELECT * FROM prod_images WHERE prod_id='$row[prod_id]'";
            $result2 = $conn->query($sql2);
            if($result2->num_rows > 0){
                while($row2 = $result2->fetch_assoc()){
                    echo "
                    <div class='col col-sm-2 mb-2'>
                        
                        <img src='prod_imgs/$row2[imgsrc]' class='w-100 img-thumbnail' alt=''>
                        </a>
                    </div>
                    ";
            }

            echo "
                
                </div>
            </div>
            ";
            }
        }
    }
    else{
        echo "No Record Found";
    }

    $conn->close();
}

function getProductDetails($prod_id, $column){
    include("connection.php");
    $sql = "SELECT * from product WHERE prod_id='$prod_id'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    if($column == 'prod_id'){
        return $row['prod_id'];
    }
    elseif($column == 'prod_name'){
        return $row['prod_name'];
    }
    elseif($column == 'details'){
        return $row['details'];
    }
    elseif($column == 'material'){
        return $row['material'];
    }
    elseif($column == 'weight'){
        return $row['weight'];
    }
    elseif($column == 'price'){
        return $row['price'];
    }
    elseif($column == 'stock'){
        return $row['stock'];
    }
}

function getAllImages($prod_id){
    include("connection.php");
    $sql = "SELECT * FROM prod_images WHERE prod_id='$prod_id'";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo "
                <div class='col mb-2'>
                    <a href='gears/controller.php?img_id=$row[img_id]'>
                    <img src='prod_imgs/$row[imgsrc]' class='w-100 img-thumbnail' alt=''>
                    </a>
                </div>
                ";
            }
    }
}

function productCarousel($prod_id){
    echo "
    <div class='col col-lg-8 mb-3'>
        <div class='container-fluid mb-3'>
            <div id='productSlides' class='carousel slide mb-5' data-bs-ride='carousel'>
                <div class='carousel-inner'>
                    
            ";

    include("connection.php");
    $sql = "SELECT * FROM prod_images WHERE prod_id='$prod_id'";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        $count = 0;
        while($row = $result->fetch_assoc()){
            if($count == 0){
                echo "
                <div class='carousel-item active'>
                    <img src='prod_imgs/$row[imgsrc]' class='d-block w-100 productPic' alt='...'>
                </div>
                ";
            }
            else{
                echo "
                <div class='carousel-item'>
                    <img src='prod_imgs/$row[imgsrc]' class='d-block w-100 productPic' alt='...'>
                </div>
                ";
            }
            $count++;
        }
    }

    echo "
    </div>
            <button class='carousel-control-prev' type='button' data-bs-target='#productSlides' data-bs-slide='prev'>
                <span class='carousel-control-prev-icon' aria-hidden='true'></span>
                <span class='visually-hidden'>Previous</span>
            </button>
            <button class='carousel-control-next' type='button' data-bs-target='#productSlides' data-bs-slide='next'>
                <span class='carousel-control-next-icon' aria-hidden='true'></span>
                <span class='visually-hidden'>Next</span>
            </button>
        </div>   
    </div>
</div>";
}
?>