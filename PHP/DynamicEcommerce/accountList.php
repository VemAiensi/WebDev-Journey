<!DOCTYPE html>
<?php session_start();
 include('gears/functions.php');
?>
<html>
    <head>
        <title>VA | Create Account</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

        <link rel="stylesheet" href="styles.css">
    </head>
    <body class="body-index">
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
                        <li class="nav-link active">
                            Account Creation
                        </li>
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
        
        <?php getAllUsers()?>
    </body>
</html>