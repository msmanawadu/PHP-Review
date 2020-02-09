<html><head></head>
<body>
<h1>Uploaded file Meta data</h1>
<?php
    $name = $_FILES["file1"]["name"];
    $type = $_FILES["file1"]["type"];
    $size = $_FILES["file1"]["size"];
    $tempName = $_FILES["file1"]["temp_name"];

    echo("Actual file Name: $name <br>"."File Type: $type <br>"."File size: $size <br>"."Temporary file name: $tempName");
?>
</body>
</html>