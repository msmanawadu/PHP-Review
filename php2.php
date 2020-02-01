<html><head></head>
<body>
<?php
    // Method 2 - numeric array
    $course[0] = "CSS";
    $course[1] = "DCSD";
    $course[2] = "HD";
    echo("I am following the $course[1] at NIBM <br> ");

    //Listing all array elements 
    foreach($course as $cos){
        echo("<li>I am studying $cos</li>");
    }
?>    
</body>
</html>