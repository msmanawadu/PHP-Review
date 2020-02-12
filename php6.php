<html><head></head>
<body>
<h2>Reading records from a table</h2>
<?php
    //make DB connection
    $link = mysql_connect("localhost:8888","root","") or die("Error in DB connection");

    //make DB selection
    mysql_select_db("Web",$link) or die("Error in DB selection");

    //Query execution
    $query = "SELECT * FROM 'userinfo'";

    $result = mysql_query($query) or die("Error in query execution.mysql_error();");
?>
<table border = "1">
<tr><th>Number</th> <th>Name</th> <th>Status</th></tr>
<?php
    while($row = mysql_fetch_array($result)){   
    echo("<tr>");
    echo("<td>$row[userid]</td>");
    echo("<td>$row[uname]</td>");
    echo("<td>$row[status]</td>");
    echo("</tr>");
    }
?>
</table>
</body>
</html>




