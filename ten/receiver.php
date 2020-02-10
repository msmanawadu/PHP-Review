<html><head></head>
<body>
<h2>Submitted Data</h2>    
<?php
    $name = $_REQUEST["name"];
    $email = $_REQUEST["email"];
    echo("Name: $name <br>"."Email: $email <br> <hr>");

    // file handling
    $fileName = $_FILES["file1"]["name"];
    $type = $_FILES["file1"]["type"];
    $size = $_FILES["file1"]["size"];
    $tempName = $_FILES["file1"]["temp_name"];

    $fp = fopen($tempName, "r");

    while(!feof($fp)){
        $text = fgets($fp);
        echo("$text <br>");
    }
    fclose($fp);
?>
</body>
</html>