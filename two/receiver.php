<html>
<head></head>
<body>
<h1> Enter Your Data </h1> 
<form name = "form1" method = "POST" action = "http://localhost:8888/two/receiver.php">
Name: <input type = "text" name = "uName"> <br>
Password: <input type = "password" name = "pWord"> <br>
<input type = "submit" name = "cmd1" value = "Submit Data">
</form>
<hr>
<?php 
$name = $_REQUEST["uName"];
$pwd = $_REQUEST["pWord"];
echo("Username : $name"."<br>"."Password : $pwd");
?>    
</body>
</html>