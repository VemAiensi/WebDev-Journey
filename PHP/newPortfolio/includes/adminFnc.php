<?php
    function update(){
        include("includes/sqlconnection.php");
        $sql = "SELECT * from portfolio_details WHERE id_name='brand'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();

        echo "$row[text_value]";

        $conn->close();
    }

    function getExp(){
        include("includes/sqlconnection.php");
        $sql = "SELECT * from portfolio_details WHERE id_name='exp'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();

        echo "$row[text_value]";

        $conn->close();
    }

    function getSkill(){
        include("includes/sqlconnection.php");
        $sql = "SELECT * from portfolio_details WHERE id_name='skill'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();

        echo "$row[text_value]";

        $conn->close();
    }

    function getCert(){
        include("includes/sqlconnection.php");
        $sql = "SELECT * from portfolio_details WHERE id_name='cert'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();

        echo "$row[text_value]";

        $conn->close();
    }

    function getAbout(){
        include("includes/sqlconnection.php");
        $sql = "SELECT * from portfolio_details WHERE id_name='about'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();

        echo "$row[text_value]";

        $conn->close();
    }

    function getLogo(){
        include("includes/sqlconnection.php");
        $sql = "SELECT * from portfolio_assets";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();

        echo "$row[logo_pic]";

        $conn->close();
    }

    function showSkillIcons(){
        include("includes/sqlconnection.php");
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

    function showCertsCarousel(){
        include("includes/sqlconnection.php");
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
        include("includes/sqlconnection.php");
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

    function previewLinks(){
        include("includes/sqlconnection.php");
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
                    echo "</div>";
                    $col = 0;
                }
            }
        }
        else{
            echo "<br><h3 class='text-center'>No Item to Show</h3><br>";
        }
   
    }

    function getUser($id) {
        include("includes/sqlconnection.php");
        $sql = "SELECT * from user WHERE id=$id";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();

        echo "$row[first_name]";

        $conn->close();
    }
?>