<?php
require_once('dbconfig.php');
	global $con;
	$id = $_POST['id'];

	if(empty($id))
	{
		?><div class="text-center">Nenhum registro selecionado <a href="#" onclick="$('#link-add').hide();$('#show-add').show(700);">load...</a></div>
		<?php
		die();
	}
	

	$query = "SELECT * FROM tbautores where id='$id'";
	if (!$result = mysqli_query($con, $query)) {
	        exit(mysqli_error($con));
	    }
	while($row = mysqli_fetch_assoc($result))
	{
		?>
		<div class="form-inline" id="edit-data">
			<div class="form-group col-md-3">
				<input type="text" name="nome"id="nome"value="<?php echo $row['nome']; ?>" placeholder="nome"class="form-control" required />
			</div>
			<div class="form-group col-md-3">
				<input type="text" name="email" id="email" placeholder="email" class="form-control" value="<?php echo $row['email']; ?>" required/>
			</div>
			<div class="form-group col-md-3">
				<input type="text" id="senha" name="senha" placeholder="senha" class="form-control" value="<?php echo $row['senha']; ?>" required />
			</div>
			<div class="form-group col-md-3">
			<button type="button" class="btn btn-primary update" id="<?php echo $row['id']; ?>" name="update">Atualizar</button>
			<button type="button" href="javascript:void(0);" class="btn btn-default" id="cancel" name="add" onclick="$('#link-add').slideUp(400);$('#show-add').show(700);">Cancelar</button>
		</div>
	<?php
	}
	?>

<script type="text/javascript">
	$('.update').click(function() {
		var id = $(this).attr('id');
        var nome = $('#nome').val();
        var email = $('#email').val();
        var senha = $('#senha').val();

        $.ajax({
            url: "update.php",
            type: "POST",
            data: { id: id, nome: nome, email: email, senha: senha },
            success: function(data, status, xhr) {
                $('#nome').val('');
                $('#email').val('');
                $('#senha').val('');
                $('#records_content').fadeOut(1100).html(data);
                $.get("view.php", function(html) {
                    $("#table_content").html(html);
                });
                $('#records_content').fadeOut(1100).html(data);
            },
            complete: function() {
                $('#link-add').hide();
                $('#show-add').show(700);
            }
        });
    }); // update close
</script>