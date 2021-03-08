<?php


function upload_image()
{
    if (isset($_FILES["user_image"])) {
        $extension = explode('.', $_FILES['user_image']['name']);
        $new_nome = rand() . '.' . $extension[1];
        $destinatino = './upload/' . $new_nome;
        move_uploaded_file($_FILES['user_image']['tmp_name'], $destinatino);
        return $new_nome;
    }
}

function get_nome_image($id)
{
    include('dbconfig.php');
    $statement = $connection->prepare("SELECT image FROM tbnoticias WHERE id = '$id'");
    $statement->execute();
    $result = $statement->fetchAll();
    foreach ($result as $row) {
        return $row["image"];
    }
}





function limitarTexto($texto, $limite)
{
    $texto = substr($texto, 0, strrpos(substr($texto, 0, $limite), ' ')) . '...';
    return $texto;
}
