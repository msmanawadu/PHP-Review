<html><head></head>
<body>
<h1><u> Submitted Data </u></h1>
<?php
    $name = $_REQUEST["name"];
    $address = $_REQUEST["address"];
    $telephone = $_REQUEST["telephone"];
    $courseNo = $_REQUEST["courseNo"];
    $sponsor = $_REQUEST["sponsor"];
    $center = $_REQUEST["center"];
?>
<table border = "1">
<tr><th>Name:</th> <td><?php echo("$name");?></td></tr>
<tr><th>Address:</th><td><?php echo("$address");?></td></tr>
<tr><th>Telephone:</th><td><?php echo("$telephone");?></td></tr>
<tr><th>Course No</th><td><?php echo("$courseNo");?></td></tr>
<tr><th>Sponsored by organization?</th><td><?php echo("$sponsor");?></td></tr>
<tr><th>Course Center</th><td><?php echo("$center");?></td></tr>
</table>
</body>
</html>
