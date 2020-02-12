<html><head></head>
<body>
<h2>Writing a record to a table</h2>
<?php
    //make DB connection
    $link = mysql_connect("localhost:8888","root","") or die("Error in DB connection");

    //make DB selection
    mysql_select_db("Web",$link) or die("Error in DB selection");

    //Query execution
    $query = "INSERT INTO 'Web'.'userinfo'('userid','uname','status')
    values('100','Nimal','No')";

    mysql_query($query) or die("Error in query execution.mysql_error();");
?>
</body>
</html>




