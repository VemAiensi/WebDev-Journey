<!DOCTYPE html>
<head>
    <title>Photo Gallery</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        
        <script
            src="https://code.jquery.com/jquery-3.7.1.js"
            integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
            crossorigin="anonymous"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <!--Lightbox-->
        <link rel="stylesheet" href="css/lightbox.css">
        <script src="js/lightbox.js"></script>
        
        <style>
            body{
                background-color: rgb(15, 11, 43);
                color: rgb(15, 11, 43);
            }
            .page-header{
                color: white
            }
            .thumbnail img{
                width: 350px;
                height: 200px;
                object-fit: cover;
            }
        </style>
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <div class="navbar-brand">
                    Photo Gallery
                </div>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/Activity7/index.php">HOME</a></li>
                <li><a href="index.php">Previous Activity</a></li>
                <li><a href="/index.php">Activity List</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">

        <div class="page-header">
            <h3>Photo Gallery</h3>
        </div>
        
        <div class="row">
            <div class="col-md-4">
                <a href="pic/Final hd.jpg" data-lightbox="gallery" data-title="Featured Art 2020 | Final" class="thumbnail">
                    <img src="pic/Final hd.jpg">
                </a>
                
            </div>
            <div class="col-md-4">
                <a href="pic/Close Your Eyes (March 1, 2021).jpg" data-lightbox="gallery" data-title="Featured Art 2021 | Close Your Eyes" class="thumbnail">
                    <img src="pic/Close Your Eyes (March 1, 2021).jpg">
                </a>
                
            </div>
            <div class="col-md-4">
                <a href="pic/My Heart 1.jpg" data-lightbox="gallery" data-title="Featured Art in 2021 | My Heart" class="thumbnail">
                    <img src="pic/My Heart 1.jpg">
                </a>
                
            </div>
            <div class="col-md-4">
                <a href="pic/march 2.jpg" data-lightbox="gallery" data-title="Featured Art 2022 | My Heart 2" class="thumbnail">
                    <img src="pic/march 2.jpg">
                </a>
                
            </div>
            <div class="col-md-4">
                <a href="pic/waiting.png" data-lightbox="gallery" data-title="Featured Art 2023 | Waiting" class="thumbnail">
                    <img src="pic/waiting.png">
                </a>
                
            </div>
            <div class="col-md-4">
                <a href="pic/december26,2023.png" data-lightbox="gallery" data-title="Featured Art 2023 | Seeing Through" class="thumbnail">
                    <img src="pic/december26,2023.png">
                </a>
                
            </div>
        </div>
    </div>
    <br>
    <br>

    <footer class="navbar navbar-default navbar-fixed-bottom">
        <div class="container">
            <p class="text-center" style="padding:10px">Created by Vibrant Arrow | Vem Aiensi</p>
        </div>
    </footer>
</body>