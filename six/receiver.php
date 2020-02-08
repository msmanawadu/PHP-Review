<html><head></head>
<body>
<h1><u> Menu </u></h1>    
<form name = "form1" method = "POST" action = "http://localhost:8888/six/receiver.php">
<h2> What would you like to have for dinner ? </h2>
<input type = "checkbox" name = "dinner1" value = "Fried Rice"/> Fried Rice 
<input type = "checkbox" name = "dinner2" value = "Hoppers" checked /> Hoppers 
<input type = "checkbox" name = "dinner3" value = "Bread" /> Bread <br>
<h2> What would you like to drink ? </h2>
<input type = "checkbox" name = "drink1" value = "Tea"/> Tea 
<input type = "checkbox" name = "drink2" value = "Coffee"/> Coffee 
<input type = "checkbox" name = "drink3" value = "Fruit Drink" checked/> Fruit Drink <br>

<input type = "submit" name = "cmd1" value = "Order"/>
<input type = "reset" name = "cmd2" value = "Cancel"/>
</form>

<hr>
<h1> Submitted Data </h1>
<?php
   echo("Dinner Selections <br>");
   if(isset($_REQUEST["dinner1"])){
       $dinner1 = $_REQUEST["dinner1"];
       echo("$dinner1 <br>");
   }
   
   if(isset($_REQUEST["dinner2"])){
       $dinner2 = $_REQUEST["dinner2"];
       echo("$dinner2 <br>");
   }

   if(isset($_REQUEST["dinner3"])){
       $dinner3 = $_REQUEST["dinner3"];
       echo("$dinner3 <br>");
   }
   
   echo("<hr> Drink Selections <br>");

   if(isset($_REQUEST["drink1"])){
       $drink1 = $_REQUEST["drink1"];
       echo("$drink1 <br>");
   }

   if(isset($_REQUEST["drink2"])){
       $drink2 = $_REQUEST["drink2"];
       echo("$drink2 <br>");
   }

   if(isset($_REQUEST["drink3"])){
       $drink3 = $_REQUEST["drink3"];
       echo("$drink3 <br>");
   }
?>
</body>
</html>