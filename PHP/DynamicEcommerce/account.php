<!DOCTYPE html>
<?php session_start();
 include('gears/functions.php');
?>
<html>
    <head>
        <title>VA | Account</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <div class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container">
                <div class="navbar-brand">Wind Instruments</div>
                
                <div>
                    <form class="input-group">
                        <input class="form-control" type="search" placeholder="What are you looking for?">
                        <button class="input-group-text  btn-warning"><i class="bi bi-search"> Search</i></button>
                    </form>
                </div>
                
                <div>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <a href="index.php">
                            <li class="nav-link btn btn-primary text-white">
                            Go Back
                            </li>
                        </a>
                    </ul>
                </div>
            </div>
        </div>

        <div style="height:100px">
        <!-- Just a spacer -->
        </div>

        <div class="container">
            <div class="row mb-5">
                <div class="col col-lg-3 me-5">
                    <img src="user_profiles/<?php echo getUserDetails($_GET['user_id'], "pic")?>"
                    class="w-100 rounded-circle">
                </div>

                <div class="col col-lg-6">
                    <span class="h2 fw-bold">Hello <?php echo getUserDetails($_GET['user_id'], "display_name")?>!</span>
                    <br><hr><br>
                    <span class="h4">Username: <?php echo getUserDetails($_GET['user_id'], "username")?></span><br>
                    <span class="h4">Display Name: <?php echo getUserDetails($_GET['user_id'], "display_name")?></span>
                </div>

                <div class="col col-lg-2">
                    <h1 class="text-dark text-end me-4" type="button" data-bs-toggle="modal" data-bs-target="#editAccount"><i class="bi bi-pencil-square"></i></h1>
                </div>
            </div>
            
            <!-- Modal for editing account -->
            <div class="modal fade" id="editAccount" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="gears/controller.php" method="POST" enctype="multipart/form-data">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Edit Account Details</h5>
                                            
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                                        
                            <div class="modal-body">
                                <input type="hidden" name="pic_old" value="<?php echo getUserDetails($_GET['user_id'], "pic")?>">
                                <input type="hidden" name="username" value="<?php echo getUserDetails($_GET['user_id'], "username")?>">
                                <input type="hidden" name="user_id" value="<?php echo getUserDetails($_GET['user_id'], "user_id")?>">
                        
                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text">Display Name</span>
                                    <input type="text" class="form-control" name="display_name" placeholder="Your Name" value="<?php echo getUserDetails($_GET['user_id'], "display_name")?>">
                                </div>

                                <div class="input-group input-group-sm mb-3">
                                    <input type="file" class="form-control" name="pic">
                                </div>

                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text">Old Password</span>
                                    <input type="password" class="form-control" name="old_pass">
                                </div>

                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text">New Password</span>
                                    <input type="text" class="form-control" name="new_pass">
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" name="editAccount" class="btn btn-primary">Save</button>
                                </div>
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>


            <hr>
            <h3>Your Cart</h3>
            <div class="row">
                <div class="col col-md-3">
                    <div class="card">
                        <img src="Profile.png" class="card-img-top">
                        <div class="card-body">
                            <h4 class="card-title text-truncate">Product Name</h4>
                            <p class="card-text text-truncate">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <div class="d-flex justify-content-between">
                                <span class="h3 fw-bold text-success">PHP ####</span>
                                <a href="product.php" class="btn btn-warning">Details</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col col-md-3">
                    <div class="card">
                        <img src="Profile.png" class="card-img-top">
                        <div class="card-body">
                            <h4 class="card-title text-truncate">Product Name</h4>
                            <p class="card-text text-truncate">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <div class="d-flex justify-content-between">
                                <span class="h3 fw-bold text-success">PHP ####</span>
                                <a href="product.php" class="btn btn-warning">Details</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col col-md-3">
                    <div class="card">
                        <img src="Profile.png" class="card-img-top">
                        <div class="card-body">
                            <h4 class="card-title text-truncate">Product Name</h4>
                            <p class="card-text text-truncate">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <div class="d-flex justify-content-between">
                                <span class="h3 fw-bold text-success">PHP ####</span>
                                <a href="product.php" class="btn btn-warning">Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        
    </body>
</html>