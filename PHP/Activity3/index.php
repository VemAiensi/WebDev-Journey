<!DOCTYPE html>
<html>
  <head>
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
      <h1 class="title text-center">Activity 3</h1>
      
      <div container-fluid>
        <ul class="pager">
          <li class="previous"><a href="#">Previous</a></li>
          <li class="next"><a href="#">Next</a></li>
        </ul>
        
        <ul class="pagination pagination-sm">
          <li><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
        </ul>
        
        <ul class="pagination">
          <li><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li class="disabled"><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
        </ul>
        
        <ul class="pagination pagination-lg">
          <li><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
        </ul>
      </div>
      
      <br><hr><br>
      
      <div class="container-fluid">
        <ul class="nav nav-pills">
          <li><a href="#p1" data-toggle="pill">HOME</a></li>
          <li class="active"><a href="#p2" data-toggle="pill">About Mandarin Ducks</a></li>
          <li><a href="#p3" data-toggle="pill">Contact Us</a></li>
          <li><a href="#p4" data-toggle="pill">Products</a></li>
        </ul>
        
        <div class="tab-content">
          <div class="tab-pane fade" id="p1">Welcome to Home</div>  
          <div class="tab-pane fade in active" id="p2"><img src="https://animalspot.net/wp-content/uploads/2012/09/Mandarin-Duck.jpg" width=200px/></div> 
          <div class="tab-pane fade" id="p3">Welcome to Contact Us</div> 
          <div class="tab-pane fade" id="p4">Welcome to Products</div> 
        </div>
      </div>
      
      <div class="container-fluid">
        <ul class="nav nav-tabs">
          <li><a href="#t1" data-toggle="tab">HOME</a></li>
          <li class="active"><a href="#t2" data-toggle="tab">About Mandarin Ducks</a></li>
          <li><a href="#t3" data-toggle="tab">Contact Us</a></li>
          <li><a href="#t4" data-toggle="tab">Products</a></li>
        </ul>
        
        <div class="tab-content">
          <div class="tab-pane fade" id="t1">Welcome to Home</div>  
          <div class="tab-pane fade in active" id="t2"><img src="https://animalspot.net/wp-content/uploads/2012/09/Mandarin-Duck.jpg" width=200px/></div> 
          <div class="tab-pane fade" id="t3">Welcome to Contact Us</div> 
          <div class="tab-pane fade" id="t4">Welcome to Products</div> 
        </div>
      </div>
      
      <br><hr><br>
      
      <div class="container-fluid">
        <ul class="nav nav-pills">
          <li><a href="#">HOME</a></li>
          <li><a href="#">HTML</a></li>
          <li><a href="#">PHP</a></li>
          <li><a href="#">JAVASCRIPT</a></li>
        </ul>
        
        <br>
        
        <ul class="nav nav-pills">
          <li class="active"><a href="#">HOME</a></li>
          
          <li class="dropdown">
            <a class="dropdown" href="#" data-toggle="dropdown">
              PHP <span class="caret"></span>
            </a>
            
            <ul class="dropdown-menu">
              <li><a href="#">PHP-Function</a></li>
              <li><a href="#">PHP-MySQL</a></li>
              <li><a href="#">PHP-Loop</a></li>
            </ul>
          </li>
          
          
          <li><a href="#">HTML</a></li>
          <li><a href="#">PHP</a></li>
          <li><a href="#">JAVASCRIPT</a></li>
        </ul>
        
        <br>
        
        <ul class="nav nav-pills nav-stacked">
          <li class="active"><a href="#">HOME</a></li>
          <li><a href="#">HTML</a></li>
          <li><a href="#">PHP</a></li>
          <li><a href="#">JAVASCRIPT</a></li>
        </ul>
        
        <ul class="nav nav-pills nav-justified">
          <li><a href="#">HOME</a></li>
          <li class="active"><a href="#">HTML</a></li>
          <li><a href="#">PHP</a></li>
          <li><a href="#">JAVASCRIPT</a></li>
        </ul>
      </div>
      
      <br><hr><br>
      
      <div class="container-fluid">
        <ul class="list-inline">
          <li><a href="#">Home</a></li>
          <li><a href="#">HTML</a></li>
          <li><a href="#">PHP</a></li>
          <li><a href="#">JAVASCRIPT</a></li>
        </ul>
        
        <ul class="nav nav-tabs">
          <li><a href="#">Home</a></li>
          <li class="active"><a href="#">HTML</a></li>
          <li><a href="#">PHP</a></li>
          <li><a href="#">JAVASCRIPT</a></li>
        </ul>
        
        <ul class="nav nav-tabs">
          <li><a href="#">Home</a></li>
          <li class="active"><a href="#">HTML</a></li>
          
          <li class="dropdown">
            <a class="dropdown" href="#" data-toggle="dropdown">
              PHP <span class="caret"></span>
            </a>
            
            <ul class="dropdown-menu">
              <li><a href="#">PHP-Function</a></li>
              <li><a href="#">PHP-MySQL</a></li>
              <li><a href="#">PHP-Loop</a></li>
            </ul>
          </li>
          
          <li><a href="#">JAVASCRIPT</a></li>
        </ul>
      </div>
      
      <br><hr><br>
      
      <div class="container-fluid">
        <div class="panel panel-danger">
          <div class="panel-heading">
            <h4>
              <a href="#colap0" data-toggle="collapse" data-parent="#myA">Red</a>
            </h4>
          </div>
          
          <div class="collapse panel-collapse" id="colap0">
            <div class="panel-body">
              This color is Danger
            </div>
          </div>
        </div>
        
        <div class="panel-group" id="myA">
          <div class="panel panel-success">
            <div class="panel-heading">
              <h4>
                <a href="#colap1" data-toggle="collapse" data-parent="#myA">Wanna see a Turtle?</a>
              </h4>
            </div>
            
            <div class="collapse panel-collapse" id="colap1">
              <div class="panel-body">
                <img src="https://1.bp.blogspot.com/-q4P41NJQpi0/UAqEvBGPfmI/AAAAAAAANJY/kGxJf2E1qGE/s1600/turtle8.jpg" width=200px/>
              </div>
            </div>
          </div>
          
          <div class="panel panel-warning">
            <div class="panel-heading">
              <h4>
                <a href="#colap2" data-toggle="collapse" data-parent="#myA">Wanna see a Duck?</a>
              </h4>
            </div>
            
            <div class="collapse panel-collapse" id="colap2">
              <div class="panel-body">
                <img src="https://upload.wikimedia.org/wikipedia/commons/7/74/White_domesticated_duck%2C_stretching.jpg" width=200px/>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <br><hr><br>
      
      <div class="container-fluid">
        <div class="panel-group">
          <div class="panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a href="#hey" data-toggle="collapse">List of College</a>
              </h4>
            </div>
            
            <div class="collapse collapse-panel" id="hey">
              <ul class="list-group">
                <li class="list-group-item list-group-item-success">CCS</li>
                <li class="list-group-item">CET</li>
                <li class="list-group-item">CBA</li>
                <li class="list-group-item">CAS</li>
              </ul>
              <div class="panel-footer">This is panel-footer</div>
            </div>
          </div>
        </div>
      </div>
      
      <br><hr><br>
      
      <div class="container-fluid">
        
        <div class="list-group">
          <a href="#" class="list-group-item">
            <h4 class="list-group-item-heading">This is the heading</h4>
            <div class="list-group-item-text">This is the paragraph</div>
          </a>
          <a href="#" class="list-group-item">
            <h4 class="list-group-item-heading">This is the heading</h4>
            <div class="list-group-item-text">This is the paragraph</div>
          </a>
          <a href="#" class="list-group-item">
            <h4 class="list-group-item-heading">This is the heading</h4>
            <div class="list-group-item-text">This is the paragraph</div>
          </a>
          <a href="#" class="list-group-item">
            <h4 class="list-group-item-heading">This is the heading</h4>
            <div class="list-group-item-text">This is the paragraph</div>
          </a>
        </div>
        
        <ul class="list-group">
          <li class="list-group-item">
            <h4 class="list-group-item-heading">This is the heading</h4>
            <div class="list-group-item-text">This is the paragraph</div>
          </li>
          
          <li class="list-group-item">
            <h4 class="list-group-item-heading">This is the heading</h4>
            <div class="list-group-item-text">This is the paragraph</div>
          </li>
          
          <li class="list-group-item">
            <h4 class="list-group-item-heading">This is the heading</h4>
            <div class="list-group-item-text">This is the paragraph</div>
          </li>
          
          <li class="list-group-item">
            <h4 class="list-group-item-heading">This is the heading</h4>
            <div class="list-group-item-text">This is the paragraph</div>
          </li>
        </ul>
        
        <ul class="list-group">
          <li class="list-group-item list-group-item-success">List item</li>
          <li class="list-group-item">List item</li>
          <li class="list-group-item">List item</li>
          <li class="list-group-item">List item</li>
        </ul>
        
        <div class="list-group">
          <a href="#" class="list-group-item">Div List Item</a>
          <a href="#" class="list-group-item list-group-item-info">Div List Item</a>
          <a href="#" class="list-group-item">Div List Item</a>
          <a href="#" class="list-group-item">Div List Item</a>
        </div>
      </div>
        
      <hr>
      
      <div class="container">
        <div class="panel panel-success">
          <div class="panel-heading">
            <h4>
              <a href="#abc" data-toggle="collapse">
                This is a panel Heading
              </a>
            </h4>
          </div>
          <div id="abc" class="collapse panel-collapse in">
            <div class="panel-body">
              <p>This is a panel body</p>
            </div>
          </div>
          <div class="panel-footer">
            This is a panel footer
          </div>
        </div>
        
      </div>
      
      <div class="container">
        
        
        <hr>
        
        <div class="container">
          <button class="btn btn-info" data-target="#dty" data-toggle="collapse">Click to Collapse</button>
          <div id="dty" class="collapse">
            The data to be collapsed is in here...
          </div>
          <button class="btn btn-info" data-target="#img" data-toggle="collapse">Click to Collapse</button>
          
          <div id="img" class="collapse">
            <img src="https://1.bp.blogspot.com/-q4P41NJQpi0/UAqEvBGPfmI/AAAAAAAANJY/kGxJf2E1qGE/s1600/turtle8.jpg" width=200px/>
          </div>

          
        </div>
        
        <hr><br>
        
        <div class="panel panel-danger">
          <div class="panel-heading">
            <h4>This is a panel heading</h4>
          </div>
          
          <div class="panel-body">
            <p>This is a panel body</p>
          </div>
          
          <div class="panel-footer">
            This is a panel footer
          </div>
        </div>
        
        <div class="panel panel-warning">
          <div class="panel-heading">
            <h4>This is a panel heading</h4>
          </div>
          
          <div class="panel-body">
            <p>This is a panel body</p>
          </div>
          
          <div class="panel-footer">
            This is a panel footer
          </div>
        </div>
        
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h4>This is a panel heading</h4>
          </div>
          
          <div class="panel-body">
            <p>This is a panel body</p>
          </div>
          
          <div class="panel-footer">
            This is a panel footer
          </div>
        </div>
        
        <div class="panel panel-info">
          <div class="panel-heading">
            <h4>This is a panel heading</h4>
          </div>
          
          <div class="panel-body">
            <p>This is a panel body</p>
          </div>
          
          <div class="panel-footer">
            This is a panel footer
          </div>
        </div>
        
        <div class="panel panel-success">
          <div class="panel-heading">
            <h4>This is a panel heading</h4>
          </div>
          
          <div class="panel-body">
            <p>This is a panel body</p>
          </div>
          
          <div class="panel-footer">
            This is a panel footer
          </div>
        </div>
      
        
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4>This is a panel heading</h4>
          </div>
          
          <div class="panel-body">
            <p>This is a panel body</p>
          </div>
          
          <div class="panel-footer">
            This is a panel footer
          </div>
        </div>
      </div>
      
      <p id="currentTime"></p>
      <script src="script.js"></script>
  </body>
</html>