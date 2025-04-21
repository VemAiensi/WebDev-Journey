<html>
    <head>
        <title>GET From Link</title>
    </head>
    <body>
        <?php
            if ($_GET){
                echo "Items: " .$_GET['item'] .'<br>';
                echo "Quantity: " .$_GET['quantity'];
            }

            else{
                echo "<a href='getlink.php?item=paper&quantity=50'>submit</a>";
            }
        ?>
    </body>
</html>