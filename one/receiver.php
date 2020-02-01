<html><head></head>
<body>
<h1> Receiving the data </h1>    
<?php
    //Associative array 
    $userId = $_REQUEST["userid"];
    $userName = $_REQUEST["username"];
    $status = $_REQUEST["status"];

    echo("User ID: $userId <br>");
    echo("Username: $userName <br>");
    echo("Status: $status");
?>
</body>
</html>