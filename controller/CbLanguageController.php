<?php
 
/**
 * CbLanguageController clase donde agrupamos todas las acciones
 * CRUD (Create Read Update Delete), y otras utilidades adicionales para la
 * tabla de la base de datos <b>cb_language</b>.
 * CbLanguageController class where we group all actions CRUD (Create Read Update Delete), 
 * and additional utilities for database table data <b>cb_language</b>.
  */
class CbLanguageController {
    var $cdb = null;
    /**
     * Devolvemos todos los resultados de la consulta sobre cb_language.
     * We return all the results of the query on cb_language.
     */
    public function readAll(){
        $query = "SELECT * FROM cb_language;";
        $statement = $this->cdb->prepare($query);
        $statement->execute();
        $rows = $statement->fetchAll(\PDO::FETCH_OBJ);
        return $rows;         
    }   



    /**
     * Creamos un nuevo idioma con los parámetros pasados.
     * We create a new language with parameters .
     * @param type $idlanguage
     * @param type $namelanguage
     * @param type $isactive
     * @param type $languageiso
     * @param type $countrycode
     * @param type $isbaselanguage
     * @param type $issystemlanguage
     */
    public function create(){ 
        $sqlInsert = "INSERT INTO cb_language(idlanguage, namelanguage, isactive, languageiso, countrycode, isbaselanguage, issystemlanguage)"
                 . "    VALUES ('".$idlanguage."', '".$namelanguage."', '".$isactive."', '".$languageiso."', '".$countrycode."', '".$isbaselanguage."', '".$issystemlanguage."')";
        try {             
            $this->cdb->exec($sqlInsert);      
        } catch (PDOException $pdoException) {            
            echo 'Error crear un nuevo elemento cb_language en create(...): '.$pdoException->getMessage();
            exit();
        }
    }//Create Method



}