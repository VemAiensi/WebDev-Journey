<!DOCTYPE html>
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

        <form action="gears/controller.php" method="POST" enctype='multipart/form-data'>
            <div class="container bg-white col col-lg-8 rounded-3">
                <br>
                <h3 class="text-center">Create an Account</h3>
                <hr>
                <div class="input-group mb-3">
                    <span class="input-group-text" >@</span>
                    <input type="text" class="form-control" name="username" placeholder="Username">
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text" ><i class="bi bi-cast"></i></span>
                    <input type="text" class="form-control" name="display_name" placeholder="Display Name">
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text" ><i class="bi bi-key-fill"></i></span>
                    <input type="text" class="form-control" name="password" placeholder="Password">
                </div>

                Profile Picture
                <div class="input-group mb-3">
                    <input type="file" class="form-control" name="pic">
                </div>
                <hr>
                <div class="container-fluid text-center">
                    <button class="container-fluid btn btn-success mb-2" name="create" type="submit">Create Account</button><br>
                    <a href="index.php">Already have an account? Login instead</a>
                </div>
                
                <br>
            </div>
        </form>
        
    </body>
</html>