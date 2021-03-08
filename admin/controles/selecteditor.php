<?php


include_once('dbconfig.php');

class Autor{
    public function select_id($post_email, $post_senha){
        global $pdo;

        $query = $pdo->prepare("SELECT * FROM `tbautores` WHERE email= ? AND senha= ?");
        $query->bindValue($post_email, $post_senha);
        $query->execute();

        return $query->fetch();

    }



}

?>