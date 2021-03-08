<?php

	require_once('dbconfig.php');
	global $con;
	
	$id = $_POST['id'];

	if(empty($id))
	{
		die();
	}
	$query = $con->prepare("DELETE FROM tbautores where id=?");

	$query->bind_param('i',$id);

	$result = $query->execute();

	if($result)
	{
        echo '<div class="col-md-offset-4 col-md-5 text-center alert alert-success">SUCESSO - Registro Excluido!</div>';
    }
    else
    {
    	exit(mysqli_error($con));
    }
    