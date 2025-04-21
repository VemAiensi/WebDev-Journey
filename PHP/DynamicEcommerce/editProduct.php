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
                        <a href="index.php?user_id=1">
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
            <div class="row">
                <?php productCarousel($_GET['prod_id'])?>

                <!-- unscrollable detail panel -->
                <div class="col col-md-4">
                    <div class="sticky rounded-3 shadow">
                        <form action="gears/controller.php" method="POST" enctype="multipart/form-data">
                            <div class="">
                                <h5 class="">Edit Product Details</h5>
                            
                            </div>
                                        
                            <div class="">
                                <input type="hidden" name="prod_id" value=<?php echo getProductDetails($_GET['prod_id'], "prod_id")?>>
                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text">Product Name</span>
                                    <input type="text" class="form-control" name="prod_name" value="<?php echo getProductDetails($_GET['prod_id'], "prod_name")?>">
                                </div>

                                <div class="input-group input-group-sm mb-3">
                                    <textarea type="text" class="form-control" name="details" placeholder="Description"><?php echo getProductDetails($_GET['prod_id'], "details")?></textarea>
                                </div>

                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text">Material</span>
                                    <input type="text" class="form-control" name="material" value=<?php echo getProductDetails($_GET['prod_id'], "material")?>>
                                </div>

                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text">Weight</span>
                                    <input type="text" class="form-control" name="weight" value=<?php echo getProductDetails($_GET['prod_id'], "weight")?>>
                                </div>

                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text">Price</span>
                                    <input type="number" class="form-control" name="price" value=<?php echo getProductDetails($_GET['prod_id'], "price")?>>
                                </div>

                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text">Stock</span>
                                    <input type="number" class="form-control" name="stock" value=<?php echo getProductDetails($_GET['prod_id'], "stock")?>>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" name="editProductDetails" class="btn btn-primary">Save</button>
                                </div>
                                
                            </div>
                        </form>
                        <hr>

                        <div class="row">
                            <div>Images [Click Images to delete]</div>
                            <?php getAllImages($_GET['prod_id']) ?>

                            <div class='col mb-2 d-flex'>
                                <div class='container-fluid rounded-3 d-flex bg-primary align-items-center justify-content-center'
                                    type='button' data-bs-toggle='modal' data-bs-target='#addingPic'>
                                    <h1 class='text-light'><i class='bi bi-plus-circle-fill'></i></h1>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
        </div> 
    </div> 

        <!-- Modal for adding image -->

        <div class="modal fade" id="addingPic" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="gears/controller.php" method="POST" enctype="multipart/form-data">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Add Image</h5>
                                                                
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                                                            
                        <div class="modal-body">
                            <input type="hidden" name="prod_id" value=<?php echo getProductDetails($_GET['prod_id'], "prod_id") ?>>
                            <div class="input-group input-group-sm mb-3">
                                <input type="file" class="form-control" name="prod_pic">
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" name="addPic" class="btn btn-primary">Add</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>