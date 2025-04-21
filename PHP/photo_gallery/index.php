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
                <li><a href="alternate.php">Alternate Page</a></li>
                <li><a href="/index.php">Activity List</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="carousel slide" data-ride="carousel" id="slider">
                    <ol class="carousel-indicators">
                        <li data-target="#slider" data-slide-to="0" class="active"></li>
                        <li data-target="#slider" data-slide-to="1"></li>
                        <li data-target="#slider" data-slide-to="2"></li>
                        <li data-target="#slider" data-slide-to="3"></li>
                        <li data-target="#slider" data-slide-to="4"></li>
                        <li data-target="#slider" data-slide-to="5"></li>
                    </ol>

                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="pic/Final hd.jpg">
                        </div>
                        <div class="item">
                            <img src="pic/Close Your Eyes (March 1, 2021).jpg">
                        </div>
                        <div class="item">
                            <img src="pic/My Heart 1.jpg">
                        </div>
                        <div class="item">
                            <img src="pic/march 2.jpg">
                        </div>
                        <div class="item">
                            <img src="pic/waiting.png">
                        </div>
                        <div class="item">
                            <img src="pic/december26,2023.png">
                        </div>
                    </div>

                    <a href="#slider" data-slide="prev" class="left carousel-control">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a href="#slider" data-slide="next" class="right carousel-control">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
        </div>

        <div class="page-header">
            <h3>Photo Gallery</h3>
        </div>
        
        <div class="row">
            <div class="col-md-4">
                <a href="#m1" data-toggle="modal" class="thumbnail">
                    <img src="pic/Final hd.jpg">
                </a>
                <div class="modal fade" id="m1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">Featured Art 2020 | Final</div>
                            <div class="modal-body">
                                <img src="pic/Final hd.jpg" class="img-thumbnail">
                            </div>
                            <div class="modal-footer">My First Digital Art</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <a href="#m2" data-toggle="modal" class="thumbnail">
                    <img src="pic/Close Your Eyes (March 1, 2021).jpg">
                </a>
                <div class="modal fade" id="m2">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">Featured Art 2021 | Close Your Eyes</div>
                            <div class="modal-body">
                                <img src="pic/Close Your Eyes (March 1, 2021).jpg" class="img-thumbnail">
                            </div>
                            <div class="modal-footer">First Digital art created in mobile</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <a href="#m3" data-toggle="modal" class="thumbnail">
                    <img src="pic/My Heart 1.jpg">
                </a>
                <div class="modal fade" id="m3">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">Featured Art in 2021 | My Heart</div>
                            <div class="modal-body">
                                <img src="pic/My Heart 1.jpg" class="img-thumbnail">
                            </div>
                            <div class="modal-footer">An attempt to replicate Kingdom Hearts Artstyle</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <a href="#m4" data-toggle="modal" class="thumbnail">
                    <img src="pic/march 2.jpg">
                </a>
                <div class="modal fade" id="m4">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">Featured Art 2022 | My Heart 2</div>
                            <div class="modal-body">
                                <img src="pic/march 2.jpg" class="img-thumbnail">
                            </div>
                            <div class="modal-footer">A self gift for my birthday</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <a href="#m5" data-toggle="modal" class="thumbnail">
                    <img src="pic/waiting.png">
                </a>
                <div class="modal fade" id="m5">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">Featured Art 2023 | Waiting</div>
                            <div class="modal-body">
                                <img src="pic/waiting.png" class="img-thumbnail">
                            </div>
                            <div class="modal-footer">My First 3D art for my birthday</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <a href="#m6" data-toggle="modal" class="thumbnail">
                    <img src="pic/december26,2023.png">
                </a>
                <div class="modal fade" id="m6">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">Featured Art 2023 | Seeing Through</div>
                            <div class="modal-body">
                                <img src="pic/december26,2023.png" class="img-thumbnail">
                            </div>
                            <div class="modal-footer">Portrays how I try to struggled removing depression away from my vision</div>
                        </div>
                    </div>
                </div>
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