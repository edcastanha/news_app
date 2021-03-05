<?php

	require_once('dbconfig.php');
	global $con;

	$id = $_POST['id'];
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];

	if(!empty($nome) && !empty($email) && !empty($senha) && !empty($id))
	{
		$query = "UPDATE tbautores  SET nome='$nome', email='$email', senha='$senha' WHERE id='$id'";
		if (!$result = mysqli_query($con, $query)) {
	        exit(mysqli_error($con));
	    }
	    echo '<div class="col-md-offset-4 col-md-5 text-center alert alert-success">SUCESSO - Registro Atualizado!</div>';
	}
	else
	{
		echo '<div class="col-md-offset-4 col-md-5 text-center alert alert-danger">Erro na gravação do registro</div>';
	}