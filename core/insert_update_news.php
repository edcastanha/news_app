<?php
	include('dbconfig.php');
	include('funcoes.php');

	if(isset($_POST["operacao"]))
	{
		if($_POST["operacao"] == "Add")
		{
			$image = '';
			if($_FILES["user_image"]["name"] != '')
			{
				$image = upload_image();
			}
			$statement = $connection->prepare("
				INSERT INTO tbnoticias (titulo, sloga, conteudo, image) 
				VALUES (:titulo, :sloga, :conteudo, :image)
			");
			$result = $statement->execute(
				array(
					':titulo'	=>	$_POST["titulo"],
					':sloga'	=>	$_POST["sloga"],
                    ':conteudo'	=>	$_POST["conteudo"],
					':image'		=>	$image
				)
			);
			if(!empty($result))
			{
				echo 'Inserção Executada';
			}
		}

		if($_POST["operacao"] == "Edit")
		{
			$image = '';
			if($_FILES["user_image"]["name"] != '')
			{
				$image = upload_image();
			}
			else
			{
				$image = $_POST["hidden_user_image"];
			}
			$statement = $connection->prepare(
				"UPDATE tbnoticias 
				SET titulo = :titulo, sloga = :sloga, conteudo = :conteudo, image = :image  
				WHERE id = :id
				"
			);
			$result = $statement->execute(
				array(
					':titulo'	=>	$_POST["titulo"],
					':sloga'	=>	$_POST["sloga"],
                    ':conteudo'	=>	$_POST["conteudo"],
					':image'		=>	$image,
					':id'			=>	$_POST["user_id"]
				)
			);
			if(!empty($result))
			{
				echo 'Atualização efetuada com Sucesso!';
			}
		}
	}