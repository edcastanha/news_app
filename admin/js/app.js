$(document).ready(function() {

    $.get("public/admin/view.php", function(data) {
        $("#table_content").html(data);
    });

    $('#link-add').hide();

    $('#show-add').click(function() {
        $('#link-add').slideDown(500);
        $('#show-add').hide();
    });

    $('#add').click(function() {
        var nome = $('#nome').val();
        var email = $('#email').val();
        var senha = $('#senha').val();

        $.ajax({
            url: "public/admin/add.php",
            type: "POST",
            data: { nome: nome, email: email, senha: senha },
            success: function(data, status, xhr) {
                $('#nome').val('');
                $('#email').val('');
                $('#senha').val('');
                $.get("public/admin/view.php", function(html) {
                    $("#table_content").html(html);
                });
                $('#records_content').fadeOut(1100).html(data);
            },
            error: function() {
                $('#records_content').fadeIn(3000).html('<div class="text-center">error here</div>');
            },
            beforeSend: function() {
                $('#records_content').fadeOut(700).html('<div class="text-center">Loading...</div>');
            },
            complete: function() {
                $('#link-add').hide();
                $('#show-add').show(700);
            }
        });
    }); // add close

}); // document ready close
