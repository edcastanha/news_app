<?php
	require_once('dbconfig.php');
	global $con;

	$query = $con->prepare("SELECT `id`, `titulo`, `sloga`, `couteudo` FROM `tbports` order by id DESC");
	$query->execute();
	mysqli_stmt_bind_result($query, $id, $titulo, $sloga, $conteudo);
	
	?>
	<table class="table table-bordered">
		<tr class="info">
			<th>Registro</th>
			<th>Titulo</th>
			<th>Slogan</th>
			<th>Conteudo</th>
			<th>Ações</th>
		</tr>
	<?php

	while(mysqli_stmt_fetch($query))
	{
		echo '
		<tr>
			<td>'.$id.'</td>
			<td>'.$titulo.'</td>
			<td>'.$sloga.'</td>
			<td>'.$conteudo.'</td>
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
	    url : "public/editores/delete.php",
	    type: "POST",
	    data : { id: id },
	    success: function(data)
	    {
	    	$('#records_content').fadeOut(1100).html(data);
	    	$.get("public/editores/view.php", function(data)
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
	    url : 'public/editores/editar.php',
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