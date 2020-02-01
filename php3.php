<html><head></head>
<body>
<?php
    //Associative array - method 1
    $province = array("western"=>"colombo", "southern"=>"matara");
    $city = $province["southern"];
    echo("I live in $city");

    //Listing all array elements
    foreach($province as $pro) {
        echo("<li> I live in $pro </li>");
    } 
?>
</body>
</html>