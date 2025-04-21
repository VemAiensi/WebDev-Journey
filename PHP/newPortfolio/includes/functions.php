<?php
    function getTitle(){
        include("sqlconnection.php");
        $sql = "SELECT * from portfolio_details WHERE id_name='brand'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();

        echo "$row[text_value]";

        $conn->close();
    }

    function getExp(){
        include("sqlconnection.php");
        $sql = "SELECT * from portfolio_details WHERE id_name='exp'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();

        echo "$row[text_value]";

        $conn->close();
    }

    function getSkill(){
        include("sqlconnection.php");
        $sql = "SELECT * from portfolio_details WHERE id_name='skill'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();

        echo "$row[text_value]";

        $conn->close();
    }

    function getCert(){
        include("sqlconnection.php");
        $sql = "SELECT * from portfolio_details WHERE id_name='cert'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();

        echo "$row[text_value]";

        $conn->close();
    }

    function getAbout(){
        include("sqlconnection.php");
        $sql = "SELECT * from portfolio_details WHERE id_name='about'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();

        echo "$row[text_value]";

        $conn->close();
    }

    function getProfilePic(){
        include("sqlconnection.php");
        $sql = "SELECT * from portfolio_details WHERE id_name='profile_pic'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();

        echo "$row[text_value]";

        $conn->close();
    }

    function getImage(){
        include("sqlconnection.php");
        $sql = "SELECT * from portfolio_details WHERE id_name='image'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();

        echo "$row[text_value]";

        $conn->close();
    }

    function getDesc1(){
        include("sqlconnection.php");
        $sql = "SELECT * from portfolio_details WHERE id_name='desc1'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();

        echo "$row[text_value]";

        $conn->close();
    }

    function getDesc2(){
        include("sqlconnection.php");
        $sql = "SELECT * from portfolio_details WHERE id_name='desc2'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();

        echo "$row[text_value]";

        $conn->close();
    }

    function getLogo(){
        include("sqlconnection.php");
        $sql = "SELECT * from portfolio_assets";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();

        echo "$row[logo_pic]";

        $conn->close();
    }

    function getSubheading(){
        include("sqlconnection.php");
        $sql = "SELECT * from portfolio_details WHERE id_name='subheading'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();

        echo "$row[text_value]";

        $conn->close();
    }

    function previewLinks(){
        include("sqlconnection.php");
        $sql = "SELECT * from websites";
        $result = $conn->query($sql);
        
        $col = 0;
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                if ($col === 0){
                    echo "<div class='row'>";
                }
                
                echo "
                    <div class='col' style='height: 400px'>
                        <embed type='text/html' src='$row[link]' width=100% height=100%>
                    </div>";
                $col++;
    
                if ($col === 2){
                    echo "</div><br>";
                    $col = 0;
                }
            }
        }
        else{
            echo "<br><h3 class='text-center'>No Item to Show</h3><br>";
        }
    }

    function showLinks(){
        include("sqlconnection.php");
        $sql = "SELECT * from websites";
        $result = $conn->query($sql);
        
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                echo "
                    <div class='d-flex bg-warning justify-content-between mb-1'>
                        <span class='m-2'>$row[link]</span>
                        
                        <span>
                        <a href='includes/controller.php?linkId=$row[id]' class='btn btn-danger'><i class='bi bi-trash-fill bi-dark'></i></a>
                        </span>
                        
                    </div>";
            }
        }
        else{
            echo "<br><h3 class='text-center'>No Links</h3><br>";
        }
    }

    function carouselButtons(){
        $folder = 'Assets/certs/';
        
        $images = glob($folder.'*.{jpg,jpeg,png,gif}', GLOB_BRACE);

        for($len = 0; $len<count($images); $len++){
            $activeClass = ($len == 0) ? 'active' : '';
            echo "<button type='button' data-bs-target='#mycarousel' data-bs-slide-to='$len' class='$activeClass'></button>";
        }
    }

    function showSkillIcons(){
        include("sqlconnection.php");
        $sql = "SELECT * from skill_icon";
        $result = $conn->query($sql);

        $iconTexts = array();
        $images = array();

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $iconTexts[] = $row['desc'];
                $images[] = $row['icon_name'];
            }
        }
        else{
            echo "<br><h3 class='text-center'>No Item to Show</h3><br>";
        }

        echo " 
            <div class='container'>
                <div class='row'>";
        
        $x = 0;
        foreach($images as $image){
            echo "
            <div class='col'>
                <a href='#' data-toggle='tooltip' data-placement='bottom'
                    title='$iconTexts[$x]'>
                    <img src='Assets/icons-myexp/$image' class='img-thumbnail'>
                </a>
            </div>";
            $x++;
        }

        echo "</div></div>";      
    }

    function editSkillIcons(){
        include("sqlconnection.php");
        $sql = "SELECT * from skill_icon";
        $result = $conn->query($sql);

        $iconTexts = array();
        $images = array();

        $count = 0;

        $iconLimit=0;

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $iconTexts[] = $row['desc'];
                $images[] = $row['icon_name'];
                
            }
        }
        else{
            echo "<br><h3 class='text-center'>No Item to Show</h3><br>";
        }

        echo " <div class='container'>";
            
        
        foreach($images as $image){
            if($iconLimit==0){
                echo "<div class='row'>";
            }

            echo "
                <div class='col col-md-3 mb-3'>
                    <div class='container'>
                        <div class='row'>
                            <div class='col'>
                            <img src='Assets/icons-myexp/$image' class='img-thumbnail'>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col m-auto'>
                                <div class='d-flex justify-content-between bg-primary'>
                                    <span class='m-auto' style='font-size:100%'>$iconTexts[$count]</span>
                                    <a href='includes/controller.php?icon_name=$iconTexts[$count]&file_name=$image' class='btn btn-danger'><i class='bi bi-trash-fill bi-dark'></i></a>
                                </div>
                             
                            </div>
                            
                        </div>
                    </div>
                </div>
                
            ";
            $count++;
            $iconLimit++;

            if($iconLimit==4){
                echo "</div>";

                $iconLimit =0;
            }
        }

        if($iconLimit == 0){
            echo "
                <div class='row'>
                    <button type='button' class='btn btn-primary btn-lg' data-bs-toggle='modal' data-bs-target='#insertIcon'>
                        <i class='bi bi-plus-circle-fill'></i>
                    </button>
                </div>
            </div>";

        }else{
            echo "
                    <div class='col col-md-3 mb3'>
                        <button type='button' class='btn btn-primary btn-lg' data-bs-toggle='modal' data-bs-target='#insertIcon'>
                            <i class='bi bi-plus-circle-fill'></i>
                        </button>
                    </div>
                </div>
            
        "; 
        }  
    }

    function showCertsCarousel(){
        include("sqlconnection.php");
        $sql = "SELECT * from certs";
        $result = $conn->query($sql);
        $images = array();
        
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $images[] = $row['file_name'];
            }
        }
        else{
            echo "<br><h3 class='text-center'>No Item to Show</h3><br>";
        }

        $i=0;
        foreach($images as $image){
            if ($i==0)
            echo "<div class='carousel-item active'>
                <img src='Assets/certs/$image' class='d-block w-100'>
                </div>";
            else
            echo "<div class='carousel-item'>
                    <img src='Assets/certs/$image' class='d-block w-100'>
                </div>";
            $i++;
        }      
    }

    function showCertsStatic(){
        include("sqlconnection.php");
        $sql = "SELECT * from certs";
        $result = $conn->query($sql);
        $images = array();
        
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $images[] = $row['file_name'];
            }
        }
        else{
            echo "<br><h3 class='text-center'>No Item to Show</h3><br>";
        }

        $col=0;
        foreach($images as $image){
            if ($col === 0){
                echo "<div class='row'>";
            }
            
            echo "
                <div class='col'>
                    <img src='Assets/certs/$image' class='d-block w-100'>
                    <br>
                </div>";
            $col++;

            if ($col === 2){
                echo "</div>";
                $col = 0;
            }
        }     
    }

    function editCerts(){
        include("sqlconnection.php");
        $sql = "SELECT * from certs";
        $result = $conn->query($sql);
        $col=0;
        
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                if ($col === 0){
                    echo "<div class='row'>";
                }
                
                echo "
                    <div class='col col-md-4 mb-3 d-flex'>
                        <img src='Assets/certs/$row[file_name]' class='d-block w-100'>
                        <a href='includes/controller.php?certId=$row[id]&certImage=$row[file_name]' class='btn btn-danger'><i class='bi bi-trash-fill bi-dark'></i></a>
                    </div>";
                $col++;
    
                if ($col === 3){
                    echo "</div>";
                    $col = 0;
                }
            }
        }
        else{
            echo "<br><h3 class='text-center'>No Item to Show</h3><br>";
        }

        if($col==0){
            echo "
            <div class='row'>
                <div class='col col-md-4 mb-3 d-flex'>
                    <div class='container-fluid rounded-3 d-flex bg-primary align-items-center justify-content-center'
                    type='button' data-bs-toggle='modal' data-bs-target='#inCert'>
                        <h1 class='text-light'><i class='bi bi-plus-circle-fill'></i></h1>
                    </div>
                </div>
            </div>
            ";
        }
        else{
            echo "
                <div class='col col-md-4 mb-3 d-flex'>
                    <div class='container-fluid rounded-3 d-flex bg-primary align-items-center justify-content-center'
                    type='button' data-bs-toggle='modal' data-bs-target='#inCert'>
                        <h1 class='text-light'><i class='bi bi-plus-circle-fill'></i></h1>
                    </div>
                </div>
            </div>
            ";
        }
   
    }

    function getUser($recno) {
        include("sqlconnection.php");
        $sql = "SELECT * from user WHERE id='$recno'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();

        echo "$row[first_name]";

        $conn->close();
    }

    function verifyAdmin($recno) {
        include("sqlconnection.php");
        $sql = "SELECT * from user WHERE id='$recno'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();

        if ($row['priviledge'] == 'admin')
        {
            echo "
                <li class='nav-item'>
                    <a class='nav-link' href='manage.php?id=1'>EDIT</a>
                </li>
            ";
        }

        $conn->close();
    }

    function getText1(){

    }

    function getText2(){
    }
?>