$(document).ready(function () {
    $("#pesquisar_problema_two").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#tabela_problema_two tbody tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });


    $('#tituloLivro').autocomplete({
        source:function(request,response){
            $.getJSON('/api/apifacilita/livros/getlivros?term='+request.term,function(data){
                 var array = $.map(data,function(row){
                     return {
                         label:row.titulo,
                         id_livro:row.id_livro,
                         autor:row.autor,
                         ano_publicacao: row.ano_publicacao
                         
                     }
                 });
                 response($.ui.autocomplete.filter(array,request.term));
            });
        },
        minLength:1,
        delay:500,
        select:function(event,ui){
            $('#tituloLivro').val(ui.item.label+' ('+ui.item.autor+', '+ui.item.ano_publicacao+')');
            $('#id_livro').val(ui.item.id_livro);
            return false;
        }
    }).autocomplete("instance")._renderItem = function(ul, item) {
     return $("<li class='each'>")
         .append("<div class='acItem'><span class='name'>" +
             "Livro: "+item.label + "</span><br><span class='desc'>" +
             "Autor: "+item.autor + "</span><br><span class='desc'>" +
             "Ano de publicação: "+item.ano_publicacao+ "</span></div>")
         .appendTo(ul);
     };

     $('#inserirLivro').click(function(){
         var id_livro = $('#id_livro').val();
         var id_usuario = $('#id_usuario').val();

        //  alert(id_livro+' '+id_usuario);
        $.ajax({
            type: 'post',
            url: '/two/locacao/reserva/adicionar/',
            header: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            data: {
                _token: $('meta[name="csrf-token"]').attr('content'), id_livro:id_livro, id_usuario:id_usuario
            }, 
            success: function(e){
                $('#resultado').html(e);
            }
        });

     });

});
