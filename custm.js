/* Atribui ao evento submit do formul�rio a fun��o de valida��o de dados */
 
/* Atribui ao evento keypress do input data a fun��o para formatar o data (dd/mm/yyyy) */
var inputData = document.getElementById("data");
if (inputData.addEventListener) {                   
    inputData.addEventListener("keypress", function(){mascaraTexto(this, '##/##/####')});
} else if (inputData.attachEvent) {                  
    inputData.attachEvent("onkeypress", function(){mascaraTexto(this, '##/##/####')});
}

/* Atribui ao evento keypress do input data a fun��o para formatar o data (dd/mm/yyyy) */
var inputData = document.getElementById("data_busca");
if (inputData.addEventListener) {                   
    inputData.addEventListener("keypress", function(){mascaraTexto(this, '##/##/####')});
} else if (inputData.attachEvent) {                  
    inputData.attachEvent("onkeypress", function(){mascaraTexto(this, '##/##/####')});
}
 
 
 