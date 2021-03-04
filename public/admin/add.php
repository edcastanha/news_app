<?php

	require_once('dbconfig.php');
	global $con;

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];

	if(!empty($nome) && !empty($email) && !empty($senha))
	{
		$query = $con->prepare("INSERT into tbautores (nome, email, senha) VALUES (?,?,?)");

		$query->bind_param('sss',$nome,$email,$senha);

		$result = $query->execute();

		if($result) 
		{
	        echo '<div class="col-md-offset-4 col-md-5 text-center alert alert-success">SUCESSO - Autor cadastrado!</div>';
	    }
	    else
	    	exit(mysqli_error($con));    
	}