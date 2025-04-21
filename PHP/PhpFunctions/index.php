<?php
    #php functions
    function message(){
        echo "<strong>My First User Defined Function</strong>";
    }

    message();

    echo "<br>---<br>";

    function studname($name){
        echo "$name <br>";
    }
    
    studname("Vem");
    studname("Aiensi");
    studname("Marasigan");

    echo "---<br>";

    ##function with returning values

    function addthis($num1, $num2, $num3){
        $sumis = $num1 + $num2 + $num3;
        return $sumis;
    }

    echo addthis(2,3,10);

    echo "<br><hr><br>";


    #php Arrays
    studname("<strong>PHP Arrays</strong>");

    $color = array("black", "silver", "blue");
    echo count($color);
    echo "<br>---<br>";
    echo "My favorite color are"." ".$color[0]." ".$color[1]." ".$color[2] ;
    echo "<br>---<br>";

    $noarray = count($color);

    for($x = 0; $x < $noarray; $x++){
        echo $color[$x];
        echo "<br>";
    }

?>