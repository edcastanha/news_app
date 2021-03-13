<?php
include_once('dbconfig.php');

class ListaPosts{

       public function selectAll(){
        global $pdo;
        $sql ="SELECT * FROM `tbnoticias`";
        $query = $pdo->prepare($sql);
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        $query->closeCursor();
        return $result;
    }

    public function selectById($post_id){
        global $pdo;
        $query = $pdo->prepare("SELECT * FROM `tbnoticias` WHERE id= ?");
        $query->bindValue(1, $post_id);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);
        $query->closeCursor();
        return $result;
    }

    public function deleteById($post_id){
        global $pdo;
        $query = $pdo->prepare("DELETE FROM `tbnoticias` WHERE id= ?");
        $query->bindValue(1, $post_id);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function insert($post){
        global $pdo;
        $sql = "
            INSERT INTO `tbnoticias` (titulo, sloga, conteudo, autorId, categoriaId, criado)
            VALUES (:titulo, :sloga, :conteudo, :autorId, :categoriaId, :criado);
        ";
        try {   
            $query = $pdo->prepare($sql);
            $query->execute(array(
                'titulo' => $post['titulo'],
                'sloga'  => $post['sloga'],
                'conteudo' => $post['conteudo'],
                'autorId' => $post['autorId'] ?? null,
                'categoriaId' => $post['categoriaId'] ?? null,
                'criado' => $post['criado'] ?? null,
            ));
            return [
                "success" => true,
                "id" => $pdo->lastInsertId(),
            ];
        } catch (\PDOException $e) {
            return [
                "success" => false,
                "error" => $e->getMessage(),
            ];
        }    
    }


    public function update($id, $post){
        global $pdo;
        $sql = "
            UPDATE `tbnoticias` SET
                titulo   = :titulo,
                sloga    = :sloga,
                conteudo = :conteudo,
                autorId  = :autorId,
                categoriaId = :categoriaId,
                criado = :criado
            WHERE id = :id ;
        ";
        try {   
            $query = $pdo->prepare($sql);
            $query->execute(array(
                'id' => (int) $id,
                'titulo' => $post['titulo'],
                'sloga'  => $post['sloga'],
                'conteudo' => $post['conteudo'],
                'autorId' => $post['autorId'] ?? null,
                'categoriaId' => $post['categoriaId'] ?? null,
                'criado' => $post['criado'] ?? null,
            ));
            return [
                "success" => true,
                "post" => $this->selectById($id),
            ];
        } catch (\PDOException $e) {
            return [
                "success" => false,
                "error" => $e->getMessage(),
            ];
        }    
    }


}
