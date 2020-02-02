<html><head></head>
<body>
<h1>Receiving Data</h1>
<?php
    $link = $_REQUEST["type"];
    $choice1 = $_REQUEST["choice1"];
    $choice2 = $_REQUEST["choice2"];
?> 
<h2>Favourite <?php echo("$link"); echo("s");?> </h2>
<ol>
    <li> <?php echo("$choice1");?> </li>
    <li> <?php echo("$choice2");?> </li>
</ol>
</body>
</html>