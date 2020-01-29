<!DOCTYPE html>
 
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP CRUD MySQL</title>
    </head>
    <body>
        <h2 class="sub-header">Idiomas</h2>
<?php
    include './database/DatabaseConnect.php';
 
    $dConnect = new DatabaseConnect;
    $cdb = $dConnect->dbConnectSimple();
?>
 
    </body>
</html> 