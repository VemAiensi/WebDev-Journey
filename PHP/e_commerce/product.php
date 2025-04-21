<!DOCTYPE html>
<html>
    <head>
        <title>E-Commerce</title>
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


    </head>

    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">DMC 5 Merch E-Commerce</a>
                </div>
                
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#">Software</a></li>
                        <li><a href="#">Music</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>


        <aside class="col-md-4">
            <div class="thumbnail col-md-10 col-md-offset-1" >
                <div class="list-group">
                    <a href="product.php" class="list-group-item" style="padding:0; margin:0;">
                        <div class="col-md-3" style="padding:0; margin:0;">
                            <img src="images/vergil-dmc.gif" style="width:80px; height:100px;">
                        </div>
                        <div class="col-md-9">
                            <div class="list-group-item-heading">
                                <h4>Power Level: ABSOLUTE</h4>
                                <h4>Vergil with Yamato</h4>
                                <div class="clearfix"></div>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur </p>
                        </div>                 
                        <div class="clearfix"></div>
                    </a>
                </div>
            </div>

            <div class="thumbnail col-md-10 col-md-offset-1" >
                <div class="list-group">
                    <a href="product.php" class="list-group-item" style="padding:0; margin:0;">
                        <div class="col-md-3" style="padding:0; margin:0;">
                            <img src="images/vergil-chair.gif" style="width:80px; height:100px;">
                        </div>
                        <div class="col-md-9">
                            <div class="list-group-item-heading">
                                <h4>Power Level: 300</h4>
                                <h4>The Chair MOD</h4>
                                <div class="clearfix"></div>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur </p>
                        </div>                 
                        <div class="clearfix"></div>
                    </a>
                </div>
            </div>

            <div class="thumbnail col-md-10 col-md-offset-1" >
                <div class="list-group">
                    <a href="product.php" class="list-group-item" style="padding:0; margin:0;">
                        <div class="col-md-3" style="padding:0; margin:0;">
                            <img src="images/vergilsmile-vergil.gif" style="width:80px; height:100px;">
                        </div>
                        <div class="col-md-9">
                            <div class="list-group-item-heading">
                                <h4>Power Level: 10000</h4>
                                <h4>Smiling for YOU</h4>
                                <div class="clearfix"></div>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur </p>
                        </div>                 
                        <div class="clearfix"></div>
                    </a>
                </div>
            </div>

            <div class="thumbnail col-md-10 col-md-offset-1" >
                <div class="list-group">
                    <a href="product.php" class="list-group-item" style="padding:0; margin:0;">
                        <div class="col-md-3" style="padding:0; margin:0;">
                            <img src="images/vergilsmile-motivated.gif" style="width:80px; height:100px;">
                        </div>
                        <div class="col-md-9">
                            <div class="list-group-item-heading">
                                <h4>Power Level: 999999</h4>
                                <h4>Where's your MOTIVATION?</h4>
                                <div class="clearfix"></div>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur </p>
                        </div>                 
                        <div class="clearfix"></div>
                    </a>
                </div>
            </div>
        </aside>
        <header class="col-md-8">
            
                <div class="thumbnail" >
                    <img src="images/vergil-dmc.gif" style="width:100%">
                    <div class="caption">
                        <h4 class="pull-right">Power Level: ABSOLUTE</h4>
                        <h4><a href="product.php">Vergil with Yamato</a></h4>
                        <div>
                            <button class="btn btn-primary" data-toggle="modal" data-target="#buy_me" style="margin-left:10px; margin-bottom:10px;">Buy this Charater</button>
                        </div>
                        <div class="modal fade" id="buy_me">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button class="close" data-dismiss="modal">&times;</button>
                                        <div class="modal-title">Buy Car</div>
                                    </div>
                                    <div class="modal-body">
                                        <form action="">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Enter Your IGN...">
                                            </div>

                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Enter Your email...">
                                            </div>

                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="DMC 5 Account Name...">
                                            </div>

                                            
                                                <textarea class="form-group" rows="5" style="font-size:20px; color:gray;" >Other Special Request</textarea>
                                            
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-danger" data-dismiss="modal">Submit Purchase</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat atque nobis molestias repellendus, quasi a ea adipisci autem illo temporibus officia eveniet excepturi accusantium, ducimus hic saepe quas, ipsa architecto.</p>
                    </div>
                </div>
        </header>

        <div class="col-md-8 col-md-offset-4">
            <div class="col-md-12">
                <div class="well">
                    <div class="text-right">
                        <button class="btn btn-danger">Leave Comments</button>
                    </div>
                </div>

                <div class="well">
                    <span class="lead">Mr. Hardcore Player</span>
                    <span class="pull-right">3 days ago</span>
                    <p>The gameplay mechanic of vergil was totally chaotic. He's super powerful and has a lot of tricks under his sleaves. It was a truly satisfying combat gameplay and I loved it!</p>
                </div>

                <div class="well">
                    <span class="lead">Casual Fox</span>
                    <span class="pull-right">2 days ago</span>
                    <p>It was hard to time his perfect judgment cut, but still satisfying to pull off</p>
                </div>

                <div class="well">
                    <span class="lead">Noobie</span>
                    <span class="pull-right">2 days ago</span>
                    <p>What do you mean by perfect judgment cut? There's a thing?</p>
                </div>

                <div class="well">
                    <span class="lead">Casual Fox</span>
                    <span class="pull-right">1 day ago</span>
                    <p>Yes, if you time it correctly before he returns his sword to it's sheet, that's the que before releasing the button.</p>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="page-header"><h3 class="text-center">Related Products</h3></div>
            <div class="col-md-3">
                <div class="thumbnail" >
                    <img src="images/Yamato.jpg" style="width:100%; height: 200px;">
                    <div class="caption">
                        <h4 class="pull-right">Power Level: 99999</h4>
                        <h4><a href="product.php">Yamato</a></h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat atque nobis molestias repellendus, quasi a ea adipisci autem illo temporibus officia eveniet excepturi accusantium, ducimus hic saepe quas, ipsa architecto.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="thumbnail" >
                    <img src="images/Chair.jpeg" style="width:100%; height: 200px;">
                    <div class="caption">
                        <h4 class="pull-right">Power Level: 300</h4>
                        <h4><a href="#">Vergil's Chair</a></h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat atque nobis molestias repellendus, quasi a ea adipisci autem illo temporibus officia eveniet excepturi accusantium, ducimus hic saepe quas, ipsa architecto.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="thumbnail" >
                    <img src="images/vergilsmile-motivated.gif" style="width:100%; height: 200px;">
                    <div class="caption">
                        <h4 class="pull-right">Power Level: 999999</h4>
                        <h4><a href="product.php">Motivated Vergil</a></h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat atque nobis molestias repellendus, quasi a ea adipisci autem illo temporibus officia eveniet excepturi accusantium, ducimus hic saepe quas, ipsa architecto.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="thumbnail" >
                    <img src="images/vergilsmile-vergil.gif" style="width:100%">
                    <div class="caption">
                        <h4 class="pull-right">Power Level: 10000</h4>
                        <h4><a href="product.php">Smiling Vergil</a></h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat atque nobis molestias repellendus, quasi a ea adipisci autem illo temporibus officia eveniet excepturi accusantium, ducimus hic saepe quas, ipsa architecto.</p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>