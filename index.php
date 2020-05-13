<html>
<head>
<title>Simple PHP page</title>
</head>
<body>
<?php
    $bgcolour = mt_rand( 0, 0xFFFFFF);
    $servername = gethostname();
    
    echo "<body style='background-color:$bgcolour'>";
    echo "<b>This is a simple web application</b>\n";
    echo "Server name $servername\n";
?>
</body>
</html>
