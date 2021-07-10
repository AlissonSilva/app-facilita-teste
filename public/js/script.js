$(document).ready(function () {
    $("#pesquisar_livros").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#tabela_livros tbody tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});
