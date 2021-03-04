$(document).ready(function() {

    $.get("public/editores/view.php", function(data) {
        $("#table_content").html(data);
    });

    $('#link-add').hide();

    $('#show-add').click(function() {
        $('#link-add').slideDown(500);
        $('#show-add').hide();
    });

    $('#add').click(function() {
        var titulo = $('#titulo').val();
        var sloga = $('#sloga').val();
        var conteudo = $('#conteudo').val();

        $.ajax({
            url: "public/editores/add.php",
            type: "POST",
            data: { titulo: titulo, sloga: sloga, conteudo: conteudo },
            success: function(data, status, xhr) {
                $('#titulo').val('');
                $('#sloga').val('');
                $('#conteudo').val('');
                $.get("public/editores/view.php", function(html) {
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
