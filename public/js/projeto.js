function deleteRegistroPaginacao(rotaUrl, idDoRegistro){

    if (confirm('Confirmar a exclusão...')){
        $.ajax({
            url: rotaUrl,
            dataType:'json',
            method: 'DELETE',
            headers: {'X-CSRF-TOKEN': $('input[name="csrf-token"]').val()},
            data: {
                id: idDoRegistro,
            },
            beforeSend: function(){
                $.blockUI({
                    message: "Carregando...",
                    timeout: 2000,
                });
            }
        }).done(function(data){
            $.unblockUI();
            if (data.success == true){
                window.location.reload()
            } else {
                console.log('Não foi possível excluír')
            }
        }).fail(function(data){
            $.unblockUI(); 
        });
    }
}

$('#mascara_valor').mask('#.##0,00', { reverse: true });

$("#cep").blur(function () {
    var cep = $(this).val().replace(/\D/g, '');
    if (cep != "") {
        var validacep = /^[0-9]{8}$/;
        if (validacep.test(cep)) {
            $("#logradouro").val("");
            $("#bairro").val(" ");
            $("#endereco").val(" ");
            $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function (dados) {
                if (!("erro" in dados)) {
                    $("#logradouro").val(dados.logradouro.toUpperCase());
                    $("#bairro").val(dados.bairro.toUpperCase());
                    $("#endereco").val(dados.localidade.toUpperCase());
                }
                else {
                    alert("CEP não encontrado de forma automatizado digite manualmente ou tente novamente.");
                }
            });
        }
    }
});