<!DOCTYPE html>
<html>
    <head>
        <title>Student Profile</title>
    </head>

    <body>
        <h1>Add New Blog Entry</h1>
        <form action="controller.php" method="POST" enctype="multipart/form-data">
            <table>
                <tr>
                    <th>Title</th>
                    <td><input type="text" name="txttitle"></td>
                </tr>
                <tr>
                    <th>Author</th>
                    <td><input type="text" name="txtauthor"></td>
                </tr>
                <tr>
                    <th>Photo</th>
                    <td><input type="file" name="txtfile"></td>
                </tr>
                <tr>
                    <th>Blog</th>
                    <td><textarea name="description"></textarea></td>
                </tr>
                <tr>
                    <th>Date</th>
                    <td><input type="text" name="txtdate"></td>
                </tr>
            </table>
            <button type="submit" name="save_record">Save</button>
        </form>
        
    </body>
</html>