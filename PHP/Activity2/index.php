<html>
   <head>
      <title>Bootstrap | Activity 1</title>	
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <script src="js/jquery.js"></script>
      <script src="js/bootstrap.min.js"></script>
   </head>

   <body>
      <h1 class="text-center">Activity 2</h1>
      
      <div class="container-fluid">
         <a href="#">Messages <span class="badge">10</span></a><br>
         <a href="#">Notification <span class="badge">30</span></a> 
         
         <button class="btn btn-primary">
            Click to see notifications
            <span class="badge">500</span>
         </button>

         <div class="page-header">
            <h3>Download <span class="label label-default">Version 10.1</span></h3>
         </div>

      </div>
      
      <hr>

      <div class="container-fluid">
         <div class="alert alert-danger fade in">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            Record already exist!
         </div>
         <div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            Record already exist!
         </div>
         <div class="alert alert-warning">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            Record already exist!
         </div>
      </div>

      <div class="container-fluid">
         <div class="jumbotron">
            <h1>Heading in jumbotron</h1>
         </div>

         <h1>Heading without jumbotron</h1>

         <div class="page-header">
            <h1>Welcome</h1>
         </div>

         <p class="well well-sm">This is the well</p>
         <p class="well well-md">This is the well</p>
         <p class="well well-lg">This is the well</p>

      </div>

      <hr>

      <div class="container-fluid">
         <span class="glyphicon glyphicon-time"></span>:Time <br>
         <span class="glyphicon glyphicon-cog"></span>:Gear <br>
         <button class="btn btn-success"><span class="glyphicon glyphicon-search"></span> Find</button>
      </div>

      <hr>

      <div class="container-fluid">
         <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">College <span class="caret"></span></button>
            <ul class="dropdown-menu">
               <li><a href='#'>CCS</a></li>
               <li><a href='#'>CET</a></li>
               <li><a href='#'>CBA</a></li>
               <li class="divider"></li>
               <li class="dropdown-header">Exit</li>
               <li><a href='#'>Logout</a></li>
            </ul>
         </div>
         
         <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">College <span class="caret"></span></button>
            <ul class="dropdown-menu dropdown-menu-right">
               <li><a href='#'>CCS</a></li>
               <li><a href='#'>CET</a></li>
               <li><a href='#'>CBA</a></li>
               <li class="divider"></li>
               <li class="dropdown-header">Exit</li>
               <li><a href='#'>Logout</a></li>
            </ul>
         </div>

         <div class="dropup">
            <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">College <span class="caret"></span></button>
            <ul class="dropdown-menu">
               <li><a href='#'>CCS</a></li>
               <li><a href='#'>CET</a></li>
               <li><a href='#'>CBA</a></li>
               <li class="divider"></li>
               <li class="dropdown-header">Exit</li>
               <li><a href='#'>Logout</a></li>
            </ul>
         </div>
         
      </div>

      <hr>
      
      <div class="container-fluid">
         <button class="btn btn-default">Click me</button>
         <button class="btn btn-primary btn-xs">Click me</button>
         <button class="btn btn-info btn-lg">Click me</button>
         <button class="btn btn-success btn-md">Click me</button>
         <button class="btn btn-warning">Click me</button>
         <button class="btn btn-danger btn-sm">Click me</button>
         <button class="btn btn-link">Click me</button>
         <button class="btn btn-danger btn-block">Click me</button>
         <button class="btn btn-danger disabled">Click me</button>
         <button class="btn btn-danger active">Click me</button>

         <div class="btn-group">
            <button class="btn btn-info">Home</button>
            <button class="btn btn-info">About Us</button>
            <button class="btn btn-info">Contact Us</button>
            <button class="btn btn-info">Products</button>
         </div>
   
         <div class="btn-group-vertical">
            <button class="btn btn-info">Home</button>
            <button class="btn btn-info">About Us</button>
            <button class="btn btn-info">Contact Us</button>
            <button class="btn btn-info">Products</button>
         </div>

         <div class="btn-group btn-group-justified">
            <div class="btn-group">
               <button class="btn btn-success">Home</button>
            </div>
            <div class="btn-group">
               <button class="btn btn-success">About Us</button>
            </div>
            <div class="btn-group">
               <button class="btn btn-success">Contact Us</button>
            </div>
            <div class="btn-group">
               <button class="btn btn-success">Products</button>
            </div>
         </div>
      </div>

      
      
      <hr>

      <div class="container-fluid">
         <img src="pic/pic.png">
         <img src="pic/pic.png" class="img-rounded">
         <img src="pic/pic.png" class="img-circle">
         <img src="pic/pic.png" class="img-thumbnail">
      </div>
      
   </body>
</html>