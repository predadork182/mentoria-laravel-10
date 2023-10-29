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