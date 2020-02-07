<html> <head></head>    
<body>
<?php
    $name = $_REQUEST["gName"];
    $email = $_REQUEST["gEmail"];
    $comments = $_REQUEST["comments"];
?>
<p>Thank you for signing the guest book </p>
<table border = "1">
<tr><th>Your Name:</th> <td> <?php echo("$name");?> </td></tr>
<tr><th>Email:</th> <td> <?php echo("$email");?></td></tr>
<tr><th>Comments: </th> <td> <?php echo("$comments");?> </td></tr>
</table>
</body>
</html>