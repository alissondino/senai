var classificacao = $('#classificacao');
var mensagemDeResposta = $("#mensagemResposta");
var form = $("#formulario");
var sessaoResposta = $("#sessaoResposta");
var calcularDeNovo = $("#again");

var nome = $("#nome");
var sexo = $("#sexo");
var altura = $("#altura");
var peso = $("#peso");


form.submit(function () {
    $.ajax({
        type: "POST",
        url: "calculadora_imc.php",
        data: $(this).serialize(),
        success: function (respostaJSONvindaDoPHP) {
            // O JSON que recebemos precisa ser decodificado em um objeto para ser exibido
            objeto = JSON.parse(respostaJSONvindaDoPHP);
            trocaDeTelas();
            escreveResposta(objeto);
        },
        error: function () {
            alert("Ocorreu um erro!");
        }
    });
});

calcularDeNovo.click(trocaDeTelas);


function trocaDeTelas() {
 
    form.toggleClass('d-none');
    sessaoResposta.toggleClass('d-none');
    
    nome.val("");
    nome.focus();
    sexo.val("");
    altura.val("");
    peso.val("");
    
}

function escreveResposta(informacoes) {
    classificacao.html("<b>" + informacoes.resultado + "</b>");
    mensagemDeResposta.html(informacoes.mensagem);

}

