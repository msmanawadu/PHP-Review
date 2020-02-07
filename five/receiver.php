<html><head></head>
<body>
<h1>Submitted Data</h1>
<?php
    $name = $_REQUEST["name"];
    $address = $_REQUEST["address"];
    $telephone = $_REQUEST["telephone"];
    $rooms = $_REQUEST["rooms"];
    $roomType = $_REQUEST["roomType"];

    echo("Name: $name <br>"."Address: $address <br>"."Telephone: $telephone <br>"."Number of Rooms: $rooms <br>"."Room Type: $roomType <br>");
    echo("Extras: ");

    // checkboxes allow multiple selections
    if(isset($_REQUEST["extras1"])){
        $extras1 = $_REQUEST["extras1"];
        echo("$extras1 <br>");
    }
    if(isset($_REQUEST["extras2"])) {
       $extras2 = $_REQUEST["extras2"];
       echo("$extras2 <br>");
    }
    if(isset($_REQUEST["extras3"])) {
        $extras3 = $_REQUEST["extras3"];
        echo("$extras3 <br>");
    } 
?>
</body>
</html>