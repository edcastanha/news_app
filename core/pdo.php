<?php

//Arquivo de testes para rotinas PDO / Mysql

  $host =  'localhost';
  $user = 'root';
  $password = 'newsapp';
  $dbname = '';

  // Set DSN
  $dsn = 'mysql:host='. $host .';dbname='. $dbname;

  // Criando a instancia PDO
  $pdo = new PDO($dsn, $user, $password);
  $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
  $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

  # PDO QUERY

  // $stmt = $pdo->query('SELECT * FROM tbtbnoticias');

  // while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
  //   echo $row['titulo'] . '<br>';
  // }

  // while($row = $stmt->fetch()){
  //   echo $row->titulo . '<br>';
  // }

  # (prepare & execute)

  // BUSCA POR VARIAVEL
  $nome = 'Brad';
  $id = 1;
  $limit = 1;

  // Positional Params
  $sql = 'SELECT * FROM tbnoticias WHERE idautor = ? && is_published = ? LIMIT ?';
  $stmt = $pdo->prepare($sql);
  $stmt->execute([$nome,  $limit]);
  $noticias = $stmt->fetchAll();

  // Nomeando variaveis de busca
  // $sql = 'SELECT * FROM tbnoticia WHERE nome = :nome && is_published = :is_published';
  // $stmt = $pdo->prepare($sql);
  // $stmt->execute(['nome' => $nome, 'is_published' => $is_published]);
  // $tbnoticias = $stmt->fetchAll();

  // //var_dump($tbnoticias);
  foreach($noticias as $post){
    echo $post->title . '<br>';
  }

  //BUSCA POR POST

  // $sql = 'SELECT * FROM tbnoticias WHERE id = :id';
  // $stmt = $pdo->prepare($sql);
  // $stmt->execute(['id' => $id]);
  // $post = $stmt->fetch();

  // echo $post->body;

  // ROW COUNT
  // $stmt = $pdo->prepare('SELECT * FROM tbnoticias WHERE criado = ?');
  // $stmt->execute([$criado]);
  // $postCount = $stmt->rowCount();

  // echo $postCount;

  // INSERT DATA
  // $title = 'Primeiro Post';
  // $conteudo = 'cuiahbxiuawshxaijuhcnjanbc cbncijabncipabciujb';
  // $slogan = 'jhbcbelcbla eace';

  // $sql = 'INSERT INTO tbnoticias(title, body, nome) VALUES(:title, :body, :nome)';
  // $stmt = $pdo->prepare($sql);
  // $stmt->execute(['title' => $title, 'body' => $body, 'nome' => $nome]);
  // echo 'Post Added';

  // UPDATE 
  // $id = 1;
  // $body = 'This is the updated post';

  // $sql = 'UPDATE tbnoticias SET conteudo = :body WHERE id = :id';
  // $stmt = $pdo->prepare($sql);
  // $stmt->execute(['conteudo' => $body, 'id' => $id]);
  // echo 'Post Updated';

  // DELETE 
  // $id = 3;

  // $sql = 'DELETE FROM tbnoticias WHERE id = :id';
  // $stmt = $pdo->prepare($sql);
  // $stmt->execute(['id' => $id]);
  // echo 'Post Deleted';

  // BUSCA LIKE %
  // $search = "%f%";
  // $sql = 'SELECT * FROM tbnoticias WHERE title LIKE ?';
  // $stmt = $pdo->prepare($sql);
  // $stmt->execute([$search]);
  // $tbnoticias = $stmt->fetchAll();

  // foreach($tbnoticias as $post){
  //   echo $post->title . '<br>';
  // }
  