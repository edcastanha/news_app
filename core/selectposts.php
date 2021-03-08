<?php
include_once('dbconfig.php');

class ListaPosts{
    public function selecao_all(){
        global $pdo;

        $sql ="SELECT * FROM `tbnoticias`";

        $query = $pdo->prepare($sql);

        $query->execute();

        return $query->fetchAll();

    }



}

?>