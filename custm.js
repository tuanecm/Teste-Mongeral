/* Atribui ao evento submit do formulário a função de validação de dados */
 
/* Atribui ao evento keypress do input data a função para formatar o data (dd/mm/yyyy) */
var inputData = document.getElementById("data");
if (inputData.addEventListener) {                   
    inputData.addEventListener("keypress", function(){mascaraTexto(this, '##/##/####')});
} else if (inputData.attachEvent) {                  
    inputData.attachEvent("onkeypress", function(){mascaraTexto(this, '##/##/####')});
}

/* Atribui ao evento keypress do input data a função para formatar o data (dd/mm/yyyy) */
var inputData = document.getElementById("data_busca");
if (inputData.addEventListener) {                   
    inputData.addEventListener("keypress", function(){mascaraTexto(this, '##/##/####')});
} else if (inputData.attachEvent) {                  
    inputData.attachEvent("onkeypress", function(){mascaraTexto(this, '##/##/####')});
}
 
 
 