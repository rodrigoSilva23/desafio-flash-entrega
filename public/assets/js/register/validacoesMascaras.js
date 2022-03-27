//**************************mascaras***************/

$(document).ready(function () {
  //****************CEP*********************** */

  var maskCep = function (val) {
      return val.replace(/\D/g, "").length === 9 ? "00000-000" : "00000-000";
    },
    options = {
      onKeyPress: function (val, e, field, options) {
        field.mask(maskCep.apply({}, arguments), options);
      },
    };

  $(".inputCep").mask(maskCep, options);

  // ***************************end*******************************/

  //***************************CEP********************************/

  const cepValidacao = document.getElementById("cepValidacao");
  //verifica as entrada do input.
  $("#cep").on("input", function () {
      var cep = $(this).val().replace(/\D/g, "");
    //Nova variável "cep" somente com dígitos.

    if (cep.length === 8) {
        //Expressão regular para validar o CEP.
        var validacep = /^[0-9]{8}$/;
        console.log(cep);

      //Valida o formato do CEP.
      if (validacep.test(cep)) {
          //Consulta o webservice viacep.com.br/
          $.getJSON(
              "https://viacep.com.br/ws/" + cep + "/json",
              function (dados) {
                  if (!("erro" in dados)) {
                      $("#cep").removeClass("is-invalid");
                      $("#cep").addClass("is-valid");
                      $(".isCep").addClass("showCep");
                      cepValidacao.innerHTML = "";

              //Atualiza os campos com os valores da consulta.
              $("#rua").val(dados.logradouro);
              $("#bairro").val(dados.bairro);
              $("#cidade").val(dados.localidade);
              $("#uf").val(dados.uf);
            } //end if.
            else {
                $("#cep").addClass("is-invalid");
                $("#cep").val("");
                cepValidacao.innerHTML = "CEP não encontrado.";
            }
        }
        );
    }
} //end if.
});
//Verifica se campo cep possui valor informado.
$("#cep").blur(function () {
    var cep = $(this).val().replace(/\D/g, "");
    if (cep.length < 8) {
        $("#cep").addClass("is-invalid");
        $("#cep").val("");
        cepValidacao.innerHTML = "Formato de CEP inválido.";
      }
    });
  // ***************************end*******************************/
});
