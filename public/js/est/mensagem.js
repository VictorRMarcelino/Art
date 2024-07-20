const Mensagem = {

    dispara: (sTitle, sText, sIcon, bShowCancelarButton = true, fnOk = null, fnCancelar = null) => {
        Swal.fire({
            title: sTitle,
            text: sText,
            icon: sIcon,
            showCancelButton: bShowCancelarButton,
        }).then((result) => {
            if(result.isConfirmed && fnOk != null){
                fnOk.apply();
            }else if(result.isDenied && fnCancelar != null){
                fnCancelar.apply();
            }
        });
    },

    info: (sMensagem) => {
        let me = Mensagem;
        me.dispara('Informação', sMensagem, 'info', false);
    },

    alerta: (sMensagem) => {
        let me = Mensagem;
        me.dispara('Alerta', sMensagem, 'warn', false);
    },

    erro: (sMensagem) => {
        let me = Mensagem;
        me.dispara('Erro', sMensagem, 'error', false);
    },

    pergunta: (sMensagem, fnOk, fnCancelar) => {
        let me = Mensagem;
        me.dispara('Pergunta', sMensagem, 'question', true, fnOk, fnCancelar);
    }
}