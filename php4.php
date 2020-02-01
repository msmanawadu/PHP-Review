<html><head></head>
<body>
<?php
    //Associative array - method 2
    $fruit["red"] = "Apples";
    $fruit["orange"] = "Oranges";
    $fruit["yellow"] = "Pineapple";
    $food = $fruit["red"];
    echo("I love to eat $food");

    //Listing all array elements 
    foreach($fruit as $product){
        echo("<li> I like to eat $product </li>");
    }
?>
</body>
</html>