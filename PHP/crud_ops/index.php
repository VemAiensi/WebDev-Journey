<!DOCTYPE html>
<?php session_start();?>
<html>
    <head>
        <title>Wind Instruments</title>

    </head>

    <body>
        <center>
            <h1>Blog Collection</h1>
            <?php
                if(isset($_SESSION["status"]) && $_SESSION != ''){
                    echo $_SESSION["status"];
                    echo"<br><br>";

                    unset($_SESSION["status"]);
                }
            ?>

            <table border="1">
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>File Name</th>
                    <th>Description</th>
                    <th>Date</th>
                </tr>

                <?php viewall();?>
            </table>

            <form action="insert.php" method="POST">
                <button type="submit" name="add_record">Add new record</button>
            </form>
        </center>
    </body>
</html>

<?php
    function viewall(){
        include("includes/sqlconnection.php");
        $sql = "SELECT * from bloginfo order by id";
        $result = $conn->query($sql);

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                echo "
                    <tr>
                        <td>$row[id]</td>
                        <td>$row[title]</td>
                        <td>$row[author]</td>
                        <td><img src='uploads/$row[file_name]' style='width:300px; height:200px;'></td>
                        <td>$row[descript]</td>
                        <td>$row[date_]</td>

                        <td>
                            <a href='edit.php?id=$row[id]'>Edit</a>
                            <a href='controller.php?id=$row[id]&file_name=$row[file_name]'>Delete</a>
                        </td>
                    </tr>
                ";
            }
        }
        else{
            echo "<tr>
                    <td>&nbsp</td>
                    <td>&nbsp</td>
                    <td>&nbsp</td>
                    <td>&nbsp</td>
                    <td>&nbsp</td>
                    <td>&nbsp</td>
                 </tr>";

        }

        $conn->close();
    }
?>