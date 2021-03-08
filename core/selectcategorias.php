<?php
include_once('dbconfig.php');

class ListaCategorias{
    public function selecao_all(){
        global $pdo;

        $sql ="SELECT * FROM `tbcategorias`";

        $query = $pdo->prepare($sql);

        $query->execute();

        return $query->fetchAll();

    }



}

?>