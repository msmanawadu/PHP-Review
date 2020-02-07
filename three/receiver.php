<html>
<head></head>    
<body>
<?php
$name = $_REQUEST["sName"];
$sub1 = $_REQUEST["subject1"];
$sub2 = $_REQUEST["subject2"];

$total = $sub1+$sub2;
$avg = $total/2;

echo("<p> Student Name: $name <p>");
echo("Total Marks: $total <br>");
echo("Average Marks: $avg <br>");
if($avg >= 50) {
    echo("Status: You have Passed :)");
} else {
    echo("Status: You have Failed :(");
}
?>    
</body>
</html>