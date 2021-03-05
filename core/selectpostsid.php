<?php


include_once('dbconfig.php');

class Posts{
    public function select_id($post_id){
        global $pdo;

        $query = $pdo->prepare("SELECT * FROM `tbports` WHERE id= ?");
        $query->bindValue(1, $post_id);
        $query->execute();

        return $query->fetch();

    }



}

?>