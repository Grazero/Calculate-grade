<!DOCTYPE html>
<html>
<body>
 
point :<?php echo $_GET["point"];
    $num =$_GET["point"];

    if (($num>=79.5)&&($num<=100)) {
        echo "<br>";
      echo "A";
    }
    else if (($num>=74.5)&&($num<=79.4)) { 
        echo "<br>";   
        echo "B+".'<br>';   
     }
     else if (($num>=69.5)&&($num<=74.4)) { 
        echo "<br>";   
        echo "B".'<br>';   
     }
     else if (($num>=64.5)&&($num<=69.4)) { 
        echo "<br>";   
        echo "C+".'<br>';   
     }
     else if (($num>=59.5)&&($num<=64.4)) { 
        echo "<br>";   
        echo "C".'<br>';   
     }
     else if (($num>=54.5)&&($num<=59.4)) { 
        echo "<br>";   
        echo "D+".'<br>';   
     }
     else if (($num>=49.5)&&($num<=54.4)) { 
        echo "<br>";   
        echo "D".'<br>';   
     }
     else if ($num<=49.4) { 
        echo "<br>";   
        echo "F".'<br>';   
     }

?>
<br>



</body>
</html>