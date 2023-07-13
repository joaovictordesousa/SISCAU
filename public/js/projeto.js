function deleteRegistroPaginacao(rotaUrl, idDoRegistro) {

    if (confirm('Deseja comfirmar a exclusão?')) {
        $.ajax({
            url: rotaUrl,
            method: 'DELETE',
            headers: {},
            data: {
                id: idDoRegistro,
            },

            beforesend: function () {
                $.blockUI({
                    message: 'Carregando...',
                    timeout: 2000,
                });
            },
        }).done(function (data) {
            $.unblockUI();
            console.log(data);
        }).done(function (data) {
            $.unblockUI();
            console.log(data);
        }).fail(function (data) {
            $.unblockUI();
        });
    }
}