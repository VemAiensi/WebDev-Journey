<!DOCTYPE html>
<?php session_start();?>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="Assets/customStyle.css">

        <!--exclusive style-->
        <style>
            .add{
                background-color:cornflowerblue;
                font-size: 100px;
                font-weight: bolder;
                color: white;
                border-radius: 20px;
                padding: 30px;
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

        <?php
            if(isset($_SESSION["status"]) && $_SESSION != ''){
                echo"<br><h3 class='text-center'>".$_SESSION["status"]."</h3><br>";
                
                unset($_SESSION["status"]);
            }
        ?>

        <br>
        

        <!--Content-->
        <div class="container">
            <div class="row">
                
                <?php viewall()?>

                <div class="col">
                    <!-- Button trigger modal -->
                    <div class="container" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" >
                        <div class="add d-flex justify-content-center align-self-center">
                        <svg fill="#ffffff" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="72px" height="72px" viewBox="0 0 45.402 45.402" xml:space="preserve" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path d="M41.267,18.557H26.832V4.134C26.832,1.851,24.99,0,22.707,0c-2.283,0-4.124,1.851-4.124,4.135v14.432H4.141 c-2.283,0-4.139,1.851-4.138,4.135c-0.001,1.141,0.46,2.187,1.207,2.934c0.748,0.749,1.78,1.222,2.92,1.222h14.453V41.27 c0,1.142,0.453,2.176,1.201,2.922c0.748,0.748,1.777,1.211,2.919,1.211c2.282,0,4.129-1.851,4.129-4.133V26.857h14.435 c2.283,0,4.134-1.867,4.133-4.15C45.399,20.425,43.548,18.557,41.267,18.557z"></path> </g> </g></svg>
                        </div>
                    </div>
                        
                        <!-- Modal for insert-->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Add Product</h5>
                                        
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    
                                    <div class="modal-body">
                                        <form action="includes/controller.php" method="POST" enctype="multipart/form-data">
                                            <div class="mb-3">
                                                <label class="form-label">Product Name</label>
                                                <input type="text" class="form-control" name="prod_name" placeholder="Wind Instrument">
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">Insert Picture</label>
                                                <input type="file" class="form-control" name="pic"></input>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">Description</label>
                                                <textarea class="form-control" name="description" rows="3"></textarea>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">Price</label>
                                                <input type="text" class="form-control" name="price">
                                            </div>
                                        

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" name="save_record" class="btn btn-primary">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                        
                </div>
            </div>
            <br><br>
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
                                        <div>
                                            <a href='edit.php?id=$row[id]'>
                                                <svg type='button'
                                                    width='64px' height='64px' viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg' fill='#000000' stroke='#000000'><g id='SVGRepo_bgCarrier' stroke-width='0'></g><g  stroke-linecap='round' stroke-linejoin='round'></g><g> <title></title> <g id='Complete'> <g id='edit'> <g> <path d='M20,16v4a2,2,0,0,1-2,2H4a2,2,0,0,1-2-2V6A2,2,0,0,1,4,4H8' fill='none' stroke='#000000' stroke-linecap='round' stroke-linejoin='round' stroke-width='2'></path> <polygon fill='none' points='12.5 15.8 22 6.2 17.8 2 8.3 11.5 8 16 12.5 15.8' stroke='#000000' stroke-linecap='round' stroke-linejoin='round' stroke-width='2'></polygon> </g> </g> </g> </g></svg>
                                            </a>

                                            <a href='includes/controller.php?id=$row[id]&pic=$row[pic]'>
                                                <svg type='button'
                                                    width='64px' height='64px' viewBox='0 0 24 24' fill='none'>

                                                    <g id='SVGRepo_bgCarrier' stroke-width='0'/>
                                                    
                                                    <g id='SVGRepo_tracerCarrier' stroke-linecap='round' stroke-linejoin='round'/>
                                                    
                                                    <g id='SVGRepo_iconCarrier'> <path d='M2.75 6.16667C2.75 5.70644 3.09538 5.33335 3.52143 5.33335L6.18567 5.3329C6.71502 5.31841 7.18202 4.95482 7.36214 4.41691C7.36688 4.40277 7.37232 4.38532 7.39185 4.32203L7.50665 3.94993C7.5769 3.72179 7.6381 3.52303 7.72375 3.34536C8.06209 2.64349 8.68808 2.1561 9.41147 2.03132C9.59457 1.99973 9.78848 1.99987 10.0111 2.00002H13.4891C13.7117 1.99987 13.9056 1.99973 14.0887 2.03132C14.8121 2.1561 15.4381 2.64349 15.7764 3.34536C15.8621 3.52303 15.9233 3.72179 15.9935 3.94993L16.1083 4.32203C16.1279 4.38532 16.1333 4.40277 16.138 4.41691C16.3182 4.95482 16.8778 5.31886 17.4071 5.33335H19.9786C20.4046 5.33335 20.75 5.70644 20.75 6.16667C20.75 6.62691 20.4046 7 19.9786 7H3.52143C3.09538 7 2.75 6.62691 2.75 6.16667Z' fill='#000000'/> <path d='M11.6068 21.9998H12.3937C15.1012 21.9998 16.4549 21.9998 17.3351 21.1366C18.2153 20.2734 18.3054 18.8575 18.4855 16.0256L18.745 11.945C18.8427 10.4085 18.8916 9.6402 18.45 9.15335C18.0084 8.6665 17.2628 8.6665 15.7714 8.6665H8.22905C6.73771 8.6665 5.99204 8.6665 5.55047 9.15335C5.10891 9.6402 5.15777 10.4085 5.25549 11.945L5.515 16.0256C5.6951 18.8575 5.78515 20.2734 6.66534 21.1366C7.54553 21.9998 8.89927 21.9998 11.6068 21.9998Z' fill='#000000'/> </g>
                                                </svg>
                                            </a>
                                        </div>
                                        
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

        if($count != 2){
            echo "</div>";
            $count = 0;
        }

        $conn->close();
    }

    function getData($recno){
        include("includes/sqlconnection.php");
        $sql = "SELECT * from data WHERE id='$recno'";
        $result = $conn->query($sql);

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                echo "
                    <div class='mb-3'>
                        <label class='form-label'>Product Name</label>
                        <input type='text' class='form-control' name='prod_name' value='".$row['prod_name']."'>
                    </div>
                
                    <div class='mb-3'>
                        <label class='form-label'>Insert Picture</label>
                        <input type='file' class='form-control' name='pic' value='".$row['pic']."'></textarea>
                    </div>
                
                    <div class='mb-3'>
                        <label class='form-label'>Description</label>
                        <textarea class='form-control' name='description' rows='3'>".$row['description']."</textarea>
                    </div>
                
                    <div class='mb-3'>
                        <label class='form-label'>Price</label>
                        <input type='text' class='form-control' name='price' value='".$row['price']."'>
                    </div>
                
                
                    <div class='modal-footer'>
                        <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                        <button type='submit' name='update_record' class='btn btn-primary'>Save</button>
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