/*----------Fornecedor----------*/
$(document).ready(function() {
    /*
     * João Marco R Stefani
     * Documento CNPJ e CEp
     * @param {type} param1
     * @param {type} param2
     */
    $("#documento").on('change', function(e){
        if($("#documento").val() === "1"){
            $("#bloco_fisica").show();
            $("#bloco_juritica").hide();
        }else if($("#documento").val() === "2"){
            $("#bloco_juritica").show();
            $("#bloco_fisica").hide();
        }else{
            $("#bloco_juritica").hide();
            $("#bloco_fisica").hide();
        }
    });
    
    /*
     * João Marcos R Stefani
     * Mask para CEP, CPF, CNPJ
     */
    $('#cpf').mask("999.999.999-99", {reverse: true});
    $('#cnpj').mask('99.999.999/9999-99', {reverse: true});
    
});

/*
 * Bloco de funcoes do bloco endereco
 * João Marcos R stefani
 * @param {type} count_endereco
 * @returns {undefined}
 */
 function buscaCep(count_endereco){
    if(count_endereco){ 
        buscacep.buscaPorCep($('#cep'+count_endereco).val(), function(data) {
            if(data){
                //$("#endereco"+count_endereco).val(data.logradouro);
                $("#endereco"+count_endereco).val(data.logradouro);
                $("#bairro"+count_endereco).val(data.bairro);
                $("#cidade"+count_endereco).val(data.localidade);
                $("#uf"+count_endereco).val(data.uf);
            }else{
                swal({
                    title: "",
                    text: "CEP não encontrado.",
                    type: "info"
                });
            }
        });
    }else{
        $('#cep').on('blur', function() {
            buscacep.buscaPorCep($('#cep').val(), function(data) {
                if(data){
                    //$("#endereco"+count_endereco).val(data.logradouro);
                    $("#endereco").val(data.logradouro);
                    $("#bairro").val(data.bairro);
                    $("#cidade").val(data.localidade);
                    $("#uf").val(data.uf);
                }else{
                    swal({
                        title: "",
                        text: "CEP não Encontrado.",
                        type: "info"
                    });
                }
            });
        });
    }
}
      
function removerEndereco(count_endereco){
    console.log("Teste teste ");
    $('#bloco_endereco_'+count_endereco).remove();
} 

/*
 * João Marcos R Stefani
 * Botão de cancelar cadastro
 * @returns {undefined}
 */
function cancelar_cadastro(){
    swal({
        title:"",
        text: "Deseja cancelar o cadastro?",
        type: "info",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Sim",
        cancelButtonText: "Não",
        closeOnConfirm: true,
        closeOnCancel: true
      },
    function(isConfirm){
        if (isConfirm) {
           location.reload(true);
        } 
    });
}

/*
 * João Marcos R Stefani
 * Bloco de funcao do telefone
 * @param {type} count_telefone
 */
function removerTelefone(count_telefone){
    $('#bloco_telefone_'+count_telefone).remove();
}

/*
 * João Marcos R Stefani
 * Bloco valida CPF
 */
function validacaoCPF(){
    if(!$('#cpf').validateCPF()){
         swal({
            title: "",
            text: "CPF é Invalido.",
            type: "info"
        });
    }
}

/*
 * João Marcos R Stefani
 * Bloco valida CNPJ
 */
$(document).ready(function(){
   $('#cnpj').validacnpj();
});

/*
 * João Marcos R Stefani
 * Bloco de razão social e nome fantasia 
 */
function clonarNome(){
    $('#nome_fantasia').val($('#razao_social').val());
}

/*
 * João Marcos R Stefani
 * Bloco Remover Documento
 */
function removerDocumento(){
    $("#bloco_juritica").hide();
    $("#bloco_fisica").hide();
}

/*----------Banco----------*/
/*
 * João Marcos R Stefani
 * Bloco de funcao do agencia
 * @param {type} count_agencia
 */
function removerAgencia(count_agencia){
    $('#bloco_agencia_'+count_agencia).remove();
}