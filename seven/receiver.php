<html><head></head>
<body>
<h2><u> Thank you for subscribing to our magazine </u></h2>   

<?php
    $name = $_REQUEST["name"];
    $telephone = $_REQUEST["telephone"];
    $duration  = $_REQUEST["duration"];

    switch($duration) {
        case "1 month": $fee = 100; break;
        case "6 month": $fee = 550; break;
        case "1 year": $fee = 1000; break;
        default:
    }
    $subscribe = $_REQUEST["subscribe"];
    if($subscribe == "Yes"){
        $fee = $fee+50;
    }
?>
<table border = "1">
<tr><th>Name:</th> <td><?php echo("$name");?></td></tr>
<tr><th>Telephone No:</th> <td><?php echo("$telephone");?></td></tr>
<tr><th>Total Subscription Fee:</th> <td><?php echo("$fee");?></td></tr>
</table>
</body>
</html>