<?php
include_once('dbconfig.php');

class ListaPosts{
    public function select_all(){
        global $pdo;

        $query = $pdo->prepare("SELECT * FROM `tbports`");

        $query->execute();

        return $query->fetchAll();

    }



}

?>