<!DOCTYPE html>
<?php session_start();
 include('gears/functions.php');
?>
<html>
    <head>
        <title>VA | Check</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <div class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container">
                <div class="navbar-brand">Wind Instruments</div>
                
                <div class="nav-item">
                    <form class="input-group">
                        <input class="form-control" type="search" placeholder="What are you looking for?">
                        <button class="input-group-text  btn-warning"><i class="bi bi-search"> Search</i></button>
                    </form>
                </div>
                

                <div class="nav-item">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <?php
                            if (isset($_GET['user_id']))
                                nav_user($_GET['user_id']);
                            
                            else
                                nav_default();
                        ?>
                        
                    </ul>
                </div>
            </div>
        </div>

        <div style="height:100px">
        <!-- Just a spacer -->
        </div>

        <div class="container">
            <div class="row">
                <?php productCarousel($_GET['prod_id'])?>

                <!-- unscrollable detail panel -->
                <div class="col col-md-4">
                    <div class="sticky rounded-3 shadow">
                        <div class="d-flex justify-content-between">
                            <span>Stock Remaining: </span><span class="text-danger fw-bold"><?php echo getProductDetails($_GET['prod_id'], "stock")?></span><br>
                            <i class="bi bi-star-fill text-warning"> 4.5</i>
                        </div>
                        
                        <span class="h3 fw-bold mb-2"><?php echo getProductDetails($_GET['prod_id'], "prod_name")?></span><br>
                        <span class="h3 fw-bold mb-2 text-success">PHP <?php echo getProductDetails($_GET['prod_id'], "price")?></span>
                        <hr>
                        
                        <span class="h4 fw-bold">Variations:</span><br>
                        <span class="fw-bold">1. Color</span>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col bg-secondary me-1 rounded">1</div>
                                <div class="col bg-secondary me-1 rounded">2</div>
                                <div class="col bg-secondary me-1 rounded">3</div>
                            </div>
                        </div>
                        <hr>
                        <p>
                        <?php echo getProductDetails($_GET['prod_id'], "details")?>
                        </p>
                        
                        <hr>
                        
                        <div class="d-flex justify-content-between">
                            <div class="rounded-3 btn btn-warning">Buy Now</div>
                            <div class="rounded-3 btn border-warning">Add to Cart</div>
                            <div class="btn text-danger"><i class="bi bi-heart-fill"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            

            <div class="row container">
                <div class="col col-lg-8">
                    <h4 class="mb-3 fw-bold">Other Products</h4>

                    <div class="row">
                        <div class="col col-sm-3 mb-3">
                            <img src="Profile.png" class="small-img">

                            <span>Product Name</span><br>
                            <span class="fw-bold">PHP ###</span>
                        </div>
                        <div class="col col-sm-3 mb-3">
                            <img src="Profile.png" class="small-img">

                            <span>Product Name</span><br>
                            <span class="fw-bold">PHP ###</span>
                        </div>
                        <div class="col col-sm-3 mb-3">
                            <img src="Profile.png" class="small-img">

                            <span>Product Name</span><br>
                            <span class="fw-bold">PHP ###</span>
                        </div>
                        <div class="col col-sm-3 mb-3">
                            <img src="Profile.png" class="small-img">

                            <span>Product Name</span><br>
                            <span class="fw-bold">PHP ###</span>
                        </div>
                    </div>

                    <hr><br>

                    <h4 class="mb-3 fw-bold">Attributes</h4>

                    <div class="row mb-3">
                        <div class="col col-md-4 bg-secondary rounded-start text-white">Material</div>
                        <div class="col col-md-8 border border-secondary rounded-end"><?php echo getProductDetails($_GET['prod_id'], "material")?></div>
                    </div>

                    <div class="row mb-3">
                        <div class="col col-md-4 bg-secondary rounded-start text-white">Weight</div>
                        <div class="col col-md-8 border border-secondary rounded-end"><?php echo getProductDetails($_GET['prod_id'], "weight")?>kg</div>
                    </div>

                    <br><hr><br>

                    <h4 class="mb-3 fw-bold">Reviews</h4>

                    <div class="container mb-4">
                        <img src="Profile.png" class="rounded-circle" style="width:30px">
                        <span> Account Name</span>

                        <br>
                        <div class="container">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>

                            <br>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis fugit hic ut consectetur, quibusdam nihil, velit atque quo consequuntur non fugiat quasi laborum adipisci accusamus, ducimus assumenda? Ipsum, fugit minima!</p>
                        </div>
                        
                    </div>

                    <div class="container mb-4">
                        <img src="Profile.png" class="rounded-circle" style="width:30px">
                        <span> Account Name</span>

                        <br>
                        <div class="container">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        </div>
                        
                    </div>

                    <div class="container mb-4">
                        <img src="Profile.png" class="rounded-circle" style="width:30px">
                        <span> Account Name</span>

                        <br>
                        <div class="container">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        </div>
                        
                    </div>


                </div>
            </div>
        </div> 
    </div> 

        
    </body>
</html>