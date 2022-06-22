<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Storage</title>
<?php
 $c = $_GET['c'];
 $fd = fopen("file.txt","w");
 fwrite($fd, $c);
 fclose($fd);
?>
    </head>
    <body>
       <p>
        Test: local storage session.
       </p>
    </body>
    
</html>
