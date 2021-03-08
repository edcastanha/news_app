<?php


include_once('dbconfig.php');

class PostsCategoria{
    
    public function select_id($post_id){
        global $pdo;

        $query = $pdo->prepare("SELECT * FROM `tbnoticias` WHERE categoriaid= ?");
        $query->bindValue(1, $post_id);
        $query->execute();

        return $query->fetch();

    }



}

?>