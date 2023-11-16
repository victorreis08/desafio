
//mascara cep
const handleZipCode = (event) => {
    let input = event.target
    input.value = zipCodeMask(input.value)
  }
  
  const zipCodeMask = (value) => {
    if (!value) return ""
    value = value.replace(/\D/g,'')
    value = value.replace(/(\d{5})(\d)/,'$1-$2')
    return value
  }

  //mascara telefone
  const handlePhone = (event) => {
    let input = event.target
    input.value = phoneMask(input.value)
  }
  
  const phoneMask = (value) => {
    if (!value) return ""
    value = value.replace(/\D/g,'')
    value = value.replace(/(\d{2})(\d)/,"($1) $2")
    value = value.replace(/(\d)(\d{4})$/,"$1-$2")
    return value
  }




function limpa_formulário_cep() {
    //Limpa valores do formulário de cep.
    document.getElementById('txt-ruaEmpresa').value=("");
    document.getElementById('txt-bairroEmpresa').value=("");
    document.getElementById('txt-cidadeEmpresa').value=("");
    document.getElementById('txt-estadoEmpresa').value=("");
}

function meu_callback(conteudo) {
if (!("erro" in conteudo)) {
    //Atualiza os campos com os valores.
    document.getElementById('txt-ruaEmpresa').value=(conteudo.logradouro);
    document.getElementById('txt-bairroEmpresa').value=(conteudo.bairro);
    document.getElementById('txt-cidadeEmpresa').value=(conteudo.localidade);
    document.getElementById('txt-estadoEmpresa').value=(conteudo.uf);
} //end if.
else {
    //CEP não Encontrado.
    limpa_formulário_cep();
    alert("CEP não encontrado.");
}
}

function pesquisacep(valor) {

//Nova variável "cep" somente com dígitos.
var cep = valor.replace(/\D/g, '');

//Verifica se campo cep possui valor informado.
if (cep != "") {

    //Expressão regular para validar o CEP.
    var validacep = /^[0-9]{8}$/;

    //Valida o formato do CEP.
    if(validacep.test(cep)) {

        //Preenche os campos com "..." enquanto consulta webservice.
        document.getElementById('txt-ruaEmpresa').value="...";
        document.getElementById('txt-bairroEmpresa').value="...";
        document.getElementById('txt-cidadeEmpresa').value="...";
        document.getElementById('txt-estadoEmpresa').value="...";

        //Cria um elemento javascript.
        var script = document.createElement('script');

        //Sincroniza com o callback.
        script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

        //Insere script no documento e carrega o conteúdo.
        document.body.appendChild(script);

    } //end if.
    else {
        //cep é inválido.
        limpa_formulário_cep();
        alert("Formato de CEP inválido.");
    }
} //end if.
else {
    //cep sem valor, limpa formulário.
    limpa_formulário_cep();
}
};