<?php

	require_once('core/dbconfig.php');
	global $con;

	$query = $con->prepare("SELECT `id`, `nome`, `email`, `senha` FROM `tbautores` order by id DESC");
	$query->execute();
	mysqli_stmt_bind_result($query, $id, $nome, $email, $senha);
	
	?>
	<table class="table table-bordered">
		<tr class="info">
			<th>Registro</th>
			<th>Nome</th>
			<th>Email</th>
			<th>Senha</th>
			<th>Ações</th>
		</tr>
	<?php

	while(mysqli_stmt_fetch($query))
	{
		echo '
		<tr>
			<td>'.$id.'</td>
			<td>'.$nome.'</td>
			<td>'.$email.'</td>
			<td>'.$senha.'</td>
			<td><button id="'.$id.'" class="edit btn btn-info">Atualizar</button>
			<button class="del btn btn-danger" id="'.$id.'">Excluir</button></td>
		</tr>';
	}
		echo '</table>';
	
?>
<script type="text/javascript">
	$('.del').click(function() {
		var id = $(this).attr('id');
		$.ajax({
	    url : "public/admin/delete.php",
	    type: "POST",
	    data : { id: id },
	    success: function(data)
	    {
	    	$('#records_content').fadeOut(1100).html(data);
	    	$.get("public/admin/view.php", function(data)
	    	{	
	    		$("#table_content").html(data); 
	    	});
	    }
	});
}); // delete close

	$('.edit').click(function() {
		var id = $(this).attr('id');
		$('#show-add').hide();
		$.ajax({
	    url : 'public/admin/editar.php',
	    type: 'POST',
	    data : { id: id },
	    success: function(data)
	    {
    		$("#link-add").html(data);
    		$('#link-add').show();
	    }
	});
}); // edit close

</script>