<html><head></head>
<body>
<?php
    // Method 1 of numeric arrays 
     $color = array("red", "blue", "green");
     echo("My favourite color is $color[1] <br>");

     //Listing all array elements
     foreach($color as $col){
        echo("<li> I like color $col </li>");
     }
?>
</body>
</html>