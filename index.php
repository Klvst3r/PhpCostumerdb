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

<table>            
                <tr>
                    <th>LANGUAGE</th>
                    <th>NAME</th>
                    <th>IS ACTIVE?</th>
                    <th>LANGUAGE ISO</th>
                    <th>COUNTRY CODE</th>
                    <th>IS BASE?</th>
                    <th>IS SYSTEM LANGUAGE?</th>
                    <th>ACCIONES</th>
                </tr>           
                
        <?php   
            try {
                $query = "SELECT * FROM cb_language;";
                $statement = $cdb->prepare($query);
                $result = $statement->execute();
                $rows = $statement->fetchAll(\PDO::FETCH_OBJ);
 
                echo '<br />';
                foreach ($rows as $row) {
                    ?>
                    <tr>
                        <td><?php print($row->idlanguage); ?></td>
                        <td><?php print($row->namelanguage); ?></td>
                        <td><?php print($row->isactive); ?></td>
                        <td><?php print($row->languageiso); ?></td>
                        <td><?php print($row->countrycode); ?></td>
                        <td><?php print($row->isbaselanguage); ?></td>
                        <td><?php print($row->issystemlanguage); ?></td>
                    </tr>    
        <?php
                }
            } catch (Exception $exception) {
                echo 'Error hacer la consulta: ' . $exception;
            }
            ?>  
        </table>
    
 
    </body>
</html> 