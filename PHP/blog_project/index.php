<!DOCTYPE html>
<html>
    <head>
        <title>My Blog</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        
        <script
            src="https://code.jquery.com/jquery-3.7.1.js"
            integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="  
            crossorigin="anonymous"></script>
        <!-- Latest compiled and minified JavaScript -->

        <link rel="stylesheet" href="styles2.css">
    </head>

    <body>
        <nav class="navbar navbar-custom">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">The Blog</a>
                </div>

                <div class="nav navbar-nav form-inline navbar-right" style="padding: 10px;">
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <div class="input-group-btn">
                            <button class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
                        </div>
                    </div>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="about.php">ABOUT US</a></li>
                    <li><a href="post.php">POST</a></li>
                    <li><a href="contact.php">CONTACT US</a></li>
                </ul>
            </div>
        </nav>
        
        <header>
            <div class="text-center">
                <h1>The Blog</h1>
                <div class="lead">Welcome to My Blogs</div>
            </div>
        </header>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div id="post">
                    <h1><a href="#">My Topic on my Blog</a></h1>
                    <p class="lead">Tell Something about your blog Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium consectetur est nam, necessitatibus cumque non quam consequuntur aut natus quo sequi, rerum magni ea perferendis doloribus odio nihil quae. Harum?</p>
                    <p>00-Month-2024</p>
                </div>

                <div id="post">
                    <h1><a href="#">My Topic on my Blog</a></h1>
                    <p class="lead">Tell Something about your blog Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium consectetur est nam, necessitatibus cumque non quam consequuntur aut natus quo sequi, rerum magni ea perferendis doloribus odio nihil quae. Harum?</p>
                    <p>00-Month-2024</p>
                </div>

                <div id="post">
                    <h1><a href="#">My Topic on my Blog</a></h1>
                    <p class="lead">Tell Something about your blog Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium consectetur est nam, necessitatibus cumque non quam consequuntur aut natus quo sequi, rerum magni ea perferendis doloribus odio nihil quae. Harum?</p>
                    <p>00-Month-2024</p>
                </div>

                <div class="down-btn text-right">
                    <button class="btn btn-default">Older Post</button>
                </div>
            </div>
        </div>

        <div class="container-fluid text-center">
            <ul class="nav navbar-nav .nav-mycenter">
                <li><a href="#">Home</a></li>
                <li><a href="#">Technology</a></li>
                <li><a href="#">Health</a></li>
                <li><a href="#">Science</a></li>
                <li><a href="#">Nature</a></li>
            </ul>
        </div>
    </body>
    
      
</html>