var BotaoLimpar = {
    
    onClickBotaoLimpar: (event) => {
        event.preventDefault();

        const fnLimparCampos = () => {
            let oForm = event.target;

            while(oForm.tagName != 'FORM'){
                oForm = oForm.parentElement;
            }

            oForm.reset();
        }

        Mensagem.pergunta('Deseja limpar todos os campos?', fnLimparCampos);
    }
}