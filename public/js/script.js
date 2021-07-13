$(document).ready(function () {
    $(document).on('keypress', 'input.only-number', function (e) {
        var $this = $(this);
        var key = (window.event) ? event.keyCode : e.which;
        var dataAcceptDot = $this.data('accept-dot');
        var dataAcceptComma = $this.data('accept-comma');
        var acceptDot = (typeof dataAcceptDot !== 'undefined' && (dataAcceptDot == true || dataAcceptDot == 1) ? true : false);
        var acceptComma = (typeof dataAcceptComma !== 'undefined' && (dataAcceptComma == true || dataAcceptComma == 1) ? true : false);
        if ((key > 47 && key < 58) || (key == 46 && acceptDot) || (key == 44 && acceptComma)) {

            return true;
        } else {
            return (key == 8 || key == 0) ? true : false;
        }
    });

    function fib(numMax) {
        for (var fibArray = [0, 1], i = 0, j = 1, k = 0; k < numMax; i = j, j = x, k++) {
            x = i + j;
            fibArray.push(x);
        }
        // console.log(fibArray);
        return fibArray;
    }


    $('#calcfib').click(function () {
        $('#resultadofib').html('');
        var arrayFib = [];
        var valores = $('#seqfib').val();
        const obj1 = valores.split(",");
        for (var i = 0; i < obj1.length; i++) {
            const fibo = fib(obj1[i]);

            if (fibo.indexOf(parseInt(obj1[i])) != -1) {
                arrayFib.push(obj1[i]);
            }
        }
        $('#resultadofib').html("Resultado Fibonacci: " + arrayFib.sort());
        console.log('fib: ' + arrayFib.sort());
    });


    $("#pesquisar_problema_two").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#tabela_problema_two tbody tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });


    $('#tituloLivro').autocomplete({
        source: function (request, response) {
            $.getJSON('/api/apifacilita/livros/getlivros?term=' + request.term, function (data) {
                var array = $.map(data, function (row) {
                    return {
                        label: row.titulo,
                        id_livro: row.id_livro,
                        autor: row.autor,
                        ano_publicacao: row.ano_publicacao

                    }
                });
                response($.ui.autocomplete.filter(array, request.term));
            });
        },
        minLength: 1,
        delay: 500,
        select: function (event, ui) {
            $('#tituloLivro').val(ui.item.label + ' (' + ui.item.autor + ', ' + ui.item.ano_publicacao + ')');
            $('#id_livro').val(ui.item.id_livro);
            return false;
        }
    }).autocomplete("instance")._renderItem = function (ul, item) {
        return $("<li class='each'>")
            .append("<div class='acItem'><span class='name'>" +
                "Livro: " + item.label + "</span><br><span class='desc'>" +
                "Autor: " + item.autor + "</span><br><span class='desc'>" +
                "Ano de publicação: " + item.ano_publicacao + "</span></div>")
            .appendTo(ul);
    };

    $('#inserirLivro').click(function () {
        var id_livro = $('#id_livro').val();
        var id_usuario = $('#id_usuario').val();
        var tipo = $('#tipo').val();

        //  alert(id_livro+' '+id_usuario);
        $.ajax({
            type: 'post',
            url: '/appfacilita/problemas/two/locacao/reserva/adicionar/',
            header: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            data: {
                _token: $('meta[name="csrf-token"]').attr('content'), id_livro: id_livro, id_usuario: id_usuario, tipo: tipo
            },
            success: function (e) {
                if (e.msg == 'true') {
                    location.reload();
                    $('#resultado').html(e.alert);
                } else {
                    $('#resultado').html(e.alert);
                }
            }
        });

    });




});
