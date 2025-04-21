<!DOCTYPE html>
<html>
    <head>
        <title>Student Profile</title>
    </head>

    <body>
        <h1>Edit Blog Entry</h1>
        <form action="controller.php" method="POST" enctype="multipart/form-data">
            <table>
                <?php
                    getRecord($_GET['id']);
                ?>
                
            </table>
            <button type="submit" name="update_record">Save</button>
        </form>
        
    </body>
</html>

<?php
    function getRecord($recno){
        include("includes/sqlconnection.php");
        $sql = "SELECT * from bloginfo WHERE id='$recno'";
        $result = $conn->query($sql);

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                echo "
                <tr>
                    <input type='hidden' name='txtid' value='".$row['id']."'>
                    <th>Title</th>
                    <td><input type='text' name='txttitle' value='".$row['title']."'></td>
                </tr>
                <tr>
                    <th>Author</th>
                    <td><input type='text' name='txtauthor' value='".$row['author']."'></td>
                </tr>
                <tr>
                    <th>Photo</th>
                    <td><input type='file' name='txtfile'></td>
                    <input type='hidden' name='txtfile_old' value='".$row['file_name']."'>
                </tr>
                <tr>
                    <th>Blog</th>
                    <td><textarea name='description'>'".$row['descript']."'</textarea></td>
                </tr>
                <tr>
                    <th>Date</th>
                    <td><input type='text' name='txtdate' value='".$row['date_']."'></td>
                </tr>
                ";
            }
        }
        else{
            echo "No Record Found";

        }

        $conn->close();
    }
?>